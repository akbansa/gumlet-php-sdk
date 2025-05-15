
# Breakdown

## Structure

`Breakdown`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | [`string(Name1Enum)`](../../doc/models/name-1-enum.md) | Required | The name of a breakdown to get the data for. | getName(): string | setName(string name): void |
| `metric` | [`string(MetricEnum)`](../../doc/models/metric-enum.md) | Required | Metric for the breakdown data. | getMetric(): string | setMetric(string metric): void |
| `page` | `?int` | Optional | Request a particular page number for the response.<br><br>**Default**: `1` | getPage(): ?int | setPage(?int page): void |
| `search` | `?string` | Optional | The API supports partially matching strings. | getSearch(): ?string | setSearch(?string search): void |
| `sort` | [`?Sort`](../../doc/models/sort.md) | Optional | Sort the response data according to key or value | getSort(): ?Sort | setSort(?Sort sort): void |
| `pageSize` | `?int` | Optional | The number of items returned in a single page. Maximum value can be 100<br><br>**Default**: `10` | getPageSize(): ?int | setPageSize(?int pageSize): void |

## Example (as JSON)

```json
{
  "name": "user_country",
  "metric": "rebuffer_count",
  "page": 1,
  "page_size": 10,
  "search": "search6",
  "sort": {
    "by": "key",
    "order": "asc"
  }
}
```

