
# Image Sources Request

## Structure

`ImageSourcesRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `namespace` | `string` | Required | unique subdomain associated with the image source | getNamespace(): string | setNamespace(string namespace): void |
| `type` | [`string(Type2Enum)`](../../doc/models/type-2-enum.md) | Required | - | getType(): string | setType(string type): void |
| `aws` | [`?Aws4`](../../doc/models/aws-4.md) | Optional | This is a required field if source type is aws. | getAws(): ?Aws4 | setAws(?Aws4 aws): void |
| `proxy` | [`?Proxy2`](../../doc/models/proxy-2.md) | Optional | This is a required field if source type is proxy. | getProxy(): ?Proxy2 | setProxy(?Proxy2 proxy): void |
| `gcs` | [`?Gcs2`](../../doc/models/gcs-2.md) | Optional | This is a required field if source type is gcs. | getGcs(): ?Gcs2 | setGcs(?Gcs2 gcs): void |
| `dostorage` | [`?Dostorage2`](../../doc/models/dostorage-2.md) | Optional | This is a required field if source type is dostorage. | getDostorage(): ?Dostorage2 | setDostorage(?Dostorage2 dostorage): void |
| `wasabi` | [`?Wasabi2`](../../doc/models/wasabi-2.md) | Optional | This is a required field if source type is wasabi. | getWasabi(): ?Wasabi2 | setWasabi(?Wasabi2 wasabi): void |
| `cloudinary` | [`?Cloudinary2`](../../doc/models/cloudinary-2.md) | Optional | This is a required field if source type is cloudinary. | getCloudinary(): ?Cloudinary2 | setCloudinary(?Cloudinary2 cloudinary): void |
| `azure` | [`?Azure2`](../../doc/models/azure-2.md) | Optional | This is a required field if source type is azure. | getAzure(): ?Azure2 | setAzure(?Azure2 azure): void |
| `linode` | [`?Linode2`](../../doc/models/linode-2.md) | Optional | This is a required field if source type is linode. | getLinode(): ?Linode2 | setLinode(?Linode2 linode): void |
| `backblaze` | [`?Backblaze2`](../../doc/models/backblaze-2.md) | Optional | This is a required field if source type is backblaze. | getBackblaze(): ?Backblaze2 | setBackblaze(?Backblaze2 backblaze): void |
| `cloudflare` | [`?Cloudflare2`](../../doc/models/cloudflare-2.md) | Optional | This is a required field if source type is cloudflare. | getCloudflare(): ?Cloudflare2 | setCloudflare(?Cloudflare2 cloudflare): void |

## Example (as JSON)

```json
{
  "namespace": "namespace0",
  "type": "cloudflare",
  "aws": {
    "bucket_name": "bucket_name6",
    "bucket_region": "bucket_region6",
    "access_key": "access_key0",
    "secret": "secret8",
    "base_path": "base_path4",
    "endpoint": "endpoint0"
  },
  "proxy": {
    "whitelisted_domains": "whitelisted_domains4"
  },
  "gcs": {
    "bucket_name": "bucket_name4",
    "service_account_key": "service_account_key6"
  },
  "dostorage": {
    "bucket_name": "bucket_name0",
    "bucket_region": "bucket_region0",
    "access_key": "access_key4",
    "secret": "secret2",
    "base_path": "base_path2"
  },
  "wasabi": {
    "bucket_name": "bucket_name8",
    "bucket_region": "bucket_region8",
    "access_key": "access_key2",
    "secret": "secret0",
    "base_path": "base_path4"
  }
}
```

