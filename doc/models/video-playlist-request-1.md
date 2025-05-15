
# Video Playlist Request 1

## Structure

`VideoPlaylistRequest1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `title` | `?string` | Optional | - | getTitle(): ?string | setTitle(?string title): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `position` | `?int` | Optional | Playlists have order in which they will be shown on the channel page. | getPosition(): ?int | setPosition(?int position): void |
| `playerConfig` | [`?PlayerConfig2`](../../doc/models/player-config-2.md) | Optional | Configure player settings for this playlist, it overrides the setting set on collection. | getPlayerConfig(): ?PlayerConfig2 | setPlayerConfig(?PlayerConfig2 playerConfig): void |
| `channelVisibility` | `?bool` | Optional | If true then playlist will be visible on channel page.<br><br>**Default**: `false` | getChannelVisibility(): ?bool | setChannelVisibility(?bool channelVisibility): void |

## Example (as JSON)

```json
{
  "channel_visibility": false,
  "title": "title8",
  "description": "description2",
  "position": 70,
  "player_config": {
    "preload": false,
    "autoplay": false,
    "disable_seek": false,
    "disable_player_controls": false,
    "powered_by_gumlet_overlay": false
  }
}
```

