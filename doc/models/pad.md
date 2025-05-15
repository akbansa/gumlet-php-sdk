
# Pad

This transformation can be used to add padding to the video.

## Structure

`Pad`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `top` | `?string` | Optional | Width of padding on the top side. Values can be an absolute number of pixels or a percentage value relative to the video height. **Default: `%5`** | getTop(): ?string | setTop(?string top): void |
| `left` | `?string` | Optional | Width of padding on the left side. Values can be an absolute number of pixels or a percentage value relative to the video width. **Default: `0`** | getLeft(): ?string | setLeft(?string left): void |
| `bottom` | `?string` | Optional | Width of padding on the bottom side. Values can be an absolute number of pixels or a percentage value relative to the video height. **Default: `%5`** | getBottom(): ?string | setBottom(?string bottom): void |
| `right` | `?string` | Optional | Width of padding on the right side. Values can be an absolute number of pixels or a percentage value relative to the video width. **Default: `0`** | getRight(): ?string | setRight(?string right): void |
| `color` | `?string` | Optional | Color of padding area. **Default: `black`** | getColor(): ?string | setColor(?string color): void |

## Example (as JSON)

```json
{
  "top": "top6",
  "left": "left4",
  "bottom": "bottom6",
  "right": "right4",
  "color": "color2"
}
```

