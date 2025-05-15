
# Gcs

This is a required field if collection type is gcs.

## Structure

`Gcs`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bucketName` | `string` | Required | - | getBucketName(): string | setBucketName(string bucketName): void |
| `serviceAccountKey` | `string` | Required | - | getServiceAccountKey(): string | setServiceAccountKey(string serviceAccountKey): void |

## Example (as JSON)

```json
{
  "bucket_name": "bucket_name0",
  "service_account_key": "service_account_key2"
}
```

