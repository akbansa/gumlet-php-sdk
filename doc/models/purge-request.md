
# Purge Request

## Structure

`PurgeRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paths` | `?(string[])` | Optional | An array of path of images to purge. It should be provided without any query parameters. | getPaths(): ?array | setPaths(?array paths): void |

## Example (as JSON)

```json
{
  "paths": [
    "paths7"
  ]
}
```

