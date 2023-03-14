<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ariel Sefrian</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color: #e8e8e8;">
<div class="fullScreen grid" style="grid-template-columns: fit-content(100%) auto">
    <div class="fullHeight" style="background-color: black;">
        @yield('image')
    </div>

    <div class="m-11 mt-32">
        <div class="flex flex-col">
            <div class="font-bold font-poppins text-8xl">
                @yield('nama')
            </div>

            <br><br>

            <div class="font-poppins text-base text-justify mr-24">
                <p>
                    @yield('desc1')
                </p>
            </div>
        </div>

        <br><br>

        <div class="fixed" style="bottom: 16%; right: 8.75rem;">
            <div class="prev inline-block">
                @yield('prev')
            </div>

            <div class="next inline-block">
                @yield('next')
            </div>
        </div>

        <div class="fixed" style="bottom: 9%; right: 8.75rem;">
            <div class="home-button">
                @yield('home')
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
