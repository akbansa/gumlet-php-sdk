
# Text Overlay

Text overlay can be used to brand a video or add a label in the form of text.

## Structure

`TextOverlay`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `text` | `string` | Required | Text to be overlayed on video. | getText(): string | setText(string text): void |
| `horizontalAlign` | `?string` | Optional | This parameter specifies the horizontal alignment of the overlayed image and can be either `left` or `right`. **Default: `right`** | getHorizontalAlign(): ?string | setHorizontalAlign(?string horizontalAlign): void |
| `verticalAlign` | `?string` | Optional | This parameter specifies the vertical alignment of the overlayed image and can be either `top` or `bottom`. **Default: `bottom`** | getVerticalAlign(): ?string | setVerticalAlign(?string verticalAlign): void |
| `horizontalMargin` | `?string` | Optional | This parameter defines the horizontal coordinate value of the corner (determined by `horizontal_align`) of the overlay area. Values can be an absolute number of pixels relative to the video width. **Default: `0`** | getHorizontalMargin(): ?string | setHorizontalMargin(?string horizontalMargin): void |
| `verticalMargin` | `?string` | Optional | This parameter defines the vertical coordinate value of the corner (determined by vertical_align) of the overlay area. Values can be an absolute number of pixels relative to the video height. **Default: `0`** | getVerticalMargin(): ?string | setVerticalMargin(?string verticalMargin): void |
| `color` | `?string` | Optional | Font color for text. **Default: `black`** | getColor(): ?string | setColor(?string color): void |
| `font` | `?string` | Optional | Font family type for text. **Default: `sans`** | getFont(): ?string | setFont(?string font): void |
| `fontSize` | `?string` | Optional | Font size in pixels. **Default: `16`** | getFontSize(): ?string | setFontSize(?string fontSize): void |
| `opacity` | `?string` | Optional | Overlay text opacity can be specified with opacity parameter where value can be between `0` and `100` where `0` is considered completely transparent and `100` is considered completely opaque. **Default: `100`** | getOpacity(): ?string | setOpacity(?string opacity): void |
| `box` | `?bool` | Optional | This parameter allows rectangular drawing a box over the overlayed text. **Default: `false`** | getBox(): ?bool | setBox(?bool box): void |
| `boxColor` | `?string` | Optional | Box color can be specified with this parameter. **Default: `white`** | getBoxColor(): ?string | setBoxColor(?string boxColor): void |
| `boxOpacity` | `?string` | Optional | Box opacity can be specified with this parameter. **Default: `100`** | getBoxOpacity(): ?string | setBoxOpacity(?string boxOpacity): void |
| `boxBorder` | `?string` | Optional | Padding between the box border and the text can be specified with this parameter in pixels. **Default: `0`** | getBoxBorder(): ?string | setBoxBorder(?string boxBorder): void |

## Example (as JSON)

```json
{
  "text": "text2",
  "horizontal_align": "horizontal_align2",
  "vertical_align": "vertical_align0",
  "horizontal_margin": "horizontal_margin0",
  "vertical_margin": "vertical_margin0",
  "color": "color6"
}
```

