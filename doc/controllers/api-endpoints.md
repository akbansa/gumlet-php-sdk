# API Endpoints

```php
$aPIEndpointsController = $client->getAPIEndpointsController();
```

## Class Name

`APIEndpointsController`

## Methods

* [List-Collections](../../doc/controllers/api-endpoints.md#list-collections)
* [Create-Collection](../../doc/controllers/api-endpoints.md#create-collection)
* [Create-Asset](../../doc/controllers/api-endpoints.md#create-asset)
* [Create-Asset-Direct-Upload](../../doc/controllers/api-endpoints.md#create-asset-direct-upload)
* [Get-Asset-Status](../../doc/controllers/api-endpoints.md#get-asset-status)
* [Delete-Asset](../../doc/controllers/api-endpoints.md#delete-asset)
* [Update-Asset](../../doc/controllers/api-endpoints.md#update-asset)
* [List-Assets](../../doc/controllers/api-endpoints.md#list-assets)
* [Select-From-Video](../../doc/controllers/api-endpoints.md#select-from-video)
* [Select-From-Image-File](../../doc/controllers/api-endpoints.md#select-from-image-file)
* [Video-Asset-Upload-Subtitle](../../doc/controllers/api-endpoints.md#video-asset-upload-subtitle)
* [Upload-Subtitle-Completion](../../doc/controllers/api-endpoints.md#upload-subtitle-completion)
* [Create-Update-Chapter](../../doc/controllers/api-endpoints.md#create-update-chapter)
* [Video-Analytics](../../doc/controllers/api-endpoints.md#video-analytics)
* [Streaming-Duration](../../doc/controllers/api-endpoints.md#streaming-duration)
* [Sign-Part](../../doc/controllers/api-endpoints.md#sign-part)
* [Complete-Multipart-Upload](../../doc/controllers/api-endpoints.md#complete-multipart-upload)
* [Create-Profile](../../doc/controllers/api-endpoints.md#create-profile)
* [List-Profiles](../../doc/controllers/api-endpoints.md#list-profiles)
* [Update-Profile](../../doc/controllers/api-endpoints.md#update-profile)
* [Get-Profile](../../doc/controllers/api-endpoints.md#get-profile)
* [Delete-Profile](../../doc/controllers/api-endpoints.md#delete-profile)
* [Update-Collection](../../doc/controllers/api-endpoints.md#update-collection)
* [Get-Collection](../../doc/controllers/api-endpoints.md#get-collection)
* [Delete-Collection](../../doc/controllers/api-endpoints.md#delete-collection)
* [Create-Playlist](../../doc/controllers/api-endpoints.md#create-playlist)
* [Get-All-Playlists](../../doc/controllers/api-endpoints.md#get-all-playlists)
* [Add-Asset-to-Playlist](../../doc/controllers/api-endpoints.md#add-asset-to-playlist)
* [Remove-Asset-From-Playlist](../../doc/controllers/api-endpoints.md#remove-asset-from-playlist)
* [Update-Playlist](../../doc/controllers/api-endpoints.md#update-playlist)
* [Get-Playlist-Assets](../../doc/controllers/api-endpoints.md#get-playlist-assets)
* [Create-Webhook](../../doc/controllers/api-endpoints.md#create-webhook)
* [Update-Webhook](../../doc/controllers/api-endpoints.md#update-webhook)
* [Delete-Webhook](../../doc/controllers/api-endpoints.md#delete-webhook)
* [Insights-Chart-Data](../../doc/controllers/api-endpoints.md#insights-chart-data)
* [Insights-Breakdown-Data](../../doc/controllers/api-endpoints.md#insights-breakdown-data)
* [Insights-Aggregated-Data](../../doc/controllers/api-endpoints.md#insights-aggregated-data)
* [Create-Image-Source](../../doc/controllers/api-endpoints.md#create-image-source)
* [List-Sources](../../doc/controllers/api-endpoints.md#list-sources)
* [Update-Image-Source](../../doc/controllers/api-endpoints.md#update-image-source)
* [Delete-Source](../../doc/controllers/api-endpoints.md#delete-source)
* [Purge-Image-Cache](../../doc/controllers/api-endpoints.md#purge-image-cache)
* [Image-Analytics](../../doc/controllers/api-endpoints.md#image-analytics)
* [Create-Live-Asset](../../doc/controllers/api-endpoints.md#create-live-asset)
* [Create-Live-Asset-Copy](../../doc/controllers/api-endpoints.md#create-live-asset-copy)
* [Get-Live-Asset-Status](../../doc/controllers/api-endpoints.md#get-live-asset-status)
* [Delete-Live-Asset](../../doc/controllers/api-endpoints.md#delete-live-asset)
* [Complete-Live-Stream](../../doc/controllers/api-endpoints.md#complete-live-stream)
* [Filter-Live-Assets](../../doc/controllers/api-endpoints.md#filter-live-assets)
* [Get-Live-Asset-Status-Copy](../../doc/controllers/api-endpoints.md#get-live-asset-status-copy)


# List-Collections

This endpoint list video collection which are assigned to the user or token.

```php
function listCollections(): VideoSourcesResponse
```

## Response Type

[`VideoSourcesResponse`](../../doc/models/video-sources-response.md)

## Example Usage

```php
$result = $aPIEndpointsController->listCollections();
```

## Example Response *(as JSON)*

```json
{
  "all_sources": [
    {
      "id": "646df1c9173a4a2fcac180b4",
      "name": "collection_name",
      "type": "aws",
      "created_at": "2023-05-24T11:15:21.624Z",
      "updated_at": "2024-01-24T11:57:48.744Z",
      "video_protection": {
        "signed_url": true,
        "signed_url_secret": "47a3e2fbb1318f033b882c632bc103a8"
      },
      "player_config": {
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
        "pixel_tags": {},
        "logo_width": 100,
        "logo_height": 100,
        "dynamic_watermark": false,
        "watermark_font_size": 20,
        "watermark_font_color": "#ff0000",
        "watermark_bg_color": "transparent",
        "watermark_interval": 1000
      },
      "default_profile_id": "646df1c9173a4a2fcac180b7",
      "insight_property_id": "646df0aa173a4a2fcac18009",
      "aws": {
        "bucket_name": "asd",
        "bucket_region": "ap-south-1",
        "access_key": "Code@123",
        "secret": "****************"
      },
      "embed_details": {
        "pixel_tags": {},
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
        "watermark_interval": 1000
      },
      "folders": [
        "folder",
        "folder 2",
        "folder 27",
        "folder 4"
      ],
      "channel_settings": {
        "title": "my channel",
        "active": false,
        "description": "desc",
        "privacy_type": "private",
        "custom_logo": true,
        "logo_url": "https://dev-video.gumlet.io/646df1c9172a4a2fcac180b4/channel/logo.png",
        "cname": [
          "okj.com",
          "sd.com",
          "safd.com"
        ],
        "temp_cname": [
          "okj.com",
          "safd.com",
          "sd.com"
        ]
      }
    },
    {
      "id": "65b016f4e99b77f116c0e381",
      "name": "private uploads",
      "type": "direct-upload",
      "created_at": "2024-01-23T19:43:48.267Z",
      "updated_at": "2024-01-23T19:43:48.272Z",
      "video_protection": {},
      "player_config": {
        "preload": true,
        "autoplay": false,
        "disable_seek": false,
        "disable_player_controls": false,
        "powered_by_gumlet_overlay": true,
        "allow_drm_protected_videos": true,
        "loop": false,
        "player_color": "#6658ea",
        "include_seo": true,
        "subtitle_enabled": false,
        "pixel_tags": {},
        "logo_width": 100,
        "logo_height": 100,
        "dynamic_watermark": false,
        "watermark_font_size": 20,
        "watermark_font_color": "#ff0000",
        "watermark_bg_color": "transparent",
        "watermark_interval": 1000
      },
      "default_profile_id": "646df1c9173a4a2fcac180b7",
      "insight_property_id": "65b016f4e99b77f116c0e37f",
      "embed_details": {
        "pixel_tags": {},
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
      },
      "folders": [],
      "channel_settings": {
        "active": false,
        "privacy_type": "private"
      }
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | `ApiException` |


# Create-Collection

Video collections are top-level entities in Gumlet. You can use them to organize videos for different teams/departments or use cases.

```php
function createCollection(?VideoSourcesRequest $body = null): VideoSourcesResponse1
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?VideoSourcesRequest`](../../doc/models/video-sources-request.md) | Body, Optional | - |

## Response Type

[`VideoSourcesResponse1`](../../doc/models/video-sources-response-1.md)

## Example Usage

```php
$body = VideoSourcesRequestBuilder::init(
    'name6',
    TypeEnum::DIRECTUPLOAD
)->build();

$result = $aPIEndpointsController->createCollection($body);
```

## Example Response *(as JSON)*

```json
{
  "id": "65b01610e99b77f116c0e32b",
  "name": "zoom-collection",
  "type": "zoom",
  "created_at": "2024-01-23T19:40:00.447Z",
  "updated_at": "2024-01-23T19:40:00.447Z",
  "video_protection": {},
  "player_config": {
    "preload": true,
    "autoplay": false,
    "disable_seek": false,
    "disable_player_controls": false,
    "powered_by_gumlet_overlay": true,
    "allow_drm_protected_videos": true,
    "loop": false,
    "player_color": "#6658ea",
    "include_seo": true,
    "subtitle_enabled": false,
    "pixel_tags": {},
    "logo_width": 100,
    "logo_height": 100,
    "dynamic_watermark": false,
    "watermark_font_size": 20,
    "watermark_font_color": "#ff0000",
    "watermark_bg_color": "transparent",
    "watermark_interval": 1000
  },
  "default_profile_id": "646df1c9173a4a2fcac180b7",
  "insight_property_id": "65b01610e99b77f116c0e329",
  "zoom": {
    "secret": "yourSecret"
  },
  "embed_details": {
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
  },
  "folders": [],
  "channel_settings": {
    "active": false,
    "privacy_type": "private"
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`VideoSources400ErrorException`](../../doc/models/video-sources-400-error-exception.md) |


# Create-Asset

An asset refers to a media content/video that is processed, stored, and delivered through Gumlet. This endpoint creates an asset allowing users to ingest media content into the Gumlet system for processing and delivery.

```php
function createAsset(?VideoAssetsRequest $body = null): VideoAssetsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?VideoAssetsRequest`](../../doc/models/video-assets-request.md) | Body, Optional | - |

## Response Type

[`VideoAssetsResponse`](../../doc/models/video-assets-response.md)

## Example Usage

```php
$result = $aPIEndpointsController->createAsset();
```

## Example Response *(as JSON)*

```json
{
  "asset_id": "65b168a6e99b77f116c0e488",
  "progress": 0,
  "created_at": 1706125479006,
  "updated_at": 1706125479006,
  "status": "pre-queued",
  "tag": [
    "ball"
  ],
  "source_id": "646df1c9173a4a2fcac180b4",
  "collection_id": "646df1c9173a4a2fcac180b4",
  "input": {
    "transformations": {
      "format": "hls",
      "resolution": [
        "360p",
        "480p",
        "540p",
        "720p",
        "1080p"
      ],
      "audio_codec": [
        "aac"
      ],
      "video_codec": [
        "libx264"
      ],
      "thumbnail": [
        "auto"
      ],
      "thumbnail_format": "png",
      "mp4_access": false,
      "per_title_encoding": false
    },
    "profile_id": "646df1c9173a4a2fcac180b7",
    "title": "bipbopall",
    "description": "some description",
    "metadata": {
      "headermeta": "metavalue"
    },
    "source_url": "http://devimages.apple.com/iphone/samples/bipbop/bipbopall.m3u8",
    "call_to_actions": [
      {
        "start_time": 1,
        "end_time": 90,
        "text": "some test",
        "url": "https://some-url.com",
        "position_from_top": 11,
        "position_from_right": 23,
        "border_radius": 11,
        "font_color": "#000001",
        "background_color": "#ffffff",
        "html_target": "_blank"
      }
    ]
  },
  "output": {
    "format": "hls",
    "status_url": "https://api.gumlet.com/v1/video/assets/65b168a6e99b77f116c0e488",
    "playback_url": "https://video.gumlet.io/646df1c9173a4a2fcac180b4/65b168a6e99b77f116c0e488/main.m3u8",
    "thumbnail_url": [
      "https://video.gumlet.io/646df1c9173a4a2fcac180b4/65b168a6e99b77f116c0e488/thumbnail-1-0.png?v=1706125479006"
    ]
  },
  "playlists": [
    "6597acd5ed6f26a9c5ca9633"
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`VideoAssets400ErrorException`](../../doc/models/video-assets-400-error-exception.md) |
| 401 | 401 | [`VideoAssets401ErrorException`](../../doc/models/video-assets-401-error-exception.md) |


# Create-Asset-Direct-Upload

This endpoint creates a video asset allowing to upload of the video from the local file system and ingest media content into the Gumlet system for processing and delivery.Body Parameters are the same as the Create Asset Body Parameters except for the `input` parameter which this endpoint does not take.A successful response will be returned with `upload_url` field. You can make `PUT` request to that URL to upload video. To upload video using `upload_url` refer to [this](https://docs.gumlet.com/docs/direct-upload#2-use-the-url-to-upload-a-file).

```php
function createAssetDirectUpload(?VideoAssetsUploadRequest $body = null): VideoAssetsUploadResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?VideoAssetsUploadRequest`](../../doc/models/video-assets-upload-request.md) | Body, Optional | - |

## Response Type

[`VideoAssetsUploadResponse`](../../doc/models/video-assets-upload-response.md)

## Example Usage

```php
$body = VideoAssetsUploadRequestBuilder::init(
    '646df1c9173a4a2fcac180b4',
    Format1Enum::MP4
)
    ->profileId('646df1c9173a4a2fcac180b7')
    ->tag(
        [
            'games',
            'field'
        ]
    )
    ->title('Sports.')
    ->description('This video provides information about various sports.')
    ->playlistId('6597acd5ed6f26a9c5ca9633')
    ->metadata('{"headermeta":"metavalue"}')
    ->callToActions(
        [
            CallToActionBuilder::init()
                ->text('Buy here!!')
                ->url('https://some-buy-url-site.com')
                ->startTime(1)
                ->endTime(90)
                ->fontColor('#000001')
                ->backgroundColor('#ffffff')
                ->positionFromTop(11)
                ->positionFromRight('23')
                ->build()
        ]
    )
    ->build();

$result = $aPIEndpointsController->createAssetDirectUpload($body);
```

## Example Response *(as JSON)*

```json
{
  "asset_id": "65b169dfe99b77f116c0e4aa",
  "progress": 0,
  "created_at": 1706125793055,
  "updated_at": 1706125793055,
  "status": "upload-pending",
  "tag": [
    "games",
    "field"
  ],
  "source_id": "646df1c9173a4a2fcac180b4",
  "collection_id": "646df1c9173a4a2fcac180b4",
  "input": {
    "transformations": {
      "format": "hls",
      "resolution": [
        "360p",
        "480p",
        "540p",
        "720p",
        "1080p"
      ],
      "audio_codec": [
        "aac"
      ],
      "video_codec": [
        "libx264"
      ],
      "thumbnail": [
        "auto"
      ],
      "thumbnail_format": "png",
      "mp4_access": false,
      "per_title_encoding": false,
      "original_deleted": true
    },
    "profile_id": "646df1c9173a4a2fcac180b7",
    "title": "Sports.",
    "description": "This video provides information about various sports.",
    "metadata": {
      "headermeta": "metavalue"
    },
    "source_url": "646df1c9173a4a2fcac180b4/65b169dfe99b77f116c0e4aa/origin-65b169dfe99b77f116c0e4aa",
    "call_to_actions": [
      {
        "start_time": 1,
        "end_time": 90,
        "text": "Buy here!!",
        "url": "https://some-buy-url-site.com",
        "html_target": "_blank"
      }
    ]
  },
  "output": {
    "format": "hls",
    "status_url": "https://api.gumlet.com/v1/video/assets/65b169dfe99b77f116c0e4aa",
    "playback_url": "https://dev-video.gumlet.io/646df1c9173a4a2fcac180b4/65b169dfe99b77f116c0e4aa/main.m3u8",
    "thumbnail_url": [
      "https://dev-video.gumlet.io/646df1c9173a4a2fcac180b4/65b169dfe99b77f116c0e4aa/thumbnail-1-0.png?v=1706125793055"
    ]
  },
  "upload_url": "https://gumlet-video-user-uploads.s3-accelerate.dualstack.amazonaws.com/gumlet-user-uploads-dev-deletable/646df1c9173a4a2fcac180b4/65b169dfe99b77f116c0e4aa/origin-65b169dfe99b77f116c0e4aa?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&X-Amz-Credential=AKIA4WNLTXWDAC3AKBPV%2F20240124%2Fus-west-2%2Fs3%2Faws4_request&X-Amz-Date=20240124T194953Z&X-Amz-Expires=3600&X-Amz-Signature=b724bd728efd589ec6cb4d0fab17947448c02788823619433720e8fddf0f1155&X-Amz-SignedHeaders=host&x-id=PutObject",
  "playlists": [
    "6597acd5ed6f26a9c5ca9633"
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`VideoAssetsUpload400ErrorException`](../../doc/models/video-assets-upload-400-error-exception.md) |
| 401 | 401 | [`VideoAssetsUpload401ErrorException`](../../doc/models/video-assets-upload-401-error-exception.md) |


# Get-Asset-Status

This endpoint retrieves the details of an asset that has previously been created.

```php
function getAssetStatus(string $assetId): VideoAssetsResponse1
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `assetId` | `string` | Template, Required | An asset id for the previously created asset. |

## Response Type

[`VideoAssetsResponse1`](../../doc/models/video-assets-response-1.md)

## Example Usage

```php
$assetId = 'asset_id4';

$result = $aPIEndpointsController->getAssetStatus($assetId);
```

## Example Response *(as JSON)*

```json
{
  "asset_id": "67e4ece9403562dbea654261",
  "progress": 100,
  "created_at": 1743056105661,
  "updated_at": 1743056105661,
  "status": "ready",
  "tag": [
    "demo"
  ],
  "source_id": "67e4ece9403562dbea65425f",
  "collection_id": "67e4ece9403562dbea65425f",
  "input": {
    "transformations": {
      "format": "abr",
      "resolution": [
        "240p",
        "360p",
        "480p",
        "540p",
        "720p",
        "1080p",
        "1440p",
        "2160p"
      ],
      "audio_codec": [
        "aac"
      ],
      "video_codec": [
        "libx264"
      ],
      "image_overlay": {
        "url": "https://demo.gumlet.io/logo.png",
        "vertical_align": "top",
        "horizontal_align": "right",
        "vertical_margin": "5%",
        "horizontal_margin": "5%",
        "width": "20%",
        "height": "20%",
        "image_downloaded": true
      },
      "thumbnail": [
        "auto"
      ],
      "thumbnail_format": "png",
      "mp4_access": false,
      "audio_only": false,
      "original_deleted": true,
      "per_title_encoding": false,
      "generate_subtitles": {
        "audio_language": "en",
        "subtitle_languages": [
          "es",
          "hi"
        ]
      },
      "preview_thumbnails": {
        "max_tiles": 100
      }
    },
    "profile_id": "67e4ece9403562dbea65425c",
    "title": " Sample Video",
    "description": "This is a sample video to help you experience Gumlet platform and player.",
    "chapters": [
      {
        "endTime": 10,
        "label": "First Chapter"
      },
      {
        "endTime": 50,
        "label": "Second Chapter"
      },
      {
        "endTime": 130,
        "label": "Third Chapter"
      },
      {
        "endTime": 155,
        "label": "Forth Chapter"
      }
    ],
    "source_url": "5f462c1561cf8a766464ffc4/647eb18cc90c6c6c35370979/origin-647eb18cc90c6c6c35370979",
    "size": 364735178,
    "duration": 183.088,
    "aspect_ratio": "16:9",
    "fps": 23.98,
    "width": 3840,
    "height": 2160
  },
  "output": {
    "format": "abr",
    "status_url": "https://api.gumlet.com/v1/video/assets/67e4ece9403562dbea654261",
    "playback_url": "https://video.gumlet.io/67e4ece9403562dbea65425f/67e4ece9403562dbea654261/main.m3u8",
    "dash_playback_url": "https://video.gumlet.io/67e4ece9403562dbea65425f/67e4ece9403562dbea654261/main.mpd",
    "thumbnail_url": [
      "https://video.gumlet.io/67e4ece9403562dbea65425f/67e4ece9403562dbea654261/thumbnail-1-0.png?v=1743056105661"
    ],
    "storage_details": {
      "video": [
        {
          "fileName": "1080p.mp4",
          "size": 91884957,
          "resolution": "1920x1080",
          "duration": 183
        },
        {
          "fileName": "1440p.mp4",
          "size": 148667263,
          "resolution": "2560x1440",
          "duration": 183
        },
        {
          "fileName": "2160p.mp4",
          "size": 296143768,
          "resolution": "3840x2160",
          "duration": 183
        },
        {
          "fileName": "240p.mp4",
          "size": 6573304,
          "resolution": "426x240",
          "duration": 183
        },
        {
          "fileName": "360p.mp4",
          "size": 14040936,
          "resolution": "640x360",
          "duration": 183
        },
        {
          "fileName": "480p.mp4",
          "size": 23006040,
          "resolution": "854x480",
          "duration": 183
        },
        {
          "fileName": "540p.mp4",
          "size": 28124144,
          "resolution": "960x540",
          "duration": 183
        },
        {
          "fileName": "720p.mp4",
          "size": 45395668,
          "resolution": "1280x720",
          "duration": 183
        }
      ],
      "audio": [
        {
          "fileName": "en_128k.mp4",
          "size": 2913025,
          "duration": 183
        },
        {
          "fileName": "en_192k.mp4",
          "size": 4378028,
          "duration": 183
        },
        {
          "fileName": "en_64k.mp4",
          "size": 1448475,
          "duration": 183
        },
        {
          "fileName": "en_96k.mp4",
          "size": 2180524,
          "duration": 183
        }
      ],
      "playlist": [
        {
          "fileName": "1080p.m3u8",
          "size": 3790
        },
        {
          "fileName": "1080p_iframe.m3u8",
          "size": 4129
        },
        {
          "fileName": "1440p.m3u8",
          "size": 3793
        },
        {
          "fileName": "1440p_iframe.m3u8",
          "size": 4160
        },
        {
          "fileName": "2160p.m3u8",
          "size": 3797
        },
        {
          "fileName": "2160p_iframe.m3u8",
          "size": 4196
        },
        {
          "fileName": "240p.m3u8",
          "size": 3701
        },
        {
          "fileName": "240p_iframe.m3u8",
          "size": 3997
        },
        {
          "fileName": "360p.m3u8",
          "size": 3701
        },
        {
          "fileName": "360p_iframe.m3u8",
          "size": 4040
        },
        {
          "fileName": "480p.m3u8",
          "size": 3702
        },
        {
          "fileName": "480p_iframe.m3u8",
          "size": 4058
        },
        {
          "fileName": "540p.m3u8",
          "size": 3705
        },
        {
          "fileName": "540p_iframe.m3u8",
          "size": 4068
        },
        {
          "fileName": "720p.m3u8",
          "size": 3730
        },
        {
          "fileName": "720p_iframe.m3u8",
          "size": 4072
        },
        {
          "fileName": "en_128k.m3u8",
          "size": 3802
        },
        {
          "fileName": "en_192k.m3u8",
          "size": 3802
        },
        {
          "fileName": "en_64k.m3u8",
          "size": 3755
        },
        {
          "fileName": "en_96k.m3u8",
          "size": 3755
        },
        {
          "fileName": "es.m3u8",
          "size": 231
        },
        {
          "fileName": "hi.m3u8",
          "size": 231
        },
        {
          "fileName": "en.m3u8",
          "size": 232
        },
        {
          "fileName": "main.m3u8",
          "size": 10690
        },
        {
          "fileName": "main.mpd",
          "size": 6889
        }
      ],
      "thumbnail": [
        {
          "fileName": "thumbnail-1-0.png",
          "size": 6087369,
          "resolution": "3840x2160"
        }
      ],
      "subtitle": [
        {
          "fileName": "es.vtt",
          "size": 398
        },
        {
          "fileName": "hi.vtt",
          "size": 632
        },
        {
          "fileName": "en.vtt",
          "size": 645
        }
      ],
      "previewThumbnail": [
        {
          "fileName": "preview_thumbnails.png",
          "size": 3089899
        },
        {
          "fileName": "preview_thumbnails.vtt",
          "size": 3816
        }
      ]
    },
    "transcription_word_level_timestamps": "https://video.gumlet.io/67e4ece9403562dbea65425f/67e4ece9403562dbea654261/67e4ece9403562dbea654261-transcription-word-level-timestamp.json?token=5589a9b725fabe0586e37782c3eb8e083a84e5c2&expires=1744100014337",
    "storage_bytes": 674034917,
    "preview_thumbnails_url": "https://video.gumlet.io/67e4ece9403562dbea65425f/67e4ece9403562dbea654261/preview_thumbnails.vtt"
  },
  "processed_at": 1743056105661,
  "folder": "Demo Folder",
  "playlists": []
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`VideoAssets400ErrorException`](../../doc/models/video-assets-400-error-exception.md) |
| 401 | 401 | [`VideoAssets401ErrorException`](../../doc/models/video-assets-401-error-exception.md) |


# Delete-Asset

This endpoint removes an asset given its unique asset id. The asset will be removed from storage as well, associated URLs will be inaccessible.

```php
function deleteAsset(string $assetId)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `assetId` | `string` | Template, Required | Asset id of the video asset which needs to be deleted. |

## Response Type

`mixed`

## Example Usage

```php
$assetId = 'asset_id4';

$result = $aPIEndpointsController->deleteAsset($assetId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`VideoAssets400ErrorException`](../../doc/models/video-assets-400-error-exception.md) |
| 401 | 401 | [`VideoAssets401ErrorException`](../../doc/models/video-assets-401-error-exception.md) |


# Update-Asset

This endpoint allows users to update video asset that has previously been created.

```php
function updateAsset(?VideoAssetsUpdateRequest $body = null): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?VideoAssetsUpdateRequest`](../../doc/models/video-assets-update-request.md) | Body, Optional | - |

## Response Type

`array`

## Example Usage

```php
$result = $aPIEndpointsController->updateAsset();
```

## Example Response

```
{}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | `ApiException` |


# List-Assets

This endpoint list assets in video collection. You can also pass `status` and `tag` to filter assets.

```php
function listAssets(
    string $collectionId,
    ?string $status = null,
    ?string $tag = null,
    ?string $title = null,
    ?string $folder = null,
    ?string $offset = null,
    ?string $size = null,
    ?string $playlistId = null,
    ?string $sortBy = null,
    ?string $orderBy = OrderByEnum::DESC
): VideoAssetsListResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `collectionId` | `string` | Template, Required | Gumlet video collection id. |
| `status` | [`?string(StatusEnum)`](../../doc/models/status-enum.md) | Query, Optional | To filter assets on the basis of their current status. Can be specified as a single status value string or comma-separated status values. The status value can be one of `queued`, `processing`, `ready`, `errored`, and `deleted`. |
| `tag` | `?string` | Query, Optional | Input tag on the basis of which assets need to be filtered. To filter on multiple tags use comma-separated string. |
| `title` | `?string` | Query, Optional | Title on the basis of which assets need to be filtered. |
| `folder` | `?string` | Query, Optional | Folder name on the basis of which assets need to be filtered. |
| `offset` | `?string` | Query, Optional | Offset value for a paginated list of assets. |
| `size` | `?string` | Query, Optional | Page size for the paginated list. **Default: `10`** **Max Size: `100`** |
| `playlistId` | `?string` | Query, Optional | filter assets from a playlist. |
| `sortBy` | [`?string(SortByEnum)`](../../doc/models/sort-by-enum.md) | Query, Optional | assets will be sorted based on the provided field. |
| `orderBy` | [`?string(OrderByEnum)`](../../doc/models/order-by-enum.md) | Query, Optional | assets will be sorted in the specified order based on provided sortBy field or by default createAt field.<br><br>**Default**: `OrderByEnum::DESC` |

## Response Type

[`VideoAssetsListResponse`](../../doc/models/video-assets-list-response.md)

## Example Usage

```php
$collectionId = 'collection_id2';

$orderBy = OrderByEnum::DESC;

$result = $aPIEndpointsController->listAssets(
    $collectionId,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    null,
    $orderBy
);
```

## Example Response *(as JSON)*

```json
{
  "all_assets": [
    {
      "asset_id": "6192269e0822a81d955d1a4b",
      "progress": 0,
      "created_at": 1636968094594,
      "status": "optimizing",
      "tag": "",
      "source_id": "5f462c1561cf8a766464ffc4",
      "input": {
        "transformations": {
          "resolution": "240p,360p",
          "format": "hls",
          "audio_codec": [
            "aac"
          ],
          "video_codec": [
            "libx264"
          ],
          "thumbnail": [
            "auto"
          ],
          "thumbnail_format": "png",
          "mp4_access": false,
          "audio_only": false,
          "keep_original": true,
          "per_title_encoding": true,
          "process_low_resolution_input": false
        },
        "source_url": "https://gumlet.sgp1.digitaloceanspaces.com/video/BigBuckBunny.mp4",
        "size": 158008374,
        "duration": 596.473333,
        "aspect_ratio": "16:9",
        "fps": 24,
        "width": 1280,
        "height": 720,
        "additional_tracks": [
          {
            "url": "https://gumlet.sgp1.digitaloceanspaces.com/video/BigBuckBunny.aac",
            "type": "audio",
            "language_code": "en",
            "name": "English"
          }
        ]
      },
      "output": {
        "format": "hls",
        "status_url": "https://api.gumlet.com/v1/video/assets/6192269e0822a81d955d1a4b",
        "playback_url": "https://video.gumlet.io/5f462c1561cf8a766464ffc4/6192269e0822a81d955d1a4b/1.m3u8",
        "thumbnail_url": [
          "https://video.gumlet.io/5f462c1561cf8a766464ffc4/6192269e0822a81d955d1a4b/thumbnail-1-0.png"
        ]
      }
    }
  ],
  "total_asset_count": 2159,
  "current_offset": 1,
  "distinct_tags": [
    "",
    "Gumlet",
    "aasas",
    "asasaasas",
    "asasas",
    "asasasasa",
    "asasass",
    "asasdfdfdd",
    "asqs",
    "dsddsd",
    "dualcodectest-2",
    "dualcodectrst",
    "fallbacktest",
    "filtertest",
    "hlstest",
    "josh",
    "josh-2",
    "lilo",
    "newCode",
    "newDashboard",
    "newTest",
    "newtest",
    "rewew",
    "sdsdsdsd",
    "tag-1",
    "test",
    "testDASH",
    "testVideoPad",
    "test_bug",
    "test_dash",
    "testdualCodecsPatch",
    "testgpusyash",
    "testmp4",
    "version_1",
    "version_2",
    "version_3",
    "version_4",
    "version_5",
    "webhook"
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`VideoAssetsList400ErrorException`](../../doc/models/video-assets-list-400-error-exception.md) |
| 401 | 401 | [`VideoAssetsList401ErrorException`](../../doc/models/video-assets-list-401-error-exception.md) |


# Select-From-Video

Select frame from video to use as thumbnail

```php
function selectFromVideo(string $assetId, ?VideoAssetsThumbnailRequest $body = null)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `assetId` | `string` | Template, Required | Asset id of the video asset which needs to be deleted. |
| `body` | [`?VideoAssetsThumbnailRequest`](../../doc/models/video-assets-thumbnail-request.md) | Body, Optional | - |

## Response Type

`mixed`

## Example Usage

```php
$assetId = 'asset_id4';

$body = VideoAssetsThumbnailRequestBuilder::init(
    2
)->build();

$result = $aPIEndpointsController->selectFromVideo(
    $assetId,
    $body
);
```


# Select-From-Image-File

Use any image file to use as thumbnail

```php
function selectFromImageFile(string $assetID)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `assetID` | `string` | Template, Required | An asset id for the previously created asset. |

## Response Type

`mixed`

## Example Usage

```php
$assetID = 'asset_ID0';

$result = $aPIEndpointsController->selectFromImageFile($assetID);
```

## Example Response

```
"{\n  upload_url: \"URL\",\n  asset_id: {asset_id}\n}\n  "
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | `ApiException` |


# Video-Asset-Upload-Subtitle

Upload your subtitled .srt file to your video asset.

```php
function videoAssetUploadSubtitle(string $assetID, ?VideoAssetsSubtitleUploadRequest $body = null)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `assetID` | `string` | Template, Required | An asset id for the previously created asset. |
| `body` | [`?VideoAssetsSubtitleUploadRequest`](../../doc/models/video-assets-subtitle-upload-request.md) | Body, Optional | - |

## Response Type

`mixed`

## Example Usage

```php
$assetID = 'asset_ID0';

$result = $aPIEndpointsController->videoAssetUploadSubtitle($assetID);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | `ApiException` |


# Upload-Subtitle-Completion

```php
function uploadSubtitleCompletion(string $assetID, ?VideoAssetsSubtitleUploadEventRequest $body = null): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `assetID` | `string` | Template, Required | An asset id for the previously created asset. |
| `body` | [`?VideoAssetsSubtitleUploadEventRequest`](../../doc/models/video-assets-subtitle-upload-event-request.md) | Body, Optional | - |

## Response Type

`array`

## Example Usage

```php
$assetID = 'asset_ID0';

$result = $aPIEndpointsController->uploadSubtitleCompletion($assetID);
```

## Example Response

```
{}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | `ApiException` |


# Create-Update-Chapter

This endpoint will create/update video asset chapters.

```php
function createUpdateChapter(string $assetId, ?VideoAssetsChaptersRequest $body = null): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `assetId` | `string` | Template, Required | - |
| `body` | [`?VideoAssetsChaptersRequest`](../../doc/models/video-assets-chapters-request.md) | Body, Optional | - |

## Response Type

`array`

## Example Usage

```php
$assetId = 'asset_id4';

$body = VideoAssetsChaptersRequestBuilder::init(
    [
        Chapter1Builder::init(
            'label2',
            28
        )->build()
    ]
)->build();

$result = $aPIEndpointsController->createUpdateChapter(
    $assetId,
    $body
);
```

## Example Response

```
{}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | `ApiException` |


# Video-Analytics

This endpoint gives usage analytics data of your videos. Ex - top assets, bandwidth consumption

```php
function videoAnalytics(?VideoAnalyticsRequest $body = null): VideoAnalyticsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?VideoAnalyticsRequest`](../../doc/models/video-analytics-request.md) | Body, Optional | - |

## Response Type

[`VideoAnalyticsResponse`](../../doc/models/video-analytics-response.md)

## Example Usage

```php
$body = VideoAnalyticsRequestBuilder::init(
    [
        'metrics8'
    ],
    DateRangeBuilder::init()->build()
)
    ->topAssetsCount(5)
    ->build();

$result = $aPIEndpointsController->videoAnalytics($body);
```

## Example Response *(as JSON)*

```json
{
  "top_assets": [
    {
      "collection_id": "<COLLECTION_ID>",
      "asset_id": "<ASSET_ID>",
      "units": 162870,
      "collection_name": "<COLLECTION_NAME>"
    },
    {
      "collection_id": "<COLLECTION_ID>",
      "asset_id": "<ASSET_ID>",
      "units": 21348,
      "collection_name": "<COLLECTION_NAME>"
    },
    {
      "collection_id": "<COLLECTION_ID>",
      "asset_id": "<ASSET_ID>",
      "units": 1239,
      "collection_name": "<COLLECTION_NAME>"
    },
    {
      "collection_id": "<COLLECTION_ID>",
      "asset_id": "<ASSET_ID>",
      "units": 974,
      "collection_name": "<COLLECTION_NAME>"
    },
    {
      "collection_id": "<COLLECTION_ID>",
      "asset_id": "<ASSET_ID>",
      "units": 124,
      "collection_name": "<COLLECTION_NAME>"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`VideoAnalytics400ErrorException`](../../doc/models/video-analytics-400-error-exception.md) |


# Streaming-Duration

This endpoint lists top streamed assets in a video collection

```php
function streamingDuration(
    string $startAt,
    string $endAt,
    ?string $collectionId = null,
    ?string $page = null,
    ?string $pageSize = '1000'
): VideoStreamingDurationResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `startAt` | `string` | Query, Required | Date string in "yyyy-mm-dd" format |
| `endAt` | `string` | Query, Required | Date string in "yyyy-mm-dd" format |
| `collectionId` | `?string` | Query, Optional | - |
| `page` | `?string` | Query, Optional | - |
| `pageSize` | `?string` | Query, Optional | **Default**: `'1000'` |

## Response Type

[`VideoStreamingDurationResponse`](../../doc/models/video-streaming-duration-response.md)

## Example Usage

```php
$startAt = 'start_at2';

$endAt = 'end_at0';

$pageSize = '1000';

$result = $aPIEndpointsController->streamingDuration(
    $startAt,
    $endAt,
    null,
    null,
    $pageSize
);
```

## Example Response *(as JSON)*

```json
{
  "data": [
    {
      "asset_id": "638888010f1a158347ce9842",
      "units": 0
    },
    {
      "asset_id": "6369df88cb5ca27c554bb1f2",
      "units": 0
    },
    {
      "asset_id": "63761f1fbe6f4dea7af3e050",
      "units": 0
    },
    {
      "asset_id": "63761eb6b6648252fc979673",
      "units": 0
    },
    {
      "asset_id": "6385035a3f8d6fa3925c5ae9",
      "units": 0
    },
    {
      "asset_id": "63761e09be6f4dea7af3ddaf",
      "units": 0
    },
    {
      "asset_id": "6322109d046f16b5e0ee63d9",
      "units": 0
    },
    {
      "asset_id": "6405cc5b4d82222f8a2053f2",
      "units": 0
    }
  ],
  "has_next_page": false
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`VideoStreamingDuration400ErrorException`](../../doc/models/video-streaming-duration-400-error-exception.md) |


# Sign-Part

Use this endpoint to retrieve pre-signed upload URL for each part.

```php
function signPart(string $assetId, string $partNumber): VideoAssetsMultipartuploadSignResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `assetId` | `string` | Template, Required | An asset id of the created asset for which you are uploading parts |
| `partNumber` | `string` | Template, Required | Part number of multiple parts of the original video which you you are uploading |

## Response Type

[`VideoAssetsMultipartuploadSignResponse`](../../doc/models/video-assets-multipartupload-sign-response.md)

## Example Usage

```php
$assetId = 'asset_id4';

$partNumber = 'part_number0';

$result = $aPIEndpointsController->signPart(
    $assetId,
    $partNumber
);
```

## Example Response *(as JSON)*

```json
{
  "asset_id": "642db9d6cc21a55eb474a0b2",
  "part_number": "1",
  "part_upload_url": "https://gumlet-video-user-uploads.s3.us-west-2.amazonaws.com/gumlet-user-uploads-prod/600e2eccc1be42e7a5b29427/642db9d6cc21c21eb474a0c1/origin-642db9d6cc21a55eb474a0c1?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Content-Sha256=UNSIGNED-PAYLOAD&X-Amz-Credential=AKIA4WNLTXWDOHE3WKEQ%2F20230405%2Fus-west-2%2Fs3%2Faws4_request&X-Amz-Date=20230405T181136Z&X-Amz-Expires=3600&X-Amz-Signature=23d23ca56dceab55ba16349609af7d0921361ced905dde848b6206aa3de0205a&X-Amz-SignedHeaders=host&partNumber=1&uploadId=rkY.tbFdsN14Obcdh.VpVvGdtVxipAa2dyKszL2g7ETT38TXucloiyJLtz9Ff79OgvM3tdsFdenolTgdaIy_jo7GyArbApbueZZ9oLM3k7tuHkX9wXyOMDbGRQ3V0q4W&x-id=UploadPart"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | `ApiException` |


# Complete-Multipart-Upload

Once you upload all parts to S3 bucket via pre-signed URL, use this endpoint to complete the multipart upload.

```php
function completeMultipartUpload(
    string $assetId,
    ?VideoAssetsMultipartuploadCompleteRequest $body = null
): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `assetId` | `string` | Template, Required | An asset id for which you are uploading original video via multipart |
| `body` | [`?VideoAssetsMultipartuploadCompleteRequest`](../../doc/models/video-assets-multipartupload-complete-request.md) | Body, Optional | - |

## Response Type

`array`

## Example Usage

```php
$assetId = 'asset_id4';

$result = $aPIEndpointsController->completeMultipartUpload($assetId);
```

## Example Response

```
{}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | `ApiException` |


# Create-Profile

Gumlet provides the functionality of creating multiple video assets using the same set of parameters. A Video profile is a set of parameters that can be referenced/used while creating a video as a single parameter.

```php
function createProfile(?VideoProfilesRequest $body = null): VideoProfilesResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?VideoProfilesRequest`](../../doc/models/video-profiles-request.md) | Body, Optional | - |

## Response Type

[`VideoProfilesResponse`](../../doc/models/video-profiles-response.md)

## Example Usage

```php
$body = VideoProfilesRequestBuilder::init(
    'Gumlet-Profile-1',
    Format1Enum::ABR
)->build();

$result = $aPIEndpointsController->createProfile($body);
```

## Example Response *(as JSON)*

```json
{
  "profile_id": "61921fb10822a81d955d1730",
  "name": "Gumlet-Profile-1",
  "transformations": {
    "format": "hls",
    "audio_codec": [
      "aac"
    ],
    "video_codec": [
      "libx264"
    ],
    "thumbnail": [
      "auto"
    ],
    "thumbnail_format": "png",
    "mp4_access": false,
    "per_title_encoding": true
  },
  "created_at": 1636966321742
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 401 | 401 | [`VideoProfiles401ErrorException`](../../doc/models/video-profiles-401-error-exception.md) |


# List-Profiles

This endpoint retrieves the details of all profiles that have previously been created.

```php
function listProfiles(?int $offset = null, ?int $size = null): VideoProfilesResponse1
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `offset` | `?int` | Query, Optional | Offset value for a paginated list of profiles. Can be zero for the first time and `current_offset` value received from the last request afterwards. |
| `size` | `?int` | Query, Optional | Page size for the paginated list. **Default: `10`** |

## Response Type

[`VideoProfilesResponse1`](../../doc/models/video-profiles-response-1.md)

## Example Usage

```php
$result = $aPIEndpointsController->listProfiles();
```


# Update-Profile

Update an existing profile. Settings provided in body parameters will only be updated in the existing profile.

```php
function updateProfile(string $profileId, ?VideoProfilesRequest1 $body = null): VideoProfilesResponse2
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `profileId` | `string` | Template, Required | Profile id of the profile which need to be updated. |
| `body` | [`?VideoProfilesRequest1`](../../doc/models/video-profiles-request-1.md) | Body, Optional | - |

## Response Type

[`VideoProfilesResponse2`](../../doc/models/video-profiles-response-2.md)

## Example Usage

```php
$profileId = 'profile_id0';

$body = VideoProfilesRequest1Builder::init(
    'profile_id4'
)
    ->format(Format1Enum::ABR)
    ->build();

$result = $aPIEndpointsController->updateProfile(
    $profileId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "profile_id": "61921fb10822a81d955d1730",
  "name": "Gumlet-Profile-2",
  "transformations": {
    "resolution": "240p,360p",
    "format": "hls",
    "audio_codec": [
      "aac"
    ],
    "video_codec": [
      "libx264"
    ],
    "thumbnail": [
      "auto"
    ],
    "thumbnail_format": "png",
    "mp4_access": false,
    "per_title_encoding": true
  },
  "created_at": 1636966321742,
  "updated_at": 1636975593082
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 401 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 402 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 403 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 404 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 405 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 406 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 407 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 408 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 409 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 410 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 411 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 412 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 413 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 414 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 415 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 416 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 417 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 418 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 419 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 420 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 421 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 422 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 423 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 424 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 425 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 426 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 427 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 428 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 429 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 430 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 431 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 432 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 433 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 434 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 435 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 436 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 437 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 438 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 439 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 440 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 441 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 442 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 443 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 444 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 445 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 446 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 447 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 448 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 449 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 450 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 451 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 452 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 453 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 454 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 455 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 456 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 457 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 458 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 459 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 460 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 461 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 462 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 463 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 464 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 465 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 466 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 467 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 468 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 469 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 470 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 471 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 472 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 473 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 474 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 475 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 476 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 477 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 478 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 479 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 480 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 481 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 482 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 483 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 484 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 485 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 486 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 487 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 488 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 489 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 490 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 491 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 492 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 493 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 494 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 495 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 496 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 497 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 498 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 499 | 4XX | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |


# Get-Profile

This endpoint retrieves the details of a video profile that has previously been created.

```php
function getProfile(string $profileId): VideoProfilesResponse2
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `profileId` | `string` | Template, Required | Profile id of the profile which needs to be retrieved. |

## Response Type

[`VideoProfilesResponse2`](../../doc/models/video-profiles-response-2.md)

## Example Usage

```php
$profileId = 'profile_id0';

$result = $aPIEndpointsController->getProfile($profileId);
```

## Example Response *(as JSON)*

```json
{
  "profile_id": "61921fb10822a81d955d1730",
  "name": "Gumlet-Profile-2",
  "transformations": {
    "format": "hls",
    "audio_codec": [
      "aac"
    ],
    "video_codec": [
      "libx264"
    ],
    "thumbnail": [
      "auto"
    ],
    "thumbnail_format": "png",
    "mp4_access": false,
    "per_title_encoding": true,
    "resolution": "240p,360p"
  },
  "created_at": 1636966321742,
  "updated_at": 1636975593082
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 401 | 401 | [`VideoProfiles401ErrorException`](../../doc/models/video-profiles-401-error-exception.md) |


# Delete-Profile

This endpoint removes a profile given its unique `profile_id`. The profile will be removed but video assets created using the profile will remain as it is.

```php
function deleteProfile(string $profileId): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `profileId` | `string` | Template, Required | Profile id of the profile which needs to be deleted. |

## Response Type

`array`

## Example Usage

```php
$profileId = 'profile_id0';

$result = $aPIEndpointsController->deleteProfile($profileId);
```

## Example Response

```
{}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`VideoProfiles400ErrorException`](../../doc/models/video-profiles-400-error-exception.md) |
| 401 | 401 | [`VideoProfiles401ErrorException`](../../doc/models/video-profiles-401-error-exception.md) |


# Update-Collection

This endpoint allows users to update video collection that has previously been created.

```php
function updateCollection(string $videoSourceId, ?VideoSourcesRequest1 $body = null): VideoSourcesResponse2
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `videoSourceId` | `string` | Template, Required | - |
| `body` | [`?VideoSourcesRequest1`](../../doc/models/video-sources-request-1.md) | Body, Optional | - |

## Response Type

[`VideoSourcesResponse2`](../../doc/models/video-sources-response-2.md)

## Example Usage

```php
$videoSourceId = 'video_source_id4';

$body = VideoSourcesRequest1Builder::init()
    ->name('awsrename')
    ->defaultProfileId('646df1c9173a4a2fcac180b7')
    ->type(TypeEnum::AWS)
    ->aws(
        Aws1Builder::init(
            'my-bucket-test',
            'ap-southeast-1',
            'BQUA6QFXVWHAAB6IO2X1',
            'aws_secret'
        )->build()
    )->build();

$result = $aPIEndpointsController->updateCollection(
    $videoSourceId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "id": "646df1c9173a4a2fcac180b4",
  "name": "aws-source",
  "type": "aws",
  "created_at": "2023-05-24T11:15:21.624Z",
  "updated_at": "2024-01-24T11:24:16.003Z",
  "video_protection": {
    "signed_url": true,
    "signed_url_secret": "87a2e2fbb2318f902b882c532bc703a8"
  },
  "player_config": {
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
    "pixel_tags": {},
    "logo_width": 100,
    "logo_height": 100,
    "dynamic_watermark": false,
    "watermark_font_size": 20,
    "watermark_font_color": "#ff0000",
    "watermark_bg_color": "transparent",
    "watermark_interval": 1000
  },
  "default_profile_id": "646df1c9173a4a2fcac180b7",
  "insight_property_id": "646df0aa173a4a2fcac18009",
  "aws": {
    "bucket_name": "my-bucket-test",
    "bucket_region": "ap-southeast-1",
    "access_key": "BQUA6QFXVWHAAB6IO2X1",
    "secret": "****************"
  },
  "embed_details": {
    "preload": false,
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
    "powered_by_gumlet_overlay": false,
    "allow_drm_protected_videos": false,
    "pixel_tags": {},
    "loop": false,
    "subtitle_enabled": false
  },
  "folders": [
    "folder",
    "folder 2",
    "folder 27",
    "folder 4"
  ],
  "channel_settings": {
    "title": "myTitle",
    "active": false,
    "description": "desc",
    "privacy_type": "private",
    "custom_logo": true,
    "logo_url": "https://dev-video.gumlet.io/626d21c3473a4a2faac180b4/channel/logo.png",
    "cname": [
      "okj.com",
      "sd.com",
      "safd.com"
    ],
    "temp_cname": [
      "okj.com",
      "safd.com",
      "sd.com"
    ]
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`VideoSources400ErrorException`](../../doc/models/video-sources-400-error-exception.md) |


# Get-Collection

This endpoint get all the data of video collection that has previously been created.

```php
function getCollection(string $videoSourceId): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `videoSourceId` | `string` | Template, Required | - |

## Response Type

`array`

## Example Usage

```php
$videoSourceId = 'video_source_id4';

$result = $aPIEndpointsController->getCollection($videoSourceId);
```

## Example Response

```
{}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | `ApiException` |


# Delete-Collection

This endpoint removes a video collection given its unique asset id. All the asset in collection will be removed from storage as well, associated URLs will be inaccessible.

```php
function deleteCollection(string $videoSourceId): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `videoSourceId` | `string` | Template, Required | - |

## Response Type

`array`

## Example Usage

```php
$videoSourceId = 'video_source_id4';

$result = $aPIEndpointsController->deleteCollection($videoSourceId);
```

## Example Response

```
{}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`VideoSources400Error3Exception`](../../doc/models/video-sources-400-error-3-exception.md) |


# Create-Playlist

```php
function createPlaylist(?VideoPlaylistRequest $body = null): VideoPlaylistResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?VideoPlaylistRequest`](../../doc/models/video-playlist-request.md) | Body, Optional | - |

## Response Type

[`VideoPlaylistResponse`](../../doc/models/video-playlist-response.md)

## Example Usage

```php
$body = VideoPlaylistRequestBuilder::init(
    '{{video-source-id}}',
    'Playlist-Title'
)
    ->description('This is description for playlist.')
    ->build();

$result = $aPIEndpointsController->createPlaylist($body);
```

## Example Response *(as JSON)*

```json
{
  "id": "659693cadc46251d898930f2",
  "collection_id": "646df1c9173a4a2fcac180b4",
  "title": "Playlist-Title",
  "description": "This is description for playlist.",
  "player_config": {
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
    "pixel_tags": {},
    "logo_width": 100,
    "logo_height": 100,
    "dynamic_watermark": false,
    "watermark_font_size": 20,
    "watermark_font_color": "#ff0000",
    "watermark_bg_color": "transparent",
    "watermark_interval": 1000
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`VideoPlaylist400ErrorException`](../../doc/models/video-playlist-400-error-exception.md) |


# Get-All-Playlists

```php
function getAllPlaylists(?string $collectionId = null): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `collectionId` | `?string` | Query, Optional | Video Collection ID |

## Response Type

[`VideoPlaylistResponse1[]`](../../doc/models/video-playlist-response-1.md)

## Example Usage

```php
$result = $aPIEndpointsController->getAllPlaylists();
```

## Example Response *(as JSON)*

```json
[
  {
    "id": "6566ebd57499c676fe302bfc",
    "collection_id": "646df1c9173a4a2fcac180b4",
    "title": "Playlist-1",
    "description": "This is updated description",
    "player_config": {}
  },
  {
    "id": "65802cc5bda4c3f74c99eacf",
    "collection_id": "646df1c9173a4a2fcac180b4",
    "title": "Playlist-2",
    "player_config": {}
  },
  {
    "id": "65802cc6bda4c3f74c99eae5",
    "collection_id": "646df1c9173a4a2fcac180b4",
    "title": "Playlist-3",
    "player_config": {}
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`VideoPlaylist400ErrorException`](../../doc/models/video-playlist-400-error-exception.md) |


# Add-Asset-to-Playlist

```php
function addAssetToPlaylist(
    string $playlistId,
    ?VideoPlaylistAssetRequest $body = null
): VideoPlaylistAssetResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `playlistId` | `string` | Template, Required | - |
| `body` | [`?VideoPlaylistAssetRequest`](../../doc/models/video-playlist-asset-request.md) | Body, Optional | - |

## Response Type

[`VideoPlaylistAssetResponse`](../../doc/models/video-playlist-asset-response.md)

## Example Usage

```php
$playlistId = 'playlist_id2';

$body = VideoPlaylistAssetRequestBuilder::init(
    [
        AssetListBuilder::init()
            ->assetId('6508790283e4d60611846790')
            ->build(),
        AssetListBuilder::init()
            ->assetId('650878f883e4d6061184677d')
            ->position(1)
            ->build(),
        AssetListBuilder::init()
            ->assetId('650878de83e4d6061184676a')
            ->build(),
        AssetListBuilder::init()
            ->assetId('650878d883e4d60611846757')
            ->position(2)
            ->build(),
        AssetListBuilder::init()
            ->assetId('65578dd87eebc22dcdd549a2')
            ->position(3)
            ->build()
    ]
)->build();

$result = $aPIEndpointsController->addAssetToPlaylist(
    $playlistId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "success": true
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`VideoPlaylistAsset400ErrorException`](../../doc/models/video-playlist-asset-400-error-exception.md) |


# Remove-Asset-From-Playlist

```php
function removeAssetFromPlaylist(
    string $playlistId,
    ?VideoPlaylistAssetRequest1 $body = null
): VideoPlaylistAssetResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `playlistId` | `string` | Template, Required | - |
| `body` | [`?VideoPlaylistAssetRequest1`](../../doc/models/video-playlist-asset-request-1.md) | Body, Optional | - |

## Response Type

[`VideoPlaylistAssetResponse`](../../doc/models/video-playlist-asset-response.md)

## Example Usage

```php
$playlistId = 'playlist_id2';

$body = VideoPlaylistAssetRequest1Builder::init(
    [
        '6508790783e4d606118467a3'
    ]
)->build();

$result = $aPIEndpointsController->removeAssetFromPlaylist(
    $playlistId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "success": true
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`VideoPlaylistAsset400ErrorException`](../../doc/models/video-playlist-asset-400-error-exception.md) |


# Update-Playlist

```php
function updatePlaylist(string $playlistId, ?VideoPlaylistRequest1 $body = null): VideoPlaylistResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `playlistId` | `string` | Template, Required | - |
| `body` | [`?VideoPlaylistRequest1`](../../doc/models/video-playlist-request-1.md) | Body, Optional | - |

## Response Type

[`VideoPlaylistResponse`](../../doc/models/video-playlist-response.md)

## Example Usage

```php
$playlistId = 'playlist_id2';

$body = VideoPlaylistRequest1Builder::init()
    ->title('Playlist-Title-Updated')
    ->description('This is updated description')
    ->position(6)
    ->playerConfig(
        PlayerConfig2Builder::init()
            ->preload(true)
            ->autoplay(false)
            ->disableSeek(true)
            ->disablePlayerControls(false)
            ->poweredByGumletOverlay(false)
            ->allowDrmProtectedVideos(false)
            ->loop(false)
            ->playerColor('#6658ea')
            ->includeSeo(true)
            ->subtitleEnabled(true)
            ->pixelTags(ApiHelper::deserialize('{}'))
            ->logoWidth(51)
            ->logoHeight(100)
            ->dynamicWatermark(false)
            ->watermarkFontSize(1)
            ->watermarkFontColor('#ff0000')
            ->watermarkBgColor('transparent')
            ->watermarkInterval(1000)
            ->build()
    )
    ->build();

$result = $aPIEndpointsController->updatePlaylist(
    $playlistId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "id": "6566ebd57499c676fe302bfc",
  "collection_id": "646df1c9173a4a2fcac180b4",
  "title": "Playlist-Title-Updated",
  "description": "This is updated description",
  "player_config": {
    "preload": true,
    "autoplay": false,
    "disable_seek": true,
    "disable_player_controls": false,
    "powered_by_gumlet_overlay": false,
    "allow_drm_protected_videos": false,
    "loop": false,
    "player_color": "#6658ea",
    "include_seo": true,
    "subtitle_enabled": true,
    "pixel_tags": {},
    "logo_width": 51,
    "logo_height": 100,
    "dynamic_watermark": false,
    "watermark_font_size": 1,
    "watermark_font_color": "#ff0000",
    "watermark_bg_color": "transparent",
    "watermark_interval": 1000
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`VideoPlaylist400Error3Exception`](../../doc/models/video-playlist-400-error-3-exception.md) |


# Get-Playlist-Assets

```php
function getPlaylistAssets(
    string $playlistId,
    ?string $sortBy = null,
    ?int $sortOrder = 1,
    ?int $pageNumber = 1,
    ?string $pageSize = '10'
): VideoPlaylistAssetsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `playlistId` | `string` | Template, Required | - |
| `sortBy` | `?string` | Query, Optional | Optional, if sort_by is set to asset_title it will sorted by title name. Otherwise order in which user added the assets in playlist. |
| `sortOrder` | `?int` | Query, Optional | -1 or 1<br><br>**Default**: `1` |
| `pageNumber` | `?int` | Query, Optional | Optional, Minimun 1<br><br>**Default**: `1` |
| `pageSize` | `?string` | Query, Optional | Optional, Minimun 10<br><br>**Default**: `'10'` |

## Response Type

[`VideoPlaylistAssetsResponse`](../../doc/models/video-playlist-assets-response.md)

## Example Usage

```php
$playlistId = 'playlist_id2';

$sortOrder = 1;

$pageNumber = 1;

$pageSize = '10';

$result = $aPIEndpointsController->getPlaylistAssets(
    $playlistId,
    null,
    $sortOrder,
    $pageNumber,
    $pageSize
);
```

## Example Response *(as JSON)*

```json
{
  "asset_list": [
    {
      "id": "6593d0e5e1b4f8a05db8df0d",
      "title": "video asset title 1",
      "description": "Asset description",
      "status": "ready",
      "created_at": "2024-01-02T09:01:25.079Z",
      "duration": 885
    },
    {
      "id": "6593d14583d3d4d3324f7f71",
      "title": "video asset title 2",
      "description": "Asset description",
      "status": "ready",
      "created_at": "2024-01-02T09:03:01.149Z",
      "duration": 1742
    },
    {
      "id": "6596f6f8b3487059a710ff77",
      "title": "video asset title 3",
      "description": "Asset description",
      "status": "ready",
      "created_at": "2024-01-04T18:20:40.582Z",
      "duration": 8462
    },
    {
      "id": "6596f6e7b3487059a710ff4f",
      "title": "video asset title 4",
      "description": "Asset description",
      "status": "ready",
      "created_at": "2024-01-04T18:20:23.342Z",
      "duration": 645
    },
    {
      "id": "65578dd87eebc22dcdd549a2",
      "title": "video asset title 5",
      "description": "Asset description",
      "status": "ready",
      "created_at": "2023-11-17T15:59:20.823Z",
      "duration": 427
    },
    {
      "id": "6593f310c69a8548236b2a86",
      "title": "video asset title 6",
      "description": "Asset description",
      "status": "upload-pending",
      "created_at": "2024-01-02T11:27:16.289Z",
      "duration": 720
    },
    {
      "id": "6593e776c69a8548236b2a59",
      "title": "video asset title 7",
      "description": "Asset description",
      "status": "upload-pending",
      "created_at": "2024-01-02T11:26:15.083Z",
      "duration": 374
    },
    {
      "id": "6508790283e4d60611846790",
      "title": "video asset title 8",
      "description": "Asset description",
      "status": "ready",
      "created_at": "2023-09-18T16:21:22.955Z",
      "duration": 603
    },
    {
      "id": "650878f883e4d6061184677d",
      "title": "video asset title 9",
      "description": "Asset description",
      "status": "ready",
      "created_at": "2023-09-18T16:21:12.870Z",
      "duration": 929
    },
    {
      "id": "650878de83e4d6061184676a",
      "title": "video asset title 10",
      "description": "Asset description",
      "status": "ready",
      "created_at": "2023-09-18T16:20:46.129Z",
      "duration": 12
    }
  ],
  "has_next_page": true,
  "next_page": 2
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`VideoPlaylistAssets400ErrorException`](../../doc/models/video-playlist-assets-400-error-exception.md) |


# Create-Webhook

```php
function createWebhook(?OrgWebhooksRequest $body = null): OrgWebhooksResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?OrgWebhooksRequest`](../../doc/models/org-webhooks-request.md) | Body, Optional | - |

## Response Type

[`OrgWebhooksResponse`](../../doc/models/org-webhooks-response.md)

## Example Usage

```php
$result = $aPIEndpointsController->createWebhook();
```

## Example Response *(as JSON)*

```json
{
  "id": "65eed75eadeea8478f14ebd4",
  "url": "https://webhook.site/16df065a-b398-48bc-b825-b0804979c5f1",
  "triggers": [
    "status"
  ],
  "created_at": "2024-03-11T10:05:18.316Z",
  "updated_at": "2024-03-11T10:05:18.316Z",
  "sources": [
    "5f462c1561cf8a766464ffc4"
  ],
  "secret_token": "rnVNfIKgnH"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | `ApiException` |


# Update-Webhook

```php
function updateWebhook(string $webhookId, ?OrgWebhooksRequest1 $body = null): OrgWebhooksResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `webhookId` | `string` | Template, Required | Unique identifier for the Gumlet Webhook which needs to be updated. |
| `body` | [`?OrgWebhooksRequest1`](../../doc/models/org-webhooks-request-1.md) | Body, Optional | - |

## Response Type

[`OrgWebhooksResponse`](../../doc/models/org-webhooks-response.md)

## Example Usage

```php
$webhookId = 'webhook_id6';

$result = $aPIEndpointsController->updateWebhook($webhookId);
```

## Example Response *(as JSON)*

```json
{
  "id": "65eed75eadeea8478f14ebd4",
  "url": "https://webhook.site/16df065a-b398-48bc-b825-b0804979c5f2",
  "triggers": [
    "status"
  ],
  "created_at": "2024-03-11T10:05:18.316Z",
  "updated_at": "2024-03-11T10:10:37.461Z",
  "sources": [
    "5f462c1561cf8a766464ffc4"
  ],
  "secret_token": "rnVNfIKgnH"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | `ApiException` |


# Delete-Webhook

```php
function deleteWebhook(string $webhookId): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `webhookId` | `string` | Template, Required | Unique identifier for the Gumlet Webhook which needs to be deleted. |

## Response Type

`array`

## Example Usage

```php
$webhookId = 'webhook_id6';

$result = $aPIEndpointsController->deleteWebhook($webhookId);
```

## Example Response

```
{}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | `ApiException` |


# Insights-Chart-Data

This endpoint retrieves metrics data to plot the chart.

```php
function insightsChartData(?InsightsChartDataRequest $body = null): InsightsChartDataResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?InsightsChartDataRequest`](../../doc/models/insights-chart-data-request.md) | Body, Optional | - |

## Response Type

[`InsightsChartDataResponse`](../../doc/models/insights-chart-data-response.md)

## Example Usage

```php
$body = InsightsChartDataRequestBuilder::init(
    [
        'metrics8'
    ],
    'property_id4',
    TimeframeBuilder::init(
        DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
        DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
    )->build()
)
    ->groupBy(GroupByEnum::DAILY)
    ->build();

$result = $aPIEndpointsController->insightsChartData($body);
```

## Example Response *(as JSON)*

```json
{
  "views": [
    {
      "x": 1647475200000,
      "y": null,
      "unit": "views"
    },
    {
      "x": 1647561600000,
      "y": null,
      "unit": "views"
    },
    {
      "x": 1647648000000,
      "y": 6,
      "unit": "views"
    },
    {
      "x": 1647734400000,
      "y": 24,
      "unit": "views"
    },
    {
      "x": 1647820800000,
      "y": 33,
      "unit": "views"
    },
    {
      "x": 1647907200000,
      "y": 16,
      "unit": "views"
    }
  ],
  "unique_views": [
    {
      "x": 1647475200000,
      "y": null,
      "unit": "users"
    },
    {
      "x": 1647561600000,
      "y": null,
      "unit": "users"
    },
    {
      "x": 1647648000000,
      "y": 1,
      "unit": "users"
    },
    {
      "x": 1647734400000,
      "y": 1,
      "unit": "users"
    },
    {
      "x": 1647820800000,
      "y": 1,
      "unit": "users"
    },
    {
      "x": 1647907200000,
      "y": 1,
      "unit": "users"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`InsightsChartData400ErrorException`](../../doc/models/insights-chart-data-400-error-exception.md) |
| 401 | 401 | [`InsightsChartData401ErrorException`](../../doc/models/insights-chart-data-401-error-exception.md) |


# Insights-Breakdown-Data

This endpoint retrieves distribution data of a given breakdown value for a given metric.

```php
function insightsBreakdownData(?InsightsBreakdownDataRequest $body = null): InsightsBreakdownDataResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?InsightsBreakdownDataRequest`](../../doc/models/insights-breakdown-data-request.md) | Body, Optional | - |

## Response Type

[`InsightsBreakdownDataResponse`](../../doc/models/insights-breakdown-data-response.md)

## Example Usage

```php
$body = InsightsBreakdownDataRequestBuilder::init(
    [
        BreakdownBuilder::init(
            Name1Enum::CUSTOM_DATA_7,
            MetricEnum::AVERAGE_BITRATE
        )
            ->page(1)
            ->pageSize(10)
            ->build()
    ],
    'property_id4',
    Timeframe1Builder::init(
        DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
        DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
    )->build()
)->build();

$result = $aPIEndpointsController->insightsBreakdownData($body);
```

## Example Response *(as JSON)*

```json
{
  "views": {
    "data": [
      {
        "key": "com.reactnativesdkdev",
        "value": 79,
        "unit": "views"
      }
    ],
    "has_next_page": false,
    "current_page": 1
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`InsightsBreakdownData400ErrorException`](../../doc/models/insights-breakdown-data-400-error-exception.md) |
| 401 | 401 | [`InsightsBreakdownData401ErrorException`](../../doc/models/insights-breakdown-data-401-error-exception.md) |


# Insights-Aggregated-Data

This endpoint retrieves aggregated data of the given metrics.

```php
function insightsAggregatedData(?InsightsAggregatedDataRequest $body = null): InsightsAggregatedDataResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?InsightsAggregatedDataRequest`](../../doc/models/insights-aggregated-data-request.md) | Body, Optional | - |

## Response Type

[`InsightsAggregatedDataResponse`](../../doc/models/insights-aggregated-data-response.md)

## Example Usage

```php
$body = InsightsAggregatedDataRequestBuilder::init(
    [
        AggregateBuilder::init(
            Metric1Enum::AVERAGE_BITRATE,
            FunctionEnum::SUM
        )->build()
    ],
    'property_id4',
    Timeframe2Builder::init()->build()
)->build();

$result = $aPIEndpointsController->insightsAggregatedData($body);
```

## Example Response *(as JSON)*

```json
{
  "views": {
    "sum": {
      "value": 79,
      "unit": "views"
    }
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`InsightsAggregatedData400ErrorException`](../../doc/models/insights-aggregated-data-400-error-exception.md) |
| 401 | 401 | [`InsightsAggregatedData401ErrorException`](../../doc/models/insights-aggregated-data-401-error-exception.md) |


# Create-Image-Source

This endpoint allows users to create image source.

```php
function createImageSource(?ImageSourcesRequest $body = null): ImageSourcesResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?ImageSourcesRequest`](../../doc/models/image-sources-request.md) | Body, Optional | - |

## Response Type

[`ImageSourcesResponse`](../../doc/models/image-sources-response.md)

## Example Usage

```php
$result = $aPIEndpointsController->createImageSource();
```

## Example Response *(as JSON)*

```json
{
  "id": "65b01610e99b77f116c0e32b",
  "name": "zoom-collection",
  "type": "zoom",
  "created_at": "2024-01-23T19:40:00.447Z",
  "updated_at": "2024-01-23T19:40:00.447Z",
  "video_protection": {},
  "player_config": {
    "preload": true,
    "autoplay": false,
    "disable_seek": false,
    "disable_player_controls": false,
    "powered_by_gumlet_overlay": true,
    "allow_drm_protected_videos": true,
    "loop": false,
    "player_color": "#6658ea",
    "include_seo": true,
    "subtitle_enabled": false,
    "pixel_tags": {},
    "logo_width": 100,
    "logo_height": 100,
    "dynamic_watermark": false,
    "watermark_font_size": 20,
    "watermark_font_color": "#ff0000",
    "watermark_bg_color": "transparent",
    "watermark_interval": 1000
  },
  "default_profile_id": "646df1c9173a4a2fcac180b7",
  "insight_property_id": "65b01610e99b77f116c0e329",
  "zoom": {
    "secret": "yourSecret"
  },
  "embed_details": {
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
  },
  "folders": [],
  "channel_settings": {
    "active": false,
    "privacy_type": "private"
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`ImageSources400ErrorException`](../../doc/models/image-sources-400-error-exception.md) |


# List-Sources

This endpoint list image sources which are assigned to the user or token.

```php
function listSources(): ImageSourcesResponse1
```

## Response Type

[`ImageSourcesResponse1`](../../doc/models/image-sources-response-1.md)

## Example Usage

```php
$result = $aPIEndpointsController->listSources();
```

## Example Response *(as JSON)*

```json
{
  "all_sources": [
    {
      "id": "646df1c9173a4a2fcac180b4",
      "name": "collection_name",
      "type": "aws",
      "created_at": "2023-05-24T11:15:21.624Z",
      "updated_at": "2024-01-24T11:57:48.744Z",
      "video_protection": {
        "signed_url": true,
        "signed_url_secret": "47a3e2fbb1318f033b882c632bc103a8"
      },
      "player_config": {
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
        "pixel_tags": {},
        "logo_width": 100,
        "logo_height": 100,
        "dynamic_watermark": false,
        "watermark_font_size": 20,
        "watermark_font_color": "#ff0000",
        "watermark_bg_color": "transparent",
        "watermark_interval": 1000
      },
      "default_profile_id": "646df1c9173a4a2fcac180b7",
      "insight_property_id": "646df0aa173a4a2fcac18009",
      "aws": {
        "bucket_name": "asd",
        "bucket_region": "ap-south-1",
        "access_key": "Code@123",
        "secret": "****************"
      },
      "embed_details": {
        "pixel_tags": {},
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
        "watermark_interval": 1000
      },
      "folders": [
        "folder",
        "folder 2",
        "folder 27",
        "folder 4"
      ],
      "channel_settings": {
        "title": "my channel",
        "active": false,
        "description": "desc",
        "privacy_type": "private",
        "custom_logo": true,
        "logo_url": "https://dev-video.gumlet.io/646df1c9172a4a2fcac180b4/channel/logo.png",
        "cname": [
          "okj.com",
          "sd.com",
          "safd.com"
        ],
        "temp_cname": [
          "okj.com",
          "safd.com",
          "sd.com"
        ]
      }
    },
    {
      "id": "65b016f4e99b77f116c0e381",
      "name": "private uploads",
      "type": "direct-upload",
      "created_at": "2024-01-23T19:43:48.267Z",
      "updated_at": "2024-01-23T19:43:48.272Z",
      "video_protection": {},
      "player_config": {
        "preload": true,
        "autoplay": false,
        "disable_seek": false,
        "disable_player_controls": false,
        "powered_by_gumlet_overlay": true,
        "allow_drm_protected_videos": true,
        "loop": false,
        "player_color": "#6658ea",
        "include_seo": true,
        "subtitle_enabled": false,
        "pixel_tags": {},
        "logo_width": 100,
        "logo_height": 100,
        "dynamic_watermark": false,
        "watermark_font_size": 20,
        "watermark_font_color": "#ff0000",
        "watermark_bg_color": "transparent",
        "watermark_interval": 1000
      },
      "default_profile_id": "646df1c9173a4a2fcac180b7",
      "insight_property_id": "65b016f4e99b77f116c0e37f",
      "embed_details": {
        "pixel_tags": {},
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
      },
      "folders": [],
      "channel_settings": {
        "active": false,
        "privacy_type": "private"
      }
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | `ApiException` |


# Update-Image-Source

This endpoint allows users to update image source that has previously been created.

```php
function updateImageSource(string $imageSourceId, ?ImageSourcesRequest1 $body = null): ImageSourcesResponse2
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `imageSourceId` | `string` | Template, Required | image source id which you want to update |
| `body` | [`?ImageSourcesRequest1`](../../doc/models/image-sources-request-1.md) | Body, Optional | - |

## Response Type

[`ImageSourcesResponse2`](../../doc/models/image-sources-response-2.md)

## Example Usage

```php
$imageSourceId = 'image_source_id6';

$body = ImageSourcesRequest1Builder::init()
    ->type(Type3Enum::AWS)
    ->aws(
        Aws4Builder::init(
            'my-bucket-test',
            'ap-southeast-1',
            'BQUA6QFXVWHAAB6IO2X1',
            'aws_secret'
        )->build()
    )->build();

$result = $aPIEndpointsController->updateImageSource(
    $imageSourceId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "id": "646df1c9173a4a2fcac180b4",
  "name": "aws-source",
  "type": "aws",
  "created_at": "2023-05-24T11:15:21.624Z",
  "updated_at": "2024-01-24T11:24:16.003Z",
  "video_protection": {
    "signed_url": true,
    "signed_url_secret": "87a2e2fbb2318f902b882c532bc703a8"
  },
  "player_config": {
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
    "pixel_tags": {},
    "logo_width": 100,
    "logo_height": 100,
    "dynamic_watermark": false,
    "watermark_font_size": 20,
    "watermark_font_color": "#ff0000",
    "watermark_bg_color": "transparent",
    "watermark_interval": 1000
  },
  "default_profile_id": "646df1c9173a4a2fcac180b7",
  "insight_property_id": "646df0aa173a4a2fcac18009",
  "aws": {
    "bucket_name": "my-bucket-test",
    "bucket_region": "ap-southeast-1",
    "access_key": "BQUA6QFXVWHAAB6IO2X1",
    "secret": "****************"
  },
  "embed_details": {
    "preload": false,
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
    "powered_by_gumlet_overlay": false,
    "allow_drm_protected_videos": false,
    "pixel_tags": {},
    "loop": false,
    "subtitle_enabled": false
  },
  "folders": [
    "folder",
    "folder 2",
    "folder 27",
    "folder 4"
  ],
  "channel_settings": {
    "title": "myTitle",
    "active": false,
    "description": "desc",
    "privacy_type": "private",
    "custom_logo": true,
    "logo_url": "https://dev-video.gumlet.io/626d21c3473a4a2faac180b4/channel/logo.png",
    "cname": [
      "okj.com",
      "sd.com",
      "safd.com"
    ],
    "temp_cname": [
      "okj.com",
      "safd.com",
      "sd.com"
    ]
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`ImageSources400ErrorException`](../../doc/models/image-sources-400-error-exception.md) |


# Delete-Source

This endpoint removes a image source. All image delivery using this subdomain will be stopped.

```php
function deleteSource(string $imageSourceId): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `imageSourceId` | `string` | Template, Required | - |

## Response Type

`array`

## Example Usage

```php
$imageSourceId = 'image_source_id6';

$result = $aPIEndpointsController->deleteSource($imageSourceId);
```

## Example Response

```
{}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`ImageSources400Error3Exception`](../../doc/models/image-sources-400-error-3-exception.md) |


# Purge-Image-Cache

You can purge cache for any image by using our cache purge API.

```php
function purgeImageCache(string $subdomain, ?PurgeRequest $body = null)
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subdomain` | `string` | Template, Required | Subdomain is same subdomain you created while creating source. If you serve image from example.gumlet.com, please enter only 'example' for this parameter. |
| `body` | [`?PurgeRequest`](../../doc/models/purge-request.md) | Body, Optional | - |

## Response Type

`mixed`

## Example Usage

```php
$subdomain = 'subdomain4';

$result = $aPIEndpointsController->purgeImageCache($subdomain);
```

## Example Response

```
{
  "success": true
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | `ApiException` |


# Image-Analytics

This endpoint help you get analytics data.

```php
function imageAnalytics(?ImageAnalyticsRequest $body = null): ImageAnalyticsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?ImageAnalyticsRequest`](../../doc/models/image-analytics-request.md) | Body, Optional | - |

## Response Type

[`ImageAnalyticsResponse`](../../doc/models/image-analytics-response.md)

## Example Usage

```php
$result = $aPIEndpointsController->imageAnalytics();
```

## Example Response *(as JSON)*

```json
{
  "top_assets": [
    {
      "collection_id": "<COLLECTION_ID>",
      "asset_id": "<ASSET_ID>",
      "units": 162870,
      "collection_name": "<COLLECTION_NAME>"
    },
    {
      "collection_id": "<COLLECTION_ID>",
      "asset_id": "<ASSET_ID>",
      "units": 21348,
      "collection_name": "<COLLECTION_NAME>"
    },
    {
      "collection_id": "<COLLECTION_ID>",
      "asset_id": "<ASSET_ID>",
      "units": 1239,
      "collection_name": "<COLLECTION_NAME>"
    },
    {
      "collection_id": "<COLLECTION_ID>",
      "asset_id": "<ASSET_ID>",
      "units": 974,
      "collection_name": "<COLLECTION_NAME>"
    },
    {
      "collection_id": "<COLLECTION_ID>",
      "asset_id": "<ASSET_ID>",
      "units": 124,
      "collection_name": "<COLLECTION_NAME>"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`ImageAnalytics400ErrorException`](../../doc/models/image-analytics-400-error-exception.md) |


# Create-Live-Asset

A live asset refers to a media content/video that is live-streamed through Gumlet. This endpoint creates a live streaming asset allowing users to live stream a video that will be pushed to Gumlet.

```php
function createLiveAsset(?VideoLiveAssetsRequest $body = null): VideoLiveAssetsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?VideoLiveAssetsRequest`](../../doc/models/video-live-assets-request.md) | Body, Optional | - |

## Response Type

[`VideoLiveAssetsResponse`](../../doc/models/video-live-assets-response.md)

## Example Usage

```php
$result = $aPIEndpointsController->createLiveAsset();
```

## Example Response *(as JSON)*

```json
{
  "status": "created",
  "stream_key": "619231610822a81d955d22f4",
  "live_asset_id": "619231610822a81d955d22f3",
  "live_video_source_id": "6165247368d80232d28d4379",
  "input": {
    "resolution": [
      "720p"
    ]
  },
  "stream_url": "rtmp://livestream-ingest.gumlet.io:1935/app/619231610822a81d955d22f4",
  "output": {
    "playback_url": "https://video.gumlet.io/6165247368d80232d28d4379/619231610822a81d955d22f3/master.m3u8"
  },
  "created_at": 1636970849188,
  "updated_at": 1636970849188
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`VideoLiveAssets400ErrorException`](../../doc/models/video-live-assets-400-error-exception.md) |
| 401 | 401 | [`VideoLiveAssets401ErrorException`](../../doc/models/video-live-assets-401-error-exception.md) |


# Create-Live-Asset-Copy

A live asset refers to a media content/video that is live-streamed through Gumlet. This endpoint allows user to update a live streaming asset.

```php
function createLiveAssetCopy(?VideoLiveAssetsUpdateRequest $body = null): VideoLiveAssetsUpdateResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?VideoLiveAssetsUpdateRequest`](../../doc/models/video-live-assets-update-request.md) | Body, Optional | - |

## Response Type

[`VideoLiveAssetsUpdateResponse`](../../doc/models/video-live-assets-update-response.md)

## Example Usage

```php
$result = $aPIEndpointsController->createLiveAssetCopy();
```

## Example Response *(as JSON)*

```json
{
  "status": "created",
  "stream_key": "619231610822a81d955d22f4",
  "live_asset_id": "619231610822a81d955d22f3",
  "live_video_source_id": "6165247368d80232d28d4379",
  "input": {
    "resolution": [
      "720p"
    ]
  },
  "stream_url": "rtmp://livestream-ingest.gumlet.io:1935/app/619231610822a81d955d22f4",
  "output": {
    "playback_url": "https://video.gumlet.io/6165247368d80232d28d4379/619231610822a81d955d22f3/master.m3u8"
  },
  "created_at": 1636970849188,
  "updated_at": 1636970849188
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`VideoLiveAssetsUpdate400ErrorException`](../../doc/models/video-live-assets-update-400-error-exception.md) |
| 401 | 401 | [`VideoLiveAssetsUpdate401ErrorException`](../../doc/models/video-live-assets-update-401-error-exception.md) |


# Get-Live-Asset-Status

This endpoint retrieves the details of a live video asset that has previously been created.

```php
function getLiveAssetStatus(string $liveAssetId): VideoLiveAssetsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `liveAssetId` | `string` | Template, Required | An live asset id for the previously created asset. |

## Response Type

[`VideoLiveAssetsResponse`](../../doc/models/video-live-assets-response.md)

## Example Usage

```php
$liveAssetId = 'live_asset_id4';

$result = $aPIEndpointsController->getLiveAssetStatus($liveAssetId);
```

## Example Response *(as JSON)*

```json
{
  "status": "created",
  "stream_key": "619231610822a81d955d22f4",
  "live_asset_id": "619231610822a81d955d22f3",
  "live_video_source_id": "6165247368d80232d28d4379",
  "input": {
    "resolution": [
      "720p"
    ]
  },
  "stream_url": "rtmp://livestream-ingest.gumlet.io:1935/app/619231610822a81d955d22f4",
  "output": {
    "playback_url": "https://video.gumlet.io/6165247368d80232d28d4379/619231610822a81d955d22f3/master.m3u8"
  },
  "created_at": 1636970849188,
  "updated_at": 1636970849188
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`VideoLiveAssets400ErrorException`](../../doc/models/video-live-assets-400-error-exception.md) |
| 401 | 401 | [`VideoLiveAssets401ErrorException`](../../doc/models/video-live-assets-401-error-exception.md) |


# Delete-Live-Asset

This endpoint removes a live asset given its unique live asset id. The live asset will be removed from storage as well, associated URLs will be inaccessible.

```php
function deleteLiveAsset(string $liveAssetId): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `liveAssetId` | `string` | Template, Required | Live asset id of the live asset which needs to be deleted. |

## Response Type

`array`

## Example Usage

```php
$liveAssetId = 'live_asset_id4';

$result = $aPIEndpointsController->deleteLiveAsset($liveAssetId);
```

## Example Response

```
{}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | `ApiException` |


# Complete-Live-Stream

This endpoint allows marking live assets complete. Once the live asset is marked complete, it can no longer be used to ingest the live stream on Gumlet.

```php
function completeLiveStream(string $liveAssetId): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `liveAssetId` | `string` | Template, Required | Live asset id of the live stream which needs to be completed. |

## Response Type

`array`

## Example Usage

```php
$liveAssetId = 'live_asset_id4';

$result = $aPIEndpointsController->completeLiveStream($liveAssetId);
```

## Example Response

```
{}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`VideoLiveAssetsComplete400ErrorException`](../../doc/models/video-live-assets-complete-400-error-exception.md) |


# Filter-Live-Assets

This endpoint lists live assets on the basis of `status` for the given `live_source_id`.

```php
function filterLiveAssets(
    string $liveSourceId,
    ?string $status = null,
    ?int $offset = null,
    ?int $size = null
): VideoLiveAssetsListResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `liveSourceId` | `string` | Template, Required | Gumlet live source/collection id. |
| `status` | `?string` | Query, Optional | To filter live assets on the basis of their current status. Can be specified as a single status value string or comma-separated status values. The status value can be one of `created`, `active`, `complete`, `disconnected`, `errored`, and `deleted`. |
| `offset` | `?int` | Query, Optional | Offset value for a paginated list of assets. |
| `size` | `?int` | Query, Optional | Page size for the paginated list. |

## Response Type

[`VideoLiveAssetsListResponse`](../../doc/models/video-live-assets-list-response.md)

## Example Usage

```php
$liveSourceId = 'live_source_id0';

$result = $aPIEndpointsController->filterLiveAssets($liveSourceId);
```

## Example Response *(as JSON)*

```json
{
  "all_live_assets": [
    {
      "status": "created",
      "stream_key": "619231610822a81d955d22f4",
      "live_asset_id": "619231610822a81d955d22f3",
      "live_video_source_id": "6165247368d80232d28d4379",
      "input": {
        "resolution": [
          "720p"
        ]
      },
      "stream_url": "rtmp://livestream-ingest.gumlet.io:1935/app/619231610822a81d955d22f4",
      "output": {
        "playback_url": "https://video.gumlet.io/6165247368d80232d28d4379/619231610822a81d955d22f3/master.m3u8"
      },
      "created_at": 1636970849188,
      "updated_at": 1636970849188
    },
    {
      "status": "disconnected",
      "stream_key": "6176800709f03ad7bda908a0",
      "live_asset_id": "6176800709f03a02cba9089f",
      "live_video_source_id": "6165247368d80232d28d4379",
      "input": {
        "resolution": [
          "240p",
          "360p",
          "480p",
          "540p",
          "720p"
        ]
      },
      "stream_url": "rtmp://livestream-ingest.gumlet.io:1935/app/6176800709f03ad7bda908a0",
      "output": {
        "playback_url": "https://video.gumlet.io/6165247368d80232d28d4379/6176800709f03a02cba9089f/master.m3u8"
      },
      "created_at": 1635155975264,
      "updated_at": 1635160627501
    },
    {
      "status": "disconnected",
      "stream_key": "6176718e9aa3e867fe81a480",
      "live_asset_id": "6176718e9aa3e8957d81a47f",
      "live_video_source_id": "6165247368d80232d28d4379",
      "input": {
        "resolution": [
          "240p",
          "360p",
          "480p",
          "540p",
          "720p"
        ]
      },
      "stream_url": "rtmp://livestream-ingest.gumlet.io:1935/app/6176718e9aa3e867fe81a480",
      "output": {
        "playback_url": "https://video.gumlet.io/6165247368d80232d28d4379/6176718e9aa3e8957d81a47f/master.m3u8"
      },
      "created_at": 1635152270038,
      "updated_at": 1635152551885
    },
    {
      "status": "complete",
      "stream_key": "61766f059aa3e86f2d81a2ef",
      "live_asset_id": "61766f059aa3e8b8bd81a2ee",
      "live_video_source_id": "6165247368d80232d28d4379",
      "input": {
        "resolution": [
          "240p",
          "360p",
          "480p",
          "540p",
          "720p",
          "1080p"
        ]
      },
      "stream_url": "rtmp://livestream-ingest.gumlet.io:1935/app/61766f059aa3e86f2d81a2ef",
      "output": {
        "playback_url": "https://video.gumlet.io/6165247368d80232d28d4379/61766f059aa3e8b8bd81a2ee/master.m3u8",
        "storage_size": 115440086,
        "duration": 164.266667
      },
      "created_at": 1635151621775,
      "updated_at": 1635151855528
    },
    {
      "status": "complete",
      "stream_key": "6165251168d80250ed8d44cd",
      "live_asset_id": "6165251168d8022abd8d44cc",
      "live_video_source_id": "6165247368d80232d28d4379",
      "input": {
        "resolution": [
          "240p",
          "360p",
          "480p",
          "720p",
          "1080p"
        ]
      },
      "stream_url": "rtmp://livestream-ingest.gumlet.io:1935/app/6165251168d80250ed8d44cd",
      "output": {
        "playback_url": "https://video.gumlet.io/6165247368d80232d28d4379/6165251168d8022abd8d44cc/master.m3u8"
      },
      "created_at": 1634018577862,
      "updated_at": 1634020487682
    }
  ],
  "total_live_asset_count": 5,
  "current_offset": 5
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`VideoLiveAssetsList400ErrorException`](../../doc/models/video-live-assets-list-400-error-exception.md) |
| 401 | 401 | [`VideoLiveAssetsList401ErrorException`](../../doc/models/video-live-assets-list-401-error-exception.md) |


# Get-Live-Asset-Status-Copy

This endpoint retrieves the history of a live video asset that has previously been created.

```php
function getLiveAssetStatusCopy(string $liveAssetId): VideoLiveAssetsCOPYResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `liveAssetId` | `string` | Template, Required | An live asset id for the previously created asset. |

## Response Type

[`VideoLiveAssetsCOPYResponse`](../../doc/models/video-live-assets-copy-response.md)

## Example Usage

```php
$liveAssetId = 'live_asset_id4';

$result = $aPIEndpointsController->getLiveAssetStatusCopy($liveAssetId);
```

## Example Response *(as JSON)*

```json
{
  "status": "created",
  "stream_key": "619231610822a81d955d22f4",
  "live_asset_id": "619231610822a81d955d22f3",
  "live_video_source_id": "6165247368d80232d28d4379",
  "input": {
    "resolution": [
      "720p"
    ]
  },
  "stream_url": "rtmp://livestream-ingest.gumlet.io:1935/app/619231610822a81d955d22f4",
  "output": {
    "playback_url": "https://video.gumlet.io/6165247368d80232d28d4379/619231610822a81d955d22f3/master.m3u8"
  },
  "created_at": 1636970849188,
  "updated_at": 1636970849188
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | 400 | [`VideoLiveAssetsCOPY400ErrorException`](../../doc/models/video-live-assets-copy400-error-exception.md) |
| 401 | 401 | [`VideoLiveAssetsCOPY401ErrorException`](../../doc/models/video-live-assets-copy401-error-exception.md) |

