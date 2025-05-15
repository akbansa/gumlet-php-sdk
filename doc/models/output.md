
# Output

## Structure

`Output`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `format` | `?string` | Optional | - | getFormat(): ?string | setFormat(?string format): void |
| `statusUrl` | `?string` | Optional | - | getStatusUrl(): ?string | setStatusUrl(?string statusUrl): void |
| `playbackUrl` | `?string` | Optional | - | getPlaybackUrl(): ?string | setPlaybackUrl(?string playbackUrl): void |
| `thumbnailUrl` | `?(string[])` | Optional | - | getThumbnailUrl(): ?array | setThumbnailUrl(?array thumbnailUrl): void |

## Example (as JSON)

```json
{
  "format": "hls",
  "status_url": "https://api.gumlet.com/v1/video/assets/65b168a6e99b77f116c0e488",
  "playback_url": "https://video.gumlet.io/646df1c9173a4a2fcac180b4/65b168a6e99b77f116c0e488/main.m3u8",
  "thumbnail_url": [
    "thumbnail_url4",
    "thumbnail_url5"
  ]
}
```

