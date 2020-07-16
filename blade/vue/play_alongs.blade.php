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
      "id": "2436",
      "attributes": {
        "slug": "01-5-stroke-rolls",
        "type": "pack-bundle-lesson",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2012-01-10 09:49:43",
        "archivedOn": null,
        "createdOn": "2012-01-10 09:49:43",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 2436,
        "qnaVideo": null,
        "style": null,
        "title": "5 Stroke Rolls",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": "CD 4 - Track 166-181",
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": "Page 125",
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
              "id": "3853"
            },
            {
              "type": "contentData",
              "id": "8112"
            },
            {
              "type": "contentData",
              "id": "8113"
            },
            {
              "type": "contentData",
              "id": "8114"
            },
            {
              "type": "contentData",
              "id": "8115"
            },
            {
              "type": "contentData",
              "id": "8116"
            },
            {
              "type": "contentData",
              "id": "8117"
            },
            {
              "type": "contentData",
              "id": "8118"
            },
            {
              "type": "contentData",
              "id": "8119"
            },
            {
              "type": "contentData",
              "id": "8120"
            },
            {
              "type": "contentData",
              "id": "8121"
            },
            {
              "type": "contentData",
              "id": "8122"
            },
            {
              "type": "contentData",
              "id": "8123"
            },
            {
              "type": "contentData",
              "id": "8124"
            },
            {
              "type": "contentData",
              "id": "8125"
            },
            {
              "type": "contentData",
              "id": "8126"
            },
            {
              "type": "contentData",
              "id": "8127"
            },
            {
              "type": "contentData",
              "id": "8128"
            },
            {
              "type": "contentData",
              "id": "8129"
            },
            {
              "type": "contentData",
              "id": "8130"
            },
            {
              "type": "contentData",
              "id": "8131"
            },
            {
              "type": "contentData",
              "id": "8132"
            },
            {
              "type": "contentData",
              "id": "8133"
            },
            {
              "type": "contentData",
              "id": "8134"
            },
            {
              "type": "contentData",
              "id": "8135"
            },
            {
              "type": "contentData",
              "id": "8136"
            },
            {
              "type": "contentData",
              "id": "57000"
            },
            {
              "type": "contentData",
              "id": "57001"
            },
            {
              "type": "contentData",
              "id": "73878"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "85807"
            },
            {
              "type": "tag",
              "id": "85808"
            },
            {
              "type": "tag",
              "id": "85809"
            },
            {
              "type": "tag",
              "id": "85810"
            },
            {
              "type": "tag",
              "id": "85811"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "1442"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "2438",
      "attributes": {
        "slug": "02-6-stroke-rolls",
        "type": "pack-bundle-lesson",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2012-01-10 09:51:22",
        "archivedOn": null,
        "createdOn": "2012-01-10 09:51:22",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 2438,
        "qnaVideo": null,
        "style": null,
        "title": "6 Stroke Rolls",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": "CD 4 - Track 182-197",
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": "Page 126",
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
              "id": "3854"
            },
            {
              "type": "contentData",
              "id": "8138"
            },
            {
              "type": "contentData",
              "id": "8139"
            },
            {
              "type": "contentData",
              "id": "8140"
            },
            {
              "type": "contentData",
              "id": "8141"
            },
            {
              "type": "contentData",
              "id": "8142"
            },
            {
              "type": "contentData",
              "id": "8143"
            },
            {
              "type": "contentData",
              "id": "8144"
            },
            {
              "type": "contentData",
              "id": "8145"
            },
            {
              "type": "contentData",
              "id": "8146"
            },
            {
              "type": "contentData",
              "id": "8147"
            },
            {
              "type": "contentData",
              "id": "8148"
            },
            {
              "type": "contentData",
              "id": "8149"
            },
            {
              "type": "contentData",
              "id": "8150"
            },
            {
              "type": "contentData",
              "id": "8151"
            },
            {
              "type": "contentData",
              "id": "8152"
            },
            {
              "type": "contentData",
              "id": "8153"
            },
            {
              "type": "contentData",
              "id": "8154"
            },
            {
              "type": "contentData",
              "id": "8155"
            },
            {
              "type": "contentData",
              "id": "8156"
            },
            {
              "type": "contentData",
              "id": "8157"
            },
            {
              "type": "contentData",
              "id": "8158"
            },
            {
              "type": "contentData",
              "id": "8159"
            },
            {
              "type": "contentData",
              "id": "8160"
            },
            {
              "type": "contentData",
              "id": "8161"
            },
            {
              "type": "contentData",
              "id": "8162"
            },
            {
              "type": "contentData",
              "id": "56998"
            },
            {
              "type": "contentData",
              "id": "56999"
            },
            {
              "type": "contentData",
              "id": "73877"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "85802"
            },
            {
              "type": "tag",
              "id": "85803"
            },
            {
              "type": "tag",
              "id": "85804"
            },
            {
              "type": "tag",
              "id": "85805"
            },
            {
              "type": "tag",
              "id": "85806"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "1443"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "2441",
      "attributes": {
        "slug": "03-7-stroke-rolls",
        "type": "pack-bundle-lesson",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2012-01-10 09:52:50",
        "archivedOn": null,
        "createdOn": "2012-01-10 09:52:50",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 2441,
        "qnaVideo": null,
        "style": null,
        "title": "7 Stroke Rolls",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": "CD 4 - Track 198-213",
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": "Page 127",
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
              "id": "3855"
            },
            {
              "type": "contentData",
              "id": "8164"
            },
            {
              "type": "contentData",
              "id": "8165"
            },
            {
              "type": "contentData",
              "id": "8166"
            },
            {
              "type": "contentData",
              "id": "8167"
            },
            {
              "type": "contentData",
              "id": "8168"
            },
            {
              "type": "contentData",
              "id": "8169"
            },
            {
              "type": "contentData",
              "id": "8170"
            },
            {
              "type": "contentData",
              "id": "8171"
            },
            {
              "type": "contentData",
              "id": "8172"
            },
            {
              "type": "contentData",
              "id": "8173"
            },
            {
              "type": "contentData",
              "id": "8174"
            },
            {
              "type": "contentData",
              "id": "8175"
            },
            {
              "type": "contentData",
              "id": "8176"
            },
            {
              "type": "contentData",
              "id": "8177"
            },
            {
              "type": "contentData",
              "id": "8178"
            },
            {
              "type": "contentData",
              "id": "8179"
            },
            {
              "type": "contentData",
              "id": "8180"
            },
            {
              "type": "contentData",
              "id": "8181"
            },
            {
              "type": "contentData",
              "id": "8182"
            },
            {
              "type": "contentData",
              "id": "8183"
            },
            {
              "type": "contentData",
              "id": "8184"
            },
            {
              "type": "contentData",
              "id": "8185"
            },
            {
              "type": "contentData",
              "id": "8186"
            },
            {
              "type": "contentData",
              "id": "8187"
            },
            {
              "type": "contentData",
              "id": "8188"
            },
            {
              "type": "contentData",
              "id": "56996"
            },
            {
              "type": "contentData",
              "id": "56997"
            },
            {
              "type": "contentData",
              "id": "73876"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "85797"
            },
            {
              "type": "tag",
              "id": "85798"
            },
            {
              "type": "tag",
              "id": "85799"
            },
            {
              "type": "tag",
              "id": "85800"
            },
            {
              "type": "tag",
              "id": "85801"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "1444"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "2444",
      "attributes": {
        "slug": "04-9-stroke-rolls",
        "type": "pack-bundle-lesson",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2012-01-10 09:54:23",
        "archivedOn": null,
        "createdOn": "2012-01-10 09:54:23",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 2444,
        "qnaVideo": null,
        "style": null,
        "title": "9 Stroke Rolls",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": "CD 4 - Track 214-227",
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": "Page 128",
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
              "id": "3856"
            },
            {
              "type": "contentData",
              "id": "8190"
            },
            {
              "type": "contentData",
              "id": "8191"
            },
            {
              "type": "contentData",
              "id": "8192"
            },
            {
              "type": "contentData",
              "id": "8193"
            },
            {
              "type": "contentData",
              "id": "8194"
            },
            {
              "type": "contentData",
              "id": "8195"
            },
            {
              "type": "contentData",
              "id": "8196"
            },
            {
              "type": "contentData",
              "id": "8197"
            },
            {
              "type": "contentData",
              "id": "8198"
            },
            {
              "type": "contentData",
              "id": "8199"
            },
            {
              "type": "contentData",
              "id": "8200"
            },
            {
              "type": "contentData",
              "id": "8201"
            },
            {
              "type": "contentData",
              "id": "8202"
            },
            {
              "type": "contentData",
              "id": "8203"
            },
            {
              "type": "contentData",
              "id": "8204"
            },
            {
              "type": "contentData",
              "id": "8205"
            },
            {
              "type": "contentData",
              "id": "8206"
            },
            {
              "type": "contentData",
              "id": "8207"
            },
            {
              "type": "contentData",
              "id": "8208"
            },
            {
              "type": "contentData",
              "id": "8209"
            },
            {
              "type": "contentData",
              "id": "8210"
            },
            {
              "type": "contentData",
              "id": "8211"
            },
            {
              "type": "contentData",
              "id": "56994"
            },
            {
              "type": "contentData",
              "id": "56995"
            },
            {
              "type": "contentData",
              "id": "73875"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "85792"
            },
            {
              "type": "tag",
              "id": "85793"
            },
            {
              "type": "tag",
              "id": "85794"
            },
            {
              "type": "tag",
              "id": "85795"
            },
            {
              "type": "tag",
              "id": "85796"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "1445"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "2447",
      "attributes": {
        "slug": "05-11-stroke-rolls",
        "type": "pack-bundle-lesson",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2012-01-10 09:56:17",
        "archivedOn": null,
        "createdOn": "2012-01-10 09:56:17",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 2447,
        "qnaVideo": null,
        "style": null,
        "title": "11 Stroke Rolls",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": "CD 4 - Track 228-243",
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": "Page 129",
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
              "id": "3857"
            },
            {
              "type": "contentData",
              "id": "8213"
            },
            {
              "type": "contentData",
              "id": "8214"
            },
            {
              "type": "contentData",
              "id": "8215"
            },
            {
              "type": "contentData",
              "id": "8216"
            },
            {
              "type": "contentData",
              "id": "8217"
            },
            {
              "type": "contentData",
              "id": "8218"
            },
            {
              "type": "contentData",
              "id": "8219"
            },
            {
              "type": "contentData",
              "id": "8220"
            },
            {
              "type": "contentData",
              "id": "8221"
            },
            {
              "type": "contentData",
              "id": "8222"
            },
            {
              "type": "contentData",
              "id": "8223"
            },
            {
              "type": "contentData",
              "id": "8224"
            },
            {
              "type": "contentData",
              "id": "8225"
            },
            {
              "type": "contentData",
              "id": "8226"
            },
            {
              "type": "contentData",
              "id": "8227"
            },
            {
              "type": "contentData",
              "id": "8228"
            },
            {
              "type": "contentData",
              "id": "8229"
            },
            {
              "type": "contentData",
              "id": "8230"
            },
            {
              "type": "contentData",
              "id": "8231"
            },
            {
              "type": "contentData",
              "id": "8232"
            },
            {
              "type": "contentData",
              "id": "8233"
            },
            {
              "type": "contentData",
              "id": "8234"
            },
            {
              "type": "contentData",
              "id": "8235"
            },
            {
              "type": "contentData",
              "id": "8236"
            },
            {
              "type": "contentData",
              "id": "8237"
            },
            {
              "type": "contentData",
              "id": "56992"
            },
            {
              "type": "contentData",
              "id": "56993"
            },
            {
              "type": "contentData",
              "id": "73874"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "85787"
            },
            {
              "type": "tag",
              "id": "85788"
            },
            {
              "type": "tag",
              "id": "85789"
            },
            {
              "type": "tag",
              "id": "85790"
            },
            {
              "type": "tag",
              "id": "85791"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "1446"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "2450",
      "attributes": {
        "slug": "06-swiss-army-triplets",
        "type": "pack-bundle-lesson",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2012-01-10 09:57:20",
        "archivedOn": null,
        "createdOn": "2012-01-10 09:57:20",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 2450,
        "qnaVideo": null,
        "style": null,
        "title": "Swiss Army Triplets",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": "Page 130",
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
              "id": "3858"
            },
            {
              "type": "contentData",
              "id": "8239"
            },
            {
              "type": "contentData",
              "id": "56990"
            },
            {
              "type": "contentData",
              "id": "56991"
            },
            {
              "type": "contentData",
              "id": "73873"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "85783"
            },
            {
              "type": "tag",
              "id": "85784"
            },
            {
              "type": "tag",
              "id": "85785"
            },
            {
              "type": "tag",
              "id": "85786"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "1447"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "2453",
      "attributes": {
        "slug": "01-jareds-hand-to-feet-combos",
        "type": "pack-bundle-lesson",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2012-01-10 09:58:05",
        "archivedOn": null,
        "createdOn": "2012-01-10 09:58:05",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 2453,
        "qnaVideo": null,
        "style": null,
        "title": "Jared's Hand To Feet Combos",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": null,
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": "Page 131",
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
              "id": "3860"
            },
            {
              "type": "contentData",
              "id": "8241"
            },
            {
              "type": "contentData",
              "id": "56988"
            },
            {
              "type": "contentData",
              "id": "56989"
            },
            {
              "type": "contentData",
              "id": "73872"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "85780"
            },
            {
              "type": "tag",
              "id": "85781"
            },
            {
              "type": "tag",
              "id": "85782"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "1449"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "2457",
      "attributes": {
        "slug": "02-daves-hand-to-feet-combos",
        "type": "pack-bundle-lesson",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2012-01-10 09:59:46",
        "archivedOn": null,
        "createdOn": "2012-01-10 09:59:46",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 2457,
        "qnaVideo": null,
        "style": null,
        "title": "Dave's Hand To Feet Combos",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": "CD 4 - Track 244-253",
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": "Pages 132, 133",
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
              "id": "3861"
            },
            {
              "type": "contentData",
              "id": "8243"
            },
            {
              "type": "contentData",
              "id": "8244"
            },
            {
              "type": "contentData",
              "id": "8245"
            },
            {
              "type": "contentData",
              "id": "8246"
            },
            {
              "type": "contentData",
              "id": "8247"
            },
            {
              "type": "contentData",
              "id": "8248"
            },
            {
              "type": "contentData",
              "id": "8249"
            },
            {
              "type": "contentData",
              "id": "8250"
            },
            {
              "type": "contentData",
              "id": "8251"
            },
            {
              "type": "contentData",
              "id": "8252"
            },
            {
              "type": "contentData",
              "id": "8253"
            },
            {
              "type": "contentData",
              "id": "56986"
            },
            {
              "type": "contentData",
              "id": "56987"
            },
            {
              "type": "contentData",
              "id": "73871"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "85777"
            },
            {
              "type": "tag",
              "id": "85778"
            },
            {
              "type": "tag",
              "id": "85779"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "1450"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "2459",
      "attributes": {
        "slug": "03-seans-hand-to-feet-combos",
        "type": "pack-bundle-lesson",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2012-01-10 10:01:22",
        "archivedOn": null,
        "createdOn": "2012-01-10 10:01:22",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 2459,
        "qnaVideo": null,
        "style": null,
        "title": "Sean's Hand To Feet Combos",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": "CD 4 - Track 254-281",
        "chordOrScale": null,
        "difficultyRange": null,
        "episodeNumber": null,
        "exerciseBookPages": "Page 134-136",
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
              "id": "3862"
            },
            {
              "type": "contentData",
              "id": "8255"
            },
            {
              "type": "contentData",
              "id": "8256"
            },
            {
              "type": "contentData",
              "id": "8257"
            },
            {
              "type": "contentData",
              "id": "8258"
            },
            {
              "type": "contentData",
              "id": "8259"
            },
            {
              "type": "contentData",
              "id": "8260"
            },
            {
              "type": "contentData",
              "id": "8261"
            },
            {
              "type": "contentData",
              "id": "8262"
            },
            {
              "type": "contentData",
              "id": "8263"
            },
            {
              "type": "contentData",
              "id": "8264"
            },
            {
              "type": "contentData",
              "id": "8265"
            },
            {
              "type": "contentData",
              "id": "8266"
            },
            {
              "type": "contentData",
              "id": "8267"
            },
            {
              "type": "contentData",
              "id": "8268"
            },
            {
              "type": "contentData",
              "id": "8269"
            },
            {
              "type": "contentData",
              "id": "8270"
            },
            {
              "type": "contentData",
              "id": "8271"
            },
            {
              "type": "contentData",
              "id": "8272"
            },
            {
              "type": "contentData",
              "id": "8273"
            },
            {
              "type": "contentData",
              "id": "8274"
            },
            {
              "type": "contentData",
              "id": "8275"
            },
            {
              "type": "contentData",
              "id": "8276"
            },
            {
              "type": "contentData",
              "id": "8277"
            },
            {
              "type": "contentData",
              "id": "8278"
            },
            {
              "type": "contentData",
              "id": "8279"
            },
            {
              "type": "contentData",
              "id": "8280"
            },
            {
              "type": "contentData",
              "id": "8281"
            },
            {
              "type": "contentData",
              "id": "8282"
            },
            {
              "type": "contentData",
              "id": "8283"
            },
            {
              "type": "contentData",
              "id": "8284"
            },
            {
              "type": "contentData",
              "id": "8285"
            },
            {
              "type": "contentData",
              "id": "8286"
            },
            {
              "type": "contentData",
              "id": "8287"
            },
            {
              "type": "contentData",
              "id": "8288"
            },
            {
              "type": "contentData",
              "id": "8289"
            },
            {
              "type": "contentData",
              "id": "8290"
            },
            {
              "type": "contentData",
              "id": "8291"
            },
            {
              "type": "contentData",
              "id": "8292"
            },
            {
              "type": "contentData",
              "id": "8293"
            },
            {
              "type": "contentData",
              "id": "8294"
            },
            {
              "type": "contentData",
              "id": "8295"
            },
            {
              "type": "contentData",
              "id": "8296"
            },
            {
              "type": "contentData",
              "id": "8297"
            },
            {
              "type": "contentData",
              "id": "56984"
            },
            {
              "type": "contentData",
              "id": "56985"
            },
            {
              "type": "contentData",
              "id": "73870"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "85774"
            },
            {
              "type": "tag",
              "id": "85775"
            },
            {
              "type": "tag",
              "id": "85776"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "1451"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "2462",
      "attributes": {
        "slug": "01-gold-in-your-soul-educational",
        "type": "pack-bundle-lesson",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2012-01-10 10:48:52",
        "archivedOn": null,
        "createdOn": "2012-01-10 10:48:52",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 2462,
        "qnaVideo": null,
        "style": null,
        "title": "\"Gold In Your Soul\" (Educational)",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": "CD 7-9 - Track 1",
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
              "id": "3864"
            },
            {
              "type": "contentData",
              "id": "8298"
            },
            {
              "type": "contentData",
              "id": "56980"
            },
            {
              "type": "contentData",
              "id": "56981"
            },
            {
              "type": "contentData",
              "id": "56982"
            },
            {
              "type": "contentData",
              "id": "56983"
            },
            {
              "type": "contentData",
              "id": "73869"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "85772"
            },
            {
              "type": "tag",
              "id": "85773"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "1453"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "2464",
      "attributes": {
        "slug": "02-gold-in-your-soul-foot",
        "type": "pack-bundle-lesson",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2012-01-10 10:51:41",
        "archivedOn": null,
        "createdOn": "2012-01-10 10:51:41",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 2464,
        "qnaVideo": null,
        "style": null,
        "title": "\"Gold In Your Soul\" (Foot)",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": "CD 7-9 - Track 1",
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
              "id": "3865"
            },
            {
              "type": "contentData",
              "id": "8299"
            },
            {
              "type": "contentData",
              "id": "56976"
            },
            {
              "type": "contentData",
              "id": "56977"
            },
            {
              "type": "contentData",
              "id": "56978"
            },
            {
              "type": "contentData",
              "id": "56979"
            },
            {
              "type": "contentData",
              "id": "73868"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "85770"
            },
            {
              "type": "tag",
              "id": "85771"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "1454"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "2468",
      "attributes": {
        "slug": "03-skin-bones-educational",
        "type": "pack-bundle-lesson",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2012-01-10 10:55:25",
        "archivedOn": null,
        "createdOn": "2012-01-10 10:55:25",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 2468,
        "qnaVideo": null,
        "style": null,
        "title": "\"Skin & Bones\" (Educational)",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": "CD 7-9 - Track 2",
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
              "id": "3866"
            },
            {
              "type": "contentData",
              "id": "8300"
            },
            {
              "type": "contentData",
              "id": "56972"
            },
            {
              "type": "contentData",
              "id": "56973"
            },
            {
              "type": "contentData",
              "id": "56974"
            },
            {
              "type": "contentData",
              "id": "56975"
            },
            {
              "type": "contentData",
              "id": "73867"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "85768"
            },
            {
              "type": "tag",
              "id": "85769"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "1455"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "2470",
      "attributes": {
        "slug": "04-skin-bones-foot",
        "type": "pack-bundle-lesson",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2012-01-10 11:04:44",
        "archivedOn": null,
        "createdOn": "2012-01-10 11:04:44",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 2470,
        "qnaVideo": null,
        "style": null,
        "title": "\"Skin & Bones\" (Foot)",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": "CD 7-9 - Track 2",
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
              "id": "3867"
            },
            {
              "type": "contentData",
              "id": "8301"
            },
            {
              "type": "contentData",
              "id": "56968"
            },
            {
              "type": "contentData",
              "id": "56969"
            },
            {
              "type": "contentData",
              "id": "56970"
            },
            {
              "type": "contentData",
              "id": "56971"
            },
            {
              "type": "contentData",
              "id": "73866"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "85766"
            },
            {
              "type": "tag",
              "id": "85767"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "1456"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "2472",
      "attributes": {
        "slug": "05-2-19-educational",
        "type": "pack-bundle-lesson",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2012-01-10 11:13:05",
        "archivedOn": null,
        "createdOn": "2012-01-10 11:13:05",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 2472,
        "qnaVideo": null,
        "style": null,
        "title": "\"2-19\" (Educational)",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": "CDs 7, 8 - Track 4 & CD 9 - Track 3",
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
              "id": "3868"
            },
            {
              "type": "contentData",
              "id": "8302"
            },
            {
              "type": "contentData",
              "id": "56964"
            },
            {
              "type": "contentData",
              "id": "56965"
            },
            {
              "type": "contentData",
              "id": "56966"
            },
            {
              "type": "contentData",
              "id": "56967"
            },
            {
              "type": "contentData",
              "id": "73865"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "85764"
            },
            {
              "type": "tag",
              "id": "85765"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "1457"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "2475",
      "attributes": {
        "slug": "06-2-19-foot",
        "type": "pack-bundle-lesson",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2012-01-10 11:20:34",
        "archivedOn": null,
        "createdOn": "2012-01-10 11:20:34",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 2475,
        "qnaVideo": null,
        "style": null,
        "title": "\"2-19\" (Foot)",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": "CDs 7, 8 - Track 4 & CD 9 - Track 3",
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
              "id": "3869"
            },
            {
              "type": "contentData",
              "id": "8303"
            },
            {
              "type": "contentData",
              "id": "56960"
            },
            {
              "type": "contentData",
              "id": "56961"
            },
            {
              "type": "contentData",
              "id": "56962"
            },
            {
              "type": "contentData",
              "id": "56963"
            },
            {
              "type": "contentData",
              "id": "73864"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "85762"
            },
            {
              "type": "tag",
              "id": "85763"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "1458"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "2477",
      "attributes": {
        "slug": "07-half-time-rock-educational",
        "type": "pack-bundle-lesson",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2012-01-10 11:22:03",
        "archivedOn": null,
        "createdOn": "2012-01-10 11:22:03",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 2477,
        "qnaVideo": null,
        "style": null,
        "title": "Half-Time Rock (Educational)",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": "CDs 5, 6 - Track 1 & CD 9 - Track 4",
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
              "id": "3870"
            },
            {
              "type": "contentData",
              "id": "8304"
            },
            {
              "type": "contentData",
              "id": "56956"
            },
            {
              "type": "contentData",
              "id": "56957"
            },
            {
              "type": "contentData",
              "id": "56958"
            },
            {
              "type": "contentData",
              "id": "56959"
            },
            {
              "type": "contentData",
              "id": "73863"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "85760"
            },
            {
              "type": "tag",
              "id": "85761"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "1459"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "2479",
      "attributes": {
        "slug": "08-half-time-rock-foot",
        "type": "pack-bundle-lesson",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2012-01-10 11:23:09",
        "archivedOn": null,
        "createdOn": "2012-01-10 11:23:09",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 2479,
        "qnaVideo": null,
        "style": null,
        "title": "Half-Time Rock (Foot)",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": "CDs 5, 6 - Track 1 & CD 9 - Track 4",
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
              "id": "3871"
            },
            {
              "type": "contentData",
              "id": "8305"
            },
            {
              "type": "contentData",
              "id": "56952"
            },
            {
              "type": "contentData",
              "id": "56953"
            },
            {
              "type": "contentData",
              "id": "56954"
            },
            {
              "type": "contentData",
              "id": "56955"
            },
            {
              "type": "contentData",
              "id": "73862"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "85758"
            },
            {
              "type": "tag",
              "id": "85759"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "1460"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "2482",
      "attributes": {
        "slug": "09-fast-rock-educational",
        "type": "pack-bundle-lesson",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2012-01-10 11:24:38",
        "archivedOn": null,
        "createdOn": "2012-01-10 11:24:38",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 2482,
        "qnaVideo": null,
        "style": null,
        "title": "Fast Rock (Educational)",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": "CDs 5, 6 - Track 2 & CD 9 - Track 5",
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
              "id": "3872"
            },
            {
              "type": "contentData",
              "id": "8306"
            },
            {
              "type": "contentData",
              "id": "56948"
            },
            {
              "type": "contentData",
              "id": "56949"
            },
            {
              "type": "contentData",
              "id": "56950"
            },
            {
              "type": "contentData",
              "id": "56951"
            },
            {
              "type": "contentData",
              "id": "73861"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "85756"
            },
            {
              "type": "tag",
              "id": "85757"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "1461"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "2485",
      "attributes": {
        "slug": "10-fast-rock-foot",
        "type": "pack-bundle-lesson",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2012-01-10 11:26:49",
        "archivedOn": null,
        "createdOn": "2012-01-10 11:26:49",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 2485,
        "qnaVideo": null,
        "style": null,
        "title": "Fast Rock (Foot)",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": "CDs 5, 6 - Track 2 & CD 9 - Track 5",
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
              "id": "3873"
            },
            {
              "type": "contentData",
              "id": "8307"
            },
            {
              "type": "contentData",
              "id": "56944"
            },
            {
              "type": "contentData",
              "id": "56945"
            },
            {
              "type": "contentData",
              "id": "56946"
            },
            {
              "type": "contentData",
              "id": "56947"
            },
            {
              "type": "contentData",
              "id": "73860"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "85754"
            },
            {
              "type": "tag",
              "id": "85755"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "1462"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "2488",
      "attributes": {
        "slug": "11-heavy-metal-educational",
        "type": "pack-bundle-lesson",
        "sort": 0,
        "status": "published",
        "totalXp": null,
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": null,
        "user": "",
        "publishedOn": "2012-01-10 11:27:52",
        "archivedOn": null,
        "createdOn": "2012-01-10 11:27:52",
        "difficulty": null,
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": 2488,
        "qnaVideo": null,
        "style": null,
        "title": "Heavy Metal (Educational)",
        "xp": null,
        "album": null,
        "artist": null,
        "bpm": null,
        "cdTracks": "CDs 5, 6 - Track 4 & CD 9 - Track 6",
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
              "id": "3874"
            },
            {
              "type": "contentData",
              "id": "8308"
            },
            {
              "type": "contentData",
              "id": "56940"
            },
            {
              "type": "contentData",
              "id": "56941"
            },
            {
              "type": "contentData",
              "id": "56942"
            },
            {
              "type": "contentData",
              "id": "56943"
            },
            {
              "type": "contentData",
              "id": "73859"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "85752"
            },
            {
              "type": "tag",
              "id": "85753"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "1463"
            }
          ]
        }
      }
    }
  ],
  "included": [
    {
      "type": "parent",
      "id": "25873",
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
      "id": "25874",
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
      "id": "25875",
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
      "id": "3853",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8112",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-01-1f.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8113",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-01-1s.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8114",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-five-stroke-rolls-1.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8115",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-01-2f.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "8116",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-01-2s.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "8117",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-five-stroke-rolls-2.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "8118",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-01-3f.mp3",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "8119",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-01-3s.mp3",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "8120",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-five-stroke-rolls-3.png",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "8121",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-01-4f.mp3",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "8122",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-01-4s.mp3",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "8123",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-five-stroke-rolls-4.png",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "8124",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-01-5f.mp3",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "8125",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-01-5s.mp3",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "8126",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-five-stroke-rolls-5.png",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "8127",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-01-6f.mp3",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "8128",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-01-6s.mp3",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "8129",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-five-stroke-rolls-6.png",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "8130",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-01-7f.mp3",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "8131",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-01-7s.mp3",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "8132",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-five-stroke-rolls-7.png",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "8133",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-01-8f.mp3",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "8134",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-01-8s.mp3",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "8135",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-five-stroke-rolls-8.png",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "8136",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/2436_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "57000",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "57001",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/pdfs/bds-13-01.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "73878",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/457731529_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85807",
      "attributes": {
        "tag": "bass drum",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85808",
      "attributes": {
        "tag": "rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "85809",
      "attributes": {
        "tag": "beats",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "85810",
      "attributes": {
        "tag": "jared falk",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "85811",
      "attributes": {
        "tag": "double stroke rudiments",
        "position": 5
      }
    },
    {
      "type": "parent",
      "id": "1442",
      "attributes": {
        "child_position": 1
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "25873"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "3854",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8138",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-02-1f.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8139",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-02-1s.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8140",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-six-stroke-rolls-1.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8141",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-02-2f.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "8142",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-02-2s.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "8143",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-six-stroke-rolls-2.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "8144",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-02-3f.mp3",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "8145",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-02-3s.mp3",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "8146",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-six-stroke-rolls-3.png",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "8147",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-02-4f.mp3",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "8148",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-02-4s.mp3",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "8149",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-six-stroke-rolls-4.png",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "8150",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-02-5f.mp3",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "8151",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-02-5s.mp3",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "8152",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-six-stroke-rolls-5.png",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "8153",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-02-6f.mp3",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "8154",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-02-6s.mp3",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "8155",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-six-stroke-rolls-6.png",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "8156",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-02-7f.mp3",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "8157",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-02-7s.mp3",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "8158",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-six-stroke-rolls-7.png",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "8159",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-02-8f.mp3",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "8160",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-02-8s.mp3",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "8161",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-six-stroke-rolls-8.png",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "8162",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/2438_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56998",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56999",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/pdfs/bds-13-02.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "73877",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/457731406_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85802",
      "attributes": {
        "tag": "bass drum",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85803",
      "attributes": {
        "tag": "rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "85804",
      "attributes": {
        "tag": "beats",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "85805",
      "attributes": {
        "tag": "jared falk",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "85806",
      "attributes": {
        "tag": "double stroke rudiments",
        "position": 5
      }
    },
    {
      "type": "parent",
      "id": "1443",
      "attributes": {
        "child_position": 2
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "25873"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "3855",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8164",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-03-1f.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8165",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-03-1s.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8166",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-seven-stroke-rolls-1.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8167",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-03-2f.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "8168",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-03-2s.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "8169",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-seven-stroke-rolls-2.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "8170",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-03-3f.mp3",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "8171",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-03-3s.mp3",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "8172",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-seven-stroke-rolls-3.png",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "8173",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-03-4f.mp3",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "8174",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-03-4s.mp3",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "8175",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-seven-stroke-rolls-4.png",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "8176",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-03-5f.mp3",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "8177",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-03-5s.mp3",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "8178",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-seven-stroke-rolls-5.png",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "8179",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-03-6f.mp3",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "8180",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-03-6s.mp3",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "8181",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-seven-stroke-rolls-6.png",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "8182",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-03-7f.mp3",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "8183",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-03-7s.mp3",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "8184",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-seven-stroke-rolls-7.png",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "8185",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-03-8f.mp3",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "8186",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-03-8s.mp3",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "8187",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-seven-stroke-rolls-8.png",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "8188",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/2441_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56996",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56997",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/pdfs/bds-13-03.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "73876",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/457732042_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85797",
      "attributes": {
        "tag": "bass drum",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85798",
      "attributes": {
        "tag": "rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "85799",
      "attributes": {
        "tag": "beats",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "85800",
      "attributes": {
        "tag": "jared falk",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "85801",
      "attributes": {
        "tag": "double stroke rudiments",
        "position": 5
      }
    },
    {
      "type": "parent",
      "id": "1444",
      "attributes": {
        "child_position": 3
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "25873"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "3856",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8190",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-04-1f.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8191",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-04-1s.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8192",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-nine-stroke-rolls-1.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8193",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-04-2f.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "8194",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-04-2s.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "8195",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-nine-stroke-rolls-2.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "8196",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-04-3f.mp3",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "8197",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-04-3s.mp3",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "8198",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-nine-stroke-rolls-3.png",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "8199",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-04-4f.mp3",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "8200",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-04-4s.mp3",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "8201",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-nine-stroke-rolls-5.png",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "8202",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-04-5f.mp3",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "8203",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-04-5s.mp3",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "8204",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-nine-stroke-rolls-6.png",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "8205",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-04-6f.mp3",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "8206",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-04-6s.mp3",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "8207",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-nine-stroke-rolls-7.png",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "8208",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-04-7f.mp3",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "8209",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-04-7s.mp3",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "8210",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-nine-stroke-rolls-8.png",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "8211",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/2444_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56994",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56995",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/pdfs/bds-13-04.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "73875",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/457731862_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85792",
      "attributes": {
        "tag": "bass drum",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85793",
      "attributes": {
        "tag": "rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "85794",
      "attributes": {
        "tag": "beats",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "85795",
      "attributes": {
        "tag": "jared falk",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "85796",
      "attributes": {
        "tag": "double stroke rudiments",
        "position": 5
      }
    },
    {
      "type": "parent",
      "id": "1445",
      "attributes": {
        "child_position": 4
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "25873"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "3857",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8213",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-05-1f.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8214",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-05-1s.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8215",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-eleven-stroke-rolls-1.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8216",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-05-2f.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "8217",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-05-2s.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "8218",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-eleven-stroke-rolls-2.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "8219",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-05-3f.mp3",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "8220",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-05-3s.mp3",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "8221",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-eleven-stroke-rolls-3.png",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "8222",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-05-4f.mp3",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "8223",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-05-4s.mp3",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "8224",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-eleven-stroke-rolls-4.png",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "8225",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-05-5f.mp3",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "8226",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-05-5s.mp3",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "8227",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-eleven-stroke-rolls-5.png",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "8228",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-05-6f.mp3",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "8229",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-05-6s.mp3",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "8230",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-eleven-stroke-rolls-6.png",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "8231",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-05-7f.mp3",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "8232",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-05-7s.mp3",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "8233",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-eleven-stroke-rolls-7.png",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "8234",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-05-8f.mp3",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "8235",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-13-05-8s.mp3",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "8236",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/13-rwtf-eleven-stroke-rolls-8.png",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "8237",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/2447_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56992",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56993",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/pdfs/bds-13-05.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "73874",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/457732266_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85787",
      "attributes": {
        "tag": "bass drum",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85788",
      "attributes": {
        "tag": "rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "85789",
      "attributes": {
        "tag": "beats",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "85790",
      "attributes": {
        "tag": "jared falk",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "85791",
      "attributes": {
        "tag": "double stroke rudiments",
        "position": 5
      }
    },
    {
      "type": "parent",
      "id": "1446",
      "attributes": {
        "child_position": 5
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "25873"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "3858",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8239",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/2450_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56990",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56991",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/pdfs/bds-13-06.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "73873",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/457732390_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85783",
      "attributes": {
        "tag": "bass drum",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85784",
      "attributes": {
        "tag": "rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "85785",
      "attributes": {
        "tag": "flam rudiments",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "85786",
      "attributes": {
        "tag": "jared falk",
        "position": 4
      }
    },
    {
      "type": "parent",
      "id": "1447",
      "attributes": {
        "child_position": 6
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "25873"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "3860",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8241",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/2453_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56988",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56989",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/pdfs/bds-14-01.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "73872",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/457733380_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85780",
      "attributes": {
        "tag": "fills",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85781",
      "attributes": {
        "tag": "linear drumming",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "85782",
      "attributes": {
        "tag": "jared falk",
        "position": 3
      }
    },
    {
      "type": "parent",
      "id": "1449",
      "attributes": {
        "child_position": 1
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "25874"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "3861",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8243",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/14-htfc-dave-atkinsons-hand-to-feet-combos-1.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8244",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/14-htfc-dave-atkinsons-hand-to-feet-combos-2.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "8245",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/14-htfc-dave-atkinsons-hand-to-feet-combos-3.png",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "8246",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/14-htfc-dave-atkinsons-hand-to-feet-combos-4.png",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "8247",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/14-htfc-dave-atkinsons-hand-to-feet-combos-5.png",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "8248",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/14-htfc-dave-atkinsons-hand-to-feet-combos-6.png",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "8249",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/14-htfc-dave-atkinsons-hand-to-feet-combos-7.png",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "8250",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/14-htfc-dave-atkinsons-hand-to-feet-combos-8.png",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "8251",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/14-htfc-dave-atkinsons-hand-to-feet-combos-9.png",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "8252",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/14-htfc-dave-atkinsons-hand-to-feet-combos-10.png",
        "position": 10
      }
    },
    {
      "type": "contentData",
      "id": "8253",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/2457_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56986",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56987",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/pdfs/bds-14-02.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "73871",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/457733571_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85777",
      "attributes": {
        "tag": "fills",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85778",
      "attributes": {
        "tag": "linear drumming",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "85779",
      "attributes": {
        "tag": "dave atkinson",
        "position": 3
      }
    },
    {
      "type": "parent",
      "id": "1450",
      "attributes": {
        "child_position": 2
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "25874"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "3862",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8255",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-1f.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8256",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-1s.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8257",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/14-htfc-sean-langs-hand-to-feet-combos-1.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8258",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-2f.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "8259",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-2s.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "8260",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/14-htfc-sean-langs-hand-to-feet-combos-2.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "8261",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-3f.mp3",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "8262",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-3s.mp3",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "8263",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/14-htfc-sean-langs-hand-to-feet-combos-3.png",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "8264",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-4f.mp3",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "8265",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-4s.mp3",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "8266",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/14-htfc-sean-langs-hand-to-feet-combos-4.png",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "8267",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-5f.mp3",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "8268",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-5s.mp3",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "8269",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/14-htfc-sean-langs-hand-to-feet-combos-5.png",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "8270",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-6f.mp3",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "8271",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-6s.mp3",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "8272",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/14-htfc-sean-langs-hand-to-feet-combos-6.png",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "8273",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-7f.mp3",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "8274",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-7s.mp3",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "8275",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/14-htfc-sean-langs-hand-to-feet-combos-7.png",
        "position": 7
      }
    },
    {
      "type": "contentData",
      "id": "8276",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-8f.mp3",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "8277",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-8s.mp3",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "8278",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/14-htfc-sean-langs-hand-to-feet-combos-8.png",
        "position": 8
      }
    },
    {
      "type": "contentData",
      "id": "8279",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-9f.mp3",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "8280",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-9s.mp3",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "8281",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/14-htfc-sean-langs-hand-to-feet-combos-9.png",
        "position": 9
      }
    },
    {
      "type": "contentData",
      "id": "8282",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-10f.mp3",
        "position": 10
      }
    },
    {
      "type": "contentData",
      "id": "8283",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-10s.mp3",
        "position": 10
      }
    },
    {
      "type": "contentData",
      "id": "8284",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/14-htfc-sean-langs-hand-to-feet-combos-10.png",
        "position": 10
      }
    },
    {
      "type": "contentData",
      "id": "8285",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-11f.mp3",
        "position": 11
      }
    },
    {
      "type": "contentData",
      "id": "8286",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-11s.mp3",
        "position": 11
      }
    },
    {
      "type": "contentData",
      "id": "8287",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/14-htfc-sean-langs-hand-to-feet-combos-11.png",
        "position": 11
      }
    },
    {
      "type": "contentData",
      "id": "8288",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-12f.mp3",
        "position": 12
      }
    },
    {
      "type": "contentData",
      "id": "8289",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-12s.mp3",
        "position": 12
      }
    },
    {
      "type": "contentData",
      "id": "8290",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/14-htfc-sean-langs-hand-to-feet-combos-12.png",
        "position": 12
      }
    },
    {
      "type": "contentData",
      "id": "8291",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-13f.mp3",
        "position": 13
      }
    },
    {
      "type": "contentData",
      "id": "8292",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-13s.mp3",
        "position": 13
      }
    },
    {
      "type": "contentData",
      "id": "8293",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/14-htfc-sean-langs-hand-to-feet-combos-13.png",
        "position": 13
      }
    },
    {
      "type": "contentData",
      "id": "8294",
      "attributes": {
        "key": "smart_beat_fast_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-14f.mp3",
        "position": 14
      }
    },
    {
      "type": "contentData",
      "id": "8295",
      "attributes": {
        "key": "smart_beat_slow_bpm_mp3_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/mp3s/bds-14-03-14s.mp3",
        "position": 14
      }
    },
    {
      "type": "contentData",
      "id": "8296",
      "attributes": {
        "key": "smart_beat_sheet_music_image_url",
        "value": "http://s3.amazonaws.com/drumeosecure/03-bass-drum-secrets/images/14-htfc-sean-langs-hand-to-feet-combos-14.png",
        "position": 14
      }
    },
    {
      "type": "contentData",
      "id": "8297",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/2459_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56984",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56985",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/pdfs/bds-14-03.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "73870",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/457733888_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85774",
      "attributes": {
        "tag": "fills",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85775",
      "attributes": {
        "tag": "linear drumming",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "85776",
      "attributes": {
        "tag": "sean lang",
        "position": 3
      }
    },
    {
      "type": "parent",
      "id": "1451",
      "attributes": {
        "child_position": 3
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "25874"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "3864",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8298",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/2462_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56980",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Click Track",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "56981",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/mp3s/bds-15-01-1c.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "56982",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 No-Click Track",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56983",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/mp3s/bds-15-01-1nc.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "73869",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/466852151_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85772",
      "attributes": {
        "tag": "rock play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85773",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "parent",
      "id": "1453",
      "attributes": {
        "child_position": 1
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "25875"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "3865",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8299",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/2464_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56976",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Click Track",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "56977",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/mp3s/bds-15-02-1c.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "56978",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 No-Click Track",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56979",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/mp3s/bds-15-02-1nc.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "73868",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/457733771_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85770",
      "attributes": {
        "tag": "rock play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85771",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "parent",
      "id": "1454",
      "attributes": {
        "child_position": 2
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "25875"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "3866",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8300",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/2468_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56972",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Click Track",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "56973",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/mp3s/bds-15-03-1c.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "56974",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 No-Click Track",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56975",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/mp3s/bds-15-03-1nc.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "73867",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/457734057_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85768",
      "attributes": {
        "tag": "rock play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85769",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "parent",
      "id": "1455",
      "attributes": {
        "child_position": 3
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "25875"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "3867",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8301",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/2470_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56968",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Click Track",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "56969",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/mp3s/bds-15-04-1c.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "56970",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 No-Click Track",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56971",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/mp3s/bds-15-04-1nc.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "73866",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/457734116_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85766",
      "attributes": {
        "tag": "rock play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85767",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "parent",
      "id": "1456",
      "attributes": {
        "child_position": 4
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "25875"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "3868",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8302",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/2472_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56964",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Click Track",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "56965",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/mp3s/bds-15-05-1c.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "56966",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 No-Click Track",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56967",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/mp3s/bds-15-05-1nc.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "73865",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/457734296_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85764",
      "attributes": {
        "tag": "rock play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85765",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "parent",
      "id": "1457",
      "attributes": {
        "child_position": 5
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "25875"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "3869",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8303",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/2475_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56960",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Click Track",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "56961",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/mp3s/bds-15-06-1c.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "56962",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 No-Click Track",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56963",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/mp3s/bds-15-06-1nc.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "73864",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/457734363_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85762",
      "attributes": {
        "tag": "rock play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85763",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "parent",
      "id": "1458",
      "attributes": {
        "child_position": 6
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "25875"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "3870",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8304",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/2477_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56956",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Click Track",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "56957",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/mp3s/bds-15-07-1c.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "56958",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 No-Click Track",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56959",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/mp3s/bds-15-07-1nc.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "73863",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/457734465_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85760",
      "attributes": {
        "tag": "rock play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85761",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "parent",
      "id": "1459",
      "attributes": {
        "child_position": 7
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "25875"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "3871",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8305",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/2479_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56952",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Click Track",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "56953",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/mp3s/bds-15-08-1c.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "56954",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 No-Click Track",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56955",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/mp3s/bds-15-08-1nc.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "73862",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/457734499_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85758",
      "attributes": {
        "tag": "rock play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85759",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "parent",
      "id": "1460",
      "attributes": {
        "child_position": 8
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "25875"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "3872",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8306",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/2482_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56948",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Click Track",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "56949",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/mp3s/bds-15-09-1c.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "56950",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 No-Click Track",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56951",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/mp3s/bds-15-09-1nc.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "73861",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/457734565_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85756",
      "attributes": {
        "tag": "rock play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85757",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "parent",
      "id": "1461",
      "attributes": {
        "child_position": 9
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "25875"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "3873",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8307",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/2485_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56944",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Click Track",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "56945",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/mp3s/bds-15-10-1c.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "56946",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 No-Click Track",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56947",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/mp3s/bds-15-10-1nc.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "73860",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/457734668_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85754",
      "attributes": {
        "tag": "rock play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85755",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "parent",
      "id": "1462",
      "attributes": {
        "child_position": 10
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "25875"
          }
        }
      }
    },
    {
      "type": "contentData",
      "id": "3874",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "8308",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/thumbnails/2488_thumbnail_360p.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56940",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Click Track",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "56941",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/mp3s/bds-15-11-1c.mp3",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "56942",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 No-Click Track",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "56943",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/03-bass-drum-secrets/mp3s/bds-15-11-1nc.mp3",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "73859",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/457734676_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85752",
      "attributes": {
        "tag": "metal play-alongs",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "85753",
      "attributes": {
        "tag": "dave atkinson",
        "position": 2
      }
    },
    {
      "type": "parent",
      "id": "1463",
      "attributes": {
        "child_position": 11
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "25875"
          }
        }
      }
    }
  ],
  "meta": {
    "filterOptions": {
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
        "50-90",
        "91-120",
        "121-150",
        "151-180",
        "181+"
      ],
      "favorites": [
        "3 Doors Down",
        "48May",
        "AC/DC",
        "Aerosmith",
        "Alchemy Chamber",
        "Alice In Chains",
        "Arthur Vyncke",
        "Audioslave",
        "Avenged Sevenfold",
        "B.B. King",
        "Bee Gees",
        "Bernhard Lackner",
        "Big Big Train",
        "Billy Joel",
        "Billy Rymer",
        "Blazing Arrows",
        "Blink-182",
        "Bob Marley & The Wailers",
        "Bob Seger",
        "Bon Iver",
        "Bon Jovi",
        "Boston",
        "Brandon Brown",
        "Breaking Benjamin",
        "Brian Crane",
        "Bruno Mars",
        "Bryan Adams",
        "Buddy Rich Big Band",
        "Bullets and Numbers",
        "Burning Human",
        "Chaise Baird",
        "City Mouth",
        "Coen",
        "Coldplay",
        "Collective Soul",
        "Craig Strain",
        "Craig Zurba",
        "Creedence Clearwater Revival",
        "Daft Punk",
        "Dali Mraz",
        "Damani Rhodes",
        "Daniel Glass",
        "Darius Rucker",
        "Daru Jones",
        "Dave Matthews Band",
        "David Bowie",
        "David Lee Roth",
        "David Raouf",
        "Death Cab for Cutie",
        "Deep Purple",
        "Dirk Kennedy",
        "Dom Famularo",
        "Dream Theater",
        "Dying Hearts Desire",
        "Eagles",
        "Ed Sheeran",
        "Ermin Monzon",
        "Evanescence",
        "Everything Everything",
        "Extreme",
        "First Reign",
        "Florian Alexandru-Zorn",
        "Foo Fighters",
        "Galaktikon",
        "Georgia Satellites",
        "Gil Sharone",
        "Gloria Gaynor",
        "Grand Funk Railroad",
        "Green Day",
        "Gregg Bissonette",
        "Gulli Briem",
        "Guns N’ Roses",
        "Hasting",
        "Heather Thomas",
        "Henrique de Almeida",
        "Hiatus Kaiyote",
        "Hozier",
        "Huey Lewis And The News",
        "INXS",
        "Iron Maiden",
        "Issah Contractor",
        "Jai Es",
        "James Brown",
        "Jamiroquai",
        "Jason Aldean",
        "Jay Oliver",
        "Jean Knight",
        "Jet",
        "Jethro Tull\u0000",
        "Jimmy Eat World",
        "Jimmy Rainsford",
        "Joan Jett & The Blackhearts",
        "Jody Fisher, Baba Elefante, Tilden Webb & Mike Michalkow",
        "Joe Hodgin",
        "John Cougar Mellencamp",
        "John Lennon",
        "Journey",
        "KISS",
        "Kansas",
        "Karnivool",
        "Katy Perry",
        "Kaz Rodriguez",
        "Kimbra",
        "Kings Of Leon",
        "Kool & The Gang",
        "Led Zeppelin",
        "Lenny Kravitz",
        "Linkin Park",
        "Lynyrd Skynyrd",
        "Marco Minnemann",
        "Mark Ronson",
        "Maroon 5",
        "Mathieu Fiset",
        "Mathieu Fiset & The RoboJazz Band",
        "Matt Johnson",
        "Megadeth",
        "Meshuggah",
        "Metallica",
        "Michael Jackson",
        "Miles Davis",
        "Muse",
        "Mötley Crüe ",
        "NOFX",
        "Nate Savage",
        "Nate Savage, Jordan Leibel, Chelsea Amber",
        "Nickelback",
        "Nikko Ielasi",
        "Nirvana",
        "Nitty Gritty Dirt Band",
        "Nujynisis",
        "Oasis",
        "Omnisight",
        "Otis Redding",
        "Ozzy Osbourne",
        "Pantera",
        "Paramore",
        "Pat Benetar",
        "Paul Kype And Texas Flood",
        "Paul Simon",
        "Pearl Jam",
        "Pete Lockett",
        "Pink Floyd",
        "Poison",
        "Porcupine Tree",
        "Protest The Hero",
        "Queen",
        "Queens Of The Stone Age",
        "Radiohead",
        "Radiohead ",
        "Raghav Mehrotra",
        "Rashid Williams",
        "Red Hot Chili Peppers",
        "Rene Gonzalez",
        "Revocation",
        "Rick Springfield",
        "Rodney Holmes",
        "Rush",
        "Ryan Follese",
        "Santana",
        "Sarah Thawer",
        "Scale The Summit",
        "Scorpions",
        "Sean Lang",
        "Serpents Rise",
        "Seven Year Storm",
        "Seven Year Storm ",
        "Shadows Fall",
        "Shania Twain",
        "Simon & Garfunkel",
        "Simon Grey",
        "Soundgarden",
        "Steely Dan",
        "Steppenwolf",
        "Sterr",
        "Steve Lyman",
        "Stevie Ray Vaughan",
        "Sting",
        "Stone Temple Pilots",
        "Sublime",
        "Survivor",
        "System Of A Down",
        "Tears For Fears",
        "Testament",
        "The Beatles",
        "The Black Eyed Peas",
        "The Buggles",
        "The Commodores",
        "The Cult",
        "The Doobie Brothers",
        "The JDS Quartet",
        "The Killers",
        "The Knack",
        "The New Caledonia",
        "The Police",
        "The Pretenders",
        "The Proclaimers",
        "The Rolling Stones",
        "The Surfaris",
        "Thirty Seconds To Mars",
        "Three Days Grace",
        "Tigran Hamasyan",
        "Tigran Hamasyan & Red Hail",
        "Tim Proznick",
        "Tony Coleman",
        "Tool",
        "Tool ",
        "Toto",
        "Trivium",
        "Twenty One Pilots",
        "Twisted Sister",
        "U2",
        "Van Halen",
        "Van Morrison",
        "Victor Guidera",
        "Vinny Valentino, Baron Browne, Joel Rosenblatt",
        "Weezer",
        "Whitesnake",
        "Wild Cherry",
        "Wolfmother",
        "YUCA",
        "ZZ Top",
        "Zac Brown Band",
        "Zak Rizvi"
      ]
    },
    "pagination": {
      "total": 8687,
      "count": 20,
      "per_page": "20",
      "current_page": "1",
      "total_pages": 435
    }
  },
  "links": []
}
EOT;
// -->
@endphp

@section('app')
    @include('sections.user-stats')

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
