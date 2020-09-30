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
        'scriptsJsPath' => '../../js/generic/musora-utility-scripts.js',
        'drumeoCssPath' => '/build/drumeo/drumeo.css',
    ];

    public static $staticUrls = [
        // vue
        'contentVideoLink' => '/router.php/pages/content_video',
        'coursesLink' => '/router.php/pages/courses',
        'edgeLink' => '/router.php/pages/edge',
        'playAlongsLink' => '/router.php/pages/play_alongs',
        'profileMyListLink' => '/router.php/pages/profile_my_list',
        'rudimentsLink' => '/router.php/pages/rudiments',
        'searchResultsLink' => '/router.php/pages/search_results',
        'settingsPaymentsLink' => '/router.php/pages/settings_payments',
        'settingsProfileLink' => '/router.php/pages/settings_profile',
        'showsShowLink' => '/router.php/pages/shows_show',
        'songsLink' => '/router.php/pages/songs',
        'songsSongLink' => '/router.php/pages/songs_song',
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
        'packBundles' => '/router.php/pages/pack_bundles',
        'packBundleLessons' => '/router.php/pages/pack_bundle_lessons',

        // misc
        'forumsLink' => 'https://forums.drumeo.com/',
        'shopLink' => '/shop',

        // footer
        'termsLink' => '/terms/',
        'privacyLink' => '/privacy/',
        'legacyResourcesLink' => '/laravel/public/members/legacy-resources',
        'supportLink' => '/laravel/public/members/support',
        'logoutLink' => '/laravel/public/logout',
    ];

    /**
     * @param View $view
     * @return void
     */
    public function all(View $view)
    {
        $view->with(
            [
                'profilePictureUrl' => 'https://s3.amazonaws.com/pianote/defaults/avatar.png',
            ]
        );
    }

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
                        'label' => 'minutes practiced',
                        'value' => 4590,
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
                'profilePictureUrl' => 'https://s3.amazonaws.com/pianote/defaults/avatar.png',
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
                'courseDescription' => [
                    'teacher' => 'jared falk',
                    'difficulty' => 'Level 1',
                    'title' => 'How To Setup Your Gear',
                    'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus.',
                    'thumbnail' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/courses/550/dcb-06.jpg',
                ],
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
                    'level' => '3.5',
                    'percent' => 64,
                    'xp' => 1250,
                    'button' => [
                        'labelText' => 'next lesson',
                        'theme' => 'reversed',
                        'href' => '/test',
                    ]
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
        $mockData = $this->getMockData('debug.json');

        $view->with(
            [
                'nextLesson' => [
                    'teacherName' => 'teacher name',
                    'lessonTitle' => 'this is the lesson title',
                    'lessonLength' => '8 mins',
                    'lessonXp' => 150,
                    'lessonDescription' => 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.',
                    // 'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/247400-card-thumbnail-maxres-1584796503.jpg',
                    'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/241250-card-thumbnail-maxres-1593029818.png',
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
                    'xp' => 1250,
                    'button' => [
                        'labelText' => 'next lesson',
                        'theme' => 'reversed',
                        'href' => '/test',
                    ]
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
                        'url' => self::$staticUrls['packBundles'],
                    ],
                    [
                        'background' => 'https://dpwjbsxqtam5n.cloudfront.net/drum-shop/card-thumbs/drumming-system-2.jpg',
                        'foreground' => 'https://dpwjbsxqtam5n.cloudfront.net/drum-shop/card-thumbs/drumming-system-2.png',
                        'url' => self::$staticUrls['packBundles'],
                    ],
                    [
                        'background' => 'https://dpwjbsxqtam5n.cloudfront.net/drum-shop/card-thumbs/independence-made-easy.jpg',
                        'foreground' => 'https://dzryyo1we6bm3.cloudfront.net/independence-made-easy/sales/logo.png',
                        'url' => self::$staticUrls['packBundles'],
                    ],
                    [
                        'background' => 'https://dzryyo1we6bm3.cloudfront.net/card-thumbnails/packs/550/methods-and-mechanics.jpg',
                        'foreground' => 'https://s3.amazonaws.com/drumeo-packs/Pack%20Images/Methods%20And%20Mechanics/logo-white.png',
                        'url' => self::$staticUrls['packBundles'],
                    ],
                    [
                        'background' => 'https://dpwjbsxqtam5n.cloudfront.net/drum-shop/card-thumbs/successful-drumming.jpg',
                        'foreground' => 'https://dpwjbsxqtam5n.cloudfront.net/drum-shop/card-thumbs/successful-drumming.png',
                        'url' => self::$staticUrls['packBundles'],
                    ],
                    [
                        'background' => 'https://dpwjbsxqtam5n.cloudfront.net/drum-shop/card-thumbs/anatomy-of-a-drum-solo.jpg',
                        'foreground' => 'https://s3.amazonaws.com/drumeo-packs/Pack%20Images/Anatomy%20Of%20A%20Drum%20Solo/logo-white.png',
                        'url' => self::$staticUrls['packBundles'],
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

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function accountSetupPageContent(View $view)
    {
        $view->with(
            [
                'data' => [
                    'notify_weekly_update' => 1,
                    'notify_on_lesson_comment_reply' => 0,
                    'notify_on_lesson_comment_like' => 1,
                    'notify_on_forum_followed_thread_reply' => 0,
                    'notify_on_forum_post_like' => 1,
                    'use_legacy_video_player' => 0,
                ],
                'form' => [
                    'method' => 'POST',
                    'action' => '/usora/user/update/1/',
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
    public function showsPageContent(View $view)
    {
        $view->with(
            [
                'continueVideos' => [
                    [
                        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                        'teacherName' => 'Instructor one',
                        'icon' => 'icon-courses',
                        'contentType' => 'content type',
                        'videoTitle' => 'Continue Video One',
                        'difficulty' => 'Beginner - 1',
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                        'teacherName' => 'Instructor Two',
                        'icon' => 'icon-courses',
                        'contentType' => 'content type',
                        'videoTitle' => 'Continue Video Two',
                        'difficulty' => 'Beginner - 1',
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                        'teacherName' => 'Other Instructor',
                        'icon' => 'icon-courses',
                        'contentType' => 'content type',
                        'videoTitle' => 'Continue Video Three',
                        'difficulty' => 'Beginner - 1',
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                        'teacherName' => 'Instructor one',
                        'icon' => 'icon-courses',
                        'contentType' => 'content type',
                        'videoTitle' => 'Continue Video Four',
                        'difficulty' => 'Beginner - 1',
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                        'teacherName' => 'Instructor Two',
                        'icon' => 'icon-courses',
                        'contentType' => 'content type',
                        'videoTitle' => 'Continue Video Five',
                        'difficulty' => 'Beginner - 1',
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'thumbnail' => 'https://dmmior4id2ysr.cloudfront.net/assets/images/drumeo_fallback_thumb.jpg',
                        'teacherName' => 'Other Instructor',
                        'icon' => 'icon-courses',
                        'contentType' => 'content type',
                        'videoTitle' => 'Continue Video Six',
                        'difficulty' => 'Beginner - 1',
                        'url' => self::$staticUrls['contentVideoLink'],
                    ]
                ],
                'continueAllUrl' => '#',
                'shows' => [
                    [
                        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/show-live.jpg',
                        'url' => self::$staticUrls['showsShowLink'],
                    ],
                    [
                        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/behind-the-scenes.jpg',
                        'url' => self::$staticUrls['showsShowLink'],
                    ],
                    [
                        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/bootcamps.jpg',
                        'url' => self::$staticUrls['showsShowLink'],
                    ],
                    [
                        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/challenges.jpg',
                        'url' => self::$staticUrls['showsShowLink'],
                    ],
                    [
                        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/sonor-drums.jpg',
                        'url' => self::$staticUrls['showsShowLink'],
                    ],
                    [
                        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/exploring-beats.jpg',
                        'url' => self::$staticUrls['showsShowLink'],
                    ],
                    [
                        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/gear.jpg',
                        'url' => self::$staticUrls['showsShowLink'],
                    ],
                    [
                        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/on-the-road.jpg',
                        'url' => self::$staticUrls['showsShowLink'],
                    ],
                    [
                        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/performances.jpg',
                        'url' => self::$staticUrls['showsShowLink'],
                    ],
                    [
                        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/show-podcast.jpg',
                        'url' => self::$staticUrls['showsShowLink'],
                    ],
                    [
                        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/show-quick-tips.jpg',
                        'url' => self::$staticUrls['showsShowLink'],
                    ],
                    [
                        'thumbnail' => 'https://dpwjbsxqtam5n.cloudfront.net/shows/advent-calendar-show-card.jpg',
                        'url' => self::$staticUrls['showsShowLink'],
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
    public function videoPageContent(View $view)
    {
        $relatedVideosData = $this->getMockData('related_videos.json');
        $commentsData = $this->getMockData('comments.json');

        $view->with(
            [
                'relatedVideosData' => $relatedVideosData,
                'commentsData' => $commentsData,
                'userData' => [
                    'avatar' => 'https://s3.amazonaws.com/pianote/defaults/avatar.png',
                    'name' => 'brandon toews',
                    'membership' => 'team',
                    'level' => '2.3',
                    'border' => 'blue',
                ],
                'breadcrumbs' => [
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
                ],
                'lessonProgress' => [
                    'percent' => 48,
                    'xp' => 150,
                    'fixed' => false,
                    'button' => [
                        'theme' => 'white-wire',
                        'iconClass' => 'fas fa-check',
                        'labelText' => 'mark as complete',
                        'href' => '#',
                    ],
                ],
                'description' => [
                    'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.',
                    'Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.',
                    'Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.'
                ],
                'themeColor' => 'drumeo',
                'lessonContent' => [
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
                ],
                'lessonContentYoutube' => [
                    'videoId' => '_Ye1nhmRMCo',
                    'currentSecond' => '0',
                    'totalDuration' => '15000',
                    'progressState' => '',
                    'contentId' => 23033,
                ],
                'useLegacyPlayer' => false,
                'useYoutubePlayer' => false,
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function coursesPageContent(View $view)
    {
        $coursesData = $this->getMockData('courses.json');

        $view->with(
            [
                'coursesData' => $coursesData,
                'continueCoursesData' => $coursesData,
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function playAlongsPageContent(View $view)
    {
        $playAlongsData = $this->getMockData('play_alongs.json');

        $view->with(
            [
                'playAlongsData' => $playAlongsData,
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function profileMyListPageContent(View $view)
    {
        $mylistData = $this->getMockData('mylist.json');

        $view->with(
            [
                'mylistData' => $mylistData,
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function rudimentsPageContent(View $view)
    {
        $rudimentsData = $this->getMockData('rudiments.json');

        $view->with(
            [
                'continueVideos' => $rudimentsData,
                'continueAllUrl' => '#',
                'rudimentsData' => $rudimentsData,
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function searchResultsPageContent(View $view)
    {
        $searchResultsData = $this->getMockData('search_results.json');

        $view->with(
            [
                'searchResultsData' => $searchResultsData,
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function accountSettingsPaymentsPageContent(View $view)
    {
        $paymentMethodsData = $this->getMockData('paymentMethods.json');
        $cartData = $this->getMockData('cartData.json');

        $view->with(
            [
                'paymentMethodsData' => $paymentMethodsData,
                'cartData' => $cartData,
                'countries' => ['United States', 'Canada', 'United Kingdom', 'Australia'],
                'regions' => ['Alberta', 'British Columbia'],
                'inputErrors' => ['methods' => []],
                'user' => [
                    'id' => 1,
                    'hasSubscription' => true,
                    'isActive' => false,
                ],
                'payments' => [
                    [
                        'id' => 1,
                        'date' => 'August 24, 2020',
                        'payment-method' => 'Visa - 4242',
                        'type' => 'INITIAL_ORDER',
                        'amount' => '$197.00',
                    ],
                    [
                        'id' => 2,
                        'date' => 'July 24, 2020',
                        'payment-method' => 'Visa - 4242',
                        'type' => 'INITIAL_ORDER',
                        'amount' => '$197.00',
                    ]
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
    public function accountProfilePageContent(View $view)
    {
        $view->with(
            [
                'userData' => [
                    'id' => 1,
                    'display' => [
                        'title' => 'display name',
                        'inputs' => [
                            'display_name' => 'Brandon Toews',
                        ],
                    ],
                    'avatar' => [
                        'title' => 'Profile Picture',
                        'inputs' => [
                            // 'avatar' => '',
                            'avatar' => 'https://d2vyvo0tyx8ig5.cloudfront.net/avatars/150259_1557736362228.jpg'
                        ],
                    ],
                    'about' => [
                        'title' => 'about brandon toews',
                        'inputs' => [
                            'first_name' => 'Brandon',
                            'last_name' => 'Toews',
                            'country' => '',
                            'birthday' => '2018-05-07',
                            'biography' => 'test bio text',
                        ],
                    ],
                    'gear' => [
                        'title' => 'my gear',
                        'inputs' => [
                            'drums_playing_since_year' => '1996',
                            'drums_gear_set_brands' => 'gear set brand',
                            'drums_gear_cymbal_brands' => 'gear cymbal brand',
                            'drums_gear_hardware_brands' => 'gear hardware brand',
                            'drums_gear_stick_brands' => 'gear stick brands',
                        ],
                    ],
                    'gear-photo' => [
                        'title' => 'Gear Photo',
                        'inputs' => [
                            // 'gear' => '',
                            'gear' => 'https://drumeo-profile-images.s3.us-west-2.amazonaws.com/150386_drumkit-image_1530547770.jpg'
                        ],
                    ],
                ],
                'inputErrors' => [
                    'display' => [],
                    'about' => [
                        // 'first_name' => 'test error message',
                    ],
                    'gear' => [],
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
    public function showsShowPageContent(View $view)
    {
        $showsData = $this->getMockData('shows.json');

        $view->with(
            [
                'continueVideos' => $showsData,
                'continueAllUrl' => '#',
                'showsData' => $showsData,
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function songsPageContent(View $view)
    {
        $songsData = $this->getMockData('songs.json');

        $view->with(
            [
                'continueVideos' => $songsData,
                'continueAllUrl' => '#',
                'songsData' => $songsData,
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function studentFocusPageContent(View $view)
    {
        $studentFocusData = $this->getMockData('student_focus.json');

        $view->with(
            [
                'continueVideos' => $studentFocusData,
                'continueAllUrl' => '#',
                'studentFocusData' => $studentFocusData,
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function songsSongPageContent(View $view)
    {
        $songData = $this->getMockData('song.json');
        $relatedSongsData = $this->getMockData('related_songs.json');
        $commentsData = $this->getMockData('comments.json');

        $view->with(
            [
                'songData' => $songData,
                'relatedSongsData' => $relatedSongsData,
                'commentsData' => $commentsData,
                'breadcrumbs' => [
                    'parents' => [
                        [
                            'label' => 'songs',
                            'url' => '/router.php/songs',
                        ],
                    ],
                    'current' => [
                        'label' => 'american idiot'
                    ],
                ],
                'userData' => [
                    'avatar' => 'https://s3.amazonaws.com/pianote/defaults/avatar.png',
                    'name' => 'brandon toews',
                    'membership' => 'team',
                    'level' => '2.3',
                    'border' => 'blue',
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
    public function footer(View $view)
    {
        $view->with(
            [
                'termsLink' => self::$staticUrls['termsLink'],
                'privacyLink' => self::$staticUrls['privacyLink'],
                'legacyResourcesLink' => self::$staticUrls['legacyResourcesLink'],
                'supportLink' => self::$staticUrls['supportLink'],
                'logoutLink' => self::$staticUrls['logoutLink'],
            ]
        );
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function packBundlesPageContent(View $view)
    {
        $view->with(
            [
                'breadcrumbs' => [
                    'parents' => [
                        [
                            'label' => 'packs',
                            'url' => '/router.php/pages/packs',
                        ],
                    ],
                    'current' => [
                        'label' => 'cobus method'
                    ],
                ],
                'details' => [
                    'lessons' => 131,
                    'xp' => 32150,
                ],
                'description' => [
                    'contentDescription' => 'The Cobus Method is based entirely around playing the drums by ear. This natural approach completely avoids sheet music and complex theory - focusing instead on playing the drums along with real music!',
                    'instructors' => [
                        [
                            'name' => 'Cobus Potgieter',
                            'bio' => 'The godfather of YouTube drum covers, with over 100 million views, Cobus Potgieter’s unique and creative drumming while playing along to music, has made him one of the best known drummers in the world. With no formal training, Cobus developed a fresh drumming style and creative and effective teaching methods that have made learning drums by ear through his highly-acclaimed “Cobus Method” training pack, an exquisite, fulfilling, and fun experience for thousands of drummers around the world.'
                        ],
                    ],
                ],
                'title' => 'Cobus Method',
                'bundles' => [
                    [
                        'thumbnail' => 'https://s3.amazonaws.com/drumeo-packs/Pack+Images/The+Cobus+Method/01.png',
                        'title' => 'getting started',
                        'description' => 'In this section, you\'ll learn about choosing the right drum setup, hand technique, practicing, and much more!',
                        'type' => 'pack bundle',
                        'lessons' => 8,
                        'url' => self::$staticUrls['packBundleLessons'],
                    ],
                    [
                        'thumbnail' => 'https://s3.amazonaws.com/drumeo-packs/Pack+Images/The+Cobus+Method/02.png',
                        'title' => 'what is the cobus method',
                        'description' => 'Here, you will learn the five steps that make up The Cobus Method. You\'ll be able to use this method for learning any song!',
                        'type' => 'pack bundle',
                        'lessons' => 8,
                        'url' => self::$staticUrls['packBundleLessons'],
                    ],
                    [
                        'thumbnail' => 'https://s3.amazonaws.com/drumeo-packs/Pack+Images/The+Cobus+Method/03.png',
                        'title' => 'figuring out songs by ear pt. 1',
                        'description' => 'This section will teach you how to figure out a song by ear. It will focus on topics like listening to other musicians, song structure, and training your ears.',
                        'type' => 'pack bundle',
                        'lessons' => 4,
                        'url' => self::$staticUrls['packBundleLessons'],
                    ],
                    [
                        'thumbnail' => 'https://s3.amazonaws.com/drumeo-packs/Pack+Images/The+Cobus+Method/04.png',
                        'title' => 'figuring out songs by ear pt. 2',
                        'description' => 'In this section, Cobus will demonstrate how to figure out two different songs by ear.',
                        'type' => 'pack bundle',
                        'lessons' => 2,
                        'url' => self::$staticUrls['packBundleLessons'],
                    ],
                    [
                        'thumbnail' => 'https://s3.amazonaws.com/drumeo-packs/Pack+Images/The+Cobus+Method/05.png',
                        'title' => 'writing you own drum beats',
                        'description' => 'Cobus will teach you a variety of ways to create your own drum beats. He will also show you some of his favorite drum beats!',
                        'type' => 'pack bundle',
                        'lessons' => 3,
                        'url' => self::$staticUrls['packBundleLessons'],
                    ],
                    [
                        'thumbnail' => 'https://s3.amazonaws.com/drumeo-packs/Pack+Images/The+Cobus+Method/06.png',
                        'title' => 'writing you own drum fills',
                        'description' => 'This section will explain how to compose your own drum fills. You will learn about Cobus\' "Fill Shizzle System," playing melodic fills, how your musical influences affect your drum fills, and also some of Cobus\' favorite drum fills!',
                        'type' => 'pack bundle',
                        'lessons' => 4,
                        'url' => self::$staticUrls['packBundleLessons'],
                    ],
                    [
                        'thumbnail' => 'https://s3.amazonaws.com/drumeo-packs/Pack+Images/The+Cobus+Method/07.png',
                        'title' => 'drum techniques',
                        'description' => 'In this section, Cobus will cover topics like hand and foot technique, speed, rudiments, and practicing.',
                        'type' => 'pack bundle',
                        'lessons' => 9,
                        'url' => self::$staticUrls['packBundleLessons'],
                    ],
                    [
                        'thumbnail' => 'https://s3.amazonaws.com/drumeo-packs/Pack+Images/The+Cobus+Method/08.png',
                        'title' => 'dynamic drumming',
                        'description' => 'Cobus will teach you a number of different ways to incorporate dynamics into your playing throughout this section.',
                        'type' => 'pack bundle',
                        'lessons' => 12,
                        'url' => self::$staticUrls['packBundleLessons'],
                    ],
                    [
                        'thumbnail' => 'https://s3.amazonaws.com/drumeo-packs/Pack+Images/The+Cobus+Method/09.png',
                        'title' => 'playing to music tracks #1',
                        'description' => 'This section will include the following play-along tracks: Slow Funk, Pop, Fast Rock, R&B, and Punk.',
                        'type' => 'pack bundle',
                        'lessons' => 30,
                        'url' => self::$staticUrls['packBundleLessons'],
                    ],
                    [
                        'thumbnail' => 'https://s3.amazonaws.com/drumeo-packs/Pack+Images/The+Cobus+Method/10.png',
                        'title' => 'playing to music tracks #2',
                        'description' => 'This section will include the following play-along tracks: 7/4 Fusion, Hard Rock, Fast Funk, 6/8 Ballad, and Fast Pop.',
                        'type' => 'pack bundle',
                        'lessons' => 30,
                        'url' => self::$staticUrls['packBundleLessons'],
                    ],
                    [
                        'thumbnail' => 'https://s3.amazonaws.com/drumeo-packs/Pack+Images/The+Cobus+Method/11.png',
                        'title' => 'writing with a band song #1',
                        'description' => 'Cobus will demonstrate the process of writing a song with a band in this section.',
                        'type' => 'pack bundle',
                        'lessons' => 3,
                        'url' => self::$staticUrls['packBundleLessons'],
                    ],
                    [
                        'thumbnail' => 'https://s3.amazonaws.com/drumeo-packs/Pack+Images/The+Cobus+Method/12.png',
                        'title' => 'writing with a band song #2',
                        'description' => 'Cobus will demonstrate the process of writing a song with a band in this section.',
                        'type' => 'pack bundle',
                        'lessons' => 3,
                        'url' => self::$staticUrls['packBundleLessons'],
                    ],
                    [
                        'thumbnail' => 'https://s3.amazonaws.com/drumeo-packs/Pack+Images/The+Cobus+Method/13.png',
                        'title' => 'writing with a band song #3',
                        'description' => 'Cobus will demonstrate the process of writing a song with a band in this section.',
                        'type' => 'pack bundle',
                        'lessons' => 3,
                        'url' => self::$staticUrls['packBundleLessons'],
                    ],
                    [
                        'thumbnail' => 'https://s3.amazonaws.com/drumeo-packs/Pack+Images/The+Cobus+Method/14.png',
                        'title' => 'writing with a band song #4 & #5',
                        'description' => 'Cobus will demonstrate the process of writing two songs with a band in this section.',
                        'type' => 'pack bundle',
                        'lessons' => 6,
                        'url' => self::$staticUrls['packBundleLessons'],
                    ],
                    [
                        'thumbnail' => 'https://s3.amazonaws.com/drumeo-packs/Pack+Images/The+Cobus+Method/15.png',
                        'title' => 'extras',
                        'description' => 'The final section of The Cobus Method will feature two drum solos, a live lesson with Cobus, outtakes, and more behind the scenes footage!',
                        'type' => 'pack bundle',
                        'lessons' => 7,
                        'url' => self::$staticUrls['packBundleLessons'],
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
    public function packBundleLessonsPageContent(View $view)
    {
        $view->with(
            [
                'breadcrumbs' => [
                    'parents' => [
                        [
                            'label' => 'packs',
                            'url' => self::$staticUrls['packsLink'],
                        ],
                        [
                            'label' => 'cobus method',
                            'url' => self::$staticUrls['packBundles'],
                        ],
                    ],
                    'current' => [
                        'label' => 'getting started'
                    ],
                ],
                'details' => [
                    'lessons' => 8,
                    'xp' => 1700,
                ],
                'description' => [
                    'contentDescription' => 'The Cobus Method is based entirely around playing the drums by ear. This natural approach completely avoids sheet music and complex theory - focusing instead on playing the drums along with real music!',
                    'instructors' => [
                        [
                            'name' => 'Cobus Potgieter',
                            'bio' => 'The godfather of YouTube drum covers, with over 100 million views, Cobus Potgieter’s unique and creative drumming while playing along to music, has made him one of the best known drummers in the world. With no formal training, Cobus developed a fresh drumming style and creative and effective teaching methods that have made learning drums by ear through his highly-acclaimed “Cobus Method” training pack, an exquisite, fulfilling, and fun experience for thousands of drummers around the world.'
                        ],
                    ],
                ],
                'lessonProgress' => [
                    'percent' => 12,
                    'xp' => 1700,
                    'fixed' => false,
                    'button' => [
                        'theme' => 'white-wire',
                        'labelText' => 'next lesson »',
                        'href' => '#',
                    ],
                ],
                'lessons' => [
                    [
                        'index' => 1,
                        'thumbnail' => 'https://i.vimeocdn.com/video/457746040_640x360.jpg?r=pad',
                        'title' => 'introduction',
                        'length' => 5,
                        'showAdd' => true,
                        'progress' => 100,
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'index' => 2,
                        'thumbnail' => 'https://i.vimeocdn.com/video/457746877_640x360.jpg?r=pad',
                        'title' => 'choosing the right drum setup',
                        'length' => 11,
                        'showAdd' => true,
                        'progress' => 40,
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'index' => 3,
                        'thumbnail' => 'https://i.vimeocdn.com/video/457746547_640x360.jpg?r=pad',
                        'title' => 'basic stick grip',
                        'length' => 8,
                        'showAdd' => true,
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'index' => 4,
                        'thumbnail' => 'https://i.vimeocdn.com/video/457747321_640x360.jpg?r=pad',
                        'title' => 'time signatures',
                        'length' => 10,
                        'showAdd' => true,
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'index' => 5,
                        'thumbnail' => 'https://i.vimeocdn.com/video/457748206_640x360.jpg?r=pad',
                        'title' => 'note values',
                        'length' => 17,
                        'showAdd' => true,
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'index' => 6,
                        'thumbnail' => 'https://i.vimeocdn.com/video/457749435_640x360.jpg?r=pad',
                        'title' => 'how to practice on the drums',
                        'length' => 27,
                        'showAdd' => true,
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'index' => 7,
                        'thumbnail' => 'https://i.vimeocdn.com/video/457748633_640x360.jpg?r=pad',
                        'title' => 'playing your first beat',
                        'length' => 4,
                        'showAdd' => true,
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                    [
                        'index' => 8,
                        'thumbnail' => 'https://i.vimeocdn.com/video/457748985_640x360.jpg?r=pad',
                        'title' => 'playing your first fill',
                        'length' => 5,
                        'showAdd' => true,
                        'url' => self::$staticUrls['contentVideoLink'],
                    ],
                ],
                'completionBonus' => 500,
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
