
# Crop

This transformation can be used to crop the video by defining a rectangular area within the dimensions of the output video.

## Structure

`Crop`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `horizontalMargin` | `?string` | Optional | This parameter defines the horizontal coordinate value of the upper-left corner of the cropping area. Values can be an absolute number of pixels or a percentage value relative to the video width. **Default: `0`** | getHorizontalMargin(): ?string | setHorizontalMargin(?string horizontalMargin): void |
| `verticalMargin` | `?string` | Optional | This parameter defines the vertical coordinate value of the upper-left corner of the cropping area. Values can be an absolute number of pixels or a percentage value relative to the video height. **Default: `0`** | getVerticalMargin(): ?string | setVerticalMargin(?string verticalMargin): void |
| `width` | `string` | Required | Width of the cropping area in pixels. | getWidth(): string | setWidth(string width): void |
| `height` | `string` | Required | Height of the cropping area in pixels. | getHeight(): string | setHeight(string height): void |

## Example (as JSON)

```json
{
  "horizontal_margin": "horizontal_margin6",
  "vertical_margin": "vertical_margin6",
  "width": "width2",
  "height": "height4"
}
```

