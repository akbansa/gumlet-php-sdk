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

class AllProfile implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $profileId;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var Transformations4|null
     */
    private $transformations;

    /**
     * @var int|null
     */
    private $createdAt = 0;

    /**
     * @var int|null
     */
    private $updatedAt = 0;

    /**
     * Returns Profile Id.
     */
    public function getProfileId(): ?string
    {
        return $this->profileId;
    }

    /**
     * Sets Profile Id.
     *
     * @maps profile_id
     */
    public function setProfileId(?string $profileId): void
    {
        $this->profileId = $profileId;
    }

    /**
     * Returns Name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Transformations.
     */
    public function getTransformations(): ?Transformations4
    {
        return $this->transformations;
    }

    /**
     * Sets Transformations.
     *
     * @maps transformations
     */
    public function setTransformations(?Transformations4 $transformations): void
    {
        $this->transformations = $transformations;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): ?int
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     */
    public function setCreatedAt(?int $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     */
    public function getUpdatedAt(): ?int
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     *
     * @maps updated_at
     */
    public function setUpdatedAt(?int $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Converts the AllProfile object to a human-readable string representation.
     *
     * @return string The string representation of the AllProfile object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'AllProfile',
            [
                'profileId' => $this->profileId,
                'name' => $this->name,
                'transformations' => $this->transformations,
                'createdAt' => $this->createdAt,
                'updatedAt' => $this->updatedAt
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
        if (isset($this->profileId)) {
            $json['profile_id']      = $this->profileId;
        }
        if (isset($this->name)) {
            $json['name']            = $this->name;
        }
        if (isset($this->transformations)) {
            $json['transformations'] = $this->transformations;
        }
        if (isset($this->createdAt)) {
            $json['created_at']      = $this->createdAt;
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']      = $this->updatedAt;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
