
# Sort

Sort the response data according to key or value

## Structure

`Sort`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `by` | [`string(ByEnum)`](../../doc/models/by-enum.md) | Required | **Default**: `ByEnum::KEY` | getBy(): string | setBy(string by): void |
| `order` | [`string(OrderEnum)`](../../doc/models/order-enum.md) | Required | **Default**: `OrderEnum::ASC` | getOrder(): string | setOrder(string order): void |

## Example (as JSON)

```json
{
  "by": "key",
  "order": "asc"
}
```

