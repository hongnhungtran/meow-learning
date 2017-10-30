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
				<h2 class="text-center">{{ $lesson->lesson_title }}</h2>
				@if ($questions->isEmpty())
				    <div class="col-xs-12">
				        <div class="box">
				            <div class="box-body">
				                <p> There is no question.</p>
				            </div>
				        </div>
				    </div>  
				@else
					@foreach ($questions as $question)
					<div class="col-xs-12">
				        <div class="box">
				            <div class="box-body">

								<div class="col-md-12">
									<h5><b>{{ $num++ }}. {{ $question->common_test_question }}</b></h5>
								</div>
								<div class="col-md-12">
									<div class="col-md-6">
										<h5>A. {{ $question->option_1 }}</h5>
									</div>
									<div class="col-md-6">
										<h5>B. {{ $question->option_2 }}</h5>
									</div>
									<div class="col-md-6">
										<h5>C. {{ $question->option_3 }}</h5>
									</div>
									<div class="col-md-6">
										<h5>D. {{ $question->option_4 }}</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				@endif
			</div>
			<div class="box-footer">
				<button type="submit" class="btn btn-default">Close</button>
				<a href="{{ route('common-test.question.index') }}"><button type="submit" class="btn btn-info pull-right">Edit</button></a>
				<button type="submit" class="btn btn-success pull-right">CSV Download</button>
			</div>
			<!-- /.box-footer -->
		</div>
		<!-- /.box-body -->
	</div>
<!-- /.box -->
</div>
<!-- ./row -->
@stop
