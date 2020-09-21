<?php

namespace Railroad\MusoraUI\ViewComposers;

use Illuminate\View\View;

class DrumeoViewComposer
{
    public static $assetPaths = [
        'manifestJsPath' => '../../js/generic/manifest.js',
        'vendorJsPath' => '../../js/generic/vendor.js',
        'musoraContentJsPath' => '../../js/generic/musora-content.js',
        'musoraLessonJsPath' => '../../js/generic/musora-lesson.js',
        'musoraProfileJsPath' => '../../js/generic/musora-profile.js',
        'drumeoCssPath' => '/build/drumeo/drumeo.css',
    ];

    public static $staticUrls = [
        // vue
        'contentVideoLink' => '/router.php/pages/content_video', // todo - review & update - video player and related videos not displayed
        'coursesLink' => '/router.php/pages/courses',
        'edgeLink' => '/router.php/pages/edge',
        'playAlongsLink' => '/router.php/pages/play_alongs',
        'profileMyListLink' => '/router.php/pages/profile_my_list',
        'publicLayoutLink' => '/router.php/pages/public_layout', // todo - review & update - not sure the link is used anywhere
        'rudimentsLink' => '/router.php/pages/rudiments', // todo - review & update - blue filter click
        'searchResultsLink' => '/router.php/pages/search_results',
        'settingsPaymentsLink' => '/router.php/pages/settings_payments', // todo - review & update - payments list error
        'settingsProfileLink' => '/router.php/pages/settings_profile', // todo - review & update - image cropper error
        'showsShowLink' => '/router.php/pages/shows_show',
        'songsLink' => '/router.php/pages/songs',
        'songsSongLink' => '/router.php/pages/songs_song', // todo - review & update - related songs not displayed
        'studentFocusLink' => '/router.php/pages/student_focus',

        // blade
        'accountLessonsLink' => '/router.php/pages/account_lessons',
        'accountProfileNameLink' => '/router.php/pages/account_profile_name',
        'accountProfileAvatarLink' => '/router.php/pages/account_profile_avatar',
        'accountStartLink' => '/router.php/pages/account_start',
        'coursesCourseLink' => '/router.php/pages/courses_course',
        'liveLink' => '/router.php/pages/live',
        'loginLink' => '/router.php/pages/login',
        'methodLink' => '/router.php/pages/method',
        'methodLevelLink' => '/router.php/pages/method_level',
        'packsLink' => '/router.php/pages/packs',
        'profileDashboardLink' => '/router.php/pages/profile_dashboard',
        'resetLink' => '/router.php/pages/reset',
        'scheduleLink' => '/router.php/pages/schedule',
        'settingsDetailsLink' => '/router.php/pages/settings_details',
        'settingsLoginCredentialsLink' => '/router.php/pages/settings_login_credentials',
        'settingsSetupLink' => '/router.php/pages/settings_setup',
        'showsLink' => '/router.php/pages/shows',
        'uiLink' => '/router.php/ui',

        // misc
        'forumsLink' => 'https://forums.drumeo.com/',
        'shopLink' => '/shop',
    ];

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function assetPaths(View $view)
    {
        $view->with(
            self::$assetPaths
        );
    }


    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function edgeNav(View $view)
    {
        $view->with(
            [
                'items' => [
                    [
                        'name' => 'method',
                        'label' => '',
                        'labelClass' => 'logo-method',
                        'icon' => 'icon-drums2',
                        'url' => self::$staticUrls['methodLink'],
                    ],
                    [
                        'name' => 'courses',
                        'label' => 'courses',
                        'icon' => 'icon-courses',
                        'url' => self::$staticUrls['coursesLink'],
                    ],
                    [
                        'name' => 'shows',
                        'label' => 'shows',
                        'icon' => 'icon-shows',
                        'url' => self::$staticUrls['showsLink'],
                    ],
                    [
                        'name' => 'songs',
                        'label' => 'songs',
                        'icon' => 'icon-headphones',
                        'url' => self::$staticUrls['songsLink'],
                    ],
                    [
                        'name' => 'play-alongs',
                        'label' => 'play-alongs',
                        'icon' => 'icon-play-alongs',
                        'url' => self::$staticUrls['playAlongsLink'],
                    ],
                    [
                        'name' => 'student focus',
                        'label' => 'student focus',
                        'icon' => 'icon-student-focus',
                        'url' => self::$staticUrls['studentFocusLink'],
                    ],
                    [
                        'name' => 'rudiments',
                        'label' => 'rudiments',
                        'icon' => 'icon-rudiments',
                        'url' => self::$staticUrls['rudimentsLink'],
                    ],
                    [
                        'name' => 'live',
                        'label' => 'live',
                        'icon' => 'icon-live',
                        'url' => self::$staticUrls['liveLink'],
                    ],
                    [
                        'name' => 'schedule',
                        'label' => 'schedule',
                        'icon' => 'icon-schedule',
                        'url' => self::$staticUrls['scheduleLink'],
                    ],
                ],
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function hamburgerEdgeNav(View $view)
    {
        $viewData = $view->getData();

        $skipCollapseScript = $viewData['skipCollapseScript'] ?? false;
        $active = $viewData['active'] ?? 'edge';

        $view->with(
            [
                'skipCollapseScript' => $skipCollapseScript,
                'active' => $active,
                'items' => [
                    [
                        'title' => '',
                        'active' => $active == 'edge' ? 'active' : null,
                        'logo' => 'logo-edge',
                        'url' => self::$staticUrls['edgeLink']
                    ],
                    [
                        'title' => 'packs',
                        'active' => $active == 'packs' ? 'active' : null,
                        'logo' => '',
                        'url' => self::$staticUrls['packsLink']
                    ],
                    [
                        'title' => 'forums',
                        'active' => $active == 'forums' ? 'active' : null,
                        'logo' => '',
                        'url' => self::$staticUrls['forumsLink']
                    ],
                    [
                        'title' => 'shop',
                        'active' => $active == 'shop' ? 'active' : null,
                        'logo' => '',
                        'url' => self::$staticUrls['shopLink']
                    ],
                ]
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function profileNav(View $view)
    {
        $view->with(
            [
                'items' => [
                    [
                        'icon' => 'fas fa-tachometer-alt-slow',
                        'label' => 'dashboard',
                        'url' => self::$staticUrls['profileDashboardLink'],
                    ],
                    [
                        'icon' => 'icon-my-list',
                        'label' => 'my list',
                        'url' => self::$staticUrls['profileMyListLink'],
                    ],
                    [
                        'icon' => 'icon-gear',
                        'label' => 'settings',
                        'url' => self::$staticUrls['settingsProfileLink'],
                    ],
                ],
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function profileSideNav(View $view)
    {
        $view->with(
            [
                'items' => [
                    [
                        'icon' => 'fas fa-edit',
                        'label' => 'profile',
                        'url' => self::$staticUrls['settingsProfileLink'],
                    ],
                    [
                        'icon' => 'fas fa-lock',
                        'label' => 'login credentials',
                        'url' => self::$staticUrls['settingsLoginCredentialsLink'],
                    ],
                    [
                        'icon' => 'far fa-credit-card',
                        'label' => 'payments',
                        'url' => self::$staticUrls['settingsPaymentsLink'],
                    ],
                    [
                        'icon' => 'fas fa-bell',
                        'label' => 'settings',
                        'url' => self::$staticUrls['settingsSetupLink'],
                    ],
                    [
                        'icon' => 'fas fa-calendar-alt',
                        'label' => 'account details',
                        'url' => self::$staticUrls['settingsDetailsLink'],
                    ],
                ],
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function userAbout(View $view)
    {
        $view->with(
            [
                'aboutFields' => [
                    'firstName' => 'brandon',
                    'full name' => 'brandon toews',
                    'birthday' => 'may 26, 1987',
                ],

                'userFields' => [
                    'drums' => 'Yamaha',
                    'cymbals' => 'Paiste',
                    'hardware' => 'Yamaha',
                    'sticks' => 'Pro-Mark',
                ],
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function userStats(View $view)
    {
        $view->with(
            [
                'displayName' => 'brandon towes',
                'stats' => [
                    [
                        'label' => 'days as a member',
                        'value' => 857,
                    ],
                    [
                        'label' => 'lessons completed',
                        'value' => 71,
                    ],
                    [
                        'label' => 'xp',
                        'value' => '15k',
                    ],
                    [
                        'label' => 'drumeo method',
                        'value' => 'level 1.4',
                    ],
                ],
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function userStatsDetails(View $view)
    {
        $view->with(
            [
                'stats' => [
                    [
                        'icon' => 'icon-comments-liked',
                        'label' => 'days as a member',
                        'value' => 857,
                    ],
                    [
                        'icon' => 'icon-comments-liked',
                        'label' => 'lessons completed',
                        'value' => 71,
                    ],
                    [
                        'icon' => 'icon-comments-liked',
                        'label' => 'courses completed',
                        'value' => 19,
                    ],
                    [
                        'icon' => 'icon-comments-liked',
                        'label' => 'assignments completed',
                        'value' => 187,
                    ],
                    [
                        'icon' => 'icon-comments-liked',
                        'label' => 'minutes practiced',
                        'value' => 594,
                    ],
                    [
                        'icon' => 'icon-comments-liked',
                        'label' => 'comments posted',
                        'value' => 98,
                    ],
                    [
                        'icon' => 'icon-comments-liked',
                        'label' => 'comment likes',
                        'value' => 9,
                    ],
                ],
            ]
        );
    }


    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function userStatsShort(View $view)
    {
        $view->with(
            [
                'displayName' => 'brandon towes',
                'memberSinceYear' => '2012',
                'xp' => '12k',
                'methodLevel' => 'level 1.4',
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function coursePageContent(View $view)
    {
        $view->with(
            [
                'courseDescription' => [
                    'teacher' => 'jared falk',
                    'difficulty' => 'difficulty here',
                    'title' => 'how to use drumeo',
                    'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus.',
                    'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dcb-06.jpg',
                ],
                'courseData' => [
                    'data' => [
                        [
                            'stat' => 'lessons',
                            'value' => 7,
                        ],
                        [
                            'stat' => 'minutes',
                            'value' => 17,
                        ],
                        [
                            'stat' => 'xp',
                            'value' => '32.2k',
                        ],
                    ],
                    'description' => [
                        'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.',
                        'Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.',
                        'Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.',
                    ]
                ],
                'courseContent' => [
                    'videos' => [
                        [
                            'index' => 1,
                            'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dcb-06.jpg',
                            'title' => 'this is the lesson title',
                            'length' => '10 mins',
                            'xp' => '150 xp',
                            'url' => self::$staticUrls['contentVideoLink'],
                        ],
                        [
                            'index' => 2,
                            'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dci-63.jpg',
                            'title' => 'this is the lesson title',
                            'length' => '26 mins',
                            'xp' => '150 xp',
                            'url' => self::$staticUrls['contentVideoLink'],
                        ],
                        [
                            'index' => 3,
                            'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/dcb-52a-550.jpg',
                            'title' => 'this is the lesson title',
                            'length' => '10 mins',
                            'xp' => '150 xp',
                            'url' => self::$staticUrls['contentVideoLink'],
                        ],
                        [
                            'index' => 4,
                            'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dcb-15.jpg',
                            'title' => 'this is the lesson title',
                            'length' => '35 mins',
                            'xp' => '150 xp',
                            'url' => self::$staticUrls['contentVideoLink'],
                        ],
                        [
                            'index' => 5,
                            'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dcb-45.jpg',
                            'title' => 'this is the lesson title',
                            'length' => '10 mins',
                            'xp' => '150 xp',
                            'url' => self::$staticUrls['contentVideoLink'],
                        ],
                        [
                            'index' => 6,
                            'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dca-11.jpg',
                            'title' => 'this is the lesson title',
                            'length' => '10 mins',
                            'xp' => '150 xp',
                            'url' => self::$staticUrls['contentVideoLink'],
                        ],
                        [
                            'index' => 7,
                            'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dcb-06.jpg',
                            'title' => 'this is the lesson title',
                            'length' => '10 mins',
                            'xp' => '150 xp',
                            'url' => self::$staticUrls['contentVideoLink'],
                        ],
                    ],
                ],
                'courseProgress' => [
                    'percent' => 38,
                    'nextUrl' => self::$staticUrls['coursesCourseLink'],
                ],
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function methodLevelPageContent(View $view)
    {
        $view->with(
            [
                'courseData' => [
                    'data' => [
                        [
                            'stat' => 'courses',
                            'value' => 11,
                        ],
                        [
                            'stat' => 'minutes',
                            'value' => 48,
                        ],
                        [
                            'stat' => 'xp',
                            'value' => '31.2k',
                        ],
                    ],
                    'description' => [
                        'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.',
                        'Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.',
                        'Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.'
                    ],
                ],
                'courseContent' => [
                    'videos' => [
                        [
                            'index' => 1,
                            'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dcb-06.jpg',
                            'title' => 'this is the course title',
                            'length' => '19 mins',
                            'xp' => '150 xp',
                            'url' => self::$staticUrls['contentVideoLink'],
                        ],
                        [
                            'index' => 2,
                            'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dci-63.jpg',
                            'title' => 'this is the course title',
                            'length' => '10 mins',
                            'xp' => '150 xp',
                            'url' => self::$staticUrls['contentVideoLink'],
                        ],
                        [
                            'index' => 3,
                            'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/dcb-52a-550.jpg',
                            'title' => 'this is the course title',
                            'length' => '17 mins',
                            'xp' => '150 xp',
                            'url' => self::$staticUrls['contentVideoLink'],
                        ],
                        [
                            'index' => 4,
                            'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dcb-15.jpg',
                            'title' => 'this is the course title',
                            'length' => '10 mins',
                            'xp' => '150 xp',
                            'url' => self::$staticUrls['contentVideoLink'],
                        ],
                        [
                            'index' => 5,
                            'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dcb-45.jpg',
                            'title' => 'this is the course title',
                            'length' => '21 mins',
                            'xp' => '150 xp',
                            'url' => self::$staticUrls['contentVideoLink'],
                        ],
                        [
                            'index' => 6,
                            'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dca-11.jpg',
                            'title' => 'this is the course title',
                            'length' => '10 mins',
                            'xp' => '150 xp',
                            'url' => self::$staticUrls['contentVideoLink'],
                        ],
                        [
                            'index' => 7,
                            'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dcb-06.jpg',
                            'title' => 'this is the course title',
                            'length' => '10 mins',
                            'xp' => '150 xp',
                            'url' => self::$staticUrls['contentVideoLink'],
                        ],
                    ],
                ],
                'courseProgress' => [
                    'percent' => 72,
                    'nextUrl' => self::$staticUrls['coursesCourseLink'],
                ],
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function edgePageContent(View $view)
    {
        $mockData = $this->getMockData('edge.json');

        $view->with(
            [
                'nextLesson' => [
                    'teacherName' => 'teacher name',
                    'lessonTitle' => 'this is the lesson title',
                    'lessonLength' => '8 mins',
                    'lessonXp' => 150,
                    'lessonDescription' => 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.',
                    'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/247400-card-thumbnail-maxres-1584796503.jpg',
                    'url' => self::$staticUrls['contentVideoLink'],
                ],
                'continueContentData' => $mockData,
                'newContentData' => $mockData,
                'catalogueContentData' => $mockData,
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function methodPageContent(View $view)
    {
        $view->with(
            [
                'nextLesson' => [
                    'teacherName' => 'teacher name',
                    'lessonTitle' => 'this is the lesson title',
                    'lessonLength' => '8 mins',
                    'lessonXp' => 150,
                    'lessonDescription' => 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.',
                    'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/247400-card-thumbnail-maxres-1584796503.jpg',
                    'url' => self::$staticUrls['contentVideoLink'],
                ],
                'lessonProgress' => [
                    'level' => '3.5',
                    'percent' => 64,
                    'xp' => 1250
                ],
                'lessons' => [
                    [
                        'teacherName' => 'jared falk',
                        'lessonTitle' => 'getting started on the drums',
                        'lessonLevel' => 'level 1',
                        'lessonLength' => '8 mins',
                        'lessonXp' => 150,
                        'lessonDescription' => 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.',
                        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/241248-card-thumbnail-1577144969.jpg',
                        'url' => self::$staticUrls['methodLevelLink'],
                    ],
                    [
                        'teacherName' => 'jared falk',
                        'lessonTitle' => 'basic theory & ear training',
                        'lessonLevel' => 'level 2',
                        'lessonLength' => '8 mins',
                        'lessonXp' => 150,
                        'lessonDescription' => 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.',
                        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/241284-card-thumbnail-1577144975.jpg',
                        'url' => self::$staticUrls['methodLevelLink'],
                    ],
                    [
                        'teacherName' => 'jared falk',
                        'lessonTitle' => 'the motions of drumming',
                        'lessonLevel' => 'level 3',
                        'lessonLength' => '8 mins',
                        'lessonXp' => 150,
                        'lessonDescription' => 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.',
                        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/241285-card-thumbnail-1577144979.jpg',
                        'url' => self::$staticUrls['methodLevelLink'],
                    ],
                    [
                        'teacherName' => 'jared falk',
                        'lessonTitle' => 'the moeller method & essential grooves',
                        'lessonLevel' => 'level 4',
                        'lessonLength' => '8 mins',
                        'lessonXp' => 150,
                        'lessonDescription' => 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.',
                        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/241286-card-thumbnail-1577144984.jpg',
                        'url' => self::$staticUrls['methodLevelLink'],
                    ],
                    [
                        'teacherName' => 'jared falk',
                        'lessonTitle' => 'rhythmic groupings & improvisation',
                        'lessonLevel' => 'level 5',
                        'lessonLength' => '8 mins',
                        'lessonXp' => 150,
                        'lessonDescription' => 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.',
                        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/241287-card-thumbnail-1577144994.jpg',
                        'url' => self::$staticUrls['methodLevelLink'],
                    ],
                    [
                        'teacherName' => 'jared falk',
                        'lessonTitle' => 'odd time & finger control',
                        'lessonLevel' => 'level 6',
                        'lessonLength' => '8 mins',
                        'lessonXp' => 150,
                        'lessonDescription' => 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.',
                        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/241288-card-thumbnail-1577144999.jpg',
                        'url' => self::$staticUrls['methodLevelLink'],
                    ],
                    [
                        'teacherName' => 'jared falk',
                        'lessonTitle' => 'foot technique & combinations',
                        'lessonLevel' => 'level 7',
                        'lessonLength' => '8 mins',
                        'lessonXp' => 150,
                        'lessonDescription' => 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.',
                        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/241289-card-thumbnail-1577145007.jpg',
                        'url' => self::$staticUrls['methodLevelLink'],
                    ],
                    [
                        'teacherName' => 'jared falk',
                        'lessonTitle' => 'brushes, textures & articulation',
                        'lessonLevel' => 'level 8',
                        'lessonLength' => '8 mins',
                        'lessonXp' => 150,
                        'lessonDescription' => 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.',
                        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/241290-card-thumbnail-1577145012.jpg',
                        'url' => self::$staticUrls['methodLevelLink'],
                    ],
                    [
                        'teacherName' => 'jared falk',
                        'lessonTitle' => 'advanced styles & musical decisions',
                        'lessonLevel' => 'level 9',
                        'lessonLength' => '8 mins',
                        'lessonXp' => 150,
                        'lessonDescription' => 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.',
                        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/241291-card-thumbnail-1577145017.jpg',
                        'url' => self::$staticUrls['methodLevelLink'],
                    ],
                    [
                        'teacherName' => 'jared falk',
                        'lessonTitle' => 'go anywhere on the drums',
                        'lessonLevel' => 'level 10',
                        'lessonLength' => '8 mins',
                        'lessonXp' => 150,
                        'lessonDescription' => 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.',
                        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/241292-card-thumbnail-1577145021.jpg',
                        'url' => self::$staticUrls['methodLevelLink'],
                    ],
                ]
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function accountLessonsPageContent(View $view)
    {
        $view->with(
            [
                'lessons' => [
                    [
                        'name' => 'beats',
                        'icon' => 'icon-rudiments',
                        'tab' => 1
                    ],
                    [
                        'name' => 'theory',
                        'icon' => 'icon-blank-staff',
                        'tab' => 2
                    ],
                    [
                        'name' => 'fills',
                        'icon' => 'icon-drums',
                        'tab' => 3
                    ],
                    [
                        'name' => 'styles',
                        'icon' => 'icon-rudiments',
                        'tab' => 4
                    ],
                    [
                        'name' => 'technique',
                        'icon' => 'icon-rudiments',
                        'tab' => 5
                    ],
                    [
                        'name' => 'rudiments',
                        'icon' => 'icon-rudiments',
                        'tab' => 6
                    ],
                    [
                        'label' => 'ear training',
                        'name' => 'ear-training',
                        'icon' => 'icon-rudiments',
                        'tab' => 7
                    ],
                    [
                        'name' => 'independence',
                        'icon' => 'icon-rudiments',
                        'tab' => 8
                    ],
                    [
                        'name' => 'musicality',
                        'icon' => 'icon-rudiments',
                        'tab' => 9
                    ],
                    [
                        'name' => 'gear',
                        'icon' => 'icon-rudiments',
                        'tab' => 10
                    ]
                ],
                'nextUrl' => self::$staticUrls['accountProfileNameLink'],
                'skipUrl' => '#',
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function accountProfileNamePageContent(View $view)
    {
        $view->with(
            [
                'nextUrl' => self::$staticUrls['accountProfileAvatarLink'],
                'skipUrl' => '#',
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function accountStartPageContent(View $view)
    {
        $view->with(
            [
                'lesson' => [
                    'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                    'teacherName' => 'teacher name',
                    'icon' => 'icon-courses',
                    'contentType' => 'content type',
                    'videoTitle' => 'How To Use Drumeo Edge',
                    'difficulty' => 'Beginner - 1',
                    'hideAddIcon' => true,
                ],
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function livePageContent(View $view)
    {
        $view->with(
            [
                'contentData' => [
                    [
                        'month' => 'aug',
                        'date' => 'Mon 17',
                        'time' => '11:00 AM',
                        'title' => 'question and answer',
                        'subtitle' => 'Weekly Q&A',
                        'type' => 'live broadcast',
                        'instructor' => 'Kyle Radomsky',
                        'difficulty' => 'all skill levels',
                    ],
                    [
                        'month' => 'aug',
                        'date' => 'Tue 18',
                        'time' => '11:00 AM',
                        'title' => 'student focus',
                        'subtitle' => 'Student Focus',
                        'type' => 'live broadcast',
                        'instructor' => 'Kyle Radomsky',
                        'difficulty' => 'all skill levels',
                    ],
                    [
                        'month' => 'aug',
                        'date' => 'Wed 19',
                        'time' => '10:00 AM',
                        'title' => 'question and answer',
                        'subtitle' => 'Electronic Drums Q&A',
                        'type' => 'live broadcast',
                        'instructor' => 'Kyle Radomsky',
                        'difficulty' => 'all skill levels',
                    ],
                    [
                        'month' => 'aug',
                        'date' => 'Thu 20',
                        'time' => '3:00 PM',
                        'title' => 'question and answer',
                        'subtitle' => 'Rudiment Throwdown - All Strokes',
                        'type' => 'live broadcast',
                        'instructor' => 'John Wooton',
                        'difficulty' => 'all skill levels',
                    ],
                    [
                        'month' => 'aug',
                        'date' => 'Fri 21',
                        'time' => '11:00 AM',
                        'title' => 'question and answer',
                        'subtitle' => 'Weekly Q&A',
                        'type' => 'live broadcast',
                        'instructor' => 'Aaron Edgar',
                        'difficulty' => 'all skill levels',
                    ],
                ],
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function packsPageContent(View $view)
    {
        $view->with(
            [
                'continueVideos' => [
                    [
                        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                        'teacherName' => 'Instructor one',
                        'icon' => 'icon-packs',
                        'contentType' => 'successful drumming',
                        'videoTitle' => 'this is the lesson title',
                        'difficulty' => 'Beginner - 1',
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                        'teacherName' => 'Instructor Two',
                        'icon' => 'icon-packs',
                        'contentType' => 'rock drumming masterclass',
                        'videoTitle' => 'Continue Video Two',
                        'difficulty' => 'Beginner - 1',
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                        'teacherName' => 'Other Instructor',
                        'icon' => 'icon-packs',
                        'contentType' => 'cobus method',
                        'videoTitle' => 'Continue Video Three',
                        'difficulty' => 'Beginner - 1',
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                        'teacherName' => 'Instructor one',
                        'icon' => 'icon-packs',
                        'contentType' => 'bass drum secrets',
                        'videoTitle' => 'Continue Video Four',
                        'difficulty' => 'Beginner - 1',
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                        'teacherName' => 'Instructor Two',
                        'icon' => 'icon-packs',
                        'contentType' => 'independence made easy',
                        'videoTitle' => 'Continue Video Five',
                        'difficulty' => 'Beginner - 1',
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                        'teacherName' => 'Other Instructor',
                        'icon' => 'icon-packs',
                        'contentType' => 'content type',
                        'videoTitle' => 'Continue Video Six',
                        'difficulty' => 'Beginner - 1',
                        'url' => self::$staticUrls['contentVideoLink'],
                    ]
                ],
                'continueAllUrl' => '#',
                'packs' => [
                    [
                        'background' => 'https://dz5i3s4prcfun.cloudfront.net/drum-technique-made-easy/dtme-pack-card-thumb-w-o-logo.png',
                        'foreground' => 'https://dpwjbsxqtam5n.cloudfront.net/drum-technique-made-easy/logo-white.png',
                    ],
                    [
                        'background' => 'https://dpwjbsxqtam5n.cloudfront.net/drum-shop/card-thumbs/drumming-system-2.jpg',
                        'foreground' => 'https://dpwjbsxqtam5n.cloudfront.net/drum-shop/card-thumbs/drumming-system-2.png',
                    ],
                    [
                        'background' => 'https://dpwjbsxqtam5n.cloudfront.net/drum-shop/card-thumbs/independence-made-easy.jpg',
                        'foreground' => 'https://dzryyo1we6bm3.cloudfront.net/independence-made-easy/sales/logo.png',
                    ],
                    [
                        'background' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/packs/550/methods-and-mechanics.jpg',
                        'foreground' => 'https://s3.amazonaws.com/drumeo-packs/Pack%20Images/Methods%20And%20Mechanics/logo-white.png',
                    ],
                    [
                        'background' => 'https://dpwjbsxqtam5n.cloudfront.net/drum-shop/card-thumbs/successful-drumming.jpg',
                        'foreground' => 'https://dpwjbsxqtam5n.cloudfront.net/drum-shop/card-thumbs/successful-drumming.png',
                    ],
                    [
                        'background' => 'https://dpwjbsxqtam5n.cloudfront.net/drum-shop/card-thumbs/anatomy-of-a-drum-solo.jpg',
                        'foreground' => 'https://s3.amazonaws.com/drumeo-packs/Pack%20Images/Anatomy%20Of%20A%20Drum%20Solo/logo-white.png',
                    ],
                ],
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function accountProfileDashboardPageContent(View $view)
    {
        $view->with(
            [
                'videosContinue' => [
                    [
                        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                        'teacherName' => 'Instructor one',
                        'icon' => 'icon-courses',
                        'contentType' => 'content type',
                        'videoTitle' => 'Continue Video One',
                        'difficulty' => 'Beginner - 1',
                        'hideAddIcon' => true,
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                        'teacherName' => 'Instructor Two',
                        'icon' => 'icon-courses',
                        'contentType' => 'content type',
                        'videoTitle' => 'Continue Video Two',
                        'difficulty' => 'Beginner - 1',
                        'hideAddIcon' => true,
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                        'teacherName' => 'Other Instructor',
                        'icon' => 'icon-courses',
                        'contentType' => 'content type',
                        'videoTitle' => 'Continue Video Three',
                        'difficulty' => 'Beginner - 1',
                        'hideAddIcon' => true,
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                        'teacherName' => 'Instructor one',
                        'icon' => 'icon-courses',
                        'contentType' => 'content type',
                        'videoTitle' => 'Continue Video Four',
                        'difficulty' => 'Beginner - 1',
                        'hideAddIcon' => true,
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                        'teacherName' => 'Instructor Two',
                        'icon' => 'icon-courses',
                        'contentType' => 'content type',
                        'videoTitle' => 'Continue Video Five',
                        'difficulty' => 'Beginner - 1',
                        'hideAddIcon' => true,
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                        'teacherName' => 'Other Instructor',
                        'icon' => 'icon-courses',
                        'contentType' => 'content type',
                        'videoTitle' => 'Continue Video Six',
                        'difficulty' => 'Beginner - 1',
                        'hideAddIcon' => true,
                        'url' => self::$staticUrls['contentVideoLink'],
                    ]
                ],
                'continueAllUrl' => '#',
                'videosComplete' => [
                    [
                        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                        'teacherName' => 'Instructor one',
                        'icon' => 'icon-courses',
                        'contentType' => 'content type',
                        'videoTitle' => 'Continue Video One',
                        'difficulty' => 'Beginner - 1',
                        'hideAddIcon' => true,
                        'showCompleteIcon' => true,
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                        'teacherName' => 'Instructor Two',
                        'icon' => 'icon-courses',
                        'contentType' => 'content type',
                        'videoTitle' => 'Continue Video Two',
                        'difficulty' => 'Beginner - 1',
                        'hideAddIcon' => true,
                        'showCompleteIcon' => true,
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                        'teacherName' => 'Other Instructor',
                        'icon' => 'icon-courses',
                        'contentType' => 'content type',
                        'videoTitle' => 'Continue Video Three',
                        'difficulty' => 'Beginner - 1',
                        'hideAddIcon' => true,
                        'showCompleteIcon' => true,
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                        'teacherName' => 'Instructor one',
                        'icon' => 'icon-courses',
                        'contentType' => 'content type',
                        'videoTitle' => 'Continue Video Four',
                        'difficulty' => 'Beginner - 1',
                        'hideAddIcon' => true,
                        'showCompleteIcon' => true,
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                        'teacherName' => 'Instructor Two',
                        'icon' => 'icon-courses',
                        'contentType' => 'content type',
                        'videoTitle' => 'Continue Video Five',
                        'difficulty' => 'Beginner - 1',
                        'hideAddIcon' => true,
                        'showCompleteIcon' => true,
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                        'teacherName' => 'Other Instructor',
                        'icon' => 'icon-courses',
                        'contentType' => 'content type',
                        'videoTitle' => 'Continue Video Six',
                        'difficulty' => 'Beginner - 1',
                        'hideAddIcon' => true,
                        'showCompleteIcon' => true,
                        'url' => self::$staticUrls['contentVideoLink'],
                    ]
                ],
                'completedAllUrl' => '#',
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function schedulePageContent(View $view)
    {
        $view->with(
            [
                'contentData' => [
                    [
                        'month' => 'aug',
                        'date' => 'Mon 17',
                        'time' => '8:00 AM',
                        'title' => 'quick tips',
                        'subtitle' => '5 Proven Ways To Fix Your Doubles',
                        'type' => 'lesson release',
                        'instructor' => 'TBD',
                        'difficulty' => 'all skill levels',
                    ],
                    [
                        'month' => 'aug',
                        'date' => 'Mon 17',
                        'time' => '11:00 AM',
                        'title' => 'question and answer',
                        'subtitle' => 'Weekly Q&A',
                        'type' => 'live broadcast',
                        'instructor' => 'Kyle Radomsky',
                        'difficulty' => 'all skill levels',
                    ],
                    [
                        'month' => 'aug',
                        'date' => 'Tue 18',
                        'time' => '11:00 AM',
                        'title' => 'student focus',
                        'subtitle' => 'Student Focus',
                        'type' => 'live broadcast',
                        'instructor' => 'Kyle Radomsky',
                        'difficulty' => 'all skill levels',
                    ],
                    [
                        'month' => 'aug',
                        'date' => 'Wed 19',
                        'time' => '10:00 AM',
                        'title' => 'question and answer',
                        'subtitle' => 'Electronic Drums Q&A',
                        'type' => 'live broadcast',
                        'instructor' => 'John Wooton',
                        'difficulty' => 'all skill levels',
                    ],
                    [
                        'month' => 'aug',
                        'date' => 'Thu 20',
                        'time' => '8:00 AM',
                        'title' => 'quick tips',
                        'subtitle' => 'Consitency As A Drummer',
                        'type' => 'live broadcast',
                        'instructor' => "Nick D'Virgilio",
                        'difficulty' => 'all skill levels',
                    ],
                    [
                        'month' => 'aug',
                        'date' => 'Thu 20',
                        'time' => '3:00 PM',
                        'title' => 'question and answer',
                        'subtitle' => 'Rudiment Throwdown - All Strokes',
                        'type' => 'live broadcast',
                        'instructor' => 'John Wooton',
                        'difficulty' => 'all skill levels',
                    ],
                    [
                        'month' => 'aug',
                        'date' => 'Fri 21',
                        'time' => '11:00 AM',
                        'title' => 'student focus',
                        'subtitle' => 'Student Focus',
                        'type' => 'live broadcast',
                        'instructor' => 'Aaron Edgar',
                        'difficulty' => 'all skill levels',
                    ],
                    [
                        'month' => 'aug',
                        'date' => 'Sat 22',
                        'time' => '8:00 AM',
                        'title' => 'course',
                        'subtitle' => "Glen's Linear Lickss",
                        'type' => 'lesson release',
                        'instructor' => 'Glen Sobel',
                        'difficulty' => 'all skill levels',
                    ],
                ]
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function accountSettingsDetailsPageContent(View $view)
    {
        $view->with(
            [
                'membershipType' => '1-year',
                'membershipStatus' => 'active',
                'isAdmin' => true,
                'userProduct' => [
                    'startDate' => \Carbon\Carbon::parse('2020-07-28 06:16:08'),
                    'paidUntil' => \Carbon\Carbon::parse('2020-09-28 06:16:08'),
                ],
                'subscription' => [
                    'intervalCount' => 1,
                    'intervalType' => 'month',
                    'totalPrice' => 197,
                    'paidUntil' => \Carbon\Carbon::parse('2020-09-28 06:16:08'),
                    'productId' => 1,
                    'payments' => [],
                    'startDate' => \Carbon\Carbon::parse('2020-01-28 06:16:08')
                ],
                'edgeExpirationDate' => \Carbon\Carbon::parse('2020-09-28 06:16:08'),
                'user' => [
                    'createdAt' => \Carbon\Carbon::parse('2019-01-01 06:16:08'),
                ],
                'subscriptionManagedElsewhere' => false,
                'hasClaimedRetentionOfferAlready' => false,
                'trialMembershipProductIds' => [],
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function accountLoginCredentialsPageContent(View $view)
    {
        $view->with(
            [
                'userData' => [
                    'id' => 1,
                    'email' => [
                        'title' => 'login email',
                        'inputs' => [
                            'email' => 'brandon@toews.com',
                        ],
                    ],
                    'password' => [
                        'title' => 'login password',
                        'inputs' => [
                            'password' => '********',
                        ],
                    ],
                ],
                'inputErrors' => [
                    'email' => [],
                    'password' => [],
                ],
                'forms' => [
                    'email' => [
                        'method' => 'patch',
                        'action' => '/usora/email-change/request/',
                    ],
                    'password' => [
                        'method' => 'patch',
                        'action' => '/usora/user/update-password/',
                    ],
                ],
            ]
        );
    }

    protected function getMockData($fileName)
    {
        $filePath = sprintf('%s/../../mocks/%s', __DIR__, $fileName);

        if (file_exists($filePath)) {
            return file_get_contents($filePath);
        }

        return;
    }
}
