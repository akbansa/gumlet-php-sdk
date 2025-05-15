
# Image Analytics Request

## Structure

`ImageAnalyticsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `metrics` | `string[]` | Required | Define the metric you need the data for, currently we support "bandwidth_consumption", "requests_count","status_4xx","status_5xx","avg_response_time"" | getMetrics(): array | setMetrics(array metrics): void |
| `dateRange` | [`DateRange1`](../../doc/models/date-range-1.md) | Required | The timeframe to get the data for. Currently we only support a maximum of 30 days between `start_at` and `end_at`. | getDateRange(): DateRange1 | setDateRange(DateRange1 dateRange): void |

## Example (as JSON)

```json
{
  "metrics": [
    "metrics6"
  ],
  "date_range": {
    "start_at": "2016-03-13",
    "end_at": "2016-03-13"
  }
}
```

