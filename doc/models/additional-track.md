
# Additional Track

## Structure

`AdditionalTrack`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `url` | `string` | Required | URL or web address of a file that Gumlet should download to add a stream. | getUrl(): string | setUrl(string url): void |
| `type` | `string` | Required | Type of additional track. Value can be either audio or subtitle. | getType(): string | setType(string type): void |
| `languageCode` | `string` | Required | The language code value represents BCP 47 specification compliant value. For example, en for English. | getLanguageCode(): string | setLanguageCode(string languageCode): void |
| `name` | `?string` | Optional | The name of the track containing a human-readable description. | getName(): ?string | setName(?string name): void |

## Example (as JSON)

```json
{
  "url": "url6",
  "type": "type8",
  "language_code": "language_code0",
  "name": "name2"
}
```

