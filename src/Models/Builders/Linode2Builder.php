<?php

declare(strict_types=1);

/*
 * GumletRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace GumletRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use GumletRestApisLib\Models\Linode2;

/**
 * Builder for model Linode2
 *
 * @see Linode2
 */
class Linode2Builder
{
    /**
     * @var Linode2
     */
    private $instance;

    private function __construct(Linode2 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Linode 2 Builder object.
     *
     * @param string $bucketName
     * @param string $bucketRegion
     * @param string $accessKey
     * @param string $secret
     */
    public static function init(string $bucketName, string $bucketRegion, string $accessKey, string $secret): self
    {
        return new self(new Linode2($bucketName, $bucketRegion, $accessKey, $secret));
    }

    /**
     * Initializes a new Linode 2 object.
     */
    public function build(): Linode2
    {
        return CoreHelper::clone($this->instance);
    }
}
