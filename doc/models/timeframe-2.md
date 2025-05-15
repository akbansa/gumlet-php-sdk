
# Timeframe 2

The timeframe to get the data for. Currently we only support maximum difference between `start_at` and `end_at` to be *60 days*

## Structure

`Timeframe2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startAt` | `?DateTime` | Optional | Use <b>yyyy-MM-dd</b> format | getStartAt(): ?\DateTime | setStartAt(?\DateTime startAt): void |
| `endAt` | `?DateTime` | Optional | Use <b>yyyy-MM-dd</b> format | getEndAt(): ?\DateTime | setEndAt(?\DateTime endAt): void |

## Example (as JSON)

```json
{
  "start_at": "2016-03-13",
  "end_at": "2016-03-13"
}
```

