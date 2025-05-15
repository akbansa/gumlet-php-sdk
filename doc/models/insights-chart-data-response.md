
# Insights Chart Data Response

## Structure

`InsightsChartDataResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `views` | [`?(View[])`](../../doc/models/view.md) | Optional | - | getViews(): ?array | setViews(?array views): void |
| `uniqueViews` | [`?(UniqueView[])`](../../doc/models/unique-view.md) | Optional | - | getUniqueViews(): ?array | setUniqueViews(?array uniqueViews): void |

## Example (as JSON)

```json
{
  "views": [
    {
      "x": 136,
      "y": {
        "key1": "val1",
        "key2": "val2"
      },
      "unit": "unit0"
    }
  ],
  "unique_views": [
    {
      "x": 228,
      "y": {
        "key1": "val1",
        "key2": "val2"
      },
      "unit": "unit8"
    },
    {
      "x": 228,
      "y": {
        "key1": "val1",
        "key2": "val2"
      },
      "unit": "unit8"
    }
  ]
}
```

