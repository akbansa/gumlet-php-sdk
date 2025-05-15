
# Video Assets List Response

## Structure

`VideoAssetsListResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `allAssets` | [`?(AllAsset[])`](../../doc/models/all-asset.md) | Optional | - | getAllAssets(): ?array | setAllAssets(?array allAssets): void |
| `totalAssetCount` | `?int` | Optional | **Default**: `0` | getTotalAssetCount(): ?int | setTotalAssetCount(?int totalAssetCount): void |
| `currentOffset` | `?int` | Optional | **Default**: `0` | getCurrentOffset(): ?int | setCurrentOffset(?int currentOffset): void |
| `distinctTags` | `?(string[])` | Optional | - | getDistinctTags(): ?array | setDistinctTags(?array distinctTags): void |

## Example (as JSON)

```json
{
  "total_asset_count": 2159,
  "current_offset": 1,
  "all_assets": [
    {
      "asset_id": "asset_id2",
      "progress": 192,
      "created_at": 66,
      "status": "status8",
      "tag": "tag0"
    },
    {
      "asset_id": "asset_id2",
      "progress": 192,
      "created_at": 66,
      "status": "status8",
      "tag": "tag0"
    }
  ],
  "distinct_tags": [
    "distinct_tags2"
  ]
}
```

