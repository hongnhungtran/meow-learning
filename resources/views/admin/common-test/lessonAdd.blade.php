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
<style type="text/css">
	#modalImg {
		width: 100%;
		height: 100%;
	}
	#modalImageBody {
		overflow-y: scroll;
		height: 335px;
	}
	#img {
		margin-bottom: 10px;
	}
	.image_picker_selector li {
		width: 30%;
	}
</style>
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
			<form class="form-horizontal" method="post" action="{{ route('commonTestStoreLesson') }}">
				{{csrf_field()}}
				<div class="box-body">
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Test Title</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="" placeholder="Test Title" name="lesson_title" value="{{old('lesson_title') }}">
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
							<input type="text" class="form-control" id="" placeholder="Test Content" name="lesson_content" value="{{old('lesson_content') }}">
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
						<label for="" class="col-sm-3 control-label">Status</label>
						<div class="col-sm-9">
							<div class="checkbox">
								<label>
								  <input type="radio" value="1" name="lesson_flag" > Active
								</label>
								<label>
								  <input type="radio" value="0" name="lesson_flag"> Disable
								</label>
								@if ($errors->has('lesson_flag'))
									@foreach($errors->get('lesson_flag') as $error)
										 <p class="text-red">{!! $error !!}</p>
									@endforeach
								@endif
						  </div>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Image</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="imgLink" placeholder="Image Link" name="lesson_image_link" >

							@if ($errors->has('lesson_image_link'))
								@foreach($errors->get('lesson_image_link') as $error)
									 <p class="text-red">{!! $error !!}</p>
								@endforeach
							@endif
							<!-- <h5>Or select image</h5>
							<input type="file" name="upload_image" id="gallery-photo-add"><br><br>
							<div class="gallery"> -->
							<div id="imgPreview"></div>
							<button type="button" class="btn btn-primary btn" data-toggle="modal" data-target="#favoritesModal" style="margin-top: 10px;">
								Select Image
							</button>

							<div class="modal fade" id="favoritesModal" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel">
							  <div class="modal-dialog" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									  <span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="favoritesModalLabel">Select Image</h4>
								  </div>
								  <div class="modal-body" id="modalImageBody">
										<p>Please confirm you would like to add <b><span id="fav-title">Lesson image</span></b>to your lesson.</p>
										<br/>
										<select class="image-picker">
										@foreach($files as $file)
										<div class="col-sm-3" id="img">
											<option data-img-src="{{ 'https://drive.google.com/uc?export=view&id='.$file['basename']}} "  data-img-alt="{{ $file['basename']}} "  value="{{ 'https://drive.google.com/uc?export=view&id='.$file['basename']}} " ></option>
										</div>
										@endforeach
										</select>
								  </div>
								  <div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<span class="pull-right">
										  <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="getSrc()">Add image</button>
										</span>
								  </div>
								</div>
							  </div>
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
@section('js')
<script type="text/javascript" src="{{ asset('public/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/image-picker.js') }}"></script>
<script>
	$(".image-picker").imagepicker();

	function getSrc() {
		//insert to input field
		var src = $('.selected img').attr('src');
		if($("#imgLink").val().length == 0) {
		    $('#imgLink').val($('#imgLink').val() + src);
		} else {
			$('#imgLink').val("");
			$('#imgLink').val($('#imgLink').val() + src);
		}
		//image preview
		$('<img />', {
	    src: src,
	    width: '150px',
	    height: '100px'
		}).appendTo($('#imgPreview').empty())
	}
</script>
@stop
