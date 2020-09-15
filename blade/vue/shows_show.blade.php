@extends('vue.layout')

@section('title', 'Members - Shows')

@section('menu')
    @include('sections.menu', ['active' => 'edge'])
    @include('sections.edge-nav', ['active' => 'shows'])
@endsection

@php
// <!--
$rc1 = <<<'EOT'
{
  "data": [
    {
      "type": "content",
      "id": "231907",
      "attributes": {
        "slug": "implied-half-time-feel",
        "type": "quick-tips",
        "sort": 0,
        "status": "published",
        "totalXp": "150",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2019-09-02 17:00:00",
        "archivedOn": null,
        "createdOn": "2019-08-28 10:40:24",
        "difficulty": "Intermediate",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Implied Half Time Feel",
        "xp": "150",
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": null,
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": null,
        "transcriberName": null,
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": null,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null,
        "user_progress": {
          "149628": []
        },
        "progress_state": false,
        "progress_percent": 0,
        "completed": false,
        "started": false,
        "permissions": [
          {
            "id": 291,
            "contentType": "quick-tips",
            "brand": "drumeo"
          }
        ],
        "user_playlists": {
          "149628": []
        },
        "is_added_to_primary_playlist": false,
        "is_new": false,
        "resources": {
          "1": {
            "resource_name": "PDF Sheet Music",
            "resource_url": "https://d1923uyy6spedc.cloudfront.net/231907-resource-1567417262.pdf"
          }
        },
        "chapters": {
          "1": {
            "chapter_timecode": "62",
            "chapter_description": "Exercise #1a"
          },
          "2": {
            "chapter_timecode": "104",
            "chapter_description": "Exercise #1b"
          },
          "3": {
            "chapter_timecode": "148",
            "chapter_description": "Exercise #2a"
          },
          "4": {
            "chapter_timecode": "184",
            "chapter_description": "Exercise #2b"
          }
        },
        "assignments": [
          {
            "id": 232236,
            "slug": "1a",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-09-02 09:50:07",
            "archivedOn": null,
            "createdOn": "2019-09-02 09:50:09",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#1a",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "224044",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 232237,
            "slug": "1b",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-09-02 09:50:17",
            "archivedOn": null,
            "createdOn": "2019-09-02 09:50:19",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#1b",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "224045",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 232238,
            "slug": "2a",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-09-02 09:50:30",
            "archivedOn": null,
            "createdOn": "2019-09-02 09:50:32",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#2a",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "224050",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 232239,
            "slug": "2b",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-09-02 09:50:45",
            "archivedOn": null,
            "createdOn": "2019-09-02 09:50:47",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#2b",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "224051",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          }
        ],
        "url": "https://app-staging.drumeo.com/laravel/public/members/lessons/quick-tips/231907",
        "xp_bonus": 150,
        "like_count": "25",
        "is_liked_by_current_user": false
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "104252"
            },
            {
              "type": "contentData",
              "id": "104253"
            },
            {
              "type": "contentData",
              "id": "104254"
            },
            {
              "type": "contentData",
              "id": "104255"
            },
            {
              "type": "contentData",
              "id": "104256"
            },
            {
              "type": "contentData",
              "id": "104257"
            },
            {
              "type": "contentData",
              "id": "104258"
            },
            {
              "type": "contentData",
              "id": "104259"
            },
            {
              "type": "contentData",
              "id": "104260"
            },
            {
              "type": "contentData",
              "id": "104261"
            },
            {
              "type": "contentData",
              "id": "104262"
            },
            {
              "type": "contentData",
              "id": "104263"
            },
            {
              "type": "contentData",
              "id": "104272"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "3120"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "3520"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "38720"
            },
            {
              "type": "tag",
              "id": "45538"
            },
            {
              "type": "tag",
              "id": "48189"
            },
            {
              "type": "tag",
              "id": "50734"
            },
            {
              "type": "tag",
              "id": "72274"
            },
            {
              "type": "tag",
              "id": "73163"
            },
            {
              "type": "tag",
              "id": "73318"
            },
            {
              "type": "tag",
              "id": "82228"
            },
            {
              "type": "tag",
              "id": "86109"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "230232",
      "attributes": {
        "slug": "singles-doubles-and-inverted",
        "type": "quick-tips",
        "sort": 0,
        "status": "published",
        "totalXp": "150",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2019-08-28 17:00:00",
        "archivedOn": null,
        "createdOn": "2019-07-31 11:19:07",
        "difficulty": "All Skill Levels",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Singles, Doubles, And Inverted",
        "xp": "150",
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": null,
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": null,
        "transcriberName": null,
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": null,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null,
        "user_progress": {
          "149628": []
        },
        "progress_state": false,
        "progress_percent": 0,
        "completed": false,
        "started": false,
        "permissions": [
          {
            "id": 291,
            "contentType": "quick-tips",
            "brand": "drumeo"
          }
        ],
        "user_playlists": {
          "149628": []
        },
        "is_added_to_primary_playlist": false,
        "is_new": false,
        "resources": {
          "1": {
            "resource_name": "PDF Sheet Music",
            "resource_url": "https://d1923uyy6spedc.cloudfront.net/230232-resource-1566907529.pdf"
          }
        },
        "chapters": {
          "1": {
            "chapter_timecode": "10",
            "chapter_description": "Overview"
          },
          "2": {
            "chapter_timecode": "28",
            "chapter_description": "Exercise #1"
          },
          "3": {
            "chapter_timecode": "94",
            "chapter_description": "Exercise #2"
          },
          "4": {
            "chapter_timecode": "191",
            "chapter_description": "Exercise #3"
          },
          "5": {
            "chapter_timecode": "208",
            "chapter_description": "Exercise #4"
          }
        },
        "assignments": [
          {
            "id": 231866,
            "slug": "overview",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-08-27 12:15:55",
            "archivedOn": null,
            "createdOn": "2019-08-27 12:15:56",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "Overview",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": null,
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 231867,
            "slug": "1",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-08-27 12:16:06",
            "archivedOn": null,
            "createdOn": "2019-08-27 12:16:07",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#1",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "223430",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 231868,
            "slug": "2",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-08-27 12:16:15",
            "archivedOn": null,
            "createdOn": "2019-08-27 12:16:15",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#2",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "223429",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 231869,
            "slug": "3",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-08-27 12:16:34",
            "archivedOn": null,
            "createdOn": "2019-08-27 12:16:34",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#3",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "223428",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 231870,
            "slug": "4",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-08-27 12:16:43",
            "archivedOn": null,
            "createdOn": "2019-08-27 12:16:44",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#4",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "223432",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          }
        ],
        "url": "https://app-staging.drumeo.com/laravel/public/members/lessons/quick-tips/230232",
        "xp_bonus": 150,
        "like_count": "27",
        "is_liked_by_current_user": false
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "103748"
            },
            {
              "type": "contentData",
              "id": "103749"
            },
            {
              "type": "contentData",
              "id": "103772"
            },
            {
              "type": "contentData",
              "id": "103773"
            },
            {
              "type": "contentData",
              "id": "103774"
            },
            {
              "type": "contentData",
              "id": "103775"
            },
            {
              "type": "contentData",
              "id": "103776"
            },
            {
              "type": "contentData",
              "id": "103777"
            },
            {
              "type": "contentData",
              "id": "103778"
            },
            {
              "type": "contentData",
              "id": "103779"
            },
            {
              "type": "contentData",
              "id": "103780"
            },
            {
              "type": "contentData",
              "id": "103781"
            },
            {
              "type": "contentData",
              "id": "103782"
            },
            {
              "type": "contentData",
              "id": "103783"
            },
            {
              "type": "contentData",
              "id": "103784"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "3118"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "3519"
            },
            {
              "type": "topic",
              "id": "6435"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "32268"
            },
            {
              "type": "tag",
              "id": "32461"
            },
            {
              "type": "tag",
              "id": "32556"
            },
            {
              "type": "tag",
              "id": "48841"
            },
            {
              "type": "tag",
              "id": "53278"
            },
            {
              "type": "tag",
              "id": "53279"
            },
            {
              "type": "tag",
              "id": "72273"
            },
            {
              "type": "tag",
              "id": "73162"
            },
            {
              "type": "tag",
              "id": "73317"
            },
            {
              "type": "tag",
              "id": "76787"
            },
            {
              "type": "tag",
              "id": "77573"
            },
            {
              "type": "tag",
              "id": "79545"
            },
            {
              "type": "tag",
              "id": "79660"
            },
            {
              "type": "tag",
              "id": "79751"
            },
            {
              "type": "tag",
              "id": "82226"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "230220",
      "attributes": {
        "slug": "5-iconic-jazz-drum-licks-for-all-drummers",
        "type": "quick-tips",
        "sort": 0,
        "status": "published",
        "totalXp": "150",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2019-08-19 17:00:00",
        "archivedOn": null,
        "createdOn": "2019-07-31 10:15:02",
        "difficulty": "All Skill Levels",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "7 Iconic Jazz Drum Licks For All Drummers",
        "xp": "150",
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": null,
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": null,
        "transcriberName": null,
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": null,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null,
        "user_progress": {
          "149628": []
        },
        "progress_state": false,
        "progress_percent": 0,
        "completed": false,
        "started": false,
        "permissions": [
          {
            "id": 291,
            "contentType": "quick-tips",
            "brand": "drumeo"
          }
        ],
        "user_playlists": {
          "149628": []
        },
        "is_added_to_primary_playlist": false,
        "is_new": false,
        "resources": {
          "1": {
            "resource_name": "PDF Sheet Music",
            "resource_url": "https://d1923uyy6spedc.cloudfront.net/230220-resource-1566222693.pdf"
          }
        },
        "chapters": {
          "1": {
            "chapter_timecode": "24",
            "chapter_description": "Lick #1 - Philly Joe Jones #1"
          },
          "2": {
            "chapter_timecode": "113",
            "chapter_description": "Lick #2 - Philly Joe Jones #2"
          },
          "3": {
            "chapter_timecode": "152",
            "chapter_description": "Lick #3 - Philly Joe Jones #3"
          },
          "4": {
            "chapter_timecode": "237",
            "chapter_description": "Lick #4 - Philly Joe Jones #4"
          },
          "5": {
            "chapter_timecode": "290",
            "chapter_description": "Lick #5a - Tony Williams #1"
          },
          "6": {
            "chapter_timecode": "335",
            "chapter_description": "Lick #5b"
          },
          "7": {
            "chapter_timecode": "382",
            "chapter_description": "Lick #6 - Tony Williams #2"
          },
          "8": {
            "chapter_timecode": "449",
            "chapter_description": "Lick #7 - Roy Haynes"
          }
        },
        "assignments": [
          {
            "id": 231374,
            "slug": "1---philly-joe-jones-1",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-08-19 13:58:15",
            "archivedOn": null,
            "createdOn": "2019-08-19 13:58:17",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#1 - Philly Joe Jones #1",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "222421",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 231375,
            "slug": "2---philly-joe-jones-2",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-08-19 13:58:34",
            "archivedOn": null,
            "createdOn": "2019-08-19 13:58:36",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#2 - Philly Joe Jones #2",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "222423",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 231377,
            "slug": "3---philly-joe-jones-3",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-08-19 13:58:53",
            "archivedOn": null,
            "createdOn": "2019-08-19 13:58:55",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#3 - Philly Joe Jones #3",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "222425",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 231378,
            "slug": "4---philly-joe-jones-4",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-08-19 13:59:33",
            "archivedOn": null,
            "createdOn": "2019-08-19 13:59:35",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#4 - Philly Joe Jones #4",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "222426",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 231379,
            "slug": "5a--tony-williams-1",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-08-19 14:00:11",
            "archivedOn": null,
            "createdOn": "2019-08-19 14:00:13",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#5a -Tony Williams #1",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "222430",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 231380,
            "slug": "5b",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-08-19 14:00:41",
            "archivedOn": null,
            "createdOn": "2019-08-19 14:00:44",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#5b",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "222432",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 231381,
            "slug": "6---tony-williams-2",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-08-19 14:01:29",
            "archivedOn": null,
            "createdOn": "2019-08-19 14:01:31",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#6 - Tony Williams #2",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "222427",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 231382,
            "slug": "7---roy-haynes",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-08-19 14:01:53",
            "archivedOn": null,
            "createdOn": "2019-08-19 14:01:55",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#7 - Roy Haynes",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "222428",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          }
        ],
        "url": "https://app-staging.drumeo.com/laravel/public/members/lessons/quick-tips/230220",
        "xp_bonus": 150,
        "like_count": "52",
        "is_liked_by_current_user": false
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "103145"
            },
            {
              "type": "contentData",
              "id": "103146"
            },
            {
              "type": "contentData",
              "id": "103147"
            },
            {
              "type": "contentData",
              "id": "103148"
            },
            {
              "type": "contentData",
              "id": "103149"
            },
            {
              "type": "contentData",
              "id": "103150"
            },
            {
              "type": "contentData",
              "id": "103151"
            },
            {
              "type": "contentData",
              "id": "103152"
            },
            {
              "type": "contentData",
              "id": "103153"
            },
            {
              "type": "contentData",
              "id": "103154"
            },
            {
              "type": "contentData",
              "id": "103155"
            },
            {
              "type": "contentData",
              "id": "103156"
            },
            {
              "type": "contentData",
              "id": "103157"
            },
            {
              "type": "contentData",
              "id": "103158"
            },
            {
              "type": "contentData",
              "id": "103159"
            },
            {
              "type": "contentData",
              "id": "103160"
            },
            {
              "type": "contentData",
              "id": "103161"
            },
            {
              "type": "contentData",
              "id": "103162"
            },
            {
              "type": "contentData",
              "id": "103163"
            },
            {
              "type": "contentData",
              "id": "103164"
            },
            {
              "type": "contentData",
              "id": "103165"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "3115"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2013"
            },
            {
              "type": "topic",
              "id": "2364"
            },
            {
              "type": "topic",
              "id": "3655"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "4327"
            },
            {
              "type": "tag",
              "id": "7072"
            },
            {
              "type": "tag",
              "id": "9759"
            },
            {
              "type": "tag",
              "id": "12363"
            },
            {
              "type": "tag",
              "id": "19501"
            },
            {
              "type": "tag",
              "id": "33198"
            },
            {
              "type": "tag",
              "id": "33199"
            },
            {
              "type": "tag",
              "id": "34030"
            },
            {
              "type": "tag",
              "id": "34097"
            },
            {
              "type": "tag",
              "id": "39267"
            },
            {
              "type": "tag",
              "id": "40134"
            },
            {
              "type": "tag",
              "id": "41117"
            },
            {
              "type": "tag",
              "id": "48049"
            },
            {
              "type": "tag",
              "id": "50700"
            },
            {
              "type": "tag",
              "id": "55019"
            },
            {
              "type": "tag",
              "id": "57957"
            },
            {
              "type": "tag",
              "id": "57983"
            },
            {
              "type": "tag",
              "id": "67070"
            },
            {
              "type": "tag",
              "id": "72272"
            },
            {
              "type": "tag",
              "id": "73161"
            },
            {
              "type": "tag",
              "id": "73316"
            },
            {
              "type": "tag",
              "id": "76496"
            },
            {
              "type": "tag",
              "id": "78631"
            },
            {
              "type": "tag",
              "id": "86814"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "230212",
      "attributes": {
        "slug": "a-polyrhtyhm-for-beginners---tool's-jambi",
        "type": "quick-tips",
        "sort": 0,
        "status": "published",
        "totalXp": "150",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2019-08-14 17:00:00",
        "archivedOn": null,
        "createdOn": "2019-07-31 09:07:15",
        "difficulty": "Beginner",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "A Polyrhythm For Beginners - Tool's Jambi",
        "xp": "150",
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": null,
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": null,
        "transcriberName": null,
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": null,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null,
        "user_progress": {
          "149628": []
        },
        "progress_state": false,
        "progress_percent": 0,
        "completed": false,
        "started": false,
        "permissions": [
          {
            "id": 291,
            "contentType": "quick-tips",
            "brand": "drumeo"
          }
        ],
        "user_playlists": {
          "149628": []
        },
        "is_added_to_primary_playlist": false,
        "is_new": false,
        "resources": {
          "1": {
            "resource_name": "PDF Sheet Music",
            "resource_url": "https://d1923uyy6spedc.cloudfront.net/230212-resource-1565693707.pdf"
          },
          "2": {
            "resource_name": "MP3 Loop",
            "resource_url": "https://d1923uyy6spedc.cloudfront.net/230212-resource-1565696906.mp3"
          }
        },
        "chapters": {
          "1": {
            "chapter_timecode": "54",
            "chapter_description": "Exercise #1"
          },
          "2": {
            "chapter_timecode": "107",
            "chapter_description": "Exercises #3 & #4"
          },
          "3": {
            "chapter_timecode": "235",
            "chapter_description": "Exercise #5"
          }
        },
        "assignments": [
          {
            "id": 231043,
            "slug": "1---the-three---quarter-note-accent",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-08-13 11:25:51",
            "archivedOn": null,
            "createdOn": "2019-08-13 11:25:53",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#1 - The Three",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "221851",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 231044,
            "slug": "2---the-four",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-08-13 11:26:18",
            "archivedOn": null,
            "createdOn": "2019-08-13 11:26:20",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#2 - The Four",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "221855",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 231045,
            "slug": "3",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-08-13 11:27:05",
            "archivedOn": null,
            "createdOn": "2019-08-13 11:27:07",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#3",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "221852",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 231046,
            "slug": "4---the-bare-polyrhythm-4-over-3",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-08-13 11:27:24",
            "archivedOn": null,
            "createdOn": "2019-08-13 11:27:27",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#4 - The Bare Polyrhythm (4-over-3)",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "221853",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 231047,
            "slug": "5---tool---\"jambi\"",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-08-13 11:27:53",
            "archivedOn": null,
            "createdOn": "2019-08-13 11:27:55",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#5 - Tool - \"Jambi\"",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "221854",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          }
        ],
        "url": "https://app-staging.drumeo.com/laravel/public/members/lessons/quick-tips/230212",
        "xp_bonus": 100,
        "like_count": "44",
        "is_liked_by_current_user": false
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "102756"
            },
            {
              "type": "contentData",
              "id": "102757"
            },
            {
              "type": "contentData",
              "id": "102759"
            },
            {
              "type": "contentData",
              "id": "102760"
            },
            {
              "type": "contentData",
              "id": "102761"
            },
            {
              "type": "contentData",
              "id": "102762"
            },
            {
              "type": "contentData",
              "id": "102763"
            },
            {
              "type": "contentData",
              "id": "102764"
            },
            {
              "type": "contentData",
              "id": "102765"
            },
            {
              "type": "contentData",
              "id": "102766"
            },
            {
              "type": "contentData",
              "id": "102767"
            },
            {
              "type": "contentData",
              "id": "102781"
            },
            {
              "type": "contentData",
              "id": "102782"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6418"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2012"
            },
            {
              "type": "topic",
              "id": "5911"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "2917"
            },
            {
              "type": "tag",
              "id": "3334"
            },
            {
              "type": "tag",
              "id": "3340"
            },
            {
              "type": "tag",
              "id": "3352"
            },
            {
              "type": "tag",
              "id": "3353"
            },
            {
              "type": "tag",
              "id": "5541"
            },
            {
              "type": "tag",
              "id": "9754"
            },
            {
              "type": "tag",
              "id": "11074"
            },
            {
              "type": "tag",
              "id": "12358"
            },
            {
              "type": "tag",
              "id": "16454"
            },
            {
              "type": "tag",
              "id": "17893"
            },
            {
              "type": "tag",
              "id": "19495"
            },
            {
              "type": "tag",
              "id": "22730"
            },
            {
              "type": "tag",
              "id": "23380"
            },
            {
              "type": "tag",
              "id": "38491"
            },
            {
              "type": "tag",
              "id": "44318"
            },
            {
              "type": "tag",
              "id": "45093"
            },
            {
              "type": "tag",
              "id": "53997"
            },
            {
              "type": "tag",
              "id": "69298"
            },
            {
              "type": "tag",
              "id": "72271"
            },
            {
              "type": "tag",
              "id": "73160"
            },
            {
              "type": "tag",
              "id": "73315"
            },
            {
              "type": "tag",
              "id": "74631"
            },
            {
              "type": "tag",
              "id": "74830"
            },
            {
              "type": "tag",
              "id": "86837"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "230143",
      "attributes": {
        "slug": "tools-invincible-polyrhythm-breakdown",
        "type": "quick-tips",
        "sort": 0,
        "status": "published",
        "totalXp": "125",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2019-08-05 17:00:00",
        "archivedOn": null,
        "createdOn": "2019-07-30 17:08:08",
        "difficulty": "All Skill Levels",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Tools Invincible Polyrhythm Breakdown",
        "xp": "125",
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": null,
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": null,
        "transcriberName": null,
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": null,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null,
        "user_progress": {
          "149628": []
        },
        "progress_state": false,
        "progress_percent": 0,
        "completed": false,
        "started": false,
        "permissions": [
          {
            "id": 291,
            "contentType": "quick-tips",
            "brand": "drumeo"
          }
        ],
        "user_playlists": {
          "149628": []
        },
        "is_added_to_primary_playlist": false,
        "is_new": false,
        "resources": {
          "1": {
            "resource_name": "PDF Sheet Music",
            "resource_url": "https://d1923uyy6spedc.cloudfront.net/230143-resource-1565008759.pdf"
          },
          "2": {
            "resource_name": "MP3 Loop",
            "resource_url": "https://d1923uyy6spedc.cloudfront.net/230143-resource-1565031329.mp3"
          }
        },
        "chapters": {
          "1": {
            "chapter_timecode": "72",
            "chapter_description": "Kick & Snare Pattern"
          },
          "2": {
            "chapter_timecode": "167",
            "chapter_description": "Feeling The 7-Over-3 Polyrhythm"
          },
          "3": {
            "chapter_timecode": "239",
            "chapter_description": "Mixing Kick & Snare With The Polyrhythm"
          },
          "4": {
            "chapter_timecode": "312",
            "chapter_description": "From Floor Tom To The Rack Tom"
          },
          "5": {
            "chapter_timecode": "362",
            "chapter_description": "Tool - \"Invincible\""
          }
        },
        "assignments": [
          {
            "id": 230620,
            "slug": "kick--snare-pattern",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-08-05 12:40:29",
            "archivedOn": null,
            "createdOn": "2019-08-05 12:40:30",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "Kick & Snare Pattern",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": null,
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 230621,
            "slug": "feeling-the-7-over-3-polyrhythm",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-08-05 12:40:58",
            "archivedOn": null,
            "createdOn": "2019-08-05 12:41:00",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "Feeling The 7-Over-3 Polyrhythm",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": null,
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 230622,
            "slug": "mixing-kick--snare-with-the-polyrhythm",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-08-05 12:41:24",
            "archivedOn": null,
            "createdOn": "2019-08-05 12:41:25",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "Mixing Kick & Snare With The Polyrhythm",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": null,
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 230623,
            "slug": "from-floor-tom-to-the-rack-tom",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-08-05 12:41:49",
            "archivedOn": null,
            "createdOn": "2019-08-05 12:41:50",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "From Floor Tom To The Rack Tom",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": null,
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 230624,
            "slug": "tool---\"invincible\"",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-08-05 12:42:07",
            "archivedOn": null,
            "createdOn": "2019-08-05 12:42:08",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "Tool - \"Invincible\"",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "220750",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          }
        ],
        "url": "https://app-staging.drumeo.com/laravel/public/members/lessons/quick-tips/230143",
        "xp_bonus": 150,
        "like_count": "59",
        "is_liked_by_current_user": false
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "102385"
            },
            {
              "type": "contentData",
              "id": "102386"
            },
            {
              "type": "contentData",
              "id": "102387"
            },
            {
              "type": "contentData",
              "id": "102388"
            },
            {
              "type": "contentData",
              "id": "102389"
            },
            {
              "type": "contentData",
              "id": "102390"
            },
            {
              "type": "contentData",
              "id": "102391"
            },
            {
              "type": "contentData",
              "id": "102392"
            },
            {
              "type": "contentData",
              "id": "102393"
            },
            {
              "type": "contentData",
              "id": "102394"
            },
            {
              "type": "contentData",
              "id": "102395"
            },
            {
              "type": "contentData",
              "id": "102396"
            },
            {
              "type": "contentData",
              "id": "102397"
            },
            {
              "type": "contentData",
              "id": "102399"
            },
            {
              "type": "contentData",
              "id": "102400"
            },
            {
              "type": "contentData",
              "id": "102429"
            },
            {
              "type": "contentData",
              "id": "102430"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6417"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2011"
            },
            {
              "type": "topic",
              "id": "5910"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "4336"
            },
            {
              "type": "tag",
              "id": "4349"
            },
            {
              "type": "tag",
              "id": "4359"
            },
            {
              "type": "tag",
              "id": "4360"
            },
            {
              "type": "tag",
              "id": "4371"
            },
            {
              "type": "tag",
              "id": "5540"
            },
            {
              "type": "tag",
              "id": "7063"
            },
            {
              "type": "tag",
              "id": "9749"
            },
            {
              "type": "tag",
              "id": "11069"
            },
            {
              "type": "tag",
              "id": "12353"
            },
            {
              "type": "tag",
              "id": "16453"
            },
            {
              "type": "tag",
              "id": "17892"
            },
            {
              "type": "tag",
              "id": "19489"
            },
            {
              "type": "tag",
              "id": "21650"
            },
            {
              "type": "tag",
              "id": "22729"
            },
            {
              "type": "tag",
              "id": "23379"
            },
            {
              "type": "tag",
              "id": "38490"
            },
            {
              "type": "tag",
              "id": "44317"
            },
            {
              "type": "tag",
              "id": "45092"
            },
            {
              "type": "tag",
              "id": "50690"
            },
            {
              "type": "tag",
              "id": "53289"
            },
            {
              "type": "tag",
              "id": "59166"
            },
            {
              "type": "tag",
              "id": "69297"
            },
            {
              "type": "tag",
              "id": "72270"
            },
            {
              "type": "tag",
              "id": "73159"
            },
            {
              "type": "tag",
              "id": "73314"
            },
            {
              "type": "tag",
              "id": "74630"
            },
            {
              "type": "tag",
              "id": "74829"
            },
            {
              "type": "tag",
              "id": "86836"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "229371",
      "attributes": {
        "slug": "an-easy-but-useful-blast-beat",
        "type": "quick-tips",
        "sort": 0,
        "status": "published",
        "totalXp": "150",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2019-07-31 17:00:00",
        "archivedOn": null,
        "createdOn": "2019-07-19 16:39:08",
        "difficulty": "All Skill Levels",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "An Easy But Useful Blast Beat",
        "xp": "150",
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": null,
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": null,
        "transcriberName": null,
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": null,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null,
        "user_progress": {
          "149628": []
        },
        "progress_state": false,
        "progress_percent": 0,
        "completed": false,
        "started": false,
        "permissions": [
          {
            "id": 291,
            "contentType": "quick-tips",
            "brand": "drumeo"
          }
        ],
        "user_playlists": {
          "149628": []
        },
        "is_added_to_primary_playlist": false,
        "is_new": false,
        "resources": {
          "1": {
            "resource_name": "PDF Sheet Music",
            "resource_url": "https://d1923uyy6spedc.cloudfront.net/229371-resource-1564489202.pdf"
          }
        },
        "assignments": [
          {
            "id": 230103,
            "slug": "1",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-07-30 11:50:37",
            "archivedOn": null,
            "createdOn": "2019-07-30 11:50:40",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#1 - The Blast Beat",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "219752",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 230104,
            "slug": "2a",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-07-30 11:52:56",
            "archivedOn": null,
            "createdOn": "2019-07-30 11:52:59",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#2a - Building The Beat #1",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "219753",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 230105,
            "slug": "2b",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-07-30 11:53:09",
            "archivedOn": null,
            "createdOn": "2019-07-30 11:53:12",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#2b - Building The Beat #2",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "219754",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          }
        ],
        "url": "https://app-staging.drumeo.com/laravel/public/members/lessons/quick-tips/229371",
        "xp_bonus": 150,
        "like_count": "16",
        "is_liked_by_current_user": false
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "102008"
            },
            {
              "type": "contentData",
              "id": "102009"
            },
            {
              "type": "contentData",
              "id": "102010"
            },
            {
              "type": "contentData",
              "id": "102014"
            },
            {
              "type": "contentData",
              "id": "102015"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6882"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "4144"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "7022"
            },
            {
              "type": "tag",
              "id": "9707"
            },
            {
              "type": "tag",
              "id": "11027"
            },
            {
              "type": "tag",
              "id": "12312"
            },
            {
              "type": "tag",
              "id": "13048"
            },
            {
              "type": "tag",
              "id": "14833"
            },
            {
              "type": "tag",
              "id": "16443"
            },
            {
              "type": "tag",
              "id": "17882"
            },
            {
              "type": "tag",
              "id": "19441"
            },
            {
              "type": "tag",
              "id": "21693"
            },
            {
              "type": "tag",
              "id": "24366"
            },
            {
              "type": "tag",
              "id": "34986"
            },
            {
              "type": "tag",
              "id": "50648"
            },
            {
              "type": "tag",
              "id": "60356"
            },
            {
              "type": "tag",
              "id": "88150"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "228896",
      "attributes": {
        "slug": "how-to-hold-drumsticks",
        "type": "quick-tips",
        "sort": 0,
        "status": "published",
        "totalXp": "150",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2019-07-23 17:00:00",
        "archivedOn": null,
        "createdOn": "2019-07-12 09:41:16",
        "difficulty": "All Skill Levels",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "How To Hold Drumsticks",
        "xp": "150",
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": null,
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": null,
        "transcriberName": null,
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": null,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null,
        "user_progress": {
          "149628": []
        },
        "progress_state": false,
        "progress_percent": 0,
        "completed": false,
        "started": false,
        "permissions": [
          {
            "id": 291,
            "contentType": "quick-tips",
            "brand": "drumeo"
          }
        ],
        "user_playlists": {
          "149628": []
        },
        "is_added_to_primary_playlist": false,
        "is_new": false,
        "resources": [],
        "url": "https://app-staging.drumeo.com/laravel/public/members/lessons/quick-tips/228896",
        "xp_bonus": 150,
        "like_count": "53",
        "is_liked_by_current_user": false
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "101486"
            },
            {
              "type": "contentData",
              "id": "101487"
            },
            {
              "type": "contentData",
              "id": "101488"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "5226"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "3120"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "7010"
            },
            {
              "type": "tag",
              "id": "9694"
            },
            {
              "type": "tag",
              "id": "11015"
            },
            {
              "type": "tag",
              "id": "12300"
            },
            {
              "type": "tag",
              "id": "19420"
            },
            {
              "type": "tag",
              "id": "33386"
            },
            {
              "type": "tag",
              "id": "33404"
            },
            {
              "type": "tag",
              "id": "33661"
            },
            {
              "type": "tag",
              "id": "33670"
            },
            {
              "type": "tag",
              "id": "34344"
            },
            {
              "type": "tag",
              "id": "34374"
            },
            {
              "type": "tag",
              "id": "47508"
            },
            {
              "type": "tag",
              "id": "47661"
            },
            {
              "type": "tag",
              "id": "50636"
            },
            {
              "type": "tag",
              "id": "86495"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "228680",
      "attributes": {
        "slug": "4-beginner-drum-warm-ups",
        "type": "quick-tips",
        "sort": 0,
        "status": "published",
        "totalXp": "150",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2019-07-16 17:00:00",
        "archivedOn": null,
        "createdOn": "2019-07-08 14:19:59",
        "difficulty": "Beginner",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "4 Beginner Drum Warm-ups",
        "xp": "150",
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": null,
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": null,
        "transcriberName": null,
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": null,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null,
        "user_progress": {
          "149628": []
        },
        "progress_state": false,
        "progress_percent": 0,
        "completed": false,
        "started": false,
        "permissions": [
          {
            "id": 291,
            "contentType": "quick-tips",
            "brand": "drumeo"
          }
        ],
        "user_playlists": {
          "149628": []
        },
        "is_added_to_primary_playlist": false,
        "is_new": false,
        "resources": {
          "1": {
            "resource_name": "PDF Sheet Music",
            "resource_url": "https://d1923uyy6spedc.cloudfront.net/228680-resource-1562937509.pdf"
          }
        },
        "chapters": {
          "1": {
            "chapter_timecode": "4",
            "chapter_description": "Overview"
          },
          "2": {
            "chapter_timecode": "70",
            "chapter_description": "Exercise #1a"
          },
          "3": {
            "chapter_timecode": "115",
            "chapter_description": "Moving #1a Around The Kit"
          },
          "4": {
            "chapter_timecode": "147",
            "chapter_description": "Exercise #1b"
          },
          "5": {
            "chapter_timecode": "212",
            "chapter_description": "Exercise #2a"
          },
          "6": {
            "chapter_timecode": "258",
            "chapter_description": "Moving #2a Around The Kit"
          },
          "7": {
            "chapter_timecode": "293",
            "chapter_description": "Exercise #2b"
          },
          "8": {
            "chapter_timecode": "323",
            "chapter_description": "Exercise #3"
          },
          "9": {
            "chapter_timecode": "377",
            "chapter_description": "Exercise #4"
          }
        },
        "assignments": [
          {
            "id": 228908,
            "slug": "overview",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-07-12 13:35:17",
            "archivedOn": null,
            "createdOn": "2019-07-12 13:35:19",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "Overview",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": null,
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 228909,
            "slug": "1a",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-07-12 13:35:49",
            "archivedOn": null,
            "createdOn": "2019-07-12 13:35:51",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#1a",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "217231",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 228910,
            "slug": "moving-1a-around-the-kit",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-07-12 13:36:18",
            "archivedOn": null,
            "createdOn": "2019-07-12 13:36:21",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "Moving #1a Around The Kit",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": null,
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 228911,
            "slug": "1b",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-07-12 13:36:39",
            "archivedOn": null,
            "createdOn": "2019-07-12 13:36:42",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#1b",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "217232",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 228912,
            "slug": "2a",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-07-12 13:37:06",
            "archivedOn": null,
            "createdOn": "2019-07-12 13:37:08",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#2a",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "217233",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 228913,
            "slug": "moving-2a-around-the-kit",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-07-12 13:37:26",
            "archivedOn": null,
            "createdOn": "2019-07-12 13:37:28",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "Moving #2a Around The Kit",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": null,
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 228914,
            "slug": "2b",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-07-12 13:37:43",
            "archivedOn": null,
            "createdOn": "2019-07-12 13:37:46",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#2b",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "217234",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 228915,
            "slug": "3",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-07-12 13:38:06",
            "archivedOn": null,
            "createdOn": "2019-07-12 13:38:08",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#3a",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "217237",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 228916,
            "slug": "4",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-07-12 13:38:23",
            "archivedOn": null,
            "createdOn": "2019-07-12 13:38:25",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#4",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": null,
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 228917,
            "slug": "moving-3a-around-the-kit",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-07-12 14:01:50",
            "archivedOn": null,
            "createdOn": "2019-07-12 14:01:53",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "Moving #3a Around The Kit",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": null,
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 228918,
            "slug": "3b",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-07-12 14:02:23",
            "archivedOn": null,
            "createdOn": "2019-07-12 14:02:26",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#3b",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "217238",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          }
        ],
        "url": "https://app-staging.drumeo.com/laravel/public/members/lessons/quick-tips/228680",
        "xp_bonus": 100,
        "like_count": "55",
        "is_liked_by_current_user": false
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "101346"
            },
            {
              "type": "contentData",
              "id": "101347"
            },
            {
              "type": "contentData",
              "id": "101348"
            },
            {
              "type": "contentData",
              "id": "101349"
            },
            {
              "type": "contentData",
              "id": "101350"
            },
            {
              "type": "contentData",
              "id": "101351"
            },
            {
              "type": "contentData",
              "id": "101352"
            },
            {
              "type": "contentData",
              "id": "101353"
            },
            {
              "type": "contentData",
              "id": "101354"
            },
            {
              "type": "contentData",
              "id": "101355"
            },
            {
              "type": "contentData",
              "id": "101356"
            },
            {
              "type": "contentData",
              "id": "101357"
            },
            {
              "type": "contentData",
              "id": "101358"
            },
            {
              "type": "contentData",
              "id": "101359"
            },
            {
              "type": "contentData",
              "id": "101360"
            },
            {
              "type": "contentData",
              "id": "101361"
            },
            {
              "type": "contentData",
              "id": "101362"
            },
            {
              "type": "contentData",
              "id": "101363"
            },
            {
              "type": "contentData",
              "id": "101364"
            },
            {
              "type": "contentData",
              "id": "101365"
            },
            {
              "type": "contentData",
              "id": "101366"
            },
            {
              "type": "contentData",
              "id": "101484"
            },
            {
              "type": "contentData",
              "id": "101485"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "5225"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "7373"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "3268"
            },
            {
              "type": "tag",
              "id": "19397"
            },
            {
              "type": "tag",
              "id": "33478"
            },
            {
              "type": "tag",
              "id": "33479"
            },
            {
              "type": "tag",
              "id": "33480"
            },
            {
              "type": "tag",
              "id": "33481"
            },
            {
              "type": "tag",
              "id": "33482"
            },
            {
              "type": "tag",
              "id": "33483"
            },
            {
              "type": "tag",
              "id": "41224"
            },
            {
              "type": "tag",
              "id": "54593"
            },
            {
              "type": "tag",
              "id": "90144"
            },
            {
              "type": "tag",
              "id": "90197"
            },
            {
              "type": "tag",
              "id": "90218"
            },
            {
              "type": "tag",
              "id": "90328"
            },
            {
              "type": "tag",
              "id": "90377"
            },
            {
              "type": "tag",
              "id": "90378"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "227067",
      "attributes": {
        "slug": "how-to-play-single-pedal-triples",
        "type": "quick-tips",
        "sort": 0,
        "status": "published",
        "totalXp": "150",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2019-07-10 19:00:00",
        "archivedOn": null,
        "createdOn": "2019-06-23 15:13:41",
        "difficulty": "All Skill Levels",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "How To Play Single Pedal Triples",
        "xp": "150",
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": null,
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": null,
        "transcriberName": null,
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": null,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null,
        "user_progress": {
          "149628": []
        },
        "progress_state": false,
        "progress_percent": 0,
        "completed": false,
        "started": false,
        "permissions": [
          {
            "id": 291,
            "contentType": "quick-tips",
            "brand": "drumeo"
          }
        ],
        "user_playlists": {
          "149628": []
        },
        "is_added_to_primary_playlist": false,
        "is_new": false,
        "resources": [],
        "url": "https://app-staging.drumeo.com/laravel/public/members/lessons/quick-tips/227067",
        "xp_bonus": 150,
        "like_count": "47",
        "is_liked_by_current_user": false
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "101056"
            },
            {
              "type": "contentData",
              "id": "101057"
            },
            {
              "type": "contentData",
              "id": "101058"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "3339"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "172"
            },
            {
              "type": "topic",
              "id": "2518"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "6919"
            },
            {
              "type": "tag",
              "id": "9604"
            },
            {
              "type": "tag",
              "id": "10925"
            },
            {
              "type": "tag",
              "id": "12210"
            },
            {
              "type": "tag",
              "id": "19305"
            },
            {
              "type": "tag",
              "id": "41075"
            },
            {
              "type": "tag",
              "id": "47658"
            },
            {
              "type": "tag",
              "id": "50539"
            },
            {
              "type": "tag",
              "id": "66314"
            },
            {
              "type": "tag",
              "id": "68191"
            },
            {
              "type": "tag",
              "id": "72268"
            },
            {
              "type": "tag",
              "id": "73157"
            },
            {
              "type": "tag",
              "id": "73312"
            },
            {
              "type": "tag",
              "id": "79471"
            },
            {
              "type": "tag",
              "id": "86490"
            },
            {
              "type": "tag",
              "id": "87240"
            },
            {
              "type": "tag",
              "id": "87275"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "228672",
      "attributes": {
        "slug": "how-to-tune-your-drums",
        "type": "quick-tips",
        "sort": 0,
        "status": "published",
        "totalXp": "150",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2019-07-09 17:00:00",
        "archivedOn": null,
        "createdOn": "2019-07-08 09:23:09",
        "difficulty": "All Skill Levels",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "How To Tune Your Drums",
        "xp": "150",
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": null,
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": null,
        "transcriberName": null,
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": null,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null,
        "user_progress": {
          "149628": []
        },
        "progress_state": false,
        "progress_percent": 0,
        "completed": false,
        "started": false,
        "permissions": [
          {
            "id": 291,
            "contentType": "quick-tips",
            "brand": "drumeo"
          }
        ],
        "user_playlists": {
          "149628": []
        },
        "is_added_to_primary_playlist": false,
        "is_new": false,
        "resources": [],
        "url": "https://app-staging.drumeo.com/laravel/public/members/lessons/quick-tips/228672",
        "xp_bonus": 150,
        "like_count": "52",
        "is_liked_by_current_user": false
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "101050"
            },
            {
              "type": "contentData",
              "id": "101051"
            },
            {
              "type": "contentData",
              "id": "101052"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "5224"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "7180"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "6988"
            },
            {
              "type": "tag",
              "id": "9672"
            },
            {
              "type": "tag",
              "id": "10993"
            },
            {
              "type": "tag",
              "id": "12278"
            },
            {
              "type": "tag",
              "id": "19393"
            },
            {
              "type": "tag",
              "id": "34252"
            },
            {
              "type": "tag",
              "id": "47659"
            },
            {
              "type": "tag",
              "id": "50613"
            },
            {
              "type": "tag",
              "id": "54592"
            },
            {
              "type": "tag",
              "id": "72269"
            },
            {
              "type": "tag",
              "id": "73158"
            },
            {
              "type": "tag",
              "id": "73313"
            },
            {
              "type": "tag",
              "id": "86493"
            },
            {
              "type": "tag",
              "id": "87545"
            },
            {
              "type": "tag",
              "id": "87618"
            },
            {
              "type": "tag",
              "id": "91075"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "227058",
      "attributes": {
        "slug": "clockwisecounter-clockwise",
        "type": "quick-tips",
        "sort": 0,
        "status": "published",
        "totalXp": "150",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2019-07-03 19:00:00",
        "archivedOn": null,
        "createdOn": "2019-06-23 14:29:31",
        "difficulty": "All Skill Levels",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Clockwise/Counter-Clockwise",
        "xp": "150",
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": null,
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": null,
        "transcriberName": null,
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": null,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null,
        "user_progress": {
          "149628": []
        },
        "progress_state": false,
        "progress_percent": 0,
        "completed": false,
        "started": false,
        "permissions": [
          {
            "id": 291,
            "contentType": "quick-tips",
            "brand": "drumeo"
          }
        ],
        "user_playlists": {
          "149628": []
        },
        "is_added_to_primary_playlist": false,
        "is_new": false,
        "resources": [],
        "url": "https://app-staging.drumeo.com/laravel/public/members/lessons/quick-tips/227058",
        "xp_bonus": 150,
        "like_count": "38",
        "is_liked_by_current_user": false
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "97944"
            },
            {
              "type": "contentData",
              "id": "97945"
            },
            {
              "type": "contentData",
              "id": "100786"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7087"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "3517"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "6912"
            },
            {
              "type": "tag",
              "id": "9597"
            },
            {
              "type": "tag",
              "id": "10918"
            },
            {
              "type": "tag",
              "id": "12203"
            },
            {
              "type": "tag",
              "id": "19297"
            },
            {
              "type": "tag",
              "id": "26066"
            },
            {
              "type": "tag",
              "id": "26067"
            },
            {
              "type": "tag",
              "id": "26069"
            },
            {
              "type": "tag",
              "id": "27819"
            },
            {
              "type": "tag",
              "id": "48837"
            },
            {
              "type": "tag",
              "id": "50532"
            },
            {
              "type": "tag",
              "id": "78054"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "226527",
      "attributes": {
        "slug": "keiths-trick-to-silky-smooth-doubles",
        "type": "quick-tips",
        "sort": 0,
        "status": "published",
        "totalXp": "150",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2019-06-26 17:00:00",
        "archivedOn": null,
        "createdOn": "2019-06-11 10:37:50",
        "difficulty": "All Skill Levels",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Keiths Trick To Silky Smooth Doubles",
        "xp": "150",
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": null,
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": "2019-06-26 17:00:00",
        "liveEventEndTime": "2019-06-26 17:00:00",
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": null,
        "transcriberName": null,
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": null,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null,
        "user_progress": {
          "149628": []
        },
        "progress_state": false,
        "progress_percent": 0,
        "completed": false,
        "started": false,
        "permissions": [
          {
            "id": 291,
            "contentType": "quick-tips",
            "brand": "drumeo"
          }
        ],
        "user_playlists": {
          "149628": []
        },
        "is_added_to_primary_playlist": false,
        "live_event_start_time_in_timezone": {
          "date": "2019-06-26 10:00:00.000000",
          "timezone_type": 3,
          "timezone": "America/Los_Angeles"
        },
        "live_event_end_time_in_timezone": {
          "date": "2019-06-26 10:00:00.000000",
          "timezone_type": 3,
          "timezone": "America/Los_Angeles"
        },
        "published_on_in_timezone": {
          "date": "2019-06-26 10:00:00.000000",
          "timezone_type": 3,
          "timezone": "America/Los_Angeles"
        },
        "is_new": false,
        "resources": {
          "1": {
            "resource_name": "PDF Sheet Music",
            "resource_url": "https://d1923uyy6spedc.cloudfront.net/226527-resource-1561460000.pdf"
          }
        },
        "chapters": {
          "1": {
            "chapter_timecode": "70",
            "chapter_description": "Exercise #1"
          },
          "2": {
            "chapter_timecode": "254",
            "chapter_description": "Exercise #2"
          }
        },
        "assignments": [
          {
            "id": 227138,
            "slug": "1",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-06-25 10:56:44",
            "archivedOn": null,
            "createdOn": "2019-06-25 10:56:47",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#1",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "213434",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 227139,
            "slug": "2",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-06-25 10:56:59",
            "archivedOn": null,
            "createdOn": "2019-06-25 10:57:01",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "#2",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": "213435",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          }
        ],
        "url": "https://app-staging.drumeo.com/laravel/public/members/lessons/quick-tips/226527",
        "xp_bonus": 150,
        "like_count": "65",
        "is_liked_by_current_user": false
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "97555"
            },
            {
              "type": "contentData",
              "id": "97556"
            },
            {
              "type": "contentData",
              "id": "97610"
            },
            {
              "type": "contentData",
              "id": "97611"
            },
            {
              "type": "contentData",
              "id": "97616"
            },
            {
              "type": "contentData",
              "id": "97617"
            },
            {
              "type": "contentData",
              "id": "97618"
            },
            {
              "type": "contentData",
              "id": "97619"
            },
            {
              "type": "contentData",
              "id": "97620"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "3170"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "1651"
            },
            {
              "type": "topic",
              "id": "6424"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "6902"
            },
            {
              "type": "tag",
              "id": "9587"
            },
            {
              "type": "tag",
              "id": "10908"
            },
            {
              "type": "tag",
              "id": "12193"
            },
            {
              "type": "tag",
              "id": "19281"
            },
            {
              "type": "tag",
              "id": "32264"
            },
            {
              "type": "tag",
              "id": "32288"
            },
            {
              "type": "tag",
              "id": "32308"
            },
            {
              "type": "tag",
              "id": "32455"
            },
            {
              "type": "tag",
              "id": "32552"
            },
            {
              "type": "tag",
              "id": "50515"
            },
            {
              "type": "tag",
              "id": "55885"
            },
            {
              "type": "tag",
              "id": "72266"
            },
            {
              "type": "tag",
              "id": "73155"
            },
            {
              "type": "tag",
              "id": "73310"
            },
            {
              "type": "tag",
              "id": "76778"
            },
            {
              "type": "tag",
              "id": "77563"
            },
            {
              "type": "tag",
              "id": "79337"
            },
            {
              "type": "tag",
              "id": "80045"
            },
            {
              "type": "tag",
              "id": "86483"
            },
            {
              "type": "tag",
              "id": "87159"
            },
            {
              "type": "tag",
              "id": "87196"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "226653",
      "attributes": {
        "slug": "rashid-learns-a-song-by-ear",
        "type": "quick-tips",
        "sort": 0,
        "status": "published",
        "totalXp": "150",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2019-06-19 17:00:00",
        "archivedOn": null,
        "createdOn": "2019-06-14 09:48:17",
        "difficulty": "All Skill Levels",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Rashid Learns A Song By Ear",
        "xp": "150",
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": null,
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": null,
        "transcriberName": null,
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": null,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null,
        "user_progress": {
          "149628": []
        },
        "progress_state": false,
        "progress_percent": 0,
        "completed": false,
        "started": false,
        "permissions": [
          {
            "id": 291,
            "contentType": "quick-tips",
            "brand": "drumeo"
          }
        ],
        "user_playlists": {
          "149628": []
        },
        "is_added_to_primary_playlist": false,
        "is_new": false,
        "resources": [],
        "url": "https://app-staging.drumeo.com/laravel/public/members/lessons/quick-tips/226653",
        "xp_bonus": 150,
        "like_count": "84",
        "is_liked_by_current_user": false
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "96969"
            },
            {
              "type": "contentData",
              "id": "96970"
            },
            {
              "type": "contentData",
              "id": "96971"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "3338"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "3949"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "4994"
            },
            {
              "type": "tag",
              "id": "6909"
            },
            {
              "type": "tag",
              "id": "9594"
            },
            {
              "type": "tag",
              "id": "10915"
            },
            {
              "type": "tag",
              "id": "12200"
            },
            {
              "type": "tag",
              "id": "19289"
            },
            {
              "type": "tag",
              "id": "24402"
            },
            {
              "type": "tag",
              "id": "34865"
            },
            {
              "type": "tag",
              "id": "50523"
            },
            {
              "type": "tag",
              "id": "57095"
            },
            {
              "type": "tag",
              "id": "57613"
            },
            {
              "type": "tag",
              "id": "72267"
            },
            {
              "type": "tag",
              "id": "73156"
            },
            {
              "type": "tag",
              "id": "73311"
            },
            {
              "type": "tag",
              "id": "73578"
            },
            {
              "type": "tag",
              "id": "73586"
            },
            {
              "type": "tag",
              "id": "80898"
            },
            {
              "type": "tag",
              "id": "81220"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "226451",
      "attributes": {
        "slug": "keiths-signature-drum-lick-",
        "type": "quick-tips",
        "sort": 0,
        "status": "published",
        "totalXp": "150",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2019-06-12 21:00:00",
        "archivedOn": null,
        "createdOn": "2019-06-08 15:01:27",
        "difficulty": "All Skill Levels",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Keiths Signature Drum Lick",
        "xp": "150",
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": null,
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": null,
        "transcriberName": null,
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": null,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null,
        "user_progress": {
          "149628": []
        },
        "progress_state": false,
        "progress_percent": 0,
        "completed": false,
        "started": false,
        "permissions": [
          {
            "id": 291,
            "contentType": "quick-tips",
            "brand": "drumeo"
          }
        ],
        "user_playlists": {
          "149628": []
        },
        "is_added_to_primary_playlist": false,
        "is_new": false,
        "resources": [],
        "url": "https://app-staging.drumeo.com/laravel/public/members/lessons/quick-tips/226451",
        "xp_bonus": 150,
        "like_count": "59",
        "is_liked_by_current_user": false
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "96681"
            },
            {
              "type": "contentData",
              "id": "96682"
            },
            {
              "type": "contentData",
              "id": "96683"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "3169"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "6900"
            },
            {
              "type": "tag",
              "id": "9585"
            },
            {
              "type": "tag",
              "id": "10906"
            },
            {
              "type": "tag",
              "id": "12191"
            },
            {
              "type": "tag",
              "id": "19279"
            },
            {
              "type": "tag",
              "id": "33197"
            },
            {
              "type": "tag",
              "id": "50513"
            },
            {
              "type": "tag",
              "id": "55884"
            },
            {
              "type": "tag",
              "id": "57954"
            },
            {
              "type": "tag",
              "id": "79262"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "226218",
      "attributes": {
        "slug": "how-to-make-a-killer-instagram-video",
        "type": "quick-tips",
        "sort": 0,
        "status": "published",
        "totalXp": "150",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2019-06-10 17:00:00",
        "archivedOn": null,
        "createdOn": "2019-06-03 14:59:18",
        "difficulty": "Intermediate",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "How To Make A Killer Instagram Video",
        "xp": "150",
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": null,
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": null,
        "transcriberName": null,
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": null,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null,
        "user_progress": {
          "149628": []
        },
        "progress_state": false,
        "progress_percent": 0,
        "completed": false,
        "started": false,
        "permissions": [
          {
            "id": 291,
            "contentType": "quick-tips",
            "brand": "drumeo"
          }
        ],
        "user_playlists": {
          "149628": [
            {}
          ]
        },
        "is_added_to_primary_playlist": true,
        "is_new": false,
        "resources": [],
        "url": "https://app-staging.drumeo.com/laravel/public/members/lessons/quick-tips/226218",
        "xp_bonus": 150,
        "like_count": "45",
        "is_liked_by_current_user": false
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "96672"
            },
            {
              "type": "contentData",
              "id": "96673"
            },
            {
              "type": "contentData",
              "id": "96674"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7751"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5687"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "4993"
            },
            {
              "type": "tag",
              "id": "6880"
            },
            {
              "type": "tag",
              "id": "19245"
            },
            {
              "type": "tag",
              "id": "31856"
            },
            {
              "type": "tag",
              "id": "47657"
            },
            {
              "type": "tag",
              "id": "48945"
            },
            {
              "type": "tag",
              "id": "50490"
            },
            {
              "type": "tag",
              "id": "50491"
            },
            {
              "type": "tag",
              "id": "56158"
            },
            {
              "type": "tag",
              "id": "59513"
            },
            {
              "type": "tag",
              "id": "72265"
            },
            {
              "type": "tag",
              "id": "73154"
            },
            {
              "type": "tag",
              "id": "73309"
            },
            {
              "type": "tag",
              "id": "86481"
            },
            {
              "type": "tag",
              "id": "88572"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "225970",
      "attributes": {
        "slug": "drum-teacher-lineage",
        "type": "quick-tips",
        "sort": 0,
        "status": "published",
        "totalXp": "150",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2019-06-05 17:00:00",
        "archivedOn": null,
        "createdOn": "2019-05-29 11:36:58",
        "difficulty": "All Skill Levels",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "The Importance Of Drum Teacher Lineage",
        "xp": "150",
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": null,
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": null,
        "transcriberName": null,
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": null,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null,
        "user_progress": {
          "149628": []
        },
        "progress_state": false,
        "progress_percent": 0,
        "completed": false,
        "started": false,
        "permissions": [
          {
            "id": 291,
            "contentType": "quick-tips",
            "brand": "drumeo"
          }
        ],
        "user_playlists": {
          "149628": [
            {}
          ]
        },
        "is_added_to_primary_playlist": true,
        "is_new": false,
        "resources": {
          "1": {
            "resource_name": "Lineage PDF",
            "resource_url": "https://d1923uyy6spedc.cloudfront.net/225970-resource-1559640533.pdf"
          }
        },
        "assignments": [
          {
            "id": 226275,
            "slug": "drum-teacher-lineage",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "0",
            "brand": "drumeo",
            "language": "en-US",
            "showInNewFeed": null,
            "user": "",
            "publishedOn": "2019-06-04 09:31:01",
            "archivedOn": null,
            "createdOn": "2019-06-04 09:31:02",
            "difficulty": "all",
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "Drum Teacher Lineage",
            "xp": "0",
            "album": null,
            "artist": null,
            "bpm": null,
            "cdTracks": null,
            "chordOrScale": null,
            "difficultyRange": null,
            "episodeNumber": null,
            "exerciseBookPages": null,
            "fastBpm": null,
            "includesSong": null,
            "instructors": null,
            "liveEventStartTime": null,
            "liveEventEndTime": null,
            "liveEventYoutubeId": null,
            "liveStreamFeedType": null,
            "name": null,
            "released": null,
            "slowBpm": null,
            "transcriberName": null,
            "week": null,
            "avatarUrl": null,
            "lengthInSeconds": null,
            "soundsliceSlug": null,
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          }
        ],
        "url": "https://app-staging.drumeo.com/laravel/public/members/lessons/quick-tips/225970",
        "xp_bonus": 150,
        "like_count": "29",
        "is_liked_by_current_user": false
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "96215"
            },
            {
              "type": "contentData",
              "id": "96216"
            },
            {
              "type": "contentData",
              "id": "96217"
            },
            {
              "type": "contentData",
              "id": "96282"
            },
            {
              "type": "contentData",
              "id": "96283"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "2919"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2851"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "6864"
            },
            {
              "type": "tag",
              "id": "19224"
            },
            {
              "type": "tag",
              "id": "31852"
            },
            {
              "type": "tag",
              "id": "33411"
            },
            {
              "type": "tag",
              "id": "48199"
            },
            {
              "type": "tag",
              "id": "50466"
            },
            {
              "type": "tag",
              "id": "58064"
            },
            {
              "type": "tag",
              "id": "64550"
            },
            {
              "type": "tag",
              "id": "72264"
            },
            {
              "type": "tag",
              "id": "73153"
            },
            {
              "type": "tag",
              "id": "73308"
            },
            {
              "type": "tag",
              "id": "84646"
            },
            {
              "type": "tag",
              "id": "85322"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "225968",
      "attributes": {
        "slug": "david-frank's-secret-sauce",
        "type": "quick-tips",
        "sort": 0,
        "status": "published",
        "totalXp": "150",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2019-06-04 17:00:00",
        "archivedOn": null,
        "createdOn": "2019-05-29 11:32:38",
        "difficulty": "Intermediate",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "David Frank's Secret Sauce",
        "xp": "150",
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": null,
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": null,
        "transcriberName": null,
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": null,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null,
        "user_progress": {
          "149628": []
        },
        "progress_state": false,
        "progress_percent": 0,
        "completed": false,
        "started": false,
        "permissions": [
          {
            "id": 291,
            "contentType": "quick-tips",
            "brand": "drumeo"
          }
        ],
        "user_playlists": {
          "149628": []
        },
        "is_added_to_primary_playlist": false,
        "is_new": false,
        "resources": [],
        "url": "https://app-staging.drumeo.com/laravel/public/members/lessons/quick-tips/225968",
        "xp_bonus": 150,
        "like_count": "23",
        "is_liked_by_current_user": false
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "96212"
            },
            {
              "type": "contentData",
              "id": "96213"
            },
            {
              "type": "contentData",
              "id": "96214"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "3107"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2352"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "30696"
            },
            {
              "type": "tag",
              "id": "30699"
            },
            {
              "type": "tag",
              "id": "39258"
            },
            {
              "type": "tag",
              "id": "40117"
            },
            {
              "type": "tag",
              "id": "50464"
            },
            {
              "type": "tag",
              "id": "72263"
            },
            {
              "type": "tag",
              "id": "73152"
            },
            {
              "type": "tag",
              "id": "73307"
            },
            {
              "type": "tag",
              "id": "77921"
            },
            {
              "type": "tag",
              "id": "78343"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "225189",
      "attributes": {
        "slug": "how-to-be-an-amazing-teacher",
        "type": "quick-tips",
        "sort": 0,
        "status": "published",
        "totalXp": "150",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2019-05-28 17:00:00",
        "archivedOn": null,
        "createdOn": "2019-05-17 19:50:59",
        "difficulty": "All Skill Levels",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "How To Be An Amazing Teacher",
        "xp": "150",
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": null,
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": null,
        "transcriberName": null,
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": null,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null,
        "user_progress": {
          "149628": []
        },
        "progress_state": false,
        "progress_percent": 0,
        "completed": false,
        "started": false,
        "permissions": [
          {
            "id": 291,
            "contentType": "quick-tips",
            "brand": "drumeo"
          }
        ],
        "user_playlists": {
          "149628": []
        },
        "is_added_to_primary_playlist": false,
        "is_new": false,
        "resources": [],
        "url": "https://app-staging.drumeo.com/laravel/public/members/lessons/quick-tips/225189",
        "xp_bonus": 150,
        "like_count": "35",
        "is_liked_by_current_user": false
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "95917"
            },
            {
              "type": "contentData",
              "id": "95918"
            },
            {
              "type": "contentData",
              "id": "95919"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "2918"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2850"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "6824"
            },
            {
              "type": "tag",
              "id": "9511"
            },
            {
              "type": "tag",
              "id": "10832"
            },
            {
              "type": "tag",
              "id": "12119"
            },
            {
              "type": "tag",
              "id": "13001"
            },
            {
              "type": "tag",
              "id": "13046"
            },
            {
              "type": "tag",
              "id": "15740"
            },
            {
              "type": "tag",
              "id": "19184"
            },
            {
              "type": "tag",
              "id": "42458"
            },
            {
              "type": "tag",
              "id": "47656"
            },
            {
              "type": "tag",
              "id": "50424"
            },
            {
              "type": "tag",
              "id": "72262"
            },
            {
              "type": "tag",
              "id": "73151"
            },
            {
              "type": "tag",
              "id": "73306"
            },
            {
              "type": "tag",
              "id": "84645"
            },
            {
              "type": "tag",
              "id": "86480"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "224698",
      "attributes": {
        "slug": "what-i-learned-playing-with-bb-king",
        "type": "quick-tips",
        "sort": 0,
        "status": "published",
        "totalXp": "150",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2019-05-20 17:00:00",
        "archivedOn": null,
        "createdOn": "2019-05-06 11:49:38",
        "difficulty": "All Skill Levels",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "What I Learned Playing With B.B. King",
        "xp": "150",
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": null,
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": null,
        "transcriberName": null,
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": null,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null,
        "user_progress": {
          "149628": []
        },
        "progress_state": false,
        "progress_percent": 0,
        "completed": false,
        "started": false,
        "permissions": [
          {
            "id": 291,
            "contentType": "quick-tips",
            "brand": "drumeo"
          }
        ],
        "user_playlists": {
          "149628": []
        },
        "is_added_to_primary_playlist": false,
        "is_new": false,
        "resources": [],
        "url": "https://app-staging.drumeo.com/laravel/public/members/lessons/quick-tips/224698",
        "xp_bonus": 150,
        "like_count": "0",
        "is_liked_by_current_user": false
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "94474"
            },
            {
              "type": "contentData",
              "id": "94475"
            },
            {
              "type": "contentData",
              "id": "94476"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "3091"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2959"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "6814"
            },
            {
              "type": "tag",
              "id": "9501"
            },
            {
              "type": "tag",
              "id": "10822"
            },
            {
              "type": "tag",
              "id": "12109"
            },
            {
              "type": "tag",
              "id": "15000"
            },
            {
              "type": "tag",
              "id": "15723"
            },
            {
              "type": "tag",
              "id": "15727"
            },
            {
              "type": "tag",
              "id": "19162"
            },
            {
              "type": "tag",
              "id": "47974"
            },
            {
              "type": "tag",
              "id": "50414"
            },
            {
              "type": "tag",
              "id": "57093"
            },
            {
              "type": "tag",
              "id": "57198"
            },
            {
              "type": "tag",
              "id": "68190"
            },
            {
              "type": "tag",
              "id": "68920"
            },
            {
              "type": "tag",
              "id": "72260"
            },
            {
              "type": "tag",
              "id": "73149"
            },
            {
              "type": "tag",
              "id": "73304"
            },
            {
              "type": "tag",
              "id": "86774"
            },
            {
              "type": "tag",
              "id": "89648"
            },
            {
              "type": "tag",
              "id": "89947"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "224712",
      "attributes": {
        "slug": "5-songs-that-changed-my-drumming",
        "type": "quick-tips",
        "sort": 0,
        "status": "published",
        "totalXp": "150",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2019-05-14 19:00:00",
        "archivedOn": null,
        "createdOn": "2019-05-06 15:48:49",
        "difficulty": "All Skill Levels",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "5 Songs That Changed My Drumming",
        "xp": "150",
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": null,
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": null,
        "transcriberName": null,
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": null,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null,
        "user_progress": {
          "149628": []
        },
        "progress_state": false,
        "progress_percent": 0,
        "completed": false,
        "started": false,
        "permissions": [
          {
            "id": 291,
            "contentType": "quick-tips",
            "brand": "drumeo"
          }
        ],
        "user_playlists": {
          "149628": []
        },
        "is_added_to_primary_playlist": false,
        "is_new": false,
        "resources": [],
        "url": "https://app-staging.drumeo.com/laravel/public/members/lessons/quick-tips/224712",
        "xp_bonus": 150,
        "like_count": "44",
        "is_liked_by_current_user": false
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "94456"
            },
            {
              "type": "contentData",
              "id": "94457"
            },
            {
              "type": "contentData",
              "id": "94458"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "3063"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2849"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "3698"
            },
            {
              "type": "tag",
              "id": "6819"
            },
            {
              "type": "tag",
              "id": "9506"
            },
            {
              "type": "tag",
              "id": "10827"
            },
            {
              "type": "tag",
              "id": "12114"
            },
            {
              "type": "tag",
              "id": "19167"
            },
            {
              "type": "tag",
              "id": "25115"
            },
            {
              "type": "tag",
              "id": "25122"
            },
            {
              "type": "tag",
              "id": "34177"
            },
            {
              "type": "tag",
              "id": "40392"
            },
            {
              "type": "tag",
              "id": "42457"
            },
            {
              "type": "tag",
              "id": "42461"
            },
            {
              "type": "tag",
              "id": "42510"
            },
            {
              "type": "tag",
              "id": "50419"
            },
            {
              "type": "tag",
              "id": "62832"
            },
            {
              "type": "tag",
              "id": "72261"
            },
            {
              "type": "tag",
              "id": "73150"
            },
            {
              "type": "tag",
              "id": "73305"
            },
            {
              "type": "tag",
              "id": "80872"
            },
            {
              "type": "tag",
              "id": "81218"
            },
            {
              "type": "tag",
              "id": "84580"
            },
            {
              "type": "tag",
              "id": "85087"
            }
          ]
        }
      }
    }
  ],
  "included": [
    {
      "type": "instructor",
      "id": "220809",
      "attributes": {
        "slug": "steve-lyman",
        "type": "instructor",
        "sort": 0,
        "status": "published",
        "total_xp": null,
        "brand": "drumeo",
        "language": "en-US",
        "show_in_new_feed": null,
        "user": "",
        "published_on": "2019-02-26 16:02:50",
        "archived_on": null,
        "created_on": "2019-02-22 09:32:06",
        "difficulty": null,
        "home_staff_pick_rating": null,
        "legacy_id": null,
        "legacy_wordpress_post_id": null,
        "qna_video": null,
        "style": null,
        "title": "Steve Lyman",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cd_tracks": null,
        "chord_or_scale": null,
        "difficulty_range": null,
        "episode_number": null,
        "exercise_book_pages": null,
        "fast_bpm": null,
        "includes_song": null,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": "Steve Lyman",
        "released": null,
        "slow_bpm": null,
        "transcriber_name": null,
        "week": null,
        "avatar_url": null,
        "length_in_seconds": null,
        "soundslice_slug": null,
        "staff_pick_rating": null,
        "student_id": null,
        "vimeo_video_id": null,
        "youtube_video_id": null
      }
    },
    {
      "type": "instructor",
      "id": "31888",
      "attributes": {
        "slug": "aaron-edgar",
        "type": "instructor",
        "sort": 0,
        "status": "published",
        "total_xp": null,
        "brand": "drumeo",
        "language": "en-US",
        "show_in_new_feed": null,
        "user": "",
        "published_on": "2017-12-13 17:23:21",
        "archived_on": null,
        "created_on": "2017-12-13 17:23:21",
        "difficulty": null,
        "home_staff_pick_rating": null,
        "legacy_id": null,
        "legacy_wordpress_post_id": null,
        "qna_video": null,
        "style": null,
        "title": null,
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cd_tracks": null,
        "chord_or_scale": null,
        "difficulty_range": null,
        "episode_number": null,
        "exercise_book_pages": null,
        "fast_bpm": null,
        "includes_song": null,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": "Aaron Edgar",
        "released": null,
        "slow_bpm": null,
        "transcriber_name": null,
        "week": null,
        "avatar_url": null,
        "length_in_seconds": null,
        "soundslice_slug": null,
        "staff_pick_rating": null,
        "student_id": null,
        "vimeo_video_id": null,
        "youtube_video_id": null
      }
    },
    {
      "type": "instructor",
      "id": "31896",
      "attributes": {
        "slug": "ash-pearson",
        "type": "instructor",
        "sort": 0,
        "status": "published",
        "total_xp": null,
        "brand": "drumeo",
        "language": "en-US",
        "show_in_new_feed": null,
        "user": "",
        "published_on": "2017-12-13 17:23:21",
        "archived_on": null,
        "created_on": "2017-12-13 17:23:21",
        "difficulty": null,
        "home_staff_pick_rating": null,
        "legacy_id": null,
        "legacy_wordpress_post_id": null,
        "qna_video": null,
        "style": null,
        "title": null,
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cd_tracks": null,
        "chord_or_scale": null,
        "difficulty_range": null,
        "episode_number": null,
        "exercise_book_pages": null,
        "fast_bpm": null,
        "includes_song": null,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": "Ash Pearson",
        "released": null,
        "slow_bpm": null,
        "transcriber_name": null,
        "week": null,
        "avatar_url": null,
        "length_in_seconds": null,
        "soundslice_slug": null,
        "staff_pick_rating": null,
        "student_id": null,
        "vimeo_video_id": null,
        "youtube_video_id": null
      }
    },
    {
      "type": "instructor",
      "id": "31880",
      "attributes": {
        "slug": "jared-falk",
        "type": "instructor",
        "sort": 0,
        "status": "published",
        "total_xp": null,
        "brand": "drumeo",
        "language": "en-US",
        "show_in_new_feed": null,
        "user": "",
        "published_on": "2017-12-13 17:23:20",
        "archived_on": null,
        "created_on": "2017-12-13 17:23:20",
        "difficulty": null,
        "home_staff_pick_rating": null,
        "legacy_id": null,
        "legacy_wordpress_post_id": null,
        "qna_video": null,
        "style": null,
        "title": null,
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cd_tracks": null,
        "chord_or_scale": null,
        "difficulty_range": null,
        "episode_number": null,
        "exercise_book_pages": null,
        "fast_bpm": null,
        "includes_song": null,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": "Jared Falk",
        "released": null,
        "slow_bpm": null,
        "transcriber_name": null,
        "week": null,
        "avatar_url": null,
        "length_in_seconds": null,
        "soundslice_slug": null,
        "staff_pick_rating": null,
        "student_id": null,
        "vimeo_video_id": null,
        "youtube_video_id": null
      }
    },
    {
      "type": "instructor",
      "id": "225962",
      "attributes": {
        "slug": "rashid-williams",
        "type": "instructor",
        "sort": 0,
        "status": "published",
        "total_xp": null,
        "brand": "drumeo",
        "language": "en-US",
        "show_in_new_feed": null,
        "user": "",
        "published_on": "2019-05-29 10:46:11",
        "archived_on": null,
        "created_on": "2019-05-29 10:46:13",
        "difficulty": null,
        "home_staff_pick_rating": null,
        "legacy_id": null,
        "legacy_wordpress_post_id": null,
        "qna_video": null,
        "style": null,
        "title": null,
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cd_tracks": null,
        "chord_or_scale": null,
        "difficulty_range": null,
        "episode_number": null,
        "exercise_book_pages": null,
        "fast_bpm": null,
        "includes_song": null,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": "Rashid Williams",
        "released": null,
        "slow_bpm": null,
        "transcriber_name": null,
        "week": null,
        "avatar_url": null,
        "length_in_seconds": null,
        "soundslice_slug": null,
        "staff_pick_rating": null,
        "student_id": null,
        "vimeo_video_id": null,
        "youtube_video_id": null
      }
    },
    {
      "type": "instructor",
      "id": "31904",
      "attributes": {
        "slug": "scott-pellegrom",
        "type": "instructor",
        "sort": 0,
        "status": "published",
        "total_xp": null,
        "brand": "drumeo",
        "language": "en-US",
        "show_in_new_feed": null,
        "user": "",
        "published_on": "2017-12-13 17:23:22",
        "archived_on": null,
        "created_on": "2017-12-13 17:23:22",
        "difficulty": null,
        "home_staff_pick_rating": null,
        "legacy_id": null,
        "legacy_wordpress_post_id": null,
        "qna_video": null,
        "style": null,
        "title": null,
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cd_tracks": null,
        "chord_or_scale": null,
        "difficulty_range": null,
        "episode_number": null,
        "exercise_book_pages": null,
        "fast_bpm": null,
        "includes_song": null,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": "Scott Pellegrom",
        "released": null,
        "slow_bpm": null,
        "transcriber_name": null,
        "week": null,
        "avatar_url": null,
        "length_in_seconds": null,
        "soundslice_slug": null,
        "staff_pick_rating": null,
        "student_id": null,
        "vimeo_video_id": null,
        "youtube_video_id": null
      }
    },
    {
      "type": "instructor",
      "id": "224273",
      "attributes": {
        "slug": "keith-carlock",
        "type": "instructor",
        "sort": 0,
        "status": "published",
        "total_xp": null,
        "brand": "drumeo",
        "language": "en-US",
        "show_in_new_feed": null,
        "user": "",
        "published_on": "2019-04-29 10:33:41",
        "archived_on": null,
        "created_on": "2019-04-29 10:33:45",
        "difficulty": null,
        "home_staff_pick_rating": null,
        "legacy_id": null,
        "legacy_wordpress_post_id": null,
        "qna_video": null,
        "style": null,
        "title": null,
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cd_tracks": null,
        "chord_or_scale": null,
        "difficulty_range": null,
        "episode_number": null,
        "exercise_book_pages": null,
        "fast_bpm": null,
        "includes_song": null,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": "Keith Carlock",
        "released": null,
        "slow_bpm": null,
        "transcriber_name": null,
        "week": null,
        "avatar_url": null,
        "length_in_seconds": null,
        "soundslice_slug": null,
        "staff_pick_rating": null,
        "student_id": null,
        "vimeo_video_id": null,
        "youtube_video_id": null
      }
    },
    {
      "type": "instructor",
      "id": "31935",
      "attributes": {
        "slug": "michael-schack",
        "type": "instructor",
        "sort": 0,
        "status": "published",
        "total_xp": null,
        "brand": "drumeo",
        "language": "en-US",
        "show_in_new_feed": null,
        "user": "",
        "published_on": "2017-12-13 17:23:25",
        "archived_on": null,
        "created_on": "2017-12-13 17:23:25",
        "difficulty": null,
        "home_staff_pick_rating": null,
        "legacy_id": null,
        "legacy_wordpress_post_id": null,
        "qna_video": null,
        "style": null,
        "title": null,
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cd_tracks": null,
        "chord_or_scale": null,
        "difficulty_range": null,
        "episode_number": null,
        "exercise_book_pages": null,
        "fast_bpm": null,
        "includes_song": null,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": "Michael Schack",
        "released": null,
        "slow_bpm": null,
        "transcriber_name": null,
        "week": null,
        "avatar_url": null,
        "length_in_seconds": null,
        "soundslice_slug": null,
        "staff_pick_rating": null,
        "student_id": null,
        "vimeo_video_id": null,
        "youtube_video_id": null
      }
    },
    {
      "type": "instructor",
      "id": "212107",
      "attributes": {
        "slug": "dom-famularo",
        "type": "instructor",
        "sort": 0,
        "status": "published",
        "total_xp": null,
        "brand": "drumeo",
        "language": "en-US",
        "show_in_new_feed": null,
        "user": "",
        "published_on": "2018-09-02 19:00:00",
        "archived_on": null,
        "created_on": "2018-09-03 10:27:19",
        "difficulty": null,
        "home_staff_pick_rating": null,
        "legacy_id": null,
        "legacy_wordpress_post_id": null,
        "qna_video": null,
        "style": null,
        "title": null,
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cd_tracks": null,
        "chord_or_scale": null,
        "difficulty_range": null,
        "episode_number": null,
        "exercise_book_pages": null,
        "fast_bpm": null,
        "includes_song": null,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": "Dom Famularo",
        "released": null,
        "slow_bpm": null,
        "transcriber_name": null,
        "week": null,
        "avatar_url": null,
        "length_in_seconds": null,
        "soundslice_slug": null,
        "staff_pick_rating": null,
        "student_id": null,
        "vimeo_video_id": null,
        "youtube_video_id": null
      }
    },
    {
      "type": "instructor",
      "id": "220743",
      "attributes": {
        "slug": "david-frank",
        "type": "instructor",
        "sort": 0,
        "status": "published",
        "total_xp": null,
        "brand": "drumeo",
        "language": "en-US",
        "show_in_new_feed": null,
        "user": "",
        "published_on": "2019-02-19 20:00:00",
        "archived_on": null,
        "created_on": "2019-02-20 14:22:00",
        "difficulty": null,
        "home_staff_pick_rating": null,
        "legacy_id": null,
        "legacy_wordpress_post_id": null,
        "qna_video": null,
        "style": null,
        "title": null,
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cd_tracks": null,
        "chord_or_scale": null,
        "difficulty_range": null,
        "episode_number": null,
        "exercise_book_pages": null,
        "fast_bpm": null,
        "includes_song": null,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": "David Frank",
        "released": null,
        "slow_bpm": null,
        "transcriber_name": null,
        "week": null,
        "avatar_url": null,
        "length_in_seconds": null,
        "soundslice_slug": null,
        "staff_pick_rating": null,
        "student_id": null,
        "vimeo_video_id": null,
        "youtube_video_id": null
      }
    },
    {
      "type": "instructor",
      "id": "220741",
      "attributes": {
        "slug": "tony-coleman",
        "type": "instructor",
        "sort": 0,
        "status": "published",
        "total_xp": null,
        "brand": "drumeo",
        "language": "en-US",
        "show_in_new_feed": null,
        "user": "",
        "published_on": "2019-02-19 20:00:00",
        "archived_on": null,
        "created_on": "2019-02-20 14:18:48",
        "difficulty": null,
        "home_staff_pick_rating": null,
        "legacy_id": null,
        "legacy_wordpress_post_id": null,
        "qna_video": null,
        "style": null,
        "title": null,
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cd_tracks": null,
        "chord_or_scale": null,
        "difficulty_range": null,
        "episode_number": null,
        "exercise_book_pages": null,
        "fast_bpm": null,
        "includes_song": null,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": "Tony Coleman",
        "released": null,
        "slow_bpm": null,
        "transcriber_name": null,
        "week": null,
        "avatar_url": null,
        "length_in_seconds": null,
        "soundslice_slug": null,
        "staff_pick_rating": null,
        "student_id": null,
        "vimeo_video_id": null,
        "youtube_video_id": null
      }
    },
    {
      "type": "instructor",
      "id": "220629",
      "attributes": {
        "slug": "taylor-gordon",
        "type": "instructor",
        "sort": 0,
        "status": "published",
        "total_xp": null,
        "brand": "drumeo",
        "language": "en-US",
        "show_in_new_feed": null,
        "user": "",
        "published_on": "2019-02-26 16:02:50",
        "archived_on": null,
        "created_on": "2019-02-17 12:56:34",
        "difficulty": null,
        "home_staff_pick_rating": null,
        "legacy_id": null,
        "legacy_wordpress_post_id": null,
        "qna_video": null,
        "style": null,
        "title": "Taylor Gordon",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cd_tracks": null,
        "chord_or_scale": null,
        "difficulty_range": null,
        "episode_number": null,
        "exercise_book_pages": null,
        "fast_bpm": null,
        "includes_song": null,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": "Taylor Gordon",
        "released": null,
        "slow_bpm": null,
        "transcriber_name": null,
        "week": null,
        "avatar_url": null,
        "length_in_seconds": null,
        "soundslice_slug": null,
        "staff_pick_rating": null,
        "student_id": null,
        "vimeo_video_id": null,
        "youtube_video_id": null
      }
    },
    {
      "type": "contentData",
      "id": "104252",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "104253",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/231907-resource-1567417262.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "104254",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/231907-card-thumbnail-1567417587.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "104255",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/231907-card-thumbnail-maxres-1567417591.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "104256",
      "attributes": {
        "key": "chapter_timecode",
        "value": "62",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "104257",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #1a",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "104258",
      "attributes": {
        "key": "chapter_timecode",
        "value": "104",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "104259",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #1b",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "104260",
      "attributes": {
        "key": "chapter_timecode",
        "value": "148",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "104261",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #2a",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "104262",
      "attributes": {
        "key": "chapter_timecode",
        "value": "184",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "104263",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #2b",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "104272",
      "attributes": {
        "key": "description",
        "value": "<p>In this lesson, Steve Lyman will teach you how to work on your independence by implying half time in a couple of grooves.</p>",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "3120",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "220809"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "3520",
      "attributes": {
        "topic": "Independence",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "38720",
      "attributes": {
        "tag": "feel",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "45538",
      "attributes": {
        "tag": "half",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "48189",
      "attributes": {
        "tag": "implied",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "50734",
      "attributes": {
        "tag": "intermediate",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "72274",
      "attributes": {
        "tag": "qt",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "73163",
      "attributes": {
        "tag": "quick tip",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "73318",
      "attributes": {
        "tag": "quick tips",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "82228",
      "attributes": {
        "tag": "steve lyman",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "86109",
      "attributes": {
        "tag": "time",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "103748",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/230232-card-thumbnail-1566831834.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "103749",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/230232-card-thumbnail-maxres-1566831838.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "103772",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "103773",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/230232-resource-1566907529.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "103774",
      "attributes": {
        "key": "description",
        "value": "<p>In this lesson, Steve Lyman will teach you a very cool exercise he put together to work on his four-way independence and ability to play incredible-sounding singles, doubles, and inverted doubles.</p>",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "103775",
      "attributes": {
        "key": "chapter_timecode",
        "value": "10",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "103776",
      "attributes": {
        "key": "chapter_description",
        "value": "Overview",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "103777",
      "attributes": {
        "key": "chapter_timecode",
        "value": "28",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "103778",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #1",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "103779",
      "attributes": {
        "key": "chapter_timecode",
        "value": "94",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "103780",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #2",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "103781",
      "attributes": {
        "key": "chapter_timecode",
        "value": "191",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "103782",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #3",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "103783",
      "attributes": {
        "key": "chapter_timecode",
        "value": "208",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "103784",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #4",
        "position": 5
      }
    },
    {
      "type": "instructor",
      "id": "3118",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "220809"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "3519",
      "attributes": {
        "topic": "Independence",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "6435",
      "attributes": {
        "topic": "Rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "32268",
      "attributes": {
        "tag": "double stroke",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "32461",
      "attributes": {
        "tag": "double strokes",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "32556",
      "attributes": {
        "tag": "doubles",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "48841",
      "attributes": {
        "tag": "independence",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "53278",
      "attributes": {
        "tag": "inverted double strokes",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "53279",
      "attributes": {
        "tag": "inverted doubles",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "72273",
      "attributes": {
        "tag": "qt",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "73162",
      "attributes": {
        "tag": "quick tip",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "73317",
      "attributes": {
        "tag": "quick tips",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "76787",
      "attributes": {
        "tag": "rudiment",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "77573",
      "attributes": {
        "tag": "rudiments",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "79545",
      "attributes": {
        "tag": "single stroke",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79660",
      "attributes": {
        "tag": "single strokes",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79751",
      "attributes": {
        "tag": "singles",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "82226",
      "attributes": {
        "tag": "steve lyman",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "103145",
      "attributes": {
        "key": "description",
        "value": "<p>In this lesson, Steve Lyman will teach you how to play seven, iconic drum licks created by three of the best jazz drummers of all time: Philly Joe Jones, Tony Williams, and Roy Haynes.</p>",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "103146",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/230220-card-thumbnail-1566222672.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "103147",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/230220-card-thumbnail-maxres-1566222675.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "103148",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "103149",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/230220-resource-1566222693.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "103150",
      "attributes": {
        "key": "chapter_timecode",
        "value": "24",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "103151",
      "attributes": {
        "key": "chapter_description",
        "value": "Lick #1 - Philly Joe Jones #1",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "103152",
      "attributes": {
        "key": "chapter_timecode",
        "value": "113",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "103153",
      "attributes": {
        "key": "chapter_description",
        "value": "Lick #2 - Philly Joe Jones #2",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "103154",
      "attributes": {
        "key": "chapter_timecode",
        "value": "152",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "103155",
      "attributes": {
        "key": "chapter_description",
        "value": "Lick #3 - Philly Joe Jones #3",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "103156",
      "attributes": {
        "key": "chapter_timecode",
        "value": "237",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "103157",
      "attributes": {
        "key": "chapter_description",
        "value": "Lick #4 - Philly Joe Jones #4",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "103158",
      "attributes": {
        "key": "chapter_timecode",
        "value": "290",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "103159",
      "attributes": {
        "key": "chapter_description",
        "value": "Lick #5a - Tony Williams #1",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "103160",
      "attributes": {
        "key": "chapter_timecode",
        "value": "335",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "103161",
      "attributes": {
        "key": "chapter_description",
        "value": "Lick #5b",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "103162",
      "attributes": {
        "key": "chapter_timecode",
        "value": "382",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "103163",
      "attributes": {
        "key": "chapter_description",
        "value": "Lick #6 - Tony Williams #2",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "103164",
      "attributes": {
        "key": "chapter_timecode",
        "value": "449",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "103165",
      "attributes": {
        "key": "chapter_description",
        "value": "Lick #7 - Roy Haynes",
        "position": 8
      }
    },
    {
      "type": "instructor",
      "id": "3115",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "220809"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2013",
      "attributes": {
        "topic": "Famous Beats & Fills",
        "position": 2
      }
    },
    {
      "type": "topic",
      "id": "2364",
      "attributes": {
        "topic": "Fills",
        "position": 3
      }
    },
    {
      "type": "topic",
      "id": "3655",
      "attributes": {
        "topic": "Jazz",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "4327",
      "attributes": {
        "tag": "7",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "7072",
      "attributes": {
        "tag": "advanced",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "9759",
      "attributes": {
        "tag": "all",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "12363",
      "attributes": {
        "tag": "all skills",
        "position": 19
      }
    },
    {
      "type": "tag",
      "id": "19501",
      "attributes": {
        "tag": "beginner",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "33198",
      "attributes": {
        "tag": "drum lick",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "33199",
      "attributes": {
        "tag": "drum licks",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "34030",
      "attributes": {
        "tag": "drummer",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "34097",
      "attributes": {
        "tag": "drummers",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "39267",
      "attributes": {
        "tag": "fill",
        "position": 21
      }
    },
    {
      "type": "tag",
      "id": "40134",
      "attributes": {
        "tag": "fills",
        "position": 22
      }
    },
    {
      "type": "tag",
      "id": "41117",
      "attributes": {
        "tag": "for",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "48049",
      "attributes": {
        "tag": "iconic",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "50700",
      "attributes": {
        "tag": "intermediate",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "55019",
      "attributes": {
        "tag": "jazz",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "57957",
      "attributes": {
        "tag": "lick",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "57983",
      "attributes": {
        "tag": "licks",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "67070",
      "attributes": {
        "tag": "philly joe jones",
        "position": 23
      }
    },
    {
      "type": "tag",
      "id": "72272",
      "attributes": {
        "tag": "qt",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "73161",
      "attributes": {
        "tag": "quick tip",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "73316",
      "attributes": {
        "tag": "quick tips",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "76496",
      "attributes": {
        "tag": "roy haynes",
        "position": 24
      }
    },
    {
      "type": "tag",
      "id": "78631",
      "attributes": {
        "tag": "seven",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "86814",
      "attributes": {
        "tag": "tony williams",
        "position": 20
      }
    },
    {
      "type": "contentData",
      "id": "102756",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "102757",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/230212-resource-1565693707.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "102759",
      "attributes": {
        "key": "description",
        "value": "<p>In this lesson, Aaron Edgar is going to teach you how to play the 4-over-3 polyrhythm found within Tool's \"Jambi\".</p>",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "102760",
      "attributes": {
        "key": "chapter_timecode",
        "value": "54",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "102761",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #1",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "102762",
      "attributes": {
        "key": "chapter_timecode",
        "value": "107",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "102763",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercises #3 & #4",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "102764",
      "attributes": {
        "key": "chapter_timecode",
        "value": "235",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "102765",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #5",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "102766",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/230212-card-thumbnail-1565695521.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "102767",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/230212-card-thumbnail-maxres-1565695526.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "102781",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Loop",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "102782",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/230212-resource-1565696906.mp3",
        "position": 2
      }
    },
    {
      "type": "instructor",
      "id": "6418",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31888"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2012",
      "attributes": {
        "topic": "Famous Beats & Fills",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "5911",
      "attributes": {
        "topic": "Rhythmic Concepts",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "2917",
      "attributes": {
        "tag": "3/4",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "3334",
      "attributes": {
        "tag": "4 against 3",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "3340",
      "attributes": {
        "tag": "4 over 3",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "3352",
      "attributes": {
        "tag": "4-against-3",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "3353",
      "attributes": {
        "tag": "4-over-3",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "5541",
      "attributes": {
        "tag": "aaron edgar",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "9754",
      "attributes": {
        "tag": "all",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "11074",
      "attributes": {
        "tag": "all skill levels",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "12358",
      "attributes": {
        "tag": "all skills",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "16454",
      "attributes": {
        "tag": "beat",
        "position": 22
      }
    },
    {
      "type": "tag",
      "id": "17893",
      "attributes": {
        "tag": "beats",
        "position": 23
      }
    },
    {
      "type": "tag",
      "id": "19495",
      "attributes": {
        "tag": "beginner",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "22730",
      "attributes": {
        "tag": "break down",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "23380",
      "attributes": {
        "tag": "breakdown",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "38491",
      "attributes": {
        "tag": "famous",
        "position": 21
      }
    },
    {
      "type": "tag",
      "id": "44318",
      "attributes": {
        "tag": "groove",
        "position": 24
      }
    },
    {
      "type": "tag",
      "id": "45093",
      "attributes": {
        "tag": "grooves",
        "position": 25
      }
    },
    {
      "type": "tag",
      "id": "53997",
      "attributes": {
        "tag": "jambi",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "69298",
      "attributes": {
        "tag": "polyrhythm",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "72271",
      "attributes": {
        "tag": "qt",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "73160",
      "attributes": {
        "tag": "quick tip",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "73315",
      "attributes": {
        "tag": "quick tips",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "74631",
      "attributes": {
        "tag": "rhythmic concept",
        "position": 19
      }
    },
    {
      "type": "tag",
      "id": "74830",
      "attributes": {
        "tag": "rhythmic concepts",
        "position": 20
      }
    },
    {
      "type": "tag",
      "id": "86837",
      "attributes": {
        "tag": "tool",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "102385",
      "attributes": {
        "key": "description",
        "value": "<p>In this lesson, Aaron Edgar is going to teach you how to play the 7-over-3 polyrhythm found within the live version of Tool's \"Invincible\".</p>",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "102386",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/230143-card-thumbnail-1565005298.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "102387",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/230143-card-thumbnail-maxres-1565005304.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "102388",
      "attributes": {
        "key": "chapter_timecode",
        "value": "72",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "102389",
      "attributes": {
        "key": "chapter_description",
        "value": "Kick & Snare Pattern",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "102390",
      "attributes": {
        "key": "chapter_timecode",
        "value": "167",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "102391",
      "attributes": {
        "key": "chapter_description",
        "value": "Feeling The 7-Over-3 Polyrhythm",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "102392",
      "attributes": {
        "key": "chapter_timecode",
        "value": "239",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "102393",
      "attributes": {
        "key": "chapter_description",
        "value": "Mixing Kick & Snare With The Polyrhythm",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "102394",
      "attributes": {
        "key": "chapter_timecode",
        "value": "312",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "102395",
      "attributes": {
        "key": "chapter_description",
        "value": "From Floor Tom To The Rack Tom",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "102396",
      "attributes": {
        "key": "chapter_timecode",
        "value": "362",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "102397",
      "attributes": {
        "key": "chapter_description",
        "value": "Tool - \"Invincible\"",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "102399",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "102400",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/230143-resource-1565008759.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "102429",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Loop",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "102430",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/230143-resource-1565031329.mp3",
        "position": 2
      }
    },
    {
      "type": "instructor",
      "id": "6417",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31888"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2011",
      "attributes": {
        "topic": "Famous Beats & Fills",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "5910",
      "attributes": {
        "topic": "Rhythmic Concepts",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "4336",
      "attributes": {
        "tag": "7 against 3",
        "position": 20
      }
    },
    {
      "type": "tag",
      "id": "4349",
      "attributes": {
        "tag": "7 over 3",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "4359",
      "attributes": {
        "tag": "7-against-3",
        "position": 21
      }
    },
    {
      "type": "tag",
      "id": "4360",
      "attributes": {
        "tag": "7-over-3",
        "position": 19
      }
    },
    {
      "type": "tag",
      "id": "4371",
      "attributes": {
        "tag": "7/16",
        "position": 22
      }
    },
    {
      "type": "tag",
      "id": "5540",
      "attributes": {
        "tag": "aaron edgar",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "7063",
      "attributes": {
        "tag": "advanced",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "9749",
      "attributes": {
        "tag": "all",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "11069",
      "attributes": {
        "tag": "all skill levels",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "12353",
      "attributes": {
        "tag": "all skills",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "16453",
      "attributes": {
        "tag": "beat",
        "position": 26
      }
    },
    {
      "type": "tag",
      "id": "17892",
      "attributes": {
        "tag": "beats",
        "position": 25
      }
    },
    {
      "type": "tag",
      "id": "19489",
      "attributes": {
        "tag": "beginner",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "21650",
      "attributes": {
        "tag": "birmingham",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "22729",
      "attributes": {
        "tag": "break down",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "23379",
      "attributes": {
        "tag": "breakdown",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "38490",
      "attributes": {
        "tag": "famous",
        "position": 24
      }
    },
    {
      "type": "tag",
      "id": "44317",
      "attributes": {
        "tag": "groove",
        "position": 27
      }
    },
    {
      "type": "tag",
      "id": "45092",
      "attributes": {
        "tag": "grooves",
        "position": 28
      }
    },
    {
      "type": "tag",
      "id": "50690",
      "attributes": {
        "tag": "intermediate",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "53289",
      "attributes": {
        "tag": "invincible",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "59166",
      "attributes": {
        "tag": "live",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "69297",
      "attributes": {
        "tag": "polyrhythm",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "72270",
      "attributes": {
        "tag": "qt",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "73159",
      "attributes": {
        "tag": "quick tip",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "73314",
      "attributes": {
        "tag": "quick tips",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "74630",
      "attributes": {
        "tag": "rhythmic concept",
        "position": 23
      }
    },
    {
      "type": "tag",
      "id": "74829",
      "attributes": {
        "tag": "rhythmic concepts",
        "position": 29
      }
    },
    {
      "type": "tag",
      "id": "86836",
      "attributes": {
        "tag": "tool",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "102008",
      "attributes": {
        "key": "description",
        "value": "<p>In this lesson, Ash Pearson will teach you how to play an easy but very useful blast beat for your everyday heavy metal drumming.</p>",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "102009",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/229371-card-thumbnail-1564487223.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "102010",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/229371-card-thumbnail-maxres-1564487225.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "102014",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "102015",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/229371-resource-1564489202.pdf",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6882",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31896"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "4144",
      "attributes": {
        "topic": "Metal",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "7022",
      "attributes": {
        "tag": "advanced",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "9707",
      "attributes": {
        "tag": "all",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "11027",
      "attributes": {
        "tag": "all skill levels",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "12312",
      "attributes": {
        "tag": "all skills",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "13048",
      "attributes": {
        "tag": "an",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "14833",
      "attributes": {
        "tag": "ash pearson",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "16443",
      "attributes": {
        "tag": "beat",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "17882",
      "attributes": {
        "tag": "beats",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "19441",
      "attributes": {
        "tag": "beginner",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "21693",
      "attributes": {
        "tag": "blast",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "24366",
      "attributes": {
        "tag": "but",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "34986",
      "attributes": {
        "tag": "easy",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "50648",
      "attributes": {
        "tag": "intermediate",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "60356",
      "attributes": {
        "tag": "metal",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "88150",
      "attributes": {
        "tag": "useful",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "101486",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/228896-card-thumbnail-1563269187.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "101487",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/228896-card-thumbnail-maxres-1563269191.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "101488",
      "attributes": {
        "key": "description",
        "value": "<p>Learning how to correctly hold your drumsticks is the most important aspect of developing your hand technique properly. So whether you're a beginner, intermediate, or advanced drummer, you have to make sure you hold your sticks properly - and this lesson will do that for you!</p>",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "5226",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31880"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "3120",
      "attributes": {
        "topic": "Hand Technique",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "7010",
      "attributes": {
        "tag": "advanced",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "9694",
      "attributes": {
        "tag": "all",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "11015",
      "attributes": {
        "tag": "all skill levels",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "12300",
      "attributes": {
        "tag": "all skills",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "19420",
      "attributes": {
        "tag": "beginner",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "33386",
      "attributes": {
        "tag": "drum stick",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "33404",
      "attributes": {
        "tag": "drum sticks",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "33661",
      "attributes": {
        "tag": "drum-stick",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "33670",
      "attributes": {
        "tag": "drum-sticks",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "34344",
      "attributes": {
        "tag": "drumstick",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "34374",
      "attributes": {
        "tag": "drumsticks",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "47508",
      "attributes": {
        "tag": "hold",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "47661",
      "attributes": {
        "tag": "how",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "50636",
      "attributes": {
        "tag": "intermediate",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "86495",
      "attributes": {
        "tag": "to",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "101346",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "101347",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/228680-resource-1562937509.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "101348",
      "attributes": {
        "key": "chapter_timecode",
        "value": "4",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "101349",
      "attributes": {
        "key": "chapter_description",
        "value": "Overview",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "101350",
      "attributes": {
        "key": "chapter_timecode",
        "value": "70",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "101351",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #1a",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "101352",
      "attributes": {
        "key": "chapter_timecode",
        "value": "115",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "101353",
      "attributes": {
        "key": "chapter_description",
        "value": "Moving #1a Around The Kit",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "101354",
      "attributes": {
        "key": "chapter_timecode",
        "value": "147",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "101355",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #1b",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "101356",
      "attributes": {
        "key": "chapter_timecode",
        "value": "212",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "101357",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #2a",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "101358",
      "attributes": {
        "key": "chapter_timecode",
        "value": "258",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "101359",
      "attributes": {
        "key": "chapter_description",
        "value": "Moving #2a Around The Kit",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "101360",
      "attributes": {
        "key": "chapter_timecode",
        "value": "293",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "101361",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #2b",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "101362",
      "attributes": {
        "key": "chapter_timecode",
        "value": "323",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "101363",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #3",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "101364",
      "attributes": {
        "key": "chapter_timecode",
        "value": "377",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "101365",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #4",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "101366",
      "attributes": {
        "key": "description",
        "value": "<p>In this lesson, Jared will teach you a four-exercise warm-up that you can use to get your body ready for you practice and playing sessions.</p>",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "101484",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/228680-card-thumbnail-1563268712.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "101485",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/228680-card-thumbnail-maxres-1563268723.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "5225",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31880"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "7373",
      "attributes": {
        "topic": "Warm-Ups & Workouts",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "3268",
      "attributes": {
        "tag": "4",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "19397",
      "attributes": {
        "tag": "beginner",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "33478",
      "attributes": {
        "tag": "drum warm up",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "33479",
      "attributes": {
        "tag": "drum warm ups",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "33480",
      "attributes": {
        "tag": "drum warm-up",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "33481",
      "attributes": {
        "tag": "drum warm-ups",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "33482",
      "attributes": {
        "tag": "drum warmup",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "33483",
      "attributes": {
        "tag": "drum warmups",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "41224",
      "attributes": {
        "tag": "four",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "54593",
      "attributes": {
        "tag": "jared falk",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "90144",
      "attributes": {
        "tag": "work out",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "90197",
      "attributes": {
        "tag": "work outs",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "90218",
      "attributes": {
        "tag": "work-out",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "90328",
      "attributes": {
        "tag": "workout",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "90377",
      "attributes": {
        "tag": "workouts",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "90378",
      "attributes": {
        "tag": "workouts",
        "position": 16
      }
    },
    {
      "type": "contentData",
      "id": "101056",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/227067-card-thumbnail-1562583590.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "101057",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/227067-card-thumbnail-maxres-1562583593.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "101058",
      "attributes": {
        "key": "description",
        "value": "<p>In this lesson, Rashid Williams is going to teach you how to play triple strokes with one foot using a single pedal.</p>",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "3339",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "225962"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "172",
      "attributes": {
        "topic": "Bass Drum",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "2518",
      "attributes": {
        "topic": "Foot Technique",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "6919",
      "attributes": {
        "tag": "advanced",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "9604",
      "attributes": {
        "tag": "all",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "10925",
      "attributes": {
        "tag": "all skill levels",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "12210",
      "attributes": {
        "tag": "all skills",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "19305",
      "attributes": {
        "tag": "beginner",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "41075",
      "attributes": {
        "tag": "foot technique",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "47658",
      "attributes": {
        "tag": "how",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "50539",
      "attributes": {
        "tag": "intermediate",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "66314",
      "attributes": {
        "tag": "pedal",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "68191",
      "attributes": {
        "tag": "play",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "72268",
      "attributes": {
        "tag": "qt",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "73157",
      "attributes": {
        "tag": "quick tip",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "73312",
      "attributes": {
        "tag": "quick tips",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "79471",
      "attributes": {
        "tag": "single",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "86490",
      "attributes": {
        "tag": "to",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "87240",
      "attributes": {
        "tag": "triple",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "87275",
      "attributes": {
        "tag": "triples",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "101050",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/228672-card-thumbnail-1562581509.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "101051",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/228672-card-thumbnail-maxres-1562581516.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "101052",
      "attributes": {
        "key": "description",
        "value": "<p>In this video, Jared Falk is going to teach you how to tune your drum set.</p>",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "5224",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31880"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "7180",
      "attributes": {
        "topic": "Tuning",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "6988",
      "attributes": {
        "tag": "advanced",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "9672",
      "attributes": {
        "tag": "all",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "10993",
      "attributes": {
        "tag": "all skill levels",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "12278",
      "attributes": {
        "tag": "all skills",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "19393",
      "attributes": {
        "tag": "beginner",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "34252",
      "attributes": {
        "tag": "drums",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "47659",
      "attributes": {
        "tag": "how",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "50613",
      "attributes": {
        "tag": "intermediate",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "54592",
      "attributes": {
        "tag": "jared falk",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "72269",
      "attributes": {
        "tag": "qt",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "73158",
      "attributes": {
        "tag": "quick tip",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "73313",
      "attributes": {
        "tag": "quick tips",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "86493",
      "attributes": {
        "tag": "to",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "87545",
      "attributes": {
        "tag": "tune",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "87618",
      "attributes": {
        "tag": "tuning",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "91075",
      "attributes": {
        "tag": "your",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "97944",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/227058-card-thumbnail-1561971371.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "97945",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/227058-card-thumbnail-maxres-1561971382.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "100786",
      "attributes": {
        "key": "description",
        "value": "<p>In this lesson, Scott Pellegrom is going to teach you a very cool exercise that will help you get more independent with your hands when moving around the drums.</p>",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7087",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31904"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "3517",
      "attributes": {
        "topic": "Independence",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "6912",
      "attributes": {
        "tag": "advanced",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "9597",
      "attributes": {
        "tag": "all",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "10918",
      "attributes": {
        "tag": "all skill levels",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "12203",
      "attributes": {
        "tag": "all skills",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "19297",
      "attributes": {
        "tag": "beginner",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "26066",
      "attributes": {
        "tag": "clock wise",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "26067",
      "attributes": {
        "tag": "clock-wise",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "26069",
      "attributes": {
        "tag": "clockwise",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "27819",
      "attributes": {
        "tag": "counter",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "48837",
      "attributes": {
        "tag": "independence",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "50532",
      "attributes": {
        "tag": "intermediate",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78054",
      "attributes": {
        "tag": "scott pellegrom",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "97555",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/226527-card-thumbnail-1561298158.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "97556",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/226527-card-thumbnail-maxres-1561298162.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "97610",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "97611",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/226527-resource-1561460000.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "97616",
      "attributes": {
        "key": "chapter_timecode",
        "value": "70",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "97617",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #1",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "97618",
      "attributes": {
        "key": "chapter_timecode",
        "value": "254",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "97619",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #2",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "97620",
      "attributes": {
        "key": "description",
        "value": "<p>In this lesson, Keith Carlock will teach you two exercises that will help you develop great-sounding double stroke rolls.</p>",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "3170",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "224273"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "1651",
      "attributes": {
        "topic": "Double Stroke Rudiments",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "6424",
      "attributes": {
        "topic": "Rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "6902",
      "attributes": {
        "tag": "advanced",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "9587",
      "attributes": {
        "tag": "all",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "10908",
      "attributes": {
        "tag": "all skill levels",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "12193",
      "attributes": {
        "tag": "all skills",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "19281",
      "attributes": {
        "tag": "beginner",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "32264",
      "attributes": {
        "tag": "double stroke",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "32288",
      "attributes": {
        "tag": "double stroke roll",
        "position": 21
      }
    },
    {
      "type": "tag",
      "id": "32308",
      "attributes": {
        "tag": "double stroke rolls",
        "position": 22
      }
    },
    {
      "type": "tag",
      "id": "32455",
      "attributes": {
        "tag": "double strokes",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "32552",
      "attributes": {
        "tag": "doubles",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "50515",
      "attributes": {
        "tag": "intermediate",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "55885",
      "attributes": {
        "tag": "keith carlock",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "72266",
      "attributes": {
        "tag": "qt",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "73155",
      "attributes": {
        "tag": "quick tip",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "73310",
      "attributes": {
        "tag": "quick tips",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "76778",
      "attributes": {
        "tag": "rudiment",
        "position": 19
      }
    },
    {
      "type": "tag",
      "id": "77563",
      "attributes": {
        "tag": "rudiments",
        "position": 20
      }
    },
    {
      "type": "tag",
      "id": "79337",
      "attributes": {
        "tag": "silky",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "80045",
      "attributes": {
        "tag": "smooth",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "86483",
      "attributes": {
        "tag": "to",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "87159",
      "attributes": {
        "tag": "trick",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "87196",
      "attributes": {
        "tag": "tricks",
        "position": 13
      }
    },
    {
      "type": "contentData",
      "id": "96969",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/226653-card-thumbnail-1560759469.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "96970",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/226653-card-thumbnail-maxres-1560759472.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "96971",
      "attributes": {
        "key": "description",
        "value": "<p>In this lesson, Rashid Williams will share how he learns to play songs by just using his ears. If you're not a fan of learning songs by using sheet music this is the perfect lesson for you.</p>",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "3338",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "225962"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "3949",
      "attributes": {
        "topic": "Learning Songs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "4994",
      "attributes": {
        "tag": "a",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "6909",
      "attributes": {
        "tag": "advanced",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "9594",
      "attributes": {
        "tag": "all",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "10915",
      "attributes": {
        "tag": "all skill levels",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "12200",
      "attributes": {
        "tag": "all skills",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "19289",
      "attributes": {
        "tag": "beginner",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "24402",
      "attributes": {
        "tag": "by",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "34865",
      "attributes": {
        "tag": "ear",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "50523",
      "attributes": {
        "tag": "intermediate",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "57095",
      "attributes": {
        "tag": "learn",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "57613",
      "attributes": {
        "tag": "learns",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "72267",
      "attributes": {
        "tag": "qt",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "73156",
      "attributes": {
        "tag": "quick tip",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "73311",
      "attributes": {
        "tag": "quick tips",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "73578",
      "attributes": {
        "tag": "rashid",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "73586",
      "attributes": {
        "tag": "rashid williams",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "80898",
      "attributes": {
        "tag": "song",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "81220",
      "attributes": {
        "tag": "songs",
        "position": 13
      }
    },
    {
      "type": "contentData",
      "id": "96681",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/226451-card-thumbnail-1560239567.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "96682",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/226451-card-thumbnail-maxres-1560239570.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "96683",
      "attributes": {
        "key": "description",
        "value": "<p>In this lesson, Keith Carlock will teach you how to play one of his favorite licks.</p>",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "3169",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "224273"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "6900",
      "attributes": {
        "tag": "advanced",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "9585",
      "attributes": {
        "tag": "all",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "10906",
      "attributes": {
        "tag": "all skill levels",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "12191",
      "attributes": {
        "tag": "all skills",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "19279",
      "attributes": {
        "tag": "beginner",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "33197",
      "attributes": {
        "tag": "drum lick",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "50513",
      "attributes": {
        "tag": "intermediate",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "55884",
      "attributes": {
        "tag": "keith carlock",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "57954",
      "attributes": {
        "tag": "lick",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "79262",
      "attributes": {
        "tag": "signature",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "96672",
      "attributes": {
        "key": "description",
        "value": "<p>In this lesson, Michael Schack will teach you how to create amazing instagram videos so you can get a lot more people to follow you.</p>",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "96673",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/226218-card-thumbnail-1560020659.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "96674",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/226218-card-thumbnail-maxres-1560020662.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7751",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31935"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "5687",
      "attributes": {
        "topic": "Recording Drums",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "4993",
      "attributes": {
        "tag": "a",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "6880",
      "attributes": {
        "tag": "advanced",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "19245",
      "attributes": {
        "tag": "beginner",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "31856",
      "attributes": {
        "tag": "dom famularo",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "47657",
      "attributes": {
        "tag": "how",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "48945",
      "attributes": {
        "tag": "instagram",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "50490",
      "attributes": {
        "tag": "intermediate",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "50491",
      "attributes": {
        "tag": "intermediate",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "56158",
      "attributes": {
        "tag": "killer",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "59513",
      "attributes": {
        "tag": "make",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "72265",
      "attributes": {
        "tag": "qt",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "73154",
      "attributes": {
        "tag": "quick tip",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "73309",
      "attributes": {
        "tag": "quick tips",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "86481",
      "attributes": {
        "tag": "to",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "88572",
      "attributes": {
        "tag": "video",
        "position": 14
      }
    },
    {
      "type": "contentData",
      "id": "96215",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/225970-card-thumbnail-1559552812.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "96216",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/225970-card-thumbnail-maxres-1559552818.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "96217",
      "attributes": {
        "key": "description",
        "value": "<p>In this lesson, Dom Famularo will talk about drum teacher lineage and why it is important to know where the knowledge you're acquiring on the drum-set came from.</p>",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "96282",
      "attributes": {
        "key": "resource_name",
        "value": "Lineage PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "96283",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/225970-resource-1559640533.pdf",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "2919",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "212107"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2851",
      "attributes": {
        "topic": "General Lessons",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "6864",
      "attributes": {
        "tag": "advanced",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "19224",
      "attributes": {
        "tag": "beginner",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "31852",
      "attributes": {
        "tag": "dom famularo",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "33411",
      "attributes": {
        "tag": "drum teacher",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "48199",
      "attributes": {
        "tag": "importance",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "50466",
      "attributes": {
        "tag": "intermediate",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "58064",
      "attributes": {
        "tag": "lineage",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "64550",
      "attributes": {
        "tag": "of",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "72264",
      "attributes": {
        "tag": "qt",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "73153",
      "attributes": {
        "tag": "quick tip",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "73308",
      "attributes": {
        "tag": "quick tips",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "84646",
      "attributes": {
        "tag": "teacher",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "85322",
      "attributes": {
        "tag": "the",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "96212",
      "attributes": {
        "key": "description",
        "value": "<p>In this lesson, David Frank is going to teach you how to play a very cool-sounding fill that you can use in your solo playing and music - but don't go busting it out in your next country gig. :)</p>",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "96213",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/225968-card-thumbnail-1559551797.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "96214",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/225968-card-thumbnail-maxres-1559551850.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "3107",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "220743"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2352",
      "attributes": {
        "topic": "Fills",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "30696",
      "attributes": {
        "tag": "david frank",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "30699",
      "attributes": {
        "tag": "david frank's",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "39258",
      "attributes": {
        "tag": "fill",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "40117",
      "attributes": {
        "tag": "fills",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "50464",
      "attributes": {
        "tag": "intermediate",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "72263",
      "attributes": {
        "tag": "qt",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "73152",
      "attributes": {
        "tag": "quick tip",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "73307",
      "attributes": {
        "tag": "quick tips",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "77921",
      "attributes": {
        "tag": "sauce",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78343",
      "attributes": {
        "tag": "secret",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "95917",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/225189-card-thumbnail-1559035719.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "95918",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/225189-card-thumbnail-maxres-1559035723.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "95919",
      "attributes": {
        "key": "description",
        "value": "<p>In this lesson, Dom Famularo will talk to you about the 12 qualities that make up every great teacher. </p>",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "2918",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "212107"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2850",
      "attributes": {
        "topic": "General Lessons",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "6824",
      "attributes": {
        "tag": "advanced",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "9511",
      "attributes": {
        "tag": "all",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "10832",
      "attributes": {
        "tag": "all skill levels",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "12119",
      "attributes": {
        "tag": "all skills",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "13001",
      "attributes": {
        "tag": "amazing",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "13046",
      "attributes": {
        "tag": "an",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "15740",
      "attributes": {
        "tag": "be",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "19184",
      "attributes": {
        "tag": "beginner",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "42458",
      "attributes": {
        "tag": "general",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "47656",
      "attributes": {
        "tag": "how",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "50424",
      "attributes": {
        "tag": "intermediate",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "72262",
      "attributes": {
        "tag": "qt",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "73151",
      "attributes": {
        "tag": "quick tip",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "73306",
      "attributes": {
        "tag": "quick tips",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "84645",
      "attributes": {
        "tag": "teacher",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "86480",
      "attributes": {
        "tag": "to",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "94474",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/224698-card-thumbnail-1557822393.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "94475",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/224698-card-thumbnail-maxres-1557822397.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "94476",
      "attributes": {
        "key": "description",
        "value": "<p>In this lesson, Tony Coleman talks in depth about the most important lessons he learned as the drummer for the legendary B.B. King.</p>",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "3091",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "220741"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2959",
      "attributes": {
        "topic": "Gigging Tips",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "6814",
      "attributes": {
        "tag": "advanced",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "9501",
      "attributes": {
        "tag": "all",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "10822",
      "attributes": {
        "tag": "all skill levels",
        "position": 20
      }
    },
    {
      "type": "tag",
      "id": "12109",
      "attributes": {
        "tag": "all skills",
        "position": 19
      }
    },
    {
      "type": "tag",
      "id": "15000",
      "attributes": {
        "tag": "b.b. king",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "15723",
      "attributes": {
        "tag": "bb king",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "15727",
      "attributes": {
        "tag": "bbking",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "19162",
      "attributes": {
        "tag": "beginner",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "47974",
      "attributes": {
        "tag": "i",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "50414",
      "attributes": {
        "tag": "intermediate",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "57093",
      "attributes": {
        "tag": "learn",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "57198",
      "attributes": {
        "tag": "learned",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "68190",
      "attributes": {
        "tag": "play",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "68920",
      "attributes": {
        "tag": "playing",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "72260",
      "attributes": {
        "tag": "qt",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "73149",
      "attributes": {
        "tag": "quick tip",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "73304",
      "attributes": {
        "tag": "quick tips",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "86774",
      "attributes": {
        "tag": "tony coleman",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "89648",
      "attributes": {
        "tag": "what",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "89947",
      "attributes": {
        "tag": "with",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "94456",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/224712-card-thumbnail-1557750734.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "94457",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/224712-card-thumbnail-maxres-1557750738.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "94458",
      "attributes": {
        "key": "description",
        "value": "<p>In this video, Taylor Gordon talks about five songs that changed her drumming for the best, and why they had such a big influence on her.</p>",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "3063",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "220629"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2849",
      "attributes": {
        "topic": "General Lessons",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "3698",
      "attributes": {
        "tag": "5",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "6819",
      "attributes": {
        "tag": "advanced",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "9506",
      "attributes": {
        "tag": "all",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "10827",
      "attributes": {
        "tag": "all skill levels",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "12114",
      "attributes": {
        "tag": "all skills",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "19167",
      "attributes": {
        "tag": "beginner",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "25115",
      "attributes": {
        "tag": "change",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "25122",
      "attributes": {
        "tag": "changed",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "34177",
      "attributes": {
        "tag": "drumming",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "40392",
      "attributes": {
        "tag": "five",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "42457",
      "attributes": {
        "tag": "general",
        "position": 20
      }
    },
    {
      "type": "tag",
      "id": "42461",
      "attributes": {
        "tag": "general lesson",
        "position": 21
      }
    },
    {
      "type": "tag",
      "id": "42510",
      "attributes": {
        "tag": "general lessons",
        "position": 22
      }
    },
    {
      "type": "tag",
      "id": "50419",
      "attributes": {
        "tag": "intermediate",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "62832",
      "attributes": {
        "tag": "my",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "72261",
      "attributes": {
        "tag": "qt",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "73150",
      "attributes": {
        "tag": "quick tip",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "73305",
      "attributes": {
        "tag": "quick tips",
        "position": 19
      }
    },
    {
      "type": "tag",
      "id": "80872",
      "attributes": {
        "tag": "song",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "81218",
      "attributes": {
        "tag": "songs",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "84580",
      "attributes": {
        "tag": "taylor gordon",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "85087",
      "attributes": {
        "tag": "that",
        "position": 5
      }
    }
  ],
  "meta": {
    "filterOptions": {
      "difficulty": [
        "1",
        "3",
        "4",
        "5",
        "All Skill Levels",
        "Beginner",
        "Intermediate"
      ],
      "topic": [
        "bass drum",
        "beats",
        "brushes",
        "creative drumming",
        "diddle rudiments",
        "double bass",
        "double stroke rudiments",
        "drum set-up",
        "dynamic drumming",
        "edutainment",
        "electronic music",
        "famous beats & fills",
        "fills",
        "flam rudiments",
        "foot technique",
        "funk",
        "fusion",
        "gear",
        "gear talk",
        "general lessons",
        "gigging tips",
        "gospel",
        "hand technique",
        "health & lifestyle",
        "hi-hat",
        "hybrid rudiments",
        "independence",
        "jazz",
        "latin",
        "learning songs",
        "licks",
        "linear drumming",
        "metal",
        "multiple-bounce rudiments",
        "musical drumming",
        "note values & theory",
        "odd-time",
        "performance",
        "practice pad",
        "practice tips",
        "quick tips",
        "recording drums",
        "rhythmic concepts",
        "rock",
        "rudiments",
        "showmanship",
        "shuffles",
        "singing & drumming",
        "single stroke rudiments",
        "speed & endurance",
        "tuning",
        "warm-ups & workouts",
        "world music"
      ],
      "instructors": [
        {
          "id": 31888,
          "slug": "aaron-edgar",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:21",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:21",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Aaron Edgar",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 247864,
          "slug": "alex-rudinger",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": "150",
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2020-03-12 20:15:58",
          "archived_on": null,
          "created_on": "2020-03-12 20:16:01",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Alex Rüdinger",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31920,
          "slug": "anika-nilles",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:23",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:23",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Anika Nilles",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31896,
          "slug": "ash-pearson",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:21",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:21",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Ash Pearson",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31908,
          "slug": "benny-greb",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:22",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:22",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Benny Greb",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31962,
          "slug": "billy-cobham",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:27",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:27",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Billy Cobham",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 191327,
          "slug": "brandon-khoo",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-02-02 15:00:00",
          "archived_on": null,
          "created_on": "2018-01-31 16:47:26",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Brandon Khoo",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31959,
          "slug": "brandon-toews",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:27",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:27",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Brandon Toews",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31952,
          "slug": "brian-frasier-moore",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:26",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:26",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Brian Frasier-Moore",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 215677,
          "slug": "brian-tichy",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-11-19 20:00:00",
          "archived_on": null,
          "created_on": "2018-11-20 10:08:43",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Brian Tichy",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31964,
          "slug": "bruce-becker",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:28",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:28",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Bruce Becker",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31969,
          "slug": "chip-ritter",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:28",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:28",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Chip Ritter",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31965,
          "slug": "claus-hessler",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:28",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:28",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Claus Hessler",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 220967,
          "slug": "daru-jones",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2019-02-26 16:02:50",
          "archived_on": null,
          "created_on": "2019-02-26 16:02:12",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": "Daru Jones",
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Daru Jones",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31877,
          "slug": "dave-atkinson",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:20",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:20",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Dave Atkinson",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 220743,
          "slug": "david-frank",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2019-02-19 20:00:00",
          "archived_on": null,
          "created_on": "2019-02-20 14:22:00",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "David Frank",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31966,
          "slug": "david-garibaldi",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:28",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:28",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "David Garibaldi",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31980,
          "slug": "dennis-chambers",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:29",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:29",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Dennis Chambers",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31970,
          "slug": "derek-roddy",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:28",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:28",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Derek Roddy",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 212107,
          "slug": "dom-famularo",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-09-02 19:00:00",
          "archived_on": null,
          "created_on": "2018-09-03 10:27:19",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Dom Famularo",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 234095,
          "slug": "dorothea-taylor",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2019-10-03 12:32:14",
          "archived_on": null,
          "created_on": "2019-10-03 12:32:16",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Dorothea Taylor",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31958,
          "slug": "eric-moore",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:27",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:27",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Eric Moore",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31925,
          "slug": "gabor-dornyei",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:24",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:24",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Gabor Dornyei",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31983,
          "slug": "gavin-harrison",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:29",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:29",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Gavin Harrison",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 196087,
          "slug": "gene-hoglan",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-02-15 20:00:00",
          "archived_on": null,
          "created_on": "2018-02-16 16:53:05",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Gene Hoglan",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 230449,
          "slug": "gil-sharone",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2019-08-02 13:21:05",
          "archived_on": null,
          "created_on": "2019-08-02 13:21:06",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Gil Sharone",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 237359,
          "slug": "glen-sobel",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2019-11-18 11:29:44",
          "archived_on": null,
          "created_on": "2019-11-18 11:29:45",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Glen Sobel",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 232650,
          "slug": "gregg-bissonette",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2019-09-09 08:40:17",
          "archived_on": null,
          "created_on": "2019-09-09 08:40:19",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Gregg Bissonette",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 215078,
          "slug": "harry-miree",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-10-25 19:00:00",
          "archived_on": null,
          "created_on": "2018-10-26 12:00:21",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Harry Miree",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 231920,
          "slug": "heather-thomas",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2019-08-28 11:28:00",
          "archived_on": null,
          "created_on": "2019-08-28 11:28:01",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Heather Thomas",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31887,
          "slug": "issah-contractor",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:21",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:21",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Issah Contractor",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 265155,
          "slug": "jack-thomas",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": "150",
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": true,
          "user": "",
          "published_on": "2020-08-05 10:33:32",
          "archived_on": null,
          "created_on": "2020-08-05 10:33:34",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Jack Thomas",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31880,
          "slug": "jared-falk",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:20",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:20",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Jared Falk",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31977,
          "slug": "jason-sutter",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:29",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:29",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Jason Sutter",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 198474,
          "slug": "jessica-burdeaux",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-03-25 19:00:00",
          "archived_on": null,
          "created_on": "2018-03-26 10:43:53",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Jessica Burdeaux",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31924,
          "slug": "jimmy-rainsford",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:23",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:23",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Jimmy Rainsford",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31978,
          "slug": "john-wooton",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:29",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:29",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "John Wooton",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 208840,
          "slug": "joseph-mintz",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-07-05 19:00:00",
          "archived_on": null,
          "created_on": "2018-07-06 13:19:21",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Joseph Mintz",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31984,
          "slug": "jp-bouvet",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:29",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:29",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "JP Bouvet",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 230446,
          "slug": "juan-mendoza",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2019-08-02 13:04:36",
          "archived_on": null,
          "created_on": "2019-08-02 13:04:37",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Juan Mendoza",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 202289,
          "slug": "kaz-rodriguez",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-04-10 19:00:00",
          "archived_on": null,
          "created_on": "2018-04-11 08:33:21",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Kaz Rodriguez",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 224273,
          "slug": "keith-carlock",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2019-04-29 10:33:41",
          "archived_on": null,
          "created_on": "2019-04-29 10:33:45",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Keith Carlock",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31885,
          "slug": "kyle-radomsky",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:21",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:21",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Kyle Radomsky",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31895,
          "slug": "larnell-lewis",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:21",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:21",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Larnell Lewis",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 220735,
          "slug": "marco-minneman",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2019-02-19 20:00:00",
          "archived_on": null,
          "created_on": "2019-02-20 12:06:54",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Marco Minnemann",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 195923,
          "slug": "mark-guiliana",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-02-07 20:00:00",
          "archived_on": null,
          "created_on": "2018-02-08 13:42:53",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Mark Guiliana",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31982,
          "slug": "matt-johnson",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:29",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:29",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Matt Johnson",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31935,
          "slug": "michael-schack",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:25",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:25",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Michael Schack",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31878,
          "slug": "mike-michalkow",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:20",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:20",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Mike Michalkow",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31894,
          "slug": "murray-creed",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:21",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:21",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Murray Creed",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 203172,
          "slug": "nick-dvirgilio",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-04-26 19:00:00",
          "archived_on": null,
          "created_on": "2018-04-27 16:35:58",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Nick D'Virgilio",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31901,
          "slug": "pat-petrillo",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:22",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:22",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Pat Petrillo",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31967,
          "slug": "pete-lockett",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:28",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:28",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Pete Lockett",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 233364,
          "slug": "raghav-mehrotra",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2019-09-23 13:22:28",
          "archived_on": null,
          "created_on": "2019-09-23 13:22:30",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Raghav Mehrotra",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31981,
          "slug": "randy-cooke",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:29",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:29",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Randy Cooke",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 225962,
          "slug": "rashid-williams",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2019-05-29 10:46:11",
          "archived_on": null,
          "created_on": "2019-05-29 10:46:13",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Rashid Williams",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31913,
          "slug": "reuben-spyker",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:23",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:23",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Reuben Spyker",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31914,
          "slug": "rich-redmond",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:23",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:23",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Rich Redmond",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 203857,
          "slug": "russ-miller",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-05-10 19:00:00",
          "archived_on": null,
          "created_on": "2018-05-11 10:38:34",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Russ Miller",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31904,
          "slug": "scott-pellegrom",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:22",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:22",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Scott Pellegrom",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31884,
          "slug": "sean-lang",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:21",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:21",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Sean Lang",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 198672,
          "slug": "senri-kawaguchi",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-03-29 19:00:00",
          "archived_on": null,
          "created_on": "2018-03-30 18:25:10",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Senri Kawaguchi",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31928,
          "slug": "stanley-randolph",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:24",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:24",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Stanley Randolph",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 239928,
          "slug": "stephane-chamberland",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": "150",
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2019-12-02 11:59:15",
          "archived_on": null,
          "created_on": "2019-12-02 11:59:15",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Stephane Chamberland",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31929,
          "slug": "stephen-taylor",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:24",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:24",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Stephen Taylor",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 220809,
          "slug": "steve-lyman",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2019-02-26 16:02:50",
          "archived_on": null,
          "created_on": "2019-02-22 09:32:06",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": "Steve Lyman",
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Steve Lyman",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 198468,
          "slug": "steven-mcwhirter",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-03-25 19:00:00",
          "archived_on": null,
          "created_on": "2018-03-26 10:16:44",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Steven McWhirter",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 220629,
          "slug": "taylor-gordon",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2019-02-26 16:02:50",
          "archived_on": null,
          "created_on": "2019-02-17 12:56:34",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": "Taylor Gordon",
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Taylor Gordon",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31973,
          "slug": "todd-sucherman",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-13 17:23:28",
          "archived_on": null,
          "created_on": "2017-12-13 17:23:28",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Todd Sucherman",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 220741,
          "slug": "tony-coleman",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2019-02-19 20:00:00",
          "archived_on": null,
          "created_on": "2019-02-20 14:18:48",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Tony Coleman",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        }
      ]
    },
    "activeFilters": {
      "content_type": [
        "quick-tips"
      ]
    },
    "pagination": {
      "total": 186,
      "count": 20,
      "per_page": "20",
      "current_page": "4",
      "total_pages": 10
    }
  },
  "links": []
}
EOT;
// -->
@endphp

@section('app')
    <div class="container w-full h-full mx-auto px-3 pt-4">
        <content-row
            content-list='{{ $rc1 }}'
            section-title="continue"
            section-url="#"
        ></content-row>
    </div>

    <shows-content
        preload-data='{{ $rc1 }}'
        infinite-scroll
        use-progress-filters
    ></shows-content>
@endsection