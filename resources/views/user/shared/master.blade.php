<html>
<head>
    <title> @yield('title') </title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<link href="{{ asset('public/css/user/shared.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/user/vocabulary.css') }}" rel="stylesheet">

    <!-- Favicon -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('public/img/common/home.png') }}"/>

    <style type="text/css">
        body {
            background-image: url("public/img/common/cat-background-1.jpg") !important;
            background-color: #ffffff;
            min-width: 1000px;
            min-height: 600px;
        }

    </style>

	<!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
    <script src="{{ asset('public/js/user/vocabularyLessionList.js') }}"></script>
</head>
<body>

@include('user.shared.header')

@yield('content')

@include('user.shared.footer')

</body>
</html>