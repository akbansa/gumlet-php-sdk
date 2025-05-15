
# Video Playlist Response 1

## Structure

`VideoPlaylistResponse1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `collectionId` | `?string` | Optional | - | getCollectionId(): ?string | setCollectionId(?string collectionId): void |
| `title` | `?string` | Optional | - | getTitle(): ?string | setTitle(?string title): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `playerConfig` | `?array` | Optional | - | getPlayerConfig(): ?array | setPlayerConfig(?array playerConfig): void |

## Example (as JSON)

```json
{
  "id": "6566ebd57499c676fe302bfc",
  "collection_id": "646df1c9173a4a2fcac180b4",
  "title": "Playlist-1",
  "description": "This is updated description",
  "player_config": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

