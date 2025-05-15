
# Upload Response

## Structure

`UploadResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `languageCode` | `?string` | Optional | Language Code for uploadeds.srt file. | getLanguageCode(): ?string | setLanguageCode(?string languageCode): void |
| `uploaded` | `?bool` | Optional | Status of language uploaded .srt file. (If status code was 200, You can mark true else false) | getUploaded(): ?bool | setUploaded(?bool uploaded): void |

## Example (as JSON)

```json
{
  "language_code": "language_code2",
  "uploaded": false
}
```

