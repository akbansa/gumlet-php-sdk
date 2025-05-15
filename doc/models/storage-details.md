
# Storage Details

## Structure

`StorageDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `video` | [`?(Video[])`](../../doc/models/video.md) | Optional | - | getVideo(): ?array | setVideo(?array video): void |
| `audio` | [`?(Audio[])`](../../doc/models/audio.md) | Optional | - | getAudio(): ?array | setAudio(?array audio): void |
| `playlist` | [`?(Playlist[])`](../../doc/models/playlist.md) | Optional | - | getPlaylist(): ?array | setPlaylist(?array playlist): void |
| `thumbnail` | [`?(Thumbnail[])`](../../doc/models/thumbnail.md) | Optional | - | getThumbnail(): ?array | setThumbnail(?array thumbnail): void |
| `subtitle` | [`?(Subtitle[])`](../../doc/models/subtitle.md) | Optional | - | getSubtitle(): ?array | setSubtitle(?array subtitle): void |
| `previewThumbnail` | [`?(PreviewThumbnail[])`](../../doc/models/preview-thumbnail.md) | Optional | - | getPreviewThumbnail(): ?array | setPreviewThumbnail(?array previewThumbnail): void |

## Example (as JSON)

```json
{
  "video": [
    {
      "fileName": "fileName0",
      "size": 142,
      "resolution": "resolution0",
      "duration": 244
    }
  ],
  "audio": [
    {
      "fileName": "fileName2",
      "size": 92,
      "duration": 38
    }
  ],
  "playlist": [
    {
      "fileName": "fileName0",
      "size": 182
    },
    {
      "fileName": "fileName0",
      "size": 182
    },
    {
      "fileName": "fileName0",
      "size": 182
    }
  ],
  "thumbnail": [
    {
      "fileName": "fileName0",
      "size": 232,
      "resolution": "resolution0"
    },
    {
      "fileName": "fileName0",
      "size": 232,
      "resolution": "resolution0"
    },
    {
      "fileName": "fileName0",
      "size": 232,
      "resolution": "resolution0"
    }
  ],
  "subtitle": [
    {
      "fileName": "fileName0",
      "size": 40
    },
    {
      "fileName": "fileName0",
      "size": 40
    }
  ]
}
```

