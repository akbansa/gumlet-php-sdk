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

/**
 * This transformation can be used to crop the video by defining a rectangular area within the
 * dimensions of the output video.
 */
class Crop implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $horizontalMargin;

    /**
     * @var string|null
     */
    private $verticalMargin;

    /**
     * @var string
     */
    private $width;

    /**
     * @var string
     */
    private $height;

    /**
     * @param string $width
     * @param string $height
     */
    public function __construct(string $width, string $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * Returns Horizontal Margin.
     * This parameter defines the horizontal coordinate value of the upper-left corner of the cropping area.
     * Values can be an absolute number of pixels or a percentage value relative to the video width.
     * **Default: `0`**
     */
    public function getHorizontalMargin(): ?string
    {
        return $this->horizontalMargin;
    }

    /**
     * Sets Horizontal Margin.
     * This parameter defines the horizontal coordinate value of the upper-left corner of the cropping area.
     * Values can be an absolute number of pixels or a percentage value relative to the video width.
     * **Default: `0`**
     *
     * @maps horizontal_margin
     */
    public function setHorizontalMargin(?string $horizontalMargin): void
    {
        $this->horizontalMargin = $horizontalMargin;
    }

    /**
     * Returns Vertical Margin.
     * This parameter defines the vertical coordinate value of the upper-left corner of the cropping area.
     * Values can be an absolute number of pixels or a percentage value relative to the video height.
     * **Default: `0`**
     */
    public function getVerticalMargin(): ?string
    {
        return $this->verticalMargin;
    }

    /**
     * Sets Vertical Margin.
     * This parameter defines the vertical coordinate value of the upper-left corner of the cropping area.
     * Values can be an absolute number of pixels or a percentage value relative to the video height.
     * **Default: `0`**
     *
     * @maps vertical_margin
     */
    public function setVerticalMargin(?string $verticalMargin): void
    {
        $this->verticalMargin = $verticalMargin;
    }

    /**
     * Returns Width.
     * Width of the cropping area in pixels.
     */
    public function getWidth(): string
    {
        return $this->width;
    }

    /**
     * Sets Width.
     * Width of the cropping area in pixels.
     *
     * @required
     * @maps width
     */
    public function setWidth(string $width): void
    {
        $this->width = $width;
    }

    /**
     * Returns Height.
     * Height of the cropping area in pixels.
     */
    public function getHeight(): string
    {
        return $this->height;
    }

    /**
     * Sets Height.
     * Height of the cropping area in pixels.
     *
     * @required
     * @maps height
     */
    public function setHeight(string $height): void
    {
        $this->height = $height;
    }

    /**
     * Converts the Crop object to a human-readable string representation.
     *
     * @return string The string representation of the Crop object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Crop',
            [
                'horizontalMargin' => $this->horizontalMargin,
                'verticalMargin' => $this->verticalMargin,
                'width' => $this->width,
                'height' => $this->height
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
        if (isset($this->horizontalMargin)) {
            $json['horizontal_margin'] = $this->horizontalMargin;
        }
        if (isset($this->verticalMargin)) {
            $json['vertical_margin']   = $this->verticalMargin;
        }
        $json['width']                 = $this->width;
        $json['height']                = $this->height;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
