<html>
<head>
    <title> @yield('title') </title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<link href="{{ asset('/css/user/master.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/user/vocabularyLessionList.css') }}" rel="stylesheet">
	
	<!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
    <script src="{{ asset('/js/user/vocabularyLessionList.js') }}"></script>
</head>
<body>

@include('user.shared.header')

@yield('content')

@include('user.shared.footer')

</body>
</html>