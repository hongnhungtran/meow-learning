@extends('admin.shared.master') 

@section('title', 'Add Common Test') 

@section('content_header')
<h1>
	Common Test
	<small>Add New</small>
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
				<h3 class="box-title">Add New Common Test</h3>
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
			<!-- form start -->
			<form class="form-horizontal" method="post" action="{{ route('common-test.store') }}">
				{{csrf_field()}}

				<div class="box-body">
					<blockquote>
						<p class="text-green">Fill the test information</p>
					</blockquote>
				</div>

				<div class="box-body">
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Test Title</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="" placeholder="Test Title" name="test_title" value={{old('test_title') }}>

							@if ($errors->has('test_title')) 
							@foreach($errors->get('test_title') as $error)
							<p class="text-red">{!! $error !!}</p>
							@endforeach 
							@endif
						</div>
					</div>

					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Test Content</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="" placeholder="Test Content" name="test_content" value={{old('test_content') }}>

							@if ($errors->has('test_content')) 
							@foreach($errors->get('test_content') as $error)
							<p class="text-red">{!! $error !!}</p>
							@endforeach 
							@endif
						</div>
					</div>

					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Level</label>
						<div class="col-sm-9">
							<select class="form-control" name="level">
								@if ($levels->count()) 
								@foreach($levels as $level)
								<option value="{{ $level->level_id }}">{{ $level->level_name }}</option>
								@endforeach 
								@endif
							</select>
						</div>
					</div>
				</div>

				<div class="box-body">
					<blockquote>
						<p class="text-green">Fill question and answer</p>
					</blockquote>
				</div>

				<!-- Test content -->
				<div class="box-body" id="test_content">
					<div id="question_area">
						<!-- Question Area -->
						<div class="form-group">
							<!-- Question label -->
							<div class="col-md-12">
								<button class="btn bg-olive pull-right margin" id="question_answer_add_button">Add</button>
								<button class="btn btn-danger pull-right margin">Delete</button>
							</div>
							
							<label class="col-md-12" for="" id="question_label"><h4>Questions<span>0</span></h4></label>
							<!-- Question input -->
							<div class="col-md-12">
								<input type="text" class="form-control" id="common_test_question[]" placeholder="Question 1" name="common_test_question[]" value={{old('common_test_question') }}>
								
								@if ($errors->has('common_test_question')) 
								@foreach($errors->get('common_test_question') as $error)
								<p class="text-red">{!! $error !!}</p>
								@endforeach 
								@endif
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
									<input type="text" class="form-control" id="answer_a[]" placeholder="Question 1 - A" name="answer_a[]">
									@if ($errors->has('answer_a')) 
									@foreach($errors->get('answer_a') as $error)
									<p class="text-red">{!! $error !!}</p>
									@endforeach 
									@endif
								</div>
							</div>
							<div class="col-md-6 form-group">
								<div class="col-sm-1">
									<input type="radio" name="option_a" id="" value="option_a" style="margin-top: 11px;">
								</div>
								<label for="" class="col-sm-1 control-label">B.</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="answer_b[]" placeholder="Question 1 - B" name="answer_b[]">
									@if ($errors->has('answer_b')) 
									@foreach($errors->get('answer_b') as $error)
									<p class="text-red">{!! $error !!}</p>
									@endforeach 
									@endif
								</div>
							</div>
							<div class="col-md-6 form-group">
								<div class="col-sm-1">
									<input type="radio" name="option_a" id="" value="option_a" style="margin-top: 11px;">
								</div>
								<label for="" class="col-sm-1 control-label">C.</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="answer_c[]" placeholder="Question 1 - C" name="answer_c[]">
									@if ($errors->has('answer_c')) 
									@foreach($errors->get('answer_c') as $error)
									<p class="text-red">{!! $error !!}</p>
									@endforeach 
									@endif
								</div>
							</div>
							<div class="col-md-6 form-group">
								<div class="col-sm-1">
									<input type="radio" name="option_a" id="" value="option_a" style="margin-top: 11px;">
								</div>
								<label for="" class="col-sm-1 control-label">D.</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="answer_d[]" placeholder="Question 1 - D" name="answer_d[]">
									@if ($errors->has('answer_d')) 
									@foreach($errors->get('answer_d') as $error)
									<p class="text-red">{!! $error !!}</p>
									@endforeach 
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- /.box-body -->
			<div class="box-footer">
				<button type="submit" class="btn btn-default">Cancel</button>
				<button type="submit" class="btn btn-info pull-right">Add Common Test</button>
			</div>
			<!-- /.box-footer -->
		</form>
	</div>
</div>
<!-- /.box -->
</div>
<!-- ./row -->
@stop
