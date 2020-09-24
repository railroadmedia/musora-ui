<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>@yield('musora-ui::title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://dpwjbsxqtam5n.cloudfront.net/fonts/font-awesome-5/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ $drumeoCssPath }}">
    <link
        rel="stylesheet"
        href="https://d1prhhmg8i11jr.cloudfront.net/v1.0.0/dist/icons.css"
    >
    <!-- todo - include simplebar css/js in build resources -->
    <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    @stack('musora-ui::styles')
</head>
<body class="box-border">

@yield('musora-ui::menu')

@yield('musora-ui::content')

<script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>
@stack('musora-ui::scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="{{ $scriptsJsPath }}"></script>
</body>
</html>
