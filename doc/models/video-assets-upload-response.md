
# Video Assets Upload Response

## Structure

`VideoAssetsUploadResponse`

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
| `input` | [`?Input1`](../../doc/models/input-1.md) | Optional | - | getInput(): ?Input1 | setInput(?Input1 input): void |
| `output` | [`?Output`](../../doc/models/output.md) | Optional | - | getOutput(): ?Output | setOutput(?Output output): void |
| `uploadUrl` | `?string` | Optional | - | getUploadUrl(): ?string | setUploadUrl(?string uploadUrl): void |
| `playlists` | `?(string[])` | Optional | - | getPlaylists(): ?array | setPlaylists(?array playlists): void |

## Example (as JSON)

```json
{
  "asset_id": "65b169dfe99b77f116c0e4aa",
  "progress": 0,
  "created_at": 1706125793055,
  "updated_at": 1706125793055,
  "status": "upload-pending",
  "source_id": "646df1c9173a4a2fcac180b4",
  "collection_id": "646df1c9173a4a2fcac180b4",
  "upload_url": "https://gumlet-video-user-uploads.s3-accelerate.dualstack.amazonaws.com/gumlet-user-uploads-dev-deletable/646df1c9173a4a2fcac180b4/65b169dfe99b77f116c0e4aa/origin-65b169dfe99b77f116c0e4aa?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&X-Amz-Credential=AKIA4WNLTXWDAC3AKBPV%2F20240124%2Fus-west-2%2Fs3%2Faws4_request&X-Amz-Date=20240124T194953Z&X-Amz-Expires=3600&X-Amz-Signature=b724bd728efd589ec6cb4d0fab17947448c02788823619433720e8fddf0f1155&X-Amz-SignedHeaders=host&x-id=PutObject"
}
```

