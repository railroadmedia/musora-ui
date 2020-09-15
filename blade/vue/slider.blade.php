@extends('musora-ui::vue.layout')

@section('musora-ui::title', 'Members - Edge')

@section('musora-ui::menu')
    @include('musora-ui::sections.menu', ['active' => 'edge'])
    @include('musora-ui::sections.edge-nav')
@endsection

@php
// <!--
$filterGroup = <<<'EOT'
{
  "id": "difficulty",
  "title": "difficulty",
  "filters": [
    {
      "id": "1",
      "groupId": "difficulty",
      "name": "1",
      "label": "Level 1",
      "tabIndex": 0,
      "active": false,
      "value": "1"
    },
    {
      "id": "2",
      "groupId": "difficulty",
      "name": "2",
      "label": "Level 2",
      "tabIndex": 0,
      "active": true,
      "value": "2"
    },
    {
      "id": "3",
      "groupId": "difficulty",
      "name": "3",
      "label": "Level 3",
      "tabIndex": 0,
      "active": false,
      "value": "3"
    },
    {
      "id": "4",
      "groupId": "difficulty",
      "name": "4",
      "label": "Level 4",
      "tabIndex": 0,
      "active": false,
      "value": "4"
    },
    {
      "id": "5",
      "groupId": "difficulty",
      "name": "5",
      "label": "Level 5",
      "tabIndex": 0,
      "active": false,
      "value": "5"
    },
    {
      "id": "6",
      "groupId": "difficulty",
      "name": "6",
      "label": "Level 6",
      "tabIndex": 0,
      "active": false,
      "value": "6"
    },
    {
      "id": "7",
      "groupId": "difficulty",
      "name": "7",
      "label": "Level 7",
      "tabIndex": 0,
      "active": false,
      "value": "7"
    },
    {
      "id": "8",
      "groupId": "difficulty",
      "name": "8",
      "label": "Level 8",
      "tabIndex": 0,
      "active": false,
      "value": "8"
    },
    {
      "id": "9",
      "groupId": "difficulty",
      "name": "9",
      "label": "Level 9",
      "tabIndex": 0,
      "active": false,
      "value": "9"
    }
  ],
  "collapsed": false
}
EOT;
// -->
@endphp

@section('musora-ui::app')
    @include('musora-ui::sections.user-stats')

    <div class="mx-auto w-full container px-3 h-full pt-4">
        <div class="w-full mb-6 flex flex-row space-x-3 mt-6 uppercase">
            <div class="flex-1">
            </div>
    		<skill-level-slider :filter-group="{{ $filterGroup }}"></skill-level-slider>
    	</div>
    </div>
@endsection