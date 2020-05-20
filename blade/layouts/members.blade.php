<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="../build/drumeo/drumeo.css">
    <link
        rel="stylesheet"
        href="https://d1prhhmg8i11jr.cloudfront.net/v1.0.0/dist/icons.css"
    >
    <!-- todo - include simplebar css/js in build resources -->
    <link
        rel="stylesheet"
        href="https://unpkg.com/simplebar@latest/dist/simplebar.css"
    >
    @stack('styles')
</head>
<body class="box-border">

@yield('menu')

@yield('content')

<script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>
@stack('scripts')
</body>
</html>
