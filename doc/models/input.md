
# Input

## Structure

`Input`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transformations` | [`?Transformations`](../../doc/models/transformations.md) | Optional | - | getTransformations(): ?Transformations | setTransformations(?Transformations transformations): void |
| `profileId` | `?string` | Optional | - | getProfileId(): ?string | setProfileId(?string profileId): void |
| `title` | `?string` | Optional | - | getTitle(): ?string | setTitle(?string title): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `metadata` | [`?Metadata`](../../doc/models/metadata.md) | Optional | - | getMetadata(): ?Metadata | setMetadata(?Metadata metadata): void |
| `sourceUrl` | `?string` | Optional | - | getSourceUrl(): ?string | setSourceUrl(?string sourceUrl): void |
| `callToActions` | [`?(CallToAction1[])`](../../doc/models/call-to-action-1.md) | Optional | - | getCallToActions(): ?array | setCallToActions(?array callToActions): void |

## Example (as JSON)

```json
{
  "profile_id": "646df1c9173a4a2fcac180b7",
  "title": "bipbopall",
  "description": "some description",
  "source_url": "http://devimages.apple.com/iphone/samples/bipbop/bipbopall.m3u8",
  "transformations": {
    "format": "format2",
    "resolution": [
      "resolution7",
      "resolution8"
    ],
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
  },
  "metadata": {
    "headermeta": "headermeta0"
  }
}
```

