@extends('vue.layout')

@section('title', 'Members - Edge')

@section('menu')
    @include('sections.menu', ['active' => 'edge'])
    @include('sections.edge-nav', ['active' => 'courses'])
@endsection

@php
// <!--
$rc1 = <<<'EOT'
{
  "data": [
    {
      "type": "content",
      "id": "20516",
      "attributes": {
        "slug": "single-stroke-roll",
        "type": "course",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-02-17 10:56:35",
        "archivedOn": null,
        "createdOn": "2014-02-17 10:56:35",
        "difficulty": "4",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 20516,
        "qnaVideo": null,
        "style": null,
        "title": "Single Stroke Roll",
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
              "id": "2570"
            },
            {
              "type": "contentData",
              "id": "12128"
            },
            {
              "type": "contentData",
              "id": "41626"
            },
            {
              "type": "contentData",
              "id": "41627"
            },
            {
              "type": "contentData",
              "id": "41628"
            },
            {
              "type": "contentData",
              "id": "41629"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7037"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5969"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78976"
            },
            {
              "type": "tag",
              "id": "78977"
            },
            {
              "type": "tag",
              "id": "78978"
            },
            {
              "type": "tag",
              "id": "78979"
            },
            {
              "type": "tag",
              "id": "78980"
            },
            {
              "type": "tag",
              "id": "78981"
            },
            {
              "type": "tag",
              "id": "78982"
            },
            {
              "type": "tag",
              "id": "78983"
            },
            {
              "type": "tag",
              "id": "78984"
            },
            {
              "type": "tag",
              "id": "78985"
            },
            {
              "type": "tag",
              "id": "78986"
            },
            {
              "type": "tag",
              "id": "78987"
            },
            {
              "type": "tag",
              "id": "78988"
            },
            {
              "type": "tag",
              "id": "78989"
            },
            {
              "type": "tag",
              "id": "78990"
            },
            {
              "type": "tag",
              "id": "78991"
            },
            {
              "type": "tag",
              "id": "78992"
            },
            {
              "type": "tag",
              "id": "78993"
            },
            {
              "type": "tag",
              "id": "78994"
            },
            {
              "type": "tag",
              "id": "78995"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20522",
      "attributes": {
        "slug": "01-introduction-21",
        "type": "course-part",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-02-17 13:11:05",
        "archivedOn": null,
        "createdOn": "2014-02-17 13:11:05",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 20522,
        "qnaVideo": null,
        "style": null,
        "title": "Introduction",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": "90",
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": "60",
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
              "id": "2571"
            },
            {
              "type": "contentData",
              "id": "12130"
            },
            {
              "type": "contentData",
              "id": "23716"
            },
            {
              "type": "contentData",
              "id": "23718"
            },
            {
              "type": "contentData",
              "id": "23719"
            },
            {
              "type": "contentData",
              "id": "23720"
            },
            {
              "type": "contentData",
              "id": "23722"
            },
            {
              "type": "contentData",
              "id": "23723"
            },
            {
              "type": "contentData",
              "id": "23724"
            },
            {
              "type": "contentData",
              "id": "23726"
            },
            {
              "type": "contentData",
              "id": "23727"
            },
            {
              "type": "contentData",
              "id": "23728"
            },
            {
              "type": "contentData",
              "id": "23730"
            },
            {
              "type": "contentData",
              "id": "23731"
            },
            {
              "type": "contentData",
              "id": "43638"
            },
            {
              "type": "contentData",
              "id": "43639"
            },
            {
              "type": "contentData",
              "id": "43640"
            },
            {
              "type": "contentData",
              "id": "43641"
            },
            {
              "type": "contentData",
              "id": "72500"
            },
            {
              "type": "contentData",
              "id": "85754"
            },
            {
              "type": "contentData",
              "id": "85755"
            },
            {
              "type": "contentData",
              "id": "85756"
            },
            {
              "type": "contentData",
              "id": "85757"
            },
            {
              "type": "contentData",
              "id": "85758"
            },
            {
              "type": "contentData",
              "id": "85759"
            },
            {
              "type": "contentData",
              "id": "85760"
            },
            {
              "type": "contentData",
              "id": "85761"
            },
            {
              "type": "contentData",
              "id": "145899"
            },
            {
              "type": "contentData",
              "id": "145900"
            },
            {
              "type": "contentData",
              "id": "145901"
            },
            {
              "type": "contentData",
              "id": "145902"
            },
            {
              "type": "contentData",
              "id": "145903"
            },
            {
              "type": "contentData",
              "id": "145904"
            },
            {
              "type": "contentData",
              "id": "145905"
            },
            {
              "type": "contentData",
              "id": "145906"
            },
            {
              "type": "contentData",
              "id": "145907"
            },
            {
              "type": "contentData",
              "id": "145908"
            },
            {
              "type": "contentData",
              "id": "145909"
            },
            {
              "type": "contentData",
              "id": "145910"
            },
            {
              "type": "contentData",
              "id": "145911"
            },
            {
              "type": "contentData",
              "id": "145912"
            },
            {
              "type": "contentData",
              "id": "145913"
            },
            {
              "type": "contentData",
              "id": "145914"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78963"
            },
            {
              "type": "tag",
              "id": "78964"
            },
            {
              "type": "tag",
              "id": "78965"
            },
            {
              "type": "tag",
              "id": "78966"
            },
            {
              "type": "tag",
              "id": "78967"
            },
            {
              "type": "tag",
              "id": "78968"
            },
            {
              "type": "tag",
              "id": "78969"
            },
            {
              "type": "tag",
              "id": "78970"
            },
            {
              "type": "tag",
              "id": "78971"
            },
            {
              "type": "tag",
              "id": "78972"
            },
            {
              "type": "tag",
              "id": "78973"
            },
            {
              "type": "tag",
              "id": "78974"
            },
            {
              "type": "tag",
              "id": "78975"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "741"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20548",
      "attributes": {
        "slug": "02-speed-control",
        "type": "course-part",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-02-18 11:12:55",
        "archivedOn": null,
        "createdOn": "2014-02-18 11:12:55",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 20548,
        "qnaVideo": null,
        "style": null,
        "title": "Speed & Control",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": "120",
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": "60",
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
              "id": "2572"
            },
            {
              "type": "contentData",
              "id": "12155"
            },
            {
              "type": "contentData",
              "id": "23732"
            },
            {
              "type": "contentData",
              "id": "23734"
            },
            {
              "type": "contentData",
              "id": "23735"
            },
            {
              "type": "contentData",
              "id": "23736"
            },
            {
              "type": "contentData",
              "id": "23738"
            },
            {
              "type": "contentData",
              "id": "23739"
            },
            {
              "type": "contentData",
              "id": "23740"
            },
            {
              "type": "contentData",
              "id": "23742"
            },
            {
              "type": "contentData",
              "id": "23743"
            },
            {
              "type": "contentData",
              "id": "23744"
            },
            {
              "type": "contentData",
              "id": "23746"
            },
            {
              "type": "contentData",
              "id": "23747"
            },
            {
              "type": "contentData",
              "id": "23748"
            },
            {
              "type": "contentData",
              "id": "23750"
            },
            {
              "type": "contentData",
              "id": "23751"
            },
            {
              "type": "contentData",
              "id": "43634"
            },
            {
              "type": "contentData",
              "id": "43635"
            },
            {
              "type": "contentData",
              "id": "43636"
            },
            {
              "type": "contentData",
              "id": "43637"
            },
            {
              "type": "contentData",
              "id": "72496"
            },
            {
              "type": "contentData",
              "id": "85881"
            },
            {
              "type": "contentData",
              "id": "85882"
            },
            {
              "type": "contentData",
              "id": "85883"
            },
            {
              "type": "contentData",
              "id": "85884"
            },
            {
              "type": "contentData",
              "id": "85885"
            },
            {
              "type": "contentData",
              "id": "85886"
            },
            {
              "type": "contentData",
              "id": "85887"
            },
            {
              "type": "contentData",
              "id": "85888"
            },
            {
              "type": "contentData",
              "id": "85889"
            },
            {
              "type": "contentData",
              "id": "85890"
            },
            {
              "type": "contentData",
              "id": "145879"
            },
            {
              "type": "contentData",
              "id": "145880"
            },
            {
              "type": "contentData",
              "id": "145881"
            },
            {
              "type": "contentData",
              "id": "145882"
            },
            {
              "type": "contentData",
              "id": "145883"
            },
            {
              "type": "contentData",
              "id": "145884"
            },
            {
              "type": "contentData",
              "id": "145885"
            },
            {
              "type": "contentData",
              "id": "145886"
            },
            {
              "type": "contentData",
              "id": "145887"
            },
            {
              "type": "contentData",
              "id": "145888"
            },
            {
              "type": "contentData",
              "id": "145889"
            },
            {
              "type": "contentData",
              "id": "145890"
            },
            {
              "type": "contentData",
              "id": "145891"
            },
            {
              "type": "contentData",
              "id": "145892"
            },
            {
              "type": "contentData",
              "id": "145893"
            },
            {
              "type": "contentData",
              "id": "145894"
            },
            {
              "type": "contentData",
              "id": "145895"
            },
            {
              "type": "contentData",
              "id": "145896"
            },
            {
              "type": "contentData",
              "id": "145897"
            },
            {
              "type": "contentData",
              "id": "145898"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78857"
            },
            {
              "type": "tag",
              "id": "78858"
            },
            {
              "type": "tag",
              "id": "78859"
            },
            {
              "type": "tag",
              "id": "78860"
            },
            {
              "type": "tag",
              "id": "78861"
            },
            {
              "type": "tag",
              "id": "78862"
            },
            {
              "type": "tag",
              "id": "78863"
            },
            {
              "type": "tag",
              "id": "78864"
            },
            {
              "type": "tag",
              "id": "78865"
            },
            {
              "type": "tag",
              "id": "78866"
            },
            {
              "type": "tag",
              "id": "78867"
            },
            {
              "type": "tag",
              "id": "78868"
            },
            {
              "type": "tag",
              "id": "78869"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "742"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20550",
      "attributes": {
        "slug": "03-application-beats",
        "type": "course-part",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-02-18 11:43:26",
        "archivedOn": null,
        "createdOn": "2014-02-18 11:43:26",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 20550,
        "qnaVideo": null,
        "style": null,
        "title": "Application - Beats",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": "90",
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": "60",
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
              "id": "2573"
            },
            {
              "type": "contentData",
              "id": "12157"
            },
            {
              "type": "contentData",
              "id": "23752"
            },
            {
              "type": "contentData",
              "id": "23754"
            },
            {
              "type": "contentData",
              "id": "23755"
            },
            {
              "type": "contentData",
              "id": "23756"
            },
            {
              "type": "contentData",
              "id": "23758"
            },
            {
              "type": "contentData",
              "id": "23759"
            },
            {
              "type": "contentData",
              "id": "23760"
            },
            {
              "type": "contentData",
              "id": "23762"
            },
            {
              "type": "contentData",
              "id": "23763"
            },
            {
              "type": "contentData",
              "id": "23764"
            },
            {
              "type": "contentData",
              "id": "23766"
            },
            {
              "type": "contentData",
              "id": "23767"
            },
            {
              "type": "contentData",
              "id": "23768"
            },
            {
              "type": "contentData",
              "id": "23770"
            },
            {
              "type": "contentData",
              "id": "23771"
            },
            {
              "type": "contentData",
              "id": "43630"
            },
            {
              "type": "contentData",
              "id": "43631"
            },
            {
              "type": "contentData",
              "id": "43632"
            },
            {
              "type": "contentData",
              "id": "43633"
            },
            {
              "type": "contentData",
              "id": "72495"
            },
            {
              "type": "contentData",
              "id": "85901"
            },
            {
              "type": "contentData",
              "id": "85902"
            },
            {
              "type": "contentData",
              "id": "85903"
            },
            {
              "type": "contentData",
              "id": "85904"
            },
            {
              "type": "contentData",
              "id": "85905"
            },
            {
              "type": "contentData",
              "id": "85906"
            },
            {
              "type": "contentData",
              "id": "85907"
            },
            {
              "type": "contentData",
              "id": "85908"
            },
            {
              "type": "contentData",
              "id": "85909"
            },
            {
              "type": "contentData",
              "id": "85910"
            },
            {
              "type": "contentData",
              "id": "145859"
            },
            {
              "type": "contentData",
              "id": "145860"
            },
            {
              "type": "contentData",
              "id": "145861"
            },
            {
              "type": "contentData",
              "id": "145862"
            },
            {
              "type": "contentData",
              "id": "145863"
            },
            {
              "type": "contentData",
              "id": "145864"
            },
            {
              "type": "contentData",
              "id": "145865"
            },
            {
              "type": "contentData",
              "id": "145866"
            },
            {
              "type": "contentData",
              "id": "145867"
            },
            {
              "type": "contentData",
              "id": "145868"
            },
            {
              "type": "contentData",
              "id": "145869"
            },
            {
              "type": "contentData",
              "id": "145870"
            },
            {
              "type": "contentData",
              "id": "145871"
            },
            {
              "type": "contentData",
              "id": "145872"
            },
            {
              "type": "contentData",
              "id": "145873"
            },
            {
              "type": "contentData",
              "id": "145874"
            },
            {
              "type": "contentData",
              "id": "145875"
            },
            {
              "type": "contentData",
              "id": "145876"
            },
            {
              "type": "contentData",
              "id": "145877"
            },
            {
              "type": "contentData",
              "id": "145878"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78840"
            },
            {
              "type": "tag",
              "id": "78841"
            },
            {
              "type": "tag",
              "id": "78842"
            },
            {
              "type": "tag",
              "id": "78843"
            },
            {
              "type": "tag",
              "id": "78844"
            },
            {
              "type": "tag",
              "id": "78845"
            },
            {
              "type": "tag",
              "id": "78846"
            },
            {
              "type": "tag",
              "id": "78847"
            },
            {
              "type": "tag",
              "id": "78848"
            },
            {
              "type": "tag",
              "id": "78849"
            },
            {
              "type": "tag",
              "id": "78850"
            },
            {
              "type": "tag",
              "id": "78851"
            },
            {
              "type": "tag",
              "id": "78852"
            },
            {
              "type": "tag",
              "id": "78853"
            },
            {
              "type": "tag",
              "id": "78854"
            },
            {
              "type": "tag",
              "id": "78855"
            },
            {
              "type": "tag",
              "id": "78856"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "743"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20552",
      "attributes": {
        "slug": "04-application-fills",
        "type": "course-part",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-02-18 11:45:42",
        "archivedOn": null,
        "createdOn": "2014-02-18 11:45:42",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 20552,
        "qnaVideo": null,
        "style": null,
        "title": "Application - Fills",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": "90",
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": "60",
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
              "id": "2574"
            },
            {
              "type": "contentData",
              "id": "12159"
            },
            {
              "type": "contentData",
              "id": "23772"
            },
            {
              "type": "contentData",
              "id": "23774"
            },
            {
              "type": "contentData",
              "id": "23775"
            },
            {
              "type": "contentData",
              "id": "23776"
            },
            {
              "type": "contentData",
              "id": "23778"
            },
            {
              "type": "contentData",
              "id": "23779"
            },
            {
              "type": "contentData",
              "id": "23780"
            },
            {
              "type": "contentData",
              "id": "23782"
            },
            {
              "type": "contentData",
              "id": "23783"
            },
            {
              "type": "contentData",
              "id": "23784"
            },
            {
              "type": "contentData",
              "id": "23786"
            },
            {
              "type": "contentData",
              "id": "23787"
            },
            {
              "type": "contentData",
              "id": "23788"
            },
            {
              "type": "contentData",
              "id": "23790"
            },
            {
              "type": "contentData",
              "id": "23791"
            },
            {
              "type": "contentData",
              "id": "43626"
            },
            {
              "type": "contentData",
              "id": "43627"
            },
            {
              "type": "contentData",
              "id": "43628"
            },
            {
              "type": "contentData",
              "id": "43629"
            },
            {
              "type": "contentData",
              "id": "72494"
            },
            {
              "type": "contentData",
              "id": "85921"
            },
            {
              "type": "contentData",
              "id": "85922"
            },
            {
              "type": "contentData",
              "id": "85923"
            },
            {
              "type": "contentData",
              "id": "85924"
            },
            {
              "type": "contentData",
              "id": "85925"
            },
            {
              "type": "contentData",
              "id": "85926"
            },
            {
              "type": "contentData",
              "id": "85927"
            },
            {
              "type": "contentData",
              "id": "85928"
            },
            {
              "type": "contentData",
              "id": "85929"
            },
            {
              "type": "contentData",
              "id": "85930"
            },
            {
              "type": "contentData",
              "id": "145839"
            },
            {
              "type": "contentData",
              "id": "145840"
            },
            {
              "type": "contentData",
              "id": "145841"
            },
            {
              "type": "contentData",
              "id": "145842"
            },
            {
              "type": "contentData",
              "id": "145843"
            },
            {
              "type": "contentData",
              "id": "145844"
            },
            {
              "type": "contentData",
              "id": "145845"
            },
            {
              "type": "contentData",
              "id": "145846"
            },
            {
              "type": "contentData",
              "id": "145847"
            },
            {
              "type": "contentData",
              "id": "145848"
            },
            {
              "type": "contentData",
              "id": "145849"
            },
            {
              "type": "contentData",
              "id": "145850"
            },
            {
              "type": "contentData",
              "id": "145851"
            },
            {
              "type": "contentData",
              "id": "145852"
            },
            {
              "type": "contentData",
              "id": "145853"
            },
            {
              "type": "contentData",
              "id": "145854"
            },
            {
              "type": "contentData",
              "id": "145855"
            },
            {
              "type": "contentData",
              "id": "145856"
            },
            {
              "type": "contentData",
              "id": "145857"
            },
            {
              "type": "contentData",
              "id": "145858"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78825"
            },
            {
              "type": "tag",
              "id": "78826"
            },
            {
              "type": "tag",
              "id": "78827"
            },
            {
              "type": "tag",
              "id": "78828"
            },
            {
              "type": "tag",
              "id": "78829"
            },
            {
              "type": "tag",
              "id": "78830"
            },
            {
              "type": "tag",
              "id": "78831"
            },
            {
              "type": "tag",
              "id": "78832"
            },
            {
              "type": "tag",
              "id": "78833"
            },
            {
              "type": "tag",
              "id": "78834"
            },
            {
              "type": "tag",
              "id": "78835"
            },
            {
              "type": "tag",
              "id": "78836"
            },
            {
              "type": "tag",
              "id": "78837"
            },
            {
              "type": "tag",
              "id": "78838"
            },
            {
              "type": "tag",
              "id": "78839"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "744"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20554",
      "attributes": {
        "slug": "05-application-play-along",
        "type": "course-part",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-02-18 11:47:38",
        "archivedOn": null,
        "createdOn": "2014-02-18 11:47:38",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 20554,
        "qnaVideo": null,
        "style": null,
        "title": "Application - Play-Along",
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
              "id": "2575"
            },
            {
              "type": "contentData",
              "id": "12161"
            },
            {
              "type": "contentData",
              "id": "43620"
            },
            {
              "type": "contentData",
              "id": "43621"
            },
            {
              "type": "contentData",
              "id": "43622"
            },
            {
              "type": "contentData",
              "id": "43623"
            },
            {
              "type": "contentData",
              "id": "43624"
            },
            {
              "type": "contentData",
              "id": "43625"
            },
            {
              "type": "contentData",
              "id": "72493"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78807"
            },
            {
              "type": "tag",
              "id": "78808"
            },
            {
              "type": "tag",
              "id": "78809"
            },
            {
              "type": "tag",
              "id": "78810"
            },
            {
              "type": "tag",
              "id": "78811"
            },
            {
              "type": "tag",
              "id": "78812"
            },
            {
              "type": "tag",
              "id": "78813"
            },
            {
              "type": "tag",
              "id": "78814"
            },
            {
              "type": "tag",
              "id": "78815"
            },
            {
              "type": "tag",
              "id": "78816"
            },
            {
              "type": "tag",
              "id": "78817"
            },
            {
              "type": "tag",
              "id": "78818"
            },
            {
              "type": "tag",
              "id": "78819"
            },
            {
              "type": "tag",
              "id": "78820"
            },
            {
              "type": "tag",
              "id": "78821"
            },
            {
              "type": "tag",
              "id": "78822"
            },
            {
              "type": "tag",
              "id": "78823"
            },
            {
              "type": "tag",
              "id": "78824"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "745"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20556",
      "attributes": {
        "slug": "single-stroke-four",
        "type": "course",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-02-18 13:19:59",
        "archivedOn": null,
        "createdOn": "2014-02-18 13:19:59",
        "difficulty": "4",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 20556,
        "qnaVideo": null,
        "style": null,
        "title": "Single Stroke Four",
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
              "id": "2569"
            },
            {
              "type": "contentData",
              "id": "12164"
            },
            {
              "type": "contentData",
              "id": "41622"
            },
            {
              "type": "contentData",
              "id": "41623"
            },
            {
              "type": "contentData",
              "id": "41624"
            },
            {
              "type": "contentData",
              "id": "41625"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7029"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5955"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78787"
            },
            {
              "type": "tag",
              "id": "78788"
            },
            {
              "type": "tag",
              "id": "78789"
            },
            {
              "type": "tag",
              "id": "78790"
            },
            {
              "type": "tag",
              "id": "78791"
            },
            {
              "type": "tag",
              "id": "78792"
            },
            {
              "type": "tag",
              "id": "78793"
            },
            {
              "type": "tag",
              "id": "78794"
            },
            {
              "type": "tag",
              "id": "78795"
            },
            {
              "type": "tag",
              "id": "78796"
            },
            {
              "type": "tag",
              "id": "78797"
            },
            {
              "type": "tag",
              "id": "78798"
            },
            {
              "type": "tag",
              "id": "78799"
            },
            {
              "type": "tag",
              "id": "78800"
            },
            {
              "type": "tag",
              "id": "78801"
            },
            {
              "type": "tag",
              "id": "78802"
            },
            {
              "type": "tag",
              "id": "78803"
            },
            {
              "type": "tag",
              "id": "78804"
            },
            {
              "type": "tag",
              "id": "78805"
            },
            {
              "type": "tag",
              "id": "78806"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20558",
      "attributes": {
        "slug": "01-introduction-22",
        "type": "course-part",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-02-18 13:22:54",
        "archivedOn": null,
        "createdOn": "2014-02-18 13:22:54",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 20558,
        "qnaVideo": null,
        "style": null,
        "title": "Introduction",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": "90",
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": "60",
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
              "id": "2576"
            },
            {
              "type": "contentData",
              "id": "12166"
            },
            {
              "type": "contentData",
              "id": "23654"
            },
            {
              "type": "contentData",
              "id": "23656"
            },
            {
              "type": "contentData",
              "id": "23657"
            },
            {
              "type": "contentData",
              "id": "23658"
            },
            {
              "type": "contentData",
              "id": "23660"
            },
            {
              "type": "contentData",
              "id": "23661"
            },
            {
              "type": "contentData",
              "id": "23662"
            },
            {
              "type": "contentData",
              "id": "23664"
            },
            {
              "type": "contentData",
              "id": "23665"
            },
            {
              "type": "contentData",
              "id": "43616"
            },
            {
              "type": "contentData",
              "id": "43617"
            },
            {
              "type": "contentData",
              "id": "43618"
            },
            {
              "type": "contentData",
              "id": "43619"
            },
            {
              "type": "contentData",
              "id": "72492"
            },
            {
              "type": "contentData",
              "id": "84955"
            },
            {
              "type": "contentData",
              "id": "84956"
            },
            {
              "type": "contentData",
              "id": "84957"
            },
            {
              "type": "contentData",
              "id": "84958"
            },
            {
              "type": "contentData",
              "id": "84959"
            },
            {
              "type": "contentData",
              "id": "84960"
            },
            {
              "type": "contentData",
              "id": "145827"
            },
            {
              "type": "contentData",
              "id": "145828"
            },
            {
              "type": "contentData",
              "id": "145829"
            },
            {
              "type": "contentData",
              "id": "145830"
            },
            {
              "type": "contentData",
              "id": "145831"
            },
            {
              "type": "contentData",
              "id": "145832"
            },
            {
              "type": "contentData",
              "id": "145833"
            },
            {
              "type": "contentData",
              "id": "145834"
            },
            {
              "type": "contentData",
              "id": "145835"
            },
            {
              "type": "contentData",
              "id": "145836"
            },
            {
              "type": "contentData",
              "id": "145837"
            },
            {
              "type": "contentData",
              "id": "145838"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78774"
            },
            {
              "type": "tag",
              "id": "78775"
            },
            {
              "type": "tag",
              "id": "78776"
            },
            {
              "type": "tag",
              "id": "78777"
            },
            {
              "type": "tag",
              "id": "78778"
            },
            {
              "type": "tag",
              "id": "78779"
            },
            {
              "type": "tag",
              "id": "78780"
            },
            {
              "type": "tag",
              "id": "78781"
            },
            {
              "type": "tag",
              "id": "78782"
            },
            {
              "type": "tag",
              "id": "78783"
            },
            {
              "type": "tag",
              "id": "78784"
            },
            {
              "type": "tag",
              "id": "78785"
            },
            {
              "type": "tag",
              "id": "78786"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "746"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20560",
      "attributes": {
        "slug": "02-speed-control-2",
        "type": "course-part",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-02-18 13:25:12",
        "archivedOn": null,
        "createdOn": "2014-02-18 13:25:12",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 20560,
        "qnaVideo": null,
        "style": null,
        "title": "Speed & Control",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": "90",
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": "60",
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
              "id": "2577"
            },
            {
              "type": "contentData",
              "id": "12168"
            },
            {
              "type": "contentData",
              "id": "23666"
            },
            {
              "type": "contentData",
              "id": "23668"
            },
            {
              "type": "contentData",
              "id": "23669"
            },
            {
              "type": "contentData",
              "id": "23670"
            },
            {
              "type": "contentData",
              "id": "23672"
            },
            {
              "type": "contentData",
              "id": "23673"
            },
            {
              "type": "contentData",
              "id": "23674"
            },
            {
              "type": "contentData",
              "id": "23676"
            },
            {
              "type": "contentData",
              "id": "23677"
            },
            {
              "type": "contentData",
              "id": "43612"
            },
            {
              "type": "contentData",
              "id": "43613"
            },
            {
              "type": "contentData",
              "id": "43614"
            },
            {
              "type": "contentData",
              "id": "43615"
            },
            {
              "type": "contentData",
              "id": "72491"
            },
            {
              "type": "contentData",
              "id": "84963"
            },
            {
              "type": "contentData",
              "id": "84964"
            },
            {
              "type": "contentData",
              "id": "84965"
            },
            {
              "type": "contentData",
              "id": "84966"
            },
            {
              "type": "contentData",
              "id": "84967"
            },
            {
              "type": "contentData",
              "id": "84968"
            },
            {
              "type": "contentData",
              "id": "145815"
            },
            {
              "type": "contentData",
              "id": "145816"
            },
            {
              "type": "contentData",
              "id": "145817"
            },
            {
              "type": "contentData",
              "id": "145818"
            },
            {
              "type": "contentData",
              "id": "145819"
            },
            {
              "type": "contentData",
              "id": "145820"
            },
            {
              "type": "contentData",
              "id": "145821"
            },
            {
              "type": "contentData",
              "id": "145822"
            },
            {
              "type": "contentData",
              "id": "145823"
            },
            {
              "type": "contentData",
              "id": "145824"
            },
            {
              "type": "contentData",
              "id": "145825"
            },
            {
              "type": "contentData",
              "id": "145826"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78759"
            },
            {
              "type": "tag",
              "id": "78760"
            },
            {
              "type": "tag",
              "id": "78761"
            },
            {
              "type": "tag",
              "id": "78762"
            },
            {
              "type": "tag",
              "id": "78763"
            },
            {
              "type": "tag",
              "id": "78764"
            },
            {
              "type": "tag",
              "id": "78765"
            },
            {
              "type": "tag",
              "id": "78766"
            },
            {
              "type": "tag",
              "id": "78767"
            },
            {
              "type": "tag",
              "id": "78768"
            },
            {
              "type": "tag",
              "id": "78769"
            },
            {
              "type": "tag",
              "id": "78770"
            },
            {
              "type": "tag",
              "id": "78771"
            },
            {
              "type": "tag",
              "id": "78772"
            },
            {
              "type": "tag",
              "id": "78773"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "747"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20563",
      "attributes": {
        "slug": "03-application-beats-2",
        "type": "course-part",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-02-18 15:46:52",
        "archivedOn": null,
        "createdOn": "2014-02-18 15:46:52",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 20563,
        "qnaVideo": null,
        "style": null,
        "title": "Application - Beats",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": "90",
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": "60",
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
              "id": "2578"
            },
            {
              "type": "contentData",
              "id": "12170"
            },
            {
              "type": "contentData",
              "id": "12171"
            },
            {
              "type": "contentData",
              "id": "23678"
            },
            {
              "type": "contentData",
              "id": "23680"
            },
            {
              "type": "contentData",
              "id": "23681"
            },
            {
              "type": "contentData",
              "id": "23682"
            },
            {
              "type": "contentData",
              "id": "23684"
            },
            {
              "type": "contentData",
              "id": "23685"
            },
            {
              "type": "contentData",
              "id": "23686"
            },
            {
              "type": "contentData",
              "id": "23688"
            },
            {
              "type": "contentData",
              "id": "23689"
            },
            {
              "type": "contentData",
              "id": "23690"
            },
            {
              "type": "contentData",
              "id": "23692"
            },
            {
              "type": "contentData",
              "id": "23693"
            },
            {
              "type": "contentData",
              "id": "23694"
            },
            {
              "type": "contentData",
              "id": "23696"
            },
            {
              "type": "contentData",
              "id": "23697"
            },
            {
              "type": "contentData",
              "id": "43608"
            },
            {
              "type": "contentData",
              "id": "43609"
            },
            {
              "type": "contentData",
              "id": "43610"
            },
            {
              "type": "contentData",
              "id": "43611"
            },
            {
              "type": "contentData",
              "id": "72490"
            },
            {
              "type": "contentData",
              "id": "84969"
            },
            {
              "type": "contentData",
              "id": "84971"
            },
            {
              "type": "contentData",
              "id": "84973"
            },
            {
              "type": "contentData",
              "id": "84975"
            },
            {
              "type": "contentData",
              "id": "84977"
            },
            {
              "type": "contentData",
              "id": "84978"
            },
            {
              "type": "contentData",
              "id": "84979"
            },
            {
              "type": "contentData",
              "id": "84980"
            },
            {
              "type": "contentData",
              "id": "84981"
            },
            {
              "type": "contentData",
              "id": "84982"
            },
            {
              "type": "contentData",
              "id": "145795"
            },
            {
              "type": "contentData",
              "id": "145796"
            },
            {
              "type": "contentData",
              "id": "145797"
            },
            {
              "type": "contentData",
              "id": "145798"
            },
            {
              "type": "contentData",
              "id": "145799"
            },
            {
              "type": "contentData",
              "id": "145800"
            },
            {
              "type": "contentData",
              "id": "145801"
            },
            {
              "type": "contentData",
              "id": "145802"
            },
            {
              "type": "contentData",
              "id": "145803"
            },
            {
              "type": "contentData",
              "id": "145804"
            },
            {
              "type": "contentData",
              "id": "145805"
            },
            {
              "type": "contentData",
              "id": "145806"
            },
            {
              "type": "contentData",
              "id": "145807"
            },
            {
              "type": "contentData",
              "id": "145808"
            },
            {
              "type": "contentData",
              "id": "145809"
            },
            {
              "type": "contentData",
              "id": "145810"
            },
            {
              "type": "contentData",
              "id": "145811"
            },
            {
              "type": "contentData",
              "id": "145812"
            },
            {
              "type": "contentData",
              "id": "145813"
            },
            {
              "type": "contentData",
              "id": "145814"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78742"
            },
            {
              "type": "tag",
              "id": "78743"
            },
            {
              "type": "tag",
              "id": "78744"
            },
            {
              "type": "tag",
              "id": "78745"
            },
            {
              "type": "tag",
              "id": "78746"
            },
            {
              "type": "tag",
              "id": "78747"
            },
            {
              "type": "tag",
              "id": "78748"
            },
            {
              "type": "tag",
              "id": "78749"
            },
            {
              "type": "tag",
              "id": "78750"
            },
            {
              "type": "tag",
              "id": "78751"
            },
            {
              "type": "tag",
              "id": "78752"
            },
            {
              "type": "tag",
              "id": "78753"
            },
            {
              "type": "tag",
              "id": "78754"
            },
            {
              "type": "tag",
              "id": "78755"
            },
            {
              "type": "tag",
              "id": "78756"
            },
            {
              "type": "tag",
              "id": "78757"
            },
            {
              "type": "tag",
              "id": "78758"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "748"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20565",
      "attributes": {
        "slug": "04-application-fills-2",
        "type": "course-part",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-02-18 15:48:59",
        "archivedOn": null,
        "createdOn": "2014-02-18 15:48:59",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 20565,
        "qnaVideo": null,
        "style": null,
        "title": "Application - Fills",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": "90",
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": "60",
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
              "id": "2579"
            },
            {
              "type": "contentData",
              "id": "12173"
            },
            {
              "type": "contentData",
              "id": "23698"
            },
            {
              "type": "contentData",
              "id": "23700"
            },
            {
              "type": "contentData",
              "id": "23701"
            },
            {
              "type": "contentData",
              "id": "23702"
            },
            {
              "type": "contentData",
              "id": "23704"
            },
            {
              "type": "contentData",
              "id": "23705"
            },
            {
              "type": "contentData",
              "id": "23706"
            },
            {
              "type": "contentData",
              "id": "23708"
            },
            {
              "type": "contentData",
              "id": "23709"
            },
            {
              "type": "contentData",
              "id": "23710"
            },
            {
              "type": "contentData",
              "id": "23711"
            },
            {
              "type": "contentData",
              "id": "23712"
            },
            {
              "type": "contentData",
              "id": "23714"
            },
            {
              "type": "contentData",
              "id": "23715"
            },
            {
              "type": "contentData",
              "id": "43604"
            },
            {
              "type": "contentData",
              "id": "43605"
            },
            {
              "type": "contentData",
              "id": "43606"
            },
            {
              "type": "contentData",
              "id": "43607"
            },
            {
              "type": "contentData",
              "id": "72489"
            },
            {
              "type": "contentData",
              "id": "84983"
            },
            {
              "type": "contentData",
              "id": "84984"
            },
            {
              "type": "contentData",
              "id": "84985"
            },
            {
              "type": "contentData",
              "id": "84986"
            },
            {
              "type": "contentData",
              "id": "84987"
            },
            {
              "type": "contentData",
              "id": "84988"
            },
            {
              "type": "contentData",
              "id": "84989"
            },
            {
              "type": "contentData",
              "id": "84990"
            },
            {
              "type": "contentData",
              "id": "84991"
            },
            {
              "type": "contentData",
              "id": "84992"
            },
            {
              "type": "contentData",
              "id": "145777"
            },
            {
              "type": "contentData",
              "id": "145778"
            },
            {
              "type": "contentData",
              "id": "145779"
            },
            {
              "type": "contentData",
              "id": "145780"
            },
            {
              "type": "contentData",
              "id": "145781"
            },
            {
              "type": "contentData",
              "id": "145782"
            },
            {
              "type": "contentData",
              "id": "145783"
            },
            {
              "type": "contentData",
              "id": "145784"
            },
            {
              "type": "contentData",
              "id": "145785"
            },
            {
              "type": "contentData",
              "id": "145786"
            },
            {
              "type": "contentData",
              "id": "145787"
            },
            {
              "type": "contentData",
              "id": "145788"
            },
            {
              "type": "contentData",
              "id": "145789"
            },
            {
              "type": "contentData",
              "id": "145790"
            },
            {
              "type": "contentData",
              "id": "145791"
            },
            {
              "type": "contentData",
              "id": "145792"
            },
            {
              "type": "contentData",
              "id": "145793"
            },
            {
              "type": "contentData",
              "id": "145794"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78727"
            },
            {
              "type": "tag",
              "id": "78728"
            },
            {
              "type": "tag",
              "id": "78729"
            },
            {
              "type": "tag",
              "id": "78730"
            },
            {
              "type": "tag",
              "id": "78731"
            },
            {
              "type": "tag",
              "id": "78732"
            },
            {
              "type": "tag",
              "id": "78733"
            },
            {
              "type": "tag",
              "id": "78734"
            },
            {
              "type": "tag",
              "id": "78735"
            },
            {
              "type": "tag",
              "id": "78736"
            },
            {
              "type": "tag",
              "id": "78737"
            },
            {
              "type": "tag",
              "id": "78738"
            },
            {
              "type": "tag",
              "id": "78739"
            },
            {
              "type": "tag",
              "id": "78740"
            },
            {
              "type": "tag",
              "id": "78741"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "749"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20567",
      "attributes": {
        "slug": "05-application-play-along-2",
        "type": "course-part",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-02-18 15:51:11",
        "archivedOn": null,
        "createdOn": "2014-02-18 15:51:11",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 20567,
        "qnaVideo": null,
        "style": null,
        "title": "Application - Play-Along",
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
              "id": "2580"
            },
            {
              "type": "contentData",
              "id": "12175"
            },
            {
              "type": "contentData",
              "id": "43598"
            },
            {
              "type": "contentData",
              "id": "43599"
            },
            {
              "type": "contentData",
              "id": "43600"
            },
            {
              "type": "contentData",
              "id": "43601"
            },
            {
              "type": "contentData",
              "id": "43602"
            },
            {
              "type": "contentData",
              "id": "43603"
            },
            {
              "type": "contentData",
              "id": "72488"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78709"
            },
            {
              "type": "tag",
              "id": "78710"
            },
            {
              "type": "tag",
              "id": "78711"
            },
            {
              "type": "tag",
              "id": "78712"
            },
            {
              "type": "tag",
              "id": "78713"
            },
            {
              "type": "tag",
              "id": "78714"
            },
            {
              "type": "tag",
              "id": "78715"
            },
            {
              "type": "tag",
              "id": "78716"
            },
            {
              "type": "tag",
              "id": "78717"
            },
            {
              "type": "tag",
              "id": "78718"
            },
            {
              "type": "tag",
              "id": "78719"
            },
            {
              "type": "tag",
              "id": "78720"
            },
            {
              "type": "tag",
              "id": "78721"
            },
            {
              "type": "tag",
              "id": "78722"
            },
            {
              "type": "tag",
              "id": "78723"
            },
            {
              "type": "tag",
              "id": "78724"
            },
            {
              "type": "tag",
              "id": "78725"
            },
            {
              "type": "tag",
              "id": "78726"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "750"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20571",
      "attributes": {
        "slug": "single-stroke-seven",
        "type": "course",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-02-19 08:27:36",
        "archivedOn": null,
        "createdOn": "2014-02-19 08:27:36",
        "difficulty": "4",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 20571,
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
              "id": "2568"
            },
            {
              "type": "contentData",
              "id": "12178"
            },
            {
              "type": "contentData",
              "id": "41618"
            },
            {
              "type": "contentData",
              "id": "41619"
            },
            {
              "type": "contentData",
              "id": "41620"
            },
            {
              "type": "contentData",
              "id": "41621"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7028"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5954"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78689"
            },
            {
              "type": "tag",
              "id": "78690"
            },
            {
              "type": "tag",
              "id": "78691"
            },
            {
              "type": "tag",
              "id": "78692"
            },
            {
              "type": "tag",
              "id": "78693"
            },
            {
              "type": "tag",
              "id": "78694"
            },
            {
              "type": "tag",
              "id": "78695"
            },
            {
              "type": "tag",
              "id": "78696"
            },
            {
              "type": "tag",
              "id": "78697"
            },
            {
              "type": "tag",
              "id": "78698"
            },
            {
              "type": "tag",
              "id": "78699"
            },
            {
              "type": "tag",
              "id": "78700"
            },
            {
              "type": "tag",
              "id": "78701"
            },
            {
              "type": "tag",
              "id": "78702"
            },
            {
              "type": "tag",
              "id": "78703"
            },
            {
              "type": "tag",
              "id": "78704"
            },
            {
              "type": "tag",
              "id": "78705"
            },
            {
              "type": "tag",
              "id": "78706"
            },
            {
              "type": "tag",
              "id": "78707"
            },
            {
              "type": "tag",
              "id": "78708"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20573",
      "attributes": {
        "slug": "01-introduction-23",
        "type": "course-part",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-02-19 08:42:17",
        "archivedOn": null,
        "createdOn": "2014-02-19 08:42:17",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 20573,
        "qnaVideo": null,
        "style": null,
        "title": "Introduction",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": "90",
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": "60",
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
              "id": "2581"
            },
            {
              "type": "contentData",
              "id": "12180"
            },
            {
              "type": "contentData",
              "id": "23594"
            },
            {
              "type": "contentData",
              "id": "23596"
            },
            {
              "type": "contentData",
              "id": "23597"
            },
            {
              "type": "contentData",
              "id": "23598"
            },
            {
              "type": "contentData",
              "id": "23600"
            },
            {
              "type": "contentData",
              "id": "23601"
            },
            {
              "type": "contentData",
              "id": "23602"
            },
            {
              "type": "contentData",
              "id": "23604"
            },
            {
              "type": "contentData",
              "id": "23605"
            },
            {
              "type": "contentData",
              "id": "43594"
            },
            {
              "type": "contentData",
              "id": "43595"
            },
            {
              "type": "contentData",
              "id": "43596"
            },
            {
              "type": "contentData",
              "id": "43597"
            },
            {
              "type": "contentData",
              "id": "72487"
            },
            {
              "type": "contentData",
              "id": "84705"
            },
            {
              "type": "contentData",
              "id": "84706"
            },
            {
              "type": "contentData",
              "id": "84707"
            },
            {
              "type": "contentData",
              "id": "84708"
            },
            {
              "type": "contentData",
              "id": "84709"
            },
            {
              "type": "contentData",
              "id": "84710"
            },
            {
              "type": "contentData",
              "id": "145765"
            },
            {
              "type": "contentData",
              "id": "145766"
            },
            {
              "type": "contentData",
              "id": "145767"
            },
            {
              "type": "contentData",
              "id": "145768"
            },
            {
              "type": "contentData",
              "id": "145769"
            },
            {
              "type": "contentData",
              "id": "145770"
            },
            {
              "type": "contentData",
              "id": "145771"
            },
            {
              "type": "contentData",
              "id": "145772"
            },
            {
              "type": "contentData",
              "id": "145773"
            },
            {
              "type": "contentData",
              "id": "145774"
            },
            {
              "type": "contentData",
              "id": "145775"
            },
            {
              "type": "contentData",
              "id": "145776"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78676"
            },
            {
              "type": "tag",
              "id": "78677"
            },
            {
              "type": "tag",
              "id": "78678"
            },
            {
              "type": "tag",
              "id": "78679"
            },
            {
              "type": "tag",
              "id": "78680"
            },
            {
              "type": "tag",
              "id": "78681"
            },
            {
              "type": "tag",
              "id": "78682"
            },
            {
              "type": "tag",
              "id": "78683"
            },
            {
              "type": "tag",
              "id": "78684"
            },
            {
              "type": "tag",
              "id": "78685"
            },
            {
              "type": "tag",
              "id": "78686"
            },
            {
              "type": "tag",
              "id": "78687"
            },
            {
              "type": "tag",
              "id": "78688"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "751"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20576",
      "attributes": {
        "slug": "02-speed-control-3",
        "type": "course-part",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-02-19 15:33:20",
        "archivedOn": null,
        "createdOn": "2014-02-19 15:33:20",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 20576,
        "qnaVideo": null,
        "style": null,
        "title": "Speed & Control",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": "90",
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": "60",
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
              "id": "2582"
            },
            {
              "type": "contentData",
              "id": "12182"
            },
            {
              "type": "contentData",
              "id": "23606"
            },
            {
              "type": "contentData",
              "id": "23608"
            },
            {
              "type": "contentData",
              "id": "23609"
            },
            {
              "type": "contentData",
              "id": "23610"
            },
            {
              "type": "contentData",
              "id": "23612"
            },
            {
              "type": "contentData",
              "id": "23613"
            },
            {
              "type": "contentData",
              "id": "43590"
            },
            {
              "type": "contentData",
              "id": "43591"
            },
            {
              "type": "contentData",
              "id": "43592"
            },
            {
              "type": "contentData",
              "id": "43593"
            },
            {
              "type": "contentData",
              "id": "72486"
            },
            {
              "type": "contentData",
              "id": "84716"
            },
            {
              "type": "contentData",
              "id": "84717"
            },
            {
              "type": "contentData",
              "id": "84723"
            },
            {
              "type": "contentData",
              "id": "84724"
            },
            {
              "type": "contentData",
              "id": "145757"
            },
            {
              "type": "contentData",
              "id": "145758"
            },
            {
              "type": "contentData",
              "id": "145759"
            },
            {
              "type": "contentData",
              "id": "145760"
            },
            {
              "type": "contentData",
              "id": "145761"
            },
            {
              "type": "contentData",
              "id": "145762"
            },
            {
              "type": "contentData",
              "id": "145763"
            },
            {
              "type": "contentData",
              "id": "145764"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78663"
            },
            {
              "type": "tag",
              "id": "78664"
            },
            {
              "type": "tag",
              "id": "78665"
            },
            {
              "type": "tag",
              "id": "78666"
            },
            {
              "type": "tag",
              "id": "78667"
            },
            {
              "type": "tag",
              "id": "78668"
            },
            {
              "type": "tag",
              "id": "78669"
            },
            {
              "type": "tag",
              "id": "78670"
            },
            {
              "type": "tag",
              "id": "78671"
            },
            {
              "type": "tag",
              "id": "78672"
            },
            {
              "type": "tag",
              "id": "78673"
            },
            {
              "type": "tag",
              "id": "78674"
            },
            {
              "type": "tag",
              "id": "78675"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "752"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20578",
      "attributes": {
        "slug": "03-application-beats-3",
        "type": "course-part",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-02-19 15:34:51",
        "archivedOn": null,
        "createdOn": "2014-02-19 15:34:51",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 20578,
        "qnaVideo": null,
        "style": null,
        "title": "Application - Beats",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": "90",
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": "60",
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
              "id": "2583"
            },
            {
              "type": "contentData",
              "id": "12184"
            },
            {
              "type": "contentData",
              "id": "23614"
            },
            {
              "type": "contentData",
              "id": "23616"
            },
            {
              "type": "contentData",
              "id": "23617"
            },
            {
              "type": "contentData",
              "id": "23618"
            },
            {
              "type": "contentData",
              "id": "23620"
            },
            {
              "type": "contentData",
              "id": "23621"
            },
            {
              "type": "contentData",
              "id": "23622"
            },
            {
              "type": "contentData",
              "id": "23624"
            },
            {
              "type": "contentData",
              "id": "23625"
            },
            {
              "type": "contentData",
              "id": "23626"
            },
            {
              "type": "contentData",
              "id": "23628"
            },
            {
              "type": "contentData",
              "id": "23629"
            },
            {
              "type": "contentData",
              "id": "23630"
            },
            {
              "type": "contentData",
              "id": "23632"
            },
            {
              "type": "contentData",
              "id": "23633"
            },
            {
              "type": "contentData",
              "id": "43586"
            },
            {
              "type": "contentData",
              "id": "43587"
            },
            {
              "type": "contentData",
              "id": "43588"
            },
            {
              "type": "contentData",
              "id": "43589"
            },
            {
              "type": "contentData",
              "id": "72485"
            },
            {
              "type": "contentData",
              "id": "84728"
            },
            {
              "type": "contentData",
              "id": "84729"
            },
            {
              "type": "contentData",
              "id": "84733"
            },
            {
              "type": "contentData",
              "id": "84734"
            },
            {
              "type": "contentData",
              "id": "84738"
            },
            {
              "type": "contentData",
              "id": "84739"
            },
            {
              "type": "contentData",
              "id": "84744"
            },
            {
              "type": "contentData",
              "id": "84745"
            },
            {
              "type": "contentData",
              "id": "84749"
            },
            {
              "type": "contentData",
              "id": "84750"
            },
            {
              "type": "contentData",
              "id": "145737"
            },
            {
              "type": "contentData",
              "id": "145738"
            },
            {
              "type": "contentData",
              "id": "145739"
            },
            {
              "type": "contentData",
              "id": "145740"
            },
            {
              "type": "contentData",
              "id": "145741"
            },
            {
              "type": "contentData",
              "id": "145742"
            },
            {
              "type": "contentData",
              "id": "145743"
            },
            {
              "type": "contentData",
              "id": "145744"
            },
            {
              "type": "contentData",
              "id": "145745"
            },
            {
              "type": "contentData",
              "id": "145746"
            },
            {
              "type": "contentData",
              "id": "145747"
            },
            {
              "type": "contentData",
              "id": "145748"
            },
            {
              "type": "contentData",
              "id": "145749"
            },
            {
              "type": "contentData",
              "id": "145750"
            },
            {
              "type": "contentData",
              "id": "145751"
            },
            {
              "type": "contentData",
              "id": "145752"
            },
            {
              "type": "contentData",
              "id": "145753"
            },
            {
              "type": "contentData",
              "id": "145754"
            },
            {
              "type": "contentData",
              "id": "145755"
            },
            {
              "type": "contentData",
              "id": "145756"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78646"
            },
            {
              "type": "tag",
              "id": "78647"
            },
            {
              "type": "tag",
              "id": "78648"
            },
            {
              "type": "tag",
              "id": "78649"
            },
            {
              "type": "tag",
              "id": "78650"
            },
            {
              "type": "tag",
              "id": "78651"
            },
            {
              "type": "tag",
              "id": "78652"
            },
            {
              "type": "tag",
              "id": "78653"
            },
            {
              "type": "tag",
              "id": "78654"
            },
            {
              "type": "tag",
              "id": "78655"
            },
            {
              "type": "tag",
              "id": "78656"
            },
            {
              "type": "tag",
              "id": "78657"
            },
            {
              "type": "tag",
              "id": "78658"
            },
            {
              "type": "tag",
              "id": "78659"
            },
            {
              "type": "tag",
              "id": "78660"
            },
            {
              "type": "tag",
              "id": "78661"
            },
            {
              "type": "tag",
              "id": "78662"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "753"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20580",
      "attributes": {
        "slug": "04-application-fills-3",
        "type": "course-part",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-02-19 15:36:21",
        "archivedOn": null,
        "createdOn": "2014-02-19 15:36:21",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 20580,
        "qnaVideo": null,
        "style": null,
        "title": "Application - Fills",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": "90",
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": "60",
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
              "id": "2584"
            },
            {
              "type": "contentData",
              "id": "12186"
            },
            {
              "type": "contentData",
              "id": "23634"
            },
            {
              "type": "contentData",
              "id": "23636"
            },
            {
              "type": "contentData",
              "id": "23637"
            },
            {
              "type": "contentData",
              "id": "23638"
            },
            {
              "type": "contentData",
              "id": "23640"
            },
            {
              "type": "contentData",
              "id": "23641"
            },
            {
              "type": "contentData",
              "id": "23642"
            },
            {
              "type": "contentData",
              "id": "23644"
            },
            {
              "type": "contentData",
              "id": "23645"
            },
            {
              "type": "contentData",
              "id": "23646"
            },
            {
              "type": "contentData",
              "id": "23648"
            },
            {
              "type": "contentData",
              "id": "23649"
            },
            {
              "type": "contentData",
              "id": "23650"
            },
            {
              "type": "contentData",
              "id": "23652"
            },
            {
              "type": "contentData",
              "id": "23653"
            },
            {
              "type": "contentData",
              "id": "43582"
            },
            {
              "type": "contentData",
              "id": "43583"
            },
            {
              "type": "contentData",
              "id": "43584"
            },
            {
              "type": "contentData",
              "id": "43585"
            },
            {
              "type": "contentData",
              "id": "72484"
            },
            {
              "type": "contentData",
              "id": "84754"
            },
            {
              "type": "contentData",
              "id": "84755"
            },
            {
              "type": "contentData",
              "id": "84758"
            },
            {
              "type": "contentData",
              "id": "84759"
            },
            {
              "type": "contentData",
              "id": "84764"
            },
            {
              "type": "contentData",
              "id": "84765"
            },
            {
              "type": "contentData",
              "id": "84768"
            },
            {
              "type": "contentData",
              "id": "84769"
            },
            {
              "type": "contentData",
              "id": "84774"
            },
            {
              "type": "contentData",
              "id": "84775"
            },
            {
              "type": "contentData",
              "id": "145717"
            },
            {
              "type": "contentData",
              "id": "145718"
            },
            {
              "type": "contentData",
              "id": "145719"
            },
            {
              "type": "contentData",
              "id": "145720"
            },
            {
              "type": "contentData",
              "id": "145721"
            },
            {
              "type": "contentData",
              "id": "145722"
            },
            {
              "type": "contentData",
              "id": "145723"
            },
            {
              "type": "contentData",
              "id": "145724"
            },
            {
              "type": "contentData",
              "id": "145725"
            },
            {
              "type": "contentData",
              "id": "145726"
            },
            {
              "type": "contentData",
              "id": "145727"
            },
            {
              "type": "contentData",
              "id": "145728"
            },
            {
              "type": "contentData",
              "id": "145729"
            },
            {
              "type": "contentData",
              "id": "145730"
            },
            {
              "type": "contentData",
              "id": "145731"
            },
            {
              "type": "contentData",
              "id": "145732"
            },
            {
              "type": "contentData",
              "id": "145733"
            },
            {
              "type": "contentData",
              "id": "145734"
            },
            {
              "type": "contentData",
              "id": "145735"
            },
            {
              "type": "contentData",
              "id": "145736"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78631"
            },
            {
              "type": "tag",
              "id": "78632"
            },
            {
              "type": "tag",
              "id": "78633"
            },
            {
              "type": "tag",
              "id": "78634"
            },
            {
              "type": "tag",
              "id": "78635"
            },
            {
              "type": "tag",
              "id": "78636"
            },
            {
              "type": "tag",
              "id": "78637"
            },
            {
              "type": "tag",
              "id": "78638"
            },
            {
              "type": "tag",
              "id": "78639"
            },
            {
              "type": "tag",
              "id": "78640"
            },
            {
              "type": "tag",
              "id": "78641"
            },
            {
              "type": "tag",
              "id": "78642"
            },
            {
              "type": "tag",
              "id": "78643"
            },
            {
              "type": "tag",
              "id": "78644"
            },
            {
              "type": "tag",
              "id": "78645"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "754"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20582",
      "attributes": {
        "slug": "05-application-play-along-3",
        "type": "course-part",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-02-19 15:38:03",
        "archivedOn": null,
        "createdOn": "2014-02-19 15:38:03",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 20582,
        "qnaVideo": null,
        "style": null,
        "title": "Application - Play-Along",
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
              "id": "2585"
            },
            {
              "type": "contentData",
              "id": "12188"
            },
            {
              "type": "contentData",
              "id": "43576"
            },
            {
              "type": "contentData",
              "id": "43577"
            },
            {
              "type": "contentData",
              "id": "43578"
            },
            {
              "type": "contentData",
              "id": "43579"
            },
            {
              "type": "contentData",
              "id": "43580"
            },
            {
              "type": "contentData",
              "id": "43581"
            },
            {
              "type": "contentData",
              "id": "72483"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78613"
            },
            {
              "type": "tag",
              "id": "78614"
            },
            {
              "type": "tag",
              "id": "78615"
            },
            {
              "type": "tag",
              "id": "78616"
            },
            {
              "type": "tag",
              "id": "78617"
            },
            {
              "type": "tag",
              "id": "78618"
            },
            {
              "type": "tag",
              "id": "78619"
            },
            {
              "type": "tag",
              "id": "78620"
            },
            {
              "type": "tag",
              "id": "78621"
            },
            {
              "type": "tag",
              "id": "78622"
            },
            {
              "type": "tag",
              "id": "78623"
            },
            {
              "type": "tag",
              "id": "78624"
            },
            {
              "type": "tag",
              "id": "78625"
            },
            {
              "type": "tag",
              "id": "78626"
            },
            {
              "type": "tag",
              "id": "78627"
            },
            {
              "type": "tag",
              "id": "78628"
            },
            {
              "type": "tag",
              "id": "78629"
            },
            {
              "type": "tag",
              "id": "78630"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "755"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20584",
      "attributes": {
        "slug": "double-stroke-roll",
        "type": "course",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-02-19 15:40:50",
        "archivedOn": null,
        "createdOn": "2014-02-19 15:40:50",
        "difficulty": "4",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 20584,
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
              "id": "2567"
            },
            {
              "type": "contentData",
              "id": "12191"
            },
            {
              "type": "contentData",
              "id": "41614"
            },
            {
              "type": "contentData",
              "id": "41615"
            },
            {
              "type": "contentData",
              "id": "41616"
            },
            {
              "type": "contentData",
              "id": "41617"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7027"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5953"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78592"
            },
            {
              "type": "tag",
              "id": "78593"
            },
            {
              "type": "tag",
              "id": "78594"
            },
            {
              "type": "tag",
              "id": "78595"
            },
            {
              "type": "tag",
              "id": "78596"
            },
            {
              "type": "tag",
              "id": "78597"
            },
            {
              "type": "tag",
              "id": "78598"
            },
            {
              "type": "tag",
              "id": "78599"
            },
            {
              "type": "tag",
              "id": "78600"
            },
            {
              "type": "tag",
              "id": "78601"
            },
            {
              "type": "tag",
              "id": "78602"
            },
            {
              "type": "tag",
              "id": "78603"
            },
            {
              "type": "tag",
              "id": "78604"
            },
            {
              "type": "tag",
              "id": "78605"
            },
            {
              "type": "tag",
              "id": "78606"
            },
            {
              "type": "tag",
              "id": "78607"
            },
            {
              "type": "tag",
              "id": "78608"
            },
            {
              "type": "tag",
              "id": "78609"
            },
            {
              "type": "tag",
              "id": "78610"
            },
            {
              "type": "tag",
              "id": "78611"
            },
            {
              "type": "tag",
              "id": "78612"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20586",
      "attributes": {
        "slug": "01-introduction-24",
        "type": "course-part",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-02-19 15:43:12",
        "archivedOn": null,
        "createdOn": "2014-02-19 15:43:12",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 20586,
        "qnaVideo": null,
        "style": null,
        "title": "Introduction",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": null,
        "fastBpm": "90",
        "includesSong": null,
        "instructors": null,
        "liveEventStartTime": null,
        "liveEventEndTime": null,
        "liveEventYoutubeId": null,
        "liveStreamFeedType": null,
        "name": null,
        "released": null,
        "slowBpm": "60",
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
              "id": "2586"
            },
            {
              "type": "contentData",
              "id": "12193"
            },
            {
              "type": "contentData",
              "id": "12194"
            },
            {
              "type": "contentData",
              "id": "23506"
            },
            {
              "type": "contentData",
              "id": "23508"
            },
            {
              "type": "contentData",
              "id": "23509"
            },
            {
              "type": "contentData",
              "id": "23510"
            },
            {
              "type": "contentData",
              "id": "23512"
            },
            {
              "type": "contentData",
              "id": "23513"
            },
            {
              "type": "contentData",
              "id": "23514"
            },
            {
              "type": "contentData",
              "id": "23516"
            },
            {
              "type": "contentData",
              "id": "23517"
            },
            {
              "type": "contentData",
              "id": "23518"
            },
            {
              "type": "contentData",
              "id": "23520"
            },
            {
              "type": "contentData",
              "id": "23521"
            },
            {
              "type": "contentData",
              "id": "23522"
            },
            {
              "type": "contentData",
              "id": "23524"
            },
            {
              "type": "contentData",
              "id": "23525"
            },
            {
              "type": "contentData",
              "id": "43572"
            },
            {
              "type": "contentData",
              "id": "43573"
            },
            {
              "type": "contentData",
              "id": "43574"
            },
            {
              "type": "contentData",
              "id": "43575"
            },
            {
              "type": "contentData",
              "id": "72482"
            },
            {
              "type": "contentData",
              "id": "85950"
            },
            {
              "type": "contentData",
              "id": "85951"
            },
            {
              "type": "contentData",
              "id": "85952"
            },
            {
              "type": "contentData",
              "id": "85953"
            },
            {
              "type": "contentData",
              "id": "85954"
            },
            {
              "type": "contentData",
              "id": "85955"
            },
            {
              "type": "contentData",
              "id": "85956"
            },
            {
              "type": "contentData",
              "id": "85957"
            },
            {
              "type": "contentData",
              "id": "85958"
            },
            {
              "type": "contentData",
              "id": "85959"
            },
            {
              "type": "contentData",
              "id": "145697"
            },
            {
              "type": "contentData",
              "id": "145698"
            },
            {
              "type": "contentData",
              "id": "145699"
            },
            {
              "type": "contentData",
              "id": "145700"
            },
            {
              "type": "contentData",
              "id": "145701"
            },
            {
              "type": "contentData",
              "id": "145702"
            },
            {
              "type": "contentData",
              "id": "145703"
            },
            {
              "type": "contentData",
              "id": "145704"
            },
            {
              "type": "contentData",
              "id": "145705"
            },
            {
              "type": "contentData",
              "id": "145706"
            },
            {
              "type": "contentData",
              "id": "145707"
            },
            {
              "type": "contentData",
              "id": "145708"
            },
            {
              "type": "contentData",
              "id": "145709"
            },
            {
              "type": "contentData",
              "id": "145710"
            },
            {
              "type": "contentData",
              "id": "145711"
            },
            {
              "type": "contentData",
              "id": "145712"
            },
            {
              "type": "contentData",
              "id": "145713"
            },
            {
              "type": "contentData",
              "id": "145714"
            },
            {
              "type": "contentData",
              "id": "145715"
            },
            {
              "type": "contentData",
              "id": "145716"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78578"
            },
            {
              "type": "tag",
              "id": "78579"
            },
            {
              "type": "tag",
              "id": "78580"
            },
            {
              "type": "tag",
              "id": "78581"
            },
            {
              "type": "tag",
              "id": "78582"
            },
            {
              "type": "tag",
              "id": "78583"
            },
            {
              "type": "tag",
              "id": "78584"
            },
            {
              "type": "tag",
              "id": "78585"
            },
            {
              "type": "tag",
              "id": "78586"
            },
            {
              "type": "tag",
              "id": "78587"
            },
            {
              "type": "tag",
              "id": "78588"
            },
            {
              "type": "tag",
              "id": "78589"
            },
            {
              "type": "tag",
              "id": "78590"
            },
            {
              "type": "tag",
              "id": "78591"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "756"
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
      "type": "parent",
      "id": "20516",
      "attributes": {
        "slug": "single-stroke-roll",
        "type": "course",
        "sort": 0,
        "status": "published",
        "total_xp": null,
        "brand": "drumeo",
        "language": "en-US",
        "show_in_new_feed": null,
        "user": "",
        "published_on": "2014-02-17 10:56:35",
        "archived_on": null,
        "created_on": "2014-02-17 10:56:35",
        "difficulty": "4",
        "home_staff_pick_rating": null,
        "legacy_id": null,
        "legacy_wordpress_post_id": 20516,
        "qna_video": null,
        "style": null,
        "title": "Single Stroke Roll",
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
      "type": "parent",
      "id": "20556",
      "attributes": {
        "slug": "single-stroke-four",
        "type": "course",
        "sort": 0,
        "status": "published",
        "total_xp": null,
        "brand": "drumeo",
        "language": "en-US",
        "show_in_new_feed": null,
        "user": "",
        "published_on": "2014-02-18 13:19:59",
        "archived_on": null,
        "created_on": "2014-02-18 13:19:59",
        "difficulty": "4",
        "home_staff_pick_rating": null,
        "legacy_id": null,
        "legacy_wordpress_post_id": 20556,
        "qna_video": null,
        "style": null,
        "title": "Single Stroke Four",
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
      "type": "parent",
      "id": "20571",
      "attributes": {
        "slug": "single-stroke-seven",
        "type": "course",
        "sort": 0,
        "status": "published",
        "total_xp": null,
        "brand": "drumeo",
        "language": "en-US",
        "show_in_new_feed": null,
        "user": "",
        "published_on": "2014-02-19 08:27:36",
        "archived_on": null,
        "created_on": "2014-02-19 08:27:36",
        "difficulty": "4",
        "home_staff_pick_rating": null,
        "legacy_id": null,
        "legacy_wordpress_post_id": 20571,
        "qna_video": null,
        "style": null,
        "title": "Single Stroke Seven",
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
      "type": "parent",
      "id": "20584",
      "attributes": {
        "slug": "double-stroke-roll",
        "type": "course",
        "sort": 0,
        "status": "published",
        "total_xp": null,
        "brand": "drumeo",
        "language": "en-US",
        "show_in_new_feed": null,
        "user": "",
        "published_on": "2014-02-19 15:40:50",
        "archived_on": null,
        "created_on": "2014-02-19 15:40:50",
        "difficulty": "4",
        "home_staff_pick_rating": null,
        "legacy_id": null,
        "legacy_wordpress_post_id": 20584,
        "qna_video": null,
        "style": null,
        "title": "Double Stroke Roll",
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
      "id": "2570",
      "attributes": {
        "key": "description",
        "value": "The single stroke roll is one of the 40 drum rudiments. This course will provide you with some speed and control exercises and also some practical drum-set applications.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12128",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dci-01.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41626",
      "attributes": {
        "key": "resource_name",
        "value": "Course Resources Pack",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41627",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/resource-files/dci-01-single-stroke-roll.zip",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41628",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41629",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/pdf/dci-01.pdf",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7037",
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
      "id": "5969",
      "attributes": {
        "topic": "Rudiments",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78976",
      "attributes": {
        "tag": "fills",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78977",
      "attributes": {
        "tag": "rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78978",
      "attributes": {
        "tag": "beats",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78979",
      "attributes": {
        "tag": "dave atkinson",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78980",
      "attributes": {
        "tag": "intermediate",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78981",
      "attributes": {
        "tag": "groove",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78982",
      "attributes": {
        "tag": "4",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78983",
      "attributes": {
        "tag": "Play Along",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78984",
      "attributes": {
        "tag": "fill",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78985",
      "attributes": {
        "tag": "beat",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78986",
      "attributes": {
        "tag": "rudiment",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78987",
      "attributes": {
        "tag": "grooves",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78988",
      "attributes": {
        "tag": "singles",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "78989",
      "attributes": {
        "tag": "stroke",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "78990",
      "attributes": {
        "tag": "strokes",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "78991",
      "attributes": {
        "tag": "play-alongs",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "78992",
      "attributes": {
        "tag": "roll",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "78993",
      "attributes": {
        "tag": "rolls",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "78994",
      "attributes": {
        "tag": "single",
        "position": 19
      }
    },
    {
      "type": "tag",
      "id": "78995",
      "attributes": {
        "tag": "alongs",
        "position": 20
      }
    },
    {
      "type": "contentData",
      "id": "2571",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12130",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20522_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23716",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01a-01-60.mp4",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23718",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01a-01-90.mp4",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "23719",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-01a-01.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23720",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01a-02-60.mp4",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "23722",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01a-02-90.mp4",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "23723",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-01a-02.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "23724",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01a-03-60.mp4",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "23726",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01a-03-90.mp4",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "23727",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-01a-03.png",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "23728",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01a-04-60.mp4",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "23730",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01a-04-90.mp4",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "23731",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-01a-04.png",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "43638",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43639",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/pdf/dci-01a.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43640",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "43641",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/audio/dci-01a.zip",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72500",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/465714628_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "85754",
      "attributes": {
        "key": "chapter_timecode",
        "value": "52",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "85755",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #1 - Basic Rudiment",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "85756",
      "attributes": {
        "key": "chapter_timecode",
        "value": "193",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "85757",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #2 - Eighth Note Triplets",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "85758",
      "attributes": {
        "key": "chapter_timecode",
        "value": "326",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "85759",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #3 - Sixteenth Notes",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "85760",
      "attributes": {
        "key": "chapter_timecode",
        "value": "422",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "85761",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #4 - Rudiment Variation Challenge",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145899",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145900",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145901",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145902",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145903",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145904",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145905",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145906",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145907",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145908",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145909",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "145910",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "145911",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "4",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "145912",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "145913",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "4",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "145914",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78963",
      "attributes": {
        "tag": "intermediate",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78964",
      "attributes": {
        "tag": "4",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78965",
      "attributes": {
        "tag": "rudiment",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78966",
      "attributes": {
        "tag": "singles",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78967",
      "attributes": {
        "tag": "stroke",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78968",
      "attributes": {
        "tag": "strokes",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78969",
      "attributes": {
        "tag": "roll",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78970",
      "attributes": {
        "tag": "rolls",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78971",
      "attributes": {
        "tag": "intro",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78972",
      "attributes": {
        "tag": "introduction",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78973",
      "attributes": {
        "tag": "single",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "78974",
      "attributes": {
        "tag": "rudiments",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78975",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "parent",
      "id": "741",
      "attributes": {
        "child_position": 1
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "20516"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "2572",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12155",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20548_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23732",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01b-01-120.mp4",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23734",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01b-01-60.mp4",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "23735",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-01b-01.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23736",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01b-02-120.mp4",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "23738",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01b-02-60.mp4",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "23739",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-01b-02.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "23740",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01b-03a-120.mp4",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "23742",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01b-03a-60.mp4",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "23743",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-01b-03a.png",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "23744",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01b-03b-120.mp4",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "23746",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01b-03b-60.mp4",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "23747",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-01b-03b.png",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "23748",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01b-03c-100.mp4",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "23750",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01b-03c-60.mp4",
        "position": 10
      }
    },
    {
      "type": "contentData",
      "id": "23751",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-01b-03c.png",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "43634",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43635",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/pdf/dci-01b.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43636",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "43637",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/audio/dci-01b.zip",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72496",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/465721394_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "85881",
      "attributes": {
        "key": "chapter_timecode",
        "value": "21",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "85882",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #1 - Right Hand Lead",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "85883",
      "attributes": {
        "key": "chapter_timecode",
        "value": "179",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "85884",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #2 - Left Hand Lead",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "85885",
      "attributes": {
        "key": "chapter_timecode",
        "value": "250",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "85886",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #3a",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "85887",
      "attributes": {
        "key": "chapter_timecode",
        "value": "385",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "85888",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #3b",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "85889",
      "attributes": {
        "key": "chapter_timecode",
        "value": "438",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "85890",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #3c",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145879",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145880",
      "attributes": {
        "key": "sbt_bpm",
        "value": "120",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145881",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145882",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145883",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145884",
      "attributes": {
        "key": "sbt_bpm",
        "value": "120",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145885",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145886",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145887",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3a",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145888",
      "attributes": {
        "key": "sbt_bpm",
        "value": "120",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145889",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3a",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "145890",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "145891",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3b",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "145892",
      "attributes": {
        "key": "sbt_bpm",
        "value": "120",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "145893",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3b",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "145894",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "145895",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3c",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "145896",
      "attributes": {
        "key": "sbt_bpm",
        "value": "100",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "145897",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3c",
        "position": 10
      }
    },
    {
      "type": "contentData",
      "id": "145898",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78857",
      "attributes": {
        "tag": "rudiments",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78858",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78859",
      "attributes": {
        "tag": "intermediate",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78860",
      "attributes": {
        "tag": "4",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78861",
      "attributes": {
        "tag": "rudiment",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78862",
      "attributes": {
        "tag": "singles",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78863",
      "attributes": {
        "tag": "stroke",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78864",
      "attributes": {
        "tag": "strokes",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78865",
      "attributes": {
        "tag": "control",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78866",
      "attributes": {
        "tag": "speed",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78867",
      "attributes": {
        "tag": "roll",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78868",
      "attributes": {
        "tag": "rolls",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78869",
      "attributes": {
        "tag": "single",
        "position": 13
      }
    },
    {
      "type": "parent",
      "id": "742",
      "attributes": {
        "child_position": 2
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "20516"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "2573",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12157",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20550_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23752",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01c-01-60.mp4",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23754",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01c-01-90.mp4",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "23755",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-01c-01.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23756",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01c-02-60.mp4",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "23758",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01c-02-90.mp4",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "23759",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-01c-02.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "23760",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01c-03-60.mp4",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "23762",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01c-03-90.mp4",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "23763",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-01c-03.png",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "23764",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01c-04-60.mp4",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "23766",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01c-04-90.mp4",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "23767",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-01c-04.png",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "23768",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01c-05-60.mp4",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "23770",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01c-05-90.mp4",
        "position": 10
      }
    },
    {
      "type": "contentData",
      "id": "23771",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-01c-05.png",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "43630",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43631",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/pdf/dci-01c.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43632",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "43633",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/audio/dci-01c.zip",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72495",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/465725410_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "85901",
      "attributes": {
        "key": "chapter_timecode",
        "value": "23",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "85902",
      "attributes": {
        "key": "chapter_description",
        "value": "Beat #1",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "85903",
      "attributes": {
        "key": "chapter_timecode",
        "value": "131",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "85904",
      "attributes": {
        "key": "chapter_description",
        "value": "Beat #2",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "85905",
      "attributes": {
        "key": "chapter_timecode",
        "value": "250",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "85906",
      "attributes": {
        "key": "chapter_description",
        "value": "Beat #3",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "85907",
      "attributes": {
        "key": "chapter_timecode",
        "value": "391",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "85908",
      "attributes": {
        "key": "chapter_description",
        "value": "Beat #4",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "85909",
      "attributes": {
        "key": "chapter_timecode",
        "value": "509",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "85910",
      "attributes": {
        "key": "chapter_description",
        "value": "Beat #5",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145859",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145860",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145861",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145862",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145863",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145864",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145865",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145866",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145867",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145868",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145869",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "145870",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "145871",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "4",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "145872",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "145873",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "4",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "145874",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "145875",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "5",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "145876",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "145877",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "5",
        "position": 10
      }
    },
    {
      "type": "contentData",
      "id": "145878",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78840",
      "attributes": {
        "tag": "rudiments",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78841",
      "attributes": {
        "tag": "beats",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78842",
      "attributes": {
        "tag": "dave atkinson",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78843",
      "attributes": {
        "tag": "intermediate",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78844",
      "attributes": {
        "tag": "groove",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78845",
      "attributes": {
        "tag": "4",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78846",
      "attributes": {
        "tag": "applications",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78847",
      "attributes": {
        "tag": "application",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78848",
      "attributes": {
        "tag": "beat",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78849",
      "attributes": {
        "tag": "rudiment",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78850",
      "attributes": {
        "tag": "grooves",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78851",
      "attributes": {
        "tag": "singles",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78852",
      "attributes": {
        "tag": "stroke",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "78853",
      "attributes": {
        "tag": "strokes",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "78854",
      "attributes": {
        "tag": "roll",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "78855",
      "attributes": {
        "tag": "rolls",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "78856",
      "attributes": {
        "tag": "single",
        "position": 17
      }
    },
    {
      "type": "parent",
      "id": "743",
      "attributes": {
        "child_position": 3
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "20516"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "2574",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12159",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20552_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23772",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01d-01-60.mp4",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23774",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01d-01-90.mp4",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "23775",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-01d-01.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23776",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01d-02-60.mp4",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "23778",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01d-02-90.mp4",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "23779",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-01d-02.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "23780",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01d-03-60.mp4",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "23782",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01d-03-90.mp4",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "23783",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-01d-03.png",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "23784",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01d-04-60.mp4",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "23786",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01d-04-90.mp4",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "23787",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-01d-04.png",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "23788",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01d-05-60.mp4",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "23790",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-01d-05-90.mp4",
        "position": 10
      }
    },
    {
      "type": "contentData",
      "id": "23791",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-01d-05.png",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "43626",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43627",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/pdf/dci-01d.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43628",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "43629",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/audio/dci-01d.zip",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72494",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/465725831_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "85921",
      "attributes": {
        "key": "chapter_timecode",
        "value": "33",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "85922",
      "attributes": {
        "key": "chapter_description",
        "value": "Fill #1",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "85923",
      "attributes": {
        "key": "chapter_timecode",
        "value": "134",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "85924",
      "attributes": {
        "key": "chapter_description",
        "value": "Fill #2",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "85925",
      "attributes": {
        "key": "chapter_timecode",
        "value": "292",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "85926",
      "attributes": {
        "key": "chapter_description",
        "value": "Fill #3",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "85927",
      "attributes": {
        "key": "chapter_timecode",
        "value": "403",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "85928",
      "attributes": {
        "key": "chapter_description",
        "value": "Fill #4",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "85929",
      "attributes": {
        "key": "chapter_timecode",
        "value": "538",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "85930",
      "attributes": {
        "key": "chapter_description",
        "value": "Fill #5",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145839",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145840",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145841",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145842",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145843",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145844",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145845",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145846",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145847",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145848",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145849",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "145850",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "145851",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "4",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "145852",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "145853",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "4",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "145854",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "145855",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "5",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "145856",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "145857",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "5",
        "position": 10
      }
    },
    {
      "type": "contentData",
      "id": "145858",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78825",
      "attributes": {
        "tag": "fills",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78826",
      "attributes": {
        "tag": "rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78827",
      "attributes": {
        "tag": "dave atkinson",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78828",
      "attributes": {
        "tag": "intermediate",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78829",
      "attributes": {
        "tag": "4",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78830",
      "attributes": {
        "tag": "fill",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78831",
      "attributes": {
        "tag": "applications",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78832",
      "attributes": {
        "tag": "application",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78833",
      "attributes": {
        "tag": "rudiment",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78834",
      "attributes": {
        "tag": "singles",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78835",
      "attributes": {
        "tag": "stroke",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78836",
      "attributes": {
        "tag": "strokes",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78837",
      "attributes": {
        "tag": "roll",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "78838",
      "attributes": {
        "tag": "rolls",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "78839",
      "attributes": {
        "tag": "single",
        "position": 15
      }
    },
    {
      "type": "parent",
      "id": "744",
      "attributes": {
        "child_position": 4
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "20516"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "2575",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12161",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20554_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "43620",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Click Track",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "43621",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/courses/audio/dci-01e-wc.mp3",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "43622",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 No-Click Track",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43623",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/courses/audio/dci-01e-woc.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43624",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "43625",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/pdf/dci-01e.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72493",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/465704909_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78807",
      "attributes": {
        "tag": "rudiments",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78808",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78809",
      "attributes": {
        "tag": "intermediate",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78810",
      "attributes": {
        "tag": "4",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78811",
      "attributes": {
        "tag": "Play Along",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78812",
      "attributes": {
        "tag": "applications",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78813",
      "attributes": {
        "tag": "application",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78814",
      "attributes": {
        "tag": "applied",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78815",
      "attributes": {
        "tag": "rudiment",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78816",
      "attributes": {
        "tag": "singles",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78817",
      "attributes": {
        "tag": "stroke",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78818",
      "attributes": {
        "tag": "strokes",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78819",
      "attributes": {
        "tag": "play-alongs",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "78820",
      "attributes": {
        "tag": "roll",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "78821",
      "attributes": {
        "tag": "rolls",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "78822",
      "attributes": {
        "tag": "apply",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "78823",
      "attributes": {
        "tag": "single",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "78824",
      "attributes": {
        "tag": "alongs",
        "position": 18
      }
    },
    {
      "type": "parent",
      "id": "745",
      "attributes": {
        "child_position": 5
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "20516"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "2569",
      "attributes": {
        "key": "description",
        "value": "<p>The single stroke four is one of the 40 drum rudiments. This course will provide you with some practice pad exercises that will help you learn the sticking pattern, and also some practical drum-set applications.</p>",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12164",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dci-02.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41622",
      "attributes": {
        "key": "resource_name",
        "value": "Course Resources Pack",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41623",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/resource-files/dci-02-single-stroke-four.zip",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41624",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41625",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/pdf/dci-02.pdf",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7029",
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
      "id": "5955",
      "attributes": {
        "topic": "Rudiments",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78787",
      "attributes": {
        "tag": "fills",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78788",
      "attributes": {
        "tag": "rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78789",
      "attributes": {
        "tag": "beats",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78790",
      "attributes": {
        "tag": "dave atkinson",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78791",
      "attributes": {
        "tag": "intermediate",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78792",
      "attributes": {
        "tag": "groove",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78793",
      "attributes": {
        "tag": "4",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78794",
      "attributes": {
        "tag": "Play Along",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78795",
      "attributes": {
        "tag": "fill",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78796",
      "attributes": {
        "tag": "beat",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78797",
      "attributes": {
        "tag": "rudiment",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78798",
      "attributes": {
        "tag": "grooves",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78799",
      "attributes": {
        "tag": "four",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "78800",
      "attributes": {
        "tag": "singles",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "78801",
      "attributes": {
        "tag": "stroke",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "78802",
      "attributes": {
        "tag": "strokes",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "78803",
      "attributes": {
        "tag": "play-alongs",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "78804",
      "attributes": {
        "tag": "single",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "78805",
      "attributes": {
        "tag": "alongs",
        "position": 19
      }
    },
    {
      "type": "tag",
      "id": "78806",
      "attributes": {
        "tag": "fours",
        "position": 20
      }
    },
    {
      "type": "contentData",
      "id": "2576",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12166",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20558_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23654",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02a-01-60.mp4",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23656",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02a-01-90.mp4",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "23657",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-02a-01.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23658",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02a-02-60.mp4",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "23660",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02a-02-90.mp4",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "23661",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-02a-02.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "23662",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02a-03-60.mp4",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "23664",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02a-03-90.mp4",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "23665",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-02a-03.png",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "43616",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43617",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/pdf/dci-02a.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43618",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "43619",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/audio/dci-02a.zip",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72492",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/465753843_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "84955",
      "attributes": {
        "key": "chapter_timecode",
        "value": "58",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "84956",
      "attributes": {
        "key": "chapter_description",
        "value": "#1 - Basic Rudiment",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "84957",
      "attributes": {
        "key": "chapter_timecode",
        "value": "138",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "84958",
      "attributes": {
        "key": "chapter_description",
        "value": "#2 - 16th Note Triplets",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "84959",
      "attributes": {
        "key": "chapter_description",
        "value": "#3 - Rudiment Variation Challenge",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "84960",
      "attributes": {
        "key": "chapter_timecode",
        "value": "204",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145827",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145828",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145829",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145830",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145831",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145832",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145833",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145834",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145835",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145836",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145837",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "145838",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78774",
      "attributes": {
        "tag": "rudiments",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78775",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78776",
      "attributes": {
        "tag": "intermediate",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78777",
      "attributes": {
        "tag": "4",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78778",
      "attributes": {
        "tag": "rudiment",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78779",
      "attributes": {
        "tag": "four",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78780",
      "attributes": {
        "tag": "singles",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78781",
      "attributes": {
        "tag": "stroke",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78782",
      "attributes": {
        "tag": "strokes",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78783",
      "attributes": {
        "tag": "intro",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78784",
      "attributes": {
        "tag": "introduction",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78785",
      "attributes": {
        "tag": "single",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78786",
      "attributes": {
        "tag": "fours",
        "position": 13
      }
    },
    {
      "type": "parent",
      "id": "746",
      "attributes": {
        "child_position": 1
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "20556"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "2577",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12168",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20560_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23666",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02b-01-60.mp4",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23668",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02b-01-90.mp4",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "23669",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-02b-01.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23670",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02b-02-60.mp4",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "23672",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02b-02-90.mp4",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "23673",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-02b-02.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "23674",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02b-03-120.mp4",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "23676",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02b-03-80.mp4",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "23677",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-02b-03.png",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "43612",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43613",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/pdf/dci-02b.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43614",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "43615",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/audio/dci-02b.zip",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72491",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/465751957_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "84963",
      "attributes": {
        "key": "chapter_timecode",
        "value": "23",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "84964",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #1",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "84965",
      "attributes": {
        "key": "chapter_timecode",
        "value": "182",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "84966",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #2 - Rudiment accent challenge",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "84967",
      "attributes": {
        "key": "chapter_timecode",
        "value": "338",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "84968",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #3",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145815",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145816",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145817",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145818",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145819",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145820",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145821",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145822",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145823",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145824",
      "attributes": {
        "key": "sbt_bpm",
        "value": "120",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145825",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "145826",
      "attributes": {
        "key": "sbt_bpm",
        "value": "80",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78759",
      "attributes": {
        "tag": "rudiments",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78760",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78761",
      "attributes": {
        "tag": "intermediate",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78762",
      "attributes": {
        "tag": "4",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78763",
      "attributes": {
        "tag": "rudiment",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78764",
      "attributes": {
        "tag": "four",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78765",
      "attributes": {
        "tag": "singles",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78766",
      "attributes": {
        "tag": "stroke",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78767",
      "attributes": {
        "tag": "strokes",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78768",
      "attributes": {
        "tag": "control",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78769",
      "attributes": {
        "tag": "speed",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78770",
      "attributes": {
        "tag": "roll",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78771",
      "attributes": {
        "tag": "rolls",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "78772",
      "attributes": {
        "tag": "single",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "78773",
      "attributes": {
        "tag": "fours",
        "position": 15
      }
    },
    {
      "type": "parent",
      "id": "747",
      "attributes": {
        "child_position": 2
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "20556"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "2578",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12170",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/courses/sheet-music/dci-02c.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12171",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20563_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23678",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02c-01-60.mp4",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23680",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02c-01-90.mp4",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "23681",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-02c-01.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23682",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02c-02-60.mp4",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "23684",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02c-02-90.mp4",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "23685",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-02c-02.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "23686",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02c-03-60.mp4",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "23688",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02c-03-90.mp4",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "23689",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-02c-03.png",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "23690",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02c-04-60.mp4",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "23692",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02c-04-90.mp4",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "23693",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-02c-04.png",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "23694",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02c-05-60.mp4",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "23696",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02c-05-90.mp4",
        "position": 10
      }
    },
    {
      "type": "contentData",
      "id": "23697",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-02c-05.png",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "43608",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43609",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/pdf/dci-02c.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43610",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "43611",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/audio/dci-02c.zip",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72490",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/465757745_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "84969",
      "attributes": {
        "key": "chapter_timecode",
        "value": "23",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "84971",
      "attributes": {
        "key": "chapter_timecode",
        "value": "114",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "84973",
      "attributes": {
        "key": "chapter_timecode",
        "value": "252",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "84975",
      "attributes": {
        "key": "chapter_timecode",
        "value": "362",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "84977",
      "attributes": {
        "key": "chapter_description",
        "value": "Beat #1",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "84978",
      "attributes": {
        "key": "chapter_description",
        "value": "Beat #2",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "84979",
      "attributes": {
        "key": "chapter_description",
        "value": "Beat #3",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "84980",
      "attributes": {
        "key": "chapter_description",
        "value": "Beat #4",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "84981",
      "attributes": {
        "key": "chapter_description",
        "value": "Beat #5",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "84982",
      "attributes": {
        "key": "chapter_timecode",
        "value": "446",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145795",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145796",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145797",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145798",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145799",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145800",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145801",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145802",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145803",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145804",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145805",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "145806",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "145807",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "4",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "145808",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "145809",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "4",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "145810",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "145811",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "5",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "145812",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "145813",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "5",
        "position": 10
      }
    },
    {
      "type": "contentData",
      "id": "145814",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78742",
      "attributes": {
        "tag": "rudiments",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78743",
      "attributes": {
        "tag": "beats",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78744",
      "attributes": {
        "tag": "dave atkinson",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78745",
      "attributes": {
        "tag": "intermediate",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78746",
      "attributes": {
        "tag": "groove",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78747",
      "attributes": {
        "tag": "4",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78748",
      "attributes": {
        "tag": "applications",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78749",
      "attributes": {
        "tag": "application",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78750",
      "attributes": {
        "tag": "beat",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78751",
      "attributes": {
        "tag": "rudiment",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78752",
      "attributes": {
        "tag": "grooves",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78753",
      "attributes": {
        "tag": "four",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78754",
      "attributes": {
        "tag": "singles",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "78755",
      "attributes": {
        "tag": "stroke",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "78756",
      "attributes": {
        "tag": "strokes",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "78757",
      "attributes": {
        "tag": "single",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "78758",
      "attributes": {
        "tag": "fours",
        "position": 17
      }
    },
    {
      "type": "parent",
      "id": "748",
      "attributes": {
        "child_position": 3
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "20556"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "2579",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12173",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20565_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23698",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02d-01-60.mp4",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23700",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02d-01-90.mp4",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "23701",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-02d-01.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23702",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02d-02-60.mp4",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "23704",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02d-02-90.mp4",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "23705",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-02d-02.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "23706",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02d-03-60.mp4",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "23708",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02d-03-90.mp4",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "23709",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-02d-03.png",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "23710",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02d-04-60.mp4",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "23711",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-02d-04.png",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "23712",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02d-05-60.mp4",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "23714",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-02d-05-90.mp4",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "23715",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-02d-05.png",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "43604",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43605",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/pdf/dci-02d.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43606",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "43607",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/audio/dci-02d.zip",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72489",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/465756979_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "84983",
      "attributes": {
        "key": "chapter_timecode",
        "value": "26",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "84984",
      "attributes": {
        "key": "chapter_description",
        "value": "Fill #1",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "84985",
      "attributes": {
        "key": "chapter_timecode",
        "value": "208",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "84986",
      "attributes": {
        "key": "chapter_description",
        "value": "Fill #2",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "84987",
      "attributes": {
        "key": "chapter_timecode",
        "value": "311",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "84988",
      "attributes": {
        "key": "chapter_description",
        "value": "Fill #3",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "84989",
      "attributes": {
        "key": "chapter_timecode",
        "value": "453",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "84990",
      "attributes": {
        "key": "chapter_description",
        "value": "Fill #4",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "84991",
      "attributes": {
        "key": "chapter_timecode",
        "value": "572",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "84992",
      "attributes": {
        "key": "chapter_description",
        "value": "Fill #5",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145777",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145778",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145779",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145780",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145781",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145782",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145783",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145784",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145785",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145786",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145787",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "145788",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "145789",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "4",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "145790",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "145791",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "5",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "145792",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "145793",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "5",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "145794",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78727",
      "attributes": {
        "tag": "fills",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78728",
      "attributes": {
        "tag": "rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78729",
      "attributes": {
        "tag": "dave atkinson",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78730",
      "attributes": {
        "tag": "intermediate",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78731",
      "attributes": {
        "tag": "4",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78732",
      "attributes": {
        "tag": "fill",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78733",
      "attributes": {
        "tag": "applications",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78734",
      "attributes": {
        "tag": "application",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78735",
      "attributes": {
        "tag": "rudiment",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78736",
      "attributes": {
        "tag": "four",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78737",
      "attributes": {
        "tag": "singles",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78738",
      "attributes": {
        "tag": "stroke",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78739",
      "attributes": {
        "tag": "strokes",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "78740",
      "attributes": {
        "tag": "single",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "78741",
      "attributes": {
        "tag": "fours",
        "position": 15
      }
    },
    {
      "type": "parent",
      "id": "749",
      "attributes": {
        "child_position": 4
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "20556"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "2580",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12175",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20567_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "43598",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Click Track",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "43599",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/courses/audio/dci-02e-wc.mp3",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "43600",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 No-Click Track",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43601",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/courses/audio/dci-02e-woc.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43602",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "43603",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/pdf/dci-02e.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72488",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/465743721_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78709",
      "attributes": {
        "tag": "four",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78710",
      "attributes": {
        "tag": "singles",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78711",
      "attributes": {
        "tag": "stroke",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78712",
      "attributes": {
        "tag": "strokes",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "78713",
      "attributes": {
        "tag": "play-alongs",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "78714",
      "attributes": {
        "tag": "apply",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "78715",
      "attributes": {
        "tag": "single",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "78716",
      "attributes": {
        "tag": "alongs",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "78717",
      "attributes": {
        "tag": "fours",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "78718",
      "attributes": {
        "tag": "rudiments",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78719",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78720",
      "attributes": {
        "tag": "intermediate",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78721",
      "attributes": {
        "tag": "4",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78722",
      "attributes": {
        "tag": "Play Along",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78723",
      "attributes": {
        "tag": "applications",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78724",
      "attributes": {
        "tag": "application",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78725",
      "attributes": {
        "tag": "applied",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78726",
      "attributes": {
        "tag": "rudiment",
        "position": 9
      }
    },
    {
      "type": "parent",
      "id": "750",
      "attributes": {
        "child_position": 5
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "20556"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "2568",
      "attributes": {
        "key": "description",
        "value": "<p>The single stroke seven is one of the 40 drum rudiments. This course will provide you with some speed and control exercises and also some practical drum-set applications.</p>",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12178",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dci-03.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41618",
      "attributes": {
        "key": "resource_name",
        "value": "Course Resources Pack",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41619",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/resource-files/dci-03-single-stroke-seven.zip",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41620",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41621",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/pdf/dci-03.pdf",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7028",
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
      "id": "5954",
      "attributes": {
        "topic": "Rudiments",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78689",
      "attributes": {
        "tag": "fills",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78690",
      "attributes": {
        "tag": "rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78691",
      "attributes": {
        "tag": "beats",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78692",
      "attributes": {
        "tag": "dave atkinson",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78693",
      "attributes": {
        "tag": "intermediate",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78694",
      "attributes": {
        "tag": "groove",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78695",
      "attributes": {
        "tag": "4",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78696",
      "attributes": {
        "tag": "Play Along",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78697",
      "attributes": {
        "tag": "fill",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78698",
      "attributes": {
        "tag": "beat",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78699",
      "attributes": {
        "tag": "rudiment",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78700",
      "attributes": {
        "tag": "grooves",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78701",
      "attributes": {
        "tag": "seven",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "78702",
      "attributes": {
        "tag": "singles",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "78703",
      "attributes": {
        "tag": "stroke",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "78704",
      "attributes": {
        "tag": "strokes",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "78705",
      "attributes": {
        "tag": "sevens",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "78706",
      "attributes": {
        "tag": "play-alongs",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "78707",
      "attributes": {
        "tag": "single",
        "position": 19
      }
    },
    {
      "type": "tag",
      "id": "78708",
      "attributes": {
        "tag": "alongs",
        "position": 20
      }
    },
    {
      "type": "contentData",
      "id": "2581",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12180",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20573_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23594",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03a-01-60.mp4",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23596",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03a-01-90.mp4",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "23597",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-03a-01.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23598",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03a-02-60.mp4",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "23600",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03a-02-90.mp4",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "23601",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-03a-02.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "23602",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03a-03-60.mp4",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "23604",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03a-03-90.mp4",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "23605",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-03a-03.png",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "43594",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43595",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/pdf/dci-03a.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43596",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "43597",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/audio/dci-03a.zip",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72487",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/465774499_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "84705",
      "attributes": {
        "key": "chapter_timecode",
        "value": "29",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "84706",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #1 - Basic Rudiment",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "84707",
      "attributes": {
        "key": "chapter_timecode",
        "value": "121",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "84708",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #2 - 16th Note Triplets",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "84709",
      "attributes": {
        "key": "chapter_timecode",
        "value": "190",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "84710",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #3 - Rudiment Variation Challenge",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145765",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145766",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145767",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145768",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145769",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145770",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145771",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145772",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145773",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145774",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145775",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "145776",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78676",
      "attributes": {
        "tag": "rudiments",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78677",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78678",
      "attributes": {
        "tag": "intermediate",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78679",
      "attributes": {
        "tag": "4",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78680",
      "attributes": {
        "tag": "rudiment",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78681",
      "attributes": {
        "tag": "seven",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78682",
      "attributes": {
        "tag": "singles",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78683",
      "attributes": {
        "tag": "stroke",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78684",
      "attributes": {
        "tag": "strokes",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78685",
      "attributes": {
        "tag": "sevens",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78686",
      "attributes": {
        "tag": "intro",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78687",
      "attributes": {
        "tag": "introduction",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78688",
      "attributes": {
        "tag": "single",
        "position": 13
      }
    },
    {
      "type": "parent",
      "id": "751",
      "attributes": {
        "child_position": 1
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "20571"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "2582",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12182",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20576_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23606",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03b-01-60.mp4",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23608",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03b-01-90.mp4",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "23609",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-03b-01.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23610",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03b-02-60.mp4",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "23612",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03b-02-90.mp4",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "23613",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-03b-02.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43590",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43591",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/pdf/dci-03b.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43592",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "43593",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/audio/dci-03b.zip",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72486",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/465767749_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "84716",
      "attributes": {
        "key": "chapter_timecode",
        "value": "21",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "84717",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #1",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "84723",
      "attributes": {
        "key": "chapter_timecode",
        "value": "96",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "84724",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #2 - Speed Builder",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145757",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145758",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145759",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145760",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145761",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145762",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145763",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145764",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78663",
      "attributes": {
        "tag": "rudiments",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78664",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78665",
      "attributes": {
        "tag": "intermediate",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78666",
      "attributes": {
        "tag": "4",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78667",
      "attributes": {
        "tag": "rudiment",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78668",
      "attributes": {
        "tag": "seven",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78669",
      "attributes": {
        "tag": "singles",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78670",
      "attributes": {
        "tag": "stroke",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78671",
      "attributes": {
        "tag": "strokes",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78672",
      "attributes": {
        "tag": "control",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78673",
      "attributes": {
        "tag": "speed",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78674",
      "attributes": {
        "tag": "sevens",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78675",
      "attributes": {
        "tag": "single",
        "position": 13
      }
    },
    {
      "type": "parent",
      "id": "752",
      "attributes": {
        "child_position": 2
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "20571"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "2583",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12184",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20578_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23614",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03c-01-60.mp4",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23616",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03c-01-90.mp4",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "23617",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-03c-01.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23618",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03c-02-60.mp4",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "23620",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03c-02-90.mp4",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "23621",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-03c-02.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "23622",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03c-03-60.mp4",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "23624",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03c-03-90.mp4",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "23625",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-03c-03.png",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "23626",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03c-04-60.mp4",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "23628",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03c-04-90.mp4",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "23629",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-03c-04.png",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "23630",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03c-05-60.mp4",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "23632",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03c-05-90.mp4",
        "position": 10
      }
    },
    {
      "type": "contentData",
      "id": "23633",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-03c-05.png",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "43586",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43587",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/pdf/dci-03c.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43588",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "43589",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/audio/dci-03c.zip",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72485",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/465789987_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "84728",
      "attributes": {
        "key": "chapter_timecode",
        "value": "43",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "84729",
      "attributes": {
        "key": "chapter_description",
        "value": "Beat #1",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "84733",
      "attributes": {
        "key": "chapter_timecode",
        "value": "190",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "84734",
      "attributes": {
        "key": "chapter_description",
        "value": "Beat #2",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "84738",
      "attributes": {
        "key": "chapter_timecode",
        "value": "396",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "84739",
      "attributes": {
        "key": "chapter_description",
        "value": "Beat #3",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "84744",
      "attributes": {
        "key": "chapter_timecode",
        "value": "621",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "84745",
      "attributes": {
        "key": "chapter_description",
        "value": "Beat #4",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "84749",
      "attributes": {
        "key": "chapter_timecode",
        "value": "833",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "84750",
      "attributes": {
        "key": "chapter_description",
        "value": "Beat #5",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145737",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "4",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "145738",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "145739",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "5",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "145740",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "145741",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "5",
        "position": 10
      }
    },
    {
      "type": "contentData",
      "id": "145742",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 10
      }
    },
    {
      "type": "contentData",
      "id": "145743",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145744",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145745",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145746",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145747",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145748",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145749",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145750",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145751",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145752",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145753",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "145754",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "145755",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "4",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "145756",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78646",
      "attributes": {
        "tag": "fills",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78647",
      "attributes": {
        "tag": "rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78648",
      "attributes": {
        "tag": "beats",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78649",
      "attributes": {
        "tag": "dave atkinson",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78650",
      "attributes": {
        "tag": "intermediate",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78651",
      "attributes": {
        "tag": "4",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78652",
      "attributes": {
        "tag": "fill",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78653",
      "attributes": {
        "tag": "applications",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78654",
      "attributes": {
        "tag": "application",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78655",
      "attributes": {
        "tag": "beat",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78656",
      "attributes": {
        "tag": "rudiment",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78657",
      "attributes": {
        "tag": "seven",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78658",
      "attributes": {
        "tag": "singles",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "78659",
      "attributes": {
        "tag": "stroke",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "78660",
      "attributes": {
        "tag": "strokes",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "78661",
      "attributes": {
        "tag": "sevens",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "78662",
      "attributes": {
        "tag": "single",
        "position": 17
      }
    },
    {
      "type": "parent",
      "id": "753",
      "attributes": {
        "child_position": 3
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "20571"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "2584",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12186",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20580_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23634",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03d-01-60.mp4",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23636",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03d-01-90.mp4",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "23637",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-03d-01.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23638",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03d-02-60.mp4",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "23640",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03d-02-90.mp4",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "23641",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-03d-02.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "23642",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03d-03-60.mp4",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "23644",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03d-03-90.mp4",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "23645",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-03d-03.png",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "23646",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03d-04-60.mp4",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "23648",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03d-04-90.mp4",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "23649",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-03d-04.png",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "23650",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03d-05-60.mp4",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "23652",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-03d-05-90.mp4",
        "position": 10
      }
    },
    {
      "type": "contentData",
      "id": "23653",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-03d-05.png",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "43582",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43583",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/pdf/dci-03d.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43584",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "43585",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/audio/dci-03d.zip",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72484",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/465788774_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "84754",
      "attributes": {
        "key": "chapter_timecode",
        "value": "45",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "84755",
      "attributes": {
        "key": "chapter_description",
        "value": "Fill #1",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "84758",
      "attributes": {
        "key": "chapter_timecode",
        "value": "224",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "84759",
      "attributes": {
        "key": "chapter_description",
        "value": "Fill #2",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "84764",
      "attributes": {
        "key": "chapter_timecode",
        "value": "364",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "84765",
      "attributes": {
        "key": "chapter_description",
        "value": "Fill #3",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "84768",
      "attributes": {
        "key": "chapter_timecode",
        "value": "523",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "84769",
      "attributes": {
        "key": "chapter_description",
        "value": "Fill #4",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "84774",
      "attributes": {
        "key": "chapter_timecode",
        "value": "696",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "84775",
      "attributes": {
        "key": "chapter_description",
        "value": "Fill #5",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145717",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145718",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145719",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145720",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145721",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145722",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145723",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145724",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145725",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145726",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145727",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "145728",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "145729",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "4",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "145730",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "145731",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "4",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "145732",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "145733",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "5",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "145734",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "145735",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "5",
        "position": 10
      }
    },
    {
      "type": "contentData",
      "id": "145736",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78631",
      "attributes": {
        "tag": "fills",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78632",
      "attributes": {
        "tag": "rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78633",
      "attributes": {
        "tag": "dave atkinson",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78634",
      "attributes": {
        "tag": "intermediate",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78635",
      "attributes": {
        "tag": "4",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78636",
      "attributes": {
        "tag": "fill",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78637",
      "attributes": {
        "tag": "applications",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78638",
      "attributes": {
        "tag": "application",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78639",
      "attributes": {
        "tag": "rudiment",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78640",
      "attributes": {
        "tag": "seven",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78641",
      "attributes": {
        "tag": "singles",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78642",
      "attributes": {
        "tag": "stroke",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78643",
      "attributes": {
        "tag": "strokes",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "78644",
      "attributes": {
        "tag": "sevens",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "78645",
      "attributes": {
        "tag": "single",
        "position": 15
      }
    },
    {
      "type": "parent",
      "id": "754",
      "attributes": {
        "child_position": 4
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "20571"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "2585",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12188",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20582_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "43576",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 No-Click Track",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "43577",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/courses/audio/dci-03e-woc.mp3",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "43578",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Click Track",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43579",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/courses/audio/dci-03e-wc.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43580",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "43581",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/pdf/dci-03e.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72483",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/465765496_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78613",
      "attributes": {
        "tag": "rudiments",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78614",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78615",
      "attributes": {
        "tag": "intermediate",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78616",
      "attributes": {
        "tag": "4",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78617",
      "attributes": {
        "tag": "Play Along",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78618",
      "attributes": {
        "tag": "applications",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78619",
      "attributes": {
        "tag": "application",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78620",
      "attributes": {
        "tag": "applied",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78621",
      "attributes": {
        "tag": "rudiment",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78622",
      "attributes": {
        "tag": "seven",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78623",
      "attributes": {
        "tag": "singles",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78624",
      "attributes": {
        "tag": "stroke",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78625",
      "attributes": {
        "tag": "strokes",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "78626",
      "attributes": {
        "tag": "sevens",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "78627",
      "attributes": {
        "tag": "play-alongs",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "78628",
      "attributes": {
        "tag": "apply",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "78629",
      "attributes": {
        "tag": "single",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "78630",
      "attributes": {
        "tag": "alongs",
        "position": 18
      }
    },
    {
      "type": "parent",
      "id": "755",
      "attributes": {
        "child_position": 5
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "20571"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "2567",
      "attributes": {
        "key": "description",
        "value": "The double stroke roll is one of the 40 drum rudiments. This course will provide you with some practice pad exercises that will help you learn the sticking pattern, and also some practical drum-set applications.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12191",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dci-05.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41614",
      "attributes": {
        "key": "resource_name",
        "value": "Course Resources Pack",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41615",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/resource-files/dci-05-double-stroke-roll.zip",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41616",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41617",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/pdf/dci-05.pdf",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7027",
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
      "id": "5953",
      "attributes": {
        "topic": "Rudiments",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78592",
      "attributes": {
        "tag": "fills",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78593",
      "attributes": {
        "tag": "rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78594",
      "attributes": {
        "tag": "beats",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78595",
      "attributes": {
        "tag": "dave atkinson",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78596",
      "attributes": {
        "tag": "intermediate",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78597",
      "attributes": {
        "tag": "groove",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78598",
      "attributes": {
        "tag": "4",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78599",
      "attributes": {
        "tag": "2",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78600",
      "attributes": {
        "tag": "Play Along",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78601",
      "attributes": {
        "tag": "double",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78602",
      "attributes": {
        "tag": "fill",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78603",
      "attributes": {
        "tag": "beat",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78604",
      "attributes": {
        "tag": "rudiment",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "78605",
      "attributes": {
        "tag": "grooves",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "78606",
      "attributes": {
        "tag": "doubles",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "78607",
      "attributes": {
        "tag": "stroke",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "78608",
      "attributes": {
        "tag": "strokes",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "78609",
      "attributes": {
        "tag": "play-alongs",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "78610",
      "attributes": {
        "tag": "roll",
        "position": 19
      }
    },
    {
      "type": "tag",
      "id": "78611",
      "attributes": {
        "tag": "rolls",
        "position": 20
      }
    },
    {
      "type": "tag",
      "id": "78612",
      "attributes": {
        "tag": "alongs",
        "position": 21
      }
    },
    {
      "type": "contentData",
      "id": "2586",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12193",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20586_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12194",
      "attributes": {
        "key": "learning_path_description",
        "value": "By now, you have a good grasp on the proper grips and motions, and you have been challenged with a few exercises. We will now be shifting our focus to 3 main rudiments you want to practice on the regular. You already know the single stroke roll, and have been practicing it since you started this Learning Path (right?), so lets jump with into the double stroke roll. Do not over think your technique here right now, and just focus on getting 2 strokes per hand.                    \n                        <br>\n                        <br>\n                        <span class=\"related\">\n                            <strong>Related Lessons:</strong> \n                            <a href=\"https://www.drumeo.com/members/lessons/library/24105\">Developing A Consistent Double Stroke Roll</a>, \n                            <a href=\"https://www.drumeo.com/members/lessons/library/21848\">30 Day Double Stroke Roll Challenge</a>, \n                            <a href=\"https://www.drumeo.com/members/lessons/library/26470\">Rudiment Burn - Singles To Doubles</a>\n                        </span>\n                    ",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23506",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-05a-01-60.mp4",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23508",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-05a-01-90.mp4",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "23509",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-05a-01.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "23510",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-05a-02-60.mp4",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "23512",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-05a-02-90.mp4",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "23513",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-05a-02.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "23514",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-05a-03-60.mp4",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "23516",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-05a-03-90.mp4",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "23517",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-05a-03.png",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "23518",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-05a-04-60.mp4",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "23520",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-05a-04-90.mp4",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "23521",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-05a-04.png",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "23522",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-05a-05-60.mp4",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "23524",
      "attributes": {
        "key": "sbt_video_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/sbt/dci-05a-05-90.mp4",
        "position": 10
      }
    },
    {
      "type": "contentData",
      "id": "23525",
      "attributes": {
        "key": "sbt_image_url",
        "value": "https://s3.amazonaws.com/drumeosecure/courses/png/dci-05a-05.png",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "43572",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43573",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/pdf/dci-05a.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "43574",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "43575",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/audio/dci-05a.zip",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72482",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/465785411_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "85950",
      "attributes": {
        "key": "chapter_timecode",
        "value": "22",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "85951",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #1 - Basic Rudiment",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "85952",
      "attributes": {
        "key": "chapter_timecode",
        "value": "112",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "85953",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #2 - 16th Notes",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "85954",
      "attributes": {
        "key": "chapter_timecode",
        "value": "226",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "85955",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #3 - 8th Note Triplets",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "85956",
      "attributes": {
        "key": "chapter_timecode",
        "value": "331",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "85957",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #4 - 16th Note Triplets",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "85958",
      "attributes": {
        "key": "chapter_timecode",
        "value": "424",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "85959",
      "attributes": {
        "key": "chapter_description",
        "value": "Exercise #5 - Rudiment Variation Challenge",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145697",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145698",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "145699",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "1",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145700",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "145701",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145702",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "145703",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "2",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145704",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "145705",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145706",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "145707",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "3",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "145708",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "145709",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "4",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "145710",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "145711",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "4",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "145712",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "145713",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "5",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "145714",
      "attributes": {
        "key": "sbt_bpm",
        "value": "60",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "145715",
      "attributes": {
        "key": "sbt_exercise_number",
        "value": "5",
        "position": 10
      }
    },
    {
      "type": "contentData",
      "id": "145716",
      "attributes": {
        "key": "sbt_bpm",
        "value": "90",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78578",
      "attributes": {
        "tag": "rudiments",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78579",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78580",
      "attributes": {
        "tag": "intermediate",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78581",
      "attributes": {
        "tag": "4",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78582",
      "attributes": {
        "tag": "2",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78583",
      "attributes": {
        "tag": "double",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78584",
      "attributes": {
        "tag": "rudiment",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78585",
      "attributes": {
        "tag": "doubles",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78586",
      "attributes": {
        "tag": "stroke",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78587",
      "attributes": {
        "tag": "strokes",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78588",
      "attributes": {
        "tag": "roll",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78589",
      "attributes": {
        "tag": "rolls",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78590",
      "attributes": {
        "tag": "intro",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "78591",
      "attributes": {
        "tag": "introduction",
        "position": 14
      }
    },
    {
      "type": "parent",
      "id": "756",
      "attributes": {
        "child_position": 1
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "20584"
          }
        }
      }
    }
  ],
  "meta": {
    "filterOptions": {
      "content_type": [
        "course",
        "course-part",
        "learning-path-course"
      ],
      "topic": [
        "Beats",
        "theory",
        "fills",
        "styles",
        "technique",
        "rudiments",
        "ear training",
        "independence",
        "musicality",
        "gear"
      ],
      "difficulty": [
        "1",
        "2",
        "3",
        "4",
        "5",
        "6",
        "7",
        "8",
        "9"
      ],
      "instructor": [
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
          "id": 31891,
          "slug": "jay-deachman",
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
          "name": "Jay Deachman",
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
          "id": 31897,
          "slug": "john-blackwell",
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
          "name": "John Blackwell",
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
          "id": 31898,
          "slug": "peter-erskine",
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
          "name": "Peter Erskine",
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
          "id": 31899,
          "slug": "stanton-moore",
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
          "name": "Stanton Moore",
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
          "id": 31900,
          "slug": "jim-riley",
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
          "name": "Jim Riley",
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
          "id": 31902,
          "slug": "matt-garstka",
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
          "name": "Matt Garstka",
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
          "id": 31903,
          "slug": "josh-trager",
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
          "name": "Josh Trager",
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
          "id": 31905,
          "slug": "casey-cooper",
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
          "name": "Casey Cooper",
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
          "id": 31906,
          "slug": "antonio-sanchez",
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
          "name": "Antonio Sanchez",
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
          "id": 31907,
          "slug": "thomas-lang",
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
          "name": "Thomas Lang",
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
          "id": 31910,
          "slug": "carmine-appice",
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
          "name": "Carmine Appice",
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
          "id": 31911,
          "slug": "gergo-borlai",
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
          "name": "Gergo Borlai",
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
          "id": 31912,
          "slug": "daniel-glass",
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
          "name": "Daniel Glass",
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
          "id": 31915,
          "slug": "victor-guidera",
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
          "name": "Victor Guidera",
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
          "id": 31918,
          "slug": "jason-bittner",
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
          "name": "Jason Bittner",
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
          "id": 31919,
          "slug": "henrique-de-almeida",
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
          "name": "Henrique De Almeida",
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
          "id": 31921,
          "slug": "florian-alexandru-zorn",
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
          "name": "Florian Alexandru-Zorn",
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
          "id": 31922,
          "slug": "mark-kelso",
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
          "name": "Mark Kelso",
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
          "id": 31932,
          "slug": "sean-browne",
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
          "name": "Sean Browne",
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
          "id": 31944,
          "slug": "dafnis-prieto",
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
          "name": "Dafnis Prieto",
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
          "id": 31953,
          "slug": "danny-seraphine",
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
          "name": "Danny Seraphine",
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
          "id": 31955,
          "slug": "billy-rymer",
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
          "name": "Billy Rymer",
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
          "id": 31960,
          "slug": "dave-dicenso",
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
          "name": "Dave DiCenso",
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
          "id": 31963,
          "slug": "gulli-briem",
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
          "name": "Gulli Briem",
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
          "id": 31968,
          "slug": "jeff-salem",
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
          "name": "Jeff Salem",
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
          "id": 31971,
          "slug": "adam-marko",
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
          "name": "Adam Marko",
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
          "id": 31974,
          "slug": "peter-szendofi",
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
          "name": "Peter Szendofi",
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
          "id": 31976,
          "slug": "tosin-aribisala",
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
          "name": "Tosin Aribisala",
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
          "id": 31979,
          "slug": "luke-holland",
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
          "name": "Luke Holland",
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
          "id": 31985,
          "slug": "frank-briggs",
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
          "name": "Frank Briggs",
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
          "id": 189941,
          "slug": "siemy-di",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-01-01 20:00:00",
          "archived_on": null,
          "created_on": "2017-12-14 10:06:46",
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
          "name": "Siemy Di",
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
          "id": 189952,
          "slug": "josh-dion",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-14 20:00:00",
          "archived_on": null,
          "created_on": "2017-12-15 11:10:53",
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
          "name": "Josh Dion",
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
          "id": 189979,
          "slug": "darren",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-02-02 20:00:00",
          "archived_on": null,
          "created_on": "2017-12-18 19:01:30",
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
          "name": "Darren Schoepp",
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
          "id": 190202,
          "slug": "rodney-holmes",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2017-12-29 16:00:00",
          "archived_on": null,
          "created_on": "2017-12-29 16:46:04",
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
          "name": "Rodney Holmes",
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
          "id": 190814,
          "slug": "dali-mraz",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-01-14 20:00:00",
          "archived_on": null,
          "created_on": "2018-01-15 10:49:48",
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
          "name": "Dali Mraz",
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
          "id": 191162,
          "slug": "jost-nickel",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-01-24 20:00:00",
          "archived_on": null,
          "created_on": "2018-01-25 11:26:16",
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
          "name": "Jost Nickel",
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
          "id": 191326,
          "slug": "julia-geaman",
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
          "created_on": "2018-01-31 16:43:43",
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
          "name": "Julia Geaman",
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
          "id": 196848,
          "slug": "jason-mcgerr",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-02-25 20:00:00",
          "archived_on": null,
          "created_on": "2018-02-26 09:40:11",
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
          "name": "Jason McGerr",
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
          "id": 202287,
          "slug": "sarah-thawer",
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
          "created_on": "2018-04-11 08:26:03",
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
          "name": "Sarah Thawer",
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
          "id": 202308,
          "slug": "jonathan-moffett",
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
          "created_on": "2018-04-11 09:42:21",
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
          "name": "Jonathan Moffett",
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
          "id": 202766,
          "slug": "harvey-mason",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-04-19 19:00:00",
          "archived_on": null,
          "created_on": "2018-04-20 15:25:20",
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
          "name": "Harvey Mason",
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
          "id": 203867,
          "slug": "tommy-igoe",
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
          "created_on": "2018-05-11 11:07:38",
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
          "name": "Tommy Igoe",
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
          "id": 208181,
          "slug": "dave-king",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-06-24 19:00:00",
          "archived_on": null,
          "created_on": "2018-06-25 08:00:28",
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
          "name": "Dave King",
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
          "id": 209790,
          "slug": "camille-bigeault",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-07-22 19:00:00",
          "archived_on": null,
          "created_on": "2018-07-23 09:08:39",
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
          "name": "Camille Bigeault",
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
          "id": 212504,
          "slug": "carson-gant",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-09-14 19:00:00",
          "archived_on": null,
          "created_on": "2018-09-15 18:49:18",
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
          "name": "Carson Gant",
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
          "id": 214093,
          "slug": "stan-bicknell",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-10-01 19:00:00",
          "archived_on": null,
          "created_on": "2018-10-02 11:35:23",
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
          "name": "Stan Bicknell",
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
          "id": 235167,
          "slug": "david-raouf",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2019-10-17 13:19:32",
          "archived_on": null,
          "created_on": "2019-10-17 13:19:33",
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
          "name": "David Raouf",
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
        }
      ]
    },
    "pagination": {
      "total": 1693,
      "count": 20,
      "per_page": "20",
      "current_page": "1",
      "total_pages": 85
    }
  },
  "links": []
}
EOT;
// -->
@endphp

@section('app')
    @include('sections.user-stats')

    <div class="container w-full h-full mx-auto px-3 pt-4">
        <content-row
            content-list='{{ $rc1 }}'
            section-title="continue"
            section-url="#"
        ></content-row>
    </div>

    <content-catalogue
        level-selector='2'
        topics-filters-title='what do you want to work on?'
        :cards-per-row='4'
        preload-data='{{ $rc1 }}'
        infinite-scroll
        use-courses-content-type-filters
        use-progress-filters
    ></content-catalogue>
@endsection
