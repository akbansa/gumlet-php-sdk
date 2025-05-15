
# Transformations

## Structure

`Transformations`

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

## Example (as JSON)

```json
{
  "format": "hls",
  "thumbnail_format": "png",
  "mp4_access": false,
  "per_title_encoding": false,
  "resolution": [
    "resolution5"
  ],
  "audio_codec": [
    "audio_codec4",
    "audio_codec3",
    "audio_codec2"
  ],
  "video_codec": [
    "video_codec9",
    "video_codec0"
  ],
  "thumbnail": [
    "thumbnail3",
    "thumbnail4"
  ]
}
```

