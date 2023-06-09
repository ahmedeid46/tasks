<?php

/**
 * Vonage Client Library for PHP
 *
 * @copyright Copyright (c) 2016-2022 Vonage, Inc. (http://vonage.com)
 * @license https://github.com/Vonage/vonage-php-sdk-core/blob/master/LICENSE.txt Apache License 2.0
 */

declare(strict_types=1);

namespace Vonage\SMS\Message;

class Binary extends OutboundMessage
{
    /**
     * @var string
     */
    protected string $type = 'binary';

    public function __construct(string $to, string $from, protected string $body, protected string $udh, protected ?int $protocolId = null)
    {
        parent::__construct($to, $from);
    }

    /**
     * @return mixed
     */
    public function toArray(): array
    {
        $data = [
            'body' => $this->getBody(),
            'udh' => $this->getUdh(),
        ];

        if ($this->getProtocolId()) {
            $data['protocol-id'] = $this->getProtocolId();
        }

        $data = $this->appendUniversalOptions($data);

        return $data;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getUdh(): string
    {
        return $this->udh;
    }

    public function getProtocolId(): ?int
    {
        return $this->protocolId;
    }
}
