<?php

declare(strict_types=1);

/*
 * GumletRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace GumletRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use GumletRestApisLib\Models\Sum;

/**
 * Builder for model Sum
 *
 * @see Sum
 */
class SumBuilder
{
    /**
     * @var Sum
     */
    private $instance;

    private function __construct(Sum $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Sum Builder object.
     */
    public static function init(): self
    {
        return new self(new Sum());
    }

    /**
     * Sets value field.
     *
     * @param int|null $value
     */
    public function value(?int $value): self
    {
        $this->instance->setValue($value);
        return $this;
    }

    /**
     * Sets unit field.
     *
     * @param string|null $value
     */
    public function unit(?string $value): self
    {
        $this->instance->setUnit($value);
        return $this;
    }

    /**
     * Initializes a new Sum object.
     */
    public function build(): Sum
    {
        return CoreHelper::clone($this->instance);
    }
}
