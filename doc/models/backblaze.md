
# Backblaze

This is a required field if collection type is backblaze.

## Structure

`Backblaze`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bucketName` | `string` | Required | - | getBucketName(): string | setBucketName(string bucketName): void |
| `bucketRegion` | `?string` | Optional | bucket_region or endpoint | getBucketRegion(): ?string | setBucketRegion(?string bucketRegion): void |
| `endpoint` | `?string` | Optional | bucket_region or endpoint | getEndpoint(): ?string | setEndpoint(?string endpoint): void |
| `accessKey` | `string` | Required | - | getAccessKey(): string | setAccessKey(string accessKey): void |
| `secret` | `string` | Required | - | getSecret(): string | setSecret(string secret): void |
| `basePath` | `?string` | Optional | - | getBasePath(): ?string | setBasePath(?string basePath): void |

## Example (as JSON)

```json
{
  "bucket_name": "bucket_name0",
  "bucket_region": "bucket_region0",
  "endpoint": "endpoint4",
  "access_key": "access_key4",
  "secret": "secret2",
  "base_path": "base_path8"
}
```

