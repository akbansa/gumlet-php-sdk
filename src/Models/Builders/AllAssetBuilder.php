<?php

declare(strict_types=1);

/*
 * GumletRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace GumletRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use GumletRestApisLib\Models\AllAsset;
use GumletRestApisLib\Models\Input3;
use GumletRestApisLib\Models\Output;

/**
 * Builder for model AllAsset
 *
 * @see AllAsset
 */
class AllAssetBuilder
{
    /**
     * @var AllAsset
     */
    private $instance;

    private function __construct(AllAsset $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new All Asset Builder object.
     */
    public static function init(): self
    {
        return new self(new AllAsset());
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
     * Sets progress field.
     *
     * @param int|null $value
     */
    public function progress(?int $value): self
    {
        $this->instance->setProgress($value);
        return $this;
    }

    /**
     * Sets created at field.
     *
     * @param int|null $value
     */
    public function createdAt(?int $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets tag field.
     *
     * @param string|null $value
     */
    public function tag(?string $value): self
    {
        $this->instance->setTag($value);
        return $this;
    }

    /**
     * Sets source id field.
     *
     * @param string|null $value
     */
    public function sourceId(?string $value): self
    {
        $this->instance->setSourceId($value);
        return $this;
    }

    /**
     * Sets input field.
     *
     * @param Input3|null $value
     */
    public function input(?Input3 $value): self
    {
        $this->instance->setInput($value);
        return $this;
    }

    /**
     * Sets output field.
     *
     * @param Output|null $value
     */
    public function output(?Output $value): self
    {
        $this->instance->setOutput($value);
        return $this;
    }

    /**
     * Initializes a new All Asset object.
     */
    public function build(): AllAsset
    {
        return CoreHelper::clone($this->instance);
    }
}
