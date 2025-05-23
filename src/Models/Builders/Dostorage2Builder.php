<?php

declare(strict_types=1);

/*
 * GumletRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace GumletRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use GumletRestApisLib\Models\Dostorage2;

/**
 * Builder for model Dostorage2
 *
 * @see Dostorage2
 */
class Dostorage2Builder
{
    /**
     * @var Dostorage2
     */
    private $instance;

    private function __construct(Dostorage2 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Dostorage 2 Builder object.
     *
     * @param string $bucketName
     * @param string $bucketRegion
     * @param string $accessKey
     * @param string $secret
     */
    public static function init(string $bucketName, string $bucketRegion, string $accessKey, string $secret): self
    {
        return new self(new Dostorage2($bucketName, $bucketRegion, $accessKey, $secret));
    }

    /**
     * Sets base path field.
     *
     * @param string|null $value
     */
    public function basePath(?string $value): self
    {
        $this->instance->setBasePath($value);
        return $this;
    }

    /**
     * Initializes a new Dostorage 2 object.
     */
    public function build(): Dostorage2
    {
        return CoreHelper::clone($this->instance);
    }
}
