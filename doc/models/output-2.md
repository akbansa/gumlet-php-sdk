
# Output 2

## Structure

`Output2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `format` | `?string` | Optional | - | getFormat(): ?string | setFormat(?string format): void |
| `statusUrl` | `?string` | Optional | - | getStatusUrl(): ?string | setStatusUrl(?string statusUrl): void |
| `playbackUrl` | `?string` | Optional | - | getPlaybackUrl(): ?string | setPlaybackUrl(?string playbackUrl): void |
| `dashPlaybackUrl` | `?string` | Optional | - | getDashPlaybackUrl(): ?string | setDashPlaybackUrl(?string dashPlaybackUrl): void |
| `thumbnailUrl` | `?(string[])` | Optional | - | getThumbnailUrl(): ?array | setThumbnailUrl(?array thumbnailUrl): void |
| `storageDetails` | [`?StorageDetails`](../../doc/models/storage-details.md) | Optional | - | getStorageDetails(): ?StorageDetails | setStorageDetails(?StorageDetails storageDetails): void |
| `transcriptionWordLevelTimestamps` | `?string` | Optional | - | getTranscriptionWordLevelTimestamps(): ?string | setTranscriptionWordLevelTimestamps(?string transcriptionWordLevelTimestamps): void |
| `storageBytes` | `?int` | Optional | **Default**: `0` | getStorageBytes(): ?int | setStorageBytes(?int storageBytes): void |
| `previewThumbnailsUrl` | `?string` | Optional | - | getPreviewThumbnailsUrl(): ?string | setPreviewThumbnailsUrl(?string previewThumbnailsUrl): void |

## Example (as JSON)

```json
{
  "format": "abr",
  "status_url": "https://api.gumlet.com/v1/video/assets/67e4ece9403562dbea654261",
  "playback_url": "https://video.gumlet.io/67e4ece9403562dbea65425f/67e4ece9403562dbea654261/main.m3u8",
  "dash_playback_url": "https://video.gumlet.io/67e4ece9403562dbea65425f/67e4ece9403562dbea654261/main.mpd",
  "transcription_word_level_timestamps": "https://video.gumlet.io/67e4ece9403562dbea65425f/67e4ece9403562dbea654261/67e4ece9403562dbea654261-transcription-word-level-timestamp.json?token=5589a9b725fabe0586e37782c3eb8e083a84e5c2&expires=1744100014337",
  "storage_bytes": 674034917,
  "preview_thumbnails_url": "https://video.gumlet.io/67e4ece9403562dbea65425f/67e4ece9403562dbea654261/preview_thumbnails.vtt",
  "thumbnail_url": [
    "thumbnail_url8",
    "thumbnail_url9"
  ]
}
```

