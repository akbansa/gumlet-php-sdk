
# Cloudflare

This is a required field if collection type is cloudflare.

## Structure

`Cloudflare`

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
  "bucket_name": "bucket_name6",
  "access_key": "access_key8",
  "account_id": "account_id2",
  "secret": "secret4",
  "base_path": "base_path8"
}
```

