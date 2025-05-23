<?php

declare(strict_types=1);

/*
 * GumletRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace GumletRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use GumletRestApisLib\Models\OrgWebhooksRequest1;

/**
 * Builder for model OrgWebhooksRequest1
 *
 * @see OrgWebhooksRequest1
 */
class OrgWebhooksRequest1Builder
{
    /**
     * @var OrgWebhooksRequest1
     */
    private $instance;

    private function __construct(OrgWebhooksRequest1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Org Webhooks Request 1 Builder object.
     */
    public static function init(): self
    {
        return new self(new OrgWebhooksRequest1());
    }

    /**
     * Sets url field.
     *
     * @param string|null $value
     */
    public function url(?string $value): self
    {
        $this->instance->setUrl($value);
        return $this;
    }

    /**
     * Sets secret token field.
     *
     * @param string|null $value
     */
    public function secretToken(?string $value): self
    {
        $this->instance->setSecretToken($value);
        return $this;
    }

    /**
     * Sets triggers field.
     *
     * @param string|null $value
     */
    public function triggers(?string $value): self
    {
        $this->instance->setTriggers($value);
        return $this;
    }

    /**
     * Sets sources field.
     *
     * @param string|null $value
     */
    public function sources(?string $value): self
    {
        $this->instance->setSources($value);
        return $this;
    }

    /**
     * Initializes a new Org Webhooks Request 1 object.
     */
    public function build(): OrgWebhooksRequest1
    {
        return CoreHelper::clone($this->instance);
    }
}
