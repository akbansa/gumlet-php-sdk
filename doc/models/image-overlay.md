
# Image Overlay

Image overlay can be used to brand a video or add a visual label in the form of an image.

## Structure

`ImageOverlay`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `url` | `string` | Required | This is the required parameter for image overlay, it can be a URL to an image that needs to be overlayed. | getUrl(): string | setUrl(string url): void |
| `horizontalMargin` | `?string` | Optional | This parameter defines the horizontal coordinate value of the corner (determined by `horizontal_align`) of the overlay area. Values can be an absolute number of pixels or a percentage value relative to the video width. **Default: `0`** | getHorizontalMargin(): ?string | setHorizontalMargin(?string horizontalMargin): void |
| `verticalMargin` | `?string` | Optional | This parameter defines the vertical coordinate value of the corner (determined by `vertical_align`) of the overlay area. Values can be an absolute number of pixels or a percentage value relative to the video height. **Default: `0`** | getVerticalMargin(): ?string | setVerticalMargin(?string verticalMargin): void |
| `horizontalAlign` | `?string` | Optional | This parameter specifies the horizontal alignment of the overlayed image and can be either `left` or `right`. **Default: `right`** | getHorizontalAlign(): ?string | setHorizontalAlign(?string horizontalAlign): void |
| `verticalAlign` | `?string` | Optional | This parameter specifies the vertical alignment of the overlayed image and can be either `top` or `bottom`. **Default: `bottom`** | getVerticalAlign(): ?string | setVerticalAlign(?string verticalAlign): void |
| `width` | `?string` | Optional | Width of the overlayed image. **Default: `image width`** | getWidth(): ?string | setWidth(?string width): void |
| `height` | `?string` | Optional | Height of the overlayed image. **Default: `image height`** | getHeight(): ?string | setHeight(?string height): void |

## Example (as JSON)

```json
{
  "url": "url8",
  "horizontal_margin": "horizontal_margin8",
  "vertical_margin": "vertical_margin2",
  "horizontal_align": "horizontal_align4",
  "vertical_align": "vertical_align8",
  "width": "width2"
}
```

