
# Transformations 3

## Structure

`Transformations3`

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
| `audioOnly` | `?bool` | Optional | **Default**: `true` | getAudioOnly(): ?bool | setAudioOnly(?bool audioOnly): void |
| `keepOriginal` | `?bool` | Optional | **Default**: `true` | getKeepOriginal(): ?bool | setKeepOriginal(?bool keepOriginal): void |
| `perTitleEncoding` | `?bool` | Optional | **Default**: `true` | getPerTitleEncoding(): ?bool | setPerTitleEncoding(?bool perTitleEncoding): void |
| `processLowResolutionInput` | `?bool` | Optional | **Default**: `true` | getProcessLowResolutionInput(): ?bool | setProcessLowResolutionInput(?bool processLowResolutionInput): void |

## Example (as JSON)

```json
{
  "resolution": "240p,360p",
  "format": "hls",
  "thumbnail_format": "png",
  "mp4_access": false,
  "audio_only": false,
  "keep_original": true,
  "per_title_encoding": true,
  "process_low_resolution_input": false,
  "audio_codec": [
    "audio_codec4"
  ],
  "video_codec": [
    "video_codec7",
    "video_codec8",
    "video_codec9"
  ],
  "thumbnail": [
    "thumbnail1",
    "thumbnail2",
    "thumbnail3"
  ]
}
```

