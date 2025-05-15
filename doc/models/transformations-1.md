
# Transformations 1

## Structure

`Transformations1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `format` | `?string` | Optional | - | getFormat(): ?string | setFormat(?string format): void |
| `resolution` | `?(string[])` | Optional | - | getResolution(): ?array | setResolution(?array resolution): void |
| `audioCodec` | `?(string[])` | Optional | - | getAudioCodec(): ?array | setAudioCodec(?array audioCodec): void |
| `videoCodec` | `?(string[])` | Optional | - | getVideoCodec(): ?array | setVideoCodec(?array videoCodec): void |
| `thumbnail` | `?(string[])` | Optional | - | getThumbnail(): ?array | setThumbnail(?array thumbnail): void |
| `thumbnailFormat` | `?string` | Optional | - | getThumbnailFormat(): ?string | setThumbnailFormat(?string thumbnailFormat): void |
| `mp4Access` | `?bool` | Optional | **Default**: `true` | getMp4Access(): ?bool | setMp4Access(?bool mp4Access): void |
| `perTitleEncoding` | `?bool` | Optional | **Default**: `true` | getPerTitleEncoding(): ?bool | setPerTitleEncoding(?bool perTitleEncoding): void |
| `originalDeleted` | `?bool` | Optional | **Default**: `true` | getOriginalDeleted(): ?bool | setOriginalDeleted(?bool originalDeleted): void |

## Example (as JSON)

```json
{
  "format": "hls",
  "thumbnail_format": "png",
  "mp4_access": false,
  "per_title_encoding": false,
  "original_deleted": true,
  "resolution": [
    "resolution9",
    "resolution0"
  ],
  "audio_codec": [
    "audio_codec0"
  ],
  "video_codec": [
    "video_codec3",
    "video_codec4",
    "video_codec5"
  ],
  "thumbnail": [
    "thumbnail7",
    "thumbnail8",
    "thumbnail9"
  ]
}
```

