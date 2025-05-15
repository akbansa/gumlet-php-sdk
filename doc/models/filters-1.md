
# Filters 1

## Structure

`Filters1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | [`string(NameEnum)`](../../doc/models/name-enum.md) | Required | Name of the breakdown to filter data on. | getName(): string | setName(string name): void |
| `value` | `string` | Required | Value to be matched for the given filter name. Currently we support exact matches. | getValue(): string | setValue(string value): void |
| `operator` | [`?string(OperatorEnum)`](../../doc/models/operator-enum.md) | Optional | Operator to be used while filtering the data<br><br>**Default**: `OperatorEnum::EQUALS` | getOperator(): ?string | setOperator(?string operator): void |

## Example (as JSON)

```json
{
  "name": "custom_video_id",
  "value": "value8",
  "operator": "equals"
}
```

