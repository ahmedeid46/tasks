<?php

declare(strict_types=1);

/*
 * This file is part of Laravel GitLab.
 *
 * (c) Graham Campbell <hello@gjcampbell.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\GitLab\Auth\Authenticator;

use Gitlab\Client;
use InvalidArgumentException;

/**
 * This is the abstract authenticator class.
 *
 * @author Graham Campbell <hello@gjcampbell.co.uk>
 */
abstract class AbstractAuthenticator implements AuthenticatorInterface
{
    /**
     * The client to perform the authentication on.
     *
     * @var \Gitlab\Client|null
     */
    private ?Client $client = null;

    /**
     * Set the client to perform the authentication on.
     *
     * @param \Gitlab\Client $client
     *
     * @return \GrahamCampbell\GitLab\Auth\Authenticator\AuthenticatorInterface
     */
    public function with(Client $client): AuthenticatorInterface
    {
        $this->client = $client;

        return $this;
    }

    /**
     * @throws \InvalidArgumentException
     *
     * @return \Gitlab\Client
     */
    protected function getClient(): Client
    {
        if (!$this->client) {
            throw new InvalidArgumentException('The client instance was not given to the authenticator.');
        }

        return $this->client;
    }
}
