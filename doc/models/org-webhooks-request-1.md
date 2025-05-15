
# Org Webhooks Request 1

## Structure

`OrgWebhooksRequest1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `url` | `?string` | Optional | URL from the application you want to send data to. | getUrl(): ?string | setUrl(?string url): void |
| `secretToken` | `?string` | Optional | Authentication token to ensure legitimacy of Gumlet Webhook request on your application. | getSecretToken(): ?string | setSecretToken(?string secretToken): void |
| `triggers` | `?string` | Optional | Triggers for the invocation of webhookos, supported option is `status`. | getTriggers(): ?string | setTriggers(?string triggers): void |
| `sources` | `?string` | Optional | List of video collection identifiers for which webhooks are needed to be invoked. | getSources(): ?string | setSources(?string sources): void |

## Example (as JSON)

```json
{
  "url": "url2",
  "secret_token": "secret_token4",
  "triggers": "triggers2",
  "sources": "sources8"
}
```

