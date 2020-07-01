@extends('vue.layout')

@section('title', 'Members - Edge')

@section('menu')
    @include('sections.menu', ['active' => 'edge'])
    @include('sections.edge-nav')
@endsection

@php
$continueVideos = [
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1',
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1',
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1',
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1',
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentType' => 'content type',
        'title' => 'Continue Video Five',
        'difficulty' => 'Beginner - 1',
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentType' => 'content type',
        'title' => 'Continue Video Six',
        'difficulty' => 'Beginner - 1',
    ]
];

$newVideos = [
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'New Video One',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'New Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'New Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'New Video Four',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'New Video Five',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'New Video Six',
        'difficulty' => 'Beginner - 1'
    ]
];

$sectionVideos = [
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Four',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Four',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Four',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Four',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Four',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor one',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video One',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Two',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Two',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Other Instructor',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Three',
        'difficulty' => 'Beginner - 1'
    ],
    [
        'url' => '#',
        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
        'teacher' => 'Instructor Four',
        'contentIcon' => 'icon-courses',
        'contentType' => 'content type',
        'title' => 'Continue Video Four',
        'difficulty' => 'Beginner - 1'
    ],
];

$rc1 = <<<EOT
{"data": [],"included": [],"meta": {"filterOptions": {"content_type": ["course"],"instructor": [{"id": 197077,"slug": "brett-ziegler","type": "instructor","sort": 0,"status": "published","total_xp": null,"brand": "pianote","language": "en-US","show_in_new_feed": null,"user": "","published_on": "2018-02-28 17:01:25","archived_on": null,"created_on": "2018-02-28 17:01:25","difficulty": null,"home_staff_pick_rating": null,"legacy_id": null,"legacy_wordpress_post_id": null,"qna_video": null,"style": null,"title": null,"xp": null,"album": null,"artist": null,"bpm": null,"cd_tracks": null,"chord_or_scale": null,"difficulty_range": null,"episode_number": null,"exercise_book_pages": null,"fast_bpm": null,"includes_song": null,"instructors": null,"live_event_start_time": null,"live_event_end_time": null,"live_event_youtube_id": null,"live_stream_feed_type": null,"name": "Brett Ziegler","released": null,"slow_bpm": null,"transcriber_name": null,"week": null,"avatar_url": null,"length_in_seconds": null,"soundslice_slug": null,"staff_pick_rating": null,"student_id": null,"vimeo_video_id": null,"youtube_video_id": null},{"id": 197087,"slug": "cassi-falk","type": "instructor","sort": 0,"status": "published","total_xp": null,"brand": "pianote","language": "en-US","show_in_new_feed": null,"user": "","published_on": "2018-02-28 17:01:26","archived_on": null,"created_on": "2018-02-28 17:01:26","difficulty": null,"home_staff_pick_rating": null,"legacy_id": null,"legacy_wordpress_post_id": null,"qna_video": null,"style": null,"title": null,"xp": null,"album": null,"artist": null,"bpm": null,"cd_tracks": null,"chord_or_scale": null,"difficulty_range": null,"episode_number": null,"exercise_book_pages": null,"fast_bpm": null,"includes_song": null,"instructors": null,"live_event_start_time": null,"live_event_end_time": null,"live_event_youtube_id": null,"live_stream_feed_type": null,"name": "Cassi Falk","released": null,"slow_bpm": null,"transcriber_name": null,"week": null,"avatar_url": null,"length_in_seconds": null,"soundslice_slug": null,"staff_pick_rating": null,"student_id": null,"vimeo_video_id": null,"youtube_video_id": null},{"id": 218895,"slug": "gabriel-palatchi","type": "instructor","sort": 0,"status": "published","total_xp": null,"brand": "pianote","language": "en-US","show_in_new_feed": null,"user": "","published_on": "2019-01-20 20:00:00","archived_on": null,"created_on": "2019-01-21 12:21:54","difficulty": null,"home_staff_pick_rating": null,"legacy_id": null,"legacy_wordpress_post_id": null,"qna_video": null,"style": null,"title": null,"xp": null,"album": null,"artist": null,"bpm": null,"cd_tracks": null,"chord_or_scale": null,"difficulty_range": null,"episode_number": null,"exercise_book_pages": null,"fast_bpm": null,"includes_song": null,"instructors": null,"live_event_start_time": null,"live_event_end_time": null,"live_event_youtube_id": null,"live_stream_feed_type": null,"name": "Gabriel Palatchi","released": null,"slow_bpm": null,"transcriber_name": null,"week": null,"avatar_url": null,"length_in_seconds": null,"soundslice_slug": null,"staff_pick_rating": null,"student_id": null,"vimeo_video_id": null,"youtube_video_id": null},{"id": 202588,"slug": "jay-oliver","type": "instructor","sort": 0,"status": "published","total_xp": null,"brand": "pianote","language": "en-US","show_in_new_feed": null,"user": "","published_on": "2018-04-15 19:00:00","archived_on": null,"created_on": "2018-04-16 09:06:35","difficulty": null,"home_staff_pick_rating": null,"legacy_id": null,"legacy_wordpress_post_id": null,"qna_video": null,"style": null,"title": null,"xp": null,"album": null,"artist": null,"bpm": null,"cd_tracks": null,"chord_or_scale": null,"difficulty_range": null,"episode_number": null,"exercise_book_pages": null,"fast_bpm": null,"includes_song": null,"instructors": null,"live_event_start_time": null,"live_event_end_time": null,"live_event_youtube_id": null,"live_stream_feed_type": null,"name": "Jay Oliver","released": null,"slow_bpm": null,"transcriber_name": null,"week": null,"avatar_url": null,"length_in_seconds": null,"soundslice_slug": null,"staff_pick_rating": null,"student_id": null,"vimeo_video_id": null,"youtube_video_id": null},{"id": 196994,"slug": "jordan-leibel","type": "instructor","sort": 0,"status": "published","total_xp": null,"brand": "pianote","language": "en-US","show_in_new_feed": null,"user": "","published_on": "2018-02-28 17:01:11","archived_on": null,"created_on": "2018-02-28 17:01:11","difficulty": null,"home_staff_pick_rating": null,"legacy_id": null,"legacy_wordpress_post_id": null,"qna_video": null,"style": null,"title": null,"xp": null,"album": null,"artist": null,"bpm": null,"cd_tracks": null,"chord_or_scale": null,"difficulty_range": null,"episode_number": null,"exercise_book_pages": null,"fast_bpm": null,"includes_song": null,"instructors": null,"live_event_start_time": null,"live_event_end_time": null,"live_event_youtube_id": null,"live_stream_feed_type": null,"name": "Jordan Leibel","released": null,"slow_bpm": null,"transcriber_name": null,"week": null,"avatar_url": null,"length_in_seconds": null,"soundslice_slug": null,"staff_pick_rating": null,"student_id": null,"vimeo_video_id": null,"youtube_video_id": null},{"id": 221245,"slug": "josh-dion","type": "instructor","sort": 0,"status": "published","total_xp": null,"brand": "pianote","language": "en-US","show_in_new_feed": null,"user": "","published_on": "2019-03-04 20:10:07","archived_on": null,"created_on": "2019-03-04 20:10:07","difficulty": null,"home_staff_pick_rating": null,"legacy_id": null,"legacy_wordpress_post_id": null,"qna_video": null,"style": null,"title": "Josh Dion","xp": null,"album": null,"artist": null,"bpm": null,"cd_tracks": null,"chord_or_scale": null,"difficulty_range": null,"episode_number": null,"exercise_book_pages": null,"fast_bpm": null,"includes_song": null,"instructors": null,"live_event_start_time": null,"live_event_end_time": null,"live_event_youtube_id": null,"live_stream_feed_type": null,"name": "Josh Dion","released": null,"slow_bpm": null,"transcriber_name": null,"week": null,"avatar_url": null,"length_in_seconds": null,"soundslice_slug": null,"staff_pick_rating": null,"student_id": null,"vimeo_video_id": null,"youtube_video_id": null},{"id": 196999,"slug": "lisa-witt","type": "instructor","sort": 0,"status": "published","total_xp": null,"brand": "pianote","language": "en-US","show_in_new_feed": null,"user": "","published_on": "2018-02-28 17:01:11","archived_on": null,"created_on": "2018-02-28 17:01:11","difficulty": null,"home_staff_pick_rating": null,"legacy_id": null,"legacy_wordpress_post_id": null,"qna_video": null,"style": null,"title": null,"xp": null,"album": null,"artist": null,"bpm": null,"cd_tracks": null,"chord_or_scale": null,"difficulty_range": null,"episode_number": null,"exercise_book_pages": null,"fast_bpm": null,"includes_song": null,"instructors": null,"live_event_start_time": null,"live_event_end_time": null,"live_event_youtube_id": null,"live_stream_feed_type": null,"name": "Lisa Witt","released": null,"slow_bpm": null,"transcriber_name": null,"week": null,"avatar_url": null,"length_in_seconds": null,"soundslice_slug": null,"staff_pick_rating": null,"student_id": null,"vimeo_video_id": null,"youtube_video_id": null}],"topic": ["Boogie Woogie","Gospel","Improvisation","Jazz","Latin Jazz","Practice Mindset","Rhythm","Songwriting","Technique"],"difficulty": ["1","2","3","4","6"]},"pagination": {"total": 13,"count": 13,"per_page": 20,"current_page": 1,"total_pages": 1}},"links": {"self": "https://dev.musora.com/railcontent/content?brand=pianote&limit=20&statuses%5B0%5D=published&statuses%5B1%5D=scheduled&statuses%5B2%5D=draft&sort=-created_on&included_types%5B0%5D=course&page=1","first": "https://dev.musora.com/railcontent/content?brand=pianote&limit=20&statuses%5B0%5D=published&statuses%5B1%5D=scheduled&statuses%5B2%5D=draft&sort=-created_on&included_types%5B0%5D=course&page=1","last": "https://dev.musora.com/railcontent/content?brand=pianote&limit=20&statuses%5B0%5D=published&statuses%5B1%5D=scheduled&statuses%5B2%5D=draft&sort=-created_on&included_types%5B0%5D=course&page=1"}}
EOT;
@endphp

@section('app')
    @include('sections.user-stats')

    <div class="container w-full h-full mx-auto px-3 pt-4">
        <videos-row
            :videos-list='@json($continueVideos)'
            section-title="continue"
            section-url="#"
        ></videos-row>

        <videos-row
            :videos-list='@json($newVideos)'
            section-title="new"
            section-url="#"
        ></videos-row>
    </div>

    <filtered-videos-content
        :videos-list='@json($sectionVideos)'
        level-selector='2'
        edge-filters-title='what do you want to work on?'
        :videos-per-row='4'
        :preload-data='{{ $rc1 }}'
    ></filtered-videos-content>
@endsection
