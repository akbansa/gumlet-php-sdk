
# Embed Details 1

## Structure

`EmbedDetails1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `poweredByGumletOverlay` | `?bool` | Optional | **Default**: `true` | getPoweredByGumletOverlay(): ?bool | setPoweredByGumletOverlay(?bool poweredByGumletOverlay): void |
| `allowDrmProtectedVideos` | `?bool` | Optional | **Default**: `true` | getAllowDrmProtectedVideos(): ?bool | setAllowDrmProtectedVideos(?bool allowDrmProtectedVideos): void |
| `preload` | `?bool` | Optional | **Default**: `true` | getPreload(): ?bool | setPreload(?bool preload): void |
| `autoplay` | `?bool` | Optional | **Default**: `true` | getAutoplay(): ?bool | setAutoplay(?bool autoplay): void |
| `logoWidth` | `?int` | Optional | **Default**: `0` | getLogoWidth(): ?int | setLogoWidth(?int logoWidth): void |
| `logoHeight` | `?int` | Optional | **Default**: `0` | getLogoHeight(): ?int | setLogoHeight(?int logoHeight): void |
| `playerColor` | `?string` | Optional | - | getPlayerColor(): ?string | setPlayerColor(?string playerColor): void |
| `isSeo` | `?bool` | Optional | **Default**: `true` | getIsSeo(): ?bool | setIsSeo(?bool isSeo): void |
| `dynamicWatermark` | `?bool` | Optional | **Default**: `true` | getDynamicWatermark(): ?bool | setDynamicWatermark(?bool dynamicWatermark): void |
| `watermarkFontSize` | `?int` | Optional | **Default**: `0` | getWatermarkFontSize(): ?int | setWatermarkFontSize(?int watermarkFontSize): void |
| `watermarkFontColor` | `?string` | Optional | - | getWatermarkFontColor(): ?string | setWatermarkFontColor(?string watermarkFontColor): void |
| `watermarkBgColor` | `?string` | Optional | - | getWatermarkBgColor(): ?string | setWatermarkBgColor(?string watermarkBgColor): void |
| `watermarkInterval` | `?int` | Optional | **Default**: `0` | getWatermarkInterval(): ?int | setWatermarkInterval(?int watermarkInterval): void |
| `disableSeek` | `?bool` | Optional | **Default**: `true` | getDisableSeek(): ?bool | setDisableSeek(?bool disableSeek): void |
| `disablePlayerControls` | `?bool` | Optional | **Default**: `true` | getDisablePlayerControls(): ?bool | setDisablePlayerControls(?bool disablePlayerControls): void |
| `loop` | `?bool` | Optional | **Default**: `true` | getLoop(): ?bool | setLoop(?bool loop): void |
| `subtitleEnabled` | `?bool` | Optional | **Default**: `true` | getSubtitleEnabled(): ?bool | setSubtitleEnabled(?bool subtitleEnabled): void |

## Example (as JSON)

```json
{
  "powered_by_gumlet_overlay": true,
  "allow_drm_protected_videos": true,
  "preload": true,
  "autoplay": false,
  "logo_width": 100,
  "logo_height": 100,
  "player_color": "#6658ea",
  "is_seo": true,
  "dynamic_watermark": false,
  "watermark_font_size": 20,
  "watermark_font_color": "#ff0000",
  "watermark_bg_color": "transparent",
  "watermark_interval": 1000,
  "disable_seek": false,
  "disable_player_controls": false,
  "loop": false,
  "subtitle_enabled": false
}
```

