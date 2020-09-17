<?php

require_once('../vendor/autoload.php');

chmod('../cache', 777);

use Jenssegers\Blade\Blade;
use Railroad\MusoraUI\ViewComposers\DrumeoViewComposer;

$blade = new Blade('../blade', '../cache');
$blade->addNamespace('musora-ui', '../blade');

$filePath = substr($_SERVER['REQUEST_URI'], 11);
$filePathDots = str_replace('/', '.', $filePath);

// setup view composers
$blade->composer('musora-ui::*', DrumeoViewComposer::class . '@assetPaths');

$blade->composer('musora-ui::sections.edge-nav', DrumeoViewComposer::class . '@edgeNav');
$blade->composer('musora-ui::sections.hamburger-edge-nav', DrumeoViewComposer::class . '@hamburgerEdgeNav');
$blade->composer('musora-ui::sections.method-content', DrumeoViewComposer::class . '@methodContent');
$blade->composer('musora-ui::sections.next-lesson', DrumeoViewComposer::class . '@nextLesson');
$blade->composer('musora-ui::sections.profile-nav', DrumeoViewComposer::class . '@profileNav');
$blade->composer('musora-ui::sections.profile-sidenav', DrumeoViewComposer::class . '@profileSideNav');
$blade->composer('musora-ui::sections.user-about', DrumeoViewComposer::class . '@userAbout');
$blade->composer('musora-ui::sections.user-stats', DrumeoViewComposer::class . '@userStats');
$blade->composer('musora-ui::sections.user-stats-details', DrumeoViewComposer::class . '@userStatsDetails');
$blade->composer('musora-ui::sections.user-stats-short', DrumeoViewComposer::class . '@userStatsShort');

// render the blade if its found
if ($blade->exists($filePathDots)) {
    $view = $blade->make(
        $filePathDots,
        [
            // urls for links
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
        ]
    );

    echo $view->render();
} else {
    echo "View not found using dot string: " . $filePathDots;
}