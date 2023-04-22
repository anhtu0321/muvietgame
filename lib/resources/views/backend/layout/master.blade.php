<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('lib/public/css/myadminstyle.css')}}">
    <title>Trang quản trị</title>
</head>
<body>
    <div id="wrap">
        <div class="banner">
            @include('backend.layout.banner')
        </div>
        <div class="main">
            <div class="menu">
                @include('backend.layout.menu')
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>
        <div class="footer">
            @include('backend.layout.footer')
        </div>
    </div>
</body>
</html>