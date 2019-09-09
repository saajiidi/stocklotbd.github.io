<!DOCTYPE html>
<html>
<head>
    <title></title>

@include('partials.styles')    

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="wrapper">

@include('partials.nav')  

@yield('content')

@include('partials.footer')                

</div>

<!-- end nav-->



@include('partials.scripts')

</body>
</html>