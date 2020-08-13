@extends('vue.layout')

@section('title', 'Members - Songs')

@section('menu')
    @include('sections.menu', ['active' => 'edge'])
    @include('sections.edge-nav', ['active' => 'songs'])
@endsection

@php
// <!--
$rc1 = <<<'EOT'
{
  "data": [
    {
      "type": "content",
      "id": "19999",
      "attributes": {
        "slug": "back-in-black-ac-dc",
        "type": "song",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2013-11-27 13:04:01",
        "archivedOn": null,
        "createdOn": "2013-11-27 13:04:01",
        "difficulty": "3",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 19999,
        "qnaVideo": null,
        "style": "Pop/Rock",
        "title": "Back In Black",
        "xp": null,
        "album": "Back in Black",
        "artist": "AC/DC",
        "bpm": "93",
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
        "released": "1980",
        "slowBpm": null,
        "transcriberName": "Hugo Janado",
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
              "id": "2929"
            },
            {
              "type": "contentData",
              "id": "11835"
            },
            {
              "type": "contentData",
              "id": "50226"
            },
            {
              "type": "contentData",
              "id": "50228"
            },
            {
              "type": "contentData",
              "id": "138907"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7139"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "6122"
            },
            {
              "type": "topic",
              "id": "6123"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "2980"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79780"
            },
            {
              "type": "tag",
              "id": "79781"
            },
            {
              "type": "tag",
              "id": "79782"
            },
            {
              "type": "tag",
              "id": "79783"
            },
            {
              "type": "tag",
              "id": "79784"
            },
            {
              "type": "tag",
              "id": "79785"
            },
            {
              "type": "tag",
              "id": "79786"
            },
            {
              "type": "tag",
              "id": "79787"
            },
            {
              "type": "tag",
              "id": "79788"
            },
            {
              "type": "tag",
              "id": "79789"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "566"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20249",
      "attributes": {
        "slug": "all-the-small-things-blink-182",
        "type": "song",
        "sort": 0,
        "status": "published",
        "totalXp": "150",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-01-12 02:33:18",
        "archivedOn": null,
        "createdOn": "2014-01-12 02:33:18",
        "difficulty": "4",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 20249,
        "qnaVideo": null,
        "style": "Pop/Rock",
        "title": "All The Small Things",
        "xp": null,
        "album": "Enema Of The State",
        "artist": "Blink-182",
        "bpm": "147",
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
        "released": "1999",
        "slowBpm": null,
        "transcriberName": "Aaron Edgar",
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
              "id": "2928"
            },
            {
              "type": "contentData",
              "id": "12004"
            },
            {
              "type": "contentData",
              "id": "50223"
            },
            {
              "type": "contentData",
              "id": "50224"
            },
            {
              "type": "contentData",
              "id": "138981"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7083"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "6038"
            },
            {
              "type": "topic",
              "id": "6039"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "2979"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79433"
            },
            {
              "type": "tag",
              "id": "79434"
            },
            {
              "type": "tag",
              "id": "79435"
            },
            {
              "type": "tag",
              "id": "79436"
            },
            {
              "type": "tag",
              "id": "79437"
            },
            {
              "type": "tag",
              "id": "79438"
            },
            {
              "type": "tag",
              "id": "79439"
            },
            {
              "type": "tag",
              "id": "79440"
            },
            {
              "type": "tag",
              "id": "79441"
            },
            {
              "type": "tag",
              "id": "79442"
            },
            {
              "type": "tag",
              "id": "79443"
            },
            {
              "type": "tag",
              "id": "79444"
            },
            {
              "type": "tag",
              "id": "79445"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "542"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21264",
      "attributes": {
        "slug": "crazy-train-ozzy-osbourne",
        "type": "song",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-04-29 12:48:27",
        "archivedOn": null,
        "createdOn": "2014-04-29 12:48:27",
        "difficulty": "3",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 21264,
        "qnaVideo": null,
        "style": "Metal",
        "title": "Crazy Train",
        "xp": null,
        "album": "Blizzard Of Ozz",
        "artist": "Ozzy Osbourne",
        "bpm": "137",
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
        "released": "1980",
        "slowBpm": null,
        "transcriberName": "Hugo Janado",
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
              "id": "2925"
            },
            {
              "type": "contentData",
              "id": "12667"
            },
            {
              "type": "contentData",
              "id": "50207"
            },
            {
              "type": "contentData",
              "id": "50209"
            },
            {
              "type": "contentData",
              "id": "139462"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6932"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5814"
            },
            {
              "type": "topic",
              "id": "5815"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "2966"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "76143"
            },
            {
              "type": "tag",
              "id": "76144"
            },
            {
              "type": "tag",
              "id": "76145"
            },
            {
              "type": "tag",
              "id": "76146"
            },
            {
              "type": "tag",
              "id": "76147"
            },
            {
              "type": "tag",
              "id": "76148"
            },
            {
              "type": "tag",
              "id": "76149"
            },
            {
              "type": "tag",
              "id": "76150"
            },
            {
              "type": "tag",
              "id": "76151"
            },
            {
              "type": "tag",
              "id": "76152"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "482"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21350",
      "attributes": {
        "slug": "get-lucky-daft-punk",
        "type": "song",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-05-13 23:52:59",
        "archivedOn": null,
        "createdOn": "2014-05-13 23:52:59",
        "difficulty": "4",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 21350,
        "qnaVideo": null,
        "style": "Funk",
        "title": "Get Lucky",
        "xp": null,
        "album": "Random Access Memories",
        "artist": "Daft Punk",
        "bpm": "116",
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
        "released": "2013",
        "slowBpm": null,
        "transcriberName": "Hugo Janado",
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
              "id": "2924"
            },
            {
              "type": "contentData",
              "id": "12738"
            },
            {
              "type": "contentData",
              "id": "50203"
            },
            {
              "type": "contentData",
              "id": "50205"
            },
            {
              "type": "contentData",
              "id": "139057"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6917"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5793"
            },
            {
              "type": "topic",
              "id": "5794"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "2965"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "75822"
            },
            {
              "type": "tag",
              "id": "75823"
            },
            {
              "type": "tag",
              "id": "75824"
            },
            {
              "type": "tag",
              "id": "75825"
            },
            {
              "type": "tag",
              "id": "75826"
            },
            {
              "type": "tag",
              "id": "75827"
            },
            {
              "type": "tag",
              "id": "75828"
            },
            {
              "type": "tag",
              "id": "75829"
            },
            {
              "type": "tag",
              "id": "75830"
            },
            {
              "type": "tag",
              "id": "75831"
            },
            {
              "type": "tag",
              "id": "75832"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "477"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21376",
      "attributes": {
        "slug": "sober-tool",
        "type": "song",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-05-18 23:55:25",
        "archivedOn": null,
        "createdOn": "2014-05-18 23:55:25",
        "difficulty": "8",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 21376,
        "qnaVideo": null,
        "style": "Metal",
        "title": "Sober",
        "xp": null,
        "album": "Undertow",
        "artist": "Tool",
        "bpm": "75",
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
        "released": "1993",
        "slowBpm": null,
        "transcriberName": "Aaron Edgar",
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
              "id": "2923"
            },
            {
              "type": "contentData",
              "id": "12768"
            },
            {
              "type": "contentData",
              "id": "50200"
            },
            {
              "type": "contentData",
              "id": "50201"
            },
            {
              "type": "contentData",
              "id": "139775"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6909"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5778"
            },
            {
              "type": "topic",
              "id": "5779"
            },
            {
              "type": "topic",
              "id": "5780"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "2964"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "75664"
            },
            {
              "type": "tag",
              "id": "75665"
            },
            {
              "type": "tag",
              "id": "75666"
            },
            {
              "type": "tag",
              "id": "75667"
            },
            {
              "type": "tag",
              "id": "75668"
            },
            {
              "type": "tag",
              "id": "75669"
            },
            {
              "type": "tag",
              "id": "75670"
            },
            {
              "type": "tag",
              "id": "75671"
            },
            {
              "type": "tag",
              "id": "75672"
            },
            {
              "type": "tag",
              "id": "75673"
            },
            {
              "type": "tag",
              "id": "75674"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "472"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21576",
      "attributes": {
        "slug": "the-sound-of-muzak-porcupine-tree",
        "type": "song",
        "sort": 0,
        "status": "published",
        "totalXp": "150",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-06-15 15:24:37",
        "archivedOn": null,
        "createdOn": "2014-06-15 15:24:37",
        "difficulty": "6",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 21576,
        "qnaVideo": null,
        "style": "Pop/Rock",
        "title": "The Sound Of Muzak",
        "xp": null,
        "album": "In Absentia",
        "artist": "Porcupine Tree",
        "bpm": "95",
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
        "released": "2002",
        "slowBpm": null,
        "transcriberName": "Aaron Edgar & Sergio Ponti",
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
              "id": "2922"
            },
            {
              "type": "contentData",
              "id": "12907"
            },
            {
              "type": "contentData",
              "id": "50196"
            },
            {
              "type": "contentData",
              "id": "50198"
            },
            {
              "type": "contentData",
              "id": "139484"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6877"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5723"
            },
            {
              "type": "topic",
              "id": "5724"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "2963"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "74929"
            },
            {
              "type": "tag",
              "id": "74930"
            },
            {
              "type": "tag",
              "id": "74931"
            },
            {
              "type": "tag",
              "id": "74932"
            },
            {
              "type": "tag",
              "id": "74933"
            },
            {
              "type": "tag",
              "id": "74934"
            },
            {
              "type": "tag",
              "id": "74935"
            },
            {
              "type": "tag",
              "id": "74936"
            },
            {
              "type": "tag",
              "id": "74937"
            },
            {
              "type": "tag",
              "id": "74938"
            },
            {
              "type": "tag",
              "id": "74939"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "447"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21846",
      "attributes": {
        "slug": "mr-big-stuff-jean-knight",
        "type": "song",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2014-07-31 12:13:30",
        "archivedOn": null,
        "createdOn": "2014-07-31 12:13:30",
        "difficulty": "3",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 21846,
        "qnaVideo": null,
        "style": "R&B",
        "title": "Mr. Big Stuff",
        "xp": null,
        "album": "Mr. Big Stuff",
        "artist": "Jean Knight",
        "bpm": "94",
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
        "released": "1971",
        "slowBpm": null,
        "transcriberName": "Stephen Taylor",
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
              "id": "2921"
            },
            {
              "type": "contentData",
              "id": "13115"
            },
            {
              "type": "contentData",
              "id": "50193"
            },
            {
              "type": "contentData",
              "id": "50194"
            },
            {
              "type": "contentData",
              "id": "139229"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6822"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5639"
            },
            {
              "type": "topic",
              "id": "5640"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "2941"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "74088"
            },
            {
              "type": "tag",
              "id": "74089"
            },
            {
              "type": "tag",
              "id": "74090"
            },
            {
              "type": "tag",
              "id": "74091"
            },
            {
              "type": "tag",
              "id": "74092"
            },
            {
              "type": "tag",
              "id": "74093"
            },
            {
              "type": "tag",
              "id": "74094"
            },
            {
              "type": "tag",
              "id": "74095"
            },
            {
              "type": "tag",
              "id": "74096"
            },
            {
              "type": "tag",
              "id": "74097"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "423"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "31104",
      "attributes": {
        "slug": "locked-out-of-heaven-bruno-mars",
        "type": "song",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2017-10-10 00:57:00",
        "archivedOn": null,
        "createdOn": "2017-10-10 00:57:00",
        "difficulty": "3",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 31104,
        "qnaVideo": "37084",
        "style": "R&B",
        "title": "Locked Out Of Heaven",
        "xp": null,
        "album": "Unorthodox Jukebox",
        "artist": "Bruno Mars",
        "bpm": "147",
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
        "released": "2012",
        "slowBpm": null,
        "transcriberName": "Brandon Toews & Hugo Janado",
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
              "id": "2863"
            },
            {
              "type": "contentData",
              "id": "18381"
            },
            {
              "type": "contentData",
              "id": "49964"
            },
            {
              "type": "contentData",
              "id": "49965"
            },
            {
              "type": "contentData",
              "id": "139024"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "5380"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "3719"
            },
            {
              "type": "topic",
              "id": "3720"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "2044"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "50643"
            },
            {
              "type": "tag",
              "id": "50644"
            },
            {
              "type": "tag",
              "id": "50645"
            },
            {
              "type": "tag",
              "id": "50646"
            },
            {
              "type": "tag",
              "id": "50647"
            },
            {
              "type": "tag",
              "id": "50648"
            },
            {
              "type": "tag",
              "id": "50649"
            },
            {
              "type": "tag",
              "id": "50650"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "11"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "31143",
      "attributes": {
        "slug": "summer-of-69-bryan-adams",
        "type": "song",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2017-10-19 03:58:28",
        "archivedOn": null,
        "createdOn": "2017-10-19 03:58:28",
        "difficulty": "3",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 31143,
        "qnaVideo": "37088",
        "style": "Pop/Rock",
        "title": "Summer Of '69",
        "xp": null,
        "album": "Reckless",
        "artist": "Bryan Adams",
        "bpm": "139",
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
        "released": "1984",
        "slowBpm": null,
        "transcriberName": "Brandon Toews",
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": 6,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2862"
            },
            {
              "type": "contentData",
              "id": "18399"
            },
            {
              "type": "contentData",
              "id": "49960"
            },
            {
              "type": "contentData",
              "id": "49962"
            },
            {
              "type": "contentData",
              "id": "139030"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "5373"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "3702"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "2043"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "50526"
            },
            {
              "type": "tag",
              "id": "50527"
            },
            {
              "type": "tag",
              "id": "50528"
            },
            {
              "type": "tag",
              "id": "50529"
            },
            {
              "type": "tag",
              "id": "50530"
            },
            {
              "type": "tag",
              "id": "50531"
            },
            {
              "type": "tag",
              "id": "50532"
            },
            {
              "type": "tag",
              "id": "50533"
            },
            {
              "type": "tag",
              "id": "50534"
            },
            {
              "type": "tag",
              "id": "50535"
            },
            {
              "type": "tag",
              "id": "50536"
            },
            {
              "type": "tag",
              "id": "50537"
            },
            {
              "type": "tag",
              "id": "50538"
            },
            {
              "type": "tag",
              "id": "50539"
            },
            {
              "type": "tag",
              "id": "50540"
            },
            {
              "type": "tag",
              "id": "50541"
            },
            {
              "type": "tag",
              "id": "50542"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "31234",
      "attributes": {
        "slug": "santeria-sublime",
        "type": "song",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2017-10-25 06:31:53",
        "archivedOn": null,
        "createdOn": "2017-10-25 06:31:53",
        "difficulty": "5",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 31234,
        "qnaVideo": "37092",
        "style": "Pop/Rock",
        "title": "Santeria",
        "xp": null,
        "album": "Sublime",
        "artist": "Sublime",
        "bpm": "90",
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
        "released": "1996",
        "slowBpm": null,
        "transcriberName": "Brandon Toews & Hugo Janado",
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": 10,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2861"
            },
            {
              "type": "contentData",
              "id": "18425"
            },
            {
              "type": "contentData",
              "id": "49957"
            },
            {
              "type": "contentData",
              "id": "49958"
            },
            {
              "type": "contentData",
              "id": "139624"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "5363"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "3685"
            },
            {
              "type": "topic",
              "id": "3686"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "2042"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "50346"
            },
            {
              "type": "tag",
              "id": "50347"
            },
            {
              "type": "tag",
              "id": "50348"
            },
            {
              "type": "tag",
              "id": "50349"
            },
            {
              "type": "tag",
              "id": "50350"
            },
            {
              "type": "tag",
              "id": "50351"
            },
            {
              "type": "tag",
              "id": "50352"
            },
            {
              "type": "tag",
              "id": "50353"
            },
            {
              "type": "tag",
              "id": "50354"
            },
            {
              "type": "tag",
              "id": "50355"
            },
            {
              "type": "tag",
              "id": "50356"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "7"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "31246",
      "attributes": {
        "slug": "rock-you-like-a-hurricane-scorpions",
        "type": "song",
        "sort": 0,
        "status": "published",
        "totalXp": "150",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2017-10-30 10:08:30",
        "archivedOn": null,
        "createdOn": "2017-10-30 10:08:30",
        "difficulty": "4",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 31246,
        "qnaVideo": "37095",
        "style": "Metal",
        "title": "Rock You Like A Hurricane",
        "xp": null,
        "album": "Love At First Sting",
        "artist": "Scorpions",
        "bpm": "126",
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
        "released": "1984",
        "slowBpm": null,
        "transcriberName": "Brandon Toews",
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
              "id": "2860"
            },
            {
              "type": "contentData",
              "id": "18438"
            },
            {
              "type": "contentData",
              "id": "49953"
            },
            {
              "type": "contentData",
              "id": "49955"
            },
            {
              "type": "contentData",
              "id": "139571"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "5359"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "3677"
            },
            {
              "type": "topic",
              "id": "3678"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "2041"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "50287"
            },
            {
              "type": "tag",
              "id": "50288"
            },
            {
              "type": "tag",
              "id": "50289"
            },
            {
              "type": "tag",
              "id": "50290"
            },
            {
              "type": "tag",
              "id": "50291"
            },
            {
              "type": "tag",
              "id": "50292"
            },
            {
              "type": "tag",
              "id": "50293"
            },
            {
              "type": "tag",
              "id": "50294"
            },
            {
              "type": "tag",
              "id": "50295"
            },
            {
              "type": "tag",
              "id": "50296"
            },
            {
              "type": "tag",
              "id": "50297"
            },
            {
              "type": "tag",
              "id": "50298"
            },
            {
              "type": "tag",
              "id": "50299"
            },
            {
              "type": "tag",
              "id": "50300"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "6"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "31532",
      "attributes": {
        "slug": "proud-mary-creedence-clearwater-revival",
        "type": "song",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2017-11-27 10:00:35",
        "archivedOn": null,
        "createdOn": "2017-11-27 10:00:35",
        "difficulty": "3",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 31532,
        "qnaVideo": "37111",
        "style": "Pop/Rock",
        "title": "Proud Mary",
        "xp": null,
        "album": "Bayou Country",
        "artist": "Creedence Clearwater Revival",
        "bpm": "121",
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
        "released": "1969",
        "slowBpm": null,
        "transcriberName": "Hugo Janado",
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": 5,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2858"
            },
            {
              "type": "contentData",
              "id": "18571"
            },
            {
              "type": "contentData",
              "id": "49946"
            },
            {
              "type": "contentData",
              "id": "49948"
            },
            {
              "type": "contentData",
              "id": "139056"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "5323"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "3622"
            },
            {
              "type": "topic",
              "id": "3623"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "1989"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "49175"
            },
            {
              "type": "tag",
              "id": "49176"
            },
            {
              "type": "tag",
              "id": "49177"
            },
            {
              "type": "tag",
              "id": "49178"
            },
            {
              "type": "tag",
              "id": "49179"
            },
            {
              "type": "tag",
              "id": "49180"
            },
            {
              "type": "tag",
              "id": "49181"
            },
            {
              "type": "tag",
              "id": "49182"
            },
            {
              "type": "tag",
              "id": "49183"
            },
            {
              "type": "tag",
              "id": "49184"
            },
            {
              "type": "tag",
              "id": "49185"
            },
            {
              "type": "tag",
              "id": "49186"
            },
            {
              "type": "tag",
              "id": "49187"
            },
            {
              "type": "tag",
              "id": "49188"
            },
            {
              "type": "tag",
              "id": "49189"
            },
            {
              "type": "tag",
              "id": "49190"
            },
            {
              "type": "tag",
              "id": "49191"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "1"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "29092",
      "attributes": {
        "slug": "give-it-away-red-hot-chili-peppers",
        "type": "song",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2017-03-27 04:26:01",
        "archivedOn": null,
        "createdOn": "2017-03-27 04:26:01",
        "difficulty": "3",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 29092,
        "qnaVideo": "36842",
        "style": "Pop/Rock",
        "title": "Give It Away",
        "xp": null,
        "album": "Blood Sugar Sex Magik",
        "artist": "Red Hot Chili Peppers",
        "bpm": "92",
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
        "released": "1991",
        "slowBpm": null,
        "transcriberName": "Brandon Toews",
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": 9,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2869"
            },
            {
              "type": "contentData",
              "id": "17472"
            },
            {
              "type": "contentData",
              "id": "49985"
            },
            {
              "type": "contentData",
              "id": "49986"
            },
            {
              "type": "contentData",
              "id": "139532"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "5580"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "4037"
            },
            {
              "type": "topic",
              "id": "4038"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "2294"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "55435"
            },
            {
              "type": "tag",
              "id": "55436"
            },
            {
              "type": "tag",
              "id": "55437"
            },
            {
              "type": "tag",
              "id": "55438"
            },
            {
              "type": "tag",
              "id": "55439"
            },
            {
              "type": "tag",
              "id": "55440"
            },
            {
              "type": "tag",
              "id": "55441"
            },
            {
              "type": "tag",
              "id": "55442"
            },
            {
              "type": "tag",
              "id": "55443"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "61"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "29239",
      "attributes": {
        "slug": "freddie-freeloader-miles-davis",
        "type": "song",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2017-04-10 02:19:54",
        "archivedOn": null,
        "createdOn": "2017-04-10 02:19:54",
        "difficulty": "5",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 29239,
        "qnaVideo": "36851",
        "style": "Jazz",
        "title": "Freddie Freeloader",
        "xp": null,
        "album": "Kind Of Blue",
        "artist": "Miles Davis",
        "bpm": "130",
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
        "released": "1959",
        "slowBpm": null,
        "transcriberName": "Brandon Toews",
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
              "id": "2868"
            },
            {
              "type": "contentData",
              "id": "17530"
            },
            {
              "type": "contentData",
              "id": "49981"
            },
            {
              "type": "contentData",
              "id": "49983"
            },
            {
              "type": "contentData",
              "id": "139383"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "5566"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "4017"
            },
            {
              "type": "topic",
              "id": "4018"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "2271"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "55198"
            },
            {
              "type": "tag",
              "id": "55199"
            },
            {
              "type": "tag",
              "id": "55200"
            },
            {
              "type": "tag",
              "id": "55201"
            },
            {
              "type": "tag",
              "id": "55202"
            },
            {
              "type": "tag",
              "id": "55203"
            },
            {
              "type": "tag",
              "id": "55204"
            },
            {
              "type": "tag",
              "id": "55205"
            },
            {
              "type": "tag",
              "id": "55206"
            },
            {
              "type": "tag",
              "id": "55207"
            },
            {
              "type": "tag",
              "id": "55208"
            },
            {
              "type": "tag",
              "id": "55209"
            },
            {
              "type": "tag",
              "id": "55210"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "56"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "29244",
      "attributes": {
        "slug": "wipe-out-the-surfaris",
        "type": "song",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2017-04-12 02:26:47",
        "archivedOn": null,
        "createdOn": "2017-04-12 02:26:47",
        "difficulty": "3",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 29244,
        "qnaVideo": "36853",
        "style": "Pop/Rock",
        "title": "Wipe Out",
        "xp": null,
        "album": "Wipe Out",
        "artist": "The Surfaris",
        "bpm": "160",
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
        "released": "1963",
        "slowBpm": null,
        "transcriberName": "Dave Atkinson",
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
              "id": "2867"
            },
            {
              "type": "contentData",
              "id": "17540"
            },
            {
              "type": "contentData",
              "id": "49978"
            },
            {
              "type": "contentData",
              "id": "49979"
            },
            {
              "type": "contentData",
              "id": "139729"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "5564"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "4013"
            },
            {
              "type": "topic",
              "id": "4014"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "2270"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "55179"
            },
            {
              "type": "tag",
              "id": "55180"
            },
            {
              "type": "tag",
              "id": "55181"
            },
            {
              "type": "tag",
              "id": "55182"
            },
            {
              "type": "tag",
              "id": "55183"
            },
            {
              "type": "tag",
              "id": "55184"
            },
            {
              "type": "tag",
              "id": "55185"
            },
            {
              "type": "tag",
              "id": "55186"
            },
            {
              "type": "tag",
              "id": "55187"
            },
            {
              "type": "tag",
              "id": "55188"
            },
            {
              "type": "tag",
              "id": "55189"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "55"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "29250",
      "attributes": {
        "slug": "toxicity-system-of-a-down",
        "type": "song",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2017-04-18 02:55:12",
        "archivedOn": null,
        "createdOn": "2017-04-18 02:55:12",
        "difficulty": "5",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 29250,
        "qnaVideo": "36856",
        "style": "Metal",
        "title": "Toxicity",
        "xp": null,
        "album": "Toxicity",
        "artist": "System Of A Down",
        "bpm": "82",
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
        "released": "2001",
        "slowBpm": null,
        "transcriberName": "Jeffrey Lien",
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": 7,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2866"
            },
            {
              "type": "contentData",
              "id": "17552"
            },
            {
              "type": "contentData",
              "id": "49975"
            },
            {
              "type": "contentData",
              "id": "49976"
            },
            {
              "type": "contentData",
              "id": "139631"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "5561"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "4010"
            },
            {
              "type": "topic",
              "id": "4011"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "2269"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "55156"
            },
            {
              "type": "tag",
              "id": "55157"
            },
            {
              "type": "tag",
              "id": "55158"
            },
            {
              "type": "tag",
              "id": "55159"
            },
            {
              "type": "tag",
              "id": "55160"
            },
            {
              "type": "tag",
              "id": "55161"
            },
            {
              "type": "tag",
              "id": "55162"
            },
            {
              "type": "tag",
              "id": "55163"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "54"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "29755",
      "attributes": {
        "slug": "50-ways-to-leave-your-lover-paul-simon",
        "type": "song",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2017-06-12 01:57:07",
        "archivedOn": null,
        "createdOn": "2017-06-12 01:57:07",
        "difficulty": "5",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 29755,
        "qnaVideo": null,
        "style": "Pop/Rock",
        "title": "50 Ways To Leave Your Lover",
        "xp": null,
        "album": "Still Crazy After All These Years",
        "artist": "Paul Simon",
        "bpm": "102",
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
        "released": "1975",
        "slowBpm": null,
        "transcriberName": "Brandon Toews",
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
              "id": "2865"
            },
            {
              "type": "contentData",
              "id": "17811"
            },
            {
              "type": "contentData",
              "id": "49971"
            },
            {
              "type": "contentData",
              "id": "49973"
            },
            {
              "type": "contentData",
              "id": "139471"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "5500"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "3914"
            },
            {
              "type": "topic",
              "id": "3915"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "2234"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "53973"
            },
            {
              "type": "tag",
              "id": "53974"
            },
            {
              "type": "tag",
              "id": "53975"
            },
            {
              "type": "tag",
              "id": "53976"
            },
            {
              "type": "tag",
              "id": "53977"
            },
            {
              "type": "tag",
              "id": "53978"
            },
            {
              "type": "tag",
              "id": "53979"
            },
            {
              "type": "tag",
              "id": "53980"
            },
            {
              "type": "tag",
              "id": "53981"
            },
            {
              "type": "tag",
              "id": "53982"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "35"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "30373",
      "attributes": {
        "slug": "play-that-funky-music-wild-cherry",
        "type": "song",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2017-07-24 04:12:07",
        "archivedOn": null,
        "createdOn": "2017-07-24 04:12:07",
        "difficulty": "3",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 30373,
        "qnaVideo": "36893",
        "style": "Funk",
        "title": "Play That Funky Music",
        "xp": null,
        "album": "Wild Cherry",
        "artist": "Wild Cherry",
        "bpm": "109",
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
        "released": "1976",
        "slowBpm": null,
        "transcriberName": "Ali Fraser",
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
              "id": "2864"
            },
            {
              "type": "contentData",
              "id": "18104"
            },
            {
              "type": "contentData",
              "id": "49967"
            },
            {
              "type": "contentData",
              "id": "49969"
            },
            {
              "type": "contentData",
              "id": "139839"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "5451"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "3846"
            },
            {
              "type": "topic",
              "id": "3847"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "2131"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "53036"
            },
            {
              "type": "tag",
              "id": "53037"
            },
            {
              "type": "tag",
              "id": "53038"
            },
            {
              "type": "tag",
              "id": "53039"
            },
            {
              "type": "tag",
              "id": "53040"
            },
            {
              "type": "tag",
              "id": "53041"
            },
            {
              "type": "tag",
              "id": "53042"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "20"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "210724",
      "attributes": {
        "slug": "car-radio-twenty-one-pilots",
        "type": "song",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2018-08-21 17:00:00",
        "archivedOn": null,
        "createdOn": "2018-08-07 08:12:55",
        "difficulty": "3",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": "211418",
        "style": "Pop/Rock",
        "title": "Car Radio",
        "xp": null,
        "album": "Vessel",
        "artist": "Twenty One Pilots",
        "bpm": "130",
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
        "liveStreamFeedType": "none",
        "name": null,
        "released": "2013",
        "slowBpm": null,
        "transcriberName": "Brandon Toews",
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
              "id": "68625"
            },
            {
              "type": "contentData",
              "id": "68626"
            },
            {
              "type": "contentData",
              "id": "68789"
            },
            {
              "type": "contentData",
              "id": "68790"
            },
            {
              "type": "contentData",
              "id": "139792"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "4181"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "2160"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "1264"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "38797"
            },
            {
              "type": "tag",
              "id": "38798"
            },
            {
              "type": "tag",
              "id": "38799"
            },
            {
              "type": "tag",
              "id": "38800"
            },
            {
              "type": "tag",
              "id": "38801"
            },
            {
              "type": "tag",
              "id": "38802"
            },
            {
              "type": "tag",
              "id": "38803"
            },
            {
              "type": "tag",
              "id": "38804"
            },
            {
              "type": "tag",
              "id": "38805"
            },
            {
              "type": "tag",
              "id": "38806"
            },
            {
              "type": "tag",
              "id": "38807"
            },
            {
              "type": "tag",
              "id": "38808"
            },
            {
              "type": "tag",
              "id": "38809"
            },
            {
              "type": "tag",
              "id": "38810"
            },
            {
              "type": "tag",
              "id": "38811"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "190995",
      "attributes": {
        "slug": "always-on-the-run-lenny-kravitz",
        "type": "song",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2018-02-06 18:00:00",
        "archivedOn": null,
        "createdOn": "2018-01-22 11:52:29",
        "difficulty": "3",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": "Pop/Rock",
        "title": "Always On The Run",
        "xp": null,
        "album": "Mama Said",
        "artist": "Lenny Kravitz",
        "bpm": "85",
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
        "liveStreamFeedType": "none",
        "name": null,
        "released": "1991",
        "slowBpm": null,
        "transcriberName": "Reuben Spyker & Hugo Janado",
        "week": null,
        "avatarUrl": null,
        "lengthInSeconds": null,
        "soundsliceSlug": null,
        "staffPickRating": 3,
        "studentId": null,
        "vimeoVideoId": null,
        "youtubeVideoId": null
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "39774"
            },
            {
              "type": "contentData",
              "id": "39775"
            },
            {
              "type": "contentData",
              "id": "49942"
            },
            {
              "type": "contentData",
              "id": "49944"
            },
            {
              "type": "contentData",
              "id": "139319"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "5207"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "3470"
            },
            {
              "type": "topic",
              "id": "3471"
            }
          ]
        },
        "exercise": {
          "data": [
            {
              "type": "exercise",
              "id": "1933"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "46861"
            },
            {
              "type": "tag",
              "id": "46862"
            },
            {
              "type": "tag",
              "id": "46863"
            },
            {
              "type": "tag",
              "id": "46864"
            },
            {
              "type": "tag",
              "id": "46865"
            },
            {
              "type": "tag",
              "id": "46866"
            },
            {
              "type": "tag",
              "id": "46867"
            },
            {
              "type": "tag",
              "id": "46868"
            },
            {
              "type": "tag",
              "id": "46869"
            },
            {
              "type": "tag",
              "id": "46870"
            },
            {
              "type": "tag",
              "id": "46871"
            },
            {
              "type": "tag",
              "id": "46872"
            },
            {
              "type": "tag",
              "id": "46873"
            },
            {
              "type": "tag",
              "id": "46874"
            },
            {
              "type": "tag",
              "id": "46875"
            },
            {
              "type": "tag",
              "id": "46876"
            },
            {
              "type": "tag",
              "id": "46877"
            },
            {
              "type": "tag",
              "id": "46878"
            },
            {
              "type": "tag",
              "id": "46879"
            },
            {
              "type": "tag",
              "id": "46880"
            },
            {
              "type": "tag",
              "id": "46881"
            },
            {
              "type": "tag",
              "id": "46882"
            },
            {
              "type": "tag",
              "id": "46883"
            },
            {
              "type": "tag",
              "id": "46884"
            },
            {
              "type": "tag",
              "id": "46885"
            },
            {
              "type": "tag",
              "id": "46886"
            },
            {
              "type": "tag",
              "id": "46887"
            },
            {
              "type": "tag",
              "id": "46888"
            }
          ]
        }
      }
    }
  ],
  "included": [
    {
      "type": "instructor",
      "id": "31878",
      "attributes": {
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
      }
    },
    {
      "type": "exercise",
      "id": "203468",
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
      "type": "exercise",
      "id": "203469",
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
      "type": "instructor",
      "id": "31887",
      "attributes": {
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
      }
    },
    {
      "type": "exercise",
      "id": "203616",
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
      "id": "203617",
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
      "id": "203624",
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
      "id": "203628",
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
      "type": "instructor",
      "id": "31929",
      "attributes": {
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
      }
    },
    {
      "type": "exercise",
      "id": "203634",
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
      "id": "203823",
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
      "id": "203825",
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
      "id": "203826",
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
      "id": "203827",
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
      "id": "203829",
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
      "id": "203816",
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
      "type": "instructor",
      "id": "31885",
      "attributes": {
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
      }
    },
    {
      "type": "exercise",
      "id": "203817",
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
      "id": "203818",
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
      "id": "203819",
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
      "id": "212554",
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
      "id": "203821",
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
      "id": "211433",
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
      "type": "instructor",
      "id": "31913",
      "attributes": {
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
      }
    },
    {
      "type": "exercise",
      "id": "203830",
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
      "id": "2929",
      "attributes": {
        "key": "description",
        "value": "Learn how to play \"Back In Black\" by AC/DC.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11835",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/acdc-back-in-black.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "50226",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "50228",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/pdfs/AC_DC - Back in Black.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "138907",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/acdc-back-in-black.png",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7139",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31878"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "6122",
      "attributes": {
        "topic": "Learning Songs",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "6123",
      "attributes": {
        "topic": "Rock",
        "position": 2
      }
    },
    {
      "type": "exercise",
      "id": "2980",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "203468"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "79780",
      "attributes": {
        "tag": "acdc",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79781",
      "attributes": {
        "tag": "phil rudd",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79782",
      "attributes": {
        "tag": "80s",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79783",
      "attributes": {
        "tag": "advanced lessons",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79784",
      "attributes": {
        "tag": "rock",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "79785",
      "attributes": {
        "tag": "pl song breakdowns",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "79786",
      "attributes": {
        "tag": "learning songs",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "79787",
      "attributes": {
        "tag": "acdc",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "79788",
      "attributes": {
        "tag": "back in black",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "79789",
      "attributes": {
        "tag": "phil rudd",
        "position": 10
      }
    },
    {
      "type": "playlist",
      "id": "566",
      "attributes": {
        "playlist": "song breakdowns",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "2928",
      "attributes": {
        "key": "description",
        "value": "Learn how to play \"All The Small Things\" by Blink-182.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12004",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/20249-card-thumbnail-1592340941.jpeg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "50223",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "50224",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/pdfs/Blink-182 - All the Small Things.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "138981",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/20249-card-thumbnail-maxres-1592340937.jpeg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7083",
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
      "id": "6038",
      "attributes": {
        "topic": "Learning Songs",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "6039",
      "attributes": {
        "topic": "Rock",
        "position": 2
      }
    },
    {
      "type": "exercise",
      "id": "2979",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "203469"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "79433",
      "attributes": {
        "tag": "blink 182",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79434",
      "attributes": {
        "tag": "enema of the state",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79435",
      "attributes": {
        "tag": "travis barker",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79436",
      "attributes": {
        "tag": "punk",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79437",
      "attributes": {
        "tag": "rock",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "79438",
      "attributes": {
        "tag": "pl song breakdowns",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "79439",
      "attributes": {
        "tag": "learning songs",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "79440",
      "attributes": {
        "tag": "punk",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "79441",
      "attributes": {
        "tag": "pop",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "79442",
      "attributes": {
        "tag": "blink-182",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "79443",
      "attributes": {
        "tag": "travis barker",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "79444",
      "attributes": {
        "tag": "all the small things",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "79445",
      "attributes": {
        "tag": "enema of the state",
        "position": 13
      }
    },
    {
      "type": "playlist",
      "id": "542",
      "attributes": {
        "playlist": "song breakdowns",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "2925",
      "attributes": {
        "key": "description",
        "value": "Learn how to play \"Crazy Train\" by Ozzy Osbourne.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12667",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/21264-card-thumbnail-1593110184.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "50207",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "50209",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/pdfs/Ozzy Osbourne - Crazy Train.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "139462",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/21264-card-thumbnail-maxres-1593110179.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6932",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31887"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "5814",
      "attributes": {
        "topic": "Learning Songs",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "5815",
      "attributes": {
        "topic": "Metal",
        "position": 2
      }
    },
    {
      "type": "exercise",
      "id": "2966",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "203616"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "76143",
      "attributes": {
        "tag": "blizzard of ozz",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "76144",
      "attributes": {
        "tag": "lee kerslake",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "76145",
      "attributes": {
        "tag": "80s",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "76146",
      "attributes": {
        "tag": "pl song breakdowns",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "76147",
      "attributes": {
        "tag": "learning songs",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "76148",
      "attributes": {
        "tag": "ozzy osbourne",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "76149",
      "attributes": {
        "tag": "osborne",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "76150",
      "attributes": {
        "tag": "crazy train",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "76151",
      "attributes": {
        "tag": "blizzard of ozz",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "76152",
      "attributes": {
        "tag": "lee kerslake",
        "position": 10
      }
    },
    {
      "type": "playlist",
      "id": "482",
      "attributes": {
        "playlist": "song breakdowns",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "2924",
      "attributes": {
        "key": "description",
        "value": "Learn how to play \"Get Lucky\" by Daft Punk.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12738",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/daft-punk-get-lucky.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "50203",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "50205",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/pdfs/Daft Punk - Get Lucky.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "139057",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/daft-punk-get-lucky.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6917",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31878"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "5793",
      "attributes": {
        "topic": "Electronic Music",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "5794",
      "attributes": {
        "topic": "Learning Songs",
        "position": 2
      }
    },
    {
      "type": "exercise",
      "id": "2965",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "203617"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "75822",
      "attributes": {
        "tag": "disco",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "75823",
      "attributes": {
        "tag": "random access memories",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "75824",
      "attributes": {
        "tag": "omar hakim",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "75825",
      "attributes": {
        "tag": "pl song breakdowns",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "75826",
      "attributes": {
        "tag": "learning songs",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "75827",
      "attributes": {
        "tag": "disco",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "75828",
      "attributes": {
        "tag": "pop",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "75829",
      "attributes": {
        "tag": "daft punk",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "75830",
      "attributes": {
        "tag": "get lucky",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "75831",
      "attributes": {
        "tag": "omar hakim",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "75832",
      "attributes": {
        "tag": "random access memories",
        "position": 11
      }
    },
    {
      "type": "playlist",
      "id": "477",
      "attributes": {
        "playlist": "song breakdowns",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "2923",
      "attributes": {
        "key": "description",
        "value": "Learn how to play \"Sober\" by Tool.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12768",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/tool-sober.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "50200",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "50201",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/pdfs/Tool - Sober.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "139775",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/tool-sober.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6909",
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
      "id": "5778",
      "attributes": {
        "topic": "Learning Songs",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "5779",
      "attributes": {
        "topic": "Metal",
        "position": 2
      }
    },
    {
      "type": "topic",
      "id": "5780",
      "attributes": {
        "topic": "Rock",
        "position": 3
      }
    },
    {
      "type": "exercise",
      "id": "2964",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "203624"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "75664",
      "attributes": {
        "tag": "undertow",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "75665",
      "attributes": {
        "tag": "danny carey",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "75666",
      "attributes": {
        "tag": "dany",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "75667",
      "attributes": {
        "tag": "progressive",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "75668",
      "attributes": {
        "tag": "pl song breakdowns",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "75669",
      "attributes": {
        "tag": "learning songs",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "75670",
      "attributes": {
        "tag": "progressive",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "75671",
      "attributes": {
        "tag": "tool",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "75672",
      "attributes": {
        "tag": "danny carey",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "75673",
      "attributes": {
        "tag": "sober",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "75674",
      "attributes": {
        "tag": "undertow",
        "position": 11
      }
    },
    {
      "type": "playlist",
      "id": "472",
      "attributes": {
        "playlist": "song breakdowns",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "2922",
      "attributes": {
        "key": "description",
        "value": "Learn how to play \"The Sound Of Muzak\" by Porcupine Tree.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12907",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/porcupine-tree-the-sound-of-muzak.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "50196",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "50198",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/pdfs/Porcupine Tree - Sound Of Muzak.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "139484",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/porcupine-tree-the-sound-of-muzak.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6877",
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
      "id": "5723",
      "attributes": {
        "topic": "Learning Songs",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "5724",
      "attributes": {
        "topic": "Rock",
        "position": 2
      }
    },
    {
      "type": "exercise",
      "id": "2963",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "203628"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "74929",
      "attributes": {
        "tag": "gavin harrison",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "74930",
      "attributes": {
        "tag": "in absentia",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "74931",
      "attributes": {
        "tag": "progressive",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "74932",
      "attributes": {
        "tag": "7/4",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "74933",
      "attributes": {
        "tag": "learning songs",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "74934",
      "attributes": {
        "tag": "progressive",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "74935",
      "attributes": {
        "tag": "music",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "74936",
      "attributes": {
        "tag": "porcupine tree",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "74937",
      "attributes": {
        "tag": "gavin harrison",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "74938",
      "attributes": {
        "tag": "sound of muzak",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "74939",
      "attributes": {
        "tag": "muzik",
        "position": 11
      }
    },
    {
      "type": "playlist",
      "id": "447",
      "attributes": {
        "playlist": "song breakdowns",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "2921",
      "attributes": {
        "key": "description",
        "value": "Learn how to play \"Mr. Big Stuff\" by Jean Knight.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "13115",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/jean-knight-mr-big-stuff.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "50193",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "50194",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/pdfs/Jean Knight - Mr. Big Stuff.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "139229",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/jean-knight-mr-big-stuff.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6822",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31929"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "5639",
      "attributes": {
        "topic": "Funk",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "5640",
      "attributes": {
        "topic": "Learning Songs",
        "position": 2
      }
    },
    {
      "type": "exercise",
      "id": "2941",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "203634"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "74088",
      "attributes": {
        "tag": "motown",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "74089",
      "attributes": {
        "tag": "james carey stroud",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "74090",
      "attributes": {
        "tag": "soul",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "74091",
      "attributes": {
        "tag": "funk",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "74092",
      "attributes": {
        "tag": "stephen taylor",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "74093",
      "attributes": {
        "tag": "pl song breakdowns",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "74094",
      "attributes": {
        "tag": "learning songs",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "74095",
      "attributes": {
        "tag": "jean knight",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "74096",
      "attributes": {
        "tag": "james carey stroud",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "74097",
      "attributes": {
        "tag": "mr big stuff",
        "position": 10
      }
    },
    {
      "type": "playlist",
      "id": "423",
      "attributes": {
        "playlist": "song breakdowns",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "2863",
      "attributes": {
        "key": "description",
        "value": "Learn how to play \"Locked Out Of Heaven\" by Bruno Mars.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "18381",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/31104-card-thumbnail-1592341399.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "49964",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "49965",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/pdfs/Bruno Mars - Locked Out of Heaven.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "139024",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/31104-card-thumbnail-maxres-1592341396.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "5380",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31887"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "3719",
      "attributes": {
        "topic": "Learning Songs",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "3720",
      "attributes": {
        "topic": "Rock",
        "position": 2
      }
    },
    {
      "type": "exercise",
      "id": "2044",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "203823"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "50643",
      "attributes": {
        "tag": "unorthodox jukebox",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "50644",
      "attributes": {
        "tag": "homer steinweiss",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "50645",
      "attributes": {
        "tag": "pl song breakdowns",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "50646",
      "attributes": {
        "tag": "bruno mars",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "50647",
      "attributes": {
        "tag": "1691",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "50648",
      "attributes": {
        "tag": "locked out of heaven",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "50649",
      "attributes": {
        "tag": "unorthodox jukebox",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "50650",
      "attributes": {
        "tag": "homer steinweiss",
        "position": 8
      }
    },
    {
      "type": "playlist",
      "id": "11",
      "attributes": {
        "playlist": "song breakdowns",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "2862",
      "attributes": {
        "key": "description",
        "value": "Learn how to play \"Summer Of '69\" by Bryan Adams.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "18399",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/bryan-adams-summer-of-69.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "49960",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "49962",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/pdfs/Bryan Adams - Summer of  69.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "139030",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/bryan-adams-summer-of-69.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "5373",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31878"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "3702",
      "attributes": {
        "topic": "Rock",
        "position": 1
      }
    },
    {
      "type": "exercise",
      "id": "2043",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "203825"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "50526",
      "attributes": {
        "tag": "reckless",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "50527",
      "attributes": {
        "tag": "pat steward",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "50528",
      "attributes": {
        "tag": "80s",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "50529",
      "attributes": {
        "tag": "rock",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "50530",
      "attributes": {
        "tag": "advanced",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "50531",
      "attributes": {
        "tag": "learning songs",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "50532",
      "attributes": {
        "tag": "learn songs",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "50533",
      "attributes": {
        "tag": "all",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "50534",
      "attributes": {
        "tag": "bryan adams",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "50535",
      "attributes": {
        "tag": "all skills",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "50536",
      "attributes": {
        "tag": "all skill levels",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "50537",
      "attributes": {
        "tag": "1697",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "50538",
      "attributes": {
        "tag": "summer of '69",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "50539",
      "attributes": {
        "tag": "pat steward",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "50540",
      "attributes": {
        "tag": "reckless",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "50541",
      "attributes": {
        "tag": "song breakdowns",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "50542",
      "attributes": {
        "tag": "song breakdown",
        "position": 17
      }
    },
    {
      "type": "contentData",
      "id": "2861",
      "attributes": {
        "key": "description",
        "value": "Learn how to play \"Santeria\" by Sublime.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "18425",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/31234-card-thumbnail-1592341314.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "49957",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "49958",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/pdfs/Sublime - Santeria.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "139624",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/31234-card-thumbnail-maxres-1592341311.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "5363",
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
      "id": "3685",
      "attributes": {
        "topic": "Rock",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "3686",
      "attributes": {
        "topic": "Learning Songs",
        "position": 2
      }
    },
    {
      "type": "exercise",
      "id": "2042",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "203826"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "50346",
      "attributes": {
        "tag": "ska",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "50347",
      "attributes": {
        "tag": "reggae",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "50348",
      "attributes": {
        "tag": "bud gaugh",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "50349",
      "attributes": {
        "tag": "shuffle",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "50350",
      "attributes": {
        "tag": "90s",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "50351",
      "attributes": {
        "tag": "song breakdowns",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "50352",
      "attributes": {
        "tag": "song breakdown",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "50353",
      "attributes": {
        "tag": "1701",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "50354",
      "attributes": {
        "tag": "sublime",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "50355",
      "attributes": {
        "tag": "bud gaugh",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "50356",
      "attributes": {
        "tag": "santeria",
        "position": 11
      }
    },
    {
      "type": "playlist",
      "id": "7",
      "attributes": {
        "playlist": "song breakdowns",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "2860",
      "attributes": {
        "key": "description",
        "value": "Learn how to play \"Rock You Like A Hurricane\" by the Scorpions.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "18438",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/scorpions-rock-you-like-a-hurricane.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "49953",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "49955",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/pdfs/Scorpions - Rock You Like a Hurricane.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "139571",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/scorpions-rock-you-like-a-hurricane.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "5359",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31878"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "3677",
      "attributes": {
        "topic": "Learning Songs",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "3678",
      "attributes": {
        "topic": "Metal",
        "position": 2
      }
    },
    {
      "type": "exercise",
      "id": "2041",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "203827"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "50287",
      "attributes": {
        "tag": "love at first sting",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "50288",
      "attributes": {
        "tag": "herman rarebell",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "50289",
      "attributes": {
        "tag": "80s",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "50290",
      "attributes": {
        "tag": "learning songs",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "50291",
      "attributes": {
        "tag": "learn songs",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "50292",
      "attributes": {
        "tag": "heavy metal",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "50293",
      "attributes": {
        "tag": "the",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "50294",
      "attributes": {
        "tag": "song breakdowns",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "50295",
      "attributes": {
        "tag": "song breakdown",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "50296",
      "attributes": {
        "tag": "1704",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "50297",
      "attributes": {
        "tag": "scorpions",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "50298",
      "attributes": {
        "tag": "rock you like a hurricane",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "50299",
      "attributes": {
        "tag": "love at first sting",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "50300",
      "attributes": {
        "tag": "herman rarebell",
        "position": 14
      }
    },
    {
      "type": "playlist",
      "id": "6",
      "attributes": {
        "playlist": "song breakdowns",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "2858",
      "attributes": {
        "key": "description",
        "value": "Learn how to play \"Proud Mary\" by Creedence Clearwater Revival.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "18571",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/creedence-clearwater-revival-proud-mary.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "49946",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "49948",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/pdfs/Creedence Clearwater Revival - Proud Mary.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "139056",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/creedence-clearwater-revival-proud-mary.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "5323",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31878"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "3622",
      "attributes": {
        "topic": "Rock",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "3623",
      "attributes": {
        "topic": "Learning Songs",
        "position": 2
      }
    },
    {
      "type": "exercise",
      "id": "1989",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "203829"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "49175",
      "attributes": {
        "tag": "bayou country",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "49176",
      "attributes": {
        "tag": "beginner",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "49177",
      "attributes": {
        "tag": "rock",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "49178",
      "attributes": {
        "tag": "song breakdowns",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "49179",
      "attributes": {
        "tag": "song breakdown",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "49180",
      "attributes": {
        "tag": "1723",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "49181",
      "attributes": {
        "tag": "ccr",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "49182",
      "attributes": {
        "tag": "creedence",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "49183",
      "attributes": {
        "tag": "clearwater",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "49184",
      "attributes": {
        "tag": "revival",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "49185",
      "attributes": {
        "tag": "proud",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "49186",
      "attributes": {
        "tag": "mary",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "49187",
      "attributes": {
        "tag": "doug clifford",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "49188",
      "attributes": {
        "tag": "cosmo",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "49189",
      "attributes": {
        "tag": "bayou country",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "49190",
      "attributes": {
        "tag": "60s",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "49191",
      "attributes": {
        "tag": "ccr",
        "position": 1
      }
    },
    {
      "type": "playlist",
      "id": "1",
      "attributes": {
        "playlist": "song breakdowns",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "2869",
      "attributes": {
        "key": "description",
        "value": "Learn how to play \"Give It Away\" by the Red Hot Chili Peppers.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "17472",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/red-hot-chili-peppers-give-it-away.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "49985",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "49986",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/pdfs/Red Hot Chili Peppers - Give It Away.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "139532",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/red-hot-chili-peppers-give-it-away.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "5580",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31878"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "4037",
      "attributes": {
        "topic": "Rock",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "4038",
      "attributes": {
        "topic": "Learning Songs",
        "position": 2
      }
    },
    {
      "type": "exercise",
      "id": "2294",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "203816"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "55435",
      "attributes": {
        "tag": "funk",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "55436",
      "attributes": {
        "tag": "chad smith",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "55437",
      "attributes": {
        "tag": "blood sugar sex magik",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "55438",
      "attributes": {
        "tag": "magic",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "55439",
      "attributes": {
        "tag": "pl song breakdowns",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "55440",
      "attributes": {
        "tag": "learning songs",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "55441",
      "attributes": {
        "tag": "red hot chilli peppers",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "55442",
      "attributes": {
        "tag": "give it away",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "55443",
      "attributes": {
        "tag": "chad smith",
        "position": 9
      }
    },
    {
      "type": "playlist",
      "id": "61",
      "attributes": {
        "playlist": "song breakdowns",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "2868",
      "attributes": {
        "key": "description",
        "value": "Learn how to play \"Freddie Freeloader\" by Miles Davis.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "17530",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/miles-davis-freddie-freeloader.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "49981",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "49983",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/pdfs/Miles Davis - Freddie Freeloader.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "139383",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/miles-davis-freddie-freeloader.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "5566",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31885"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "4017",
      "attributes": {
        "topic": "Jazz",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "4018",
      "attributes": {
        "topic": "Learning Songs",
        "position": 2
      }
    },
    {
      "type": "exercise",
      "id": "2271",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "203817"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "55198",
      "attributes": {
        "tag": "jimmy cobb",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "55199",
      "attributes": {
        "tag": "kind of blue",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "55200",
      "attributes": {
        "tag": "swing",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "55201",
      "attributes": {
        "tag": "jazz",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "55202",
      "attributes": {
        "tag": "kyle radomsky",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "55203",
      "attributes": {
        "tag": "pl song breakdowns",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "55204",
      "attributes": {
        "tag": "learning songs",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "55205",
      "attributes": {
        "tag": "swing",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "55206",
      "attributes": {
        "tag": "comping",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "55207",
      "attributes": {
        "tag": "comp",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "55208",
      "attributes": {
        "tag": "miles davis",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "55209",
      "attributes": {
        "tag": "kind of blue",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "55210",
      "attributes": {
        "tag": "jimmy cobb",
        "position": 13
      }
    },
    {
      "type": "playlist",
      "id": "56",
      "attributes": {
        "playlist": "song breakdowns",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "2867",
      "attributes": {
        "key": "description",
        "value": "Learn how to play \"Wipe Out\" by The Surfaris.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "17540",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/the-surfaris-wipe-out.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "49978",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "49979",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/pdfs/The Surfaris - Wipe Out.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "139729",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/the-surfaris-wipe-out.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "5564",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31878"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "4013",
      "attributes": {
        "topic": "Rock",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "4014",
      "attributes": {
        "topic": "Learning Songs",
        "position": 2
      }
    },
    {
      "type": "exercise",
      "id": "2270",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "203818"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "55179",
      "attributes": {
        "tag": "surf",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "55180",
      "attributes": {
        "tag": "ron wilson",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "55181",
      "attributes": {
        "tag": "wipeout",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "55182",
      "attributes": {
        "tag": "60s",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "55183",
      "attributes": {
        "tag": "rock",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "55184",
      "attributes": {
        "tag": "pl song breakdowns",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "55185",
      "attributes": {
        "tag": "learning songs",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "55186",
      "attributes": {
        "tag": "surfaris",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "55187",
      "attributes": {
        "tag": "ron wilson",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "55188",
      "attributes": {
        "tag": "wipeout",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "55189",
      "attributes": {
        "tag": "wipe out",
        "position": 11
      }
    },
    {
      "type": "playlist",
      "id": "55",
      "attributes": {
        "playlist": "song breakdowns",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "2866",
      "attributes": {
        "key": "description",
        "value": "Learn how to play \"Toxicity\" by System Of A Down.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "17552",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/system-of-a-down-toxicity.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "49975",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "49976",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/pdfs/System Of A Down - Toxicity.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "139631",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/system-of-a-down-toxicity.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "5561",
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
      "id": "4010",
      "attributes": {
        "topic": "Learning Songs",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "4011",
      "attributes": {
        "topic": "Metal",
        "position": 2
      }
    },
    {
      "type": "exercise",
      "id": "2269",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "203819"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "55156",
      "attributes": {
        "tag": "john dolmayan",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "55157",
      "attributes": {
        "tag": "toxicity",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "55158",
      "attributes": {
        "tag": "nu metal",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "55159",
      "attributes": {
        "tag": "pl song breakdowns",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "55160",
      "attributes": {
        "tag": "learning songs",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "55161",
      "attributes": {
        "tag": "john dolmayan",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "55162",
      "attributes": {
        "tag": "system of a down",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "55163",
      "attributes": {
        "tag": "toxicity",
        "position": 8
      }
    },
    {
      "type": "playlist",
      "id": "54",
      "attributes": {
        "playlist": "song breakdowns",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "2865",
      "attributes": {
        "key": "description",
        "value": "Learn how to play \"50 Ways To Leave Your Lover\" by Paul Simon.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "17811",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/paul-simon-50-ways-to-leave-your-lover.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "49971",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "49973",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/pdfs/Paul Simon - 50 Ways to Leave Your Lover.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "139471",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/paul-simon-50-ways-to-leave-your-lover.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "5500",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31878"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "3914",
      "attributes": {
        "topic": "Learning Songs",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "3915",
      "attributes": {
        "topic": "Rock",
        "position": 2
      }
    },
    {
      "type": "exercise",
      "id": "2234",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "212554"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "53973",
      "attributes": {
        "tag": "steve gadd",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "53974",
      "attributes": {
        "tag": "still crazy after all these years",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "53975",
      "attributes": {
        "tag": "rock",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "53976",
      "attributes": {
        "tag": "pl song breakdowns",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "53977",
      "attributes": {
        "tag": "learning songs",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "53978",
      "attributes": {
        "tag": "steve gadd",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "53979",
      "attributes": {
        "tag": "paul simon",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "53980",
      "attributes": {
        "tag": "50 ways",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "53981",
      "attributes": {
        "tag": "leave",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "53982",
      "attributes": {
        "tag": "lover",
        "position": 10
      }
    },
    {
      "type": "playlist",
      "id": "35",
      "attributes": {
        "playlist": "song breakdowns",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "2864",
      "attributes": {
        "key": "description",
        "value": "Learn how to play \"Play That Funky Music\" by Wild Cherry.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "18104",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/wild-cherry-play-that-funky-music.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "49967",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "49969",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/pdfs/Wild Cherry - Play That Funky Music.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "139839",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/album-art/wild-cherry-play-that-funky-music.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "5451",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31878"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "3846",
      "attributes": {
        "topic": "Funk",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "3847",
      "attributes": {
        "topic": "Learning Songs",
        "position": 2
      }
    },
    {
      "type": "exercise",
      "id": "2131",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "203821"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "53036",
      "attributes": {
        "tag": "70s",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "53037",
      "attributes": {
        "tag": "ronald beitle",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "53038",
      "attributes": {
        "tag": "rock",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "53039",
      "attributes": {
        "tag": "pl song breakdowns",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "53040",
      "attributes": {
        "tag": "ronald beitle",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "53041",
      "attributes": {
        "tag": "wild cherry",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "53042",
      "attributes": {
        "tag": "play that funky music",
        "position": 7
      }
    },
    {
      "type": "playlist",
      "id": "20",
      "attributes": {
        "playlist": "song breakdowns",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "68625",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/210724-card-thumbnail-1592416613.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "68626",
      "attributes": {
        "key": "description",
        "value": "Learn how to play \"Car Radio\" by Twenty One Pilots.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "68789",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "68790",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/pdfs/Twenty One Pilots - Car Radio.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "139792",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/210724-card-thumbnail-maxres-1592416608.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "4181",
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
      "id": "2160",
      "attributes": {
        "topic": "Alternative",
        "position": 1
      }
    },
    {
      "type": "exercise",
      "id": "1264",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "211433"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "38797",
      "attributes": {
        "tag": "josh dun",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "38798",
      "attributes": {
        "tag": "21 pilots",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "38799",
      "attributes": {
        "tag": "vessel",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "38800",
      "attributes": {
        "tag": "intermediate",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "38801",
      "attributes": {
        "tag": "alternative",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "38802",
      "attributes": {
        "tag": "twenty one pilots",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "38803",
      "attributes": {
        "tag": "2011",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "38804",
      "attributes": {
        "tag": "regional at best",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "38805",
      "attributes": {
        "tag": "car radio",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "38806",
      "attributes": {
        "tag": "learn song",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "38807",
      "attributes": {
        "tag": "learn songs",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "38808",
      "attributes": {
        "tag": "learning song",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "38809",
      "attributes": {
        "tag": "learning songs",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "38810",
      "attributes": {
        "tag": "song breakdown",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "38811",
      "attributes": {
        "tag": "song beakdowns",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "39774",
      "attributes": {
        "key": "description",
        "value": "Learn how to play \"Always On The Run\" by Lenny Kravitz.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "39775",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/190995-card-thumbnail-1592340800.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "49942",
      "attributes": {
        "key": "resource_name",
        "value": "PDF Sheet Music",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "49944",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/drumeo-songs-2020-june/pdfs/Lenny Kravitz - Always On The Run.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "139319",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/190995-card-thumbnail-maxres-1592340795.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "5207",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31913"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "3470",
      "attributes": {
        "topic": "Rock",
        "position": 2
      }
    },
    {
      "type": "topic",
      "id": "3471",
      "attributes": {
        "topic": "Learning Songs",
        "position": 1
      }
    },
    {
      "type": "exercise",
      "id": "1933",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "exercise": {
          "data": {
            "type": "exercise",
            "id": "203830"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "46861",
      "attributes": {
        "tag": "reuben spyker",
        "position": 28
      }
    },
    {
      "type": "tag",
      "id": "46862",
      "attributes": {
        "tag": "beginner",
        "position": 27
      }
    },
    {
      "type": "tag",
      "id": "46863",
      "attributes": {
        "tag": "rock",
        "position": 26
      }
    },
    {
      "type": "tag",
      "id": "46864",
      "attributes": {
        "tag": "learning songs",
        "position": 25
      }
    },
    {
      "type": "tag",
      "id": "46865",
      "attributes": {
        "tag": "learn songs",
        "position": 24
      }
    },
    {
      "type": "tag",
      "id": "46866",
      "attributes": {
        "tag": "learning songs",
        "position": 23
      }
    },
    {
      "type": "tag",
      "id": "46867",
      "attributes": {
        "tag": "learning songs",
        "position": 22
      }
    },
    {
      "type": "tag",
      "id": "46868",
      "attributes": {
        "tag": "learning songs",
        "position": 21
      }
    },
    {
      "type": "tag",
      "id": "46869",
      "attributes": {
        "tag": "learning song",
        "position": 20
      }
    },
    {
      "type": "tag",
      "id": "46870",
      "attributes": {
        "tag": "learning songs",
        "position": 19
      }
    },
    {
      "type": "tag",
      "id": "46871",
      "attributes": {
        "tag": "learn songs",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "46872",
      "attributes": {
        "tag": "learn song",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "46873",
      "attributes": {
        "tag": "learn songs",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "46874",
      "attributes": {
        "tag": "song breakdown",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "46875",
      "attributes": {
        "tag": "song breakdowns",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "46876",
      "attributes": {
        "tag": "lenny kravitz",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "46877",
      "attributes": {
        "tag": "always",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "46878",
      "attributes": {
        "tag": "the",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "46879",
      "attributes": {
        "tag": "run",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "46880",
      "attributes": {
        "tag": "always on the run",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "46881",
      "attributes": {
        "tag": "always",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "46882",
      "attributes": {
        "tag": "the",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "46883",
      "attributes": {
        "tag": "run",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "46884",
      "attributes": {
        "tag": "mamma said",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "46885",
      "attributes": {
        "tag": "always on the run",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "46886",
      "attributes": {
        "tag": "always",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "46887",
      "attributes": {
        "tag": "90s",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "46888",
      "attributes": {
        "tag": "mama said",
        "position": 1
      }
    }
  ],
  "meta": {
    "filterOptions": {
      "style": [
        "Pop/Rock",
        "Jazz",
        "Funk",
        "Metal",
        "Latin",
        "World",
        "R&B",
        "Blues",
        "Electronic",
        "Odd Time"
      ],
      "difficulty": [
        "1",
        "10",
        "2",
        "3",
        "4",
        "5",
        "6",
        "7",
        "8",
        "9"
      ],
      "artist": [
        "3 Doors Down",
        "AC/DC",
        "Aerosmith",
        "Alice In Chains",
        "Audioslave",
        "Avenged Sevenfold",
        "B.B. King",
        "Bee Gees",
        "Billy Joel",
        "Blink-182",
        "Bob Marley & The Wailers",
        "Bob Seger",
        "Bon Iver",
        "Bon Jovi",
        "Boston",
        "Breaking Benjamin",
        "Bruno Mars",
        "Bryan Adams",
        "Coldplay",
        "Collective Soul",
        "Creedence Clearwater Revival",
        "Daft Punk",
        "Darius Rucker",
        "Dave Matthews Band",
        "David Bowie",
        "David Lee Roth",
        "Death Cab for Cutie",
        "Deep Purple",
        "Dream Theater",
        "Eagles",
        "Ed Sheeran",
        "Evanescence",
        "Everything Everything",
        "Extreme",
        "Foo Fighters",
        "Georgia Satellites",
        "Gloria Gaynor",
        "Grand Funk Railroad",
        "Green Day",
        "Guns N’ Roses",
        "Hiatus Kaiyote",
        "Hozier",
        "Huey Lewis And The News",
        "INXS",
        "Iron Maiden",
        "James Brown",
        "Jamiroquai",
        "Jason Aldean",
        "Jean Knight",
        "Jet",
        "Jethro Tull\u0000",
        "Jimmy Eat World",
        "Joan Jett & The Blackhearts",
        "John Cougar Mellencamp",
        "John Lennon",
        "Journey",
        "KISS",
        "Kansas",
        "Karnivool",
        "Katy Perry",
        "Kings Of Leon",
        "Kool & The Gang",
        "Led Zeppelin",
        "Lenny Kravitz",
        "Linkin Park",
        "Lynyrd Skynyrd",
        "Mark Ronson",
        "Maroon 5",
        "Megadeth",
        "Meshuggah",
        "Metallica",
        "Michael Jackson",
        "Miles Davis",
        "Muse",
        "Mötley Crüe ",
        "NOFX",
        "Nickelback",
        "Nirvana",
        "Nitty Gritty Dirt Band",
        "Oasis",
        "Otis Redding",
        "Ozzy Osbourne",
        "Pantera",
        "Paramore",
        "Pat Benetar",
        "Paul Simon",
        "Pearl Jam",
        "Pink Floyd",
        "Poison",
        "Porcupine Tree",
        "Protest The Hero",
        "Queen",
        "Queens Of The Stone Age",
        "Radiohead",
        "Radiohead ",
        "Red Hot Chili Peppers",
        "Revocation",
        "Rick Springfield",
        "Rush",
        "Santana",
        "Scorpions",
        "Seven Year Storm ",
        "Shania Twain",
        "Simon & Garfunkel",
        "Soundgarden",
        "Steppenwolf",
        "Stevie Ray Vaughan",
        "Sting",
        "Stone Temple Pilots",
        "Sublime",
        "Survivor",
        "System Of A Down",
        "Tears For Fears",
        "The Beatles",
        "The Black Eyed Peas",
        "The Buggles",
        "The Commodores",
        "The Cult",
        "The Doobie Brothers",
        "The Killers",
        "The Knack",
        "The Police",
        "The Pretenders",
        "The Proclaimers",
        "The Rolling Stones",
        "The Surfaris",
        "Thirty Seconds To Mars",
        "Three Days Grace",
        "Tigran Hamasyan",
        "Tigran Hamasyan & Red Hail",
        "Tool",
        "Tool ",
        "Toto",
        "Trivium",
        "Twenty One Pilots",
        "Twisted Sister",
        "U2",
        "Van Halen",
        "Van Morrison",
        "Weezer",
        "Whitesnake",
        "Wild Cherry",
        "Wolfmother",
        "YUCA",
        "ZZ Top",
        "Zac Brown Band"
      ]
    },
    "activeFilters": {
      "content_type": [
        "song"
      ]
    },
    "pagination": {
      "total": 248,
      "count": 20,
      "per_page": "20",
      "current_page": "1",
      "total_pages": 13
    }
  },
  "links": []
}
EOT;
// -->
@endphp

@section('app')
    @include('sections.user-stats')

    <h1 class="container w-full mx-auto px-3 pt-6 font-extrabold text-4xl">Songs</h1>

    <div class="container w-full h-full mx-auto px-3">
        <content-row
            content-list='{{ $rc1 }}'
            section-title="continue"
            section-url="#"
        ></content-row>
    </div>

    <content-catalogue
        level-selector='2'
        topics-filters-title='what style do you want to play?'
        topics-filters-key='style'
        :cards-per-row='5'
        preload-data='{{ $rc1 }}'
        use-songs-content-type-filters
        use-progress-filters
        infinite-scroll
    ></content-catalogue>
@endsection
