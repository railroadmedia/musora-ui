<?php

namespace Railroad\MusoraUI\ViewComposers;

use Illuminate\View\View;

class DrumeoViewComposer
{
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
}