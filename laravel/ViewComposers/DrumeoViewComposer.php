<?php

namespace Railroad\MusoraUI\ViewComposers;

use Illuminate\View\View;

class DrumeoViewComposer
{
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
                        'url' => '/router.php/method',
                    ],
                    [
                        'name' => 'courses',
                        'label' => 'courses',
                        'icon' => 'icon-courses',
                        'url' => '/router.php/courses',
                    ],
                    [
                        'name' => 'shows',
                        'label' => 'shows',
                        'icon' => 'icon-shows',
                        'url' => '/router.php/shows',
                    ],
                    [
                        'name' => 'songs',
                        'label' => 'songs',
                        'icon' => 'icon-headphones',
                        'url' => '/router.php/vue/songs',
                    ],
                    [
                        'name' => 'play-alongs',
                        'label' => 'play-alongs',
                        'icon' => 'icon-play-alongs',
                        'url' => '/router.php/vue/play_alongs',
                    ],
                    [
                        'name' => 'student focus',
                        'label' => 'student focus',
                        'icon' => 'icon-student-focus',
                        'url' => '/router.php/vue/student_focus',
                    ],
                    [
                        'name' => 'rudiments',
                        'label' => 'rudiments',
                        'icon' => 'icon-rudiments',
                        'url' => '/router.php/vue/rudiments',
                    ],
                    [
                        'name' => 'live',
                        'label' => 'live',
                        'icon' => 'icon-live',
                        'url' => '/router.php/live',
                    ],
                    [
                        'name' => 'schedule',
                        'label' => 'schedule',
                        'icon' => 'icon-schedule',
                        'url' => '/router.php/schedule',
                    ],
                ],
            ]
        );
    }
}