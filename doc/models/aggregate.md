
# Aggregate

## Structure

`Aggregate`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `metric` | [`string(Metric1Enum)`](../../doc/models/metric-1-enum.md) | Required | The metric to be aggregated for this request. | getMetric(): string | setMetric(string metric): void |
| `function` | [`string(FunctionEnum)`](../../doc/models/m-function-enum.md) | Required | Aggregation function which is to be used. | getFunction(): string | setFunction(string function): void |

## Example (as JSON)

```json
{
  "metric": "upscale_percentage",
  "function": "sum"
}
```

