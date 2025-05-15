
# Video Assets Subtitle Upload Request

## Structure

`VideoAssetsSubtitleUploadRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `languageCodes` | `?(string[])` | Optional | List of language Code to upload subtitle file  (use <a href='https://en.wikipedia.org/wiki/List_of_ISO_639_language_codes'> ISO 639-1 </a> Language Codes) | getLanguageCodes(): ?array | setLanguageCodes(?array languageCodes): void |

## Example (as JSON)

```json
{
  "language_codes": [
    "language_codes1",
    "language_codes0"
  ]
}
```

