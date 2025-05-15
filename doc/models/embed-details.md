
# Embed Details

## Structure

`EmbedDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pixelTags` | `?array` | Optional | - | getPixelTags(): ?array | setPixelTags(?array pixelTags): void |
| `preload` | `?bool` | Optional | **Default**: `true` | getPreload(): ?bool | setPreload(?bool preload): void |
| `autoplay` | `?bool` | Optional | **Default**: `true` | getAutoplay(): ?bool | setAutoplay(?bool autoplay): void |
| `logoWidth` | `?int` | Optional | **Default**: `0` | getLogoWidth(): ?int | setLogoWidth(?int logoWidth): void |
| `logoHeight` | `?int` | Optional | **Default**: `0` | getLogoHeight(): ?int | setLogoHeight(?int logoHeight): void |
| `playerColor` | `?string` | Optional | - | getPlayerColor(): ?string | setPlayerColor(?string playerColor): void |
| `isSeo` | `?bool` | Optional | **Default**: `true` | getIsSeo(): ?bool | setIsSeo(?bool isSeo): void |
| `dynamicWatermark` | `?bool` | Optional | **Default**: `true` | getDynamicWatermark(): ?bool | setDynamicWatermark(?bool dynamicWatermark): void |
| `disableSeek` | `?bool` | Optional | **Default**: `true` | getDisableSeek(): ?bool | setDisableSeek(?bool disableSeek): void |
| `disablePlayerControls` | `?bool` | Optional | **Default**: `true` | getDisablePlayerControls(): ?bool | setDisablePlayerControls(?bool disablePlayerControls): void |
| `allowDrmProtectedVideos` | `?bool` | Optional | **Default**: `true` | getAllowDrmProtectedVideos(): ?bool | setAllowDrmProtectedVideos(?bool allowDrmProtectedVideos): void |
| `poweredByGumletOverlay` | `?bool` | Optional | **Default**: `true` | getPoweredByGumletOverlay(): ?bool | setPoweredByGumletOverlay(?bool poweredByGumletOverlay): void |
| `loop` | `?bool` | Optional | **Default**: `true` | getLoop(): ?bool | setLoop(?bool loop): void |
| `subtitleEnabled` | `?bool` | Optional | **Default**: `true` | getSubtitleEnabled(): ?bool | setSubtitleEnabled(?bool subtitleEnabled): void |
| `watermarkBgColor` | `?string` | Optional | - | getWatermarkBgColor(): ?string | setWatermarkBgColor(?string watermarkBgColor): void |
| `watermarkFontColor` | `?string` | Optional | - | getWatermarkFontColor(): ?string | setWatermarkFontColor(?string watermarkFontColor): void |
| `watermarkFontSize` | `?int` | Optional | **Default**: `0` | getWatermarkFontSize(): ?int | setWatermarkFontSize(?int watermarkFontSize): void |
| `watermarkInterval` | `?int` | Optional | **Default**: `0` | getWatermarkInterval(): ?int | setWatermarkInterval(?int watermarkInterval): void |

## Example (as JSON)

```json
{
  "preload": false,
  "autoplay": false,
  "logo_width": 100,
  "logo_height": 100,
  "player_color": "#6658ea",
  "is_seo": true,
  "dynamic_watermark": false,
  "disable_seek": false,
  "disable_player_controls": false,
  "allow_drm_protected_videos": false,
  "powered_by_gumlet_overlay": false,
  "loop": false,
  "subtitle_enabled": false,
  "watermark_bg_color": "transparent",
  "watermark_font_color": "#ff0000",
  "watermark_font_size": 20,
  "watermark_interval": 1000,
  "pixel_tags": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

