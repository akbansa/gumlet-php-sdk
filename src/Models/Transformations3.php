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

class Transformations3 implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $resolution;

    /**
     * @var string|null
     */
    private $format;

    /**
     * @var string[]|null
     */
    private $audioCodec;

    /**
     * @var string[]|null
     */
    private $videoCodec;

    /**
     * @var string[]|null
     */
    private $thumbnail;

    /**
     * @var string|null
     */
    private $thumbnailFormat;

    /**
     * @var bool|null
     */
    private $mp4Access = true;

    /**
     * @var bool|null
     */
    private $audioOnly = true;

    /**
     * @var bool|null
     */
    private $keepOriginal = true;

    /**
     * @var bool|null
     */
    private $perTitleEncoding = true;

    /**
     * @var bool|null
     */
    private $processLowResolutionInput = true;

    /**
     * Returns Resolution.
     */
    public function getResolution(): ?string
    {
        return $this->resolution;
    }

    /**
     * Sets Resolution.
     *
     * @maps resolution
     */
    public function setResolution(?string $resolution): void
    {
        $this->resolution = $resolution;
    }

    /**
     * Returns Format.
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }

    /**
     * Sets Format.
     *
     * @maps format
     */
    public function setFormat(?string $format): void
    {
        $this->format = $format;
    }

    /**
     * Returns Audio Codec.
     *
     * @return string[]|null
     */
    public function getAudioCodec(): ?array
    {
        return $this->audioCodec;
    }

    /**
     * Sets Audio Codec.
     *
     * @maps audio_codec
     *
     * @param string[]|null $audioCodec
     */
    public function setAudioCodec(?array $audioCodec): void
    {
        $this->audioCodec = $audioCodec;
    }

    /**
     * Returns Video Codec.
     *
     * @return string[]|null
     */
    public function getVideoCodec(): ?array
    {
        return $this->videoCodec;
    }

    /**
     * Sets Video Codec.
     *
     * @maps video_codec
     *
     * @param string[]|null $videoCodec
     */
    public function setVideoCodec(?array $videoCodec): void
    {
        $this->videoCodec = $videoCodec;
    }

    /**
     * Returns Thumbnail.
     *
     * @return string[]|null
     */
    public function getThumbnail(): ?array
    {
        return $this->thumbnail;
    }

    /**
     * Sets Thumbnail.
     *
     * @maps thumbnail
     *
     * @param string[]|null $thumbnail
     */
    public function setThumbnail(?array $thumbnail): void
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * Returns Thumbnail Format.
     */
    public function getThumbnailFormat(): ?string
    {
        return $this->thumbnailFormat;
    }

    /**
     * Sets Thumbnail Format.
     *
     * @maps thumbnail_format
     */
    public function setThumbnailFormat(?string $thumbnailFormat): void
    {
        $this->thumbnailFormat = $thumbnailFormat;
    }

    /**
     * Returns Mp 4 Access.
     */
    public function getMp4Access(): ?bool
    {
        return $this->mp4Access;
    }

    /**
     * Sets Mp 4 Access.
     *
     * @maps mp4_access
     */
    public function setMp4Access(?bool $mp4Access): void
    {
        $this->mp4Access = $mp4Access;
    }

    /**
     * Returns Audio Only.
     */
    public function getAudioOnly(): ?bool
    {
        return $this->audioOnly;
    }

    /**
     * Sets Audio Only.
     *
     * @maps audio_only
     */
    public function setAudioOnly(?bool $audioOnly): void
    {
        $this->audioOnly = $audioOnly;
    }

    /**
     * Returns Keep Original.
     */
    public function getKeepOriginal(): ?bool
    {
        return $this->keepOriginal;
    }

    /**
     * Sets Keep Original.
     *
     * @maps keep_original
     */
    public function setKeepOriginal(?bool $keepOriginal): void
    {
        $this->keepOriginal = $keepOriginal;
    }

    /**
     * Returns Per Title Encoding.
     */
    public function getPerTitleEncoding(): ?bool
    {
        return $this->perTitleEncoding;
    }

    /**
     * Sets Per Title Encoding.
     *
     * @maps per_title_encoding
     */
    public function setPerTitleEncoding(?bool $perTitleEncoding): void
    {
        $this->perTitleEncoding = $perTitleEncoding;
    }

    /**
     * Returns Process Low Resolution Input.
     */
    public function getProcessLowResolutionInput(): ?bool
    {
        return $this->processLowResolutionInput;
    }

    /**
     * Sets Process Low Resolution Input.
     *
     * @maps process_low_resolution_input
     */
    public function setProcessLowResolutionInput(?bool $processLowResolutionInput): void
    {
        $this->processLowResolutionInput = $processLowResolutionInput;
    }

    /**
     * Converts the Transformations3 object to a human-readable string representation.
     *
     * @return string The string representation of the Transformations3 object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Transformations3',
            [
                'resolution' => $this->resolution,
                'format' => $this->format,
                'audioCodec' => $this->audioCodec,
                'videoCodec' => $this->videoCodec,
                'thumbnail' => $this->thumbnail,
                'thumbnailFormat' => $this->thumbnailFormat,
                'mp4Access' => $this->mp4Access,
                'audioOnly' => $this->audioOnly,
                'keepOriginal' => $this->keepOriginal,
                'perTitleEncoding' => $this->perTitleEncoding,
                'processLowResolutionInput' => $this->processLowResolutionInput
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
        if (isset($this->resolution)) {
            $json['resolution']                   = $this->resolution;
        }
        if (isset($this->format)) {
            $json['format']                       = $this->format;
        }
        if (isset($this->audioCodec)) {
            $json['audio_codec']                  = $this->audioCodec;
        }
        if (isset($this->videoCodec)) {
            $json['video_codec']                  = $this->videoCodec;
        }
        if (isset($this->thumbnail)) {
            $json['thumbnail']                    = $this->thumbnail;
        }
        if (isset($this->thumbnailFormat)) {
            $json['thumbnail_format']             = $this->thumbnailFormat;
        }
        if (isset($this->mp4Access)) {
            $json['mp4_access']                   = $this->mp4Access;
        }
        if (isset($this->audioOnly)) {
            $json['audio_only']                   = $this->audioOnly;
        }
        if (isset($this->keepOriginal)) {
            $json['keep_original']                = $this->keepOriginal;
        }
        if (isset($this->perTitleEncoding)) {
            $json['per_title_encoding']           = $this->perTitleEncoding;
        }
        if (isset($this->processLowResolutionInput)) {
            $json['process_low_resolution_input'] = $this->processLowResolutionInput;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
