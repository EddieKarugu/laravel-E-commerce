<!Doctype html>
<html lang="en">
<meta charset="UTF-8">
<head>
    <title>PhanStore| {{ $title }}</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>

<?php
$navs = ['Home', 'Cart', 'Wallet', 'Settings'];
?>
<div class="header">
    <div class="logo">
        <a></a>
        <h5>PHANSTORE</h5>
        <a href="{{ route('logout') }}" class="btn">Logout</a>
    </div>
    <div class="headerBtn">
        @foreach($navs as $nav)
            @if($tab == $nav)
                <a href="{{ route(strtolower($nav)) }}" class="active">{{ $nav }}</a>
            @else
                <a href="{{ route(strtolower($nav)) }}">{{$nav}}</a>
            @endif
        @endforeach
    </div>
</div>
{{ $slot }}
</body>
</html>
