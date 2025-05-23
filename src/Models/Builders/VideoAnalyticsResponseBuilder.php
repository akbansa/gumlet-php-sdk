<?php

declare(strict_types=1);

/*
 * GumletRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace GumletRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use GumletRestApisLib\Models\TopAsset;
use GumletRestApisLib\Models\VideoAnalyticsResponse;

/**
 * Builder for model VideoAnalyticsResponse
 *
 * @see VideoAnalyticsResponse
 */
class VideoAnalyticsResponseBuilder
{
    /**
     * @var VideoAnalyticsResponse
     */
    private $instance;

    private function __construct(VideoAnalyticsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Video Analytics Response Builder object.
     */
    public static function init(): self
    {
        return new self(new VideoAnalyticsResponse());
    }

    /**
     * Sets top assets field.
     *
     * @param TopAsset[]|null $value
     */
    public function topAssets(?array $value): self
    {
        $this->instance->setTopAssets($value);
        return $this;
    }

    /**
     * Initializes a new Video Analytics Response object.
     */
    public function build(): VideoAnalyticsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
