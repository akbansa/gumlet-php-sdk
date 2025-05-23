<?php

declare(strict_types=1);

/*
 * GumletRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace GumletRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use GumletRestApisLib\Models\AllProfile;
use GumletRestApisLib\Models\Transformations4;

/**
 * Builder for model AllProfile
 *
 * @see AllProfile
 */
class AllProfileBuilder
{
    /**
     * @var AllProfile
     */
    private $instance;

    private function __construct(AllProfile $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new All Profile Builder object.
     */
    public static function init(): self
    {
        return new self(new AllProfile());
    }

    /**
     * Sets profile id field.
     *
     * @param string|null $value
     */
    public function profileId(?string $value): self
    {
        $this->instance->setProfileId($value);
        return $this;
    }

    /**
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets transformations field.
     *
     * @param Transformations4|null $value
     */
    public function transformations(?Transformations4 $value): self
    {
        $this->instance->setTransformations($value);
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
     * Sets updated at field.
     *
     * @param int|null $value
     */
    public function updatedAt(?int $value): self
    {
        $this->instance->setUpdatedAt($value);
        return $this;
    }

    /**
     * Initializes a new All Profile object.
     */
    public function build(): AllProfile
    {
        return CoreHelper::clone($this->instance);
    }
}
