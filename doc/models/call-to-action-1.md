
# Call to Action 1

## Structure

`CallToAction1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startTime` | `?int` | Optional | **Default**: `0` | getStartTime(): ?int | setStartTime(?int startTime): void |
| `endTime` | `?int` | Optional | **Default**: `0` | getEndTime(): ?int | setEndTime(?int endTime): void |
| `text` | `?string` | Optional | - | getText(): ?string | setText(?string text): void |
| `url` | `?string` | Optional | - | getUrl(): ?string | setUrl(?string url): void |
| `positionFromTop` | `?int` | Optional | **Default**: `0` | getPositionFromTop(): ?int | setPositionFromTop(?int positionFromTop): void |
| `positionFromRight` | `?int` | Optional | **Default**: `0` | getPositionFromRight(): ?int | setPositionFromRight(?int positionFromRight): void |
| `borderRadius` | `?int` | Optional | **Default**: `0` | getBorderRadius(): ?int | setBorderRadius(?int borderRadius): void |
| `fontColor` | `?string` | Optional | - | getFontColor(): ?string | setFontColor(?string fontColor): void |
| `backgroundColor` | `?string` | Optional | - | getBackgroundColor(): ?string | setBackgroundColor(?string backgroundColor): void |
| `htmlTarget` | `?string` | Optional | - | getHtmlTarget(): ?string | setHtmlTarget(?string htmlTarget): void |

## Example (as JSON)

```json
{
  "start_time": 1,
  "end_time": 90,
  "text": "some test",
  "url": "https://some-url.com",
  "position_from_top": 11,
  "position_from_right": 23,
  "border_radius": 11,
  "font_color": "#000001",
  "background_color": "#ffffff",
  "html_target": "_blank"
}
```

