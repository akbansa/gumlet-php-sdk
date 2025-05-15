
# Animated Gif 2

Create an animated GIF from a video.

## Structure

`AnimatedGif2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startOffset` | `?string` | Optional | The time (in seconds or `HH:MM:SS` format) of the video timeline where the animated gif should begin. **Default: `0`** | getStartOffset(): ?string | setStartOffset(?string startOffset): void |
| `endOffset` | `?string` | Optional | The time (in seconds or `HH:MM:SS` format) of the video timeline where the GIF ends. Defaults to `10` seconds after the start_offset. Maximum duration of GIF is limited to `10` seconds. | getEndOffset(): ?string | setEndOffset(?string endOffset): void |
| `width` | `?string` | Optional | The width in pixels (or in percentage value of asset width) of the animated GIF. Max width is `640px`. | getWidth(): ?string | setWidth(?string width): void |
| `height` | `?string` | Optional | The height in pixels (or in percentage value of asset height) of the animated GIF. Max height is `640px`. | getHeight(): ?string | setHeight(?string height): void |
| `fps` | `?string` | Optional | The frame rate of the generated GIF. Defaults to `15` fps. Max `30` fps. | getFps(): ?string | setFps(?string fps): void |

## Example (as JSON)

```json
{
  "start_offset": "start_offset8",
  "end_offset": "end_offset8",
  "width": "width2",
  "height": "height4",
  "fps": "fps0"
}
```

