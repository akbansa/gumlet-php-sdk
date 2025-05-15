
# Aws 4

This is a required field if source type is aws.

## Structure

`Aws4`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bucketName` | `string` | Required | - | getBucketName(): string | setBucketName(string bucketName): void |
| `bucketRegion` | `string` | Required | - | getBucketRegion(): string | setBucketRegion(string bucketRegion): void |
| `accessKey` | `string` | Required | - | getAccessKey(): string | setAccessKey(string accessKey): void |
| `secret` | `string` | Required | - | getSecret(): string | setSecret(string secret): void |
| `basePath` | `?string` | Optional | - | getBasePath(): ?string | setBasePath(?string basePath): void |
| `endpoint` | `?string` | Optional | - | getEndpoint(): ?string | setEndpoint(?string endpoint): void |

## Example (as JSON)

```json
{
  "bucket_name": "bucket_name0",
  "bucket_region": "bucket_region0",
  "access_key": "access_key4",
  "secret": "secret8",
  "base_path": "base_path2",
  "endpoint": "endpoint4"
}
```

