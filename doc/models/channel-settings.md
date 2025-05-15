
# Channel Settings

## Structure

`ChannelSettings`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `title` | `?string` | Optional | - | getTitle(): ?string | setTitle(?string title): void |
| `active` | `?bool` | Optional | **Default**: `true` | getActive(): ?bool | setActive(?bool active): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `privacyType` | `?string` | Optional | - | getPrivacyType(): ?string | setPrivacyType(?string privacyType): void |
| `customLogo` | `?bool` | Optional | **Default**: `true` | getCustomLogo(): ?bool | setCustomLogo(?bool customLogo): void |
| `logoUrl` | `?string` | Optional | - | getLogoUrl(): ?string | setLogoUrl(?string logoUrl): void |
| `cname` | `?(string[])` | Optional | - | getCname(): ?array | setCname(?array cname): void |
| `tempCname` | `?(string[])` | Optional | - | getTempCname(): ?array | setTempCname(?array tempCname): void |

## Example (as JSON)

```json
{
  "title": "my channel",
  "active": false,
  "description": "desc",
  "privacy_type": "private",
  "custom_logo": true,
  "logo_url": "https://dev-video.gumlet.io/646df1c9172a4a2fcac180b4/channel/logo.png"
}
```

