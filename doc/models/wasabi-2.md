
# Wasabi 2

This is a required field if source type is wasabi.

## Structure

`Wasabi2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bucketName` | `string` | Required | - | getBucketName(): string | setBucketName(string bucketName): void |
| `bucketRegion` | `string` | Required | - | getBucketRegion(): string | setBucketRegion(string bucketRegion): void |
| `accessKey` | `string` | Required | - | getAccessKey(): string | setAccessKey(string accessKey): void |
| `secret` | `string` | Required | - | getSecret(): string | setSecret(string secret): void |
| `basePath` | `?string` | Optional | - | getBasePath(): ?string | setBasePath(?string basePath): void |

## Example (as JSON)

```json
{
  "bucket_name": "bucket_name4",
  "bucket_region": "bucket_region4",
  "access_key": "access_key8",
  "secret": "secret6",
  "base_path": "base_path2"
}
```

