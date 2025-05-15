
# Video Profiles Response 2

## Structure

`VideoProfilesResponse2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `profileId` | `?string` | Optional | - | getProfileId(): ?string | setProfileId(?string profileId): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `transformations` | [`?Transformations6`](../../doc/models/transformations-6.md) | Optional | - | getTransformations(): ?Transformations6 | setTransformations(?Transformations6 transformations): void |
| `createdAt` | `?int` | Optional | **Default**: `0` | getCreatedAt(): ?int | setCreatedAt(?int createdAt): void |
| `updatedAt` | `?int` | Optional | **Default**: `0` | getUpdatedAt(): ?int | setUpdatedAt(?int updatedAt): void |

## Example (as JSON)

```json
{
  "profile_id": "61921fb10822a81d955d1730",
  "name": "Gumlet-Profile-2",
  "created_at": 1636966321742,
  "updated_at": 1636975593082,
  "transformations": {
    "resolution": "resolution0",
    "format": "format2",
    "audio_codec": [
      "audio_codec2"
    ],
    "video_codec": [
      "video_codec1",
      "video_codec2",
      "video_codec3"
    ],
    "thumbnail": [
      "thumbnail5",
      "thumbnail6",
      "thumbnail7"
    ]
  }
}
```

