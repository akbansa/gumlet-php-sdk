
# Call to Action 3

## Structure

`CallToAction3`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startTime` | `?int` | Optional | **Default**: `0` | getStartTime(): ?int | setStartTime(?int startTime): void |
| `endTime` | `?int` | Optional | **Default**: `0` | getEndTime(): ?int | setEndTime(?int endTime): void |
| `text` | `?string` | Optional | - | getText(): ?string | setText(?string text): void |
| `url` | `?string` | Optional | - | getUrl(): ?string | setUrl(?string url): void |
| `htmlTarget` | `?string` | Optional | - | getHtmlTarget(): ?string | setHtmlTarget(?string htmlTarget): void |

## Example (as JSON)

```json
{
  "start_time": 1,
  "end_time": 90,
  "text": "Buy here!!",
  "url": "https://some-buy-url-site.com",
  "html_target": "_blank"
}
```

