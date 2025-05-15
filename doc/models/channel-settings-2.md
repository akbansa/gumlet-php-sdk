
# Channel Settings 2

Configurations to set various channel settings.

## Structure

`ChannelSettings2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `active` | `?bool` | Optional | **Default**: `false` | getActive(): ?bool | setActive(?bool active): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `title` | `?string` | Optional | - | getTitle(): ?string | setTitle(?string title): void |
| `privacyType` | [`?string(PrivacyTypeEnum)`](../../doc/models/privacy-type-enum.md) | Optional | - | getPrivacyType(): ?string | setPrivacyType(?string privacyType): void |
| `featuredVideo` | `?string` | Optional | Video asset id, the asset should be in the same collection as channel | getFeaturedVideo(): ?string | setFeaturedVideo(?string featuredVideo): void |
| `password` | `?string` | Optional | under channel_settings privacy_type must be "password-protected". Password length should be greater than 5 and lesser than 100 characters. | getPassword(): ?string | setPassword(?string password): void |

## Example (as JSON)

```json
{
  "active": false,
  "description": "description2",
  "title": "title6",
  "privacy_type": "\"private\"",
  "featured_video": "featured_video8"
}
```

