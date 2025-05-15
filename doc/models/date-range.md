
# Date Range

The timeframe to get the data for. Currently we only support a maximum of 60 days between `start_at` and `end_at`.

## Structure

`DateRange`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startAt` | `?DateTime` | Optional | The starting date to consider | getStartAt(): ?\DateTime | setStartAt(?\DateTime startAt): void |
| `endAt` | `?DateTime` | Optional | The ending date to consider | getEndAt(): ?\DateTime | setEndAt(?\DateTime endAt): void |

## Example (as JSON)

```json
{
  "start_at": "2016-03-13",
  "end_at": "2016-03-13"
}
```

