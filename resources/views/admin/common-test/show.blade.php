@extends('admin.shared.master') 

@section('title', 'Common Test') 

@section('content_header')
<h1>
	Common Test
	<small>Show</small>
</h1>
<ol class="breadcrumb">
	<li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i>Home</a></li>
	<li><a href="{{ url('admin/vocabulary') }}">Lesson</a></li>
	<li class="active">Add</li>
</ol>
@stop 

@section('content')
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<!-- Horizontal Form -->
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Common Test {{ $lesson->lesson_title }}</h3>
				<!-- tools box -->
				<div class="pull-right box-tools">
					<button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fa fa-minus"></i>
					</button>
					<button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fa fa-times"></i>
					</button>
				</div>
				<!-- /. tools -->
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<h2>{{ $lesson->lesson_title }}</h2>
				<!-- Question Area -->
				@foreach ($questions as $question)
				<div class="col-md-12">
					<h5>{{ $num++ }}. {{ $question->common_test_question }}</h5>
				</div>
				@endforeach

				<!-- Answer Area -->
				@for ($i=0; $i<count($answers); $i++)
					@foreach ($answers[$i] as $answer )
					<div class="col-md-12">
						<div class="col-md-6">
							<h5>A. {{ $answer->common_test_answer }}</h5>
						</div>
					</div>					
					@endforeach
				@endfor

				
		</div>
		<!-- /.box-body -->
		<div class="box-footer">
			<button type="submit" class="btn btn-default">Close</button>
			<button type="submit" class="btn btn-info pull-right">Edit</button>
			<button type="submit" class="btn btn-success pull-right">CSV Download</button>
		</div>
		<!-- /.box-footer -->
	</form>
</div>
</div>
<!-- /.box -->
</div>
<!-- ./row -->
@stop
