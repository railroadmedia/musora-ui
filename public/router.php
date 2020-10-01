<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../vendor/autoload.php');

//chmod('../cache', 777);

use Jenssegers\Blade\Blade;
use Railroad\MusoraUI\ViewComposers\DrumeoViewComposer;
use Throwable;

$blade = new Blade('../blade', '../cache');
$blade->addNamespace('musora-ui', '../blade');

$filePath = substr($_SERVER['REQUEST_URI'], 11);
$filePathDots = str_replace('/', '.', $filePath);

// setup view composers
$blade->composer('musora-ui::*', DrumeoViewComposer::class . '@all');
$blade->composer('musora-ui::*', DrumeoViewComposer::class . '@assetPaths');

$blade->composer('musora-ui::partials.edge-nav', DrumeoViewComposer::class . '@edgeNav');
$blade->composer('musora-ui::partials.hamburger-edge-nav', DrumeoViewComposer::class . '@hamburgerEdgeNav');
$blade->composer('musora-ui::partials.profile-nav', DrumeoViewComposer::class . '@profileNav');
$blade->composer('musora-ui::partials.profile-sidenav', DrumeoViewComposer::class . '@profileSideNav');
$blade->composer('musora-ui::partials.user-about', DrumeoViewComposer::class . '@userAbout');
$blade->composer('musora-ui::partials.user-stats', DrumeoViewComposer::class . '@userStats');
$blade->composer('musora-ui::partials.user-stats-details', DrumeoViewComposer::class . '@userStatsDetails');
$blade->composer('musora-ui::partials.user-stats-short', DrumeoViewComposer::class . '@userStatsShort');
$blade->composer('musora-ui::partials.footer', DrumeoViewComposer::class . '@footer');

// pages
$blade->composer('.pages.courses_course', DrumeoViewComposer::class . '@coursePageContent');
$blade->composer('.pages.method_level', DrumeoViewComposer::class . '@methodLevelPageContent');
$blade->composer('.pages.edge', DrumeoViewComposer::class . '@edgePageContent');
$blade->composer('.pages.method', DrumeoViewComposer::class . '@methodPageContent');
$blade->composer('.pages.account_lessons', DrumeoViewComposer::class . '@accountLessonsPageContent');
$blade->composer('.pages.account_profile_name', DrumeoViewComposer::class . '@accountProfileNamePageContent');
$blade->composer('.pages.account_start', DrumeoViewComposer::class . '@accountStartPageContent');
$blade->composer('.pages.live', DrumeoViewComposer::class . '@livePageContent');
$blade->composer('.pages.packs', DrumeoViewComposer::class . '@packsPageContent');
$blade->composer('.pages.profile_dashboard', DrumeoViewComposer::class . '@accountProfileDashboardPageContent');
$blade->composer('.pages.schedule', DrumeoViewComposer::class . '@schedulePageContent'); // todo - remove setup when vue schedule catalogue component is done
$blade->composer('.pages.settings_details', DrumeoViewComposer::class . '@accountSettingsDetailsPageContent');
$blade->composer('.pages.settings_login_credentials', DrumeoViewComposer::class . '@accountLoginCredentialsPageContent');
$blade->composer('.pages.settings_setup', DrumeoViewComposer::class . '@accountSetupPageContent');
$blade->composer('.pages.shows', DrumeoViewComposer::class . '@showsPageContent');
$blade->composer('.pages.content_video', DrumeoViewComposer::class . '@videoPageContent');
$blade->composer('.pages.courses', DrumeoViewComposer::class . '@coursesPageContent');
$blade->composer('.pages.play_alongs', DrumeoViewComposer::class . '@playAlongsPageContent');
$blade->composer('.pages.profile_my_list', DrumeoViewComposer::class . '@profileMyListPageContent');
$blade->composer('.pages.rudiments', DrumeoViewComposer::class . '@rudimentsPageContent');
$blade->composer('.pages.search_results', DrumeoViewComposer::class . '@searchResultsPageContent');
$blade->composer('.pages.settings_payments', DrumeoViewComposer::class . '@accountSettingsPaymentsPageContent');
$blade->composer('.pages.settings_profile', DrumeoViewComposer::class . '@accountProfilePageContent');
$blade->composer('.pages.shows_show', DrumeoViewComposer::class . '@showsShowPageContent');
$blade->composer('.pages.songs', DrumeoViewComposer::class . '@songsPageContent');
$blade->composer('.pages.student_focus', DrumeoViewComposer::class . '@studentFocusPageContent');
$blade->composer('.pages.songs_song', DrumeoViewComposer::class . '@songsSongPageContent');
$blade->composer('.pages.pack_bundles', DrumeoViewComposer::class . '@packBundlesPageContent');
$blade->composer('.pages.pack_bundle_lessons', DrumeoViewComposer::class . '@packBundleLessonsPageContent');
$blade->composer('.pages.schedule_vue', DrumeoViewComposer::class . '@scheduleVuePageContent'); // todo - replace page name with schedule when vue schedule catalogue component is done

// echo 'page: ' . var_export($filePathDots, true); die();

// render the blade if its found
if ($blade->exists($filePathDots)) {
    /* @var $view \Illuminate\View\View */
    $view = $blade->make(
        $filePathDots,
        [
            // urls for links
            // vue
            'contentVideoLink' => '/router.php/pages/content_video',
            'coursesLink' => '/router.php/pages/courses',
            'edgeLink' => '/router.php/pages/edge',
            'playAlongsLink' => '/router.php/pages/play_alongs',
            'profileMyListLink' => '/router.php/pages/profile_my_list',
            'publicLayoutLink' => '/router.php/pages/public_layout',
            'rudimentsLink' => '/router.php/pages/rudiments',
            'searchResultsLink' => '/router.php/pages/search_results',
            'settingsPaymentsLink' => '/router.php/pages/settings_payments',
            'settingsProfileLink' => '/router.php/pages/settings_profile',
            'showsShowLink' => '/router.php/pages/shows_show',
            'sliderLink' => '/router.php/pages/slider',
            'songsLink' => '/router.php/pages/songs',
            'songsSongLink' => '/router.php/pages/songs_song',
            'studentFocusLink' => '/router.php/pages/student_focus',

            // blade
            'accountLessonsLink' => '/router.php/pages/account_lessons',
            'accountProfile_nameLink' => '/router.php/pages/account_profile_name',
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
        ]
    );

    echo $view->render();
} else {
    echo "View not found using dot string: " . $filePathDots;
}