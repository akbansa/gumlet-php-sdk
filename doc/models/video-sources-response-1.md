
# Video Sources Response 1

## Structure

`VideoSourcesResponse1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `createdAt` | `?string` | Optional | - | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `updatedAt` | `?string` | Optional | - | getUpdatedAt(): ?string | setUpdatedAt(?string updatedAt): void |
| `videoProtection` | `?array` | Optional | - | getVideoProtection(): ?array | setVideoProtection(?array videoProtection): void |
| `playerConfig` | [`?PlayerConfig`](../../doc/models/player-config.md) | Optional | - | getPlayerConfig(): ?PlayerConfig | setPlayerConfig(?PlayerConfig playerConfig): void |
| `defaultProfileId` | `?string` | Optional | - | getDefaultProfileId(): ?string | setDefaultProfileId(?string defaultProfileId): void |
| `insightPropertyId` | `?string` | Optional | - | getInsightPropertyId(): ?string | setInsightPropertyId(?string insightPropertyId): void |
| `zoom` | [`?Zoom1`](../../doc/models/zoom-1.md) | Optional | - | getZoom(): ?Zoom1 | setZoom(?Zoom1 zoom): void |
| `embedDetails` | [`?EmbedDetails1`](../../doc/models/embed-details-1.md) | Optional | - | getEmbedDetails(): ?EmbedDetails1 | setEmbedDetails(?EmbedDetails1 embedDetails): void |
| `folders` | `?(array[])` | Optional | - | getFolders(): ?array | setFolders(?array folders): void |
| `channelSettings` | [`?ChannelSettings1`](../../doc/models/channel-settings-1.md) | Optional | - | getChannelSettings(): ?ChannelSettings1 | setChannelSettings(?ChannelSettings1 channelSettings): void |

## Example (as JSON)

```json
{
  "id": "65b01610e99b77f116c0e32b",
  "name": "zoom-collection",
  "type": "zoom",
  "created_at": "01/23/2024 19:40:00",
  "updated_at": "01/23/2024 19:40:00",
  "default_profile_id": "646df1c9173a4a2fcac180b7",
  "insight_property_id": "65b01610e99b77f116c0e329"
}
```

