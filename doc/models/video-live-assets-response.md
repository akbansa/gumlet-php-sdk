
# Video Live Assets Response

## Structure

`VideoLiveAssetsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `streamKey` | `?string` | Optional | - | getStreamKey(): ?string | setStreamKey(?string streamKey): void |
| `liveAssetId` | `?string` | Optional | - | getLiveAssetId(): ?string | setLiveAssetId(?string liveAssetId): void |
| `liveVideoSourceId` | `?string` | Optional | - | getLiveVideoSourceId(): ?string | setLiveVideoSourceId(?string liveVideoSourceId): void |
| `input` | [`?Input4`](../../doc/models/input-4.md) | Optional | - | getInput(): ?Input4 | setInput(?Input4 input): void |
| `streamUrl` | `?string` | Optional | - | getStreamUrl(): ?string | setStreamUrl(?string streamUrl): void |
| `output` | [`?Output4`](../../doc/models/output-4.md) | Optional | - | getOutput(): ?Output4 | setOutput(?Output4 output): void |
| `createdAt` | `?int` | Optional | **Default**: `0` | getCreatedAt(): ?int | setCreatedAt(?int createdAt): void |
| `updatedAt` | `?int` | Optional | **Default**: `0` | getUpdatedAt(): ?int | setUpdatedAt(?int updatedAt): void |

## Example (as JSON)

```json
{
  "status": "created",
  "stream_key": "619231610822a81d955d22f4",
  "live_asset_id": "619231610822a81d955d22f3",
  "live_video_source_id": "6165247368d80232d28d4379",
  "stream_url": "rtmp://livestream-ingest.gumlet.io:1935/app/619231610822a81d955d22f4",
  "created_at": 1636970849188,
  "updated_at": 1636970849188,
  "input": {
    "resolution": [
      "resolution9",
      "resolution0",
      "resolution1"
    ]
  }
}
```

