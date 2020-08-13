@extends('vue.layout')

@section('title', 'Members - Play Alongs')

@section('menu')
    @include('sections.menu', ['active' => 'edge'])
    @include('sections.edge-nav', ['active' => 'play-alongs'])
@endsection

@php
// <!--
$rc1 = <<<'EOT'
{
  "data": [
    {
      "type": "content",
      "id": "20018",
      "attributes": {
        "slug": "calling",
        "type": "play-along",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-11-13 02:21:13",
        "archivedOn": "",
        "createdOn": "2013-11-13 02:21:13",
        "difficulty": "7",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20018",
        "qnaVideo": "",
        "style": "Vocals",
        "title": "Calling",
        "xp": "",
        "album": "",
        "artist": "Dying Hearts Desire",
        "bpm": "194",
        "cdTracks": "",
        "chordOrScale": "",
        "difficultyRange": "",
        "episodeNumber": "",
        "exerciseBookPages": "",
        "fastBpm": "",
        "includesSong": "",
        "instructors": "",
        "liveEventStartTime": "",
        "liveEventEndTime": "",
        "liveEventYoutubeId": "",
        "liveStreamFeedType": "",
        "name": "",
        "released": "",
        "slowBpm": "",
        "transcriberName": "",
        "week": "",
        "avatarUrl": "",
        "lengthInSeconds": "",
        "soundsliceSlug": "",
        "staffPickRating": "",
        "studentId": "",
        "vimeoVideoId": "",
        "youtubeVideoId": ""
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2775"
            },
            {
              "type": "contentData",
              "id": "11852"
            },
            {
              "type": "contentData",
              "id": "24928"
            },
            {
              "type": "contentData",
              "id": "24929"
            },
            {
              "type": "contentData",
              "id": "28491"
            },
            {
              "type": "contentData",
              "id": "52529"
            },
            {
              "type": "contentData",
              "id": "52532"
            },
            {
              "type": "contentData",
              "id": "52537"
            },
            {
              "type": "contentData",
              "id": "52543"
            },
            {
              "type": "contentData",
              "id": "52546"
            },
            {
              "type": "contentData",
              "id": "52548"
            },
            {
              "type": "contentData",
              "id": "52551"
            },
            {
              "type": "contentData",
              "id": "52552"
            },
            {
              "type": "contentData",
              "id": "52555"
            },
            {
              "type": "contentData",
              "id": "52558"
            },
            {
              "type": "contentData",
              "id": "72558"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7133"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79747"
            },
            {
              "type": "tag",
              "id": "79748"
            },
            {
              "type": "tag",
              "id": "79749"
            },
            {
              "type": "tag",
              "id": "79750"
            },
            {
              "type": "tag",
              "id": "79751"
            },
            {
              "type": "tag",
              "id": "79752"
            },
            {
              "type": "tag",
              "id": "79753"
            },
            {
              "type": "tag",
              "id": "79754"
            },
            {
              "type": "tag",
              "id": "79755"
            },
            {
              "type": "tag",
              "id": "79756"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20060",
      "attributes": {
        "slug": "drummerboy",
        "type": "play-along",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-11-29 12:02:17",
        "archivedOn": "",
        "createdOn": "2013-11-29 12:02:17",
        "difficulty": "5",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20060",
        "qnaVideo": "",
        "style": "Christmas",
        "title": "Drummerboy",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "158",
        "cdTracks": "",
        "chordOrScale": "",
        "difficultyRange": "",
        "episodeNumber": "",
        "exerciseBookPages": "",
        "fastBpm": "",
        "includesSong": "",
        "instructors": "",
        "liveEventStartTime": "",
        "liveEventEndTime": "",
        "liveEventYoutubeId": "",
        "liveStreamFeedType": "",
        "name": "",
        "released": "",
        "slowBpm": "",
        "transcriberName": "",
        "week": "",
        "avatarUrl": "",
        "lengthInSeconds": "",
        "soundsliceSlug": "",
        "staffPickRating": "",
        "studentId": "",
        "vimeoVideoId": "",
        "youtubeVideoId": ""
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2774"
            },
            {
              "type": "contentData",
              "id": "11855"
            },
            {
              "type": "contentData",
              "id": "24930"
            },
            {
              "type": "contentData",
              "id": "24931"
            },
            {
              "type": "contentData",
              "id": "28490"
            },
            {
              "type": "contentData",
              "id": "52505"
            },
            {
              "type": "contentData",
              "id": "52507"
            },
            {
              "type": "contentData",
              "id": "52509"
            },
            {
              "type": "contentData",
              "id": "52510"
            },
            {
              "type": "contentData",
              "id": "52513"
            },
            {
              "type": "contentData",
              "id": "52516"
            },
            {
              "type": "contentData",
              "id": "52519"
            },
            {
              "type": "contentData",
              "id": "52521"
            },
            {
              "type": "contentData",
              "id": "52524"
            },
            {
              "type": "contentData",
              "id": "52527"
            },
            {
              "type": "contentData",
              "id": "72556"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79731"
            },
            {
              "type": "tag",
              "id": "79732"
            },
            {
              "type": "tag",
              "id": "79733"
            },
            {
              "type": "tag",
              "id": "79734"
            },
            {
              "type": "tag",
              "id": "79735"
            },
            {
              "type": "tag",
              "id": "79736"
            },
            {
              "type": "tag",
              "id": "79737"
            },
            {
              "type": "tag",
              "id": "79738"
            },
            {
              "type": "tag",
              "id": "79739"
            },
            {
              "type": "tag",
              "id": "79740"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20131",
      "attributes": {
        "slug": "another-punk-song",
        "type": "play-along",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-12-13 08:51:50",
        "archivedOn": "",
        "createdOn": "2013-12-13 08:51:50",
        "difficulty": "4",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20131",
        "qnaVideo": "",
        "style": "Punk",
        "title": "Another Punk Song",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "165",
        "cdTracks": "",
        "chordOrScale": "",
        "difficultyRange": "",
        "episodeNumber": "",
        "exerciseBookPages": "",
        "fastBpm": "",
        "includesSong": "",
        "instructors": "",
        "liveEventStartTime": "",
        "liveEventEndTime": "",
        "liveEventYoutubeId": "",
        "liveStreamFeedType": "",
        "name": "",
        "released": "",
        "slowBpm": "",
        "transcriberName": "",
        "week": "",
        "avatarUrl": "",
        "lengthInSeconds": "",
        "soundsliceSlug": "",
        "staffPickRating": "",
        "studentId": "",
        "vimeoVideoId": "",
        "youtubeVideoId": ""
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2773"
            },
            {
              "type": "contentData",
              "id": "11909"
            },
            {
              "type": "contentData",
              "id": "24932"
            },
            {
              "type": "contentData",
              "id": "24933"
            },
            {
              "type": "contentData",
              "id": "28489"
            },
            {
              "type": "contentData",
              "id": "52489"
            },
            {
              "type": "contentData",
              "id": "52491"
            },
            {
              "type": "contentData",
              "id": "52492"
            },
            {
              "type": "contentData",
              "id": "52494"
            },
            {
              "type": "contentData",
              "id": "52496"
            },
            {
              "type": "contentData",
              "id": "52497"
            },
            {
              "type": "contentData",
              "id": "52499"
            },
            {
              "type": "contentData",
              "id": "52500"
            },
            {
              "type": "contentData",
              "id": "52502"
            },
            {
              "type": "contentData",
              "id": "52503"
            },
            {
              "type": "contentData",
              "id": "72546"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7114"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79637"
            },
            {
              "type": "tag",
              "id": "79638"
            },
            {
              "type": "tag",
              "id": "79639"
            },
            {
              "type": "tag",
              "id": "79640"
            },
            {
              "type": "tag",
              "id": "79641"
            },
            {
              "type": "tag",
              "id": "79642"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20178",
      "attributes": {
        "slug": "sing-this-song",
        "type": "play-along",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-12-27 00:05:46",
        "archivedOn": "",
        "createdOn": "2013-12-27 00:05:46",
        "difficulty": "3",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20178",
        "qnaVideo": "",
        "style": "Vocals",
        "title": "Sing This Song",
        "xp": "",
        "album": "",
        "artist": "Dirk Kennedy",
        "bpm": "93",
        "cdTracks": "",
        "chordOrScale": "",
        "difficultyRange": "",
        "episodeNumber": "",
        "exerciseBookPages": "",
        "fastBpm": "",
        "includesSong": "",
        "instructors": "",
        "liveEventStartTime": "",
        "liveEventEndTime": "",
        "liveEventYoutubeId": "",
        "liveStreamFeedType": "",
        "name": "",
        "released": "",
        "slowBpm": "",
        "transcriberName": "",
        "week": "",
        "avatarUrl": "",
        "lengthInSeconds": "",
        "soundsliceSlug": "",
        "staffPickRating": "",
        "studentId": "",
        "vimeoVideoId": "",
        "youtubeVideoId": ""
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2772"
            },
            {
              "type": "contentData",
              "id": "11945"
            },
            {
              "type": "contentData",
              "id": "24934"
            },
            {
              "type": "contentData",
              "id": "28488"
            },
            {
              "type": "contentData",
              "id": "52473"
            },
            {
              "type": "contentData",
              "id": "52475"
            },
            {
              "type": "contentData",
              "id": "52477"
            },
            {
              "type": "contentData",
              "id": "52479"
            },
            {
              "type": "contentData",
              "id": "52480"
            },
            {
              "type": "contentData",
              "id": "52482"
            },
            {
              "type": "contentData",
              "id": "52483"
            },
            {
              "type": "contentData",
              "id": "52485"
            },
            {
              "type": "contentData",
              "id": "52486"
            },
            {
              "type": "contentData",
              "id": "52488"
            },
            {
              "type": "contentData",
              "id": "72537"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7101"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79571"
            },
            {
              "type": "tag",
              "id": "79572"
            },
            {
              "type": "tag",
              "id": "79573"
            },
            {
              "type": "tag",
              "id": "79574"
            },
            {
              "type": "tag",
              "id": "79575"
            },
            {
              "type": "tag",
              "id": "79576"
            },
            {
              "type": "tag",
              "id": "79577"
            },
            {
              "type": "tag",
              "id": "79578"
            },
            {
              "type": "tag",
              "id": "79579"
            },
            {
              "type": "tag",
              "id": "79580"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20292",
      "attributes": {
        "slug": "mirage",
        "type": "play-along",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-01-17 00:55:51",
        "archivedOn": "",
        "createdOn": "2014-01-17 00:55:51",
        "difficulty": "3",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20292",
        "qnaVideo": "",
        "style": "Alternative",
        "title": "Mirage",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "94",
        "cdTracks": "",
        "chordOrScale": "",
        "difficultyRange": "",
        "episodeNumber": "",
        "exerciseBookPages": "",
        "fastBpm": "",
        "includesSong": "",
        "instructors": "",
        "liveEventStartTime": "",
        "liveEventEndTime": "",
        "liveEventYoutubeId": "",
        "liveStreamFeedType": "",
        "name": "",
        "released": "",
        "slowBpm": "",
        "transcriberName": "",
        "week": "",
        "avatarUrl": "",
        "lengthInSeconds": "",
        "soundsliceSlug": "",
        "staffPickRating": "",
        "studentId": "",
        "vimeoVideoId": "",
        "youtubeVideoId": ""
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2771"
            },
            {
              "type": "contentData",
              "id": "12016"
            },
            {
              "type": "contentData",
              "id": "24935"
            },
            {
              "type": "contentData",
              "id": "24936"
            },
            {
              "type": "contentData",
              "id": "28487"
            },
            {
              "type": "contentData",
              "id": "52458"
            },
            {
              "type": "contentData",
              "id": "52459"
            },
            {
              "type": "contentData",
              "id": "52461"
            },
            {
              "type": "contentData",
              "id": "52463"
            },
            {
              "type": "contentData",
              "id": "52464"
            },
            {
              "type": "contentData",
              "id": "52466"
            },
            {
              "type": "contentData",
              "id": "52467"
            },
            {
              "type": "contentData",
              "id": "52469"
            },
            {
              "type": "contentData",
              "id": "52470"
            },
            {
              "type": "contentData",
              "id": "52472"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7079"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79381"
            },
            {
              "type": "tag",
              "id": "79382"
            },
            {
              "type": "tag",
              "id": "79383"
            },
            {
              "type": "tag",
              "id": "79384"
            },
            {
              "type": "tag",
              "id": "79385"
            },
            {
              "type": "tag",
              "id": "79386"
            },
            {
              "type": "tag",
              "id": "79387"
            },
            {
              "type": "tag",
              "id": "79388"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20361",
      "attributes": {
        "slug": "im-alive-she-said",
        "type": "play-along",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-01-31 01:17:54",
        "archivedOn": "",
        "createdOn": "2014-01-31 01:17:54",
        "difficulty": "6",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20361",
        "qnaVideo": "",
        "style": "Vocals",
        "title": "I'm Alive She Said",
        "xp": "",
        "album": "",
        "artist": "YUCA",
        "bpm": "134",
        "cdTracks": "",
        "chordOrScale": "",
        "difficultyRange": "",
        "episodeNumber": "",
        "exerciseBookPages": "",
        "fastBpm": "",
        "includesSong": "",
        "instructors": "",
        "liveEventStartTime": "",
        "liveEventEndTime": "",
        "liveEventYoutubeId": "",
        "liveStreamFeedType": "",
        "name": "",
        "released": "",
        "slowBpm": "",
        "transcriberName": "",
        "week": "",
        "avatarUrl": "",
        "lengthInSeconds": "",
        "soundsliceSlug": "",
        "staffPickRating": "",
        "studentId": "",
        "vimeoVideoId": "",
        "youtubeVideoId": ""
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2770"
            },
            {
              "type": "contentData",
              "id": "12078"
            },
            {
              "type": "contentData",
              "id": "24937"
            },
            {
              "type": "contentData",
              "id": "24938"
            },
            {
              "type": "contentData",
              "id": "31283"
            },
            {
              "type": "contentData",
              "id": "52441"
            },
            {
              "type": "contentData",
              "id": "52443"
            },
            {
              "type": "contentData",
              "id": "52445"
            },
            {
              "type": "contentData",
              "id": "52447"
            },
            {
              "type": "contentData",
              "id": "52448"
            },
            {
              "type": "contentData",
              "id": "52450"
            },
            {
              "type": "contentData",
              "id": "52451"
            },
            {
              "type": "contentData",
              "id": "52453"
            },
            {
              "type": "contentData",
              "id": "52454"
            },
            {
              "type": "contentData",
              "id": "52456"
            },
            {
              "type": "contentData",
              "id": "72512"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7057"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79162"
            },
            {
              "type": "tag",
              "id": "79163"
            },
            {
              "type": "tag",
              "id": "79164"
            },
            {
              "type": "tag",
              "id": "79165"
            },
            {
              "type": "tag",
              "id": "79166"
            },
            {
              "type": "tag",
              "id": "79167"
            },
            {
              "type": "tag",
              "id": "79168"
            },
            {
              "type": "tag",
              "id": "79169"
            },
            {
              "type": "tag",
              "id": "79170"
            },
            {
              "type": "tag",
              "id": "79171"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20493",
      "attributes": {
        "slug": "smooth-rock",
        "type": "play-along",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-02-14 01:05:23",
        "archivedOn": "",
        "createdOn": "2014-02-14 01:05:23",
        "difficulty": "2",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20493",
        "qnaVideo": "",
        "style": "Rock",
        "title": "Smooth Rock",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "80",
        "cdTracks": "",
        "chordOrScale": "",
        "difficultyRange": "",
        "episodeNumber": "",
        "exerciseBookPages": "",
        "fastBpm": "",
        "includesSong": "",
        "instructors": "",
        "liveEventStartTime": "",
        "liveEventEndTime": "",
        "liveEventYoutubeId": "",
        "liveStreamFeedType": "",
        "name": "",
        "released": "",
        "slowBpm": "",
        "transcriberName": "",
        "week": "",
        "avatarUrl": "",
        "lengthInSeconds": "",
        "soundsliceSlug": "",
        "staffPickRating": "",
        "studentId": "",
        "vimeoVideoId": "",
        "youtubeVideoId": ""
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2769"
            },
            {
              "type": "contentData",
              "id": "12124"
            },
            {
              "type": "contentData",
              "id": "24939"
            },
            {
              "type": "contentData",
              "id": "24940"
            },
            {
              "type": "contentData",
              "id": "28486"
            },
            {
              "type": "contentData",
              "id": "52426"
            },
            {
              "type": "contentData",
              "id": "52427"
            },
            {
              "type": "contentData",
              "id": "52429"
            },
            {
              "type": "contentData",
              "id": "52431"
            },
            {
              "type": "contentData",
              "id": "52433"
            },
            {
              "type": "contentData",
              "id": "52434"
            },
            {
              "type": "contentData",
              "id": "52436"
            },
            {
              "type": "contentData",
              "id": "52437"
            },
            {
              "type": "contentData",
              "id": "52438"
            },
            {
              "type": "contentData",
              "id": "52440"
            },
            {
              "type": "contentData",
              "id": "72501"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7040"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79000"
            },
            {
              "type": "tag",
              "id": "79001"
            },
            {
              "type": "tag",
              "id": "79002"
            },
            {
              "type": "tag",
              "id": "79003"
            },
            {
              "type": "tag",
              "id": "79004"
            },
            {
              "type": "tag",
              "id": "79005"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "2800"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20657",
      "attributes": {
        "slug": "bossa-nova",
        "type": "play-along",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-02-28 01:10:19",
        "archivedOn": "",
        "createdOn": "2014-02-28 01:10:19",
        "difficulty": "3",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20657",
        "qnaVideo": "",
        "style": "World",
        "title": "Bossa Nova",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "130",
        "cdTracks": "",
        "chordOrScale": "",
        "difficultyRange": "",
        "episodeNumber": "",
        "exerciseBookPages": "",
        "fastBpm": "",
        "includesSong": "",
        "instructors": "",
        "liveEventStartTime": "",
        "liveEventEndTime": "",
        "liveEventYoutubeId": "",
        "liveStreamFeedType": "",
        "name": "",
        "released": "",
        "slowBpm": "",
        "transcriberName": "",
        "week": "",
        "avatarUrl": "",
        "lengthInSeconds": "",
        "soundsliceSlug": "",
        "staffPickRating": "",
        "studentId": "",
        "vimeoVideoId": "",
        "youtubeVideoId": ""
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2768"
            },
            {
              "type": "contentData",
              "id": "12259"
            },
            {
              "type": "contentData",
              "id": "24955"
            },
            {
              "type": "contentData",
              "id": "24956"
            },
            {
              "type": "contentData",
              "id": "28485"
            },
            {
              "type": "contentData",
              "id": "52410"
            },
            {
              "type": "contentData",
              "id": "52411"
            },
            {
              "type": "contentData",
              "id": "52413"
            },
            {
              "type": "contentData",
              "id": "52415"
            },
            {
              "type": "contentData",
              "id": "52417"
            },
            {
              "type": "contentData",
              "id": "52418"
            },
            {
              "type": "contentData",
              "id": "52420"
            },
            {
              "type": "contentData",
              "id": "52421"
            },
            {
              "type": "contentData",
              "id": "52423"
            },
            {
              "type": "contentData",
              "id": "52424"
            },
            {
              "type": "contentData",
              "id": "72458"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7018"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78177"
            },
            {
              "type": "tag",
              "id": "78178"
            },
            {
              "type": "tag",
              "id": "78179"
            },
            {
              "type": "tag",
              "id": "78180"
            },
            {
              "type": "tag",
              "id": "78181"
            },
            {
              "type": "tag",
              "id": "78182"
            },
            {
              "type": "tag",
              "id": "78183"
            },
            {
              "type": "tag",
              "id": "78184"
            },
            {
              "type": "tag",
              "id": "78185"
            },
            {
              "type": "tag",
              "id": "78186"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20865",
      "attributes": {
        "slug": "slow-rockin",
        "type": "play-along",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-03-14 02:14:12",
        "archivedOn": "",
        "createdOn": "2014-03-14 02:14:12",
        "difficulty": "2",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20865",
        "qnaVideo": "",
        "style": "Rock",
        "title": "Slow Rockin'",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "80",
        "cdTracks": "",
        "chordOrScale": "",
        "difficultyRange": "",
        "episodeNumber": "",
        "exerciseBookPages": "",
        "fastBpm": "",
        "includesSong": "",
        "instructors": "",
        "liveEventStartTime": "",
        "liveEventEndTime": "",
        "liveEventYoutubeId": "",
        "liveStreamFeedType": "",
        "name": "",
        "released": "",
        "slowBpm": "",
        "transcriberName": "",
        "week": "",
        "avatarUrl": "",
        "lengthInSeconds": "",
        "soundsliceSlug": "",
        "staffPickRating": "",
        "studentId": "",
        "vimeoVideoId": "",
        "youtubeVideoId": ""
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2767"
            },
            {
              "type": "contentData",
              "id": "12418"
            },
            {
              "type": "contentData",
              "id": "24969"
            },
            {
              "type": "contentData",
              "id": "24970"
            },
            {
              "type": "contentData",
              "id": "28484"
            },
            {
              "type": "contentData",
              "id": "52393"
            },
            {
              "type": "contentData",
              "id": "52395"
            },
            {
              "type": "contentData",
              "id": "52397"
            },
            {
              "type": "contentData",
              "id": "52398"
            },
            {
              "type": "contentData",
              "id": "52400"
            },
            {
              "type": "contentData",
              "id": "52402"
            },
            {
              "type": "contentData",
              "id": "52403"
            },
            {
              "type": "contentData",
              "id": "52405"
            },
            {
              "type": "contentData",
              "id": "52407"
            },
            {
              "type": "contentData",
              "id": "52408"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6988"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "77437"
            },
            {
              "type": "tag",
              "id": "77438"
            },
            {
              "type": "tag",
              "id": "77439"
            },
            {
              "type": "tag",
              "id": "77440"
            },
            {
              "type": "tag",
              "id": "77441"
            },
            {
              "type": "tag",
              "id": "77442"
            },
            {
              "type": "tag",
              "id": "77443"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21049",
      "attributes": {
        "slug": "you-belong-with-the-drums",
        "type": "play-along",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-03-28 03:20:36",
        "archivedOn": "",
        "createdOn": "2014-03-28 03:20:36",
        "difficulty": "3",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "21049",
        "qnaVideo": "",
        "style": "Alternative",
        "title": "You Belong With The Drums",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "127",
        "cdTracks": "",
        "chordOrScale": "",
        "difficultyRange": "",
        "episodeNumber": "",
        "exerciseBookPages": "",
        "fastBpm": "",
        "includesSong": "",
        "instructors": "",
        "liveEventStartTime": "",
        "liveEventEndTime": "",
        "liveEventYoutubeId": "",
        "liveStreamFeedType": "",
        "name": "",
        "released": "",
        "slowBpm": "",
        "transcriberName": "",
        "week": "",
        "avatarUrl": "",
        "lengthInSeconds": "",
        "soundsliceSlug": "",
        "staffPickRating": "",
        "studentId": "",
        "vimeoVideoId": "",
        "youtubeVideoId": ""
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2766"
            },
            {
              "type": "contentData",
              "id": "12507"
            },
            {
              "type": "contentData",
              "id": "24975"
            },
            {
              "type": "contentData",
              "id": "24976"
            },
            {
              "type": "contentData",
              "id": "28498"
            },
            {
              "type": "contentData",
              "id": "52378"
            },
            {
              "type": "contentData",
              "id": "52379"
            },
            {
              "type": "contentData",
              "id": "52381"
            },
            {
              "type": "contentData",
              "id": "52383"
            },
            {
              "type": "contentData",
              "id": "52384"
            },
            {
              "type": "contentData",
              "id": "52386"
            },
            {
              "type": "contentData",
              "id": "52387"
            },
            {
              "type": "contentData",
              "id": "52389"
            },
            {
              "type": "contentData",
              "id": "52390"
            },
            {
              "type": "contentData",
              "id": "52392"
            },
            {
              "type": "contentData",
              "id": "72387"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6970"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "76988"
            },
            {
              "type": "tag",
              "id": "76989"
            },
            {
              "type": "tag",
              "id": "76990"
            },
            {
              "type": "tag",
              "id": "76991"
            },
            {
              "type": "tag",
              "id": "76992"
            },
            {
              "type": "tag",
              "id": "76993"
            },
            {
              "type": "tag",
              "id": "76994"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "2775"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21139",
      "attributes": {
        "slug": "metal-life",
        "type": "play-along",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-04-11 01:55:57",
        "archivedOn": "",
        "createdOn": "2014-04-11 01:55:57",
        "difficulty": "5",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "21139",
        "qnaVideo": "",
        "style": "Metal",
        "title": "Metal Life",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "150",
        "cdTracks": "",
        "chordOrScale": "",
        "difficultyRange": "",
        "episodeNumber": "",
        "exerciseBookPages": "",
        "fastBpm": "",
        "includesSong": "",
        "instructors": "",
        "liveEventStartTime": "",
        "liveEventEndTime": "",
        "liveEventYoutubeId": "",
        "liveStreamFeedType": "",
        "name": "",
        "released": "",
        "slowBpm": "",
        "transcriberName": "",
        "week": "",
        "avatarUrl": "",
        "lengthInSeconds": "",
        "soundsliceSlug": "",
        "staffPickRating": "",
        "studentId": "",
        "vimeoVideoId": "",
        "youtubeVideoId": ""
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2765"
            },
            {
              "type": "contentData",
              "id": "12579"
            },
            {
              "type": "contentData",
              "id": "24979"
            },
            {
              "type": "contentData",
              "id": "24980"
            },
            {
              "type": "contentData",
              "id": "28497"
            },
            {
              "type": "contentData",
              "id": "52362"
            },
            {
              "type": "contentData",
              "id": "52363"
            },
            {
              "type": "contentData",
              "id": "52365"
            },
            {
              "type": "contentData",
              "id": "52367"
            },
            {
              "type": "contentData",
              "id": "52368"
            },
            {
              "type": "contentData",
              "id": "52370"
            },
            {
              "type": "contentData",
              "id": "52372"
            },
            {
              "type": "contentData",
              "id": "52373"
            },
            {
              "type": "contentData",
              "id": "52375"
            },
            {
              "type": "contentData",
              "id": "52376"
            },
            {
              "type": "contentData",
              "id": "72364"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6953"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "76561"
            },
            {
              "type": "tag",
              "id": "76562"
            },
            {
              "type": "tag",
              "id": "76563"
            },
            {
              "type": "tag",
              "id": "76564"
            },
            {
              "type": "tag",
              "id": "76565"
            },
            {
              "type": "tag",
              "id": "76566"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21181",
      "attributes": {
        "slug": "got-soul",
        "type": "play-along",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-04-25 07:53:29",
        "archivedOn": "",
        "createdOn": "2014-04-25 07:53:29",
        "difficulty": "6",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "21181",
        "qnaVideo": "",
        "style": "Gospel",
        "title": "Got Soul?",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "100",
        "cdTracks": "",
        "chordOrScale": "",
        "difficultyRange": "",
        "episodeNumber": "",
        "exerciseBookPages": "",
        "fastBpm": "",
        "includesSong": "",
        "instructors": "",
        "liveEventStartTime": "",
        "liveEventEndTime": "",
        "liveEventYoutubeId": "",
        "liveStreamFeedType": "",
        "name": "",
        "released": "",
        "slowBpm": "",
        "transcriberName": "",
        "week": "",
        "avatarUrl": "",
        "lengthInSeconds": "",
        "soundsliceSlug": "",
        "staffPickRating": "",
        "studentId": "",
        "vimeoVideoId": "",
        "youtubeVideoId": ""
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2764"
            },
            {
              "type": "contentData",
              "id": "12637"
            },
            {
              "type": "contentData",
              "id": "24981"
            },
            {
              "type": "contentData",
              "id": "24982"
            },
            {
              "type": "contentData",
              "id": "28496"
            },
            {
              "type": "contentData",
              "id": "52345"
            },
            {
              "type": "contentData",
              "id": "52347"
            },
            {
              "type": "contentData",
              "id": "52349"
            },
            {
              "type": "contentData",
              "id": "52351"
            },
            {
              "type": "contentData",
              "id": "52353"
            },
            {
              "type": "contentData",
              "id": "52354"
            },
            {
              "type": "contentData",
              "id": "52356"
            },
            {
              "type": "contentData",
              "id": "52357"
            },
            {
              "type": "contentData",
              "id": "52359"
            },
            {
              "type": "contentData",
              "id": "52360"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6937"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "76363"
            },
            {
              "type": "tag",
              "id": "76364"
            },
            {
              "type": "tag",
              "id": "76365"
            },
            {
              "type": "tag",
              "id": "76366"
            },
            {
              "type": "tag",
              "id": "76367"
            },
            {
              "type": "tag",
              "id": "76368"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21337",
      "attributes": {
        "slug": "a-drummers-offspring",
        "type": "play-along",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-05-09 01:22:42",
        "archivedOn": "",
        "createdOn": "2014-05-09 01:22:42",
        "difficulty": "3",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "21337",
        "qnaVideo": "",
        "style": "Rock",
        "title": "A Drummer's Offspring",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "112",
        "cdTracks": "",
        "chordOrScale": "",
        "difficultyRange": "",
        "episodeNumber": "",
        "exerciseBookPages": "",
        "fastBpm": "",
        "includesSong": "",
        "instructors": "",
        "liveEventStartTime": "",
        "liveEventEndTime": "",
        "liveEventYoutubeId": "",
        "liveStreamFeedType": "",
        "name": "",
        "released": "",
        "slowBpm": "",
        "transcriberName": "",
        "week": "",
        "avatarUrl": "",
        "lengthInSeconds": "",
        "soundsliceSlug": "",
        "staffPickRating": "",
        "studentId": "",
        "vimeoVideoId": "",
        "youtubeVideoId": ""
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2763"
            },
            {
              "type": "contentData",
              "id": "12725"
            },
            {
              "type": "contentData",
              "id": "24987"
            },
            {
              "type": "contentData",
              "id": "24988"
            },
            {
              "type": "contentData",
              "id": "28495"
            },
            {
              "type": "contentData",
              "id": "52330"
            },
            {
              "type": "contentData",
              "id": "52331"
            },
            {
              "type": "contentData",
              "id": "52333"
            },
            {
              "type": "contentData",
              "id": "52335"
            },
            {
              "type": "contentData",
              "id": "52336"
            },
            {
              "type": "contentData",
              "id": "52338"
            },
            {
              "type": "contentData",
              "id": "52339"
            },
            {
              "type": "contentData",
              "id": "52340"
            },
            {
              "type": "contentData",
              "id": "52342"
            },
            {
              "type": "contentData",
              "id": "52344"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6920"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "75847"
            },
            {
              "type": "tag",
              "id": "75848"
            },
            {
              "type": "tag",
              "id": "75849"
            },
            {
              "type": "tag",
              "id": "75850"
            },
            {
              "type": "tag",
              "id": "75851"
            },
            {
              "type": "tag",
              "id": "75852"
            },
            {
              "type": "tag",
              "id": "75853"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21439",
      "attributes": {
        "slug": "party-drumming",
        "type": "play-along",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-05-23 01:51:46",
        "archivedOn": "",
        "createdOn": "2014-05-23 01:51:46",
        "difficulty": "4",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "21439",
        "qnaVideo": "",
        "style": "Electronic",
        "title": "Party Drumming",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "127",
        "cdTracks": "",
        "chordOrScale": "",
        "difficultyRange": "",
        "episodeNumber": "",
        "exerciseBookPages": "",
        "fastBpm": "",
        "includesSong": "",
        "instructors": "",
        "liveEventStartTime": "",
        "liveEventEndTime": "",
        "liveEventYoutubeId": "",
        "liveStreamFeedType": "",
        "name": "",
        "released": "",
        "slowBpm": "",
        "transcriberName": "",
        "week": "",
        "avatarUrl": "",
        "lengthInSeconds": "",
        "soundsliceSlug": "",
        "staffPickRating": "",
        "studentId": "",
        "vimeoVideoId": "",
        "youtubeVideoId": ""
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2762"
            },
            {
              "type": "contentData",
              "id": "12814"
            },
            {
              "type": "contentData",
              "id": "24995"
            },
            {
              "type": "contentData",
              "id": "24996"
            },
            {
              "type": "contentData",
              "id": "28494"
            },
            {
              "type": "contentData",
              "id": "52313"
            },
            {
              "type": "contentData",
              "id": "52315"
            },
            {
              "type": "contentData",
              "id": "52317"
            },
            {
              "type": "contentData",
              "id": "52319"
            },
            {
              "type": "contentData",
              "id": "52320"
            },
            {
              "type": "contentData",
              "id": "52322"
            },
            {
              "type": "contentData",
              "id": "52323"
            },
            {
              "type": "contentData",
              "id": "52325"
            },
            {
              "type": "contentData",
              "id": "52326"
            },
            {
              "type": "contentData",
              "id": "52328"
            },
            {
              "type": "contentData",
              "id": "72296"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "75399"
            },
            {
              "type": "tag",
              "id": "75400"
            },
            {
              "type": "tag",
              "id": "75401"
            },
            {
              "type": "tag",
              "id": "75402"
            },
            {
              "type": "tag",
              "id": "75403"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21540",
      "attributes": {
        "slug": "omnisight-string-theory",
        "type": "play-along",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-06-06 13:17:09",
        "archivedOn": "",
        "createdOn": "2014-06-06 13:17:09",
        "difficulty": "5",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "21540",
        "qnaVideo": "",
        "style": "Progressive",
        "title": "String Theory",
        "xp": "",
        "album": "",
        "artist": "Omnisight",
        "bpm": "120",
        "cdTracks": "",
        "chordOrScale": "",
        "difficultyRange": "",
        "episodeNumber": "",
        "exerciseBookPages": "",
        "fastBpm": "",
        "includesSong": "",
        "instructors": "",
        "liveEventStartTime": "",
        "liveEventEndTime": "",
        "liveEventYoutubeId": "",
        "liveStreamFeedType": "",
        "name": "",
        "released": "",
        "slowBpm": "",
        "transcriberName": "",
        "week": "",
        "avatarUrl": "",
        "lengthInSeconds": "",
        "soundsliceSlug": "",
        "staffPickRating": "",
        "studentId": "",
        "vimeoVideoId": "",
        "youtubeVideoId": ""
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2761"
            },
            {
              "type": "contentData",
              "id": "12888"
            },
            {
              "type": "contentData",
              "id": "25001"
            },
            {
              "type": "contentData",
              "id": "25002"
            },
            {
              "type": "contentData",
              "id": "31284"
            },
            {
              "type": "contentData",
              "id": "52298"
            },
            {
              "type": "contentData",
              "id": "52300"
            },
            {
              "type": "contentData",
              "id": "52302"
            },
            {
              "type": "contentData",
              "id": "52303"
            },
            {
              "type": "contentData",
              "id": "52305"
            },
            {
              "type": "contentData",
              "id": "52306"
            },
            {
              "type": "contentData",
              "id": "52307"
            },
            {
              "type": "contentData",
              "id": "52309"
            },
            {
              "type": "contentData",
              "id": "52310"
            },
            {
              "type": "contentData",
              "id": "52312"
            },
            {
              "type": "contentData",
              "id": "72270"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6883"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "75003"
            },
            {
              "type": "tag",
              "id": "75004"
            },
            {
              "type": "tag",
              "id": "75005"
            },
            {
              "type": "tag",
              "id": "75006"
            },
            {
              "type": "tag",
              "id": "75007"
            },
            {
              "type": "tag",
              "id": "75008"
            },
            {
              "type": "tag",
              "id": "75009"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21623",
      "attributes": {
        "slug": "billy-jane",
        "type": "play-along",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-06-20 01:15:40",
        "archivedOn": "",
        "createdOn": "2014-06-20 01:15:40",
        "difficulty": "1",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "21623",
        "qnaVideo": "",
        "style": "Funk",
        "title": "Billy Jane",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "112",
        "cdTracks": "",
        "chordOrScale": "",
        "difficultyRange": "",
        "episodeNumber": "",
        "exerciseBookPages": "",
        "fastBpm": "",
        "includesSong": "",
        "instructors": "",
        "liveEventStartTime": "",
        "liveEventEndTime": "",
        "liveEventYoutubeId": "",
        "liveStreamFeedType": "",
        "name": "",
        "released": "",
        "slowBpm": "",
        "transcriberName": "",
        "week": "",
        "avatarUrl": "",
        "lengthInSeconds": "",
        "soundsliceSlug": "",
        "staffPickRating": "",
        "studentId": "",
        "vimeoVideoId": "",
        "youtubeVideoId": ""
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2760"
            },
            {
              "type": "contentData",
              "id": "12944"
            },
            {
              "type": "contentData",
              "id": "25005"
            },
            {
              "type": "contentData",
              "id": "25006"
            },
            {
              "type": "contentData",
              "id": "28493"
            },
            {
              "type": "contentData",
              "id": "52282"
            },
            {
              "type": "contentData",
              "id": "52284"
            },
            {
              "type": "contentData",
              "id": "52286"
            },
            {
              "type": "contentData",
              "id": "52287"
            },
            {
              "type": "contentData",
              "id": "52289"
            },
            {
              "type": "contentData",
              "id": "52291"
            },
            {
              "type": "contentData",
              "id": "52292"
            },
            {
              "type": "contentData",
              "id": "52294"
            },
            {
              "type": "contentData",
              "id": "52295"
            },
            {
              "type": "contentData",
              "id": "52297"
            },
            {
              "type": "contentData",
              "id": "72252"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6867"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "74751"
            },
            {
              "type": "tag",
              "id": "74752"
            },
            {
              "type": "tag",
              "id": "74753"
            },
            {
              "type": "tag",
              "id": "74754"
            },
            {
              "type": "tag",
              "id": "74755"
            },
            {
              "type": "tag",
              "id": "74756"
            },
            {
              "type": "tag",
              "id": "74757"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "2818"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21705",
      "attributes": {
        "slug": "another-drum-on-the-shelf",
        "type": "play-along",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-07-04 09:45:04",
        "archivedOn": "",
        "createdOn": "2014-07-04 09:45:04",
        "difficulty": "2",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "21705",
        "qnaVideo": "",
        "style": "Rock",
        "title": "Another Drum On The Shelf",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "100",
        "cdTracks": "",
        "chordOrScale": "",
        "difficultyRange": "",
        "episodeNumber": "",
        "exerciseBookPages": "",
        "fastBpm": "",
        "includesSong": "",
        "instructors": "",
        "liveEventStartTime": "",
        "liveEventEndTime": "",
        "liveEventYoutubeId": "",
        "liveStreamFeedType": "",
        "name": "",
        "released": "",
        "slowBpm": "",
        "transcriberName": "",
        "week": "",
        "avatarUrl": "",
        "lengthInSeconds": "",
        "soundsliceSlug": "",
        "staffPickRating": "",
        "studentId": "",
        "vimeoVideoId": "",
        "youtubeVideoId": ""
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2759"
            },
            {
              "type": "contentData",
              "id": "13011"
            },
            {
              "type": "contentData",
              "id": "25009"
            },
            {
              "type": "contentData",
              "id": "25010"
            },
            {
              "type": "contentData",
              "id": "31285"
            },
            {
              "type": "contentData",
              "id": "52267"
            },
            {
              "type": "contentData",
              "id": "52268"
            },
            {
              "type": "contentData",
              "id": "52270"
            },
            {
              "type": "contentData",
              "id": "52272"
            },
            {
              "type": "contentData",
              "id": "52273"
            },
            {
              "type": "contentData",
              "id": "52275"
            },
            {
              "type": "contentData",
              "id": "52276"
            },
            {
              "type": "contentData",
              "id": "52278"
            },
            {
              "type": "contentData",
              "id": "52279"
            },
            {
              "type": "contentData",
              "id": "52281"
            },
            {
              "type": "contentData",
              "id": "72235"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6853"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "74538"
            },
            {
              "type": "tag",
              "id": "74539"
            },
            {
              "type": "tag",
              "id": "74540"
            },
            {
              "type": "tag",
              "id": "74541"
            },
            {
              "type": "tag",
              "id": "74542"
            },
            {
              "type": "tag",
              "id": "74543"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21779",
      "attributes": {
        "slug": "sunday-morning-drummin",
        "type": "play-along",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-07-18 13:29:03",
        "archivedOn": "",
        "createdOn": "2014-07-18 13:29:03",
        "difficulty": "6",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "21779",
        "qnaVideo": "",
        "style": "Gospel",
        "title": "Sunday Morning Drummin'",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "95",
        "cdTracks": "",
        "chordOrScale": "",
        "difficultyRange": "",
        "episodeNumber": "",
        "exerciseBookPages": "",
        "fastBpm": "",
        "includesSong": "",
        "instructors": "",
        "liveEventStartTime": "",
        "liveEventEndTime": "",
        "liveEventYoutubeId": "",
        "liveStreamFeedType": "",
        "name": "",
        "released": "",
        "slowBpm": "",
        "transcriberName": "",
        "week": "",
        "avatarUrl": "",
        "lengthInSeconds": "",
        "soundsliceSlug": "",
        "staffPickRating": "",
        "studentId": "",
        "vimeoVideoId": "",
        "youtubeVideoId": ""
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2758"
            },
            {
              "type": "contentData",
              "id": "13068"
            },
            {
              "type": "contentData",
              "id": "25013"
            },
            {
              "type": "contentData",
              "id": "25014"
            },
            {
              "type": "contentData",
              "id": "28500"
            },
            {
              "type": "contentData",
              "id": "52250"
            },
            {
              "type": "contentData",
              "id": "52252"
            },
            {
              "type": "contentData",
              "id": "52254"
            },
            {
              "type": "contentData",
              "id": "52256"
            },
            {
              "type": "contentData",
              "id": "52258"
            },
            {
              "type": "contentData",
              "id": "52259"
            },
            {
              "type": "contentData",
              "id": "52261"
            },
            {
              "type": "contentData",
              "id": "52262"
            },
            {
              "type": "contentData",
              "id": "52264"
            },
            {
              "type": "contentData",
              "id": "52265"
            },
            {
              "type": "contentData",
              "id": "72217"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6836"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "74318"
            },
            {
              "type": "tag",
              "id": "74319"
            },
            {
              "type": "tag",
              "id": "74320"
            },
            {
              "type": "tag",
              "id": "74321"
            },
            {
              "type": "tag",
              "id": "74322"
            },
            {
              "type": "tag",
              "id": "74323"
            },
            {
              "type": "tag",
              "id": "74324"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "2832"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21854",
      "attributes": {
        "slug": "maybe-well-riot",
        "type": "play-along",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-08-01 01:24:31",
        "archivedOn": "",
        "createdOn": "2014-08-01 01:24:31",
        "difficulty": "4",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "21854",
        "qnaVideo": "",
        "style": "Vocals",
        "title": "Maybe We'll Riot",
        "xp": "",
        "album": "",
        "artist": "YUCA",
        "bpm": "135",
        "cdTracks": "",
        "chordOrScale": "",
        "difficultyRange": "",
        "episodeNumber": "",
        "exerciseBookPages": "",
        "fastBpm": "",
        "includesSong": "",
        "instructors": "",
        "liveEventStartTime": "",
        "liveEventEndTime": "",
        "liveEventYoutubeId": "",
        "liveStreamFeedType": "",
        "name": "",
        "released": "",
        "slowBpm": "",
        "transcriberName": "",
        "week": "",
        "avatarUrl": "",
        "lengthInSeconds": "",
        "soundsliceSlug": "",
        "staffPickRating": "",
        "studentId": "",
        "vimeoVideoId": "",
        "youtubeVideoId": ""
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2757"
            },
            {
              "type": "contentData",
              "id": "13122"
            },
            {
              "type": "contentData",
              "id": "25015"
            },
            {
              "type": "contentData",
              "id": "25016"
            },
            {
              "type": "contentData",
              "id": "28499"
            },
            {
              "type": "contentData",
              "id": "52234"
            },
            {
              "type": "contentData",
              "id": "52236"
            },
            {
              "type": "contentData",
              "id": "52238"
            },
            {
              "type": "contentData",
              "id": "52239"
            },
            {
              "type": "contentData",
              "id": "52241"
            },
            {
              "type": "contentData",
              "id": "52242"
            },
            {
              "type": "contentData",
              "id": "52244"
            },
            {
              "type": "contentData",
              "id": "52246"
            },
            {
              "type": "contentData",
              "id": "52247"
            },
            {
              "type": "contentData",
              "id": "52249"
            },
            {
              "type": "contentData",
              "id": "72198"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6818"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "74028"
            },
            {
              "type": "tag",
              "id": "74029"
            },
            {
              "type": "tag",
              "id": "74030"
            },
            {
              "type": "tag",
              "id": "74031"
            },
            {
              "type": "tag",
              "id": "74032"
            },
            {
              "type": "tag",
              "id": "74033"
            },
            {
              "type": "tag",
              "id": "74034"
            },
            {
              "type": "tag",
              "id": "74035"
            },
            {
              "type": "tag",
              "id": "74036"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "30691",
      "attributes": {
        "slug": "welcome-to-the-bottom",
        "type": "play-along",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2017-08-16 10:00:43",
        "archivedOn": "",
        "createdOn": "2017-08-16 10:00:43",
        "difficulty": "5",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "30691",
        "qnaVideo": "",
        "style": "Metal",
        "title": "Welcome To The Bottom",
        "xp": "",
        "album": "",
        "artist": "Bullets and Numbers",
        "bpm": "126",
        "cdTracks": "",
        "chordOrScale": "",
        "difficultyRange": "",
        "episodeNumber": "",
        "exerciseBookPages": "",
        "fastBpm": "",
        "includesSong": "",
        "instructors": "",
        "liveEventStartTime": "",
        "liveEventEndTime": "",
        "liveEventYoutubeId": "",
        "liveStreamFeedType": "",
        "name": "",
        "released": "",
        "slowBpm": "",
        "transcriberName": "",
        "week": "",
        "avatarUrl": "",
        "lengthInSeconds": "",
        "soundsliceSlug": "",
        "staffPickRating": "",
        "studentId": "",
        "vimeoVideoId": "",
        "youtubeVideoId": ""
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2654"
            },
            {
              "type": "contentData",
              "id": "18227"
            },
            {
              "type": "contentData",
              "id": "18228"
            },
            {
              "type": "contentData",
              "id": "50615"
            },
            {
              "type": "contentData",
              "id": "50617"
            },
            {
              "type": "contentData",
              "id": "50619"
            },
            {
              "type": "contentData",
              "id": "50621"
            },
            {
              "type": "contentData",
              "id": "50622"
            },
            {
              "type": "contentData",
              "id": "50624"
            },
            {
              "type": "contentData",
              "id": "50626"
            },
            {
              "type": "contentData",
              "id": "50627"
            },
            {
              "type": "contentData",
              "id": "50629"
            },
            {
              "type": "contentData",
              "id": "50630"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "5420"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "52067"
            },
            {
              "type": "tag",
              "id": "52068"
            },
            {
              "type": "tag",
              "id": "52069"
            },
            {
              "type": "tag",
              "id": "52070"
            },
            {
              "type": "tag",
              "id": "52071"
            },
            {
              "type": "tag",
              "id": "52072"
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
      "type": "instructor",
      "id": "31892",
      "attributes": {
        "slug": "jai-es",
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
        "name": "Jai Es",
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
      "type": "parent",
      "id": "28164",
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
      "type": "parent",
      "id": "28162",
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
      "id": "31886",
      "attributes": {
        "slug": "chris-warunki",
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
        "name": "Chris Warunki",
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
      "id": "28165",
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
      "id": "31891",
      "attributes": {
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
      }
    },
    {
      "type": "parent",
      "id": "28166",
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
      "id": "197816",
      "attributes": {
        "slug": "aaron-levy",
        "type": "instructor",
        "sort": 0,
        "status": "published",
        "total_xp": null,
        "brand": "drumeo",
        "language": "en-US",
        "show_in_new_feed": null,
        "user": "",
        "published_on": "2018-03-06 20:00:00",
        "archived_on": null,
        "created_on": "2018-03-13 12:24:44",
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
        "name": "Aaron Levy",
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
      "id": "2775",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11852",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20018_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24928",
      "attributes": {
        "key": "mp3_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa082-calling-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24929",
      "attributes": {
        "key": "mp3_non_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa082-calling-no-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "28491",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/1515146343-drumeo-pa082-calling.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52529",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52532",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/pdfs/drumeo-pa082-calling.pdf",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52537",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 With Click",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52543",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/calling/calling-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52546",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Without Click",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52548",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/calling/calling-drums-false-click-false.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52551",
      "attributes": {
        "key": "mp3_no_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/calling/calling-drums-false-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52552",
      "attributes": {
        "key": "mp3_yes_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/calling/calling-drums-true-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52555",
      "attributes": {
        "key": "mp3_no_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/calling/calling-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52558",
      "attributes": {
        "key": "mp3_yes_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/calling/calling-drums-true-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72558",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/460794760_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7133",
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
      "type": "tag",
      "id": "79747",
      "attributes": {
        "tag": "rock play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79748",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79749",
      "attributes": {
        "tag": "intermediate",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79750",
      "attributes": {
        "tag": "7",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79751",
      "attributes": {
        "tag": "progressive",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "79752",
      "attributes": {
        "tag": "vocals",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "79753",
      "attributes": {
        "tag": "vocal",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "79754",
      "attributes": {
        "tag": "calling",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "79755",
      "attributes": {
        "tag": "dying hearts desire",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "79756",
      "attributes": {
        "tag": "194",
        "position": 10
      }
    },
    {
      "type": "contentData",
      "id": "2774",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11855",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20060_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24930",
      "attributes": {
        "key": "mp3_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-ps-083-drummer-boy-w-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24931",
      "attributes": {
        "key": "mp3_non_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa-083-drummer-boy-no-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "28490",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/1515146304-drumeo-pa083-drummerboy.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52505",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52507",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/pdfs/drumeo-pa083-drummerboy.pdf",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52509",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 With Click",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52510",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/drummerboy/drummerboy-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52513",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Without Click",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52516",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/drummerboy/drummerboy-drums-false-click-false.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52519",
      "attributes": {
        "key": "mp3_no_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/drummerboy/drummerboy-drums-false-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52521",
      "attributes": {
        "key": "mp3_yes_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/drummerboy/drummerboy-drums-true-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52524",
      "attributes": {
        "key": "mp3_no_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/drummerboy/drummerboy-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52527",
      "attributes": {
        "key": "mp3_yes_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/drummerboy/drummerboy-drums-true-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72556",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/517765975_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79731",
      "attributes": {
        "tag": "rock play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79732",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79733",
      "attributes": {
        "tag": "jared falk",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79734",
      "attributes": {
        "tag": "intermediate",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79735",
      "attributes": {
        "tag": "5",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "79736",
      "attributes": {
        "tag": "christmas",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "79737",
      "attributes": {
        "tag": "holiday",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "79738",
      "attributes": {
        "tag": "drummer boy",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "79739",
      "attributes": {
        "tag": "drummerboy",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "79740",
      "attributes": {
        "tag": "158",
        "position": 10
      }
    },
    {
      "type": "contentData",
      "id": "2773",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11909",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20131_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24932",
      "attributes": {
        "key": "mp3_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa084-another-punk-song-w-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24933",
      "attributes": {
        "key": "mp3_non_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa084-another-punk-song-no-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "28489",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/1515146276-drumeo-pa084-another-punk-song.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52489",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52491",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/pdfs/drumeo-pa084-another-punk-song.pdf",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52492",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 With Click",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52494",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/another-punk-song/another-punk-song-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52496",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Without Click",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52497",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/another-punk-song/another-punk-song-drums-false-click-false.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52499",
      "attributes": {
        "key": "mp3_no_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/another-punk-song/another-punk-song-drums-false-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52500",
      "attributes": {
        "key": "mp3_yes_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/another-punk-song/another-punk-song-drums-true-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52502",
      "attributes": {
        "key": "mp3_no_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/another-punk-song/another-punk-song-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52503",
      "attributes": {
        "key": "mp3_yes_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/another-punk-song/another-punk-song-drums-true-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72546",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/550/drumeo-pa-punk.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7114",
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
      "type": "tag",
      "id": "79637",
      "attributes": {
        "tag": "rock play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79638",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79639",
      "attributes": {
        "tag": "intermediate",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79640",
      "attributes": {
        "tag": "4",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79641",
      "attributes": {
        "tag": "another punk song",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "79642",
      "attributes": {
        "tag": "165",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "2772",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11945",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20178_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24934",
      "attributes": {
        "key": "mp3_non_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa085-sing-this-song-no-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "28488",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/1515146237-drumeo-pa085-sing-this-song.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52473",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52475",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/pdfs/drumeo-pa085-sing-this-song.pdf",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52477",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 With Click",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52479",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/sing-this-song/sing-this-song-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52480",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Without Click",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52482",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/sing-this-song/sing-this-song-drums-false-click-false.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52483",
      "attributes": {
        "key": "mp3_no_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/sing-this-song/sing-this-song-drums-false-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52485",
      "attributes": {
        "key": "mp3_yes_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/sing-this-song/sing-this-song-drums-true-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52486",
      "attributes": {
        "key": "mp3_no_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/sing-this-song/sing-this-song-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52488",
      "attributes": {
        "key": "mp3_yes_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/sing-this-song/sing-this-song-drums-true-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72537",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/468210481_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7101",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31892"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "79571",
      "attributes": {
        "tag": "pop play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79572",
      "attributes": {
        "tag": "beginner",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79573",
      "attributes": {
        "tag": "jai es",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79574",
      "attributes": {
        "tag": "3",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79575",
      "attributes": {
        "tag": "alternative",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "79576",
      "attributes": {
        "tag": "vocals",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "79577",
      "attributes": {
        "tag": "vocal",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "79578",
      "attributes": {
        "tag": "93",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "79579",
      "attributes": {
        "tag": "sing this song",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "79580",
      "attributes": {
        "tag": "dirk kennedy",
        "position": 10
      }
    },
    {
      "type": "contentData",
      "id": "2771",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12016",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/1080/drumeo-pa-alternative.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24935",
      "attributes": {
        "key": "mp3_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa086-mirage-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24936",
      "attributes": {
        "key": "mp3_non_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa086-mirage-no-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "28487",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/1515146189-drumeo-pa086-mirage.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52458",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52459",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/pdfs/drumeo-pa086-mirage.pdf",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52461",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 With Click",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52463",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/mirage/mirage-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52464",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Without Click",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52466",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/mirage/mirage-drums-false-click-false.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52467",
      "attributes": {
        "key": "mp3_no_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/mirage/mirage-drums-false-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52469",
      "attributes": {
        "key": "mp3_yes_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/mirage/mirage-drums-true-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52470",
      "attributes": {
        "key": "mp3_no_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/mirage/mirage-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52472",
      "attributes": {
        "key": "mp3_yes_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/mirage/mirage-drums-true-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7079",
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
      "type": "tag",
      "id": "79381",
      "attributes": {
        "tag": "rock play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79382",
      "attributes": {
        "tag": "pop play-alongs",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79383",
      "attributes": {
        "tag": "dave atkinson",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79384",
      "attributes": {
        "tag": "beginner",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79385",
      "attributes": {
        "tag": "3",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "79386",
      "attributes": {
        "tag": "9/4",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "79387",
      "attributes": {
        "tag": "alternative",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "79388",
      "attributes": {
        "tag": "mirage",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "2770",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12078",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20361_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24937",
      "attributes": {
        "key": "mp3_non_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa087-im-alive-she-said-no-click-2.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24938",
      "attributes": {
        "key": "mp3_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa087-im-alive-she-said-click-2.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "31283",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/1515757111-drumeo-pa087-im-alive-she-said.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52441",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52443",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/1515757118-drumeo-pa087-im-alive-she-said.pdf",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52445",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 With Click",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52447",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/im-alive-she-said/im-alive-she-said-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52448",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Without Click",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52450",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/im-alive-she-said/im-alive-she-said-drums-false-click-false.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52451",
      "attributes": {
        "key": "mp3_no_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/im-alive-she-said/im-alive-she-said-drums-false-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52453",
      "attributes": {
        "key": "mp3_yes_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/im-alive-she-said/im-alive-she-said-drums-true-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52454",
      "attributes": {
        "key": "mp3_no_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/im-alive-she-said/im-alive-she-said-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52456",
      "attributes": {
        "key": "mp3_yes_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/im-alive-she-said/im-alive-she-said-drums-true-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72512",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/466662975_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7057",
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
      "type": "tag",
      "id": "79162",
      "attributes": {
        "tag": "rock play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79163",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79164",
      "attributes": {
        "tag": "intermediate",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79165",
      "attributes": {
        "tag": "6",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79166",
      "attributes": {
        "tag": "i'm",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "79167",
      "attributes": {
        "tag": "im alive she said",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "79168",
      "attributes": {
        "tag": "yuca",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "79169",
      "attributes": {
        "tag": "vocals",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "79170",
      "attributes": {
        "tag": "vocal",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "79171",
      "attributes": {
        "tag": "134",
        "position": 10
      }
    },
    {
      "type": "contentData",
      "id": "2769",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12124",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20493_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24939",
      "attributes": {
        "key": "mp3_non_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa088-smooth-rock-no-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24940",
      "attributes": {
        "key": "mp3_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa088-smooth-rock-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "28486",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/1515146119-drumeo-pa088-smooth-rock.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52426",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52427",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/pdfs/drumeo-pa088-smooth-rock.pdf",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52429",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 With Click",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52431",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/smooth-rock/smooth-rock-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52433",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Without Click",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52434",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/smooth-rock/smooth-rock-drums-false-click-false.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52436",
      "attributes": {
        "key": "mp3_no_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/smooth-rock/smooth-rock-drums-false-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52437",
      "attributes": {
        "key": "mp3_yes_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/smooth-rock/smooth-rock-drums-true-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52438",
      "attributes": {
        "key": "mp3_no_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/smooth-rock/smooth-rock-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52440",
      "attributes": {
        "key": "mp3_yes_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/smooth-rock/smooth-rock-drums-true-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72501",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/550/drumeo-pa-rock.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7040",
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
      "type": "tag",
      "id": "79000",
      "attributes": {
        "tag": "rock play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79001",
      "attributes": {
        "tag": "beginner",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79002",
      "attributes": {
        "tag": "issah contractor",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79003",
      "attributes": {
        "tag": "2",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79004",
      "attributes": {
        "tag": "smooth",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "79005",
      "attributes": {
        "tag": "80",
        "position": 6
      }
    },
    {
      "type": "parent",
      "id": "2800",
      "attributes": {
        "child_position": 6
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "28164"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "2768",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12259",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20657_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24955",
      "attributes": {
        "key": "mp3_non_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa089-bossa-nova-no-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24956",
      "attributes": {
        "key": "mp3_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa089-bossa-nova-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "28485",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/1515146089-drumeo-pa089-bossa-nova.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52410",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52411",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/pdfs/drumeo-pa089-bossa-nova.pdf",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52413",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 With Click",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52415",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/bossa-nova/bossa-nova-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52417",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Without Click",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52418",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/bossa-nova/bossa-nova-drums-false-click-false.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52420",
      "attributes": {
        "key": "mp3_no_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/bossa-nova/bossa-nova-drums-false-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52421",
      "attributes": {
        "key": "mp3_yes_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/bossa-nova/bossa-nova-drums-true-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52423",
      "attributes": {
        "key": "mp3_no_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/bossa-nova/bossa-nova-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52424",
      "attributes": {
        "key": "mp3_yes_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/bossa-nova/bossa-nova-drums-true-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72458",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/550/drumeo-pa-latin.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7018",
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
      "type": "tag",
      "id": "78177",
      "attributes": {
        "tag": "mike michalkow",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78178",
      "attributes": {
        "tag": "latin play-alongs",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78179",
      "attributes": {
        "tag": "beginner",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78180",
      "attributes": {
        "tag": "latin",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78181",
      "attributes": {
        "tag": "3",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78182",
      "attributes": {
        "tag": "bossa nova",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78183",
      "attributes": {
        "tag": "world",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78184",
      "attributes": {
        "tag": "brazil",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78185",
      "attributes": {
        "tag": "brazilian",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78186",
      "attributes": {
        "tag": "130",
        "position": 10
      }
    },
    {
      "type": "contentData",
      "id": "2767",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12418",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/1080/drumeo-pa-rock.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24969",
      "attributes": {
        "key": "mp3_non_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa090-slow-rockin-no-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24970",
      "attributes": {
        "key": "mp3_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa090-slow-rockin-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "28484",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/1515146055-drumeo-pa090-slow-rockin.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52393",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52395",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/pdfs/drumeo-pa090-slow-rockin.pdf",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52397",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 With Click",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52398",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/slow-rockin/slow-rockin-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52400",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Without Click",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52402",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/slow-rockin/slow-rockin-drums-false-click-false.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52403",
      "attributes": {
        "key": "mp3_no_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/slow-rockin/slow-rockin-drums-false-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52405",
      "attributes": {
        "key": "mp3_yes_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/slow-rockin/slow-rockin-drums-true-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52407",
      "attributes": {
        "key": "mp3_no_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/slow-rockin/slow-rockin-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52408",
      "attributes": {
        "key": "mp3_yes_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/slow-rockin/slow-rockin-drums-true-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6988",
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
      "type": "tag",
      "id": "77437",
      "attributes": {
        "tag": "rockin'",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "77438",
      "attributes": {
        "tag": "rock play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "77439",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "77440",
      "attributes": {
        "tag": "beginner",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "77441",
      "attributes": {
        "tag": "2",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "77442",
      "attributes": {
        "tag": "80",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "77443",
      "attributes": {
        "tag": "slow rocking",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "2766",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12507",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/21049_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24975",
      "attributes": {
        "key": "mp3_non_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/you-belong-with-the-drums-no-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24976",
      "attributes": {
        "key": "mp3_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/you-belong-with-the-drums-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "28498",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/1515148083-drumeo-pa091-you-belong-with-the-drums.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52378",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52379",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/pdfs/drumeo-pa091-you-belong-with-the-drums.pdf",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52381",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 With Click",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52383",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/you-belong-with-the-drums/you-belong-with-the-drums-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52384",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Without Click",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52386",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/you-belong-with-the-drums/you-belong-with-the-drums-drums-false-click-false.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52387",
      "attributes": {
        "key": "mp3_no_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/you-belong-with-the-drums/you-belong-with-the-drums-drums-false-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52389",
      "attributes": {
        "key": "mp3_yes_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/you-belong-with-the-drums/you-belong-with-the-drums-drums-true-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52390",
      "attributes": {
        "key": "mp3_no_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/you-belong-with-the-drums/you-belong-with-the-drums-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52392",
      "attributes": {
        "key": "mp3_yes_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/you-belong-with-the-drums/you-belong-with-the-drums-drums-true-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72387",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/1080/drumeo-pa-alternative.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6970",
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
      "type": "tag",
      "id": "76988",
      "attributes": {
        "tag": "pop play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "76989",
      "attributes": {
        "tag": "jared falk",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "76990",
      "attributes": {
        "tag": "beginner",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "76991",
      "attributes": {
        "tag": "3",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "76992",
      "attributes": {
        "tag": "alternative",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "76993",
      "attributes": {
        "tag": "127",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "76994",
      "attributes": {
        "tag": "you belong with drums",
        "position": 7
      }
    },
    {
      "type": "parent",
      "id": "2775",
      "attributes": {
        "child_position": 9
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "28162"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "2765",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12579",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/21139_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24979",
      "attributes": {
        "key": "mp3_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa092-metal-life-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24980",
      "attributes": {
        "key": "mp3_non_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa092-metal-life-no-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "28497",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/1515148053-drumeo-pa092-metal-life.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52362",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52363",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/pdfs/drumeo-pa092-metal-life.pdf",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52365",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 With Click",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52367",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/metal-life/metal-life-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52368",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Without Click",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52370",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/metal-life/metal-life-drums-false-click-false.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52372",
      "attributes": {
        "key": "mp3_no_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/metal-life/metal-life-drums-false-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52373",
      "attributes": {
        "key": "mp3_yes_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/metal-life/metal-life-drums-true-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52375",
      "attributes": {
        "key": "mp3_no_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/metal-life/metal-life-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52376",
      "attributes": {
        "key": "mp3_yes_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/metal-life/metal-life-drums-true-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72364",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/1080/drumeo-pa-metal.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6953",
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
      "type": "tag",
      "id": "76561",
      "attributes": {
        "tag": "metal play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "76562",
      "attributes": {
        "tag": "intermediate",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "76563",
      "attributes": {
        "tag": "ash pearson",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "76564",
      "attributes": {
        "tag": "5",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "76565",
      "attributes": {
        "tag": "150",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "76566",
      "attributes": {
        "tag": "metal life",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "2764",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12637",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/1080/drumeo-pa-gospel.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24981",
      "attributes": {
        "key": "mp3_non_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa093-got-soul-no-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24982",
      "attributes": {
        "key": "mp3_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa093-got-soul-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "28496",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/1515148020-drumeo-pa093-got-soul.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52345",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52347",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/pdfs/drumeo-pa093-got-soul.pdf",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52349",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 With Click",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52351",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/got-soul/got-soul-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52353",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Without Click",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52354",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/got-soul/got-soul-drums-false-click-false.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52356",
      "attributes": {
        "key": "mp3_no_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/got-soul/got-soul-drums-false-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52357",
      "attributes": {
        "key": "mp3_yes_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/got-soul/got-soul-drums-true-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52359",
      "attributes": {
        "key": "mp3_no_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/got-soul/got-soul-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52360",
      "attributes": {
        "key": "mp3_yes_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/got-soul/got-soul-drums-true-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6937",
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
      "type": "tag",
      "id": "76363",
      "attributes": {
        "tag": "intermediate",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "76364",
      "attributes": {
        "tag": "issah contractor",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "76365",
      "attributes": {
        "tag": "gospel play-alongs",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "76366",
      "attributes": {
        "tag": "6",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "76367",
      "attributes": {
        "tag": "100",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "76368",
      "attributes": {
        "tag": "got soul",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "2763",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12725",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/1080/drumeo-pa-rock.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24987",
      "attributes": {
        "key": "mp3_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa094-a-drummers-offspring-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24988",
      "attributes": {
        "key": "mp3_non_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa094-a-drummers-offspring-no-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "28495",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/1515147985-drumeo-pa094-a-drummers-offspring.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52330",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52331",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/pdfs/drumeo-pa094-a-drummers-offspring.pdf",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52333",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 With Click",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52335",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/a-drummers-offspring/a-drummers-offspring-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52336",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Without Click",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52338",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/a-drummers-offspring/a-drummers-offspring-drums-false-click-false.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52339",
      "attributes": {
        "key": "mp3_no_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/a-drummers-offspring/a-drummers-offspring-drums-false-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52340",
      "attributes": {
        "key": "mp3_yes_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/a-drummers-offspring/a-drummers-offspring-drums-true-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52342",
      "attributes": {
        "key": "mp3_no_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/a-drummers-offspring/a-drummers-offspring-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52344",
      "attributes": {
        "key": "mp3_yes_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/a-drummers-offspring/a-drummers-offspring-drums-true-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6920",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31886"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "75847",
      "attributes": {
        "tag": "rock play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "75848",
      "attributes": {
        "tag": "chris warunki",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "75849",
      "attributes": {
        "tag": "beginner",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "75850",
      "attributes": {
        "tag": "3",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "75851",
      "attributes": {
        "tag": "112",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "75852",
      "attributes": {
        "tag": "a drummers",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "75853",
      "attributes": {
        "tag": "drummer's offspring",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "2762",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12814",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/21439_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24995",
      "attributes": {
        "key": "mp3_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa095-party-drumming-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "24996",
      "attributes": {
        "key": "mp3_non_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa095-party-drumming-no-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "28494",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/1515147960-drumeo-pa095-party-drumming.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52313",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52315",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/pdfs/drumeo-pa095-party-drumming.pdf",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52317",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 With Click",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52319",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/party-drumming/party-drumming-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52320",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Without Click",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52322",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/party-drumming/party-drumming-drums-false-click-false.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52323",
      "attributes": {
        "key": "mp3_no_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/party-drumming/party-drumming-drums-false-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52325",
      "attributes": {
        "key": "mp3_yes_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/party-drumming/party-drumming-drums-true-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52326",
      "attributes": {
        "key": "mp3_no_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/party-drumming/party-drumming-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52328",
      "attributes": {
        "key": "mp3_yes_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/party-drumming/party-drumming-drums-true-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72296",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/1080/drumeo-pa-electronic.jpg",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "75399",
      "attributes": {
        "tag": "beginner",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "75400",
      "attributes": {
        "tag": "electronic music play-alongs",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "75401",
      "attributes": {
        "tag": "4",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "75402",
      "attributes": {
        "tag": "127",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "75403",
      "attributes": {
        "tag": "party drumming",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "2761",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12888",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/21540_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "25001",
      "attributes": {
        "key": "mp3_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa096-omnisight-string-theory-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "25002",
      "attributes": {
        "key": "mp3_non_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa096-omnisight-string-theory-no-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "31284",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/1515757194-drumeo-pa096-string-theory.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52298",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52300",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/1515757188-drumeo-pa096-string-theory.pdf",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52302",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 With Click",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52303",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/omnisight-string-theory/omnisight-string-theory-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52305",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Without Click",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52306",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/omnisight-string-theory/omnisight-string-theory-drums-false-click-false.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52307",
      "attributes": {
        "key": "mp3_no_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/omnisight-string-theory/omnisight-string-theory-drums-false-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52309",
      "attributes": {
        "key": "mp3_yes_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/omnisight-string-theory/omnisight-string-theory-drums-true-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52310",
      "attributes": {
        "key": "mp3_no_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/omnisight-string-theory/omnisight-string-theory-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52312",
      "attributes": {
        "key": "mp3_yes_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/omnisight-string-theory/omnisight-string-theory-drums-true-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72270",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/550/drumeo-pa-progressive.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6883",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31886"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "75003",
      "attributes": {
        "tag": "chris warunki",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "75004",
      "attributes": {
        "tag": "intermediate",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "75005",
      "attributes": {
        "tag": "5",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "75006",
      "attributes": {
        "tag": "progressive play-alongs",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "75007",
      "attributes": {
        "tag": "120",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "75008",
      "attributes": {
        "tag": "string theory",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "75009",
      "attributes": {
        "tag": "omnisight",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "2760",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12944",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/21623_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "25005",
      "attributes": {
        "key": "mp3_non_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa097-billy-jane-no-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "25006",
      "attributes": {
        "key": "mp3_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa097-billy-jane-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "28493",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/1515147883-drumeo-pa097-billy-jane.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52282",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52284",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/pdfs/drumeo-pa097-billy-jane.pdf",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52286",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 With Click",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52287",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/billy-jane/billy-jane-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52289",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Without Click",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52291",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/billy-jane/billy-jane-drums-false-click-false.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52292",
      "attributes": {
        "key": "mp3_no_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/billy-jane/billy-jane-drums-false-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52294",
      "attributes": {
        "key": "mp3_yes_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/billy-jane/billy-jane-drums-true-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52295",
      "attributes": {
        "key": "mp3_no_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/billy-jane/billy-jane-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52297",
      "attributes": {
        "key": "mp3_yes_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/billy-jane/billy-jane-drums-true-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72252",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/1080/drumeo-pa-funk.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6867",
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
      "type": "tag",
      "id": "74751",
      "attributes": {
        "tag": "funk play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "74752",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "74753",
      "attributes": {
        "tag": "beginner",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "74754",
      "attributes": {
        "tag": "1",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "74755",
      "attributes": {
        "tag": "easy",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "74756",
      "attributes": {
        "tag": "112",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "74757",
      "attributes": {
        "tag": "billy jane",
        "position": 7
      }
    },
    {
      "type": "parent",
      "id": "2818",
      "attributes": {
        "child_position": 5
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "28165"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "2759",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "13011",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/21705_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "25009",
      "attributes": {
        "key": "mp3_non_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa098-another-drum-on-the-shelf-no-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "25010",
      "attributes": {
        "key": "mp3_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa098-another-drum-on-the-shelf-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "31285",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/1515757254-drumeo-pa098-another-drum-on-the-shelf.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52267",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52268",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/1515757260-drumeo-pa098-another-drum-on-the-shelf.pdf",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52270",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 With Click",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52272",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/another-drum-on-the-shelf/another-drum-on-the-shelf-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52273",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Without Click",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52275",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/another-drum-on-the-shelf/another-drum-on-the-shelf-drums-false-click-false.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52276",
      "attributes": {
        "key": "mp3_no_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/another-drum-on-the-shelf/another-drum-on-the-shelf-drums-false-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52278",
      "attributes": {
        "key": "mp3_yes_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/another-drum-on-the-shelf/another-drum-on-the-shelf-drums-true-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52279",
      "attributes": {
        "key": "mp3_no_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/another-drum-on-the-shelf/another-drum-on-the-shelf-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52281",
      "attributes": {
        "key": "mp3_yes_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/another-drum-on-the-shelf/another-drum-on-the-shelf-drums-true-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72235",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/1080/drumeo-pa-rock.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6853",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31891"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "74538",
      "attributes": {
        "tag": "rock play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "74539",
      "attributes": {
        "tag": "jay deachman",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "74540",
      "attributes": {
        "tag": "beginner",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "74541",
      "attributes": {
        "tag": "2",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "74542",
      "attributes": {
        "tag": "100",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "74543",
      "attributes": {
        "tag": "another drum on the shelf",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "2758",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "13068",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/21779_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "25013",
      "attributes": {
        "key": "mp3_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa099-sunday-morning-drummin-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "25014",
      "attributes": {
        "key": "mp3_non_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa099-sunday-morning-drummin-no-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "28500",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/1515148200-drumeo-pa099-sunday-morning-drummin-1.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52250",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52252",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/pdfs/drumeo-pa099-sunday-morning-drummin-1.pdf",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52254",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 With Click",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52256",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/sunday-morning-drummin/sunday-morning-drummin-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52258",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Without Click",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52259",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/sunday-morning-drummin/sunday-morning-drummin-drums-false-click-false.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52261",
      "attributes": {
        "key": "mp3_no_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/sunday-morning-drummin/sunday-morning-drummin-drums-false-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52262",
      "attributes": {
        "key": "mp3_yes_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/sunday-morning-drummin/sunday-morning-drummin-drums-true-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52264",
      "attributes": {
        "key": "mp3_no_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/sunday-morning-drummin/sunday-morning-drummin-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52265",
      "attributes": {
        "key": "mp3_yes_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/sunday-morning-drummin/sunday-morning-drummin-drums-true-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72217",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/play-alongs/1080/drumeo-pa-gospel.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6836",
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
      "type": "tag",
      "id": "74318",
      "attributes": {
        "tag": "intermediate",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "74319",
      "attributes": {
        "tag": "issah contractor",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "74320",
      "attributes": {
        "tag": "gospel play-alongs",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "74321",
      "attributes": {
        "tag": "6",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "74322",
      "attributes": {
        "tag": "95",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "74323",
      "attributes": {
        "tag": "sunday morning drumming",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "74324",
      "attributes": {
        "tag": "drummin'",
        "position": 7
      }
    },
    {
      "type": "parent",
      "id": "2832",
      "attributes": {
        "child_position": 6
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "28166"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "2757",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "13122",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/21854_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "25015",
      "attributes": {
        "key": "mp3_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa100-maybe-we-will-riot-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "25016",
      "attributes": {
        "key": "mp3_non_click_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/mp3s/drumeo-pa100-maybe-we-will-riot-no-click.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "28499",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/1515148154-drumeo-pa100-maybe-we-will-riot.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52234",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52236",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/pdfs/drumeo-pa100-maybe-we-will-riot.pdf",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "52238",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 With Click",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52239",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/maybe-well-riot/maybe-well-riot-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52241",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Without Click",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52242",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/maybe-well-riot/maybe-well-riot-drums-false-click-false.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "52244",
      "attributes": {
        "key": "mp3_no_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/maybe-well-riot/maybe-well-riot-drums-false-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52246",
      "attributes": {
        "key": "mp3_yes_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/maybe-well-riot/maybe-well-riot-drums-true-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52247",
      "attributes": {
        "key": "mp3_no_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/maybe-well-riot/maybe-well-riot-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "52249",
      "attributes": {
        "key": "mp3_yes_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/maybe-well-riot/maybe-well-riot-drums-true-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72198",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/485871654_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6818",
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
      "type": "tag",
      "id": "74028",
      "attributes": {
        "tag": "rock play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "74029",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "74030",
      "attributes": {
        "tag": "beginner",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "74031",
      "attributes": {
        "tag": "4",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "74032",
      "attributes": {
        "tag": "yuca",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "74033",
      "attributes": {
        "tag": "vocals",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "74034",
      "attributes": {
        "tag": "vocal",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "74035",
      "attributes": {
        "tag": "maybe we'll riot",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "74036",
      "attributes": {
        "tag": "135",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "2654",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "18227",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/drumeo-pa203-welcome-to-the-bottom.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "18228",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://drumeo.s3.amazonaws.com/card-thumbnails/play-alongs/550/drumeo-pa-metal.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "50615",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "50617",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/play-alongs/pdfs/drumeo-pa203-welcome-to-the-bottom.pdf",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "50619",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 With Click",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "50621",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/welcome-to-the-bottom/welcome-to-the-bottom-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "50622",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Without Click",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "50624",
      "attributes": {
        "key": "resource_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/welcome-to-the-bottom/welcome-to-the-bottom-drums-false-click-false.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "50626",
      "attributes": {
        "key": "mp3_no_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/welcome-to-the-bottom/welcome-to-the-bottom-drums-false-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "50627",
      "attributes": {
        "key": "mp3_yes_drums_no_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/welcome-to-the-bottom/welcome-to-the-bottom-drums-true-click-false.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "50629",
      "attributes": {
        "key": "mp3_no_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/welcome-to-the-bottom/welcome-to-the-bottom-drums-false-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "50630",
      "attributes": {
        "key": "mp3_yes_drums_yes_click_url",
        "value": "https://s3.amazonaws.com/drumeo/play-along-resources/welcome-to-the-bottom/welcome-to-the-bottom-drums-true-click-true.mp3",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "5420",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "197816"
          }
        }
      }
    },
    {
      "type": "tag",
      "id": "52067",
      "attributes": {
        "tag": "metal play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "52068",
      "attributes": {
        "tag": "intermediate",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "52069",
      "attributes": {
        "tag": "5",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "52070",
      "attributes": {
        "tag": "126",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "52071",
      "attributes": {
        "tag": "Aaron Levy",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "52072",
      "attributes": {
        "tag": "welcome to the bottom",
        "position": 6
      }
    }
  ],
  "meta": {
    "filterOptions": {
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
      "bpm": [
        "100",
        "102",
        "104",
        "105",
        "106",
        "107",
        "108",
        "109",
        "110",
        "111",
        "112",
        "113",
        "114",
        "115",
        "116",
        "117",
        "118",
        "120",
        "122",
        "123",
        "124",
        "125",
        "126",
        "127",
        "128",
        "130",
        "131",
        "132",
        "133",
        "134",
        "135",
        "136",
        "138",
        "140",
        "142",
        "144",
        "145",
        "147",
        "150",
        "153",
        "155",
        "158",
        "159",
        "160",
        "162",
        "164",
        "165",
        "166",
        "167",
        "170",
        "172",
        "173",
        "174",
        "175",
        "176",
        "180",
        "182",
        "184",
        "185",
        "186",
        "190",
        "192",
        "194",
        "195",
        "200",
        "204",
        "210",
        "213",
        "220",
        "221",
        "224",
        "225",
        "230",
        "240",
        "250",
        "280",
        "310",
        "350",
        "51",
        "54",
        "60",
        "64",
        "73",
        "75",
        "77",
        "78",
        "79",
        "80",
        "83",
        "84",
        "85",
        "86",
        "87",
        "88",
        "89",
        "90",
        "92",
        "93",
        "94",
        "95",
        "96",
        "97",
        "98",
        "Multiple",
        "Various"
      ],
      "style": [
        "Alternative",
        "Blues",
        "Christmas",
        "Country",
        "Electronic",
        "Funk",
        "Fusion",
        "Gospel",
        "Hip-Hop",
        "Jazz",
        "Latin",
        "Metal",
        "New Orleans & Second Line",
        "Odd-Time",
        "Progressive",
        "Punk",
        "Reggae",
        "Rock",
        "Shuffle",
        "Ska",
        "Vocals",
        "World"
      ],
      "artist": [
        "48May",
        "Alchemy Chamber",
        "Arthur Vyncke",
        "Bernhard Lackner",
        "Big Big Train",
        "Billy Rymer",
        "Blazing Arrows",
        "Brandon Brown",
        "Brian Crane",
        "Buddy Rich Big Band",
        "Bullets and Numbers",
        "Burning Human",
        "Chaise Baird",
        "City Mouth",
        "Coen",
        "Craig Strain",
        "Craig Zurba",
        "Dali Mraz",
        "Damani Rhodes",
        "Daniel Glass",
        "Daru Jones",
        "David Raouf",
        "Dirk Kennedy",
        "Dom Famularo",
        "Dying Hearts Desire",
        "Ermin Monzon",
        "First Reign",
        "Florian Alexandru-Zorn",
        "Galaktikon",
        "Gil Sharone",
        "Gregg Bissonette",
        "Gulli Briem",
        "Hasting",
        "Heather Thomas",
        "Henrique de Almeida",
        "Issah Contractor",
        "Jai Es",
        "Jay Oliver",
        "Jimmy Rainsford",
        "Jody Fisher, Baba Elefante, Tilden Webb & Mike Michalkow",
        "Joe Hodgin",
        "Kaz Rodriguez",
        "Kimbra",
        "Marco Minnemann",
        "Mathieu Fiset",
        "Mathieu Fiset & The RoboJazz Band",
        "Matt Johnson",
        "Nate Savage",
        "Nate Savage, Jordan Leibel, Chelsea Amber",
        "Nikko Ielasi",
        "Nujynisis",
        "Omnisight",
        "Paul Kype And Texas Flood",
        "Pete Lockett",
        "Raghav Mehrotra",
        "Rashid Williams",
        "Rene Gonzalez",
        "Revocation",
        "Rodney Holmes",
        "Ryan Follese",
        "Sarah Thawer",
        "Scale The Summit",
        "Sean Lang",
        "Serpents Rise",
        "Seven Year Storm",
        "Shadows Fall",
        "Simon Grey",
        "Steely Dan",
        "Sterr",
        "Steve Lyman",
        "Testament",
        "The JDS Quartet",
        "The New Caledonia",
        "Tim Proznick",
        "Tony Coleman",
        "Victor Guidera",
        "Vinny Valentino, Baron Browne, Joel Rosenblatt",
        "YUCA",
        "Zak Rizvi"
      ],
      "topic": [
        "pop/rock",
        "jazz",
        "funk",
        "metal",
        "latin",
        "world",
        "r&b",
        "blues",
        "electronic",
        "odd time"
      ],
      "instructors": [
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
          "id": 31879,
          "slug": "adam-smith",
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
          "name": "Adam Smith",
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
          "id": 31881,
          "slug": "jason-kliewer",
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
          "name": "Jason Kliewer",
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
          "id": 31882,
          "slug": "jerry-adolphe",
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
          "name": "Jerry Adolphe",
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
          "id": 31883,
          "slug": "sam-heard",
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
          "name": "Sam Heard",
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
          "id": 31886,
          "slug": "chris-warunki",
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
          "name": "Chris Warunki",
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
          "id": 31889,
          "slug": "calum-rees",
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
          "name": "Calum Rees",
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
          "id": 31890,
          "slug": "chad-bjorgan",
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
          "name": "Chad Bjorgan",
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
          "id": 31892,
          "slug": "jai-es",
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
          "name": "Jai Es",
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
          "id": 31893,
          "slug": "ydna-murd",
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
          "name": "Ydna Murd",
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
          "id": 31909,
          "slug": "adam-tuminaro",
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
          "name": "Adam Tuminaro",
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
          "id": 31916,
          "slug": "meytal-cohen",
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
          "name": "Meytal Cohen",
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
          "id": 31923,
          "slug": "gary-grace",
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
          "name": "Gary Grace",
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
          "id": 31942,
          "slug": "thomas-pridgen",
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
          "name": "Thomas Pridgen",
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
          "id": 31972,
          "slug": "eric-boudreault",
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
          "name": "Eric Boudreault",
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
          "id": 190697,
          "slug": "jc-bryant",
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
          "created_on": "2018-01-10 14:52:34",
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
          "name": "J.C. Bryant",
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
          "id": 197816,
          "slug": "aaron-levy",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-03-06 20:00:00",
          "archived_on": null,
          "created_on": "2018-03-13 12:24:44",
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
          "name": "Aaron Levy",
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
          "id": 235178,
          "slug": "tim-proznick",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2019-10-17 14:19:03",
          "archived_on": null,
          "created_on": "2019-10-17 14:19:06",
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
          "name": "Tim Proznick",
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
        }
      ]
    },
    "activeFilters": {
      "content_type": [
        "play-along"
      ]
    },
    "pagination": {
      "total": 316,
      "count": 20,
      "per_page": "20",
      "current_page": "1",
      "total_pages": 16
    }
  },
  "links": []
}
EOT;
// -->
@endphp

@section('app')
    @include('sections.user-stats')

    <h1 class="container w-full mx-auto px-3 pt-6 font-extrabold text-4xl">Play-Alongs</h1>

    <content-catalogue
        level-selector='2'
        topics-filters-title='what style do you want to play?'
        :cards-per-row='5'
        preload-data='{{ $rc1 }}'
        infinite-scroll
        use-play-alongs-content-type-filters
        use-progress-filters
    ></content-catalogue>
@endsection
