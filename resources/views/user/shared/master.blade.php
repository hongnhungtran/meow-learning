<html>
<head>
    <title> @yield('title') </title>
    <!-- CSS -->
    @yield('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="{{ asset('public/css/user/shared.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/user/vocabulary.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/user/pgwslider.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/user/flipclock.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- Favicon -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('public/img/common/home.png') }}"/>

    <style type="text/css">
        body {
            background-image: url("{{ asset('public/img/common/cat-background-1.jpg') }}") !important;
            background-color: #ffffff;
            min-width: 1200px;
            min-height: 600px;
        }

        .container {
            padding-right: 0px;!important;
            padding-left: 0px;!important;
        }

    </style>

	<!-- Javascript -->
    <script src="{{ asset('public/js/jquery.min.js') }}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
    <script src="{{ asset('public/js/user/front.js') }}"></script>
    <script src="{{ asset('public/js/user/pgwslider.min.js') }}"></script>
    <script src="{{ asset('public/js/user/flipclock.min.js') }}"></script>
</head>
<body>
@include('user.shared.header')

<div class="container">
@include('user.shared.menu')
@yield('content')
</div>
@include('user.shared.footer')
@yield('scripts');
</body>
</html>