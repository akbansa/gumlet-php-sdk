<?php

declare(strict_types=1);

/*
 * GumletRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace GumletRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use GumletRestApisLib\Models\Aggregate;

/**
 * Builder for model Aggregate
 *
 * @see Aggregate
 */
class AggregateBuilder
{
    /**
     * @var Aggregate
     */
    private $instance;

    private function __construct(Aggregate $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Aggregate Builder object.
     *
     * @param string $metric
     * @param string $function
     */
    public static function init(string $metric, string $function): self
    {
        return new self(new Aggregate($metric, $function));
    }

    /**
     * Initializes a new Aggregate object.
     */
    public function build(): Aggregate
    {
        return CoreHelper::clone($this->instance);
    }
}
