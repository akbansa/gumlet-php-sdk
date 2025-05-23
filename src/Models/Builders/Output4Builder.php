<?php

declare(strict_types=1);

/*
 * GumletRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace GumletRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use GumletRestApisLib\Models\Output4;

/**
 * Builder for model Output4
 *
 * @see Output4
 */
class Output4Builder
{
    /**
     * @var Output4
     */
    private $instance;

    private function __construct(Output4 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Output 4 Builder object.
     */
    public static function init(): self
    {
        return new self(new Output4());
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
     * Initializes a new Output 4 object.
     */
    public function build(): Output4
    {
        return CoreHelper::clone($this->instance);
    }
}
