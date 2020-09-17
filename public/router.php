<?php

require_once('../vendor/autoload.php');

chmod('../cache', 777);

use Illuminate\Support\Facades\View;
use Jenssegers\Blade\Blade;
use Railroad\MusoraUI\ViewComposers\DrumeoViewComposer;

$blade = new Blade('../blade', '../cache');
$blade->addNamespace('musora-ui', '../blade');

$filePath = substr($_SERVER['REQUEST_URI'], 11);
$filePathDots = str_replace('/', '.', $filePath);

// setup view composers
$blade->composer('musora-ui::sections.edge_nav', DrumeoViewComposer::class . '@edgeNav');
$blade->composer('musora-ui::sections.hamburger_edge_nav', DrumeoViewComposer::class . '@hamburgerEdgeNav');

// render the blade if its found
if ($blade->exists($filePathDots)) {
    $view = $blade->make(
        $filePathDots,
        [
            // asset paths
            'manifestJsPath' => '../../js/generic/manifest.js',
            'vendorJsPath' => '../../js/generic/vendor.js',
            'musoraContentJsPath' => '../../js/generic/musora-content.js',
            'musoraLessonJsPath' => '../../js/generic/musora-lesson.js',
            'musoraProfileJsPath' => '../../js/generic/musora-profile.js',
            'drumeoCssPath' => '/build/drumeo/drumeo.css',

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