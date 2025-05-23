<?php

declare(strict_types=1);

/*
 * GumletRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace GumletRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use GumletRestApisLib\Models\Datum;

/**
 * Builder for model Datum
 *
 * @see Datum
 */
class DatumBuilder
{
    /**
     * @var Datum
     */
    private $instance;

    private function __construct(Datum $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Datum Builder object.
     */
    public static function init(): self
    {
        return new self(new Datum());
    }

    /**
     * Sets asset id field.
     *
     * @param string|null $value
     */
    public function assetId(?string $value): self
    {
        $this->instance->setAssetId($value);
        return $this;
    }

    /**
     * Sets units field.
     *
     * @param int|null $value
     */
    public function units(?int $value): self
    {
        $this->instance->setUnits($value);
        return $this;
    }

    /**
     * Initializes a new Datum object.
     */
    public function build(): Datum
    {
        return CoreHelper::clone($this->instance);
    }
}
