
# Video Profiles Response 1

## Structure

`VideoProfilesResponse1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `allProfiles` | [`?(AllProfile[])`](../../doc/models/all-profile.md) | Optional | - | getAllProfiles(): ?array | setAllProfiles(?array allProfiles): void |
| `totalProfileCount` | `?int` | Optional | **Default**: `0` | getTotalProfileCount(): ?int | setTotalProfileCount(?int totalProfileCount): void |
| `currentOffset` | `?int` | Optional | **Default**: `0` | getCurrentOffset(): ?int | setCurrentOffset(?int currentOffset): void |

## Example (as JSON)

```json
{
  "total_profile_count": 8,
  "current_offset": 8,
  "all_profiles": [
    {
      "profile_id": "profile_id2",
      "name": "name8",
      "transformations": {
        "format": "format2",
        "audio_codec": [
          "audio_codec2"
        ],
        "video_codec": [
          "video_codec1",
          "video_codec2",
          "video_codec3"
        ],
        "thumbnail": [
          "thumbnail5",
          "thumbnail6",
          "thumbnail7"
        ],
        "thumbnail_format": "thumbnail_format8"
      },
      "created_at": 170,
      "updated_at": 14
    },
    {
      "profile_id": "profile_id2",
      "name": "name8",
      "transformations": {
        "format": "format2",
        "audio_codec": [
          "audio_codec2"
        ],
        "video_codec": [
          "video_codec1",
          "video_codec2",
          "video_codec3"
        ],
        "thumbnail": [
          "thumbnail5",
          "thumbnail6",
          "thumbnail7"
        ],
        "thumbnail_format": "thumbnail_format8"
      },
      "created_at": 170,
      "updated_at": 14
    }
  ]
}
```

