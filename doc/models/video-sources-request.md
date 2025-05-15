
# Video Sources Request

## Structure

`VideoSourcesRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | Specify a text string or identifier for the collection. | getName(): string | setName(string name): void |
| `type` | [`string(TypeEnum)`](../../doc/models/type-enum.md) | Required | Video collections are top-level entities in Gumlet. You can use them to organize videos for different teams/departments or use cases.<br><br>**Default**: `TypeEnum::DIRECTUPLOAD` | getType(): string | setType(string type): void |
| `defaultProfileId` | `?string` | Optional | Gumlet provides the functionality of creating multiple video assets using the same set of parameters. | getDefaultProfileId(): ?string | setDefaultProfileId(?string defaultProfileId): void |
| `insightPropertyId` | `?string` | Optional | The five to ten character unique identifier of the Gumlet Insight Property available on the dashboard. | getInsightPropertyId(): ?string | setInsightPropertyId(?string insightPropertyId): void |
| `videoProtection` | [`?VideoProtection1`](../../doc/models/video-protection-1.md) | Optional | Gumlet provides multiple options for securing your video playback. | getVideoProtection(): ?VideoProtection1 | setVideoProtection(?VideoProtection1 videoProtection): void |
| `aws` | [`?Aws1`](../../doc/models/aws-1.md) | Optional | This is a required field if collection type is aws. | getAws(): ?Aws1 | setAws(?Aws1 aws): void |
| `proxy` | [`?Proxy`](../../doc/models/proxy.md) | Optional | This is a required field if collection type is proxy. | getProxy(): ?Proxy | setProxy(?Proxy proxy): void |
| `gcs` | [`?Gcs`](../../doc/models/gcs.md) | Optional | This is a required field if collection type is gcs. | getGcs(): ?Gcs | setGcs(?Gcs gcs): void |
| `dostorage` | [`?Dostorage`](../../doc/models/dostorage.md) | Optional | This is a required field if collection type is dostorage. | getDostorage(): ?Dostorage | setDostorage(?Dostorage dostorage): void |
| `wasabi` | [`?Wasabi`](../../doc/models/wasabi.md) | Optional | This is a required field if collection type is wasabi. | getWasabi(): ?Wasabi | setWasabi(?Wasabi wasabi): void |
| `cloudinary` | [`?Cloudinary`](../../doc/models/cloudinary.md) | Optional | This is a required field if collection type is cloudinary. | getCloudinary(): ?Cloudinary | setCloudinary(?Cloudinary cloudinary): void |
| `azure` | [`?Azure`](../../doc/models/azure.md) | Optional | This is a required field if collection type is azure. | getAzure(): ?Azure | setAzure(?Azure azure): void |
| `linode` | [`?Linode`](../../doc/models/linode.md) | Optional | This is a required field if collection type is linode. | getLinode(): ?Linode | setLinode(?Linode linode): void |
| `backblaze` | [`?Backblaze`](../../doc/models/backblaze.md) | Optional | This is a required field if collection type is backblaze. | getBackblaze(): ?Backblaze | setBackblaze(?Backblaze backblaze): void |
| `cloudflare` | [`?Cloudflare`](../../doc/models/cloudflare.md) | Optional | This is a required field if collection type is cloudflare. | getCloudflare(): ?Cloudflare | setCloudflare(?Cloudflare cloudflare): void |
| `zoom` | [`?Zoom`](../../doc/models/zoom.md) | Optional | This is a required field if collection type is zoom. | getZoom(): ?Zoom | setZoom(?Zoom zoom): void |

## Example (as JSON)

```json
{
  "name": "name4",
  "type": "direct-upload",
  "default_profile_id": "default_profile_id6",
  "insight_property_id": "insight_property_id2",
  "video_protection": {
    "signed_url": false,
    "signed_url_secret": "signed_url_secret0",
    "blacklisted_countries": [
      "blacklisted_countries1"
    ],
    "whitelisted_referrers": "whitelisted_referrers2"
  },
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
  }
}
```

