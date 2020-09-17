@extends('musora-ui::vue.layout')

@section('musora-ui::title', 'Members - Video')

@push('musora-ui::styles')
    <link rel="stylesheet" href="/build/drumeo/vuesora.css">
@endpush

@push('musora-ui::scripts')
    <script type="text/javascript" src="{{ $musoraLessonJsPath }}"></script>
@endpush

@php
// <!--
$rc = <<<'EOT'
{
  "data": [
    {
      "type": "content",
      "id": "19952",
      "attributes": {
        "slug": "567-inverted-paradiddle-applications",
        "type": "live",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-11-08 04:23:26",
        "archivedOn": "",
        "createdOn": "2013-11-08 04:23:26",
        "difficulty": "Advanced",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "19952",
        "qnaVideo": "",
        "style": "",
        "title": "Inverted-Paradiddle Applications",
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
              "id": "1133"
            },
            {
              "type": "contentData",
              "id": "11777"
            },
            {
              "type": "contentData",
              "id": "11778"
            },
            {
              "type": "contentData",
              "id": "46993"
            },
            {
              "type": "contentData",
              "id": "46994"
            },
            {
              "type": "contentData",
              "id": "46996"
            },
            {
              "type": "contentData",
              "id": "46998"
            },
            {
              "type": "contentData",
              "id": "72567"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7155"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "6147"
            },
            {
              "type": "topic",
              "id": "6148"
            },
            {
              "type": "topic",
              "id": "6149"
            },
            {
              "type": "topic",
              "id": "6150"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79868"
            },
            {
              "type": "tag",
              "id": "79869"
            },
            {
              "type": "tag",
              "id": "79870"
            },
            {
              "type": "tag",
              "id": "79871"
            },
            {
              "type": "tag",
              "id": "79872"
            },
            {
              "type": "tag",
              "id": "79873"
            },
            {
              "type": "tag",
              "id": "79874"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "574"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "19959",
      "attributes": {
        "slug": "568-latin-rudiments-basic-cuban-phrases",
        "type": "live",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-11-11 00:43:20",
        "archivedOn": "",
        "createdOn": "2013-11-11 00:43:20",
        "difficulty": "All Skill Levels",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "19959",
        "qnaVideo": "",
        "style": "",
        "title": "Latin Rudiments - Basic Cuban Phrases",
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
              "id": "1132"
            },
            {
              "type": "contentData",
              "id": "11781"
            },
            {
              "type": "contentData",
              "id": "11782"
            },
            {
              "type": "contentData",
              "id": "11783"
            },
            {
              "type": "contentData",
              "id": "46986"
            },
            {
              "type": "contentData",
              "id": "46987"
            },
            {
              "type": "contentData",
              "id": "46989"
            },
            {
              "type": "contentData",
              "id": "46991"
            },
            {
              "type": "contentData",
              "id": "72566"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7154"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "6145"
            },
            {
              "type": "topic",
              "id": "6146"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79861"
            },
            {
              "type": "tag",
              "id": "79862"
            },
            {
              "type": "tag",
              "id": "79863"
            },
            {
              "type": "tag",
              "id": "79864"
            },
            {
              "type": "tag",
              "id": "79865"
            },
            {
              "type": "tag",
              "id": "79866"
            },
            {
              "type": "tag",
              "id": "79867"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "573"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "19961",
      "attributes": {
        "slug": "569-open-discussion-qa",
        "type": "live",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-11-11 00:43:43",
        "archivedOn": "",
        "createdOn": "2013-11-11 00:43:43",
        "difficulty": "All Skill Levels",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "19961",
        "qnaVideo": "",
        "style": "",
        "title": "Open Discussion / Q&A",
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
              "id": "1131"
            },
            {
              "type": "contentData",
              "id": "11784"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7153"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "6144"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79856"
            },
            {
              "type": "tag",
              "id": "79857"
            },
            {
              "type": "tag",
              "id": "79858"
            },
            {
              "type": "tag",
              "id": "79859"
            },
            {
              "type": "tag",
              "id": "79860"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "19966",
      "attributes": {
        "slug": "570-odd-sounding-4-4-grooves",
        "type": "live",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-11-12 00:38:34",
        "archivedOn": "",
        "createdOn": "2013-11-12 00:38:34",
        "difficulty": "Intermediate",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "19966",
        "qnaVideo": "",
        "style": "",
        "title": "Odd Sounding 4/4 Grooves",
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
              "id": "1130"
            },
            {
              "type": "contentData",
              "id": "11787"
            },
            {
              "type": "contentData",
              "id": "11788"
            },
            {
              "type": "contentData",
              "id": "46979"
            },
            {
              "type": "contentData",
              "id": "46980"
            },
            {
              "type": "contentData",
              "id": "46982"
            },
            {
              "type": "contentData",
              "id": "46984"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7152"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "6143"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79853"
            },
            {
              "type": "tag",
              "id": "79854"
            },
            {
              "type": "tag",
              "id": "79855"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "19972",
      "attributes": {
        "slug": "571-setting-up-your-drums",
        "type": "live",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-11-13 01:33:07",
        "archivedOn": "",
        "createdOn": "2013-11-13 01:33:07",
        "difficulty": "Beginner",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "19972",
        "qnaVideo": "",
        "style": "",
        "title": "Setting Up Your Drums",
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
              "id": "1129"
            },
            {
              "type": "contentData",
              "id": "11789"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7151"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "6142"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79849"
            },
            {
              "type": "tag",
              "id": "79850"
            },
            {
              "type": "tag",
              "id": "79851"
            },
            {
              "type": "tag",
              "id": "79852"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "19978",
      "attributes": {
        "slug": "574-decades-of-drumming-the-70s-part-1",
        "type": "live",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-11-15 00:55:12",
        "archivedOn": "",
        "createdOn": "2013-11-15 00:55:12",
        "difficulty": "All Skill Levels",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "19978",
        "qnaVideo": "",
        "style": "",
        "title": "Decades Of Drumming - The '70s - Part 1",
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
              "id": "1126"
            },
            {
              "type": "contentData",
              "id": "11794"
            },
            {
              "type": "contentData",
              "id": "11795"
            },
            {
              "type": "contentData",
              "id": "11796"
            },
            {
              "type": "contentData",
              "id": "46971"
            },
            {
              "type": "contentData",
              "id": "46973"
            },
            {
              "type": "contentData",
              "id": "46975"
            },
            {
              "type": "contentData",
              "id": "46976"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7148"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "6139"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79831"
            },
            {
              "type": "tag",
              "id": "79832"
            },
            {
              "type": "tag",
              "id": "79833"
            },
            {
              "type": "tag",
              "id": "79834"
            },
            {
              "type": "tag",
              "id": "79835"
            },
            {
              "type": "tag",
              "id": "79836"
            },
            {
              "type": "tag",
              "id": "79837"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "571"
            },
            {
              "type": "playlist",
              "id": "572"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "19983",
      "attributes": {
        "slug": "576-sexy-sextuplets-2",
        "type": "live",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-11-15 01:55:44",
        "archivedOn": "",
        "createdOn": "2013-11-15 01:55:44",
        "difficulty": "Intermediate",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "19983",
        "qnaVideo": "",
        "style": "",
        "title": "Sexy Sextuplets #2",
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
              "id": "1124"
            },
            {
              "type": "contentData",
              "id": "11802"
            },
            {
              "type": "contentData",
              "id": "11803"
            },
            {
              "type": "contentData",
              "id": "46961"
            },
            {
              "type": "contentData",
              "id": "46962"
            },
            {
              "type": "contentData",
              "id": "46964"
            },
            {
              "type": "contentData",
              "id": "46966"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7146"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "6136"
            },
            {
              "type": "topic",
              "id": "6137"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79821"
            },
            {
              "type": "tag",
              "id": "79822"
            },
            {
              "type": "tag",
              "id": "79823"
            },
            {
              "type": "tag",
              "id": "79824"
            },
            {
              "type": "tag",
              "id": "79825"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "570"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "19987",
      "attributes": {
        "slug": "578-style-analysis-buddy-rich",
        "type": "live",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-11-21 08:21:47",
        "archivedOn": "",
        "createdOn": "2013-11-21 08:21:47",
        "difficulty": "Intermediate",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "19987",
        "qnaVideo": "",
        "style": "",
        "title": "Style Analysis - Buddy Rich",
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
              "id": "1122"
            },
            {
              "type": "contentData",
              "id": "11805"
            },
            {
              "type": "contentData",
              "id": "11806"
            },
            {
              "type": "contentData",
              "id": "11807"
            },
            {
              "type": "contentData",
              "id": "46957"
            },
            {
              "type": "contentData",
              "id": "46958"
            },
            {
              "type": "contentData",
              "id": "72563"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7145"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "6135"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79816"
            },
            {
              "type": "tag",
              "id": "79817"
            },
            {
              "type": "tag",
              "id": "79818"
            },
            {
              "type": "tag",
              "id": "79819"
            },
            {
              "type": "tag",
              "id": "79820"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "568"
            },
            {
              "type": "playlist",
              "id": "569"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "19989",
      "attributes": {
        "slug": "579-using-a-left-side-tom",
        "type": "live",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-11-22 01:10:08",
        "archivedOn": "",
        "createdOn": "2013-11-22 01:10:08",
        "difficulty": "Intermediate",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "19989",
        "qnaVideo": "",
        "style": "",
        "title": "Using a Left-Side Tom",
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
              "id": "1121"
            },
            {
              "type": "contentData",
              "id": "11810"
            },
            {
              "type": "contentData",
              "id": "11811"
            },
            {
              "type": "contentData",
              "id": "46950"
            },
            {
              "type": "contentData",
              "id": "46951"
            },
            {
              "type": "contentData",
              "id": "46953"
            },
            {
              "type": "contentData",
              "id": "46955"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7144"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "6133"
            },
            {
              "type": "topic",
              "id": "6134"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79812"
            },
            {
              "type": "tag",
              "id": "79813"
            },
            {
              "type": "tag",
              "id": "79814"
            },
            {
              "type": "tag",
              "id": "79815"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "19991",
      "attributes": {
        "slug": "580-the-guaguanco-1",
        "type": "live",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-11-22 14:36:20",
        "archivedOn": "",
        "createdOn": "2013-11-22 14:36:20",
        "difficulty": "Intermediate",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "19991",
        "qnaVideo": "",
        "style": "",
        "title": "The Guaguanco #1",
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
              "id": "1120"
            },
            {
              "type": "contentData",
              "id": "11814"
            },
            {
              "type": "contentData",
              "id": "11815"
            },
            {
              "type": "contentData",
              "id": "46942"
            },
            {
              "type": "contentData",
              "id": "46944"
            },
            {
              "type": "contentData",
              "id": "46946"
            },
            {
              "type": "contentData",
              "id": "46947"
            },
            {
              "type": "contentData",
              "id": "72562"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7143"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "6131"
            },
            {
              "type": "topic",
              "id": "6132"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79808"
            },
            {
              "type": "tag",
              "id": "79809"
            },
            {
              "type": "tag",
              "id": "79810"
            },
            {
              "type": "tag",
              "id": "79811"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "19993",
      "attributes": {
        "slug": "581-latin-rudiments-basic-brazilian-phrases",
        "type": "live",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-11-22 14:41:04",
        "archivedOn": "",
        "createdOn": "2013-11-22 14:41:04",
        "difficulty": "All Skill Levels",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "19993",
        "qnaVideo": "",
        "style": "",
        "title": "Latin Rudiments - Basic Brazilian Phrases",
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
              "id": "1119"
            },
            {
              "type": "contentData",
              "id": "11818"
            },
            {
              "type": "contentData",
              "id": "11819"
            },
            {
              "type": "contentData",
              "id": "11820"
            },
            {
              "type": "contentData",
              "id": "11821"
            },
            {
              "type": "contentData",
              "id": "11822"
            },
            {
              "type": "contentData",
              "id": "46935"
            },
            {
              "type": "contentData",
              "id": "46936"
            },
            {
              "type": "contentData",
              "id": "46938"
            },
            {
              "type": "contentData",
              "id": "46940"
            },
            {
              "type": "contentData",
              "id": "72561"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7142"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "6129"
            },
            {
              "type": "topic",
              "id": "6130"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79801"
            },
            {
              "type": "tag",
              "id": "79802"
            },
            {
              "type": "tag",
              "id": "79803"
            },
            {
              "type": "tag",
              "id": "79804"
            },
            {
              "type": "tag",
              "id": "79805"
            },
            {
              "type": "tag",
              "id": "79806"
            },
            {
              "type": "tag",
              "id": "79807"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "567"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "19997",
      "attributes": {
        "slug": "583-brain-twisting-odd-time-grooves",
        "type": "live",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-11-25 08:56:26",
        "archivedOn": "",
        "createdOn": "2013-11-25 08:56:26",
        "difficulty": "Intermediate",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "19997",
        "qnaVideo": "",
        "style": "",
        "title": "Brain-Twisting Odd-Time Grooves",
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
              "id": "1117"
            },
            {
              "type": "contentData",
              "id": "11829"
            },
            {
              "type": "contentData",
              "id": "11830"
            },
            {
              "type": "contentData",
              "id": "46924"
            },
            {
              "type": "contentData",
              "id": "46925"
            },
            {
              "type": "contentData",
              "id": "46928"
            },
            {
              "type": "contentData",
              "id": "46929"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7140"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "6124"
            },
            {
              "type": "topic",
              "id": "6125"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79790"
            },
            {
              "type": "tag",
              "id": "79791"
            },
            {
              "type": "tag",
              "id": "79792"
            },
            {
              "type": "tag",
              "id": "79793"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20001",
      "attributes": {
        "slug": "585-single-ratamacue-applications",
        "type": "live",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-11-28 04:45:44",
        "archivedOn": "",
        "createdOn": "2013-11-28 04:45:44",
        "difficulty": "Beginner",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20001",
        "qnaVideo": "",
        "style": "",
        "title": "Single-Ratamacue Applications",
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
              "id": "1116"
            },
            {
              "type": "contentData",
              "id": "11838"
            },
            {
              "type": "contentData",
              "id": "11839"
            },
            {
              "type": "contentData",
              "id": "11840"
            },
            {
              "type": "contentData",
              "id": "46916"
            },
            {
              "type": "contentData",
              "id": "46918"
            },
            {
              "type": "contentData",
              "id": "46920"
            },
            {
              "type": "contentData",
              "id": "46922"
            },
            {
              "type": "contentData",
              "id": "72559"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7138"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "6119"
            },
            {
              "type": "topic",
              "id": "6120"
            },
            {
              "type": "topic",
              "id": "6121"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79774"
            },
            {
              "type": "tag",
              "id": "79775"
            },
            {
              "type": "tag",
              "id": "79776"
            },
            {
              "type": "tag",
              "id": "79777"
            },
            {
              "type": "tag",
              "id": "79778"
            },
            {
              "type": "tag",
              "id": "79779"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "565"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20004",
      "attributes": {
        "slug": "586-crashing-it-up-part-1",
        "type": "live",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-12-01 00:56:55",
        "archivedOn": "",
        "createdOn": "2013-12-01 00:56:55",
        "difficulty": "Intermediate",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20004",
        "qnaVideo": "",
        "style": "",
        "title": "Crashing It Up - Part 1",
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
              "id": "1115"
            },
            {
              "type": "contentData",
              "id": "11843"
            },
            {
              "type": "contentData",
              "id": "11844"
            },
            {
              "type": "contentData",
              "id": "11845"
            },
            {
              "type": "contentData",
              "id": "11846"
            },
            {
              "type": "contentData",
              "id": "46909"
            },
            {
              "type": "contentData",
              "id": "46911"
            },
            {
              "type": "contentData",
              "id": "46913"
            },
            {
              "type": "contentData",
              "id": "46914"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7137"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "6117"
            },
            {
              "type": "topic",
              "id": "6118"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79770"
            },
            {
              "type": "tag",
              "id": "79771"
            },
            {
              "type": "tag",
              "id": "79772"
            },
            {
              "type": "tag",
              "id": "79773"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20006",
      "attributes": {
        "slug": "587-rudiment-burn-flam-paradiddle-diddle",
        "type": "live",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-12-02 00:49:06",
        "archivedOn": "",
        "createdOn": "2013-12-02 00:49:06",
        "difficulty": "All Skill Levels",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20006",
        "qnaVideo": "",
        "style": "",
        "title": "Rudiment Burn - Flam Paradiddle-diddle",
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
              "id": "1114"
            },
            {
              "type": "contentData",
              "id": "11848"
            },
            {
              "type": "contentData",
              "id": "11849"
            },
            {
              "type": "contentData",
              "id": "46905"
            },
            {
              "type": "contentData",
              "id": "46907"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7136"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "6113"
            },
            {
              "type": "topic",
              "id": "6114"
            },
            {
              "type": "topic",
              "id": "6115"
            },
            {
              "type": "topic",
              "id": "6116"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79761"
            },
            {
              "type": "tag",
              "id": "79762"
            },
            {
              "type": "tag",
              "id": "79763"
            },
            {
              "type": "tag",
              "id": "79764"
            },
            {
              "type": "tag",
              "id": "79765"
            },
            {
              "type": "tag",
              "id": "79766"
            },
            {
              "type": "tag",
              "id": "79767"
            },
            {
              "type": "tag",
              "id": "79768"
            },
            {
              "type": "tag",
              "id": "79769"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "563"
            },
            {
              "type": "playlist",
              "id": "564"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20081",
      "attributes": {
        "slug": "589-sexy-sextuplets-3",
        "type": "live",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-12-03 01:16:16",
        "archivedOn": "",
        "createdOn": "2013-12-03 01:16:16",
        "difficulty": "Advanced",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20081",
        "qnaVideo": "",
        "style": "",
        "title": "Sexy Sextuplets #3",
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
              "id": "1112"
            },
            {
              "type": "contentData",
              "id": "11862"
            },
            {
              "type": "contentData",
              "id": "11863"
            },
            {
              "type": "contentData",
              "id": "46895"
            },
            {
              "type": "contentData",
              "id": "46896"
            },
            {
              "type": "contentData",
              "id": "46898"
            },
            {
              "type": "contentData",
              "id": "46900"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7128"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "6108"
            },
            {
              "type": "topic",
              "id": "6109"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79714"
            },
            {
              "type": "tag",
              "id": "79715"
            },
            {
              "type": "tag",
              "id": "79716"
            },
            {
              "type": "tag",
              "id": "79717"
            },
            {
              "type": "tag",
              "id": "79718"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "561"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20084",
      "attributes": {
        "slug": "590-7-beats-you-dont-need-to-know",
        "type": "live",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-12-04 00:24:52",
        "archivedOn": "",
        "createdOn": "2013-12-04 00:24:52",
        "difficulty": "All Skill Levels",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20084",
        "qnaVideo": "",
        "style": "",
        "title": "7 Beats You Don't Need To Know",
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
              "id": "1111"
            },
            {
              "type": "contentData",
              "id": "11866"
            },
            {
              "type": "contentData",
              "id": "11867"
            },
            {
              "type": "contentData",
              "id": "46887"
            },
            {
              "type": "contentData",
              "id": "46889"
            },
            {
              "type": "contentData",
              "id": "46891"
            },
            {
              "type": "contentData",
              "id": "46892"
            },
            {
              "type": "contentData",
              "id": "72554"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7127"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "6106"
            },
            {
              "type": "topic",
              "id": "6107"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79708"
            },
            {
              "type": "tag",
              "id": "79709"
            },
            {
              "type": "tag",
              "id": "79710"
            },
            {
              "type": "tag",
              "id": "79711"
            },
            {
              "type": "tag",
              "id": "79712"
            },
            {
              "type": "tag",
              "id": "79713"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20086",
      "attributes": {
        "slug": "591-hi-hat-technique",
        "type": "live",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-12-04 00:42:40",
        "archivedOn": "",
        "createdOn": "2013-12-04 00:42:40",
        "difficulty": "All Skill Levels",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20086",
        "qnaVideo": "",
        "style": "",
        "title": "Hi-Hat Technique",
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
              "id": "1110"
            },
            {
              "type": "contentData",
              "id": "11869"
            },
            {
              "type": "contentData",
              "id": "11870"
            },
            {
              "type": "contentData",
              "id": "46884"
            },
            {
              "type": "contentData",
              "id": "46885"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7126"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "6103"
            },
            {
              "type": "topic",
              "id": "6104"
            },
            {
              "type": "topic",
              "id": "6105"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79700"
            },
            {
              "type": "tag",
              "id": "79701"
            },
            {
              "type": "tag",
              "id": "79702"
            },
            {
              "type": "tag",
              "id": "79703"
            },
            {
              "type": "tag",
              "id": "79704"
            },
            {
              "type": "tag",
              "id": "79705"
            },
            {
              "type": "tag",
              "id": "79706"
            },
            {
              "type": "tag",
              "id": "79707"
            }
          ]
        },
        "playlist": {
          "data": [
            {
              "type": "playlist",
              "id": "560"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20092",
      "attributes": {
        "slug": "592-heavy-metal-grooves",
        "type": "live",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-12-06 00:53:20",
        "archivedOn": "",
        "createdOn": "2013-12-06 00:53:20",
        "difficulty": "Intermediate",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20092",
        "qnaVideo": "",
        "style": "",
        "title": "Heavy Metal Grooves",
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
              "id": "1109"
            },
            {
              "type": "contentData",
              "id": "11873"
            },
            {
              "type": "contentData",
              "id": "11874"
            },
            {
              "type": "contentData",
              "id": "46876"
            },
            {
              "type": "contentData",
              "id": "46878"
            },
            {
              "type": "contentData",
              "id": "46880"
            },
            {
              "type": "contentData",
              "id": "46882"
            },
            {
              "type": "contentData",
              "id": "72553"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7125"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "6100"
            },
            {
              "type": "topic",
              "id": "6101"
            },
            {
              "type": "topic",
              "id": "6102"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79695"
            },
            {
              "type": "tag",
              "id": "79696"
            },
            {
              "type": "tag",
              "id": "79697"
            },
            {
              "type": "tag",
              "id": "79698"
            },
            {
              "type": "tag",
              "id": "79699"
            }
          ]
        }
      }
    },
    {
      "type": "content",
      "id": "20094",
      "attributes": {
        "slug": "593-the-guaguanco-2",
        "type": "live",
        "sort": "0",
        "status": "published",
        "totalXp": "",
        "brand": "drumeo",
        "language": "en-US",
        "showInNewFeed": "",
        "user": "",
        "publishedOn": "2013-12-09 01:33:32",
        "archivedOn": "",
        "createdOn": "2013-12-09 01:33:32",
        "difficulty": "Intermediate",
        "homeStaffPickRating": "",
        "legacyId": "",
        "legacyWordpressPostId": "20094",
        "qnaVideo": "",
        "style": "",
        "title": "The Guaguanco #2",
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
              "id": "1108"
            },
            {
              "type": "contentData",
              "id": "11877"
            },
            {
              "type": "contentData",
              "id": "11878"
            },
            {
              "type": "contentData",
              "id": "46869"
            },
            {
              "type": "contentData",
              "id": "46871"
            },
            {
              "type": "contentData",
              "id": "46873"
            },
            {
              "type": "contentData",
              "id": "46874"
            },
            {
              "type": "contentData",
              "id": "72552"
            }
          ]
        },
        "instructor": {
          "data": [
            {
              "type": "instructor",
              "id": "7124"
            }
          ]
        },
        "topic": {
          "data": [
            {
              "type": "topic",
              "id": "6098"
            },
            {
              "type": "topic",
              "id": "6099"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "79691"
            },
            {
              "type": "tag",
              "id": "79692"
            },
            {
              "type": "tag",
              "id": "79693"
            },
            {
              "type": "tag",
              "id": "79694"
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
      "id": "31934",
      "attributes": {
        "slug": "chuck-silverman",
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
        "name": "Chuck Silverman",
        "released": null,
        "slow_bpm": null,
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
      "type": "contentData",
      "id": "1133",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11777",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/567-inverted-paradiddle-applications.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11778",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/262500-card-thumbnail-maxres-1595495102.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46993",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46994",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/mp3s/drumeo-edge-567.zip",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46996",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46998",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/pdfs/drumeo-edge-567.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72567",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/library/1080/dave-atkinson-05.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7155",
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
      "id": "6147",
      "attributes": {
        "topic": "Beats",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "6148",
      "attributes": {
        "topic": "Diddle Rudiments",
        "position": 2
      }
    },
    {
      "type": "topic",
      "id": "6149",
      "attributes": {
        "topic": "Fills",
        "position": 3
      }
    },
    {
      "type": "topic",
      "id": "6150",
      "attributes": {
        "topic": "Rudiments",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79868",
      "attributes": {
        "tag": "fills",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79869",
      "attributes": {
        "tag": "rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79870",
      "attributes": {
        "tag": "advanced lessons",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79871",
      "attributes": {
        "tag": "beats",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79872",
      "attributes": {
        "tag": "diddle rudiments",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "79873",
      "attributes": {
        "tag": "dave atkinson",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "79874",
      "attributes": {
        "tag": "pl rudimental applications",
        "position": 7
      }
    },
    {
      "type": "playlist",
      "id": "574",
      "attributes": {
        "playlist": "rudimental applications",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "1132",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11781",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/drumeo-edge-568-1.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11782",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/drumeo-edge-568-2.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "11783",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/262499-card-thumbnail-maxres-1595255773.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46986",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46987",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/pdfs/drumeo-edge-568.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46989",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46991",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/mp3s/drumeo-edge-568.zip",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72566",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/library/1080/chuck-silverman-07.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7154",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31934"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "6145",
      "attributes": {
        "topic": "Latin",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "6146",
      "attributes": {
        "topic": "Rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79861",
      "attributes": {
        "tag": "beginner lessons",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79862",
      "attributes": {
        "tag": "intermediate lessons",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79863",
      "attributes": {
        "tag": "rudiments",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79864",
      "attributes": {
        "tag": "advanced lessons",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79865",
      "attributes": {
        "tag": "latin",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "79866",
      "attributes": {
        "tag": "chuck silverman",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "79867",
      "attributes": {
        "tag": "pl latin rudiments",
        "position": 7
      }
    },
    {
      "type": "playlist",
      "id": "573",
      "attributes": {
        "playlist": "latin rudiments",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "1131",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11784",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/262498-card-thumbnail-maxres-1595324381.png",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7153",
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
      "id": "6144",
      "attributes": {
        "topic": "Question & Answer",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79856",
      "attributes": {
        "tag": "beginner lessons",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79857",
      "attributes": {
        "tag": "intermediate lessons",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79858",
      "attributes": {
        "tag": "advanced lessons",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79859",
      "attributes": {
        "tag": "question & answer",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79860",
      "attributes": {
        "tag": "aaron edgar",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "1130",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11787",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/570-odd-sounding-4-4-grooves.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11788",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/262497-card-thumbnail-maxres-1595239266.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46979",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46980",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/pdfs/drumeo-edge-570.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46982",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46984",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/mp3s/drumeo-edge-570.zip",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7152",
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
      "id": "6143",
      "attributes": {
        "topic": "Beats",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79853",
      "attributes": {
        "tag": "intermediate lessons",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79854",
      "attributes": {
        "tag": "beats",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79855",
      "attributes": {
        "tag": "aaron edgar",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "1129",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11789",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/261677-card-thumbnail-maxres-1595075654.png",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7151",
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
      "id": "6142",
      "attributes": {
        "topic": "Drum Set-Up",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79849",
      "attributes": {
        "tag": "beginner lessons",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79850",
      "attributes": {
        "tag": "drum set-up",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79851",
      "attributes": {
        "tag": "jared falk",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79852",
      "attributes": {
        "tag": "pl beg essentials",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "1126",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11794",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/drumeo-edge-574-1.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11795",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/drumeo-edge-574-2.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "11796",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/261675-card-thumbnail-maxres-1595072252.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46971",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46973",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/pdfs/drumeo-edge-574.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46975",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46976",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/mp3s/drumeo-edge-574.zip",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7148",
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
      "type": "topic",
      "id": "6139",
      "attributes": {
        "topic": "Beats",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79831",
      "attributes": {
        "tag": "beginner lessons",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79832",
      "attributes": {
        "tag": "intermediate lessons",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79833",
      "attributes": {
        "tag": "advanced lessons",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79834",
      "attributes": {
        "tag": "beats",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79835",
      "attributes": {
        "tag": "jay deachman",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "79836",
      "attributes": {
        "tag": "pl famous drummer breakdowns",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "79837",
      "attributes": {
        "tag": "pl decades of drumming",
        "position": 7
      }
    },
    {
      "type": "playlist",
      "id": "571",
      "attributes": {
        "playlist": "decades of drumming",
        "position": 1
      }
    },
    {
      "type": "playlist",
      "id": "572",
      "attributes": {
        "playlist": "famous drummer breakdowns",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "1124",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11802",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/576-sexy-sextuplets-2.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11803",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/261676-card-thumbnail-maxres-1594994033.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46961",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46962",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/pdfs/drumeo-edge-576.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46964",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46966",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/mp3s/drumeo-edge-576.zip",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7146",
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
      "id": "6136",
      "attributes": {
        "topic": "Beats",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "6137",
      "attributes": {
        "topic": "Rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79821",
      "attributes": {
        "tag": "intermediate lessons",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79822",
      "attributes": {
        "tag": "rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79823",
      "attributes": {
        "tag": "beats",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79824",
      "attributes": {
        "tag": "aaron edgar",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79825",
      "attributes": {
        "tag": "pl rudimental applications",
        "position": 5
      }
    },
    {
      "type": "playlist",
      "id": "570",
      "attributes": {
        "playlist": "rudimental applications",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "1122",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11805",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/261674-card-thumbnail-maxres-1595075936.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11806",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/drumeo-edge-578-1.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11807",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/drumeo-edge-578-2.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46957",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46958",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/pdfs/drumeo-edge-578.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72563",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/466900995_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7145",
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
      "id": "6135",
      "attributes": {
        "topic": "Jazz",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79816",
      "attributes": {
        "tag": "intermediate lessons",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79817",
      "attributes": {
        "tag": "jazz",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79818",
      "attributes": {
        "tag": "issah contractor",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79819",
      "attributes": {
        "tag": "pl famous drummer breakdowns",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79820",
      "attributes": {
        "tag": "pl style analysis",
        "position": 5
      }
    },
    {
      "type": "playlist",
      "id": "568",
      "attributes": {
        "playlist": "famous drummer breakdowns",
        "position": 1
      }
    },
    {
      "type": "playlist",
      "id": "569",
      "attributes": {
        "playlist": "style analysis",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "1121",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11810",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/579-using-a-left-side-tom.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11811",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/262700-card-thumbnail-maxres-1594639281.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46950",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46951",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/pdfs/drumeo-edge-579.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46953",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46955",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/mp3s/drumeo-edge-579.zip",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7144",
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
      "type": "topic",
      "id": "6133",
      "attributes": {
        "topic": "Beats",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "6134",
      "attributes": {
        "topic": "Creative Drumming",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79812",
      "attributes": {
        "tag": "intermediate lessons",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79813",
      "attributes": {
        "tag": "beats",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79814",
      "attributes": {
        "tag": "chris warunki",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79815",
      "attributes": {
        "tag": "creative drumming",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "1120",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11814",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/261672-card-thumbnail-maxres-1594892331.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11815",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/580-the-guaguanco-1.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46942",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46944",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/pdfs/drumeo-edge-580.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46946",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46947",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/mp3s/drumeo-edge-580.zip",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72562",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/466904544_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7143",
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
      "id": "6131",
      "attributes": {
        "topic": "Beats",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "6132",
      "attributes": {
        "topic": "Latin",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79808",
      "attributes": {
        "tag": "intermediate lessons",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79809",
      "attributes": {
        "tag": "beats",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79810",
      "attributes": {
        "tag": "latin",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79811",
      "attributes": {
        "tag": "stephen taylor",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "1119",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11818",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/drumeo-edge-568-1.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11819",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/drumeo-edge-568-2.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "11820",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/drumeo-edge-581-1.png",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "11821",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/drumeo-edge-581-2.png",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "11822",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/261671-card-thumbnail-maxres-1595000493.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46935",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46936",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/pdfs/drumeo-edge-581-pdfs.zip",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46938",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46940",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/mp3s/drumeo-edge-581-mp3s.zip",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72561",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/library/1080/chuck-silverman-04.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7142",
      "attributes": {
        "position": 1
      },
      "relationships": {
        "instructor": {
          "data": {
            "type": "instructor",
            "id": "31934"
          }
        }
      }
    },
    {
      "type": "topic",
      "id": "6129",
      "attributes": {
        "topic": "Latin",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "6130",
      "attributes": {
        "topic": "Rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79801",
      "attributes": {
        "tag": "beginner lessons",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79802",
      "attributes": {
        "tag": "intermediate lessons",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79803",
      "attributes": {
        "tag": "rudiments",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79804",
      "attributes": {
        "tag": "advanced lessons",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79805",
      "attributes": {
        "tag": "latin",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "79806",
      "attributes": {
        "tag": "chuck silverman",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "79807",
      "attributes": {
        "tag": "pl latin rudiments",
        "position": 7
      }
    },
    {
      "type": "playlist",
      "id": "567",
      "attributes": {
        "playlist": "latin rudiments",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "1117",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11829",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/583-brain-twisting-odd-time-grooves.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11830",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/261670-card-thumbnail-maxres-1594931814.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46924",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46925",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/pdfs/drumeo-edge-583.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46928",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46929",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/mp3s/drumeo-edge-583.zip",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7140",
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
      "id": "6124",
      "attributes": {
        "topic": "Beats",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "6125",
      "attributes": {
        "topic": "Odd-Time",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79790",
      "attributes": {
        "tag": "intermediate lessons",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79791",
      "attributes": {
        "tag": "beats",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79792",
      "attributes": {
        "tag": "aaron edgar",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79793",
      "attributes": {
        "tag": "odd time",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "1116",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11838",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/drumeo-edge-585-1.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11839",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/drumeo-edge-585-2.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "11840",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/262699-card-thumbnail-maxres-1594825773.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46916",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46918",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/pdfs/drumeo-edge-585.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46920",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46922",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/mp3s/drumeo-edge-585.zip",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72559",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/library/1080/jared-falk-02.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7138",
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
      "id": "6119",
      "attributes": {
        "topic": "Beats",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "6120",
      "attributes": {
        "topic": "Drag Rudiments",
        "position": 2
      }
    },
    {
      "type": "topic",
      "id": "6121",
      "attributes": {
        "topic": "Rudiments",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79774",
      "attributes": {
        "tag": "beginner lessons",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79775",
      "attributes": {
        "tag": "rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79776",
      "attributes": {
        "tag": "beats",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79777",
      "attributes": {
        "tag": "drag rudiments",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79778",
      "attributes": {
        "tag": "jared falk",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "79779",
      "attributes": {
        "tag": "pl rudimental applications",
        "position": 6
      }
    },
    {
      "type": "playlist",
      "id": "565",
      "attributes": {
        "playlist": "rudimental applications",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "1115",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11843",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/drumeo-edge-586-1.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11844",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/drumeo-edge-586-2.png",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "11845",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/drumeo-edge-586-3.png",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "11846",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/261669-card-thumbnail-maxres-1594937522.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46909",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46911",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/pdfs/drumeo-edge-586.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46913",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46914",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/mp3s/drumeo-edge-586.zip",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7137",
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
      "id": "6117",
      "attributes": {
        "topic": "Dynamic Drumming",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "6118",
      "attributes": {
        "topic": "Fills",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79770",
      "attributes": {
        "tag": "fills",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79771",
      "attributes": {
        "tag": "intermediate lessons",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79772",
      "attributes": {
        "tag": "dynamic drumming",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79773",
      "attributes": {
        "tag": "michael schack",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "1114",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11848",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/587-rudiment-burn-flam-paradiddle-diddle.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11849",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/261667-card-thumbnail-maxres-1594825940.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46905",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46907",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/pdfs/drumeo-edge-587.pdf",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7136",
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
      "id": "6113",
      "attributes": {
        "topic": "Flam Rudiments",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "6114",
      "attributes": {
        "topic": "Rudiments",
        "position": 2
      }
    },
    {
      "type": "topic",
      "id": "6115",
      "attributes": {
        "topic": "Warm-Ups & Workouts",
        "position": 3
      }
    },
    {
      "type": "topic",
      "id": "6116",
      "attributes": {
        "topic": "Practice Pad",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79761",
      "attributes": {
        "tag": "practice pad",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79762",
      "attributes": {
        "tag": "beginner lessons",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79763",
      "attributes": {
        "tag": "intermediate lessons",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79764",
      "attributes": {
        "tag": "rudiments",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79765",
      "attributes": {
        "tag": "advanced lessons",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "79766",
      "attributes": {
        "tag": "flam rudiments",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "79767",
      "attributes": {
        "tag": "dave atkinson",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "79768",
      "attributes": {
        "tag": "pl rudiment burn",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "79769",
      "attributes": {
        "tag": "warm-ups & workouts",
        "position": 9
      }
    },
    {
      "type": "playlist",
      "id": "563",
      "attributes": {
        "playlist": "practice pad",
        "position": 1
      }
    },
    {
      "type": "playlist",
      "id": "564",
      "attributes": {
        "playlist": "rudiment burn",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "1112",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11862",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/589-sexy-sextuplets-3.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11863",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/261666-card-thumbnail-maxres-1594831597.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46895",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46896",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/pdfs/drumeo-edge-589.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46898",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46900",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/mp3s/drumeo-edge-589.zip",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7128",
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
      "id": "6108",
      "attributes": {
        "topic": "Beats",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "6109",
      "attributes": {
        "topic": "Rudiments",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79714",
      "attributes": {
        "tag": "rudiments",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79715",
      "attributes": {
        "tag": "advanced lessons",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79716",
      "attributes": {
        "tag": "beats",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79717",
      "attributes": {
        "tag": "aaron edgar",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79718",
      "attributes": {
        "tag": "pl rudimental applications",
        "position": 5
      }
    },
    {
      "type": "playlist",
      "id": "561",
      "attributes": {
        "playlist": "rudimental applications",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "1111",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11866",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/590-7-beats-you-dont-need-to-know.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11867",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/261665-card-thumbnail-maxres-1594459188.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46887",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46889",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/pdfs/drumeo-edge-590.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46891",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46892",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/mp3s/drumeo-edge-590.zip",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72554",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/library/1080/jared-falk-03.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7127",
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
      "id": "6106",
      "attributes": {
        "topic": "Beats",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "6107",
      "attributes": {
        "topic": "Practice Tips",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79708",
      "attributes": {
        "tag": "beginner lessons",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79709",
      "attributes": {
        "tag": "intermediate lessons",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79710",
      "attributes": {
        "tag": "advanced lessons",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79711",
      "attributes": {
        "tag": "practice tips",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79712",
      "attributes": {
        "tag": "beats",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "79713",
      "attributes": {
        "tag": "jared falk",
        "position": 6
      }
    },
    {
      "type": "contentData",
      "id": "1110",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11869",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/1516189045-drumeo-edge-591-1.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11870",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/261664-card-thumbnail-maxres-1594826647.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46884",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46885",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/1516189041-drumeo-edge-591-1.pdf",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7126",
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
      "id": "6103",
      "attributes": {
        "topic": "Drum Set-Up",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "6104",
      "attributes": {
        "topic": "Hand Technique",
        "position": 2
      }
    },
    {
      "type": "topic",
      "id": "6105",
      "attributes": {
        "topic": "Hi-Hat",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79700",
      "attributes": {
        "tag": "beginner lessons",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79701",
      "attributes": {
        "tag": "hand technique",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79702",
      "attributes": {
        "tag": "drum set-up",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79703",
      "attributes": {
        "tag": "intermediate lessons",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79704",
      "attributes": {
        "tag": "advanced lessons",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "79705",
      "attributes": {
        "tag": "dave atkinson",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "79706",
      "attributes": {
        "tag": "pl top rated",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "79707",
      "attributes": {
        "tag": "hi-hat",
        "position": 8
      }
    },
    {
      "type": "playlist",
      "id": "560",
      "attributes": {
        "playlist": "top rated",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "1109",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11873",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/592-heavy-metal-grooves.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11874",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/261663-card-thumbnail-maxres-1594826569.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46876",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46878",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/pdfs/drumeo-edge-592.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46880",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46882",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/mp3s/drumeo-edge-592.zip",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72553",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/library/1080/ash-pearson-06.jpg",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7125",
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
      "id": "6100",
      "attributes": {
        "topic": "Beats",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "6101",
      "attributes": {
        "topic": "Fills",
        "position": 2
      }
    },
    {
      "type": "topic",
      "id": "6102",
      "attributes": {
        "topic": "Metal",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79695",
      "attributes": {
        "tag": "fills",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79696",
      "attributes": {
        "tag": "intermediate lessons",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79697",
      "attributes": {
        "tag": "metal",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79698",
      "attributes": {
        "tag": "beats",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "79699",
      "attributes": {
        "tag": "ash pearson",
        "position": 5
      }
    },
    {
      "type": "contentData",
      "id": "1108",
      "attributes": {
        "key": "description",
        "value": "",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11877",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/261662-card-thumbnail-maxres-1594827746.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "11878",
      "attributes": {
        "key": "sheet_music_image_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/jpegs/593-the-guaguanco-2.png",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46869",
      "attributes": {
        "key": "resource_name",
        "value": "Sheet Music PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46871",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/pdfs/drumeo-edge-593.pdf",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "46873",
      "attributes": {
        "key": "resource_name",
        "value": "MP3 Resources Pack",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "46874",
      "attributes": {
        "key": "resource_url",
        "value": "https://dz5i3s4prcfun.cloudfront.net/00-archive/mp3s/drumeo-edge-593.zip",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "72552",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://i.vimeocdn.com/video/466923792_640x360.jpg?r=pad",
        "position": 1
      }
    },
    {
      "type": "instructor",
      "id": "7124",
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
      "id": "6098",
      "attributes": {
        "topic": "Beats",
        "position": 1
      }
    },
    {
      "type": "topic",
      "id": "6099",
      "attributes": {
        "topic": "Latin",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79691",
      "attributes": {
        "tag": "intermediate lessons",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "79692",
      "attributes": {
        "tag": "beats",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "79693",
      "attributes": {
        "tag": "latin",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "79694",
      "attributes": {
        "tag": "stephen taylor",
        "position": 4
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
          "id": 31917,
          "slug": "tony-royster-jr",
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
          "name": "Tony Royster Jr.",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
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
          "id": 31926,
          "slug": "lionel-duperron",
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
          "name": "Lionel Duperron",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31927,
          "slug": "cobus-potgieter",
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
          "name": "Cobus Potgieter",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
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
          "id": 31931,
          "slug": "ron-thaler",
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
          "name": "Ron Thaler",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
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
          "id": 31933,
          "slug": "joe-crabtree",
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
          "name": "Joe Crabtree",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31934,
          "slug": "chuck-silverman",
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
          "name": "Chuck Silverman",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
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
          "id": 31936,
          "slug": "mark-mclean",
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
          "name": "Mark McLean",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31937,
          "slug": "kenny-aronoff",
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
          "name": "Kenny Aronoff",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31938,
          "slug": "sonny-emory",
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
          "name": "Sonny Emory",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31940,
          "slug": "angela-kelman",
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
          "name": "Angela Kelman",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31941,
          "slug": "steve-goold",
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
          "name": "Steve Goold",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
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
          "id": 31943,
          "slug": "flo-mounier",
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
          "name": "Flo Mounier",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
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
          "id": 31945,
          "slug": "ben-sesar",
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
          "name": "Ben Sesar",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31946,
          "slug": "jack-duncan",
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
          "name": "Jack Duncan",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31948,
          "slug": "garth-richardson",
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
          "name": "Garth Richardson",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31949,
          "slug": "bernard-purdie",
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
          "name": "Bernard Purdie",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31950,
          "slug": "gerry-brown",
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
          "name": "Gerry Brown",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31951,
          "slug": "carter-mclean",
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
          "name": "Carter McLean",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
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
          "id": 31954,
          "slug": "will-calhoun",
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
          "name": "Will Calhoun",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
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
          "id": 31956,
          "slug": "matthew-hodgins",
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
          "name": "Matthew Hodgins",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 31957,
          "slug": "mike-machine",
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
          "name": "Mike Machine",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
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
          "id": 31961,
          "slug": "john-lamb",
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
          "name": "John Lamb",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
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
          "id": 31975,
          "slug": "bobby-james",
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
          "name": "Bobby James",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
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
          "id": 191328,
          "slug": "robb-ryan",
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
          "created_on": "2018-01-31 16:48:49",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Robb Ryan",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 191330,
          "slug": "spencer-bowman",
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
          "created_on": "2018-01-31 16:53:35",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Spencer Bowman",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 191331,
          "slug": "brian-crane",
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
          "created_on": "2018-01-31 16:54:24",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Brian Crane",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 191332,
          "slug": "drum-syndicate",
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
          "created_on": "2018-01-31 16:55:17",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Drum Syndicate",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 191334,
          "slug": "ronnie-tutt",
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
          "created_on": "2018-01-31 16:56:51",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Ronnie Tutt",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
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
          "id": 196627,
          "slug": "mercedes-sherida",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-02-22 20:00:00",
          "archived_on": null,
          "created_on": "2018-02-23 12:27:41",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Mercedes Lander",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
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
          "id": 203863,
          "slug": "dan-wilding",
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
          "created_on": "2018-05-11 11:01:05",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Dan Wilding",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
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
          "id": 212786,
          "slug": "mike-portnoy",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-09-23 19:00:00",
          "archived_on": null,
          "created_on": "2018-09-24 17:21:23",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Mike Portnoy",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 212787,
          "slug": "neil-peart",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-09-23 19:00:00",
          "archived_on": null,
          "created_on": "2018-09-24 17:23:29",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Neil Peart",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 212788,
          "slug": "aaron-spears",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-09-23 19:00:00",
          "archived_on": null,
          "created_on": "2018-09-24 17:24:29",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Aaron Spears",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
          "avatar_url": null,
          "length_in_seconds": null,
          "soundslice_slug": null,
          "staff_pick_rating": null,
          "student_id": null,
          "vimeo_video_id": null,
          "youtube_video_id": null
        },
        {
          "id": 212789,
          "slug": "mike-mangini",
          "type": "instructor",
          "sort": 0,
          "status": "published",
          "total_xp": null,
          "brand": "drumeo",
          "language": "en-US",
          "show_in_new_feed": null,
          "user": "",
          "published_on": "2018-09-23 19:00:00",
          "archived_on": null,
          "created_on": "2018-09-24 17:26:16",
          "difficulty": null,
          "home_staff_pick_rating": null,
          "legacy_id": null,
          "legacy_wordpress_post_id": null,
          "qna_video": null,
          "style": null,
          "title": null,
          "xp": null,
          "album": null,
          "artist": null,
          "bpm": null,
          "cd_tracks": null,
          "chord_or_scale": null,
          "difficulty_range": null,
          "episode_number": null,
          "exercise_book_pages": null,
          "fast_bpm": null,
          "includes_song": null,
          "instructors": null,
          "live_event_start_time": null,
          "live_event_end_time": null,
          "live_event_youtube_id": null,
          "live_stream_feed_type": null,
          "name": "Mike Mangini",
          "released": null,
          "slow_bpm": null,
          "transcriber_name": null,
          "week": null,
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
      ]
    },
    "activeFilters": {
      "content_type": [
        "course",
        "pack",
        "quick-tips",
        "live"
      ]
    },
    "pagination": {
      "total": 1594,
      "count": 20,
      "per_page": "20",
      "current_page": "1",
      "total_pages": 80
    }
  },
  "links": []
}
EOT;
// -->

// <!--
$commentsData = <<<'EOC'
{
  "data": [
    {
      "type": "comment",
      "id": "122097",
      "attributes": {
        "comment": "<p>Ahh finally a song I like but it's too fast I'm not grasping it it must not be beginner level</p>",
        "temporary_display_name": "",
        "user": "165350",
        "created_on": "2020-04-30 03:13:41",
        "deleted_at": null,
        "like_count": "1",
        "like_users": [
          [
            344840
          ]
        ],
        "is_liked": false,
        "display_name": "kristapatterson777@gmail.com"
      },
      "relationships": {
        "content": {
          "data": {
            "type": "content",
            "id": "253541"
          }
        },
        "replies": {
          "data": [
            {
              "type": "comment",
              "id": "123342"
            }
          ]
        },
        "user": {
          "data": {
            "type": "user",
            "id": "165350"
          }
        }
      }
    },
    {
      "type": "comment",
      "id": "121008",
      "attributes": {
        "comment": "<p>Yessss! Love this one</p>",
        "temporary_display_name": "",
        "user": "153728",
        "created_on": "2020-04-24 19:17:28",
        "deleted_at": null,
        "like_count": "0",
        "is_liked": false,
        "display_name": "joseph2535"
      },
      "relationships": {
        "content": {
          "data": {
            "type": "content",
            "id": "253541"
          }
        },
        "replies": {
          "data": [
            {
              "type": "comment",
              "id": "121044"
            }
          ]
        },
        "user": {
          "data": {
            "type": "user",
            "id": "153728"
          }
        }
      }
    }
  ],
  "included": [
    {
      "type": "content",
      "id": "253541",
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
      "type": "user",
      "id": "344840",
      "attributes": {
        "email": "samv@pianote.com",
        "avatar": "https://d2vyvo0tyx8ig5.cloudfront.net/avatars/344840_1582570614276.jpg",
        "display_name": "Sam Vesely",
        "xp": 0,
        "access_level": "edge",
        "level_number": "1.0"
      }
    },
    {
      "type": "user",
      "id": "149630",
      "attributes": {
        "email": "lisa@pianote.com",
        "avatar": "https://d2vyvo0tyx8ig5.cloudfront.net/instructors/lisawitt.png",
        "display_name": "Lisa Witt",
        "xp": 0,
        "access_level": "team",
        "level_number": "1.0"
      }
    },
    {
      "type": "comment",
      "id": "123342",
      "attributes": {
        "comment": "<p>Sometimes songs have some trickier parts in them for sure! But there's nothing like a good challenge! :)&nbsp;</p>",
        "temporary_display_name": "",
        "user": "344840",
        "created_on": "2020-05-04 16:59:44",
        "deleted_at": null
      },
      "relationships": {
        "content": {
          "data": {
            "type": "content",
            "id": "253541"
          }
        },
        "user": {
          "data": {
            "type": "user",
            "id": "344840"
          }
        }
      }
    },
    {
      "type": "user",
      "id": "165350",
      "attributes": {
        "email": "kristapatterson777@gmail.com",
        "avatar": "https://d2vyvo0tyx8ig5.cloudfront.net/avatars/165350_1579387725483.jpg",
        "display_name": "kristapatterson777@gmail.com",
        "xp": 0,
        "access_level": "lifetime",
        "level_number": "1.0"
      }
    },
    {
      "type": "comment",
      "id": "121044",
      "attributes": {
        "comment": "<p>Hahah me too!!</p>",
        "temporary_display_name": "",
        "user": "149630",
        "created_on": "2020-04-24 22:25:14",
        "deleted_at": null
      },
      "relationships": {
        "content": {
          "data": {
            "type": "content",
            "id": "253541"
          }
        },
        "user": {
          "data": {
            "type": "user",
            "id": "149630"
          }
        }
      }
    },
    {
      "type": "user",
      "id": "153728",
      "attributes": {
        "email": "jose.vazquez.mateos@gmail.com",
        "avatar": "https://d2vyvo0tyx8ig5.cloudfront.net/avatars/153728_1587680426316.jpg",
        "display_name": "joseph2535",
        "xp": 0,
        "access_level": "piano",
        "level_number": "1.0"
      }
    }
  ],
  "meta": {
    "totalCommentsAndReplies": "4",
    "pagination": {
      "total": 2,
      "count": 2,
      "per_page": 10,
      "current_page": 1,
      "total_pages": 1
    }
  },
  "links": {
    "self": "https://dev.pianote.com/railcontent/comment?content_id=253541&page=1",
    "first": "https://dev.pianote.com/railcontent/comment?content_id=253541&page=1",
    "last": "https://dev.pianote.com/railcontent/comment?content_id=253541&page=1"
  }
}
EOC;
// -->

$user = [
    'avatar' => 'https://s3.amazonaws.com/pianote/defaults/avatar.png',
    'name' => 'brandon toews',
    'membership' => 'team',
    'level' => '2.3',
    'border' => 'blue',
];

$breadcrumbs = [
    'parents' => [
        [
            'label' => 'courses',
            'url' => '/router.php/vue/courses',
        ],
        [
            'label' => 'breaking the rules of drum tuning',
            'url' => '/router.php/vue/courses',
        ],
    ],
    'current' => [
        'label' => 'Kick Drum Tuning'
    ],
];

$lessonProgress = [
    'percent' => 25,
    'xp' => 100,
    'fixed' => false,
    'button' => [
        'theme' => 'white-wire',
        'iconClass' => 'fas fa-check',
        'labelText' => 'mark as complete',
        'href' => '#',
    ],
];

$description = [
    'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.',
    'Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.',
    'Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.'
];

$themeColor = 'drumeo';
$lessonContent = [
    'video_poster_image_url' => 'https://i.vimeocdn.com/video/935088558_1280x720.jpg?r=pad',
    'video_playback_endpoints' => '[{"file":"https:\/\/player.vimeo.com\/external\/444685587.sd.mp4?s=f2a3d5629ceca6aaca92aeeaa8002690a8121966&profile_id=139&oauth2_token_id=1284792283","width":426,"height":240},{"file":"https:\/\/player.vimeo.com\/external\/444685587.sd.mp4?s=f2a3d5629ceca6aaca92aeeaa8002690a8121966&profile_id=164&oauth2_token_id=1284792283","width":640,"height":360},{"file":"https:\/\/player.vimeo.com\/external\/444685587.sd.mp4?s=f2a3d5629ceca6aaca92aeeaa8002690a8121966&profile_id=165&oauth2_token_id=1284792283","width":960,"height":540},{"file":"https:\/\/player.vimeo.com\/external\/444685587.hd.mp4?s=53d1b30d79e3cd7e5375468b0aa27f07a633dab5&profile_id=174&oauth2_token_id=1284792283","width":1280,"height":720},{"file":"https:\/\/player.vimeo.com\/external\/444685587.hd.mp4?s=53d1b30d79e3cd7e5375468b0aa27f07a633dab5&profile_id=175&oauth2_token_id=1284792283","width":1920,"height":1080},{"file":"https:\/\/player.vimeo.com\/external\/444685587.hd.mp4?s=53d1b30d79e3cd7e5375468b0aa27f07a633dab5&profile_id=170&oauth2_token_id=1284792283","width":2560,"height":1440},{"file":"https:\/\/player.vimeo.com\/external\/444685587.hd.mp4?s=53d1b30d79e3cd7e5375468b0aa27f07a633dab5&profile_id=172&oauth2_token_id=1284792283","width":3840,"height":2160}]',
    'hlsManifestUrl' => 'https://player.vimeo.com/external/444685587.m3u8?s=081d3b4db34f62c05927360023f1401ab6169a3d&oauth2_token_id=1284792283',
    'captions' => '',
    'chapters' => [],
    'currentSecond' => '207',
    'contentId' => '265255',
    'userId' => '150259',
    'videoId' => '444685587',
    'castTitle' => 'Kick Drum Tuning',
    'progressState' => 'started',
    'videoLength' => 207,
    'like_count' => 13,
    'is_liked_by_current_user' => false,
];
$lessonContentYoutube = [
    'videoId' => '_Ye1nhmRMCo',
    'currentSecond' => '0',
    'totalDuration' => '15000',
    'progressState' => '',
    'contentId' => 23033,
];
$useLegacyPlayer = true;
$useYoutubePlayer = true;
@endphp

@section('musora-ui::menu')
    @include('musora-ui::sections.hamburger-edge-nav', ['active' => 'edge'])
    @include('sections.breadcrumbs-nav', $breadcrumbs)
@endsection

@section('musora-ui::app')
    <div class="relative" style="background-color: #191b1c;">
        <div class="mx-auto" style="max-width: 72.5rem;">
            @if($useYoutubePlayer)
                <transition appear name="fade">
                    <youtube-player
                            ref="mediaElementVueInstance"
                            video-id="{{ $lessonContentYoutube['videoId'] }}"
                            :current-second="{{ $lessonContentYoutube['currentSecond'] }}"
                            :total-duration="{{ $lessonContentYoutube['totalDuration'] }}"
                            progress-state="{{ $lessonContentYoutube['progressState'] }}"
                            content-id="{{ $lessonContentYoutube['contentId'] }}"
                            :use-intersection-observer="true"
                    >
                    </youtube-player>
                </transition>
            @else
                @if($useLegacyPlayer)
                    <transition appear name="fade">
                        <video-media-element
                                ref="mediaElementVueInstance"
                                element-id="lessonPlayer"
                                brand="drumeo"
                                theme-color="{{ $themeColor }}"
                                poster="{{ $lessonContent['video_poster_image_url'] ?? '' }}"
                                :sources="{{ $lessonContent['video_playback_endpoints'] }}"
                                hls-manifest-url="{{ $lessonContent['hlsManifestUrl'] ?? '' }}"
                                video-id="{{ $lessonContent['videoId'] }}"
                                content-id="{{ $lessonContent['contentId'] }}"
                                current-second="{{ $lessonContent['currentSecond'] }}"
                                progress-state="{{ $lessonContent['progressState'] }}"
                                video-length="{{ $lessonContent['videoLength'] }}"
                                :chapters="{{ json_encode($lessonContent['chapters'] ?? []) }}"
                                user-id="{{ $lessonContent['userId'] }}"
                                like-count="{{ $lessonContent['like_count'] ?? 0 }}"
                                :is-liked="{{ json_encode($lessonContent['is_liked_by_current_user'] ?? false) }}"
                                :check-for-timecode="true"
                        >
                            <div class="vs-widescreen vs-title vs-text-{{ $themeColor }}">
                                <i class="fas fa-spinner fa-spin vs-absolute-center"></i>
                            </div>
                        </video-media-element>
                    </transition>
                @else
                    <transition appear name="fade">
                        <video-player
                                ref="mediaElementVueInstance"
                                theme-color="{{ $themeColor }}"
                                poster="{{ $lessonContent['video_poster_image_url'] ?? '' }}"
                                :sources="{{ $lessonContent['video_playback_endpoints'] }}"
                                hls-manifest-url="{{ $lessonContent['hlsManifestUrl'] ?? '' }}"
                                captions="{{ $lessonContent['captions'] ?? '' }}"
                                :chapters="{{ json_encode($lessonContent['chapters'] ?? []) }}"
                                current-second="{{ $lessonContent['currentSecond'] }}"
                                content-id="{{ $lessonContent['contentId'] }}"
                                user-id="{{ $lessonContent['userId'] }}"
                                video-id="{{ $lessonContent['videoId'] }}"
                                cast-title="{{ $lessonContent['castTitle'] }}"
                                :use-intersection-observer="true"
                        >
                            <div class="widescreen title text-{{ $themeColor }} mb-2"></div>
                        </video-player>
                    </transition>
                @endif
            @endif
            <video-resources></video-resources>
        </div>
        
        @include('sections.content-info', ['description' => $description])
    </div>

    @include('musora-ui::sections.lesson-progress', $lessonProgress)

    <div class="mx-auto w-full container relative lg:px-3 pb-24">
        <div class="flex flex-col-reverse md:flex-row">
            <div class="flex-1 px-3">
                <comments-list
                    comments-data='{{ $commentsData }}'
                    :current-user-data='@json($user)'
                    :content-id='1'
                ></comments-list>
            </div>
            <div class="lg:pl-3 lg:w-100">
                <related-videos
                    preload-data='{{ $rc }}'
                ></related-videos>
            </div>
        </div>
    </div>
@endsection

