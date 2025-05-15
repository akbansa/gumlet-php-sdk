
# Video Streaming Duration Response

## Structure

`VideoStreamingDurationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?(Datum[])`](../../doc/models/datum.md) | Optional | - | getData(): ?array | setData(?array data): void |
| `hasNextPage` | `?bool` | Optional | **Default**: `true` | getHasNextPage(): ?bool | setHasNextPage(?bool hasNextPage): void |

## Example (as JSON)

```json
{
  "has_next_page": false,
  "data": [
    {
      "asset_id": "asset_id6",
      "units": 140
    },
    {
      "asset_id": "asset_id6",
      "units": 140
    }
  ]
}
```

