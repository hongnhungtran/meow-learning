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
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Lesson Detail</h3>
        <div class="pull-right box-tools">
          <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <table class="table table-bordered">
          <tr>
            <td class="col-md-2"><strong>Topic</strong></td>
            <td>{{ $lesson[0]->topic_title }}</td>
          </tr>
          <tr>
            <td class="col-md-2"><strong>Level</strong></td>
            <td>{{ $lesson[0]->level_name }}</td>
          </tr>
          <tr>
            <td class="col-md-2"><strong>Lesson Title</strong></td>
            <td>{{ $lesson[0]->lesson_title }}</td>
          </tr>
          <tr>
            <td class="col-md-2"><strong>Lesson Content</strong></td>
            <td>{{ $lesson[0]->lesson_content }}</td>
          </tr>
          <tr>
            <td class="col-md-2"><strong>Status</strong></td>
            @if($lesson[0]->lesson_flag == 1)
            <td>Active</td>
            @elseif($lesson[0]->lesson_flag == 0)
            <td>Inactive</td>
            @endif
          </tr>
          <tr>
            <td class="col-md-2"><strong>Image</strong></td>
            <td><img src="{{ $lesson[0]->lesson_image_link }}" style="width: 150px; height: 100px"></td>
          </tr>
        </table>
      </div>
      <div class="box-footer">
        <a href="{!! action('Admin\CommonTestController@editLesson', $lesson[0]->lesson_id) !!}" class="btn btn-success">Edit</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
	<!-- left column -->
	<div class="col-md-12">

		<div class="box box-info">

			<div class="box-header with-border">
				<h3 class="box-title">Common Test {{ $lesson[0]->lesson_title }}</h3>
				<!-- tools box -->
				<div class="pull-right box-tools">
					<button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fa fa-minus"></i>
					</button>
					<button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fa fa-times"></i>
					</button>
				</div>
			</div>
			<div class="box-body">
				<a href="{{ action('Admin\CommonTestController@questionList', $lesson[0]->lesson_id) }}">
				<button type="submit" class="btn btn-success pull-left">Edit</button></a>
				<h2 class="text-center">{{ $lesson[0]->lesson_title }}</h2>
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
		</div>
	</div>
</div>
@stop
