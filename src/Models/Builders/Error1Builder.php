<?php

declare(strict_types=1);

/*
 * GumletRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace GumletRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use GumletRestApisLib\Models\Error1;

/**
 * Builder for model Error1
 *
 * @see Error1
 */
class Error1Builder
{
    /**
     * @var Error1
     */
    private $instance;

    private function __construct(Error1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Error 1 Builder object.
     */
    public static function init(): self
    {
        return new self(new Error1());
    }

    /**
     * Sets code field.
     *
     * @param string|null $value
     */
    public function code(?string $value): self
    {
        $this->instance->setCode($value);
        return $this;
    }

    /**
     * Sets message field.
     *
     * @param string|null $value
     */
    public function message(?string $value): self
    {
        $this->instance->setMessage($value);
        return $this;
    }

    /**
     * Initializes a new Error 1 object.
     */
    public function build(): Error1
    {
        return CoreHelper::clone($this->instance);
    }
}
