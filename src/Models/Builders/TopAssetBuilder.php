<?php

declare(strict_types=1);

/*
 * GumletRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace GumletRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use GumletRestApisLib\Models\TopAsset;

/**
 * Builder for model TopAsset
 *
 * @see TopAsset
 */
class TopAssetBuilder
{
    /**
     * @var TopAsset
     */
    private $instance;

    private function __construct(TopAsset $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Top Asset Builder object.
     */
    public static function init(): self
    {
        return new self(new TopAsset());
    }

    /**
     * Sets collection id field.
     *
     * @param string|null $value
     */
    public function collectionId(?string $value): self
    {
        $this->instance->setCollectionId($value);
        return $this;
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
     * Sets collection name field.
     *
     * @param string|null $value
     */
    public function collectionName(?string $value): self
    {
        $this->instance->setCollectionName($value);
        return $this;
    }

    /**
     * Initializes a new Top Asset object.
     */
    public function build(): TopAsset
    {
        return CoreHelper::clone($this->instance);
    }
}
