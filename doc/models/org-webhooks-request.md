
# Org Webhooks Request

## Structure

`OrgWebhooksRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `url` | `string` | Required | URL from the application you want to send data to. | getUrl(): string | setUrl(string url): void |
| `secretToken` | `string` | Required | Authentication token to ensure legitimacy of Gumlet Webhook request on your application. | getSecretToken(): string | setSecretToken(string secretToken): void |
| `triggers` | `string[]` | Required | Triggers for the invocation of webhookos, supported option is `status`. | getTriggers(): array | setTriggers(array triggers): void |
| `sources` | `string[]` | Required | List of video collection identifiers for which webhooks are needed to be invoked. | getSources(): array | setSources(array sources): void |

## Example (as JSON)

```json
{
  "url": "url2",
  "secret_token": "secret_token4",
  "triggers": [
    "triggers2",
    "triggers3"
  ],
  "sources": [
    "sources0",
    "sources1"
  ]
}
```

