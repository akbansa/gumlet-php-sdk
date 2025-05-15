
# Player Config

## Structure

`PlayerConfig`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `preload` | `?bool` | Optional | **Default**: `true` | getPreload(): ?bool | setPreload(?bool preload): void |
| `autoplay` | `?bool` | Optional | **Default**: `true` | getAutoplay(): ?bool | setAutoplay(?bool autoplay): void |
| `disableSeek` | `?bool` | Optional | **Default**: `true` | getDisableSeek(): ?bool | setDisableSeek(?bool disableSeek): void |
| `disablePlayerControls` | `?bool` | Optional | **Default**: `true` | getDisablePlayerControls(): ?bool | setDisablePlayerControls(?bool disablePlayerControls): void |
| `poweredByGumletOverlay` | `?bool` | Optional | **Default**: `true` | getPoweredByGumletOverlay(): ?bool | setPoweredByGumletOverlay(?bool poweredByGumletOverlay): void |
| `allowDrmProtectedVideos` | `?bool` | Optional | **Default**: `true` | getAllowDrmProtectedVideos(): ?bool | setAllowDrmProtectedVideos(?bool allowDrmProtectedVideos): void |
| `loop` | `?bool` | Optional | **Default**: `true` | getLoop(): ?bool | setLoop(?bool loop): void |
| `playerColor` | `?string` | Optional | - | getPlayerColor(): ?string | setPlayerColor(?string playerColor): void |
| `includeSeo` | `?bool` | Optional | **Default**: `true` | getIncludeSeo(): ?bool | setIncludeSeo(?bool includeSeo): void |
| `subtitleEnabled` | `?bool` | Optional | **Default**: `true` | getSubtitleEnabled(): ?bool | setSubtitleEnabled(?bool subtitleEnabled): void |
| `pixelTags` | `?array` | Optional | - | getPixelTags(): ?array | setPixelTags(?array pixelTags): void |
| `logoWidth` | `?int` | Optional | **Default**: `0` | getLogoWidth(): ?int | setLogoWidth(?int logoWidth): void |
| `logoHeight` | `?int` | Optional | **Default**: `0` | getLogoHeight(): ?int | setLogoHeight(?int logoHeight): void |
| `dynamicWatermark` | `?bool` | Optional | **Default**: `true` | getDynamicWatermark(): ?bool | setDynamicWatermark(?bool dynamicWatermark): void |
| `watermarkFontSize` | `?int` | Optional | **Default**: `0` | getWatermarkFontSize(): ?int | setWatermarkFontSize(?int watermarkFontSize): void |
| `watermarkFontColor` | `?string` | Optional | - | getWatermarkFontColor(): ?string | setWatermarkFontColor(?string watermarkFontColor): void |
| `watermarkBgColor` | `?string` | Optional | - | getWatermarkBgColor(): ?string | setWatermarkBgColor(?string watermarkBgColor): void |
| `watermarkInterval` | `?int` | Optional | **Default**: `0` | getWatermarkInterval(): ?int | setWatermarkInterval(?int watermarkInterval): void |

## Example (as JSON)

```json
{
  "preload": false,
  "autoplay": false,
  "disable_seek": false,
  "disable_player_controls": false,
  "powered_by_gumlet_overlay": false,
  "allow_drm_protected_videos": false,
  "loop": false,
  "player_color": "#6658ea",
  "include_seo": true,
  "subtitle_enabled": false,
  "logo_width": 100,
  "logo_height": 100,
  "dynamic_watermark": false,
  "watermark_font_size": 20,
  "watermark_font_color": "#ff0000",
  "watermark_bg_color": "transparent",
  "watermark_interval": 1000
}
```

