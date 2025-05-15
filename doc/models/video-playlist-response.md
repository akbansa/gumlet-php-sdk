
# Video Playlist Response

## Structure

`VideoPlaylistResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `collectionId` | `?string` | Optional | - | getCollectionId(): ?string | setCollectionId(?string collectionId): void |
| `title` | `?string` | Optional | - | getTitle(): ?string | setTitle(?string title): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `playerConfig` | [`?PlayerConfig`](../../doc/models/player-config.md) | Optional | - | getPlayerConfig(): ?PlayerConfig | setPlayerConfig(?PlayerConfig playerConfig): void |

## Example (as JSON)

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
    "powered_by_gumlet_overlay": false
  }
}
```

