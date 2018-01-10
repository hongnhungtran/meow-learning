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
				<h3 class="box-title">Common Test {{ $lesson_title }}</h3>
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
				<h2 class="text-center">{{ $lesson_title }}</h2>
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
						<div class="col-md-12">
							<h5><b>{{ $num++ }}. {{ $question->common_test_question }}</b></h5>
						</div>
						<div class="col-md-12">
							@if($question->option_1_flag == 1)
                                <div class="col-md-6">
                                    <h5 class="text-danger">A. <strong><u>{{ $question->option_1 }}</u></strong></h5>
                                </div>
                            @else
                                <div class="col-md-6">
                                    <h5>A. {{ $question->option_1 }}</h5>
                                </div>
                            @endif
                            @if($question->option_2_flag == 1)
                                <div class="col-md-6">
                                    <h5 class="text-danger">B. <strong><u>{{ $question->option_2 }}</u></strong></h5>
                                </div>
                            @else
                                <div class="col-md-6">
                                    <h5>B. {{ $question->option_2 }}</h5>
                                </div>
                            @endif
                            @if($question->option_3_flag == 1)
                            <div class="col-md-6">
                                <h5 class="text-danger">C. <strong><u>{{ $question->option_3 }}</u></strong></h5>
                            </div>
                            @else
                                <div class="col-md-6">
                                    <h5>C. {{ $question->option_3 }}</h5>
                                </div>
                            @endif
                            @if($question->option_4_flag == 1)
                                <div class="col-md-6">
                                    <h5 class="text-danger">D. <strong><u>{{ $question->option_4 }}</u></strong></h5>
                                </div>
                            @else
                                <div class="col-md-6">
                                    <h5>D. {{ $question->option_4 }}</h5>
                                </div>
                            @endif
						</div>
					</div>
					@endforeach
				@endif
			</div>
			<div class="box-footer">
				<button type="submit" class="btn btn-default">Close</button>
				<a href="{{ action('Admin\CommonTestQuestionController@index', $lesson_id) }}"><button type="submit" class="btn btn-info pull-right">Edit</button></a>
				<a href="{{ action('Admin\CommonTestQuestionController@generateDocx', $lesson_id) }}"><button type="submit" class="btn btn-success pull-right" style="margin-right: 15px;">CSV Download</button></a>
			</div>
			<!-- /.box-footer -->
		</div>
		<!-- /.box-body -->
	</div>
<!-- /.box -->
</div>
<!-- ./row -->
@stop
