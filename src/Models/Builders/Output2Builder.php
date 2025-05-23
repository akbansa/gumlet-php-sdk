<?php

declare(strict_types=1);

/*
 * GumletRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace GumletRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use GumletRestApisLib\Models\Output2;
use GumletRestApisLib\Models\StorageDetails;

/**
 * Builder for model Output2
 *
 * @see Output2
 */
class Output2Builder
{
    /**
     * @var Output2
     */
    private $instance;

    private function __construct(Output2 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Output 2 Builder object.
     */
    public static function init(): self
    {
        return new self(new Output2());
    }

    /**
     * Sets format field.
     *
     * @param string|null $value
     */
    public function format(?string $value): self
    {
        $this->instance->setFormat($value);
        return $this;
    }

    /**
     * Sets status url field.
     *
     * @param string|null $value
     */
    public function statusUrl(?string $value): self
    {
        $this->instance->setStatusUrl($value);
        return $this;
    }

    /**
     * Sets playback url field.
     *
     * @param string|null $value
     */
    public function playbackUrl(?string $value): self
    {
        $this->instance->setPlaybackUrl($value);
        return $this;
    }

    /**
     * Sets dash playback url field.
     *
     * @param string|null $value
     */
    public function dashPlaybackUrl(?string $value): self
    {
        $this->instance->setDashPlaybackUrl($value);
        return $this;
    }

    /**
     * Sets thumbnail url field.
     *
     * @param string[]|null $value
     */
    public function thumbnailUrl(?array $value): self
    {
        $this->instance->setThumbnailUrl($value);
        return $this;
    }

    /**
     * Sets storage details field.
     *
     * @param StorageDetails|null $value
     */
    public function storageDetails(?StorageDetails $value): self
    {
        $this->instance->setStorageDetails($value);
        return $this;
    }

    /**
     * Sets transcription word level timestamps field.
     *
     * @param string|null $value
     */
    public function transcriptionWordLevelTimestamps(?string $value): self
    {
        $this->instance->setTranscriptionWordLevelTimestamps($value);
        return $this;
    }

    /**
     * Sets storage bytes field.
     *
     * @param int|null $value
     */
    public function storageBytes(?int $value): self
    {
        $this->instance->setStorageBytes($value);
        return $this;
    }

    /**
     * Sets preview thumbnails url field.
     *
     * @param string|null $value
     */
    public function previewThumbnailsUrl(?string $value): self
    {
        $this->instance->setPreviewThumbnailsUrl($value);
        return $this;
    }

    /**
     * Initializes a new Output 2 object.
     */
    public function build(): Output2
    {
        return CoreHelper::clone($this->instance);
    }
}
