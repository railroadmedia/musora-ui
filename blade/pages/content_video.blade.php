@extends('musora-ui::layouts.vue_lesson')

@section('musora-ui::title', 'Members - Video')

@push('musora-ui::styles')
    <link rel="stylesheet" href="/build/drumeo/vuesora.css">
@endpush

@push('musora-ui::scripts')
    <script type="text/javascript" src="{{ $musoraLessonJsPath }}"></script>
@endpush

@section('musora-ui::menu')
    @include('musora-ui::partials.hamburger-edge-nav', ['active' => 'edge'])
    @include('musora-ui::partials.breadcrumbs-nav', $breadcrumbs)
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
        
        @include('musora-ui::partials.content-info', ['description' => $description])
    </div>

    @include('musora-ui::partials.lesson-progress', $lessonProgress)

    <div class="mx-auto w-full container relative lg:px-3 pb-24">
        <div class="flex flex-col-reverse md:flex-row">
            <div class="flex-1 px-3">
                <comments-list
                    comments-data='{{ $commentsData }}'
                    :current-user-data='@json($userData)'
                    :content-id='1'
                ></comments-list>
            </div>
            <div class="lg:pl-3 lg:w-100">
                <related-videos
                    preload-data='{{ $relatedVideosData }}'
                ></related-videos>
            </div>
        </div>
    </div>
@endsection

