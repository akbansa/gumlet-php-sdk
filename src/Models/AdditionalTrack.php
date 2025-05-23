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

class AdditionalTrack implements \JsonSerializable
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $languageCode;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @param string $url
     * @param string $type
     * @param string $languageCode
     */
    public function __construct(string $url, string $type, string $languageCode)
    {
        $this->url = $url;
        $this->type = $type;
        $this->languageCode = $languageCode;
    }

    /**
     * Returns Url.
     * URL or web address of a file that Gumlet should download to add a stream.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Sets Url.
     * URL or web address of a file that Gumlet should download to add a stream.
     *
     * @required
     * @maps url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * Returns Type.
     * Type of additional track. Value can be either audio or subtitle.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Type of additional track. Value can be either audio or subtitle.
     *
     * @required
     * @maps type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Language Code.
     * The language code value represents BCP 47 specification compliant value. For example, en for English.
     */
    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    /**
     * Sets Language Code.
     * The language code value represents BCP 47 specification compliant value. For example, en for English.
     *
     * @required
     * @maps language_code
     */
    public function setLanguageCode(string $languageCode): void
    {
        $this->languageCode = $languageCode;
    }

    /**
     * Returns Name.
     * The name of the track containing a human-readable description.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The name of the track containing a human-readable description.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Converts the AdditionalTrack object to a human-readable string representation.
     *
     * @return string The string representation of the AdditionalTrack object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'AdditionalTrack',
            [
                'url' => $this->url,
                'type' => $this->type,
                'languageCode' => $this->languageCode,
                'name' => $this->name
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
        $json['url']           = $this->url;
        $json['type']          = $this->type;
        $json['language_code'] = $this->languageCode;
        if (isset($this->name)) {
            $json['name']      = $this->name;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
