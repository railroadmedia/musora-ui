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
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-02-17 10:56:35",
        "archivedOn": "",
        "createdOn": "2014-02-17 10:56:35",
        "difficulty": "4",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20516",
        "qnaVideo": "",
        "style": "",
        "title": "Single Stroke Roll",
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
      "id": "20556",
      "attributes": {
        "slug": "single-stroke-four",
        "type": "course",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-02-18 13:19:59",
        "archivedOn": "",
        "createdOn": "2014-02-18 13:19:59",
        "difficulty": "4",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20556",
        "qnaVideo": "",
        "style": "",
        "title": "Single Stroke Four",
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
      "id": "20571",
      "attributes": {
        "slug": "single-stroke-seven",
        "type": "course",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-02-19 08:27:36",
        "archivedOn": "",
        "createdOn": "2014-02-19 08:27:36",
        "difficulty": "4",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20571",
        "qnaVideo": "",
        "style": "",
        "title": "Single Stroke Seven",
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
      "id": "20584",
      "attributes": {
        "slug": "double-stroke-roll",
        "type": "course",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-02-19 15:40:50",
        "archivedOn": "",
        "createdOn": "2014-02-19 15:40:50",
        "difficulty": "4",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20584",
        "qnaVideo": "",
        "style": "",
        "title": "Double Stroke Roll",
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
      "id": "20596",
      "attributes": {
        "slug": "triple-stroke-roll",
        "type": "course",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-02-19 15:52:25",
        "archivedOn": "",
        "createdOn": "2014-02-19 15:52:25",
        "difficulty": "4",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20596",
        "qnaVideo": "",
        "style": "",
        "title": "Triple Stroke Roll",
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
              "id": "2566"
            },
            {
              "type": "contentData",
              "id": "12205"
            },
            {
              "type": "contentData",
              "id": "41610"
            },
            {
              "type": "contentData",
              "id": "41611"
            },
            {
              "type": "contentData",
              "id": "41612"
            },
            {
              "type": "contentData",
              "id": "41613"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7026"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5952"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78498"
            },
            {
              "type": "tag",
              "id": "78499"
            },
            {
              "type": "tag",
              "id": "78500"
            },
            {
              "type": "tag",
              "id": "78501"
            },
            {
              "type": "tag",
              "id": "78502"
            },
            {
              "type": "tag",
              "id": "78503"
            },
            {
              "type": "tag",
              "id": "78504"
            },
            {
              "type": "tag",
              "id": "78505"
            },
            {
              "type": "tag",
              "id": "78506"
            },
            {
              "type": "tag",
              "id": "78507"
            },
            {
              "type": "tag",
              "id": "78508"
            },
            {
              "type": "tag",
              "id": "78509"
            },
            {
              "type": "tag",
              "id": "78510"
            },
            {
              "type": "tag",
              "id": "78511"
            },
            {
              "type": "tag",
              "id": "78512"
            },
            {
              "type": "tag",
              "id": "78513"
            },
            {
              "type": "tag",
              "id": "78514"
            },
            {
              "type": "tag",
              "id": "78515"
            },
            {
              "type": "tag",
              "id": "78516"
            },
            {
              "type": "tag",
              "id": "78517"
            },
            {
              "type": "tag",
              "id": "78518"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20609",
      "attributes": {
        "slug": "five-stroke-roll",
        "type": "course",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-02-20 08:50:00",
        "archivedOn": "",
        "createdOn": "2014-02-20 08:50:00",
        "difficulty": "4",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20609",
        "qnaVideo": "",
        "style": "",
        "title": "Five Stroke Roll",
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
              "id": "2565"
            },
            {
              "type": "contentData",
              "id": "12218"
            },
            {
              "type": "contentData",
              "id": "41606"
            },
            {
              "type": "contentData",
              "id": "41607"
            },
            {
              "type": "contentData",
              "id": "41608"
            },
            {
              "type": "contentData",
              "id": "41609"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7025"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5951"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78405"
            },
            {
              "type": "tag",
              "id": "78406"
            },
            {
              "type": "tag",
              "id": "78407"
            },
            {
              "type": "tag",
              "id": "78408"
            },
            {
              "type": "tag",
              "id": "78409"
            },
            {
              "type": "tag",
              "id": "78410"
            },
            {
              "type": "tag",
              "id": "78411"
            },
            {
              "type": "tag",
              "id": "78412"
            },
            {
              "type": "tag",
              "id": "78413"
            },
            {
              "type": "tag",
              "id": "78414"
            },
            {
              "type": "tag",
              "id": "78415"
            },
            {
              "type": "tag",
              "id": "78416"
            },
            {
              "type": "tag",
              "id": "78417"
            },
            {
              "type": "tag",
              "id": "78418"
            },
            {
              "type": "tag",
              "id": "78419"
            },
            {
              "type": "tag",
              "id": "78420"
            },
            {
              "type": "tag",
              "id": "78421"
            },
            {
              "type": "tag",
              "id": "78422"
            },
            {
              "type": "tag",
              "id": "78423"
            },
            {
              "type": "tag",
              "id": "78424"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20627",
      "attributes": {
        "slug": "single-paradiddle",
        "type": "course",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-02-21 14:21:29",
        "archivedOn": "",
        "createdOn": "2014-02-21 14:21:29",
        "difficulty": "4",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "",
        "qnaVideo": "",
        "style": "",
        "title": "",
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
              "id": "2564"
            },
            {
              "type": "contentData",
              "id": "12231"
            },
            {
              "type": "contentData",
              "id": "41602"
            },
            {
              "type": "contentData",
              "id": "41603"
            },
            {
              "type": "contentData",
              "id": "41604"
            },
            {
              "type": "contentData",
              "id": "41605"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7024"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5950"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78310"
            },
            {
              "type": "tag",
              "id": "78311"
            },
            {
              "type": "tag",
              "id": "78312"
            },
            {
              "type": "tag",
              "id": "78313"
            },
            {
              "type": "tag",
              "id": "78314"
            },
            {
              "type": "tag",
              "id": "78315"
            },
            {
              "type": "tag",
              "id": "78316"
            },
            {
              "type": "tag",
              "id": "78317"
            },
            {
              "type": "tag",
              "id": "78318"
            },
            {
              "type": "tag",
              "id": "78319"
            },
            {
              "type": "tag",
              "id": "78320"
            },
            {
              "type": "tag",
              "id": "78321"
            },
            {
              "type": "tag",
              "id": "78322"
            },
            {
              "type": "tag",
              "id": "78323"
            },
            {
              "type": "tag",
              "id": "78324"
            },
            {
              "type": "tag",
              "id": "78325"
            },
            {
              "type": "tag",
              "id": "78326"
            },
            {
              "type": "tag",
              "id": "78327"
            },
            {
              "type": "tag",
              "id": "78328"
            },
            {
              "type": "tag",
              "id": "78329"
            },
            {
              "type": "tag",
              "id": "78330"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20664",
      "attributes": {
        "slug": "quarter-notes",
        "type": "course",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-02-25 18:38:00",
        "archivedOn": "",
        "createdOn": "2014-02-25 18:38:00",
        "difficulty": "1",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20664",
        "qnaVideo": "",
        "style": "",
        "title": "Quarter Notes",
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
              "id": "2563"
            },
            {
              "type": "contentData",
              "id": "12262"
            },
            {
              "type": "contentData",
              "id": "41598"
            },
            {
              "type": "contentData",
              "id": "41599"
            },
            {
              "type": "contentData",
              "id": "41600"
            },
            {
              "type": "contentData",
              "id": "41601"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7017"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5938"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78158"
            },
            {
              "type": "tag",
              "id": "78159"
            },
            {
              "type": "tag",
              "id": "78160"
            },
            {
              "type": "tag",
              "id": "78161"
            },
            {
              "type": "tag",
              "id": "78162"
            },
            {
              "type": "tag",
              "id": "78163"
            },
            {
              "type": "tag",
              "id": "78164"
            },
            {
              "type": "tag",
              "id": "78165"
            },
            {
              "type": "tag",
              "id": "78166"
            },
            {
              "type": "tag",
              "id": "78167"
            },
            {
              "type": "tag",
              "id": "78168"
            },
            {
              "type": "tag",
              "id": "78169"
            },
            {
              "type": "tag",
              "id": "78170"
            },
            {
              "type": "tag",
              "id": "78171"
            },
            {
              "type": "tag",
              "id": "78172"
            },
            {
              "type": "tag",
              "id": "78173"
            },
            {
              "type": "tag",
              "id": "78174"
            },
            {
              "type": "tag",
              "id": "78175"
            },
            {
              "type": "tag",
              "id": "78176"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20676",
      "attributes": {
        "slug": "eighth-notes",
        "type": "course",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-02-25 18:50:51",
        "archivedOn": "",
        "createdOn": "2014-02-25 18:50:51",
        "difficulty": "1",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20676",
        "qnaVideo": "",
        "style": "",
        "title": "Eighth Notes",
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
              "id": "2562"
            },
            {
              "type": "contentData",
              "id": "12277"
            },
            {
              "type": "contentData",
              "id": "41594"
            },
            {
              "type": "contentData",
              "id": "41595"
            },
            {
              "type": "contentData",
              "id": "41596"
            },
            {
              "type": "contentData",
              "id": "41597"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7016"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5937"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78084"
            },
            {
              "type": "tag",
              "id": "78085"
            },
            {
              "type": "tag",
              "id": "78086"
            },
            {
              "type": "tag",
              "id": "78087"
            },
            {
              "type": "tag",
              "id": "78088"
            },
            {
              "type": "tag",
              "id": "78089"
            },
            {
              "type": "tag",
              "id": "78090"
            },
            {
              "type": "tag",
              "id": "78091"
            },
            {
              "type": "tag",
              "id": "78092"
            },
            {
              "type": "tag",
              "id": "78093"
            },
            {
              "type": "tag",
              "id": "78094"
            },
            {
              "type": "tag",
              "id": "78095"
            },
            {
              "type": "tag",
              "id": "78096"
            },
            {
              "type": "tag",
              "id": "78097"
            },
            {
              "type": "tag",
              "id": "78098"
            },
            {
              "type": "tag",
              "id": "78099"
            },
            {
              "type": "tag",
              "id": "78100"
            },
            {
              "type": "tag",
              "id": "78101"
            },
            {
              "type": "tag",
              "id": "78102"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20688",
      "attributes": {
        "slug": "eighth-note-triplets",
        "type": "course",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-02-25 19:04:21",
        "archivedOn": "",
        "createdOn": "2014-02-25 19:04:21",
        "difficulty": "2",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20688",
        "qnaVideo": "",
        "style": "",
        "title": "Eighth Note Triplets",
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
              "id": "2561"
            },
            {
              "type": "contentData",
              "id": "12291"
            },
            {
              "type": "contentData",
              "id": "41590"
            },
            {
              "type": "contentData",
              "id": "41591"
            },
            {
              "type": "contentData",
              "id": "41592"
            },
            {
              "type": "contentData",
              "id": "41593"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7015"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5936"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "78010"
            },
            {
              "type": "tag",
              "id": "78011"
            },
            {
              "type": "tag",
              "id": "78012"
            },
            {
              "type": "tag",
              "id": "78013"
            },
            {
              "type": "tag",
              "id": "78014"
            },
            {
              "type": "tag",
              "id": "78015"
            },
            {
              "type": "tag",
              "id": "78016"
            },
            {
              "type": "tag",
              "id": "78017"
            },
            {
              "type": "tag",
              "id": "78018"
            },
            {
              "type": "tag",
              "id": "78019"
            },
            {
              "type": "tag",
              "id": "78020"
            },
            {
              "type": "tag",
              "id": "78021"
            },
            {
              "type": "tag",
              "id": "78022"
            },
            {
              "type": "tag",
              "id": "78023"
            },
            {
              "type": "tag",
              "id": "78024"
            },
            {
              "type": "tag",
              "id": "78025"
            },
            {
              "type": "tag",
              "id": "78026"
            },
            {
              "type": "tag",
              "id": "78027"
            },
            {
              "type": "tag",
              "id": "78028"
            },
            {
              "type": "tag",
              "id": "78029"
            },
            {
              "type": "tag",
              "id": "78030"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20768",
      "attributes": {
        "slug": "sixteenth-notes",
        "type": "course",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-03-12 10:11:47",
        "archivedOn": "",
        "createdOn": "2014-03-12 10:11:47",
        "difficulty": "2",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20768",
        "qnaVideo": "",
        "style": "",
        "title": "Sixteenth Notes",
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
              "id": "2560"
            },
            {
              "type": "contentData",
              "id": "12355"
            },
            {
              "type": "contentData",
              "id": "41586"
            },
            {
              "type": "contentData",
              "id": "41587"
            },
            {
              "type": "contentData",
              "id": "41588"
            },
            {
              "type": "contentData",
              "id": "41589"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6999"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5919"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "77759"
            },
            {
              "type": "tag",
              "id": "77760"
            },
            {
              "type": "tag",
              "id": "77761"
            },
            {
              "type": "tag",
              "id": "77762"
            },
            {
              "type": "tag",
              "id": "77763"
            },
            {
              "type": "tag",
              "id": "77764"
            },
            {
              "type": "tag",
              "id": "77765"
            },
            {
              "type": "tag",
              "id": "77766"
            },
            {
              "type": "tag",
              "id": "77767"
            },
            {
              "type": "tag",
              "id": "77768"
            },
            {
              "type": "tag",
              "id": "77769"
            },
            {
              "type": "tag",
              "id": "77770"
            },
            {
              "type": "tag",
              "id": "77771"
            },
            {
              "type": "tag",
              "id": "77772"
            },
            {
              "type": "tag",
              "id": "77773"
            },
            {
              "type": "tag",
              "id": "77774"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20817",
      "attributes": {
        "slug": "sixteenth-note-triplets",
        "type": "course",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-03-12 10:11:54",
        "archivedOn": "",
        "createdOn": "2014-03-12 10:11:54",
        "difficulty": "4",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20817",
        "qnaVideo": "",
        "style": "",
        "title": "Sixteenth Note Triplets",
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
              "id": "2559"
            },
            {
              "type": "contentData",
              "id": "12393"
            },
            {
              "type": "contentData",
              "id": "41582"
            },
            {
              "type": "contentData",
              "id": "41583"
            },
            {
              "type": "contentData",
              "id": "41584"
            },
            {
              "type": "contentData",
              "id": "41585"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6990"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5906"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "77601"
            },
            {
              "type": "tag",
              "id": "77602"
            },
            {
              "type": "tag",
              "id": "77603"
            },
            {
              "type": "tag",
              "id": "77604"
            },
            {
              "type": "tag",
              "id": "77605"
            },
            {
              "type": "tag",
              "id": "77606"
            },
            {
              "type": "tag",
              "id": "77607"
            },
            {
              "type": "tag",
              "id": "77608"
            },
            {
              "type": "tag",
              "id": "77609"
            },
            {
              "type": "tag",
              "id": "77610"
            },
            {
              "type": "tag",
              "id": "77611"
            },
            {
              "type": "tag",
              "id": "77612"
            },
            {
              "type": "tag",
              "id": "77613"
            },
            {
              "type": "tag",
              "id": "77614"
            },
            {
              "type": "tag",
              "id": "77615"
            },
            {
              "type": "tag",
              "id": "77616"
            },
            {
              "type": "tag",
              "id": "77617"
            },
            {
              "type": "tag",
              "id": "77618"
            },
            {
              "type": "tag",
              "id": "77619"
            },
            {
              "type": "tag",
              "id": "77620"
            },
            {
              "type": "tag",
              "id": "77621"
            },
            {
              "type": "tag",
              "id": "77622"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20830",
      "attributes": {
        "slug": "32nd-notes",
        "type": "course",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-03-21 10:09:32",
        "archivedOn": "",
        "createdOn": "2014-03-21 10:09:32",
        "difficulty": "4",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20830",
        "qnaVideo": "",
        "style": "",
        "title": "32nd Notes",
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
              "id": "2558"
            },
            {
              "type": "contentData",
              "id": "12406"
            },
            {
              "type": "contentData",
              "id": "41578"
            },
            {
              "type": "contentData",
              "id": "41579"
            },
            {
              "type": "contentData",
              "id": "41580"
            },
            {
              "type": "contentData",
              "id": "41581"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6989"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5905"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "77507"
            },
            {
              "type": "tag",
              "id": "77508"
            },
            {
              "type": "tag",
              "id": "77509"
            },
            {
              "type": "tag",
              "id": "77510"
            },
            {
              "type": "tag",
              "id": "77511"
            },
            {
              "type": "tag",
              "id": "77512"
            },
            {
              "type": "tag",
              "id": "77513"
            },
            {
              "type": "tag",
              "id": "77514"
            },
            {
              "type": "tag",
              "id": "77515"
            },
            {
              "type": "tag",
              "id": "77516"
            },
            {
              "type": "tag",
              "id": "77517"
            },
            {
              "type": "tag",
              "id": "77518"
            },
            {
              "type": "tag",
              "id": "77519"
            },
            {
              "type": "tag",
              "id": "77520"
            },
            {
              "type": "tag",
              "id": "77521"
            },
            {
              "type": "tag",
              "id": "77522"
            },
            {
              "type": "tag",
              "id": "77523"
            },
            {
              "type": "tag",
              "id": "77524"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20941",
      "attributes": {
        "slug": "quarter-note-triplets",
        "type": "course",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-03-25 10:13:32",
        "archivedOn": "",
        "createdOn": "2014-03-25 10:13:32",
        "difficulty": "5",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20941",
        "qnaVideo": "",
        "style": "",
        "title": "Quarter Note Triplets",
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
              "id": "2557"
            },
            {
              "type": "contentData",
              "id": "12444"
            },
            {
              "type": "contentData",
              "id": "41574"
            },
            {
              "type": "contentData",
              "id": "41575"
            },
            {
              "type": "contentData",
              "id": "41576"
            },
            {
              "type": "contentData",
              "id": "41577"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6981"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5892"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "77352"
            },
            {
              "type": "tag",
              "id": "77353"
            },
            {
              "type": "tag",
              "id": "77354"
            },
            {
              "type": "tag",
              "id": "77355"
            },
            {
              "type": "tag",
              "id": "77356"
            },
            {
              "type": "tag",
              "id": "77357"
            },
            {
              "type": "tag",
              "id": "77358"
            },
            {
              "type": "tag",
              "id": "77359"
            },
            {
              "type": "tag",
              "id": "77360"
            },
            {
              "type": "tag",
              "id": "77361"
            },
            {
              "type": "tag",
              "id": "77362"
            },
            {
              "type": "tag",
              "id": "77363"
            },
            {
              "type": "tag",
              "id": "77364"
            },
            {
              "type": "tag",
              "id": "77365"
            },
            {
              "type": "tag",
              "id": "77366"
            },
            {
              "type": "tag",
              "id": "77367"
            },
            {
              "type": "tag",
              "id": "77368"
            },
            {
              "type": "tag",
              "id": "77369"
            },
            {
              "type": "tag",
              "id": "77370"
            },
            {
              "type": "tag",
              "id": "77371"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20977",
      "attributes": {
        "slug": "getting-started-on-drums",
        "type": "course",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-03-30 18:37:05",
        "archivedOn": "",
        "createdOn": "2014-03-30 18:37:05",
        "difficulty": "1",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20977",
        "qnaVideo": "",
        "style": "",
        "title": "Getting Started On Drums",
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
              "id": "2422"
            },
            {
              "type": "contentData",
              "id": "12476"
            },
            {
              "type": "contentData",
              "id": "41570"
            },
            {
              "type": "contentData",
              "id": "41571"
            },
            {
              "type": "contentData",
              "id": "41572"
            },
            {
              "type": "contentData",
              "id": "41573"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6975"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5878"
            },
            {
              "type": "topic",
              "id": "5879"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "77162"
            },
            {
              "type": "tag",
              "id": "77163"
            },
            {
              "type": "tag",
              "id": "77164"
            },
            {
              "type": "tag",
              "id": "77165"
            },
            {
              "type": "tag",
              "id": "77166"
            },
            {
              "type": "tag",
              "id": "77167"
            },
            {
              "type": "tag",
              "id": "77168"
            },
            {
              "type": "tag",
              "id": "77169"
            },
            {
              "type": "tag",
              "id": "77170"
            },
            {
              "type": "tag",
              "id": "77171"
            },
            {
              "type": "tag",
              "id": "77172"
            },
            {
              "type": "tag",
              "id": "77173"
            },
            {
              "type": "tag",
              "id": "77174"
            },
            {
              "type": "tag",
              "id": "77175"
            },
            {
              "type": "tag",
              "id": "77176"
            },
            {
              "type": "tag",
              "id": "77177"
            },
            {
              "type": "tag",
              "id": "77178"
            },
            {
              "type": "tag",
              "id": "77179"
            },
            {
              "type": "tag",
              "id": "77180"
            },
            {
              "type": "tag",
              "id": "77181"
            },
            {
              "type": "tag",
              "id": "77182"
            },
            {
              "type": "tag",
              "id": "77183"
            },
            {
              "type": "tag",
              "id": "77184"
            },
            {
              "type": "tag",
              "id": "77185"
            },
            {
              "type": "tag",
              "id": "77186"
            },
            {
              "type": "tag",
              "id": "77187"
            },
            {
              "type": "tag",
              "id": "77188"
            },
            {
              "type": "tag",
              "id": "77189"
            },
            {
              "type": "tag",
              "id": "77190"
            },
            {
              "type": "tag",
              "id": "77191"
            },
            {
              "type": "tag",
              "id": "77192"
            },
            {
              "type": "tag",
              "id": "77193"
            },
            {
              "type": "tag",
              "id": "77194"
            },
            {
              "type": "tag",
              "id": "77195"
            },
            {
              "type": "tag",
              "id": "77196"
            },
            {
              "type": "tag",
              "id": "77197"
            },
            {
              "type": "tag",
              "id": "77198"
            },
            {
              "type": "tag",
              "id": "77199"
            },
            {
              "type": "tag",
              "id": "77200"
            },
            {
              "type": "tag",
              "id": "77201"
            },
            {
              "type": "tag",
              "id": "77202"
            },
            {
              "type": "tag",
              "id": "77203"
            },
            {
              "type": "tag",
              "id": "77204"
            },
            {
              "type": "tag",
              "id": "77205"
            },
            {
              "type": "tag",
              "id": "77206"
            },
            {
              "type": "tag",
              "id": "77207"
            },
            {
              "type": "tag",
              "id": "77208"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "2767"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21065",
      "attributes": {
        "slug": "gospel-drumming",
        "type": "course",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-04-04 10:00:04",
        "archivedOn": "",
        "createdOn": "2014-04-04 10:00:04",
        "difficulty": "5",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "21065",
        "qnaVideo": "",
        "style": "",
        "title": "Gospel Drumming",
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
              "id": "2421"
            },
            {
              "type": "contentData",
              "id": "12521"
            },
            {
              "type": "contentData",
              "id": "41566"
            },
            {
              "type": "contentData",
              "id": "41567"
            },
            {
              "type": "contentData",
              "id": "41568"
            },
            {
              "type": "contentData",
              "id": "41569"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6965"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5869"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "76908"
            },
            {
              "type": "tag",
              "id": "76909"
            },
            {
              "type": "tag",
              "id": "76910"
            },
            {
              "type": "tag",
              "id": "76911"
            },
            {
              "type": "tag",
              "id": "76912"
            },
            {
              "type": "tag",
              "id": "76913"
            },
            {
              "type": "tag",
              "id": "76914"
            },
            {
              "type": "tag",
              "id": "76915"
            },
            {
              "type": "tag",
              "id": "76916"
            },
            {
              "type": "tag",
              "id": "76917"
            },
            {
              "type": "tag",
              "id": "76918"
            },
            {
              "type": "tag",
              "id": "76919"
            },
            {
              "type": "tag",
              "id": "76920"
            },
            {
              "type": "tag",
              "id": "76921"
            },
            {
              "type": "tag",
              "id": "76922"
            },
            {
              "type": "tag",
              "id": "76923"
            },
            {
              "type": "tag",
              "id": "76924"
            },
            {
              "type": "tag",
              "id": "76925"
            },
            {
              "type": "tag",
              "id": "76926"
            },
            {
              "type": "tag",
              "id": "76927"
            },
            {
              "type": "tag",
              "id": "76928"
            },
            {
              "type": "tag",
              "id": "76929"
            },
            {
              "type": "tag",
              "id": "76930"
            },
            {
              "type": "tag",
              "id": "76931"
            },
            {
              "type": "tag",
              "id": "76932"
            },
            {
              "type": "tag",
              "id": "76933"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21127",
      "attributes": {
        "slug": "rock-drum-beats",
        "type": "course",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-04-11 10:00:36",
        "archivedOn": "",
        "createdOn": "2014-04-11 10:00:36",
        "difficulty": "2",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "21127",
        "qnaVideo": "",
        "style": "",
        "title": "Rock Drum Beats",
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
        "staffPickRating": "5",
        "studentId": "",
        "vimeoVideoId": "",
        "youtubeVideoId": ""
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "2420"
            },
            {
              "type": "contentData",
              "id": "12565"
            },
            {
              "type": "contentData",
              "id": "41562"
            },
            {
              "type": "contentData",
              "id": "41563"
            },
            {
              "type": "contentData",
              "id": "41564"
            },
            {
              "type": "contentData",
              "id": "41565"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6954"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5852"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "76654"
            },
            {
              "type": "tag",
              "id": "76655"
            },
            {
              "type": "tag",
              "id": "76656"
            },
            {
              "type": "tag",
              "id": "76657"
            },
            {
              "type": "tag",
              "id": "76658"
            },
            {
              "type": "tag",
              "id": "76659"
            },
            {
              "type": "tag",
              "id": "76660"
            },
            {
              "type": "tag",
              "id": "76661"
            },
            {
              "type": "tag",
              "id": "76662"
            },
            {
              "type": "tag",
              "id": "76663"
            },
            {
              "type": "tag",
              "id": "76664"
            },
            {
              "type": "tag",
              "id": "76665"
            },
            {
              "type": "tag",
              "id": "76666"
            },
            {
              "type": "tag",
              "id": "76667"
            },
            {
              "type": "tag",
              "id": "76668"
            },
            {
              "type": "tag",
              "id": "76669"
            },
            {
              "type": "tag",
              "id": "76670"
            },
            {
              "type": "tag",
              "id": "76671"
            },
            {
              "type": "tag",
              "id": "76672"
            },
            {
              "type": "tag",
              "id": "76673"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "2782"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21198",
      "attributes": {
        "slug": "building-groove",
        "type": "course",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-04-18 10:00:40",
        "archivedOn": "",
        "createdOn": "2014-04-18 10:00:40",
        "difficulty": "5",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "21198",
        "qnaVideo": "",
        "style": "",
        "title": "Building Groove",
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
              "id": "2419"
            },
            {
              "type": "contentData",
              "id": "12639"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6935"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5819"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "76333"
            },
            {
              "type": "tag",
              "id": "76334"
            },
            {
              "type": "tag",
              "id": "76335"
            },
            {
              "type": "tag",
              "id": "76336"
            },
            {
              "type": "tag",
              "id": "76337"
            },
            {
              "type": "tag",
              "id": "76338"
            },
            {
              "type": "tag",
              "id": "76339"
            },
            {
              "type": "tag",
              "id": "76340"
            },
            {
              "type": "tag",
              "id": "76341"
            },
            {
              "type": "tag",
              "id": "76342"
            },
            {
              "type": "tag",
              "id": "76343"
            },
            {
              "type": "tag",
              "id": "76344"
            },
            {
              "type": "tag",
              "id": "76345"
            },
            {
              "type": "tag",
              "id": "76346"
            },
            {
              "type": "tag",
              "id": "76347"
            },
            {
              "type": "tag",
              "id": "76348"
            },
            {
              "type": "tag",
              "id": "76349"
            },
            {
              "type": "tag",
              "id": "76350"
            },
            {
              "type": "tag",
              "id": "76351"
            },
            {
              "type": "tag",
              "id": "76352"
            },
            {
              "type": "tag",
              "id": "76353"
            },
            {
              "type": "tag",
              "id": "76354"
            },
            {
              "type": "tag",
              "id": "76355"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "2827"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21230",
      "attributes": {
        "slug": "rock-drum-fills",
        "type": "course",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-04-25 09:30:46",
        "archivedOn": "",
        "createdOn": "2014-04-25 09:30:46",
        "difficulty": "3",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "21230",
        "qnaVideo": "",
        "style": "",
        "title": "Rock Drum Fills",
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
              "id": "2418"
            },
            {
              "type": "contentData",
              "id": "12647"
            },
            {
              "type": "contentData",
              "id": "41558"
            },
            {
              "type": "contentData",
              "id": "41559"
            },
            {
              "type": "contentData",
              "id": "41560"
            },
            {
              "type": "contentData",
              "id": "41561"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6934"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5818"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "76240"
            },
            {
              "type": "tag",
              "id": "76241"
            },
            {
              "type": "tag",
              "id": "76242"
            },
            {
              "type": "tag",
              "id": "76243"
            },
            {
              "type": "tag",
              "id": "76244"
            },
            {
              "type": "tag",
              "id": "76245"
            },
            {
              "type": "tag",
              "id": "76246"
            },
            {
              "type": "tag",
              "id": "76247"
            },
            {
              "type": "tag",
              "id": "76248"
            },
            {
              "type": "tag",
              "id": "76249"
            },
            {
              "type": "tag",
              "id": "76250"
            },
            {
              "type": "tag",
              "id": "76251"
            },
            {
              "type": "tag",
              "id": "76252"
            },
            {
              "type": "tag",
              "id": "76253"
            },
            {
              "type": "tag",
              "id": "76254"
            },
            {
              "type": "tag",
              "id": "76255"
            },
            {
              "type": "tag",
              "id": "76256"
            },
            {
              "type": "tag",
              "id": "76257"
            },
            {
              "type": "tag",
              "id": "76258"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "2783"
            },
            {
              "type": "parent",
              "id": "2795"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "21290",
      "attributes": {
        "slug": "developing-dynamics",
        "type": "course",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2014-05-05 13:00:40",
        "archivedOn": "",
        "createdOn": "2014-05-05 13:00:40",
        "difficulty": "2",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "21290",
        "qnaVideo": "",
        "style": "",
        "title": "Developing Dynamics",
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
              "id": "2417"
            },
            {
              "type": "contentData",
              "id": "12685"
            },
            {
              "type": "contentData",
              "id": "41554"
            },
            {
              "type": "contentData",
              "id": "41555"
            },
            {
              "type": "contentData",
              "id": "41556"
            },
            {
              "type": "contentData",
              "id": "41557"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "6926"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "5807"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "76064"
            },
            {
              "type": "tag",
              "id": "76065"
            },
            {
              "type": "tag",
              "id": "76066"
            },
            {
              "type": "tag",
              "id": "76067"
            },
            {
              "type": "tag",
              "id": "76068"
            },
            {
              "type": "tag",
              "id": "76069"
            },
            {
              "type": "tag",
              "id": "76070"
            },
            {
              "type": "tag",
              "id": "76071"
            },
            {
              "type": "tag",
              "id": "76072"
            },
            {
              "type": "tag",
              "id": "76073"
            },
            {
              "type": "tag",
              "id": "76074"
            },
            {
              "type": "tag",
              "id": "76075"
            },
            {
              "type": "tag",
              "id": "76076"
            },
            {
              "type": "tag",
              "id": "76077"
            },
            {
              "type": "tag",
              "id": "76078"
            },
            {
              "type": "tag",
              "id": "76079"
            },
            {
              "type": "tag",
              "id": "76080"
            },
            {
              "type": "tag",
              "id": "76081"
            },
            {
              "type": "tag",
              "id": "76082"
            },
            {
              "type": "tag",
              "id": "76083"
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
      "id": "31895",
      "attributes": {
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
      }
    },
    {
      "type": "parent",
      "id": "28163",
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
      "id": "31897",
      "attributes": {
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
        "value": "https://d1923uyy6spedc.cloudfront.net/261665-card-thumbnail-maxres-1594459188.png",
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
        "value": "https://d1923uyy6spedc.cloudfront.net/261650-card-thumbnail-maxres-1594300274.png",
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
        "value": "https://d1923uyy6spedc.cloudfront.net/257714-card-thumbnail-maxres-1593084661.png",
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
        "value": "https://d1923uyy6spedc.cloudfront.net/257704-card-thumbnail-maxres-1592652305.png",
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
      "id": "2566",
      "attributes": {
        "key": "description",
        "value": "The triple stroke roll is one of the 40 drum rudiments. This course will provide you with some practice pad exercises to help you develop speed and control, and also some drum-set applications.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12205",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/259060-card-thumbnail-maxres-1592297850.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41610",
      "attributes": {
        "key": "resource_name",
        "value": "Course Resources Pack",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41611",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/resource-files/dci-06-triple-stroke-roll.zip",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41612",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41613",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/pdf/dci-06.pdf",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7026",
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
      "id": "5952",
      "attributes": {
        "topic": "Rudiments",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78498",
      "attributes": {
        "tag": "fills",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78499",
      "attributes": {
        "tag": "rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78500",
      "attributes": {
        "tag": "beats",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78501",
      "attributes": {
        "tag": "dave atkinson",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78502",
      "attributes": {
        "tag": "intermediate",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78503",
      "attributes": {
        "tag": "groove",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78504",
      "attributes": {
        "tag": "4",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78505",
      "attributes": {
        "tag": "3",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78506",
      "attributes": {
        "tag": "Play Along",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78507",
      "attributes": {
        "tag": "fill",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78508",
      "attributes": {
        "tag": "beat",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78509",
      "attributes": {
        "tag": "rudiment",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78510",
      "attributes": {
        "tag": "grooves",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "78511",
      "attributes": {
        "tag": "triple",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "78512",
      "attributes": {
        "tag": "triples",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "78513",
      "attributes": {
        "tag": "stroke",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "78514",
      "attributes": {
        "tag": "strokes",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "78515",
      "attributes": {
        "tag": "play-alongs",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "78516",
      "attributes": {
        "tag": "roll",
        "position": 19
      }
    },
    {
      "type": "tag",
      "id": "78517",
      "attributes": {
        "tag": "rolls",
        "position": 20
      }
    },
    {
      "type": "tag",
      "id": "78518",
      "attributes": {
        "tag": "alongs",
        "position": 21
      }
    },
    {
      "type": "contentData",
      "id": "2565",
      "attributes": {
        "key": "description",
        "value": "The five stroke roll is one of the 40 drum rudiments. This course will provide you with some speed and control exercises and also some practical drum-set applications.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12218",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/258174-card-thumbnail-maxres-1593452447.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41606",
      "attributes": {
        "key": "resource_name",
        "value": "Course Resources Pack",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41607",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/resource-files/dci-07-five-stroke-roll.zip",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41608",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41609",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/pdf/dci-07.pdf",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7025",
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
      "id": "5951",
      "attributes": {
        "topic": "Rudiments",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78405",
      "attributes": {
        "tag": "fills",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78406",
      "attributes": {
        "tag": "rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78407",
      "attributes": {
        "tag": "beats",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78408",
      "attributes": {
        "tag": "dave atkinson",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78409",
      "attributes": {
        "tag": "intermediate",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78410",
      "attributes": {
        "tag": "groove",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78411",
      "attributes": {
        "tag": "4",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78412",
      "attributes": {
        "tag": "5",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78413",
      "attributes": {
        "tag": "Play Along",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78414",
      "attributes": {
        "tag": "fill",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78415",
      "attributes": {
        "tag": "beat",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78416",
      "attributes": {
        "tag": "rudiment",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78417",
      "attributes": {
        "tag": "grooves",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "78418",
      "attributes": {
        "tag": "five",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "78419",
      "attributes": {
        "tag": "stroke",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "78420",
      "attributes": {
        "tag": "strokes",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "78421",
      "attributes": {
        "tag": "play-alongs",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "78422",
      "attributes": {
        "tag": "roll",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "78423",
      "attributes": {
        "tag": "rolls",
        "position": 19
      }
    },
    {
      "type": "tag",
      "id": "78424",
      "attributes": {
        "tag": "alongs",
        "position": 20
      }
    },
    {
      "type": "contentData",
      "id": "2564",
      "attributes": {
        "key": "description",
        "value": "The single paradiddle is one of the 40 drum rudiments. This course will provide you with some practice pad exercises to help you develop speed and control, and also some drum-set applications.",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12231",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/254195-card-thumbnail-maxres-1591373535.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41602",
      "attributes": {
        "key": "resource_name",
        "value": "Course Resources Pack",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41603",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/resource-files/dci-16-single-paradiddle.zip",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41604",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41605",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/pdf/dci-16.pdf",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7024",
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
      "id": "5950",
      "attributes": {
        "topic": "Rudiments",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78310",
      "attributes": {
        "tag": "fills",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78311",
      "attributes": {
        "tag": "rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78312",
      "attributes": {
        "tag": "beats",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78313",
      "attributes": {
        "tag": "dave atkinson",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78314",
      "attributes": {
        "tag": "intermediate",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78315",
      "attributes": {
        "tag": "groove",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78316",
      "attributes": {
        "tag": "4",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78317",
      "attributes": {
        "tag": "Play Along",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78318",
      "attributes": {
        "tag": "fill",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78319",
      "attributes": {
        "tag": "applications",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78320",
      "attributes": {
        "tag": "application",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78321",
      "attributes": {
        "tag": "beat",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78322",
      "attributes": {
        "tag": "rudiment",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "78323",
      "attributes": {
        "tag": "grooves",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "78324",
      "attributes": {
        "tag": "paradiddle",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "78325",
      "attributes": {
        "tag": "paradiddles",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "78326",
      "attributes": {
        "tag": "singles",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "78327",
      "attributes": {
        "tag": "control",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "78328",
      "attributes": {
        "tag": "speed",
        "position": 19
      }
    },
    {
      "type": "tag",
      "id": "78329",
      "attributes": {
        "tag": "single",
        "position": 20
      }
    },
    {
      "type": "tag",
      "id": "78330",
      "attributes": {
        "tag": "alongs",
        "position": 21
      }
    },
    {
      "type": "contentData",
      "id": "2563",
      "attributes": {
        "key": "description",
        "value": "Mike Michalkow will teach you everything you need to know about quarter notes. He'll explain what they are, how to count them, and how to apply them to the drum-set!",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12262",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/254180-card-thumbnail-maxres-1590084325.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41598",
      "attributes": {
        "key": "resource_name",
        "value": "Course Resources Pack",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41599",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/resource-files/dcb-02-quarter-notes.zip",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41600",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41601",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/pdf/dcb-02.pdf",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7017",
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
      "id": "5938",
      "attributes": {
        "topic": "Note Values & Theory",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78158",
      "attributes": {
        "tag": "mike michalkow",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78159",
      "attributes": {
        "tag": "fills",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78160",
      "attributes": {
        "tag": "beats",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78161",
      "attributes": {
        "tag": "beginner",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78162",
      "attributes": {
        "tag": "groove",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78163",
      "attributes": {
        "tag": "note values",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78164",
      "attributes": {
        "tag": "1",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78165",
      "attributes": {
        "tag": "Play Along",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78166",
      "attributes": {
        "tag": "fill",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78167",
      "attributes": {
        "tag": "beat",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78168",
      "attributes": {
        "tag": "grooves",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78169",
      "attributes": {
        "tag": "notes",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78170",
      "attributes": {
        "tag": "quarter",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "78171",
      "attributes": {
        "tag": "play-alongs",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "78172",
      "attributes": {
        "tag": "value",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "78173",
      "attributes": {
        "tag": "1/4",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "78174",
      "attributes": {
        "tag": "alongs",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "78175",
      "attributes": {
        "tag": "rest",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "78176",
      "attributes": {
        "tag": "rests",
        "position": 19
      }
    },
    {
      "type": "contentData",
      "id": "2562",
      "attributes": {
        "key": "description",
        "value": "Mike Michalkow will teach you everything you need to know about eighth notes. He'll explain what they are, how to count them, and how to apply them to the drum-set!",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12277",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/253436-card-thumbnail-maxres-1588938049.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41594",
      "attributes": {
        "key": "resource_name",
        "value": "Course Resources Pack",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41595",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/resource-files/dcb-03-eighth-notes.zip",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41596",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41597",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/pdf/dcb-03.pdf",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7016",
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
      "id": "5937",
      "attributes": {
        "topic": "Note Values & Theory",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78084",
      "attributes": {
        "tag": "mike michalkow",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78085",
      "attributes": {
        "tag": "fills",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78086",
      "attributes": {
        "tag": "beats",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78087",
      "attributes": {
        "tag": "beginner",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78088",
      "attributes": {
        "tag": "groove",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78089",
      "attributes": {
        "tag": "note values",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78090",
      "attributes": {
        "tag": "1",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78091",
      "attributes": {
        "tag": "Play Along",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78092",
      "attributes": {
        "tag": "fill",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78093",
      "attributes": {
        "tag": "beat",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78094",
      "attributes": {
        "tag": "grooves",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78095",
      "attributes": {
        "tag": "notes",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78096",
      "attributes": {
        "tag": "8th",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "78097",
      "attributes": {
        "tag": "eighth",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "78098",
      "attributes": {
        "tag": "play-alongs",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "78099",
      "attributes": {
        "tag": "value",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "78100",
      "attributes": {
        "tag": "along",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "78101",
      "attributes": {
        "tag": "rest",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "78102",
      "attributes": {
        "tag": "rests",
        "position": 19
      }
    },
    {
      "type": "contentData",
      "id": "2561",
      "attributes": {
        "key": "description",
        "value": "In this course, you'll learn about eighth note triplets. Mike Michalkow will explain what they are, how to count them, and how to apply them to the drum-set!",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12291",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/252408-card-thumbnail-maxres-1587462592.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41590",
      "attributes": {
        "key": "resource_name",
        "value": "Course Resources Pack",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41591",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/resource-files/dcb-04-eighth-note-triplets.zip",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41592",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41593",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/pdf/dcb-04.pdf",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7015",
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
      "id": "5936",
      "attributes": {
        "topic": "Note Values & Theory",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78010",
      "attributes": {
        "tag": "mike michalkow",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "78011",
      "attributes": {
        "tag": "fills",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "78012",
      "attributes": {
        "tag": "beats",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "78013",
      "attributes": {
        "tag": "beginner",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "78014",
      "attributes": {
        "tag": "groove",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "78015",
      "attributes": {
        "tag": "note values",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "78016",
      "attributes": {
        "tag": "2",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "78017",
      "attributes": {
        "tag": "Play Along",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "78018",
      "attributes": {
        "tag": "fill",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "78019",
      "attributes": {
        "tag": "beat",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "78020",
      "attributes": {
        "tag": "grooves",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "78021",
      "attributes": {
        "tag": "triplet",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "78022",
      "attributes": {
        "tag": "triplets",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "78023",
      "attributes": {
        "tag": "notes",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "78024",
      "attributes": {
        "tag": "8th",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "78025",
      "attributes": {
        "tag": "eighth",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "78026",
      "attributes": {
        "tag": "play-alongs",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "78027",
      "attributes": {
        "tag": "value",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "78028",
      "attributes": {
        "tag": "along",
        "position": 19
      }
    },
    {
      "type": "tag",
      "id": "78029",
      "attributes": {
        "tag": "rest",
        "position": 20
      }
    },
    {
      "type": "tag",
      "id": "78030",
      "attributes": {
        "tag": "rests",
        "position": 21
      }
    },
    {
      "type": "contentData",
      "id": "2560",
      "attributes": {
        "key": "description",
        "value": "Mike Michalkow will teach you everything you need to know about sixteenth notes. He'll explain what they are, how to count them, and how to apply them to the drum-set!",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12355",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/248515-card-thumbnail-maxres-1586512450.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41586",
      "attributes": {
        "key": "resource_name",
        "value": "Course Resources Pack",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41587",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/resource-files/dcb-05-sixteenth-notes.zip",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41588",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41589",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/pdf/dcb-05.pdf",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6999",
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
      "id": "5919",
      "attributes": {
        "topic": "Note Values & Theory",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "77759",
      "attributes": {
        "tag": "mike michalkow",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "77760",
      "attributes": {
        "tag": "fills",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "77761",
      "attributes": {
        "tag": "beats",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "77762",
      "attributes": {
        "tag": "beginner",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "77763",
      "attributes": {
        "tag": "groove",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "77764",
      "attributes": {
        "tag": "note values",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "77765",
      "attributes": {
        "tag": "2",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "77766",
      "attributes": {
        "tag": "Play Along",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "77767",
      "attributes": {
        "tag": "fill",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "77768",
      "attributes": {
        "tag": "beat",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "77769",
      "attributes": {
        "tag": "grooves",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "77770",
      "attributes": {
        "tag": "notes",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "77771",
      "attributes": {
        "tag": "16th",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "77772",
      "attributes": {
        "tag": "sixteenth",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "77773",
      "attributes": {
        "tag": "value",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "77774",
      "attributes": {
        "tag": "alongs",
        "position": 16
      }
    },
    {
      "type": "contentData",
      "id": "2559",
      "attributes": {
        "key": "description",
        "value": "This course will teach you everything you need to know about sixteenth note triplets. Mike Michalkow will explain what they are, how to count them, and how to apply them to the drum-set!",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12393",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/247394-card-thumbnail-maxres-1585244358.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41582",
      "attributes": {
        "key": "resource_name",
        "value": "Course Resources Pack",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41583",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/resource-files/dci-42-sixteenth-note-triplets.zip",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41584",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41585",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/pdf/dci-42.pdf",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6990",
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
      "id": "5906",
      "attributes": {
        "topic": "Note Values & Theory",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "77601",
      "attributes": {
        "tag": "mike michalkow",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "77602",
      "attributes": {
        "tag": "fills",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "77603",
      "attributes": {
        "tag": "beats",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "77604",
      "attributes": {
        "tag": "intermediate",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "77605",
      "attributes": {
        "tag": "groove",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "77606",
      "attributes": {
        "tag": "note values",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "77607",
      "attributes": {
        "tag": "4",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "77608",
      "attributes": {
        "tag": "Play Along",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "77609",
      "attributes": {
        "tag": "fill",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "77610",
      "attributes": {
        "tag": "beat",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "77611",
      "attributes": {
        "tag": "grooves",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "77612",
      "attributes": {
        "tag": "triplet",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "77613",
      "attributes": {
        "tag": "triplets",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "77614",
      "attributes": {
        "tag": "notes",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "77615",
      "attributes": {
        "tag": "16th",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "77616",
      "attributes": {
        "tag": "sixteenth",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "77617",
      "attributes": {
        "tag": "note",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "77618",
      "attributes": {
        "tag": "play-alongs",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "77619",
      "attributes": {
        "tag": "value",
        "position": 19
      }
    },
    {
      "type": "tag",
      "id": "77620",
      "attributes": {
        "tag": "sextuplet",
        "position": 20
      }
    },
    {
      "type": "tag",
      "id": "77621",
      "attributes": {
        "tag": "sextuplets",
        "position": 21
      }
    },
    {
      "type": "tag",
      "id": "77622",
      "attributes": {
        "tag": "along",
        "position": 22
      }
    },
    {
      "type": "contentData",
      "id": "2558",
      "attributes": {
        "key": "description",
        "value": "Mike Michalkow will teach you everything you need to know about 32nd notes. He'll explain what they are, how to count them, and how to apply them to the drum-set!",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12406",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/247400-card-thumbnail-maxres-1584796503.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41578",
      "attributes": {
        "key": "resource_name",
        "value": "Course Resources Pack",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41579",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/resource-files/dci-43-32nd-notes.zip",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41580",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41581",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/pdf/dci-43.pdf",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6989",
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
      "id": "5905",
      "attributes": {
        "topic": "Note Values & Theory",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "77507",
      "attributes": {
        "tag": "mike michalkow",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "77508",
      "attributes": {
        "tag": "fills",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "77509",
      "attributes": {
        "tag": "beats",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "77510",
      "attributes": {
        "tag": "intermediate",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "77511",
      "attributes": {
        "tag": "note values",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "77512",
      "attributes": {
        "tag": "4",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "77513",
      "attributes": {
        "tag": "Play Along",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "77514",
      "attributes": {
        "tag": "fill",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "77515",
      "attributes": {
        "tag": "beat",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "77516",
      "attributes": {
        "tag": "grooves",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "77517",
      "attributes": {
        "tag": "notes",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "77518",
      "attributes": {
        "tag": "subdivision",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "77519",
      "attributes": {
        "tag": "subdivisions",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "77520",
      "attributes": {
        "tag": "32",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "77521",
      "attributes": {
        "tag": "32nd",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "77522",
      "attributes": {
        "tag": "play-alongs",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "77523",
      "attributes": {
        "tag": "value",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "77524",
      "attributes": {
        "tag": "alongs",
        "position": 18
      }
    },
    {
      "type": "contentData",
      "id": "2557",
      "attributes": {
        "key": "description",
        "value": "Mike Michalkow will teach you everything you need to know about quarter note triplets. He'll explain what they are, how to count them, and how to apply them to the drum-set!",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12444",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/247388-card-thumbnail-maxres-1583922555.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41574",
      "attributes": {
        "key": "resource_name",
        "value": "Course Resources Pack",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41575",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/resource-files/dci-44-quarter-note-triplets.zip",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41576",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41577",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/pdf/dci-44.pdf",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6981",
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
      "id": "5892",
      "attributes": {
        "topic": "Note Values & Theory",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "77352",
      "attributes": {
        "tag": "mike michalkow",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "77353",
      "attributes": {
        "tag": "fills",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "77354",
      "attributes": {
        "tag": "beats",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "77355",
      "attributes": {
        "tag": "intermediate",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "77356",
      "attributes": {
        "tag": "groove",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "77357",
      "attributes": {
        "tag": "note values",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "77358",
      "attributes": {
        "tag": "5",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "77359",
      "attributes": {
        "tag": "Play Along",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "77360",
      "attributes": {
        "tag": "fill",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "77361",
      "attributes": {
        "tag": "beat",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "77362",
      "attributes": {
        "tag": "grooves",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "77363",
      "attributes": {
        "tag": "triplet",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "77364",
      "attributes": {
        "tag": "triplets",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "77365",
      "attributes": {
        "tag": "notes",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "77366",
      "attributes": {
        "tag": "note",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "77367",
      "attributes": {
        "tag": "quarter",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "77368",
      "attributes": {
        "tag": "subdivisions",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "77369",
      "attributes": {
        "tag": "play-alongs",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "77370",
      "attributes": {
        "tag": "alongs",
        "position": 19
      }
    },
    {
      "type": "tag",
      "id": "77371",
      "attributes": {
        "tag": "1/4 subdivision",
        "position": 20
      }
    },
    {
      "type": "contentData",
      "id": "2422",
      "attributes": {
        "key": "description",
        "value": "If you've just started drumming, make sure you watch this course! You'll learn how to set up your drum-set, hold your drumsticks, play your first beat, and much more!",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12476",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/245316-card-thumbnail-maxres-1582920532.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41570",
      "attributes": {
        "key": "resource_name",
        "value": "Course Resources Pack",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41571",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/resource-files/dcb-01-getting-started-on-drums.zip",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41572",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41573",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/pdf/dcb-01.pdf",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6975",
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
      "id": "5878",
      "attributes": {
        "topic": "Getting Started",
        "position": 2
      }
    },
    {
      "type": "topic",
      "id": "5879",
      "attributes": {
        "topic": "General",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "77162",
      "attributes": {
        "tag": "use",
        "position": 28
      }
    },
    {
      "type": "tag",
      "id": "77163",
      "attributes": {
        "tag": "play-alongs",
        "position": 29
      }
    },
    {
      "type": "tag",
      "id": "77164",
      "attributes": {
        "tag": "practice",
        "position": 30
      }
    },
    {
      "type": "tag",
      "id": "77165",
      "attributes": {
        "tag": "up",
        "position": 31
      }
    },
    {
      "type": "tag",
      "id": "77166",
      "attributes": {
        "tag": "tune",
        "position": 32
      }
    },
    {
      "type": "tag",
      "id": "77167",
      "attributes": {
        "tag": "count",
        "position": 33
      }
    },
    {
      "type": "tag",
      "id": "77168",
      "attributes": {
        "tag": "counting",
        "position": 34
      }
    },
    {
      "type": "tag",
      "id": "77169",
      "attributes": {
        "tag": "set",
        "position": 35
      }
    },
    {
      "type": "tag",
      "id": "77170",
      "attributes": {
        "tag": "setting",
        "position": 36
      }
    },
    {
      "type": "tag",
      "id": "77171",
      "attributes": {
        "tag": "hold",
        "position": 37
      }
    },
    {
      "type": "tag",
      "id": "77172",
      "attributes": {
        "tag": "schedule",
        "position": 38
      }
    },
    {
      "type": "tag",
      "id": "77173",
      "attributes": {
        "tag": "alongs",
        "position": 39
      }
    },
    {
      "type": "tag",
      "id": "77174",
      "attributes": {
        "tag": "click",
        "position": 40
      }
    },
    {
      "type": "tag",
      "id": "77175",
      "attributes": {
        "tag": "holding",
        "position": 41
      }
    },
    {
      "type": "tag",
      "id": "77176",
      "attributes": {
        "tag": "notation",
        "position": 42
      }
    },
    {
      "type": "tag",
      "id": "77177",
      "attributes": {
        "tag": "sheet music",
        "position": 43
      }
    },
    {
      "type": "tag",
      "id": "77178",
      "attributes": {
        "tag": "read",
        "position": 44
      }
    },
    {
      "type": "tag",
      "id": "77179",
      "attributes": {
        "tag": "first beat",
        "position": 45
      }
    },
    {
      "type": "tag",
      "id": "77180",
      "attributes": {
        "tag": "practicing routine",
        "position": 46
      }
    },
    {
      "type": "tag",
      "id": "77181",
      "attributes": {
        "tag": "plan",
        "position": 47
      }
    },
    {
      "type": "tag",
      "id": "77182",
      "attributes": {
        "tag": "fills",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "77183",
      "attributes": {
        "tag": "beats",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "77184",
      "attributes": {
        "tag": "tuning",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "77185",
      "attributes": {
        "tag": "jared falk",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "77186",
      "attributes": {
        "tag": "beginner",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "77187",
      "attributes": {
        "tag": "getting started",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "77188",
      "attributes": {
        "tag": "groove",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "77189",
      "attributes": {
        "tag": "1",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "77190",
      "attributes": {
        "tag": "Play Along",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "77191",
      "attributes": {
        "tag": "fill",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "77192",
      "attributes": {
        "tag": "grooves",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "77193",
      "attributes": {
        "tag": "set up",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "77194",
      "attributes": {
        "tag": "how to",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "77195",
      "attributes": {
        "tag": "using",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "77196",
      "attributes": {
        "tag": "play",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "77197",
      "attributes": {
        "tag": "song",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "77198",
      "attributes": {
        "tag": "metronome",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "77199",
      "attributes": {
        "tag": "reading",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "77200",
      "attributes": {
        "tag": "basic",
        "position": 19
      }
    },
    {
      "type": "tag",
      "id": "77201",
      "attributes": {
        "tag": "develop",
        "position": 20
      }
    },
    {
      "type": "tag",
      "id": "77202",
      "attributes": {
        "tag": "developing",
        "position": 21
      }
    },
    {
      "type": "tag",
      "id": "77203",
      "attributes": {
        "tag": "new",
        "position": 22
      }
    },
    {
      "type": "tag",
      "id": "77204",
      "attributes": {
        "tag": "setup",
        "position": 23
      }
    },
    {
      "type": "tag",
      "id": "77205",
      "attributes": {
        "tag": "playing",
        "position": 24
      }
    },
    {
      "type": "tag",
      "id": "77206",
      "attributes": {
        "tag": "drum",
        "position": 25
      }
    },
    {
      "type": "tag",
      "id": "77207",
      "attributes": {
        "tag": "drumsticks",
        "position": 26
      }
    },
    {
      "type": "tag",
      "id": "77208",
      "attributes": {
        "tag": "sticks",
        "position": 27
      }
    },
    {
      "type": "parent",
      "id": "2767",
      "attributes": {
        "child_position": 1
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
      "id": "2421",
      "attributes": {
        "key": "description",
        "value": "This course will dive into the essentials of gospel drumming. Larnell Lewis will teach you some popular gospel drum grooves, how to apply rudiments to gospel music, how to utilize different sounds, and more!",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12521",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/243774-card-thumbnail-maxres-1581066628.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41566",
      "attributes": {
        "key": "resource_name",
        "value": "Course Resources Pack",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41567",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/resource-files/dci-41-gospel-drumming.zip",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41568",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41569",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/pdf/dci-41.pdf",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6965",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31895"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "5869",
      "attributes": {
        "topic": "Gospel",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "76908",
      "attributes": {
        "tag": "creative",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "76909",
      "attributes": {
        "tag": "creativity",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "76910",
      "attributes": {
        "tag": "beat",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "76911",
      "attributes": {
        "tag": "rudiment",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "76912",
      "attributes": {
        "tag": "grooves",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "76913",
      "attributes": {
        "tag": "tom",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "76914",
      "attributes": {
        "tag": "toms",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "76915",
      "attributes": {
        "tag": "should know",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "76916",
      "attributes": {
        "tag": "must know",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "76917",
      "attributes": {
        "tag": "dynamic",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "76918",
      "attributes": {
        "tag": "drumming",
        "position": 19
      }
    },
    {
      "type": "tag",
      "id": "76919",
      "attributes": {
        "tag": "limb",
        "position": 20
      }
    },
    {
      "type": "tag",
      "id": "76920",
      "attributes": {
        "tag": "church",
        "position": 21
      }
    },
    {
      "type": "tag",
      "id": "76921",
      "attributes": {
        "tag": "control",
        "position": 22
      }
    },
    {
      "type": "tag",
      "id": "76922",
      "attributes": {
        "tag": "sounds",
        "position": 23
      }
    },
    {
      "type": "tag",
      "id": "76923",
      "attributes": {
        "tag": "sound",
        "position": 24
      }
    },
    {
      "type": "tag",
      "id": "76924",
      "attributes": {
        "tag": "snarky puppy",
        "position": 25
      }
    },
    {
      "type": "tag",
      "id": "76925",
      "attributes": {
        "tag": "loops",
        "position": 26
      }
    },
    {
      "type": "tag",
      "id": "76926",
      "attributes": {
        "tag": "rudiments",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "76927",
      "attributes": {
        "tag": "beats",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "76928",
      "attributes": {
        "tag": "intermediate",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "76929",
      "attributes": {
        "tag": "larnell lewis",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "76930",
      "attributes": {
        "tag": "groove",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "76931",
      "attributes": {
        "tag": "gospel",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "76932",
      "attributes": {
        "tag": "5",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "76933",
      "attributes": {
        "tag": "dynamics",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "2420",
      "attributes": {
        "key": "description",
        "value": "Jared Falk will teach you how to play 20 different rock drum beats in this course. You'll be able to apply these to a play-along track at the end of the course as well!",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12565",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/242587-card-thumbnail-maxres-1579892057.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41562",
      "attributes": {
        "key": "resource_name",
        "value": "Course Resources Pack",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41563",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/resource-files/dcb-06-rock-drum-beats.zip",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41564",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41565",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/pdf/dcb-06.pdf",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6954",
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
      "id": "5852",
      "attributes": {
        "topic": "Rock",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "76654",
      "attributes": {
        "tag": "groove",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "76655",
      "attributes": {
        "tag": "2",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "76656",
      "attributes": {
        "tag": "Play Along",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "76657",
      "attributes": {
        "tag": "beat",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "76658",
      "attributes": {
        "tag": "grooves",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "76659",
      "attributes": {
        "tag": "notes",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "76660",
      "attributes": {
        "tag": "basic",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "76661",
      "attributes": {
        "tag": "16th",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "76662",
      "attributes": {
        "tag": "8th",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "76663",
      "attributes": {
        "tag": "sixteenth",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "76664",
      "attributes": {
        "tag": "eighth",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "76665",
      "attributes": {
        "tag": "note",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "76666",
      "attributes": {
        "tag": "easy",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "76667",
      "attributes": {
        "tag": "essential",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "76668",
      "attributes": {
        "tag": "simple",
        "position": 19
      }
    },
    {
      "type": "tag",
      "id": "76669",
      "attributes": {
        "tag": "alongs",
        "position": 20
      }
    },
    {
      "type": "tag",
      "id": "76670",
      "attributes": {
        "tag": "beats",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "76671",
      "attributes": {
        "tag": "jared falk",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "76672",
      "attributes": {
        "tag": "beginner",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "76673",
      "attributes": {
        "tag": "rock",
        "position": 4
      }
    },
    {
      "type": "parent",
      "id": "2782",
      "attributes": {
        "child_position": 1
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "28163"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "2419",
      "attributes": {
        "key": "description",
        "value": "John Blackwell will show you his method for developing groove. He will cover important topics like playing with a metronome, playing to music, bass drum technique, and more!",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12639",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/241114-card-thumbnail-maxres-1578499902.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6935",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31897"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "5819",
      "attributes": {
        "topic": "Musical Drumming",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "76333",
      "attributes": {
        "tag": "bass drum",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "76334",
      "attributes": {
        "tag": "intermediate",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "76335",
      "attributes": {
        "tag": "john blackwell",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "76336",
      "attributes": {
        "tag": "groove",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "76337",
      "attributes": {
        "tag": "5",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "76338",
      "attributes": {
        "tag": "technique",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "76339",
      "attributes": {
        "tag": "Techniques",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "76340",
      "attributes": {
        "tag": "grooves",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "76341",
      "attributes": {
        "tag": "kick-drum",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "76342",
      "attributes": {
        "tag": "play",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "76343",
      "attributes": {
        "tag": "building",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "76344",
      "attributes": {
        "tag": "metronome",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "76345",
      "attributes": {
        "tag": "kick",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "76346",
      "attributes": {
        "tag": "playing",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "76347",
      "attributes": {
        "tag": "build",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "76348",
      "attributes": {
        "tag": "songs",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "76349",
      "attributes": {
        "tag": "simple",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "76350",
      "attributes": {
        "tag": "click",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "76351",
      "attributes": {
        "tag": "prince",
        "position": 19
      }
    },
    {
      "type": "tag",
      "id": "76352",
      "attributes": {
        "tag": "jr",
        "position": 20
      }
    },
    {
      "type": "tag",
      "id": "76353",
      "attributes": {
        "tag": "sweet",
        "position": 21
      }
    },
    {
      "type": "tag",
      "id": "76354",
      "attributes": {
        "tag": "music",
        "position": 22
      }
    },
    {
      "type": "tag",
      "id": "76355",
      "attributes": {
        "tag": "track",
        "position": 23
      }
    },
    {
      "type": "parent",
      "id": "2827",
      "attributes": {
        "child_position": 1
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
      "id": "2418",
      "attributes": {
        "key": "description",
        "value": "Jared Falk will teach you how to play 20 different rock drum fills in this course. You'll be able to apply these to a play-along track at the end of the course as well!",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12647",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/240154-card-thumbnail-maxres-1576666732.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41558",
      "attributes": {
        "key": "resource_name",
        "value": "Course Resources Pack",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41559",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/resource-files/dcb-07-rock-drum-fills.zip",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41560",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41561",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/pdf/dcb-07.pdf",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6934",
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
      "id": "5818",
      "attributes": {
        "topic": "Rock",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "76240",
      "attributes": {
        "tag": "fills",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "76241",
      "attributes": {
        "tag": "jared falk",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "76242",
      "attributes": {
        "tag": "beginner",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "76243",
      "attributes": {
        "tag": "rock",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "76244",
      "attributes": {
        "tag": "3",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "76245",
      "attributes": {
        "tag": "Play Along",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "76246",
      "attributes": {
        "tag": "fill",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "76247",
      "attributes": {
        "tag": "notes",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "76248",
      "attributes": {
        "tag": "basic",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "76249",
      "attributes": {
        "tag": "four",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "76250",
      "attributes": {
        "tag": "16th",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "76251",
      "attributes": {
        "tag": "8th",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "76252",
      "attributes": {
        "tag": "sixteenth",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "76253",
      "attributes": {
        "tag": "eighth",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "76254",
      "attributes": {
        "tag": "note",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "76255",
      "attributes": {
        "tag": "easy",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "76256",
      "attributes": {
        "tag": "two beat",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "76257",
      "attributes": {
        "tag": "simple",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "76258",
      "attributes": {
        "tag": "alongs",
        "position": 19
      }
    },
    {
      "type": "parent",
      "id": "2783",
      "attributes": {
        "child_position": 2
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "28163"
          }
        }
      }
    },
    {
      "type": "parent",
      "id": "2795",
      "attributes": {
        "child_position": 1
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
      "id": "2417",
      "attributes": {
        "key": "description",
        "value": "This course will teach you how to incorporate dynamics into your playing. Dave Atkinson will cover topics including cross-sticking, ghost notes, accenting, and dynamic awareness!",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "12685",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/240163-card-thumbnail-maxres-1576750504.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41554",
      "attributes": {
        "key": "resource_name",
        "value": "Course Resources Pack",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41555",
      "attributes": {
        "key": "resource_url",
        "value": "https://drumeo.s3.amazonaws.com/courses/resource-files/dcb-08-developing-dynamics.zip",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "41556",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "41557",
      "attributes": {
        "key": "resource_url",
        "value": "//drumeo.s3.amazonaws.com/courses/pdf/dcb-08.pdf",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "6926",
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
      "id": "5807",
      "attributes": {
        "topic": "Dynamics",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "76064",
      "attributes": {
        "tag": "dave atkinson",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "76065",
      "attributes": {
        "tag": "beginner",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "76066",
      "attributes": {
        "tag": "2",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "76067",
      "attributes": {
        "tag": "dynamics",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "76068",
      "attributes": {
        "tag": "technique",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "76069",
      "attributes": {
        "tag": "Techniques",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "76070",
      "attributes": {
        "tag": "sticking",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "76071",
      "attributes": {
        "tag": "ghosting",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "76072",
      "attributes": {
        "tag": "ghost note",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "76073",
      "attributes": {
        "tag": "notes",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "76074",
      "attributes": {
        "tag": "cross stick",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "76075",
      "attributes": {
        "tag": "develop",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "76076",
      "attributes": {
        "tag": "developing",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "76077",
      "attributes": {
        "tag": "dynamic",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "76078",
      "attributes": {
        "tag": "accent",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "76079",
      "attributes": {
        "tag": "accents",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "76080",
      "attributes": {
        "tag": "cross-sticking",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "76081",
      "attributes": {
        "tag": "accenting",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "76082",
      "attributes": {
        "tag": "aware",
        "position": 19
      }
    },
    {
      "type": "tag",
      "id": "76083",
      "attributes": {
        "tag": "awareness",
        "position": 20
      }
    }
  ],
  "meta": {
    "filterOptions": {
      "topic": [
        "beats",
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
    "activeFilters": {
      "content_type": [
        "course"
      ]
    },
    "pagination": {
      "total": 227,
      "count": 20,
      "per_page": "20",
      "current_page": "1",
      "total_pages": 12
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
