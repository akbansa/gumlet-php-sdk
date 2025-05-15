
# Org Webhooks Response

## Structure

`OrgWebhooksResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `url` | `?string` | Optional | - | getUrl(): ?string | setUrl(?string url): void |
| `triggers` | `?(string[])` | Optional | - | getTriggers(): ?array | setTriggers(?array triggers): void |
| `createdAt` | `?string` | Optional | - | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `updatedAt` | `?string` | Optional | - | getUpdatedAt(): ?string | setUpdatedAt(?string updatedAt): void |
| `sources` | `?(string[])` | Optional | - | getSources(): ?array | setSources(?array sources): void |
| `secretToken` | `?string` | Optional | - | getSecretToken(): ?string | setSecretToken(?string secretToken): void |

## Example (as JSON)

```json
{
  "id": "65eed75eadeea8478f14ebd4",
  "url": "https://webhook.site/16df065a-b398-48bc-b825-b0804979c5f1",
  "created_at": "03/11/2024 10:05:18",
  "updated_at": "03/11/2024 10:05:18",
  "secret_token": "rnVNfIKgnH",
  "triggers": [
    "triggers8",
    "triggers7",
    "triggers6"
  ]
}
```

