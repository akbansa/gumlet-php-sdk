
# Video Protection 1

Gumlet provides multiple options for securing your video playback.

## Structure

`VideoProtection1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `signedUrl` | `?bool` | Optional | **Default**: `false` | getSignedUrl(): ?bool | setSignedUrl(?bool signedUrl): void |
| `signedUrlSecret` | `?string` | Optional | - | getSignedUrlSecret(): ?string | setSignedUrlSecret(?string signedUrlSecret): void |
| `blacklistedCountries` | `?(string[])` | Optional | Example: ["IN","USA"] | getBlacklistedCountries(): ?array | setBlacklistedCountries(?array blacklistedCountries): void |
| `whitelistedReferrers` | `?string` | Optional | - | getWhitelistedReferrers(): ?string | setWhitelistedReferrers(?string whitelistedReferrers): void |

## Example (as JSON)

```json
{
  "signed_url": false,
  "signed_url_secret": "signed_url_secret0",
  "blacklisted_countries": [
    "blacklisted_countries1"
  ],
  "whitelisted_referrers": "whitelisted_referrers8"
}
```

