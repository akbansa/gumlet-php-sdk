
# Views

## Structure

`Views`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(Datum1[])`](../../doc/models/datum-1.md) | Optional | - | getData(): ?array | setData(?array data): void |
| `hasNextPage` | `?bool` | Optional | **Default**: `true` | getHasNextPage(): ?bool | setHasNextPage(?bool hasNextPage): void |
| `currentPage` | `?int` | Optional | **Default**: `0` | getCurrentPage(): ?int | setCurrentPage(?int currentPage): void |

## Example (as JSON)

```json
{
  "has_next_page": false,
  "current_page": 1,
  "data": [
    {
      "key": "key0",
      "value": 90,
      "unit": "unit8"
    },
    {
      "key": "key0",
      "value": 90,
      "unit": "unit8"
    }
  ]
}
```

