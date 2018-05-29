{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('css')
	<!-- <link rel="stylesheet" href="../../public/css/admin_custom.css"> -->
	<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('public/img/favicon/android-icon-192x192.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/img/favicon/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('public/img/favicon/favicon-96x96.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/img/favicon/favicon-16x16.png') }}">
	
	<link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('public/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<!-- Ionicons -->
	<link rel="stylesheet" href="{{ asset('public/css/ionicons.min.css') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	
	<script type="text/javascript" src="{{ asset('public/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/admin/addForm.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js') }}"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{ asset('vendor/jeroennoten/laravel-adminlte/resources/assets/dist/js/adminlte.js') }}"></script>

	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
@stop

@section('js')
	<script> console.log('Hi!'); </script>
	
	<script>
		$("#alert").slideDown(500, function(){
			setTimeout(function(){
		$("#alert").slideUp(500);  
		},5000);
		});
	</script>
	
	<script>
	$("h4").each(function(i) {
	$(this).find("span").text(++i);
});
	var form = `
<div class="form-group">
						<!-- Question label -->
						<div class="col-md-12">
							<button class="btn bg-olive pull-right margin" id="question_answer_add_button">Add</button>
							<button class="btn btn-danger pull-right margin">Delete</button>
						</div>
						
						<label class="col-md-12" for=""><h4>Questions<span>0</span></h4></label>
						<!-- Question input -->
						<div class="col-md-12">
							<input type="text" class="form-control" id="" placeholder="Question 1" name="common_test_question" value={{old('common_test_question') }}>
						</div>
					</div>
					<!-- Answer Area -->
					<div class="form-group">
						<div class="col-md-6 form-group">
							<div class="col-sm-1">
								<input type="radio" name="option_a" id="" value="option_a" style="margin-top: 11px;">
							</div>
							<label for="" class="col-sm-1 control-label">A.</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="" placeholder="Question 1 - A" name="answer_a">
							</div>
						</div>
						<div class="col-md-6 form-group">
							<div class="col-sm-1">
								<input type="radio" name="option_a" id="" value="option_a" style="margin-top: 11px;">
							</div>
							<label for="" class="col-sm-1 control-label">B.</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="" placeholder="Question 1 - B" name="answer_b">
							</div>
						</div>
						<div class="col-md-6 form-group">
							<div class="col-sm-1">
								<input type="radio" name="option_a" id="" value="option_a" style="margin-top: 11px;">
							</div>
							<label for="" class="col-sm-1 control-label">C.</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="" placeholder="Question 1 - C" name="answer_c">
							</div>
						</div>
						<div class="col-md-6 form-group">
							<div class="col-sm-1">
								<input type="radio" name="option_a" id="" value="option_a" style="margin-top: 11px;">
							</div>
							<label for="" class="col-sm-1 control-label">D.</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="" placeholder="Question 1 - D" name="answer_d">
							</div>
						</div>
					</div>
					`;

$("#test_content").on( "click", "#question_answer_add_button", function() {
  $("#question_area").after( form );
  return false;
});


	</script>


<script>
	$(function() {
	// Multiple images preview in browser
	var imagesPreview = function(input, placeToInsertImagePreview) {

		if (input.files) {
			var filesAmount = input.files.length;

			for (i = 0; i < filesAmount; i++) {
				var reader = new FileReader();

				reader.onload = function(event) {
					$($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
				}

				reader.readAsDataURL(input.files[i]);
			}
		}
	};

	$('#gallery-photo-add').on('change', function() {
		imagesPreview(this, 'div.gallery');
	});
});

</script>
@stop