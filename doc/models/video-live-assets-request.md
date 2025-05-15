
# Video Live Assets Request

## Structure

`VideoLiveAssetsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `liveSourceId` | `string` | Required | Gumlet live video source/collection id. | getLiveSourceId(): string | setLiveSourceId(string liveSourceId): void |
| `resolution` | `string` | Required | Required resolutions in HLS delivery format for live stream. Can be an array of string out of the following values:  `240p`, `360p`, `480p`, `540p`, `720p`, and `1080p`. Re-sized rendition will retain the input aspect ratio. | getResolution(): string | setResolution(string resolution): void |
| `title` | `?string` | Optional | Your live stream asset title | getTitle(): ?string | setTitle(?string title): void |
| `mp4Access` | `?bool` | Optional | Creates <code>MP4</code> version for download purpose. | getMp4Access(): ?bool | setMp4Access(?bool mp4Access): void |

## Example (as JSON)

```json
{
  "live_source_id": "live_source_id2",
  "resolution": "resolution6",
  "title": "title8",
  "mp4_access": false
}
```

