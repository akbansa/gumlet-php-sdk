<?php

declare(strict_types=1);

/*
 * GumletRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace GumletRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use GumletRestApisLib\Models\Input1;
use GumletRestApisLib\Models\Output;
use GumletRestApisLib\Models\VideoAssetsUploadResponse;

/**
 * Builder for model VideoAssetsUploadResponse
 *
 * @see VideoAssetsUploadResponse
 */
class VideoAssetsUploadResponseBuilder
{
    /**
     * @var VideoAssetsUploadResponse
     */
    private $instance;

    private function __construct(VideoAssetsUploadResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Video Assets Upload Response Builder object.
     */
    public static function init(): self
    {
        return new self(new VideoAssetsUploadResponse());
    }

    /**
     * Sets asset id field.
     *
     * @param string|null $value
     */
    public function assetId(?string $value): self
    {
        $this->instance->setAssetId($value);
        return $this;
    }

    /**
     * Sets progress field.
     *
     * @param int|null $value
     */
    public function progress(?int $value): self
    {
        $this->instance->setProgress($value);
        return $this;
    }

    /**
     * Sets created at field.
     *
     * @param int|null $value
     */
    public function createdAt(?int $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets updated at field.
     *
     * @param int|null $value
     */
    public function updatedAt(?int $value): self
    {
        $this->instance->setUpdatedAt($value);
        return $this;
    }

    /**
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets tag field.
     *
     * @param string[]|null $value
     */
    public function tag(?array $value): self
    {
        $this->instance->setTag($value);
        return $this;
    }

    /**
     * Sets source id field.
     *
     * @param string|null $value
     */
    public function sourceId(?string $value): self
    {
        $this->instance->setSourceId($value);
        return $this;
    }

    /**
     * Sets collection id field.
     *
     * @param string|null $value
     */
    public function collectionId(?string $value): self
    {
        $this->instance->setCollectionId($value);
        return $this;
    }

    /**
     * Sets input field.
     *
     * @param Input1|null $value
     */
    public function input(?Input1 $value): self
    {
        $this->instance->setInput($value);
        return $this;
    }

    /**
     * Sets output field.
     *
     * @param Output|null $value
     */
    public function output(?Output $value): self
    {
        $this->instance->setOutput($value);
        return $this;
    }

    /**
     * Sets upload url field.
     *
     * @param string|null $value
     */
    public function uploadUrl(?string $value): self
    {
        $this->instance->setUploadUrl($value);
        return $this;
    }

    /**
     * Sets playlists field.
     *
     * @param string[]|null $value
     */
    public function playlists(?array $value): self
    {
        $this->instance->setPlaylists($value);
        return $this;
    }

    /**
     * Initializes a new Video Assets Upload Response object.
     */
    public function build(): VideoAssetsUploadResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
