
# Video Live Assets List Response

## Structure

`VideoLiveAssetsListResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `allLiveAssets` | [`?(AllLiveAsset[])`](../../doc/models/all-live-asset.md) | Optional | - | getAllLiveAssets(): ?array | setAllLiveAssets(?array allLiveAssets): void |
| `totalLiveAssetCount` | `?int` | Optional | **Default**: `0` | getTotalLiveAssetCount(): ?int | setTotalLiveAssetCount(?int totalLiveAssetCount): void |
| `currentOffset` | `?int` | Optional | **Default**: `0` | getCurrentOffset(): ?int | setCurrentOffset(?int currentOffset): void |

## Example (as JSON)

```json
{
  "total_live_asset_count": 5,
  "current_offset": 5,
  "all_live_assets": [
    {
      "status": "status4",
      "stream_key": "stream_key2",
      "live_asset_id": "live_asset_id6",
      "live_video_source_id": "live_video_source_id6",
      "input": {
        "resolution": [
          "resolution9",
          "resolution0",
          "resolution1"
        ]
      }
    },
    {
      "status": "status4",
      "stream_key": "stream_key2",
      "live_asset_id": "live_asset_id6",
      "live_video_source_id": "live_video_source_id6",
      "input": {
        "resolution": [
          "resolution9",
          "resolution0",
          "resolution1"
        ]
      }
    },
    {
      "status": "status4",
      "stream_key": "stream_key2",
      "live_asset_id": "live_asset_id6",
      "live_video_source_id": "live_video_source_id6",
      "input": {
        "resolution": [
          "resolution9",
          "resolution0",
          "resolution1"
        ]
      }
    }
  ]
}
```

