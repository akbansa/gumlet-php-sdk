
# Video Analytics Request

## Structure

`VideoAnalyticsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `metrics` | `string[]` | Required | Define the metric you need the data for, currently we only support `top_assets` and 'bandwidth_consumption_by_collection' | getMetrics(): array | setMetrics(array metrics): void |
| `dateRange` | [`DateRange`](../../doc/models/date-range.md) | Required | The timeframe to get the data for. Currently we only support a maximum of 60 days between `start_at` and `end_at`. | getDateRange(): DateRange | setDateRange(DateRange dateRange): void |
| `topAssetsCount` | `?int` | Optional | Count of video assets that should be returned, by default top *five assets* are returned but at max *only 100 assets* can be retrieved.<br><br>**Default**: `5` | getTopAssetsCount(): ?int | setTopAssetsCount(?int topAssetsCount): void |
| `filters` | [`?Filters`](../../doc/models/filters.md) | Optional | - | getFilters(): ?Filters | setFilters(?Filters filters): void |

## Example (as JSON)

```json
{
  "metrics": [
    "metrics0"
  ],
  "date_range": {
    "start_at": "2016-03-13",
    "end_at": "2016-03-13"
  },
  "top_assets_count": 5,
  "filters": {
    "collection_id": "collection_id2"
  }
}
```

