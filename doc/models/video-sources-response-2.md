
# Video Sources Response 2

## Structure

`VideoSourcesResponse2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `createdAt` | `?string` | Optional | - | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `updatedAt` | `?string` | Optional | - | getUpdatedAt(): ?string | setUpdatedAt(?string updatedAt): void |
| `videoProtection` | [`?VideoProtection`](../../doc/models/video-protection.md) | Optional | - | getVideoProtection(): ?VideoProtection | setVideoProtection(?VideoProtection videoProtection): void |
| `playerConfig` | [`?PlayerConfig`](../../doc/models/player-config.md) | Optional | - | getPlayerConfig(): ?PlayerConfig | setPlayerConfig(?PlayerConfig playerConfig): void |
| `defaultProfileId` | `?string` | Optional | - | getDefaultProfileId(): ?string | setDefaultProfileId(?string defaultProfileId): void |
| `insightPropertyId` | `?string` | Optional | - | getInsightPropertyId(): ?string | setInsightPropertyId(?string insightPropertyId): void |
| `aws` | [`?Aws`](../../doc/models/aws.md) | Optional | - | getAws(): ?Aws | setAws(?Aws aws): void |
| `embedDetails` | [`?EmbedDetails`](../../doc/models/embed-details.md) | Optional | - | getEmbedDetails(): ?EmbedDetails | setEmbedDetails(?EmbedDetails embedDetails): void |
| `folders` | `?(string[])` | Optional | - | getFolders(): ?array | setFolders(?array folders): void |
| `channelSettings` | [`?ChannelSettings`](../../doc/models/channel-settings.md) | Optional | - | getChannelSettings(): ?ChannelSettings | setChannelSettings(?ChannelSettings channelSettings): void |

## Example (as JSON)

```json
{
  "id": "646df1c9173a4a2fcac180b4",
  "name": "aws-source",
  "type": "aws",
  "created_at": "05/24/2023 11:15:21",
  "updated_at": "01/24/2024 11:24:16",
  "default_profile_id": "646df1c9173a4a2fcac180b7",
  "insight_property_id": "646df0aa173a4a2fcac18009"
}
```

