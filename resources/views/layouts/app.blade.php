<html>
<head>
    <title>App Name - @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('js/bootstrap-3.3.7/dist/css/bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}"/>
</head>
<body>

<div class="container">
    @yield('content')
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="{{ asset('js/bootstrap-3.3.7/dist/js/bootstrap.js') }}"></script>
</body>
</html>
