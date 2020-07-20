@extends('vue.layout')

@section('title', 'Members - Song')

@php
// <!--
$rc1 = <<<'EOT'
{
  "data": [
    {
      "type": "content",
      "id": "253541",
      "attributes": {
        "slug": "introduction",
        "type": "song-part",
        "sort": 0,
        "status": "published",
        "totalXp": "200",
        "brand": "pianote",
        "language": "en-US",
        "showInNewFeed": true,
        "user": "",
        "publishedOn": "2020-04-24 19:00:00",
        "archivedOn": null,
        "createdOn": "2020-04-23 09:30:11",
        "difficulty": "2",
        "homeStaffPickRating": null,
        "legacyId": null,
        "legacyWordpressPostId": null,
        "qnaVideo": null,
        "style": null,
        "title": "Introduction",
        "xp": "200",
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
        "permissions": [],
        "user_playlists": {
          "150259": []
        },
        "is_added_to_primary_playlist": false,
        "url": "https://dev.pianote.com/members/songs/heart-shaped-box/250098/introduction/253541",
        "chapters": [],
        "assignments": [
          {
            "id": 253548,
            "slug": "\"heart-shaped-box\"-lead-sheet",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "25",
            "brand": "pianote",
            "language": "en-US",
            "showInNewFeed": true,
            "user": "",
            "publishedOn": "2020-04-23 09:52:43",
            "archivedOn": null,
            "createdOn": "2020-04-23 09:52:45",
            "difficulty": null,
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "\"Heart-Shaped Box\" Lead Sheet",
            "xp": "25",
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
            "soundsliceSlug": "392894",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          },
          {
            "id": 253549,
            "slug": "\"heart-shaped-box\"-full-score",
            "type": "assignment",
            "sort": 0,
            "status": "published",
            "totalXp": "25",
            "brand": "pianote",
            "language": "en-US",
            "showInNewFeed": true,
            "user": "",
            "publishedOn": "2020-04-23 09:53:08",
            "archivedOn": null,
            "createdOn": "2020-04-23 09:53:09",
            "difficulty": null,
            "homeStaffPickRating": null,
            "legacyId": null,
            "legacyWordpressPostId": null,
            "qnaVideo": null,
            "style": null,
            "title": "\"Heart-Shaped Box\" Full Score",
            "xp": "25",
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
            "soundsliceSlug": "392908",
            "staffPickRating": null,
            "studentId": null,
            "vimeoVideoId": null,
            "youtubeVideoId": null
          }
        ],
        "like_count": "13",
        "is_liked_by_current_user": false,
        "resources": {
          "1": {
            "resource_name": "Lead Sheet PDF",
            "resource_url": "https://d1923uyy6spedc.cloudfront.net/253541-resource-1587643378.pdf"
          },
          "2": {
            "resource_name": "Full Score PDF",
            "resource_url": "https://d1923uyy6spedc.cloudfront.net/253541-resource-1587651992.pdf"
          },
          "3": {
            "resource_name": "Play-Along MP3",
            "resource_url": "https://d1923uyy6spedc.cloudfront.net/253541-resource-1587644339.mp3"
          },
          "4": {
            "resource_name": "Full Band MP3",
            "resource_url": "https://d1923uyy6spedc.cloudfront.net/253541-resource-1587644827.mp3"
          }
        },
        "xp_bonus": 150,
        "progress_state": null
      },
      "relationships": {
        "data": {
          "data": [
            {
              "type": "contentData",
              "id": "131603"
            },
            {
              "type": "contentData",
              "id": "131604"
            },
            {
              "type": "contentData",
              "id": "131612"
            },
            {
              "type": "contentData",
              "id": "131613"
            },
            {
              "type": "contentData",
              "id": "131616"
            },
            {
              "type": "contentData",
              "id": "131617"
            },
            {
              "type": "contentData",
              "id": "131620"
            },
            {
              "type": "contentData",
              "id": "131621"
            },
            {
              "type": "contentData",
              "id": "131691"
            },
            {
              "type": "contentData",
              "id": "131692"
            }
          ]
        },
        "tag": {
          "data": [
            {
              "type": "tag",
              "id": "1516"
            },
            {
              "type": "tag",
              "id": "1517"
            },
            {
              "type": "tag",
              "id": "1518"
            },
            {
              "type": "tag",
              "id": "1519"
            },
            {
              "type": "tag",
              "id": "1520"
            },
            {
              "type": "tag",
              "id": "1521"
            },
            {
              "type": "tag",
              "id": "1522"
            },
            {
              "type": "tag",
              "id": "1523"
            },
            {
              "type": "tag",
              "id": "1524"
            },
            {
              "type": "tag",
              "id": "1525"
            },
            {
              "type": "tag",
              "id": "1526"
            },
            {
              "type": "tag",
              "id": "1527"
            },
            {
              "type": "tag",
              "id": "1528"
            },
            {
              "type": "tag",
              "id": "1529"
            },
            {
              "type": "tag",
              "id": "1530"
            },
            {
              "type": "tag",
              "id": "1531"
            },
            {
              "type": "tag",
              "id": "1532"
            },
            {
              "type": "tag",
              "id": "1533"
            },
            {
              "type": "tag",
              "id": "1534"
            },
            {
              "type": "tag",
              "id": "1535"
            }
          ]
        },
        "parent": {
          "data": [
            {
              "type": "parent",
              "id": "655166"
            }
          ]
        }
      }
    }
  ],
  "included": [
    {
      "type": "parent",
      "id": "250098",
      "attributes": {
        "slug": "heart-shaped-box",
        "type": "song",
        "sort": 0,
        "status": "published",
        "total_xp": "1400",
        "brand": "pianote",
        "language": "en-US",
        "show_in_new_feed": null,
        "user": "",
        "published_on": "2020-04-24 19:00:00",
        "archived_on": null,
        "created_on": "2020-03-30 15:30:31",
        "difficulty": "2",
        "home_staff_pick_rating": null,
        "legacy_id": null,
        "legacy_wordpress_post_id": null,
        "qna_video": null,
        "style": "Rock",
        "title": "Heart-Shaped Box",
        "xp": 500,
        "album": null,
        "artist": "Nirvana",
        "bpm": null,
        "cd_tracks": null,
        "chord_or_scale": null,
        "difficulty_range": null,
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
      "id": "131603",
      "attributes": {
        "key": "thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/253541-card-thumbnail-1587635516.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "131604",
      "attributes": {
        "key": "original_thumbnail_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/253541-card-thumbnail-maxres-1587635518.jpg",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "131612",
      "attributes": {
        "key": "resource_name",
        "value": "Lead Sheet PDF",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "131613",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/253541-resource-1587643378.pdf",
        "position": 1
      }
    },
    {
      "type": "contentData",
      "id": "131616",
      "attributes": {
        "key": "resource_name",
        "value": "Play-Along MP3",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "131617",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/253541-resource-1587644339.mp3",
        "position": 3
      }
    },
    {
      "type": "contentData",
      "id": "131620",
      "attributes": {
        "key": "resource_name",
        "value": "Full Band MP3",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "131621",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/253541-resource-1587644827.mp3",
        "position": 4
      }
    },
    {
      "type": "contentData",
      "id": "131691",
      "attributes": {
        "key": "resource_name",
        "value": "Full Score PDF",
        "position": 2
      }
    },
    {
      "type": "contentData",
      "id": "131692",
      "attributes": {
        "key": "resource_url",
        "value": "https://d1923uyy6spedc.cloudfront.net/253541-resource-1587651992.pdf",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "1516",
      "attributes": {
        "tag": "nirvana",
        "position": 2
      }
    },
    {
      "type": "tag",
      "id": "1517",
      "attributes": {
        "tag": "in utero",
        "position": 1
      }
    },
    {
      "type": "tag",
      "id": "1518",
      "attributes": {
        "tag": "intro",
        "position": 4
      }
    },
    {
      "type": "tag",
      "id": "1519",
      "attributes": {
        "tag": "introduction",
        "position": 3
      }
    },
    {
      "type": "tag",
      "id": "1520",
      "attributes": {
        "tag": "heart shaped box",
        "position": 5
      }
    },
    {
      "type": "tag",
      "id": "1521",
      "attributes": {
        "tag": "heart-shaped box",
        "position": 6
      }
    },
    {
      "type": "tag",
      "id": "1522",
      "attributes": {
        "tag": "song",
        "position": 8
      }
    },
    {
      "type": "tag",
      "id": "1523",
      "attributes": {
        "tag": "songs",
        "position": 7
      }
    },
    {
      "type": "tag",
      "id": "1524",
      "attributes": {
        "tag": "beginner",
        "position": 10
      }
    },
    {
      "type": "tag",
      "id": "1525",
      "attributes": {
        "tag": "2",
        "position": 9
      }
    },
    {
      "type": "tag",
      "id": "1526",
      "attributes": {
        "tag": "1993",
        "position": 13
      }
    },
    {
      "type": "tag",
      "id": "1527",
      "attributes": {
        "tag": "learn",
        "position": 12
      }
    },
    {
      "type": "tag",
      "id": "1528",
      "attributes": {
        "tag": "learning",
        "position": 11
      }
    },
    {
      "type": "tag",
      "id": "1529",
      "attributes": {
        "tag": "breakdown",
        "position": 15
      }
    },
    {
      "type": "tag",
      "id": "1530",
      "attributes": {
        "tag": "break down",
        "position": 14
      }
    },
    {
      "type": "tag",
      "id": "1531",
      "attributes": {
        "tag": "break-down",
        "position": 18
      }
    },
    {
      "type": "tag",
      "id": "1532",
      "attributes": {
        "tag": "breakdowns",
        "position": 16
      }
    },
    {
      "type": "tag",
      "id": "1533",
      "attributes": {
        "tag": "break downs",
        "position": 17
      }
    },
    {
      "type": "tag",
      "id": "1534",
      "attributes": {
        "tag": "break-downs",
        "position": 19
      }
    },
    {
      "type": "tag",
      "id": "1535",
      "attributes": {
        "tag": "lisa witt",
        "position": 20
      }
    },
    {
      "type": "parent",
      "id": "655166",
      "attributes": {
        "child_position": 1
      },
      "relationships": {
        "parent": {
          "data": {
            "type": "parent",
            "id": "250098"
          }
        }
      }
    }
  ]
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
        }
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
        }
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

$song = [
    'name' => 'american idiot',
    'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1445.jpg',
    'artist' => 'green day',
    'genre' => 'rock',
    'likes' => 58,
];

$comments = [
    [
        'id' => 1,
        'author' => [
            'avatar' => 'https://s3.amazonaws.com/pianote/defaults/avatar.png',
            'name' => 'brandon toews',
            'level' => '2.3',
            'border' => 'blue',
        ],
        'comment' => 'Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.',
        'likes' => 31,
        'liked' => true,
        'added' => '5 days ago',
        'replies' => [],
    ],
    [
        'id' => 2,
        'author' => [
            'avatar' => 'https://s3.amazonaws.com/pianote/defaults/avatar.png',
            'name' => 'brandon toews',
            'level' => '2.3',
            'border' => 'blue',
        ],
        'comment' => 'Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.',
        'likes' => 0,
        'liked' => false,
        'added' => '5 days ago',
        'replies' => [
            [
                'id' => 3,
                'author' => [
                    'avatar' => 'https://s3.amazonaws.com/pianote/defaults/avatar.png',
                    'name' => 'brandon toews',
                    'level' => '2.3',
                    'border' => 'yellow',
                    'iconClass' => 'icon-metronome-beep',
                ],
                'comment' => 'Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl.',
                'likes' => 0,
                'liked' => false,
                'added' => '5 days ago',
            ],
        ],
    ],
    [
        'id' => 4,
        'author' => [
            'avatar' => 'https://s3.amazonaws.com/pianote/defaults/avatar.png',
            'name' => 'brandon toews',
            'level' => '2.3',
            'border' => 'blue',
        ],
        'comment' => 'Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat.',
        'likes' => 8,
        'liked' => false,
        'added' => '4 day ago',
        'replies' => [],
    ],
    [
        'id' => 5,
        'author' => [
            'avatar' => 'https://s3.amazonaws.com/pianote/defaults/avatar.png',
            'name' => 'brandon toews',
            'level' => '2.3',
            'border' => 'blue',
        ],
        'comment' => 'Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.',
        'likes' => 0,
        'liked' => false,
        'added' => '3 day ago',
        'replies' => [
            [
                'id' => 6,
                'author' => [
                    'avatar' => 'https://s3.amazonaws.com/pianote/defaults/avatar.png',
                    'name' => 'brandon toews',
                    'level' => '2.3',
                    'border' => 'yellow',
                    'iconClass' => 'icon-metronome-beep',
                ],
                'comment' => 'Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu. Ut scelerisque hendrerit tellus. Integer sagittis. Vivamus a mauris eget arcu gravida tristique.',
                'likes' => 0,
                'liked' => false,
                'added' => '2 days ago',
            ],
        ],
    ],
    [
        'id' => 7,
        'author' => [
            'avatar' => 'https://s3.amazonaws.com/pianote/defaults/avatar.png',
            'name' => 'brandon toews',
            'level' => '2.3',
            'border' => 'blue',
        ],
        'comment' => 'Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.',
        'likes' => 19,
        'liked' => false,
        'added' => '3 day ago',
        'replies' => [],
    ],
    [
        'id' => 8,
        'author' => [
            'avatar' => 'https://s3.amazonaws.com/pianote/defaults/avatar.png',
            'name' => 'brandon toews',
            'level' => '2.3',
            'border' => 'blue',
        ],
        'comment' => 'Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.',
        'likes' => 0,
        'liked' => false,
        'added' => '1 day ago',
        'replies' => [],
    ],
];

$user = [
    'avatar' => 'https://s3.amazonaws.com/pianote/defaults/avatar.png',
    'name' => 'brandon toews',
    'level' => '2.3',
    'border' => 'blue',
];

$breadcrumbs = [
    'parents' => [
        [
            'label' => 'songs',
            'url' => '/router.php/songs',
        ],
    ],
    'current' => [
        'label' => $song['name']
    ],
];

$songs = [
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1518.jpg',
        'title' => 'this is the lesson title',
        'artist' => 'band name',
        'genre' => 'genre',
        'progress' => 0,
        'skipStyle' => true,
    ],
    [
        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/220948-card-thumbnail-maxres-1551793218',
        'title' => 'this is the lesson title',
        'artist' => 'band name',
        'genre' => 'genre',
        'progress' => 100,
        'skipStyle' => true,
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1445.jpg',
        'title' => 'this is the lesson title',
        'artist' => 'band name',
        'genre' => 'genre',
        'progress' => 0,
        'skipStyle' => true,
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1575.jpg',
        'title' => 'this is the lesson title',
        'artist' => 'band name',
        'genre' => 'genre',
        'progress' => 60,
        'skipStyle' => true,
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-262.jpg',
        'title' => 'this is the lesson title',
        'artist' => 'band name',
        'genre' => 'genre',
        'progress' => 0,
        'skipStyle' => true,
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1469.jpg',
        'title' => 'this is the lesson title',
        'artist' => 'band name',
        'genre' => 'genre',
        'progress' => 0,
        'skipStyle' => true,
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1518.jpg',
        'title' => 'this is the lesson title',
        'artist' => 'band name',
        'genre' => 'genre',
        'progress' => 0,
        'skipStyle' => true,
    ],
    [
        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/220948-card-thumbnail-maxres-1551793218',
        'title' => 'this is the lesson title',
        'artist' => 'band name',
        'genre' => 'genre',
        'progress' => 100,
        'skipStyle' => true,
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1445.jpg',
        'title' => 'this is the lesson title',
        'artist' => 'band name',
        'genre' => 'genre',
        'progress' => 0,
        'skipStyle' => true,
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1575.jpg',
        'title' => 'this is the lesson title',
        'artist' => 'band name',
        'genre' => 'genre',
        'progress' => 60,
        'skipStyle' => true,
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-262.jpg',
        'title' => 'this is the lesson title',
        'artist' => 'band name',
        'genre' => 'genre',
        'progress' => 0,
        'skipStyle' => true,
    ],
    [
        'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1469.jpg',
        'title' => 'this is the lesson title',
        'artist' => 'band name',
        'genre' => 'genre',
        'progress' => 0,
        'skipStyle' => true,
    ],
];

$video = [
    'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/songs/550/drumeo-live-1445.jpg',
    'title' => 'american idiot',
    'artist' => 'green day',
    'genre' => 'rock',
    'progress' => 0,
    'likes' => 58,
    'liked' => false,
];

@endphp

@section('menu')
    @include('sections.menu', ['active' => 'edge'])
    @include('sections.breadcrumbs-nav', $breadcrumbs)
@endsection

@section('app')
    <div class="mx-auto w-full container relative px-3 pb-24">
        <div class="lg:mr-64">
            <song-content
                preload-data='{{ $rc1 }}'
            ><song-content>
        </div>
        <div class="lg:absolute top-0 right-0 lg:w-64">
            @include('sections.related-songs', ['songs' => $songs])
        </div>
        <div class="lg:mr-64">
            <comments-list
                comments-data='{{ $commentsData }}'
                :comments-list='@json($comments)'
                :current-user-data='@json($user)'
                :content-id='1'
            ></comments-list>
        </div>
    </div>
@endsection
