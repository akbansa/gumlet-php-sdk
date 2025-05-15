
# All Asset

## Structure

`AllAsset`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `assetId` | `?string` | Optional | - | getAssetId(): ?string | setAssetId(?string assetId): void |
| `progress` | `?int` | Optional | **Default**: `0` | getProgress(): ?int | setProgress(?int progress): void |
| `createdAt` | `?int` | Optional | **Default**: `0` | getCreatedAt(): ?int | setCreatedAt(?int createdAt): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `tag` | `?string` | Optional | - | getTag(): ?string | setTag(?string tag): void |
| `sourceId` | `?string` | Optional | - | getSourceId(): ?string | setSourceId(?string sourceId): void |
| `input` | [`?Input3`](../../doc/models/input-3.md) | Optional | - | getInput(): ?Input3 | setInput(?Input3 input): void |
| `output` | [`?Output`](../../doc/models/output.md) | Optional | - | getOutput(): ?Output | setOutput(?Output output): void |

## Example (as JSON)

```json
{
  "asset_id": "6192269e0822a81d955d1a4b",
  "progress": 0,
  "created_at": 1636968094594,
  "status": "optimizing",
  "source_id": "5f462c1561cf8a766464ffc4",
  "tag": "tag0"
}
```

