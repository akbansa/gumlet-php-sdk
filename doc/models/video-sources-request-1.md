
# Video Sources Request 1

## Structure

`VideoSourcesRequest1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | video collection name | getName(): ?string | setName(?string name): void |
| `defaultProfileId` | `?string` | Optional | Gumlet provides the functionality of creating multiple video assets using the same set of parameters. | getDefaultProfileId(): ?string | setDefaultProfileId(?string defaultProfileId): void |
| `tempCname` | `?(string[])` | Optional | cname for channel | getTempCname(): ?array | setTempCname(?array tempCname): void |
| `insightPropertyId` | `?string` | Optional | The five to ten character unique identifier of the Gumlet Insight Property available on the dashboard. | getInsightPropertyId(): ?string | setInsightPropertyId(?string insightPropertyId): void |
| `playerConfig` | [`?PlayerConfig2`](../../doc/models/player-config-2.md) | Optional | Configure player settings for this playlist, it overrides the setting set on collection. | getPlayerConfig(): ?PlayerConfig2 | setPlayerConfig(?PlayerConfig2 playerConfig): void |
| `videoProtection` | [`?VideoProtection1`](../../doc/models/video-protection-1.md) | Optional | Gumlet provides multiple options for securing your video playback. | getVideoProtection(): ?VideoProtection1 | setVideoProtection(?VideoProtection1 videoProtection): void |
| `channelSettings` | [`?ChannelSettings2`](../../doc/models/channel-settings-2.md) | Optional | Configurations to set various channel settings. | getChannelSettings(): ?ChannelSettings2 | setChannelSettings(?ChannelSettings2 channelSettings): void |
| `type` | [`?string(TypeEnum)`](../../doc/models/type-enum.md) | Optional | Video collections are top-level entities in Gumlet. You can use them to organize videos for different teams/departments or use cases. | getType(): ?string | setType(?string type): void |
| `webfolder` | [`?Webfolder`](../../doc/models/webfolder.md) | Optional | This is a required field if collection type is webfolder. | getWebfolder(): ?Webfolder | setWebfolder(?Webfolder webfolder): void |
| `aws` | [`?Aws1`](../../doc/models/aws-1.md) | Optional | This is a required field if collection type is aws. | getAws(): ?Aws1 | setAws(?Aws1 aws): void |
| `proxy` | [`?Proxy`](../../doc/models/proxy.md) | Optional | This is a required field if collection type is proxy. | getProxy(): ?Proxy | setProxy(?Proxy proxy): void |
| `gcs` | [`?Gcs`](../../doc/models/gcs.md) | Optional | This is a required field if collection type is gcs. | getGcs(): ?Gcs | setGcs(?Gcs gcs): void |
| `dostorage` | [`?Dostorage`](../../doc/models/dostorage.md) | Optional | This is a required field if collection type is dostorage. | getDostorage(): ?Dostorage | setDostorage(?Dostorage dostorage): void |
| `wasabi` | [`?Wasabi`](../../doc/models/wasabi.md) | Optional | This is a required field if collection type is wasabi. | getWasabi(): ?Wasabi | setWasabi(?Wasabi wasabi): void |
| `linode` | [`?Linode`](../../doc/models/linode.md) | Optional | This is a required field if collection type is linode. | getLinode(): ?Linode | setLinode(?Linode linode): void |
| `backblaze` | [`?Backblaze`](../../doc/models/backblaze.md) | Optional | This is a required field if collection type is backblaze. | getBackblaze(): ?Backblaze | setBackblaze(?Backblaze backblaze): void |
| `cloudflare` | [`?Cloudflare`](../../doc/models/cloudflare.md) | Optional | This is a required field if collection type is cloudflare. | getCloudflare(): ?Cloudflare | setCloudflare(?Cloudflare cloudflare): void |
| `cloudinary` | [`?Cloudinary`](../../doc/models/cloudinary.md) | Optional | This is a required field if collection type is cloudinary. | getCloudinary(): ?Cloudinary | setCloudinary(?Cloudinary cloudinary): void |
| `azure` | [`?Azure`](../../doc/models/azure.md) | Optional | This is a required field if collection type is azure. | getAzure(): ?Azure | setAzure(?Azure azure): void |
| `zoom` | [`?Zoom`](../../doc/models/zoom.md) | Optional | This is a required field if collection type is zoom. | getZoom(): ?Zoom | setZoom(?Zoom zoom): void |

## Example (as JSON)

```json
{
  "name": "name8",
  "default_profile_id": "default_profile_id0",
  "temp_cname": [
    "temp_cname7",
    "temp_cname8"
  ],
  "insight_property_id": "insight_property_id6",
  "player_config": {
    "preload": false,
    "autoplay": false,
    "disable_seek": false,
    "disable_player_controls": false,
    "powered_by_gumlet_overlay": false
  }
}
```

