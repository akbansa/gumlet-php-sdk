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

class Datum implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $assetId;

    /**
     * @var int|null
     */
    private $units = 0;

    /**
     * Returns Asset Id.
     */
    public function getAssetId(): ?string
    {
        return $this->assetId;
    }

    /**
     * Sets Asset Id.
     *
     * @maps asset_id
     */
    public function setAssetId(?string $assetId): void
    {
        $this->assetId = $assetId;
    }

    /**
     * Returns Units.
     */
    public function getUnits(): ?int
    {
        return $this->units;
    }

    /**
     * Sets Units.
     *
     * @maps units
     */
    public function setUnits(?int $units): void
    {
        $this->units = $units;
    }

    /**
     * Converts the Datum object to a human-readable string representation.
     *
     * @return string The string representation of the Datum object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('Datum', ['assetId' => $this->assetId, 'units' => $this->units]);
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
        if (isset($this->assetId)) {
            $json['asset_id'] = $this->assetId;
        }
        if (isset($this->units)) {
            $json['units']    = $this->units;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
