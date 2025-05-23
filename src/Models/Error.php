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

class Error implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $message;

    /**
     * @var string|null
     */
    private $param;

    /**
     * Returns Code.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     *
     * @maps code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Message.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Sets Message.
     *
     * @maps message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * Returns Param.
     */
    public function getParam(): ?string
    {
        return $this->param;
    }

    /**
     * Sets Param.
     *
     * @maps param
     */
    public function setParam(?string $param): void
    {
        $this->param = $param;
    }

    /**
     * Converts the Error object to a human-readable string representation.
     *
     * @return string The string representation of the Error object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Error',
            ['code' => $this->code, 'message' => $this->message, 'param' => $this->param]
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
        if (isset($this->code)) {
            $json['code']    = $this->code;
        }
        if (isset($this->message)) {
            $json['message'] = $this->message;
        }
        if (isset($this->param)) {
            $json['param']   = $this->param;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
