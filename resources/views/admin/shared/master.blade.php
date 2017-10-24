{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('css')
    <!-- <link rel="stylesheet" href="../../public/css/admin_custom.css"> -->
	<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('public/img/favicon/android-icon-192x192.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/img/favicon/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('public/img/favicon/favicon-96x96.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/img/favicon/favicon-16x16.png') }}">
	
	<script type="text/javascript" src="{{ asset('public/js/admin/addForm.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/jquery-3.2.1.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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

@stop