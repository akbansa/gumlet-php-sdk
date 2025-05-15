
# Video Assets Response 1

## Structure

`VideoAssetsResponse1`

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
| `input` | [`?Input2`](../../doc/models/input-2.md) | Optional | - | getInput(): ?Input2 | setInput(?Input2 input): void |
| `output` | [`?Output2`](../../doc/models/output-2.md) | Optional | - | getOutput(): ?Output2 | setOutput(?Output2 output): void |
| `processedAt` | `?int` | Optional | **Default**: `0` | getProcessedAt(): ?int | setProcessedAt(?int processedAt): void |
| `folder` | `?string` | Optional | - | getFolder(): ?string | setFolder(?string folder): void |
| `playlists` | `?(array[])` | Optional | - | getPlaylists(): ?array | setPlaylists(?array playlists): void |

## Example (as JSON)

```json
{
  "asset_id": "67e4ece9403562dbea654261",
  "progress": 100,
  "created_at": 1743056105661,
  "updated_at": 1743056105661,
  "status": "ready",
  "source_id": "67e4ece9403562dbea65425f",
  "collection_id": "67e4ece9403562dbea65425f",
  "processed_at": 1743056105661,
  "folder": "Demo Folder"
}
```

