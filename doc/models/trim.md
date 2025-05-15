
# Trim

Trim transformation can be used to trim videos based on time duration.

## Structure

`Trim`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startOffset` | `float` | Required | Start offset in number of seconds or in `HH:MM:SS` format. | getStartOffset(): float | setStartOffset(float startOffset): void |
| `endOffset` | `float` | Required | End offset in number of seconds or in `HH:MM:SS` format. | getEndOffset(): float | setEndOffset(float endOffset): void |
| `duration` | `?float` | Optional | Duration can be used in conjunction with `start_offset` parameter, can be specified in number of seconds. | getDuration(): ?float | setDuration(?float duration): void |

## Example (as JSON)

```json
{
  "start_offset": 173.86,
  "end_offset": 136.36,
  "duration": 18.42
}
```

