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

class VideoPlaylistAssetsResponse implements \JsonSerializable
{
    /**
     * @var AssetList1[]|null
     */
    private $assetList;

    /**
     * @var bool|null
     */
    private $hasNextPage = true;

    /**
     * @var int|null
     */
    private $nextPage = 0;

    /**
     * Returns Asset List.
     *
     * @return AssetList1[]|null
     */
    public function getAssetList(): ?array
    {
        return $this->assetList;
    }

    /**
     * Sets Asset List.
     *
     * @maps asset_list
     *
     * @param AssetList1[]|null $assetList
     */
    public function setAssetList(?array $assetList): void
    {
        $this->assetList = $assetList;
    }

    /**
     * Returns Has Next Page.
     */
    public function getHasNextPage(): ?bool
    {
        return $this->hasNextPage;
    }

    /**
     * Sets Has Next Page.
     *
     * @maps has_next_page
     */
    public function setHasNextPage(?bool $hasNextPage): void
    {
        $this->hasNextPage = $hasNextPage;
    }

    /**
     * Returns Next Page.
     */
    public function getNextPage(): ?int
    {
        return $this->nextPage;
    }

    /**
     * Sets Next Page.
     *
     * @maps next_page
     */
    public function setNextPage(?int $nextPage): void
    {
        $this->nextPage = $nextPage;
    }

    /**
     * Converts the VideoPlaylistAssetsResponse object to a human-readable string representation.
     *
     * @return string The string representation of the VideoPlaylistAssetsResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'VideoPlaylistAssetsResponse',
            ['assetList' => $this->assetList, 'hasNextPage' => $this->hasNextPage, 'nextPage' => $this->nextPage]
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
        if (isset($this->assetList)) {
            $json['asset_list']    = $this->assetList;
        }
        if (isset($this->hasNextPage)) {
            $json['has_next_page'] = $this->hasNextPage;
        }
        if (isset($this->nextPage)) {
            $json['next_page']     = $this->nextPage;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
