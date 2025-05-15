
# Video Assets Subtitle Upload Event Request

## Structure

`VideoAssetsSubtitleUploadEventRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uploadResponses` | [`?(UploadResponse[])`](../../doc/models/upload-response.md) | Optional | - | getUploadResponses(): ?array | setUploadResponses(?array uploadResponses): void |

## Example (as JSON)

```json
{
  "upload_responses": [
    {
      "language_code": "language_code8",
      "uploaded": false
    },
    {
      "language_code": "language_code8",
      "uploaded": false
    },
    {
      "language_code": "language_code8",
      "uploaded": false
    }
  ]
}
```

