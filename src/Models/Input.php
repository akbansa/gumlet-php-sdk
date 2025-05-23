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

class Input implements \JsonSerializable
{
    /**
     * @var Transformations|null
     */
    private $transformations;

    /**
     * @var string|null
     */
    private $profileId;

    /**
     * @var string|null
     */
    private $title;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var Metadata|null
     */
    private $metadata;

    /**
     * @var string|null
     */
    private $sourceUrl;

    /**
     * @var CallToAction1[]|null
     */
    private $callToActions;

    /**
     * Returns Transformations.
     */
    public function getTransformations(): ?Transformations
    {
        return $this->transformations;
    }

    /**
     * Sets Transformations.
     *
     * @maps transformations
     */
    public function setTransformations(?Transformations $transformations): void
    {
        $this->transformations = $transformations;
    }

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
     * Returns Title.
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Sets Title.
     *
     * @maps title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * Returns Description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Metadata.
     */
    public function getMetadata(): ?Metadata
    {
        return $this->metadata;
    }

    /**
     * Sets Metadata.
     *
     * @maps metadata
     */
    public function setMetadata(?Metadata $metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * Returns Source Url.
     */
    public function getSourceUrl(): ?string
    {
        return $this->sourceUrl;
    }

    /**
     * Sets Source Url.
     *
     * @maps source_url
     */
    public function setSourceUrl(?string $sourceUrl): void
    {
        $this->sourceUrl = $sourceUrl;
    }

    /**
     * Returns Call to Actions.
     *
     * @return CallToAction1[]|null
     */
    public function getCallToActions(): ?array
    {
        return $this->callToActions;
    }

    /**
     * Sets Call to Actions.
     *
     * @maps call_to_actions
     *
     * @param CallToAction1[]|null $callToActions
     */
    public function setCallToActions(?array $callToActions): void
    {
        $this->callToActions = $callToActions;
    }

    /**
     * Converts the Input object to a human-readable string representation.
     *
     * @return string The string representation of the Input object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Input',
            [
                'transformations' => $this->transformations,
                'profileId' => $this->profileId,
                'title' => $this->title,
                'description' => $this->description,
                'metadata' => $this->metadata,
                'sourceUrl' => $this->sourceUrl,
                'callToActions' => $this->callToActions
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
        if (isset($this->transformations)) {
            $json['transformations'] = $this->transformations;
        }
        if (isset($this->profileId)) {
            $json['profile_id']      = $this->profileId;
        }
        if (isset($this->title)) {
            $json['title']           = $this->title;
        }
        if (isset($this->description)) {
            $json['description']     = $this->description;
        }
        if (isset($this->metadata)) {
            $json['metadata']        = $this->metadata;
        }
        if (isset($this->sourceUrl)) {
            $json['source_url']      = $this->sourceUrl;
        }
        if (isset($this->callToActions)) {
            $json['call_to_actions'] = $this->callToActions;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
