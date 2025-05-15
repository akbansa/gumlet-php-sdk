
# Video Protection

## Structure

`VideoProtection`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `signedUrl` | `?bool` | Optional | **Default**: `true` | getSignedUrl(): ?bool | setSignedUrl(?bool signedUrl): void |
| `signedUrlSecret` | `?string` | Optional | - | getSignedUrlSecret(): ?string | setSignedUrlSecret(?string signedUrlSecret): void |

## Example (as JSON)

```json
{
  "signed_url": true,
  "signed_url_secret": "47a3e2fbb1318f033b882c632bc103a8"
}
```

