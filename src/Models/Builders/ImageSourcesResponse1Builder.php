<?php

declare(strict_types=1);

/*
 * GumletRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace GumletRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use GumletRestApisLib\Models\AllSource;
use GumletRestApisLib\Models\ImageSourcesResponse1;

/**
 * Builder for model ImageSourcesResponse1
 *
 * @see ImageSourcesResponse1
 */
class ImageSourcesResponse1Builder
{
    /**
     * @var ImageSourcesResponse1
     */
    private $instance;

    private function __construct(ImageSourcesResponse1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Image Sources Response 1 Builder object.
     */
    public static function init(): self
    {
        return new self(new ImageSourcesResponse1());
    }

    /**
     * Sets all sources field.
     *
     * @param AllSource[]|null $value
     */
    public function allSources(?array $value): self
    {
        $this->instance->setAllSources($value);
        return $this;
    }

    /**
     * Initializes a new Image Sources Response 1 object.
     */
    public function build(): ImageSourcesResponse1
    {
        return CoreHelper::clone($this->instance);
    }
}
