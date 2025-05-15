
# Error 28

## Structure

`Error28`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `?string` | Optional | - | getCode(): ?string | setCode(?string code): void |
| `message` | `?string` | Optional | - | getMessage(): ?string | setMessage(?string message): void |
| `extra` | `?array` | Optional | - | getExtra(): ?array | setExtra(?array extra): void |
| `param` | `?string` | Optional | - | getParam(): ?string | setParam(?string param): void |

## Example (as JSON)

```json
{
  "code": "parameter_missing",
  "message": "One or more required values are missing.",
  "param": "metrics",
  "extra": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

