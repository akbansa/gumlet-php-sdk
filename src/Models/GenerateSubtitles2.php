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

class GenerateSubtitles2 implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $audioLanguage;

    /**
     * @var string[]|null
     */
    private $subtitleLanguages;

    /**
     * Returns Audio Language.
     */
    public function getAudioLanguage(): ?string
    {
        return $this->audioLanguage;
    }

    /**
     * Sets Audio Language.
     *
     * @maps audio_language
     */
    public function setAudioLanguage(?string $audioLanguage): void
    {
        $this->audioLanguage = $audioLanguage;
    }

    /**
     * Returns Subtitle Languages.
     *
     * @return string[]|null
     */
    public function getSubtitleLanguages(): ?array
    {
        return $this->subtitleLanguages;
    }

    /**
     * Sets Subtitle Languages.
     *
     * @maps subtitle_languages
     *
     * @param string[]|null $subtitleLanguages
     */
    public function setSubtitleLanguages(?array $subtitleLanguages): void
    {
        $this->subtitleLanguages = $subtitleLanguages;
    }

    /**
     * Converts the GenerateSubtitles2 object to a human-readable string representation.
     *
     * @return string The string representation of the GenerateSubtitles2 object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'GenerateSubtitles2',
            ['audioLanguage' => $this->audioLanguage, 'subtitleLanguages' => $this->subtitleLanguages]
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
        if (isset($this->audioLanguage)) {
            $json['audio_language']     = $this->audioLanguage;
        }
        if (isset($this->subtitleLanguages)) {
            $json['subtitle_languages'] = $this->subtitleLanguages;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
