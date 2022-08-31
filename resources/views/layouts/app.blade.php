<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href={{asset('css/app.css')}}>
    {{-- @if (isset($styles))
        {{$styles}}        
    @endif --}}
</head>
<body>
    <x-navbar></x-navbar>
    <div class="pt-4">
        {{$slot}}
    </div>
    <script src="{{asset('js/app.js')}}"> </script>
</body>
</html>