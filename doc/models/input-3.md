
# Input 3

## Structure

`Input3`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transformations` | [`?Transformations3`](../../doc/models/transformations-3.md) | Optional | - | getTransformations(): ?Transformations3 | setTransformations(?Transformations3 transformations): void |
| `sourceUrl` | `?string` | Optional | - | getSourceUrl(): ?string | setSourceUrl(?string sourceUrl): void |
| `size` | `?int` | Optional | **Default**: `0` | getSize(): ?int | setSize(?int size): void |
| `duration` | `?float` | Optional | **Default**: `0` | getDuration(): ?float | setDuration(?float duration): void |
| `aspectRatio` | `?string` | Optional | - | getAspectRatio(): ?string | setAspectRatio(?string aspectRatio): void |
| `fps` | `?int` | Optional | **Default**: `0` | getFps(): ?int | setFps(?int fps): void |
| `width` | `?int` | Optional | **Default**: `0` | getWidth(): ?int | setWidth(?int width): void |
| `height` | `?int` | Optional | **Default**: `0` | getHeight(): ?int | setHeight(?int height): void |
| `additionalTracks` | [`?(AdditionalTrack1[])`](../../doc/models/additional-track-1.md) | Optional | - | getAdditionalTracks(): ?array | setAdditionalTracks(?array additionalTracks): void |

## Example (as JSON)

```json
{
  "source_url": "https://gumlet.sgp1.digitaloceanspaces.com/video/BigBuckBunny.mp4",
  "size": 158008374,
  "duration": 596.473333,
  "aspect_ratio": "16:9",
  "fps": 24,
  "width": 1280,
  "height": 720,
  "transformations": {
    "resolution": "resolution0",
    "format": "format2",
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
  }
}
```

