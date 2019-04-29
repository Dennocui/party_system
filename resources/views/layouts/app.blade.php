<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Political Party System') }}</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">

</head>
<body>
        
   
        @include('inc.nav')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        
    </div>

    
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"> </script>
    <script>
      CKEDITOR.replace('article-ckeditor');
    </script>
    <script>
        function confirmDelete() {
var result = confirm('Are you sure you want to delete?');

if (result) {
        return true;
    } else {
        return false;
    }
}
        </script>
    
</body>
</html>
