
# Video Assets Response

## Structure

`VideoAssetsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `assetId` | `?string` | Optional | - | getAssetId(): ?string | setAssetId(?string assetId): void |
| `progress` | `?int` | Optional | **Default**: `0` | getProgress(): ?int | setProgress(?int progress): void |
| `createdAt` | `?int` | Optional | **Default**: `0` | getCreatedAt(): ?int | setCreatedAt(?int createdAt): void |
| `updatedAt` | `?int` | Optional | **Default**: `0` | getUpdatedAt(): ?int | setUpdatedAt(?int updatedAt): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `tag` | `?(string[])` | Optional | - | getTag(): ?array | setTag(?array tag): void |
| `sourceId` | `?string` | Optional | - | getSourceId(): ?string | setSourceId(?string sourceId): void |
| `collectionId` | `?string` | Optional | - | getCollectionId(): ?string | setCollectionId(?string collectionId): void |
| `input` | [`?Input`](../../doc/models/input.md) | Optional | - | getInput(): ?Input | setInput(?Input input): void |
| `output` | [`?Output`](../../doc/models/output.md) | Optional | - | getOutput(): ?Output | setOutput(?Output output): void |
| `playlists` | `?(string[])` | Optional | - | getPlaylists(): ?array | setPlaylists(?array playlists): void |

## Example (as JSON)

```json
{
  "asset_id": "65b168a6e99b77f116c0e488",
  "progress": 0,
  "created_at": 1706125479006,
  "updated_at": 1706125479006,
  "status": "pre-queued",
  "source_id": "646df1c9173a4a2fcac180b4",
  "collection_id": "646df1c9173a4a2fcac180b4"
}
```

