<?php

declare(strict_types=1);

/*
 * GumletRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace GumletRestApisLib\Exceptions;

use GumletRestApisLib\ApiHelper;

class VideoAssets401ErrorException extends ApiException
{
    /**
     * @var \GumletRestApisLib\Models\Error1|null
     */
    private $error;

    /**
     * Returns Error.
     */
    public function getError(): ?\GumletRestApisLib\Models\Error1
    {
        return $this->error;
    }

    /**
     * Sets Error.
     *
     * @maps error
     */
    public function setError(?\GumletRestApisLib\Models\Error1 $error): void
    {
        $this->error = $error;
    }

    /**
     * Converts the VideoAssets401ErrorException object to a human-readable string representation.
     *
     * @return string The string representation of the VideoAssets401ErrorException object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'VideoAssets401ErrorException',
            ['error' => $this->error],
            parent::__toString()
        );
    }
}
