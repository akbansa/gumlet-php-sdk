
# Error

## Structure

`Error`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `?string` | Optional | - | getCode(): ?string | setCode(?string code): void |
| `message` | `?string` | Optional | - | getMessage(): ?string | setMessage(?string message): void |
| `param` | `?string` | Optional | - | getParam(): ?string | setParam(?string param): void |

## Example (as JSON)

```json
{
  "code": "parameter_missing",
  "message": "One or more required values are missing.",
  "param": "name"
}
```

