@php
    $nextLesson = [
        'teacherName' => 'teacher name',
        'lessonTitle' => 'this is the lesson title',
        'lessonLength' => '8 mins',
        'lessonXp' => 150,
        'lessonDescription' => 'Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.',
        'thumbnail' => 'https://d1923uyy6spedc.cloudfront.net/247400-card-thumbnail-maxres-1584796503.jpg',
    ];
@endphp

<div class="px-2">
    @component('core.next-lesson-card', $nextLesson)
    @endcomponent
</div>
