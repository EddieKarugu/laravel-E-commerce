<!Doctype html>
<html lang="en">
<meta charset="UTF-8">
<head>
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>
<div class="Loogo">
    <h5>PHANSTORE</h5>
</div>
<div class="login">
    <x-errors/>
    {{$slot}}
</div>
</html>
