
# Transformations 6

## Structure

`Transformations6`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `resolution` | `?string` | Optional | - | getResolution(): ?string | setResolution(?string resolution): void |
| `format` | `?string` | Optional | - | getFormat(): ?string | setFormat(?string format): void |
| `audioCodec` | `?(string[])` | Optional | - | getAudioCodec(): ?array | setAudioCodec(?array audioCodec): void |
| `videoCodec` | `?(string[])` | Optional | - | getVideoCodec(): ?array | setVideoCodec(?array videoCodec): void |
| `thumbnail` | `?(string[])` | Optional | - | getThumbnail(): ?array | setThumbnail(?array thumbnail): void |
| `thumbnailFormat` | `?string` | Optional | - | getThumbnailFormat(): ?string | setThumbnailFormat(?string thumbnailFormat): void |
| `mp4Access` | `?bool` | Optional | **Default**: `true` | getMp4Access(): ?bool | setMp4Access(?bool mp4Access): void |
| `perTitleEncoding` | `?bool` | Optional | **Default**: `true` | getPerTitleEncoding(): ?bool | setPerTitleEncoding(?bool perTitleEncoding): void |

## Example (as JSON)

```json
{
  "resolution": "240p,360p",
  "format": "hls",
  "thumbnail_format": "png",
  "mp4_access": false,
  "per_title_encoding": true,
  "audio_codec": [
    "audio_codec0",
    "audio_codec1"
  ],
  "video_codec": [
    "video_codec3"
  ],
  "thumbnail": [
    "thumbnail7"
  ]
}
```

