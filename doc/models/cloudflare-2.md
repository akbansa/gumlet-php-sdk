
# Cloudflare 2

This is a required field if source type is cloudflare.

## Structure

`Cloudflare2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bucketName` | `string` | Required | - | getBucketName(): string | setBucketName(string bucketName): void |
| `accessKey` | `string` | Required | - | getAccessKey(): string | setAccessKey(string accessKey): void |
| `accountId` | `string` | Required | - | getAccountId(): string | setAccountId(string accountId): void |
| `secret` | `string` | Required | - | getSecret(): string | setSecret(string secret): void |
| `basePath` | `?string` | Optional | - | getBasePath(): ?string | setBasePath(?string basePath): void |

## Example (as JSON)

```json
{
  "bucket_name": "bucket_name0",
  "access_key": "access_key4",
  "account_id": "account_id8",
  "secret": "secret8",
  "base_path": "base_path2"
}
```

