<?php

declare(strict_types=1);

/*
 * GumletRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace GumletRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use GumletRestApisLib\Models\DateRange1;

/**
 * Builder for model DateRange1
 *
 * @see DateRange1
 */
class DateRange1Builder
{
    /**
     * @var DateRange1
     */
    private $instance;

    private function __construct(DateRange1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Date Range 1 Builder object.
     */
    public static function init(): self
    {
        return new self(new DateRange1());
    }

    /**
     * Sets start at field.
     *
     * @param \DateTime|null $value
     */
    public function startAt(?\DateTime $value): self
    {
        $this->instance->setStartAt($value);
        return $this;
    }

    /**
     * Sets end at field.
     *
     * @param \DateTime|null $value
     */
    public function endAt(?\DateTime $value): self
    {
        $this->instance->setEndAt($value);
        return $this;
    }

    /**
     * Initializes a new Date Range 1 object.
     */
    public function build(): DateRange1
    {
        return CoreHelper::clone($this->instance);
    }
}
