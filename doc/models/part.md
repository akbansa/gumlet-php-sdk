
# Part

## Structure

`Part`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `partNumber` | `?int` | Optional | - | getPartNumber(): ?int | setPartNumber(?int partNumber): void |
| `eTag` | `?string` | Optional | ETag received while uploading the part using PUT | getETag(): ?string | setETag(?string eTag): void |

## Example (as JSON)

```json
{
  "PartNumber": 218,
  "ETag": "ETag2"
}
```

