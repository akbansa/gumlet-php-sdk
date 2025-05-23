<?php

declare(strict_types=1);

/*
 * GumletRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace GumletRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use GumletRestApisLib\Models\OrgWebhooksRequest;

/**
 * Builder for model OrgWebhooksRequest
 *
 * @see OrgWebhooksRequest
 */
class OrgWebhooksRequestBuilder
{
    /**
     * @var OrgWebhooksRequest
     */
    private $instance;

    private function __construct(OrgWebhooksRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Org Webhooks Request Builder object.
     *
     * @param string $url
     * @param string $secretToken
     * @param string[] $triggers
     * @param string[] $sources
     */
    public static function init(string $url, string $secretToken, array $triggers, array $sources): self
    {
        return new self(new OrgWebhooksRequest($url, $secretToken, $triggers, $sources));
    }

    /**
     * Initializes a new Org Webhooks Request object.
     */
    public function build(): OrgWebhooksRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
