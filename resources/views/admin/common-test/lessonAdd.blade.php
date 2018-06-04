@extends('admin.shared.master') 
@section('title', 'Add Common Test') 
@section('content_header')
<h1>
	Common Test
	<small>Add New</small>
</h1>
<ol class="breadcrumb">
	<li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i>Home</a></li>
	<li><a href="{{ url('admin/common-test') }}">Lesson</a></li>
	<li class="active">Add</li>
</ol>
@stop 
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Add New Common Test</h3>
				<div class="pull-right box-tools">
					<button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fa fa-minus"></i>
					</button>
					<button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fa fa-times"></i>
					</button>
				</div>
			</div>
			<form class="form-horizontal" method="post" action="{{ route('common-test.lesson.store') }}">
				{{csrf_field()}}
				<div class="box-body">
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Test Title</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="" placeholder="Test Title" name="lesson_title" value={{old('lesson_title') }}>
							@if ($errors->has('lesson_title')) 
							@foreach($errors->get('lesson_title') as $error)
							<p class="text-red">{!! $error !!}</p>
							@endforeach 
							@endif
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Test Content</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="" placeholder="Test Content" name="lesson_content" value={{old('lesson_content') }}>
							@if ($errors->has('lesson_content')) 
							@foreach($errors->get('lesson_content') as $error)
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
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Image Link</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="" placeholder="Image Link" name="lesson_image_link" value="{{ old('lesson_image_link') }}">
							@if ($errors->has('lesson_image_link')) 
								@foreach($errors->get('lesson_image_link') as $error)
									<p class="text-red">{!! $error !!}</p>
								@endforeach 
							@endif
							<h5>Or select image</h5>
							<input type="file" name="upload_image" id="gallery-photo-add"><br><br>
							<div class="gallery">
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-default">Cancel</button>
					<button type="submit" class="btn btn-info pull-right">Create</button>
				</div>
			</form>
		</div>
	</div>
</div>
@stop
