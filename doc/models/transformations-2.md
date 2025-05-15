
# Transformations 2

## Structure

`Transformations2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `format` | `?string` | Optional | - | getFormat(): ?string | setFormat(?string format): void |
| `resolution` | `?(string[])` | Optional | - | getResolution(): ?array | setResolution(?array resolution): void |
| `audioCodec` | `?(string[])` | Optional | - | getAudioCodec(): ?array | setAudioCodec(?array audioCodec): void |
| `videoCodec` | `?(string[])` | Optional | - | getVideoCodec(): ?array | setVideoCodec(?array videoCodec): void |
| `imageOverlay` | [`?ImageOverlay2`](../../doc/models/image-overlay-2.md) | Optional | - | getImageOverlay(): ?ImageOverlay2 | setImageOverlay(?ImageOverlay2 imageOverlay): void |
| `thumbnail` | `?(string[])` | Optional | - | getThumbnail(): ?array | setThumbnail(?array thumbnail): void |
| `thumbnailFormat` | `?string` | Optional | - | getThumbnailFormat(): ?string | setThumbnailFormat(?string thumbnailFormat): void |
| `mp4Access` | `?bool` | Optional | **Default**: `true` | getMp4Access(): ?bool | setMp4Access(?bool mp4Access): void |
| `audioOnly` | `?bool` | Optional | **Default**: `true` | getAudioOnly(): ?bool | setAudioOnly(?bool audioOnly): void |
| `originalDeleted` | `?bool` | Optional | **Default**: `true` | getOriginalDeleted(): ?bool | setOriginalDeleted(?bool originalDeleted): void |
| `perTitleEncoding` | `?bool` | Optional | **Default**: `true` | getPerTitleEncoding(): ?bool | setPerTitleEncoding(?bool perTitleEncoding): void |
| `generateSubtitles` | [`?GenerateSubtitles2`](../../doc/models/generate-subtitles-2.md) | Optional | - | getGenerateSubtitles(): ?GenerateSubtitles2 | setGenerateSubtitles(?GenerateSubtitles2 generateSubtitles): void |
| `previewThumbnails` | [`?PreviewThumbnails`](../../doc/models/preview-thumbnails.md) | Optional | - | getPreviewThumbnails(): ?PreviewThumbnails | setPreviewThumbnails(?PreviewThumbnails previewThumbnails): void |

## Example (as JSON)

```json
{
  "format": "abr",
  "thumbnail_format": "png",
  "mp4_access": false,
  "audio_only": false,
  "original_deleted": true,
  "per_title_encoding": false,
  "resolution": [
    "resolution3",
    "resolution4"
  ],
  "audio_codec": [
    "audio_codec4"
  ],
  "video_codec": [
    "video_codec7",
    "video_codec8",
    "video_codec9"
  ],
  "image_overlay": {
    "url": "url8",
    "vertical_align": "vertical_align8",
    "horizontal_align": "horizontal_align6",
    "vertical_margin": "vertical_margin2",
    "horizontal_margin": "horizontal_margin8"
  }
}
```

