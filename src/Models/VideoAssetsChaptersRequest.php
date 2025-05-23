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

class VideoAssetsChaptersRequest implements \JsonSerializable
{
    /**
     * @var Chapter1[]
     */
    private $chapters;

    /**
     * @param Chapter1[] $chapters
     */
    public function __construct(array $chapters)
    {
        $this->chapters = $chapters;
    }

    /**
     * Returns Chapters.
     *
     * @return Chapter1[]
     */
    public function getChapters(): array
    {
        return $this->chapters;
    }

    /**
     * Sets Chapters.
     *
     * @required
     * @maps chapters
     *
     * @param Chapter1[] $chapters
     */
    public function setChapters(array $chapters): void
    {
        $this->chapters = $chapters;
    }

    /**
     * Converts the VideoAssetsChaptersRequest object to a human-readable string representation.
     *
     * @return string The string representation of the VideoAssetsChaptersRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('VideoAssetsChaptersRequest', ['chapters' => $this->chapters]);
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
        $json['chapters'] = $this->chapters;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
