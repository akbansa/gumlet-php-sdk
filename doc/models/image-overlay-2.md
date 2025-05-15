
# Image Overlay 2

## Structure

`ImageOverlay2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `url` | `?string` | Optional | - | getUrl(): ?string | setUrl(?string url): void |
| `verticalAlign` | `?string` | Optional | - | getVerticalAlign(): ?string | setVerticalAlign(?string verticalAlign): void |
| `horizontalAlign` | `?string` | Optional | - | getHorizontalAlign(): ?string | setHorizontalAlign(?string horizontalAlign): void |
| `verticalMargin` | `?string` | Optional | - | getVerticalMargin(): ?string | setVerticalMargin(?string verticalMargin): void |
| `horizontalMargin` | `?string` | Optional | - | getHorizontalMargin(): ?string | setHorizontalMargin(?string horizontalMargin): void |
| `width` | `?string` | Optional | - | getWidth(): ?string | setWidth(?string width): void |
| `height` | `?string` | Optional | - | getHeight(): ?string | setHeight(?string height): void |
| `imageDownloaded` | `?bool` | Optional | **Default**: `true` | getImageDownloaded(): ?bool | setImageDownloaded(?bool imageDownloaded): void |

## Example (as JSON)

```json
{
  "url": "https://demo.gumlet.io/logo.png",
  "vertical_align": "top",
  "horizontal_align": "right",
  "vertical_margin": "5%",
  "horizontal_margin": "5%",
  "width": "20%",
  "height": "20%",
  "image_downloaded": true
}
```

