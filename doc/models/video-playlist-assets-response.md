
# Video Playlist Assets Response

## Structure

`VideoPlaylistAssetsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `assetList` | [`?(AssetList1[])`](../../doc/models/asset-list-1.md) | Optional | - | getAssetList(): ?array | setAssetList(?array assetList): void |
| `hasNextPage` | `?bool` | Optional | **Default**: `true` | getHasNextPage(): ?bool | setHasNextPage(?bool hasNextPage): void |
| `nextPage` | `?int` | Optional | **Default**: `0` | getNextPage(): ?int | setNextPage(?int nextPage): void |

## Example (as JSON)

```json
{
  "has_next_page": true,
  "next_page": 2,
  "asset_list": [
    {
      "id": "id4",
      "title": "title0",
      "description": "description4",
      "status": "status6",
      "created_at": "created_at2"
    },
    {
      "id": "id4",
      "title": "title0",
      "description": "description4",
      "status": "status6",
      "created_at": "created_at2"
    },
    {
      "id": "id4",
      "title": "title0",
      "description": "description4",
      "status": "status6",
      "created_at": "created_at2"
    }
  ]
}
```

