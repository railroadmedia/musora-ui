<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="/build/drumeo/drumeo.css">
    <link rel="stylesheet" href="https://dpwjbsxqtam5n.cloudfront.net/fonts/font-awesome-5/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://d1prhhmg8i11jr.cloudfront.net/v1.0.0/dist/icons.css">
    @stack('styles')
</head>
<body class="bg-edge-blue box-border">

<div class="flex flex-col h-screen">
    <div class="m-auto max-w-md md:w-md">
        <div class="pt-8">
            <img src="https://dpwjbsxqtam5n.cloudfront.net/logos/logo-white.png" class="mx-auto w-2/3">
        </div>
        <div class="bg-white rounded-lg flex flex-wrap mt-8">
            @yield('content')
        </div>
        @yield('pitch')
    </div>
    @yield('footer')
</div>
@stack('scripts')
<script src="/js/scripts.js"></script>
</body>
</html>
