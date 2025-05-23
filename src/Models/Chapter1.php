<?php

declare(strict_types=1);

/*
 * GumletRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace GumletRestApisLib\Models;

use GumletRestApisLib\ApiHelper;
use stdClass;

class Chapter1 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $label;

    /**
     * @var int
     */
    private $endTime;

    /**
     * @param string $label
     * @param int $endTime
     */
    public function __construct(string $label, int $endTime)
    {
        $this->label = $label;
        $this->endTime = $endTime;
    }

    /**
     * Returns Label.
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * Sets Label.
     *
     * @required
     * @maps label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * Returns End Time.
     */
    public function getEndTime(): int
    {
        return $this->endTime;
    }

    /**
     * Sets End Time.
     *
     * @required
     * @maps endTime
     */
    public function setEndTime(int $endTime): void
    {
        $this->endTime = $endTime;
    }

    /**
     * Converts the Chapter1 object to a human-readable string representation.
     *
     * @return string The string representation of the Chapter1 object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('Chapter1', ['label' => $this->label, 'endTime' => $this->endTime]);
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['label']   = $this->label;
        $json['endTime'] = $this->endTime;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
