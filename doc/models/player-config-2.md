
# Player Config 2

Configure player settings for this playlist, it overrides the setting set on collection.

## Structure

`PlayerConfig2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `preload` | `?bool` | Optional | - | getPreload(): ?bool | setPreload(?bool preload): void |
| `autoplay` | `?bool` | Optional | - | getAutoplay(): ?bool | setAutoplay(?bool autoplay): void |
| `disableSeek` | `?bool` | Optional | - | getDisableSeek(): ?bool | setDisableSeek(?bool disableSeek): void |
| `disablePlayerControls` | `?bool` | Optional | - | getDisablePlayerControls(): ?bool | setDisablePlayerControls(?bool disablePlayerControls): void |
| `poweredByGumletOverlay` | `?bool` | Optional | - | getPoweredByGumletOverlay(): ?bool | setPoweredByGumletOverlay(?bool poweredByGumletOverlay): void |
| `allowDrmProtectedVideos` | `?bool` | Optional | - | getAllowDrmProtectedVideos(): ?bool | setAllowDrmProtectedVideos(?bool allowDrmProtectedVideos): void |
| `loop` | `?bool` | Optional | - | getLoop(): ?bool | setLoop(?bool loop): void |
| `playerColor` | `?string` | Optional | - | getPlayerColor(): ?string | setPlayerColor(?string playerColor): void |
| `includeSeo` | `?bool` | Optional | - | getIncludeSeo(): ?bool | setIncludeSeo(?bool includeSeo): void |
| `subtitleEnabled` | `?bool` | Optional | - | getSubtitleEnabled(): ?bool | setSubtitleEnabled(?bool subtitleEnabled): void |
| `pixelTags` | `?array` | Optional | - | getPixelTags(): ?array | setPixelTags(?array pixelTags): void |
| `logoWidth` | `?int` | Optional | - | getLogoWidth(): ?int | setLogoWidth(?int logoWidth): void |
| `logoHeight` | `?int` | Optional | - | getLogoHeight(): ?int | setLogoHeight(?int logoHeight): void |
| `dynamicWatermark` | `?bool` | Optional | - | getDynamicWatermark(): ?bool | setDynamicWatermark(?bool dynamicWatermark): void |
| `watermarkFontSize` | `?int` | Optional | - | getWatermarkFontSize(): ?int | setWatermarkFontSize(?int watermarkFontSize): void |
| `watermarkFontColor` | `?string` | Optional | - | getWatermarkFontColor(): ?string | setWatermarkFontColor(?string watermarkFontColor): void |
| `watermarkBgColor` | `?string` | Optional | - | getWatermarkBgColor(): ?string | setWatermarkBgColor(?string watermarkBgColor): void |
| `watermarkInterval` | `?int` | Optional | - | getWatermarkInterval(): ?int | setWatermarkInterval(?int watermarkInterval): void |

## Example (as JSON)

```json
{
  "preload": false,
  "autoplay": false,
  "disable_seek": false,
  "disable_player_controls": false,
  "powered_by_gumlet_overlay": false
}
```

