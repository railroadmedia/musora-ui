@extends('musora-ui::vue.layout')

@section('musora-ui::title', 'Members - Profile My List')

@section('musora-ui::menu')
    @include('musora-ui::sections.menu')
    @include('sections.profile-nav', ['active' => 'my list'])
@endsection

@php
// <!--
$rc1 = <<<'EOT'
{
  "data": [
    {
      "type": "content",
      "id": "211819",
      "attributes": {
        "slug": "seventeen-stroke-roll",
        "type": "rudiment",
        "sort": 15,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2018-08-30 21:22:19",
        "archivedOn": null,
        "createdOn": "2018-08-30 21:22:19",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Seventeen Stroke Roll",
        "xp": null,
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
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "69673"
            },
            {
              "type": "contentData",
              "id": "69674"
            },
            {
              "type": "contentData",
              "id": "69675"
            },
            {
              "type": "contentData",
              "id": "140455"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "4134"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2110"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "1237"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "211821",
      "attributes": {
        "slug": "fifteen-stroke-roll",
        "type": "rudiment",
        "sort": 14,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2018-08-30 21:22:21",
        "archivedOn": null,
        "createdOn": "2018-08-30 21:22:21",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Fifteen Stroke Roll",
        "xp": null,
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
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "69676"
            },
            {
              "type": "contentData",
              "id": "69677"
            },
            {
              "type": "contentData",
              "id": "69678"
            },
            {
              "type": "contentData",
              "id": "140454"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "4133"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2109"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "1236"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "211823",
      "attributes": {
        "slug": "thirteen-stroke-roll",
        "type": "rudiment",
        "sort": 13,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2018-08-30 21:22:23",
        "archivedOn": null,
        "createdOn": "2018-08-30 21:22:23",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Thirteen Stroke Roll",
        "xp": null,
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
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "69679"
            },
            {
              "type": "contentData",
              "id": "69680"
            },
            {
              "type": "contentData",
              "id": "69681"
            },
            {
              "type": "contentData",
              "id": "140453"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "4132"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2108"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "1235"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "211825",
      "attributes": {
        "slug": "eleven-stroke-roll",
        "type": "rudiment",
        "sort": 12,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2018-08-30 21:22:25",
        "archivedOn": null,
        "createdOn": "2018-08-30 21:22:25",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Eleven Stroke Roll",
        "xp": null,
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
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "69682"
            },
            {
              "type": "contentData",
              "id": "69683"
            },
            {
              "type": "contentData",
              "id": "69684"
            },
            {
              "type": "contentData",
              "id": "140452"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "4131"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2107"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "1234"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "211827",
      "attributes": {
        "slug": "ten-stroke-roll",
        "type": "rudiment",
        "sort": 11,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2018-08-30 21:22:27",
        "archivedOn": null,
        "createdOn": "2018-08-30 21:22:27",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Ten Stroke Roll",
        "xp": null,
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
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "69685"
            },
            {
              "type": "contentData",
              "id": "69686"
            },
            {
              "type": "contentData",
              "id": "69687"
            },
            {
              "type": "contentData",
              "id": "140451"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "4130"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2106"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "1233"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "211829",
      "attributes": {
        "slug": "nine-stroke-roll",
        "type": "rudiment",
        "sort": 10,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2018-08-30 21:22:29",
        "archivedOn": null,
        "createdOn": "2018-08-30 21:22:29",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Nine Stroke Roll",
        "xp": null,
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
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "69688"
            },
            {
              "type": "contentData",
              "id": "69689"
            },
            {
              "type": "contentData",
              "id": "69690"
            },
            {
              "type": "contentData",
              "id": "140450"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "4129"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2105"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "1232"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "211831",
      "attributes": {
        "slug": "seven-stroke-roll",
        "type": "rudiment",
        "sort": 9,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2018-08-30 21:22:31",
        "archivedOn": null,
        "createdOn": "2018-08-30 21:22:31",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Seven Stroke Roll",
        "xp": null,
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
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "69691"
            },
            {
              "type": "contentData",
              "id": "69692"
            },
            {
              "type": "contentData",
              "id": "69693"
            },
            {
              "type": "contentData",
              "id": "140449"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "4128"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2104"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "1231"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "211833",
      "attributes": {
        "slug": "six-stroke-roll",
        "type": "rudiment",
        "sort": 8,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2018-08-30 21:22:32",
        "archivedOn": null,
        "createdOn": "2018-08-30 21:22:32",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Six Stroke Roll",
        "xp": null,
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
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "69694"
            },
            {
              "type": "contentData",
              "id": "69695"
            },
            {
              "type": "contentData",
              "id": "69696"
            },
            {
              "type": "contentData",
              "id": "140448"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "4127"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2103"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "1230"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "211835",
      "attributes": {
        "slug": "five-stroke-roll",
        "type": "rudiment",
        "sort": 7,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2018-08-30 21:22:34",
        "archivedOn": null,
        "createdOn": "2018-08-30 21:22:34",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Five Stroke Roll",
        "xp": null,
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
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "69697"
            },
            {
              "type": "contentData",
              "id": "69698"
            },
            {
              "type": "contentData",
              "id": "69699"
            },
            {
              "type": "contentData",
              "id": "140447"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "4126"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2102"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "1229"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "211837",
      "attributes": {
        "slug": "triple-stroke-roll",
        "type": "rudiment",
        "sort": 6,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2018-08-30 21:22:36",
        "archivedOn": null,
        "createdOn": "2018-08-30 21:22:36",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Triple Stroke Roll",
        "xp": null,
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
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "69700"
            },
            {
              "type": "contentData",
              "id": "69701"
            },
            {
              "type": "contentData",
              "id": "69702"
            },
            {
              "type": "contentData",
              "id": "140446"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "4125"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2101"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "1228"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "211839",
      "attributes": {
        "slug": "double-stroke-roll",
        "type": "rudiment",
        "sort": 5,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2018-08-30 21:22:38",
        "archivedOn": null,
        "createdOn": "2018-08-30 21:22:38",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Double Stroke Roll",
        "xp": null,
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
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "69703"
            },
            {
              "type": "contentData",
              "id": "69704"
            },
            {
              "type": "contentData",
              "id": "69705"
            },
            {
              "type": "contentData",
              "id": "140445"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "4124"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2100"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "1227"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "211841",
      "attributes": {
        "slug": "multiple-bounce-roll",
        "type": "rudiment",
        "sort": 4,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2018-08-30 21:22:40",
        "archivedOn": null,
        "createdOn": "2018-08-30 21:22:40",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Multiple Bounce Roll",
        "xp": null,
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
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "69706"
            },
            {
              "type": "contentData",
              "id": "69707"
            },
            {
              "type": "contentData",
              "id": "69708"
            },
            {
              "type": "contentData",
              "id": "140444"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "4123"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2099"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "1226"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "211843",
      "attributes": {
        "slug": "single-stroke-seven",
        "type": "rudiment",
        "sort": 3,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2018-08-30 21:22:44",
        "archivedOn": null,
        "createdOn": "2018-08-30 21:22:44",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Single Stroke Seven",
        "xp": null,
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
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "69709"
            },
            {
              "type": "contentData",
              "id": "69710"
            },
            {
              "type": "contentData",
              "id": "69711"
            },
            {
              "type": "contentData",
              "id": "140443"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "4122"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2098"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "1225"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "211845",
      "attributes": {
        "slug": "swiss-army-triplet",
        "type": "rudiment",
        "sort": 30,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2018-08-30 21:22:46",
        "archivedOn": null,
        "createdOn": "2018-08-30 21:22:46",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Swiss Army Triplet",
        "xp": null,
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
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "69712"
            },
            {
              "type": "contentData",
              "id": "69714"
            },
            {
              "type": "contentData",
              "id": "140442"
            },
            {
              "type": "contentData",
              "id": "140456"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "4121"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2097"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "1224"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "211847",
      "attributes": {
        "slug": "flam-drag",
        "type": "rudiment",
        "sort": 29,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2018-08-30 21:22:48",
        "archivedOn": null,
        "createdOn": "2018-08-30 21:22:48",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Flam Drag",
        "xp": null,
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
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "69715"
            },
            {
              "type": "contentData",
              "id": "69716"
            },
            {
              "type": "contentData",
              "id": "69717"
            },
            {
              "type": "contentData",
              "id": "140441"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "4120"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2096"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "1223"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "211849",
      "attributes": {
        "slug": "pataflafla",
        "type": "rudiment",
        "sort": 28,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2018-08-30 21:22:50",
        "archivedOn": null,
        "createdOn": "2018-08-30 21:22:50",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Pataflafla",
        "xp": null,
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
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "69718"
            },
            {
              "type": "contentData",
              "id": "69719"
            },
            {
              "type": "contentData",
              "id": "69720"
            },
            {
              "type": "contentData",
              "id": "140440"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "4119"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2095"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "1222"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "211851",
      "attributes": {
        "slug": "inverted-flam-tap",
        "type": "rudiment",
        "sort": 27,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2018-08-30 21:22:52",
        "archivedOn": null,
        "createdOn": "2018-08-30 21:22:52",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Inverted Flam Tap",
        "xp": null,
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
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "69721"
            },
            {
              "type": "contentData",
              "id": "69722"
            },
            {
              "type": "contentData",
              "id": "69723"
            },
            {
              "type": "contentData",
              "id": "140439"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "4118"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2094"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "1221"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "211853",
      "attributes": {
        "slug": "flam-paradiddle-diddle",
        "type": "rudiment",
        "sort": 26,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2018-08-30 21:22:54",
        "archivedOn": null,
        "createdOn": "2018-08-30 21:22:54",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Flam Paradiddle-Diddle",
        "xp": null,
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
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "69724"
            },
            {
              "type": "contentData",
              "id": "69725"
            },
            {
              "type": "contentData",
              "id": "69726"
            },
            {
              "type": "contentData",
              "id": "140438"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "4117"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2093"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "1220"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "211855",
      "attributes": {
        "slug": "flam-paradiddle",
        "type": "rudiment",
        "sort": 25,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2018-08-30 21:22:56",
        "archivedOn": null,
        "createdOn": "2018-08-30 21:22:56",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Flam Paradiddle",
        "xp": null,
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
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "69727"
            },
            {
              "type": "contentData",
              "id": "69728"
            },
            {
              "type": "contentData",
              "id": "69729"
            },
            {
              "type": "contentData",
              "id": "140437"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "4116"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2092"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "1219"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "211857",
      "attributes": {
        "slug": "flamacue",
        "type": "rudiment",
        "sort": 24,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2018-08-30 21:22:59",
        "archivedOn": null,
        "createdOn": "2018-08-30 21:22:59",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Flamacue",
        "xp": null,
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
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "69730"
            },
            {
              "type": "contentData",
              "id": "69731"
            },
            {
              "type": "contentData",
              "id": "69732"
            },
            {
              "type": "contentData",
              "id": "140436"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "4115"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2091"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "1218"
            }
          ]
        }
      }
    }
  ],
  "included": [
    {
      "type": "instructor",
      "id": "31877",
      "attributes": {
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
      }
    },
    {
      "type": "exercise",
      "id": "213919",
      "attributes": {
        "slug": null,
        "type": null,
        "sort": 0,
        "status": null,
        "total_xp": null,
        "brand": null,
        "language": null,
        "show_in_new_feed": null,
        "user": "",
        "published_on": null,
        "archived_on": null,
        "created_on": null,
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
        "includes_song": false,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": null,
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
      "type": "exercise",
      "id": "213918",
      "attributes": {
        "slug": null,
        "type": null,
        "sort": 0,
        "status": null,
        "total_xp": null,
        "brand": null,
        "language": null,
        "show_in_new_feed": null,
        "user": "",
        "published_on": null,
        "archived_on": null,
        "created_on": null,
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
        "includes_song": false,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": null,
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
      "type": "exercise",
      "id": "213917",
      "attributes": {
        "slug": null,
        "type": null,
        "sort": 0,
        "status": null,
        "total_xp": null,
        "brand": null,
        "language": null,
        "show_in_new_feed": null,
        "user": "",
        "published_on": null,
        "archived_on": null,
        "created_on": null,
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
        "includes_song": false,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": null,
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
      "type": "exercise",
      "id": "213916",
      "attributes": {
        "slug": null,
        "type": null,
        "sort": 0,
        "status": null,
        "total_xp": null,
        "brand": null,
        "language": null,
        "show_in_new_feed": null,
        "user": "",
        "published_on": null,
        "archived_on": null,
        "created_on": null,
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
        "includes_song": false,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": null,
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
      "type": "exercise",
      "id": "213913",
      "attributes": {
        "slug": null,
        "type": null,
        "sort": 0,
        "status": null,
        "total_xp": null,
        "brand": null,
        "language": null,
        "show_in_new_feed": null,
        "user": "",
        "published_on": null,
        "archived_on": null,
        "created_on": null,
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
        "includes_song": false,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": null,
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
      "type": "exercise",
      "id": "213912",
      "attributes": {
        "slug": null,
        "type": null,
        "sort": 0,
        "status": null,
        "total_xp": null,
        "brand": null,
        "language": null,
        "show_in_new_feed": null,
        "user": "",
        "published_on": null,
        "archived_on": null,
        "created_on": null,
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
        "includes_song": false,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": null,
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
      "type": "exercise",
      "id": "213911",
      "attributes": {
        "slug": null,
        "type": null,
        "sort": 0,
        "status": null,
        "total_xp": null,
        "brand": null,
        "language": null,
        "show_in_new_feed": null,
        "user": "",
        "published_on": null,
        "archived_on": null,
        "created_on": null,
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
        "includes_song": false,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": null,
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
      "type": "exercise",
      "id": "213910",
      "attributes": {
        "slug": null,
        "type": null,
        "sort": 0,
        "status": null,
        "total_xp": null,
        "brand": null,
        "language": null,
        "show_in_new_feed": null,
        "user": "",
        "published_on": null,
        "archived_on": null,
        "created_on": null,
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
        "includes_song": false,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": null,
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
      "type": "exercise",
      "id": "213909",
      "attributes": {
        "slug": null,
        "type": null,
        "sort": 0,
        "status": null,
        "total_xp": null,
        "brand": null,
        "language": null,
        "show_in_new_feed": null,
        "user": "",
        "published_on": null,
        "archived_on": null,
        "created_on": null,
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
        "includes_song": false,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": null,
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
      "type": "exercise",
      "id": "213908",
      "attributes": {
        "slug": null,
        "type": null,
        "sort": 0,
        "status": null,
        "total_xp": null,
        "brand": null,
        "language": null,
        "show_in_new_feed": null,
        "user": "",
        "published_on": null,
        "archived_on": null,
        "created_on": null,
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
        "includes_song": false,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": null,
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
      "type": "exercise",
      "id": "213907",
      "attributes": {
        "slug": null,
        "type": null,
        "sort": 0,
        "status": null,
        "total_xp": null,
        "brand": null,
        "language": null,
        "show_in_new_feed": null,
        "user": "",
        "published_on": null,
        "archived_on": null,
        "created_on": null,
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
        "includes_song": false,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": null,
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
      "type": "exercise",
      "id": "213906",
      "attributes": {
        "slug": null,
        "type": null,
        "sort": 0,
        "status": null,
        "total_xp": null,
        "brand": null,
        "language": null,
        "show_in_new_feed": null,
        "user": "",
        "published_on": null,
        "archived_on": null,
        "created_on": null,
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
        "includes_song": false,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": null,
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
      "type": "exercise",
      "id": "213905",
      "attributes": {
        "slug": null,
        "type": null,
        "sort": 0,
        "status": null,
        "total_xp": null,
        "brand": null,
        "language": null,
        "show_in_new_feed": null,
        "user": "",
        "published_on": null,
        "archived_on": null,
        "created_on": null,
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
        "includes_song": false,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": null,
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
      "type": "exercise",
      "id": "213904",
      "attributes": {
        "slug": null,
        "type": null,
        "sort": 0,
        "status": null,
        "total_xp": null,
        "brand": null,
        "language": null,
        "show_in_new_feed": null,
        "user": "",
        "published_on": null,
        "archived_on": null,
        "created_on": null,
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
        "includes_song": false,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": null,
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
      "type": "exercise",
      "id": "213903",
      "attributes": {
        "slug": null,
        "type": null,
        "sort": 0,
        "status": null,
        "total_xp": null,
        "brand": null,
        "language": null,
        "show_in_new_feed": null,
        "user": "",
        "published_on": null,
        "archived_on": null,
        "created_on": null,
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
        "includes_song": false,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": null,
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
      "type": "exercise",
      "id": "213902",
      "attributes": {
        "slug": null,
        "type": null,
        "sort": 0,
        "status": null,
        "total_xp": null,
        "brand": null,
        "language": null,
        "show_in_new_feed": null,
        "user": "",
        "published_on": null,
        "archived_on": null,
        "created_on": null,
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
        "includes_song": false,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": null,
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
      "type": "exercise",
      "id": "213901",
      "attributes": {
        "slug": null,
        "type": null,
        "sort": 0,
        "status": null,
        "total_xp": null,
        "brand": null,
        "language": null,
        "show_in_new_feed": null,
        "user": "",
        "published_on": null,
        "archived_on": null,
        "created_on": null,
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
        "includes_song": false,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": null,
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
      "type": "exercise",
      "id": "213900",
      "attributes": {
        "slug": null,
        "type": null,
        "sort": 0,
        "status": null,
        "total_xp": null,
        "brand": null,
        "language": null,
        "show_in_new_feed": null,
        "user": "",
        "published_on": null,
        "archived_on": null,
        "created_on": null,
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
        "includes_song": false,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": null,
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
      "type": "exercise",
      "id": "213899",
      "attributes": {
        "slug": null,
        "type": null,
        "sort": 0,
        "status": null,
        "total_xp": null,
        "brand": null,
        "language": null,
        "show_in_new_feed": null,
        "user": "",
        "published_on": null,
        "archived_on": null,
        "created_on": null,
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
        "includes_song": false,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": null,
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
      "type": "exercise",
      "id": "213898",
      "attributes": {
        "slug": null,
        "type": null,
        "sort": 0,
        "status": null,
        "total_xp": null,
        "brand": null,
        "language": null,
        "show_in_new_feed": null,
        "user": "",
        "published_on": null,
        "archived_on": null,
        "created_on": null,
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
        "includes_song": false,
        "instructors": null,
        "live_event_start_time": null,
        "live_event_end_time": null,
        "live_event_youtube_id": null,
        "live_stream_feed_type": null,
        "name": null,
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
      "id": "69673",
      "attributes": {
        "key": "description",
        "value": "The seventeen stroke roll is the longest roll-based drum rudiment. As with the five stroke, seven stroke, nine stroke, eleven stroke, thirteen stroke, and fifteen stroke roll - this rudiment is based on double stroke ending with one single stroke. Like these other rudiments, it's great for a wide variety of drum fills and solo patterns.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69674",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211819-card-thumbnail-1593033391.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69675",
      "attributes": {
        "key": "sheet_music_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/seventeen-stroke-roll.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "140455",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211819-card-thumbnail-maxres-1593033384.png",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "4134",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31877"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2110",
      "attributes": {
        "topic": "Rolls",
        "position": 1
      }
    },
    {
      "type": "exercise",
      "id": "1237",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "213919"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "69676",
      "attributes": {
        "key": "description",
        "value": "The fifteen stroke roll is a longer rudiment that combines double strokes with one single stroke at the end. In this way, it follows the structure of the five stroke roll, seven stroke roll, nine stroke roll, eleven stroke roll, and thirteen stroke roll. However, it is still a unique and necessary rudiment to practice, as it can be used in a variety of different ways.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69677",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211821-card-thumbnail-1593033374.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69678",
      "attributes": {
        "key": "sheet_music_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/fifteen-stroke-roll.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "140454",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211821-card-thumbnail-maxres-1593033368.png",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "4133",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31877"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2109",
      "attributes": {
        "topic": "Rolls",
        "position": 1
      }
    },
    {
      "type": "exercise",
      "id": "1236",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "213918"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "69679",
      "attributes": {
        "key": "description",
        "value": "The thirteen stroke roll is a less common rudiment that is based around double strokes. As with the five stroke roll, seven stroke roll, nine stroke roll, and eleven stroke roll - this rudiment uses one single stroke to end the odd-number group. It's best incorporated into drum fills and drum solo patterns.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69680",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211823-card-thumbnail-1593033361.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69681",
      "attributes": {
        "key": "sheet_music_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/thirteen-stroke-roll.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "140453",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211823-card-thumbnail-maxres-1593033357.png",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "4132",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31877"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2108",
      "attributes": {
        "topic": "Rolls",
        "position": 1
      }
    },
    {
      "type": "exercise",
      "id": "1235",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "213917"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "69682",
      "attributes": {
        "key": "description",
        "value": "The eleven stroke roll is based almost entirely on double strokes, except that it ends with a single to complete the odd-note group. The structure is very similar to the five stroke roll, seven stroke roll, and nine stroke roll. If you've already practiced those patterns, this will be very straight forward.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69683",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211825-card-thumbnail-1593033350.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69684",
      "attributes": {
        "key": "sheet_music_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/eleven-stroke-roll.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "140452",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211825-card-thumbnail-maxres-1593033347.png",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "4131",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31877"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2107",
      "attributes": {
        "topic": "Rolls",
        "position": 1
      }
    },
    {
      "type": "exercise",
      "id": "1234",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "213916"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "69685",
      "attributes": {
        "key": "description",
        "value": "The ten stroke roll is a drum rudiment that is quite similar to the six stroke roll. Both rudiments combine alternating singles and doubles. The key difference between the two is the number of times that the double strokes are to be alternated.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69686",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211827-card-thumbnail-1593033338.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69687",
      "attributes": {
        "key": "sheet_music_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/ten-stroke-roll.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "140451",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211827-card-thumbnail-maxres-1593033334.png",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "4130",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31877"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2106",
      "attributes": {
        "topic": "Rolls",
        "position": 1
      }
    },
    {
      "type": "exercise",
      "id": "1233",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "213913"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "69688",
      "attributes": {
        "key": "description",
        "value": "The nine stroke roll is very similar to the five stroke roll and seven stroke roll. Like these other two rudiments, the nine stroke roll combines a series of double strokes with one single stroke to create an odd-numbered string of notes. This combination is less popular than the other two rudiments, but it's still a great addition to your drumming arsenal.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69689",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211829-card-thumbnail-1593033326.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69690",
      "attributes": {
        "key": "sheet_music_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/nine-stroke-roll.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "140450",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211829-card-thumbnail-maxres-1593033321.png",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "4129",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31877"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2105",
      "attributes": {
        "topic": "Rolls",
        "position": 1
      }
    },
    {
      "type": "exercise",
      "id": "1232",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "213912"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "69691",
      "attributes": {
        "key": "description",
        "value": "The seven stroke roll uses both single and double strokes. It starts out with three alternating double strokes, and ends with a single stroke. Due to the simplicity of this drum pattern, it is usable in a wide range of playing situations.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69692",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211831-card-thumbnail-1593033314.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69693",
      "attributes": {
        "key": "sheet_music_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/seven-stroke-roll.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "140449",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211831-card-thumbnail-maxres-1593033308.png",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "4128",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31877"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2104",
      "attributes": {
        "topic": "Rolls",
        "position": 1
      }
    },
    {
      "type": "exercise",
      "id": "1231",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "213911"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "69694",
      "attributes": {
        "key": "description",
        "value": "The six stroke roll is a fun rudiment that is a hybrid of the single and double stroke rolls. It starts with two double strokes, then ads two single strokes at half the tempo, and then repeats with the alternate hand leading into the entire pattern. The change from doubles to singles really breaks things up and makes the pattern great for fills around the toms.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69695",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211833-card-thumbnail-1593033299.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69696",
      "attributes": {
        "key": "sheet_music_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/six-stroke-roll.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "140448",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211833-card-thumbnail-maxres-1593033295.png",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "4127",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31877"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2103",
      "attributes": {
        "topic": "Rolls",
        "position": 1
      }
    },
    {
      "type": "exercise",
      "id": "1230",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "213910"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "69697",
      "attributes": {
        "key": "description",
        "value": "The five stroke roll is a powerful rudiment based off the double stroke roll. Unlike the single, double, and triple stroke rolls may suggest - this rudiment does not have alternating groups of five strokes per hand. Instead, it is made up of two double strokes, and a single. You first play it with right hand lead, and then repeat the pattern with left hand lead (or reverse if you are left-handed).",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69698",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211835-card-thumbnail-1593033288.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69699",
      "attributes": {
        "key": "sheet_music_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/five-stroke-roll.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "140447",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211835-card-thumbnail-maxres-1593033285.png",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "4126",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31877"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2102",
      "attributes": {
        "topic": "Rolls",
        "position": 1
      }
    },
    {
      "type": "exercise",
      "id": "1229",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "213909"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "69700",
      "attributes": {
        "key": "description",
        "value": "The triple stroke roll is a powerful drum rudiment for playing a wide variety of musical styles. It is somewhat similar to the double stroke roll, but uses groups of three notes per hand instead of just two, making it popular within Jazz, Latin, and other styles of music that are 'triplet' based.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69701",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211837-card-thumbnail-1593033268.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69702",
      "attributes": {
        "key": "sheet_music_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/triple-stroke-roll.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "140446",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211837-card-thumbnail-maxres-1593033260.png",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "4125",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31877"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2101",
      "attributes": {
        "topic": "Rolls",
        "position": 1
      }
    },
    {
      "type": "exercise",
      "id": "1228",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "213908"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "69703",
      "attributes": {
        "key": "description",
        "value": "The double stroke roll is an extremely popular rudiment that should be practiced to perfection by anyone serious about playing the drums. Not only is it popular for use within beats and fills, but it is also the foundation for many other important drum rudiments.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69704",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211839-card-thumbnail-1593033251.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69705",
      "attributes": {
        "key": "sheet_music_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/double-stroke-roll.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "140445",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211839-card-thumbnail-maxres-1593033247.png",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "4124",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31877"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2100",
      "attributes": {
        "topic": "Rolls",
        "position": 1
      }
    },
    {
      "type": "exercise",
      "id": "1227",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "213907"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "69706",
      "attributes": {
        "key": "description",
        "value": "The multiple bounce roll is a popular drum rudiment that is probably best known for use within a marching band setting, but has been incorporated into modern drumming within creative drum beats, drum fills, and even solos.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69707",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211841-card-thumbnail-1593033241.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69708",
      "attributes": {
        "key": "sheet_music_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/multiple-bounce-roll.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "140444",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211841-card-thumbnail-maxres-1593033236.png",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "4123",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31877"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2099",
      "attributes": {
        "topic": "Rolls",
        "position": 1
      }
    },
    {
      "type": "exercise",
      "id": "1226",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "213906"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "69709",
      "attributes": {
        "key": "description",
        "value": "The single stroke seven is less common than most rudiments, but it is still an excellent pattern to incorporate into your drumming. It is similar to the single stroke roll, but is played in groups of seven strokes (as the name suggests).",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69710",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/40-rudiments/thumbnails/40-rudiments-rolls-thumb.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69711",
      "attributes": {
        "key": "sheet_music_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/single-stroke-seven.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "140443",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211843-card-thumbnail-maxres-1593033124.png",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "4122",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31877"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2098",
      "attributes": {
        "topic": "Rolls",
        "position": 1
      }
    },
    {
      "type": "exercise",
      "id": "1225",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "213905"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "69712",
      "attributes": {
        "key": "description",
        "value": "The swiss army triplet is a unique one-way rudiment that can be played in both right and left hand leads. Unlike most of the other rudiments, this rudiment isn't designed to alternate. Instead, it just loops with either the right or left hand taking the primary roll. This can make it fun for simple beats, or even unique drum fills.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69714",
      "attributes": {
        "key": "sheet_music_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/swiss-army-triplet.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "140442",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211845-card-thumbnail-maxres-1593033108.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "140456",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211845-card-thumbnail-1593033434.png",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "4121",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31877"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2097",
      "attributes": {
        "topic": "Flams",
        "position": 1
      }
    },
    {
      "type": "exercise",
      "id": "1224",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "213904"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "69715",
      "attributes": {
        "key": "description",
        "value": "The flam drag is a unique drum rudiment that alternates flams and drags within the structure of an alternating double stroke roll. With all these unique elements combined, this rudiment becomes a powerful exercise for developing flam strokes, drags, and overall hand coordination.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69716",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211847-card-thumbnail-1593033101.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69717",
      "attributes": {
        "key": "sheet_music_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/flam-drag.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "140441",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211847-card-thumbnail-maxres-1593033097.png",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "4120",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31877"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2096",
      "attributes": {
        "topic": "Flams",
        "position": 1
      }
    },
    {
      "type": "exercise",
      "id": "1223",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "213903"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "69718",
      "attributes": {
        "key": "description",
        "value": "The pataflafla is a unique drum rudiment that is sure to challenge your ability to play flam strokes. It requires that you play back-to-back flams with the same hand. Consider using this rudiment within creative drum fills and solo patterns.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69719",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211849-card-thumbnail-1593033085.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69720",
      "attributes": {
        "key": "sheet_music_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/pataflafla.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "140440",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211849-card-thumbnail-maxres-1593033080.png",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "4119",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31877"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2095",
      "attributes": {
        "topic": "Flams",
        "position": 1
      }
    },
    {
      "type": "exercise",
      "id": "1222",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "213902"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "69721",
      "attributes": {
        "key": "description",
        "value": "The inverted flam tap looks fairly simple, but it can be a little challenging at first. The flam placement doesn't feel very natural, and thus the entire rudiment can feel a little awkward while you are first practicing this. However, once you master the inverted flam tap - you can use it within a wide variety of drum fills and solo patterns.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69722",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211851-card-thumbnail-1593033073.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69723",
      "attributes": {
        "key": "sheet_music_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/inverted-flam-tap.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "140439",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211851-card-thumbnail-maxres-1593033070.png",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "4118",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31877"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2094",
      "attributes": {
        "topic": "Flams",
        "position": 1
      }
    },
    {
      "type": "exercise",
      "id": "1221",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "213901"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "69724",
      "attributes": {
        "key": "description",
        "value": "The flam paradiddle-diddle is a combination of the single paradiddle-diddle and the flam stroke. This rudiment is great for use within a variety of drumming styles. Try implementing it into a beat that already makes use of the basic paradiddle-diddle, by adding in a flam stroke from time to time.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69725",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211853-card-thumbnail-1593033062.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69726",
      "attributes": {
        "key": "sheet_music_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/flam-paradiddle-diddle.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "140438",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211853-card-thumbnail-maxres-1593033059.png",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "4117",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31877"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2093",
      "attributes": {
        "topic": "Flams",
        "position": 1
      }
    },
    {
      "type": "exercise",
      "id": "1220",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "213900"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "69727",
      "attributes": {
        "key": "description",
        "value": "The flam paradiddle is a powerful rudiment that adds flam strokes into the basic single paradiddle. It's great for use within beats, fills, and especially creative solo patterns. You can implement it directly, or use it in conjunction with the single paradiddle or the single flammed mill.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69728",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211855-card-thumbnail-1593033053.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69729",
      "attributes": {
        "key": "sheet_music_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/flam-paradiddle.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "140437",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211855-card-thumbnail-maxres-1593033050.png",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "4116",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31877"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2092",
      "attributes": {
        "topic": "Flams",
        "position": 1
      }
    },
    {
      "type": "exercise",
      "id": "1219",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "213899"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "69730",
      "attributes": {
        "key": "description",
        "value": "The flamacue is a powerful drum rudiment that incorporates the flam stroke into a partial single stroke roll. It is to be practiced with both right and left hand leads alternating back and forth. This will give you more options for creativity when using the flamacue within drum beats, fills, and solo patterns.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69731",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211857-card-thumbnail-1593033043.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "69732",
      "attributes": {
        "key": "sheet_music_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/40-rudiments/notation/card/flamacue.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "140436",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/211857-card-thumbnail-maxres-1593033040.png",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "4115",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31877"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "2091",
      "attributes": {
        "topic": "Flams",
        "position": 1
      }
    },
    {
      "type": "exercise",
      "id": "1218",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "213898"
          }
        }
      }
    }
  ],
  "meta": {
    "filterOptions": {
      "content_type": [
        "rudiment"
      ],
      "topic": [
        "my list",
        "in progress",
        "complete"
      ],
      "content-type": [
        "courses",
        "drumeo method",
        "songs",
        "play-alongs",
        "rudiments",
        "student focus",
        "show - live",
        "show - quick tips",
        "show - bootcamps",
        "show - other"
      ]
    },
    "pagination": {
      "total": 40,
      "count": 20,
      "per_page": "20",
      "current_page": "1",
      "total_pages": 3
    }
  },
  "links": []
}
EOT;
// -->
@endphp

@section('musora-ui::app')
    <my-list-content
        preload-data='{{ $rc1 }}'
        topics-filters-title='choose your list'
        infinite-scroll
    ></my-list-content>
@endsection
