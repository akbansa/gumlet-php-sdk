
# Video Assets Request

## Structure

`VideoAssetsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `input` | `string` | Required | URL or web address of a file that Gumlet should download to create a new asset. | getInput(): string | setInput(string input): void |
| `collectionId` | `string` | Required | Gumlet video collection id. | getCollectionId(): string | setCollectionId(string collectionId): void |
| `profileId` | `?string` | Optional | Provide `profile_id` of the previously created video profile. This parameter will override all the parameters (except `input` and `collection_id`) from the video profile. | getProfileId(): ?string | setProfileId(?string profileId): void |
| `format` | [`string(FormatEnum)`](../../doc/models/format-enum.md) | Required | Transcode and deliver the asset in the requested format. The options can be one of `ABR` (HLS + DASH) and`MP4`. | getFormat(): string | setFormat(string format): void |
| `tag` | `?string` | Optional | Specify a text string or identifier which can identify an asset or bunch of assets later. | getTag(): ?string | setTag(?string tag): void |
| `title` | `?string` | Optional | Specify a text string or identifier which can be used for filtering or searching the asset. | getTitle(): ?string | setTitle(?string title): void |
| `description` | `?string` | Optional | Attach some textual data with the asset. This field is neither searchable nor filterable. | getDescription(): ?string | setDescription(?string description): void |
| `metadata` | `?string` | Optional | Add your metadata you want to associate with this asset.<br/> Example: <br/> <code>  {  "internal_video_id" : "123Abc"  }  </code> | getMetadata(): ?string | setMetadata(?string metadata): void |
| `width` | `?string` | Optional | Resize video with the given width. Can be an absolute value in pixels or a percentage value with the `%` suffix. Specified values greater than the original asset width will be ignored. Applicable only when specified format is `MP4`. | getWidth(): ?string | setWidth(?string width): void |
| `height` | `?string` | Optional | Resize video with the given height. Can be an absolute value in pixels or a percentage value with the `%` suffix. Specified values greater than the original asset height will be ignored. Applicable only when specified format is `MP4`. | getHeight(): ?string | setHeight(?string height): void |
| `resolution` | `?string` | Optional | Required resolutions of the transformed asset in case of HLS or MPEG-DASH delivery format. Can be a comma separated string out of the following values: `240p`, `360p`, `480p`, `540p`, `720p`, and `1080p`. Re-sized rendition will retain the input aspect ratio. | getResolution(): ?string | setResolution(?string resolution): void |
| `crop` | [`?Crop`](../../doc/models/crop.md) | Optional | This transformation can be used to crop the video by defining a rectangular area within the dimensions of the output video. | getCrop(): ?Crop | setCrop(?Crop crop): void |
| `pad` | [`?Pad`](../../doc/models/pad.md) | Optional | This transformation can be used to add padding to the video. | getPad(): ?Pad | setPad(?Pad pad): void |
| `trim` | [`?Trim`](../../doc/models/trim.md) | Optional | Trim transformation can be used to trim videos based on time duration. | getTrim(): ?Trim | setTrim(?Trim trim): void |
| `imageOverlay` | [`?ImageOverlay`](../../doc/models/image-overlay.md) | Optional | Image overlay can be used to brand a video or add a visual label in the form of an image. | getImageOverlay(): ?ImageOverlay | setImageOverlay(?ImageOverlay imageOverlay): void |
| `textOverlay` | [`?TextOverlay`](../../doc/models/text-overlay.md) | Optional | Text overlay can be used to brand a video or add a label in the form of text. | getTextOverlay(): ?TextOverlay | setTextOverlay(?TextOverlay textOverlay): void |
| `animatedGif` | [`?AnimatedGif`](../../doc/models/animated-gif.md) | Optional | Create an animated GIF from the video. | getAnimatedGif(): ?AnimatedGif | setAnimatedGif(?AnimatedGif animatedGif): void |
| `additionalTracks` | [`?(AdditionalTrack[])`](../../doc/models/additional-track.md) | Optional | Add additional Audio / Subtitle tracks to Gumlet for transcoding and delivery along with video asset track. | getAdditionalTracks(): ?array | setAdditionalTracks(?array additionalTracks): void |
| `generateSubtitles` | [`?GenerateSubtitles`](../../doc/models/generate-subtitles.md) | Optional | Gumlet allows to generate subtitles from the audio stream (use <a href='https://en.wikipedia.org/wiki/List_of_ISO_639_language_codes'> ISO 639-1 </a> Language Codes) | getGenerateSubtitles(): ?GenerateSubtitles | setGenerateSubtitles(?GenerateSubtitles generateSubtitles): void |
| `mp4Access` | `?bool` | Optional | Creates `MP4` version for download purpose in case of `MPEG-DASH` or `HLS` delivery format. **Default: `false`** | getMp4Access(): ?bool | setMp4Access(?bool mp4Access): void |
| `perTitleEncoding` | `?bool` | Optional | Gumlet analyzes each input video on a wide range of visual aspects. Based on the analysis, it chooses a unique set of transcoding options for processing the video. This ensures that the output video is of optimal size and best quality. **Default: `true`** | getPerTitleEncoding(): ?bool | setPerTitleEncoding(?bool perTitleEncoding): void |
| `processLowResolutionInput` | `?bool` | Optional | Currently, the minimum supported frame size is `57600` (`240x240`) pixels for `HLS/DASH` and `21025` (`145x145`) pixels for `MP4` format. However, enabling this flag will allow Gumlet to simply put your video asset into the specified delivery format without transcoding and optimization. Enabling this flag will cause any kind of specified video transformation to be ignored if you input video asset frame size is lower than the minimum supported frame size for the specified format. **Default: `false`** | getProcessLowResolutionInput(): ?bool | setProcessLowResolutionInput(?bool processLowResolutionInput): void |
| `audioOnly` | `?bool` | Optional | This flag allows Gumlet to transcode and deliver audio-only in the specified format. In this case, video transformation and thumbnails/animated GIFs would not be created. **Default: `false`** | getAudioOnly(): ?bool | setAudioOnly(?bool audioOnly): void |
| `enableDrm` | `?bool` | Optional | Enable DRM encryption for transcoded videos. Gumlet supports Widevine and Fairplay DRMs. | getEnableDrm(): ?bool | setEnableDrm(?bool enableDrm): void |
| `callToActions` | [`?(CallToAction[])`](../../doc/models/call-to-action.md) | Optional | CTA, is an explicit prompt within the video content encouraging viewers to take a particular action. | getCallToActions(): ?array | setCallToActions(?array callToActions): void |
| `playlistId` | `?string` | Optional | Add this asset to a playlist. | getPlaylistId(): ?string | setPlaylistId(?string playlistId): void |

## Example (as JSON)

```json
{
  "input": "input0",
  "collection_id": "collection_id4",
  "profile_id": "profile_id8",
  "format": "ABR",
  "tag": "tag4",
  "title": "title2",
  "description": "description8",
  "metadata": "metadata4"
}
```

