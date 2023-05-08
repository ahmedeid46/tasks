<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Helper\Files;
use App\Helper\Reply;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\GlobalSetting;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Models\SuperAdmin\GlobalInvoice;
use App\Models\SuperAdmin\OfflineInvoice;
use App\Models\SuperAdmin\OfflinePlanChange;
use App\Models\SuperAdmin\GlobalSubscription;
use App\Http\Controllers\AccountBaseController;
use App\DataTables\SuperAdmin\OfflinePlanChangeDataTable;
use App\Http\Requests\SuperAdmin\Billing\OfflinePlanChangeRequest;

class OfflinePlanChangeController extends AccountBaseController
{

    /**
     * SuperAdminInvoiceController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->pageTitle = __('superadmin.menu.offlineRequest');
        $this->pageIcon = 'icon-settings';
    }

    /**
     * Display edit form of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(OfflinePlanChangeDataTable $dataTable)
    {
        $this->global = GlobalSetting::first();
        $this->totalRequest = OfflinePlanChange::count();

        return $dataTable->render('super-admin.offline-plan-change.index', $this->data);
    }

    public function show($id)
    {
        $this->offlinePlanChange = OfflinePlanChange::with('company', 'package', 'offlineMethod')->findOrFail($id);
        $this->pageTitle = $this->offlinePlanChange->company->company_name;
        $this->view = 'super-admin.offline-plan-change.ajax.show';


        if (request()->ajax()) {
            $html = view($this->view, $this->data)->render();

            return Reply::dataOnly(['status' => 'success', 'html' => $html, 'title' => $this->pageTitle]);
        }

        return view('super-admin.offline-plan-change.show', $this->data);
    }

    public function confirmChangePlan($id, $status)
    {
        $this->offlinePlanChange = OfflinePlanChange::with('company')->findOrFail($id);
        $this->pageTitle = $this->offlinePlanChange->company->company_name;
        $view = 'super-admin.offline-plan-change.ajax.reject';

        if($status == 'verified')
        {
            $view = 'super-admin.offline-plan-change.ajax.verify';
        }

        return view($view, $this->data);
    }

    public function changePlan(OfflinePlanChangeRequest $request)
    {
        $offlinePlanChange = OfflinePlanChange::with('package')->findOrFail($request->id);

        if ($request->status == 'verified')
        {
            GlobalSubscription::where('company_id', $offlinePlanChange->company_id)->update(['subscription_status' => 'inactive']);

            $offlinePlanChange->pay_date = Carbon::createFromFormat($this->global->date_format, $request->pay_date)->format('Y-m-d');
            $offlinePlanChange->next_pay_date = Carbon::createFromFormat($this->global->date_format, $request->next_pay_date)->format('Y-m-d');
            $offlinePlanChange->status = 'verified';

            $subscription = new GlobalSubscription();
            $subscription->company_id = $offlinePlanChange->company_id;
            $subscription->package_id = $offlinePlanChange->package_id;
            $subscription->package_type = $offlinePlanChange->package_type;
            $subscription->gateway_name = 'offline';
            $subscription->subscription_status = 'active';
            $subscription->subscribed_on_date = Carbon::createFromFormat($this->global->date_format, $request->pay_date)->format('Y-m-d');
            $subscription->save();

            $invoice = new GlobalInvoice();
            $invoice->company_id = $offlinePlanChange->company_id;
            $invoice->global_subscription_id = $subscription->id;
            $invoice->package_id = $offlinePlanChange->package_id;
            $invoice->currency_id = $offlinePlanChange->package->currency_id;
            $invoice->offline_method_id = $offlinePlanChange->offline_method_id;
            $invoice->package_type = $offlinePlanChange->package_type;
            $invoice->total = $offlinePlanChange->amount;
            $invoice->gateway_name = 'offline';
            $invoice->status = 'active';
            $invoice->pay_date = Carbon::createFromFormat($this->global->date_format, $request->pay_date)->format('Y-m-d');
            $invoice->next_pay_date = Carbon::createFromFormat($this->global->date_format, $request->next_pay_date)->format('Y-m-d');
            $invoice->save();

            // Change company package
            $company = Company::find($offlinePlanChange->company_id);
            $company->package_id = $offlinePlanChange->package_id;
            $company->package_type = $offlinePlanChange->package_type;
            $company->save();
        }
        elseif ($request->status == 'rejected')
        {
            $offlinePlanChange->remark = $request->remark;
            $offlinePlanChange->status = 'rejected';
        }

        // set status of request verified
        $offlinePlanChange->save();

        return Reply::success('messages.updateSuccess');
    }

    /**
     * @param int $id
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse|\Symfony\Component\HttpFoundation\StreamedResponse
     */
    public function download($id)
    {
        $file = OfflinePlanChange::whereRaw('md5(id) = ?', $id)->firstOrFail();

        $ext = pathinfo($file->filename, PATHINFO_EXTENSION);
        $filename = $file->name ? $file->name . '.' . $ext : $file->filename;
        return response()->download(public_path(Files::UPLOAD_FOLDER  . '/' .OfflinePlanChange::FILE_PATH . '/' . $file->file_name), $filename);
    }

}
