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
        'contentVideoLink' => '/router.php/vue/content_video',
        'coursesLink' => '/router.php/vue/courses',
        'edgeLink' => '/router.php/vue/edge',
        'playAlongsLink' => '/router.php/vue/play_alongs',
        'profileMyListLink' => '/router.php/vue/profile_my_list',
        'publicLayoutLink' => '/router.php/vue/public_layout',
        'rudimentsLink' => '/router.php/vue/rudiments',
        'searchResultsLink' => '/router.php/vue/search_results',
        'settingsPaymentsLink' => '/router.php/vue/settings_payments',
        'settingsProfileLink' => '/router.php/vue/settings_profile',
        'showsShowLink' => '/router.php/vue/shows_show',
        'sliderLink' => '/router.php/vue/slider',
        'songsLink' => '/router.php/vue/songs',
        'songsSongLink' => '/router.php/vue/songs_song',
        'studentFocusLink' => '/router.php/vue/student_focus',

        // blade
        'accountLessonsLink' => '/router.php/account_lessons',
        'accountProfile_nameLink' => '/router.php/account_profile_name',
        'accountStartLink' => '/router.php/account_start',
        'coursesCourseLink' => '/router.php/courses_course',
        'liveLink' => '/router.php/live',
        'loginLink' => '/router.php/login',
        'methodLink' => '/router.php/method',
        'methodLevelLink' => '/router.php/method_level',
        'packsLink' => '/router.php/packs',
        'profileDashboardLink' => '/router.php/profile_dashboard',
        'resetLink' => '/router.php/reset',
        'scheduleLink' => '/router.php/schedule',
        'settingsDetailsLink' => '/router.php/settings_details',
        'settingsLoginCredentialsLink' => '/router.php/settings_login_credentials',
        'settingsSetupLink' => '/router.php/settings_setup',
        'showsLink' => '/router.php/shows',
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
    public function methodContent(View $view)
    {
        $view->with(
            [
                'lessons' => [
                    [
                        'teacherName' => 'jared falk',
                        'lessonTitle' => 'getting started on the drums',
                        'lessonLevel' => 'level 1',
                        'lessonLength' => '8 mins',
                        'lessonXp' => 150,
                        'lessonDescription' => 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.',
                        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/241248-card-thumbnail-1577144969.jpg',
                        'url' => '/router.php/method_level',
                    ],
                    [
                        'teacherName' => 'jared falk',
                        'lessonTitle' => 'basic theory & ear training',
                        'lessonLevel' => 'level 2',
                        'lessonLength' => '8 mins',
                        'lessonXp' => 150,
                        'lessonDescription' => 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.',
                        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/241284-card-thumbnail-1577144975.jpg',
                        'url' => '/router.php/method_level',
                    ],
                    [
                        'teacherName' => 'jared falk',
                        'lessonTitle' => 'the motions of drumming',
                        'lessonLevel' => 'level 3',
                        'lessonLength' => '8 mins',
                        'lessonXp' => 150,
                        'lessonDescription' => 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.',
                        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/241285-card-thumbnail-1577144979.jpg',
                        'url' => '/router.php/method_level',
                    ],
                    [
                        'teacherName' => 'jared falk',
                        'lessonTitle' => 'the moeller method & essential grooves',
                        'lessonLevel' => 'level 4',
                        'lessonLength' => '8 mins',
                        'lessonXp' => 150,
                        'lessonDescription' => 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.',
                        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/241286-card-thumbnail-1577144984.jpg',
                        'url' => '/router.php/method_level',
                    ],
                    [
                        'teacherName' => 'jared falk',
                        'lessonTitle' => 'rhythmic groupings & improvisation',
                        'lessonLevel' => 'level 5',
                        'lessonLength' => '8 mins',
                        'lessonXp' => 150,
                        'lessonDescription' => 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.',
                        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/241287-card-thumbnail-1577144994.jpg',
                        'url' => '/router.php/method_level',
                    ],
                    [
                        'teacherName' => 'jared falk',
                        'lessonTitle' => 'odd time & finger control',
                        'lessonLevel' => 'level 6',
                        'lessonLength' => '8 mins',
                        'lessonXp' => 150,
                        'lessonDescription' => 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.',
                        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/241288-card-thumbnail-1577144999.jpg',
                        'url' => '/router.php/method_level',
                    ],
                    [
                        'teacherName' => 'jared falk',
                        'lessonTitle' => 'foot technique & combinations',
                        'lessonLevel' => 'level 7',
                        'lessonLength' => '8 mins',
                        'lessonXp' => 150,
                        'lessonDescription' => 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.',
                        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/241289-card-thumbnail-1577145007.jpg',
                        'url' => '/router.php/method_level',
                    ],
                    [
                        'teacherName' => 'jared falk',
                        'lessonTitle' => 'brushes, textures & articulation',
                        'lessonLevel' => 'level 8',
                        'lessonLength' => '8 mins',
                        'lessonXp' => 150,
                        'lessonDescription' => 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.',
                        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/241290-card-thumbnail-1577145012.jpg',
                        'url' => '/router.php/method_level',
                    ],
                    [
                        'teacherName' => 'jared falk',
                        'lessonTitle' => 'advanced styles & musical decisions',
                        'lessonLevel' => 'level 9',
                        'lessonLength' => '8 mins',
                        'lessonXp' => 150,
                        'lessonDescription' => 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.',
                        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/241291-card-thumbnail-1577145017.jpg',
                        'url' => '/router.php/method_level',
                    ],
                    [
                        'teacherName' => 'jared falk',
                        'lessonTitle' => 'go anywhere on the drums',
                        'lessonLevel' => 'level 10',
                        'lessonLength' => '8 mins',
                        'lessonXp' => 150,
                        'lessonDescription' => 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.',
                        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/241292-card-thumbnail-1577145021.jpg',
                        'url' => '/router.php/method_level',
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
    public function nextLesson(View $view)
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

}