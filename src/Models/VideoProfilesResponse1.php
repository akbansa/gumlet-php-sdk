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

class VideoProfilesResponse1 implements \JsonSerializable
{
    /**
     * @var AllProfile[]|null
     */
    private $allProfiles;

    /**
     * @var int|null
     */
    private $totalProfileCount = 0;

    /**
     * @var int|null
     */
    private $currentOffset = 0;

    /**
     * Returns All Profiles.
     *
     * @return AllProfile[]|null
     */
    public function getAllProfiles(): ?array
    {
        return $this->allProfiles;
    }

    /**
     * Sets All Profiles.
     *
     * @maps all_profiles
     *
     * @param AllProfile[]|null $allProfiles
     */
    public function setAllProfiles(?array $allProfiles): void
    {
        $this->allProfiles = $allProfiles;
    }

    /**
     * Returns Total Profile Count.
     */
    public function getTotalProfileCount(): ?int
    {
        return $this->totalProfileCount;
    }

    /**
     * Sets Total Profile Count.
     *
     * @maps total_profile_count
     */
    public function setTotalProfileCount(?int $totalProfileCount): void
    {
        $this->totalProfileCount = $totalProfileCount;
    }

    /**
     * Returns Current Offset.
     */
    public function getCurrentOffset(): ?int
    {
        return $this->currentOffset;
    }

    /**
     * Sets Current Offset.
     *
     * @maps current_offset
     */
    public function setCurrentOffset(?int $currentOffset): void
    {
        $this->currentOffset = $currentOffset;
    }

    /**
     * Converts the VideoProfilesResponse1 object to a human-readable string representation.
     *
     * @return string The string representation of the VideoProfilesResponse1 object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'VideoProfilesResponse1',
            [
                'allProfiles' => $this->allProfiles,
                'totalProfileCount' => $this->totalProfileCount,
                'currentOffset' => $this->currentOffset
            ]
        );
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
        if (isset($this->allProfiles)) {
            $json['all_profiles']        = $this->allProfiles;
        }
        if (isset($this->totalProfileCount)) {
            $json['total_profile_count'] = $this->totalProfileCount;
        }
        if (isset($this->currentOffset)) {
            $json['current_offset']      = $this->currentOffset;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
