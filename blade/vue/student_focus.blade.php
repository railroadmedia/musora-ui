@extends('vue.layout')

@section('title', 'Members - Student Focus')

@section('menu')
    @include('sections.menu', ['active' => 'edge'])
    @include('sections.edge-nav', ['active' => 'student focus'])
@endsection

@php
// <!--
$rc1 = <<<'EOT'
{
  "data": [
    {
      "type": "content",
      "id": "20012",
      "attributes": {
        "slug": "92-sr-james-h",
        "type": "student-focus",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-11-13 01:42:11",
        "archivedOn": "",
        "createdOn": "2013-11-13 01:42:11",
        "difficulty": "",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20012",
        "qnaVideo": "",
        "style": "",
        "title": "SR - James H",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "",
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
              "id": "3111"
            },
            {
              "type": "contentData",
              "id": "11850"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7134"
            },
            {
              "type": "instructor",
              "id": "7135"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79757"
            },
            {
              "type": "tag",
              "id": "79758"
            },
            {
              "type": "tag",
              "id": "79759"
            },
            {
              "type": "tag",
              "id": "79760"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20071",
      "attributes": {
        "slug": "93-sr-ocdrummer-shaunabear-twirlingtwister-daniel-csokmei-timk",
        "type": "student-focus",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-12-02 01:57:28",
        "archivedOn": "",
        "createdOn": "2013-12-02 01:57:28",
        "difficulty": "",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20071",
        "qnaVideo": "",
        "style": "",
        "title": "SR - OCDrummer, ShaunaBear, TwirlingTwister, Daniel Csokmei, TimK",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "",
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
              "id": "3110"
            },
            {
              "type": "contentData",
              "id": "11859"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7129"
            },
            {
              "type": "instructor",
              "id": "7130"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79719"
            },
            {
              "type": "tag",
              "id": "79720"
            },
            {
              "type": "tag",
              "id": "79721"
            },
            {
              "type": "tag",
              "id": "79722"
            },
            {
              "type": "tag",
              "id": "79723"
            },
            {
              "type": "tag",
              "id": "79724"
            },
            {
              "type": "tag",
              "id": "79725"
            },
            {
              "type": "tag",
              "id": "79726"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20124",
      "attributes": {
        "slug": "94-sr-meltem",
        "type": "student-focus",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-12-11 01:34:09",
        "archivedOn": "",
        "createdOn": "2013-12-11 01:34:09",
        "difficulty": "",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20124",
        "qnaVideo": "",
        "style": "",
        "title": "SR - Meltem",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "",
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
              "id": "3109"
            },
            {
              "type": "contentData",
              "id": "11902"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7116"
            },
            {
              "type": "instructor",
              "id": "7117"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79650"
            },
            {
              "type": "tag",
              "id": "79651"
            },
            {
              "type": "tag",
              "id": "79652"
            },
            {
              "type": "tag",
              "id": "79653"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20152",
      "attributes": {
        "slug": "95-sr-jarah-jdrum81-ocdrummer-goffa-docwood",
        "type": "student-focus",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-12-16 01:49:31",
        "archivedOn": "",
        "createdOn": "2013-12-16 01:49:31",
        "difficulty": "",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20152",
        "qnaVideo": "",
        "style": "",
        "title": "SR - Jarah, Jdrum81, OCDrummer, Goffa, DocWood",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "",
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
              "id": "3108"
            },
            {
              "type": "contentData",
              "id": "11942"
            },
            {
              "type": "contentData",
              "id": "72539"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7103"
            },
            {
              "type": "instructor",
              "id": "7104"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79585"
            },
            {
              "type": "tag",
              "id": "79586"
            },
            {
              "type": "tag",
              "id": "79587"
            },
            {
              "type": "tag",
              "id": "79588"
            },
            {
              "type": "tag",
              "id": "79589"
            },
            {
              "type": "tag",
              "id": "79590"
            },
            {
              "type": "tag",
              "id": "79591"
            },
            {
              "type": "tag",
              "id": "79592"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20172",
      "attributes": {
        "slug": "96-sr-tcrush-jdrum81",
        "type": "student-focus",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-12-20 01:03:48",
        "archivedOn": "",
        "createdOn": "2013-12-20 01:03:48",
        "difficulty": "",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20172",
        "qnaVideo": "",
        "style": "",
        "title": "SR - TCrush, Jdrum81",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "",
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
              "id": "3107"
            },
            {
              "type": "contentData",
              "id": "11943"
            },
            {
              "type": "contentData",
              "id": "72538"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7102"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79581"
            },
            {
              "type": "tag",
              "id": "79582"
            },
            {
              "type": "tag",
              "id": "79583"
            },
            {
              "type": "tag",
              "id": "79584"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20229",
      "attributes": {
        "slug": "97-sr-goffa-codyplaysdrums-marcushere-widowmaker",
        "type": "student-focus",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-01-03 01:22:10",
        "archivedOn": "",
        "createdOn": "2014-01-03 01:22:10",
        "difficulty": "",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20229",
        "qnaVideo": "",
        "style": "",
        "title": "SR - Goffa, Cody, marcusHere, Widowmaker",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "",
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
              "id": "3106"
            },
            {
              "type": "contentData",
              "id": "11986"
            },
            {
              "type": "contentData",
              "id": "72530"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7087"
            },
            {
              "type": "instructor",
              "id": "7088"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79473"
            },
            {
              "type": "tag",
              "id": "79474"
            },
            {
              "type": "tag",
              "id": "79475"
            },
            {
              "type": "tag",
              "id": "79476"
            },
            {
              "type": "tag",
              "id": "79477"
            },
            {
              "type": "tag",
              "id": "79478"
            },
            {
              "type": "tag",
              "id": "79479"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20310",
      "attributes": {
        "slug": "98-sr-marcushere-lazer-jimjimjim-joshua-james-h",
        "type": "student-focus",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-01-17 01:38:55",
        "archivedOn": "",
        "createdOn": "2014-01-17 01:38:55",
        "difficulty": "",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20310",
        "qnaVideo": "",
        "style": "",
        "title": "SR - marcusHere, Lazer, JimJimJim, Josh, James H",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "",
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
              "id": "3105"
            },
            {
              "type": "contentData",
              "id": "12030"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7073"
            },
            {
              "type": "instructor",
              "id": "7074"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79322"
            },
            {
              "type": "tag",
              "id": "79323"
            },
            {
              "type": "tag",
              "id": "79324"
            },
            {
              "type": "tag",
              "id": "79325"
            },
            {
              "type": "tag",
              "id": "79326"
            },
            {
              "type": "tag",
              "id": "79327"
            },
            {
              "type": "tag",
              "id": "79328"
            },
            {
              "type": "tag",
              "id": "79329"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20382",
      "attributes": {
        "slug": "100-sr-trev-jimjimjim-kans-goffa-jason71",
        "type": "student-focus",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-02-07 04:07:27",
        "archivedOn": "",
        "createdOn": "2014-02-07 04:07:27",
        "difficulty": "",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20382",
        "qnaVideo": "",
        "style": "",
        "title": "SR - Trev, JimJimJim, Kans, Goffa, Jason71",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "",
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
              "id": "3103"
            },
            {
              "type": "contentData",
              "id": "12088"
            },
            {
              "type": "contentData",
              "id": "72509"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7050"
            },
            {
              "type": "instructor",
              "id": "7051"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79110"
            },
            {
              "type": "tag",
              "id": "79111"
            },
            {
              "type": "tag",
              "id": "79112"
            },
            {
              "type": "tag",
              "id": "79113"
            },
            {
              "type": "tag",
              "id": "79114"
            },
            {
              "type": "tag",
              "id": "79115"
            },
            {
              "type": "tag",
              "id": "79116"
            },
            {
              "type": "tag",
              "id": "79117"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20510",
      "attributes": {
        "slug": "101-sr-jim-bridgmon",
        "type": "student-focus",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-02-10 14:16:26",
        "archivedOn": "",
        "createdOn": "2014-02-10 14:16:26",
        "difficulty": "",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20510",
        "qnaVideo": "",
        "style": "",
        "title": "SR - Jim Bridgmon",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "",
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
              "id": "3102"
            },
            {
              "type": "contentData",
              "id": "12125"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7038"
            },
            {
              "type": "instructor",
              "id": "7039"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78996"
            },
            {
              "type": "tag",
              "id": "78997"
            },
            {
              "type": "tag",
              "id": "78998"
            },
            {
              "type": "tag",
              "id": "78999"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20537",
      "attributes": {
        "slug": "102-sr-kennyv-trev-ben-j-jimjimjim-camara-ray",
        "type": "student-focus",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-02-21 15:26:16",
        "archivedOn": "",
        "createdOn": "2014-02-21 15:26:16",
        "difficulty": "",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20537",
        "qnaVideo": "",
        "style": "",
        "title": "SR - KennyV, Trev, Ben-J, JimJimJim, Camara, Ray",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "",
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
              "id": "3101"
            },
            {
              "type": "contentData",
              "id": "12146"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7032"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78892"
            },
            {
              "type": "tag",
              "id": "78893"
            },
            {
              "type": "tag",
              "id": "78894"
            },
            {
              "type": "tag",
              "id": "78895"
            },
            {
              "type": "tag",
              "id": "78896"
            },
            {
              "type": "tag",
              "id": "78897"
            },
            {
              "type": "tag",
              "id": "78898"
            },
            {
              "type": "tag",
              "id": "78899"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20798",
      "attributes": {
        "slug": "103-sr-ray-gilles-larry-charlie-jimjimjim-gregg",
        "type": "student-focus",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-03-07 15:32:02",
        "archivedOn": "",
        "createdOn": "2014-03-07 15:32:02",
        "difficulty": "",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20798",
        "qnaVideo": "",
        "style": "",
        "title": "SR - Ray, Gilles, Larry, Charlie, JimJimJim, Gregg",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "",
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
              "id": "3100"
            },
            {
              "type": "contentData",
              "id": "12382"
            },
            {
              "type": "contentData",
              "id": "72424"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6993"
            },
            {
              "type": "instructor",
              "id": "6994"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "77652"
            },
            {
              "type": "tag",
              "id": "77653"
            },
            {
              "type": "tag",
              "id": "77654"
            },
            {
              "type": "tag",
              "id": "77655"
            },
            {
              "type": "tag",
              "id": "77656"
            },
            {
              "type": "tag",
              "id": "77657"
            },
            {
              "type": "tag",
              "id": "77658"
            },
            {
              "type": "tag",
              "id": "77659"
            },
            {
              "type": "tag",
              "id": "77660"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20987",
      "attributes": {
        "slug": "104-sr-ray-ottawa-levi-tcrush-lord-gosh-jake",
        "type": "student-focus",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-03-21 11:31:50",
        "archivedOn": "",
        "createdOn": "2014-03-21 11:31:50",
        "difficulty": "",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20987",
        "qnaVideo": "",
        "style": "",
        "title": "SR - Ray, Ottawa, Levi, TCrush, Lord, GOSH, Jake",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "",
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
              "id": "3099"
            },
            {
              "type": "contentData",
              "id": "12477"
            },
            {
              "type": "contentData",
              "id": "72399"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6972"
            },
            {
              "type": "instructor",
              "id": "6973"
            },
            {
              "type": "instructor",
              "id": "6974"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "77151"
            },
            {
              "type": "tag",
              "id": "77152"
            },
            {
              "type": "tag",
              "id": "77153"
            },
            {
              "type": "tag",
              "id": "77154"
            },
            {
              "type": "tag",
              "id": "77155"
            },
            {
              "type": "tag",
              "id": "77156"
            },
            {
              "type": "tag",
              "id": "77157"
            },
            {
              "type": "tag",
              "id": "77158"
            },
            {
              "type": "tag",
              "id": "77159"
            },
            {
              "type": "tag",
              "id": "77160"
            },
            {
              "type": "tag",
              "id": "77161"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21102",
      "attributes": {
        "slug": "105-sr-ottawa-ermin-ezekiel06-tanai-gregg",
        "type": "student-focus",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-04-04 14:53:28",
        "archivedOn": "",
        "createdOn": "2014-04-04 14:53:28",
        "difficulty": "",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "21102",
        "qnaVideo": "",
        "style": "",
        "title": "SR - Ottawa, Ermin, Ezekiel06, Tanai, Gregg",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "",
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
              "id": "3098"
            },
            {
              "type": "contentData",
              "id": "12547"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6960"
            },
            {
              "type": "instructor",
              "id": "6961"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "76740"
            },
            {
              "type": "tag",
              "id": "76741"
            },
            {
              "type": "tag",
              "id": "76742"
            },
            {
              "type": "tag",
              "id": "76743"
            },
            {
              "type": "tag",
              "id": "76744"
            },
            {
              "type": "tag",
              "id": "76745"
            },
            {
              "type": "tag",
              "id": "76746"
            },
            {
              "type": "tag",
              "id": "76747"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21147",
      "attributes": {
        "slug": "106-ezekiel06-tavo-frik0-reinhardt-carlos",
        "type": "student-focus",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-04-11 03:26:16",
        "archivedOn": "",
        "createdOn": "2014-04-11 03:26:16",
        "difficulty": "",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "21147",
        "qnaVideo": "",
        "style": "",
        "title": "SR - Ezekiel06, Tavo, Frik0, Reinhardt, Carlos",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "",
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
              "id": "3097"
            },
            {
              "type": "contentData",
              "id": "12586"
            },
            {
              "type": "contentData",
              "id": "72362"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6951"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "76543"
            },
            {
              "type": "tag",
              "id": "76544"
            },
            {
              "type": "tag",
              "id": "76545"
            },
            {
              "type": "tag",
              "id": "76546"
            },
            {
              "type": "tag",
              "id": "76547"
            },
            {
              "type": "tag",
              "id": "76548"
            },
            {
              "type": "tag",
              "id": "76549"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21195",
      "attributes": {
        "slug": "107-shauna-marson-g4ce062-chrisdwfreak",
        "type": "student-focus",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-04-25 12:50:10",
        "archivedOn": "",
        "createdOn": "2014-04-25 12:50:10",
        "difficulty": "",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "21195",
        "qnaVideo": "",
        "style": "",
        "title": "SR - Uncle, Shauna, dwfreak, Marson, JimJimJim",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "",
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
              "id": "3096"
            },
            {
              "type": "contentData",
              "id": "12638"
            },
            {
              "type": "contentData",
              "id": "72351"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6936"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "76356"
            },
            {
              "type": "tag",
              "id": "76357"
            },
            {
              "type": "tag",
              "id": "76358"
            },
            {
              "type": "tag",
              "id": "76359"
            },
            {
              "type": "tag",
              "id": "76360"
            },
            {
              "type": "tag",
              "id": "76361"
            },
            {
              "type": "tag",
              "id": "76362"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21343",
      "attributes": {
        "slug": "108-sr-jeremy-castillo-g4ce062",
        "type": "student-focus",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-05-09 14:04:01",
        "archivedOn": "",
        "createdOn": "2014-05-09 14:04:01",
        "difficulty": "",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "21343",
        "qnaVideo": "",
        "style": "",
        "title": "SR - Jeremy Castillo, g4ce062",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "",
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
              "id": "3095"
            },
            {
              "type": "contentData",
              "id": "12726"
            },
            {
              "type": "contentData",
              "id": "72322"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6919"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "75843"
            },
            {
              "type": "tag",
              "id": "75844"
            },
            {
              "type": "tag",
              "id": "75845"
            },
            {
              "type": "tag",
              "id": "75846"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21444",
      "attributes": {
        "slug": "109-sr-g4ce062-jc-milan-bulent-karen-m",
        "type": "student-focus",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-05-23 02:36:19",
        "archivedOn": "",
        "createdOn": "2014-05-23 02:36:19",
        "difficulty": "",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "21444",
        "qnaVideo": "",
        "style": "",
        "title": "SR - g4ce062, JC Milan, Bealbayrak, Karen M",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "",
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
              "id": "3094"
            },
            {
              "type": "contentData",
              "id": "12815"
            },
            {
              "type": "contentData",
              "id": "72295"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6900"
            },
            {
              "type": "instructor",
              "id": "6901"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "75392"
            },
            {
              "type": "tag",
              "id": "75393"
            },
            {
              "type": "tag",
              "id": "75394"
            },
            {
              "type": "tag",
              "id": "75395"
            },
            {
              "type": "tag",
              "id": "75396"
            },
            {
              "type": "tag",
              "id": "75397"
            },
            {
              "type": "tag",
              "id": "75398"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21470",
      "attributes": {
        "slug": "110-sr-jc-milan-bulent-skugglo-einheri",
        "type": "student-focus",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-05-30 02:16:14",
        "archivedOn": "",
        "createdOn": "2014-05-30 02:16:14",
        "difficulty": "",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "21470",
        "qnaVideo": "",
        "style": "",
        "title": "110  SR  JC Milan, Bealbayrak, Skugglo, Einheri",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "",
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
              "id": "3093"
            },
            {
              "type": "contentData",
              "id": "12836"
            },
            {
              "type": "contentData",
              "id": "72288"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6893"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "75297"
            },
            {
              "type": "tag",
              "id": "75298"
            },
            {
              "type": "tag",
              "id": "75299"
            },
            {
              "type": "tag",
              "id": "75300"
            },
            {
              "type": "tag",
              "id": "75301"
            },
            {
              "type": "tag",
              "id": "75302"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21538",
      "attributes": {
        "slug": "111-sr-noahcs",
        "type": "student-focus",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-06-06 08:25:11",
        "archivedOn": "",
        "createdOn": "2014-06-06 08:25:11",
        "difficulty": "",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "21538",
        "qnaVideo": "",
        "style": "",
        "title": "SR - Noahcs",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "",
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
              "id": "3092"
            },
            {
              "type": "contentData",
              "id": "12886"
            },
            {
              "type": "contentData",
              "id": "72271"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6884"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "75010"
            },
            {
              "type": "tag",
              "id": "75011"
            },
            {
              "type": "tag",
              "id": "75012"
            },
            {
              "type": "tag",
              "id": "75013"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21579",
      "attributes": {
        "slug": "112-sr-ishay-capt-kick-levi-marj",
        "type": "student-focus",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-06-13 17:16:17",
        "archivedOn": "",
        "createdOn": "2014-06-13 17:16:17",
        "difficulty": "",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "21579",
        "qnaVideo": "",
        "style": "",
        "title": "SR - Ishay, Capt. Kick, Levi, Marj",
        "xp": "",
        "album": "",
        "artist": "",
        "bpm": "",
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
              "id": "3091"
            },
            {
              "type": "contentData",
              "id": "12908"
            },
            {
              "type": "contentData",
              "id": "72265"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6876"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "74923"
            },
            {
              "type": "tag",
              "id": "74924"
            },
            {
              "type": "tag",
              "id": "74925"
            },
            {
              "type": "tag",
              "id": "74926"
            },
            {
              "type": "tag",
              "id": "74927"
            },
            {
              "type": "tag",
              "id": "74928"
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
      "type": "instructor",
      "id": "31915",
      "attributes": {
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
      "type": "contentData",
      "id": "3111",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11850",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/student-focus/1080/drumeo-sf-04.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7134",
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
      "type": "instructor",
      "id": "7135",
      "attributes": {
        "position": 2
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
      "id": "79757",
      "attributes": {
        "tag": "mike michalkow",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79758",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79759",
      "attributes": {
        "tag": "student reviews",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79760",
      "attributes": {
        "tag": "james h",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "3110",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11859",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/student-focus/550/drumeo-sf-18.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7129",
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
      "type": "instructor",
      "id": "7130",
      "attributes": {
        "position": 2
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
      "id": "79719",
      "attributes": {
        "tag": "dave atkinson",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79720",
      "attributes": {
        "tag": "jared falk",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79721",
      "attributes": {
        "tag": "student reviews",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79722",
      "attributes": {
        "tag": "basement-drummer",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79723",
      "attributes": {
        "tag": "thomas t",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "79724",
      "attributes": {
        "tag": "ocdrummer",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "79725",
      "attributes": {
        "tag": "shaunabear",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "79726",
      "attributes": {
        "tag": "daniel csokmei",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "3109",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11902",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/student-focus/550/drumeo-sf-15.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7116",
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
      "type": "instructor",
      "id": "7117",
      "attributes": {
        "position": 2
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
      "id": "79650",
      "attributes": {
        "tag": "mike michalkow",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79651",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79652",
      "attributes": {
        "tag": "student reviews",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79653",
      "attributes": {
        "tag": "meltem",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "3108",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11942",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20152_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72539",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/student-focus/1080/drumeo-sf-08.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7103",
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
      "type": "instructor",
      "id": "7104",
      "attributes": {
        "position": 2
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
      "id": "79585",
      "attributes": {
        "tag": "dave atkinson",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79586",
      "attributes": {
        "tag": "jared falk",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79587",
      "attributes": {
        "tag": "student reviews",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79588",
      "attributes": {
        "tag": "ocdrummer",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79589",
      "attributes": {
        "tag": "jarah",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "79590",
      "attributes": {
        "tag": "docwood",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "79591",
      "attributes": {
        "tag": "goffa",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "79592",
      "attributes": {
        "tag": "jdrum81",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "3107",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11943",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20172_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72538",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/student-focus/550/drumeo-sf-15.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7102",
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
      "id": "79581",
      "attributes": {
        "tag": "jared falk",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79582",
      "attributes": {
        "tag": "student reviews",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79583",
      "attributes": {
        "tag": "tcrush",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79584",
      "attributes": {
        "tag": "jdrum81",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "3106",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11986",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20229_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72530",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/student-focus/1080/drumeo-sf-15.jpg",
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
            "id": "31877"
          }
        }
      }
    },
    {
      "type": "instructor",
      "id": "7088",
      "attributes": {
        "position": 2
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
      "id": "79473",
      "attributes": {
        "tag": "dave atkinson",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79474",
      "attributes": {
        "tag": "jared falk",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79475",
      "attributes": {
        "tag": "student reviews",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79476",
      "attributes": {
        "tag": "codyplaysdrums",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79477",
      "attributes": {
        "tag": "marcushere",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "79478",
      "attributes": {
        "tag": "goffa",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "79479",
      "attributes": {
        "tag": "widowmaker",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "3105",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12030",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/student-focus/550/drumeo-sf-06.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7073",
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
      "type": "instructor",
      "id": "7074",
      "attributes": {
        "position": 2
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
      "id": "79322",
      "attributes": {
        "tag": "dave atkinson",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79323",
      "attributes": {
        "tag": "jared falk",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79324",
      "attributes": {
        "tag": "student reviews",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79325",
      "attributes": {
        "tag": "james h",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79326",
      "attributes": {
        "tag": "marcushere",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "79327",
      "attributes": {
        "tag": "lazer",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "79328",
      "attributes": {
        "tag": "jimjimjim",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "79329",
      "attributes": {
        "tag": "joshua carpentier",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "3103",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12088",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20382_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72509",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/student-focus/1080/drumeo-sf-09.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7050",
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
      "type": "instructor",
      "id": "7051",
      "attributes": {
        "position": 2
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
      "id": "79110",
      "attributes": {
        "tag": "dave atkinson",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79111",
      "attributes": {
        "tag": "jared falk",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79112",
      "attributes": {
        "tag": "student reviews",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79113",
      "attributes": {
        "tag": "jason 71",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79114",
      "attributes": {
        "tag": "goffa",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "79115",
      "attributes": {
        "tag": "jimjimjim",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "79116",
      "attributes": {
        "tag": "kans",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "79117",
      "attributes": {
        "tag": "trev stock",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "3102",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12125",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/student-focus/550/drumeo-sf-12.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7038",
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
      "type": "instructor",
      "id": "7039",
      "attributes": {
        "position": 2
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
      "id": "78996",
      "attributes": {
        "tag": "mike michalkow",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78997",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78998",
      "attributes": {
        "tag": "student reviews",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78999",
      "attributes": {
        "tag": "jim bridgmon",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "3101",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12146",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/student-focus/550/drumeo-sf-14.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7032",
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
      "id": "78892",
      "attributes": {
        "tag": "dave atkinson",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78893",
      "attributes": {
        "tag": "student reviews",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78894",
      "attributes": {
        "tag": "ray the goat",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78895",
      "attributes": {
        "tag": "kennyv",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78896",
      "attributes": {
        "tag": "jimjimjim",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78897",
      "attributes": {
        "tag": "trev stock",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78898",
      "attributes": {
        "tag": "camara",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78899",
      "attributes": {
        "tag": "ben-j drums",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "3100",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12382",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20798_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72424",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/student-focus/550/drumeo-sf-12.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6993",
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
      "type": "instructor",
      "id": "6994",
      "attributes": {
        "position": 2
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
      "id": "77652",
      "attributes": {
        "tag": "dave atkinson",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "77653",
      "attributes": {
        "tag": "jared falk",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "77654",
      "attributes": {
        "tag": "student reviews",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "77655",
      "attributes": {
        "tag": "ray the goat",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "77656",
      "attributes": {
        "tag": "jimjimjim",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "77657",
      "attributes": {
        "tag": "gilles",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "77658",
      "attributes": {
        "tag": "gregg davis",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "77659",
      "attributes": {
        "tag": "larry s",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "77660",
      "attributes": {
        "tag": "charliedrum3",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "3099",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12477",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/20987_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72399",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/student-focus/1080/drumeo-sf-19.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6972",
      "attributes": {
        "position": 2
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
      "type": "instructor",
      "id": "6973",
      "attributes": {
        "position": 3
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31915"
          }
        }
      }
    },
    {
      "type": "instructor",
      "id": "6974",
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
      "id": "77151",
      "attributes": {
        "tag": "dave atkinson",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "77152",
      "attributes": {
        "tag": "jared falk",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "77153",
      "attributes": {
        "tag": "student reviews",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "77154",
      "attributes": {
        "tag": "victor guidera",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "77155",
      "attributes": {
        "tag": "ray the goat",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "77156",
      "attributes": {
        "tag": "tcrush",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "77157",
      "attributes": {
        "tag": "levicoats",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "77158",
      "attributes": {
        "tag": "ottawa_mark",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "77159",
      "attributes": {
        "tag": "lordqueezle",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "77160",
      "attributes": {
        "tag": "gosh777",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "77161",
      "attributes": {
        "tag": "jacob tuxworth1",
        "position": 11
      }
    },
    {
      "type": "contentData",
      "id": "3098",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12547",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/student-focus/1080/drumeo-sf-16.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6960",
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
      "type": "instructor",
      "id": "6961",
      "attributes": {
        "position": 2
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
      "id": "76740",
      "attributes": {
        "tag": "dave atkinson",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "76741",
      "attributes": {
        "tag": "jared falk",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "76742",
      "attributes": {
        "tag": "student reviews",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "76743",
      "attributes": {
        "tag": "ermin monzon",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "76744",
      "attributes": {
        "tag": "ezekiel06",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "76745",
      "attributes": {
        "tag": "tanai",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "76746",
      "attributes": {
        "tag": "gregg davis",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "76747",
      "attributes": {
        "tag": "ottawa_mark",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "3097",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12586",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/21147_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72362",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/student-focus/550/drumeo-sf-10.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6951",
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
      "id": "76543",
      "attributes": {
        "tag": "dave atkinson",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "76544",
      "attributes": {
        "tag": "student reviews",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "76545",
      "attributes": {
        "tag": "reinhardt",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "76546",
      "attributes": {
        "tag": "ezekiel06",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "76547",
      "attributes": {
        "tag": "tavo_garcia93",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "76548",
      "attributes": {
        "tag": "frik0",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "76549",
      "attributes": {
        "tag": "carlos barredo",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "3096",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12638",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/21195_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72351",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/student-focus/550/drumeo-sf-06.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6936",
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
      "id": "76356",
      "attributes": {
        "tag": "dave atkinson",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "76357",
      "attributes": {
        "tag": "student reviews",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "76358",
      "attributes": {
        "tag": "shaunabear",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "76359",
      "attributes": {
        "tag": "jimjimjim",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "76360",
      "attributes": {
        "tag": "marson",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "76361",
      "attributes": {
        "tag": "chrisdwfreak",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "76362",
      "attributes": {
        "tag": "uncle schlegel",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "3095",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12726",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/21343_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72322",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/student-focus/1080/drumeo-sf-16.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6919",
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
      "id": "75843",
      "attributes": {
        "tag": "jared falk",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "75844",
      "attributes": {
        "tag": "student reviews",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "75845",
      "attributes": {
        "tag": "g4ce062",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "75846",
      "attributes": {
        "tag": "jeremy castillo",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "3094",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12815",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/21444_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72295",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/student-focus/1080/drumeo-sf-18.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6900",
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
      "type": "instructor",
      "id": "6901",
      "attributes": {
        "position": 2
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
      "id": "75392",
      "attributes": {
        "tag": "dave atkinson",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "75393",
      "attributes": {
        "tag": "jay deachman",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "75394",
      "attributes": {
        "tag": "student reviews",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "75395",
      "attributes": {
        "tag": "karen m",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "75396",
      "attributes": {
        "tag": "g4ce062",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "75397",
      "attributes": {
        "tag": "jc milan",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "75398",
      "attributes": {
        "tag": "bealbayrak",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "3093",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12836",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/21470_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72288",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/student-focus/550/drumeo-sf-17.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6893",
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
      "id": "75297",
      "attributes": {
        "tag": "dave atkinson",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "75298",
      "attributes": {
        "tag": "student reviews",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "75299",
      "attributes": {
        "tag": "einheri",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "75300",
      "attributes": {
        "tag": "jc milan",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "75301",
      "attributes": {
        "tag": "skugglo",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "75302",
      "attributes": {
        "tag": "bealbayrak",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "3092",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12886",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/21538_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72271",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/student-focus/1080/drumeo-sf-04.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6884",
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
      "id": "75010",
      "attributes": {
        "tag": "dave atkinson",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "75011",
      "attributes": {
        "tag": "question & answer",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "75012",
      "attributes": {
        "tag": "student reviews",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "75013",
      "attributes": {
        "tag": "noahcs",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "3091",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12908",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/21579_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72265",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/student-focus/1080/drumeo-sf-02.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6876",
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
      "id": "74923",
      "attributes": {
        "tag": "dave atkinson",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "74924",
      "attributes": {
        "tag": "student reviews",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "74925",
      "attributes": {
        "tag": "levicoats",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "74926",
      "attributes": {
        "tag": "ishay frenkel",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "74927",
      "attributes": {
        "tag": "captain kick ass",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "74928",
      "attributes": {
        "tag": "marjthedrummergirl",
        "position": 6
      }
    }
  ],
  "meta": {
    "filterOptions": {
      "difficulty": [
        "1",
        "All Skill Levels"
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
        }
      ]
    },
    "activeFilters": {
      "content_type": [
        "student-focus"
      ]
    },
    "pagination": {
      "total": 465,
      "count": 20,
      "per_page": "20",
      "current_page": "1",
      "total_pages": 24
    }
  },
  "links": []
}
EOT;
// -->
@endphp

@section('app')
    @include('sections.user-stats')

    <h1 class="container w-full mx-auto px-3 pt-6 font-extrabold text-4xl">Student Focus</h1>

    <div class="container w-full h-full mx-auto px-3">
        <content-row
            content-list='{{ $rc1 }}'
            section-title="continue"
            section-url="#"
        ></content-row>
    </div>

    <content-catalogue
        :cards-per-row='4'
        preload-data='{{ $rc1 }}'
        infinite-scroll
        topics-filters-disabled
        level-selector-disabled
        use-student-focus-content-type-filters
        use-progress-filters
    ></content-catalogue>

    @include('sections.student-plan')
@endsection
