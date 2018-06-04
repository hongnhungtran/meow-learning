@extends('admin.shared.master') 
@section('title', 'Add New Lesson') 
@section('content_header')
<h1>
	Vocabulary Exercise
	<small>Add New</small>
</h1>
<ol class="breadcrumb">
	<li><a href="{{ url('/admin') }}"><i class="fas fa-home"></i>Home</a></li>
	<li><a href="{{ url('admin/vocabulary') }}">Vocabulary</a></li>
	<li><a href="{{ url('admin/vocabulary/lesson') }}">Lesson</a></li>
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
	.vocabularyForm {
		background: #d9f4e5;
		margin: 10px;
		padding: 10px;
		border-radius: 10px;
	}
</style>
<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Exercise 1</h3>
				<small>Flashcard</small>
				<div class="pull-right box-tools">
					<button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fa fa-minus"></i>
					</button>
					<button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fa fa-times"></i>
					</button>
				</div>
			</div>
			<form class="form-horizontal" method="post" action="{!! action('Admin\VocabularyController@storeExercise', $lesson[0]->lesson_id) !!}">
				{{csrf_field()}}
				
				<div class="box-body">
				@for ($i = 0; $i < 13; $i++)
				<div class="vocabularyForm">
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Vocabulary</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="" placeholder="Vocabulary" name="vocabulary-{{$i}}">
							@if ($errors->has('vocabulary-{{$i}}')) 
								@foreach($errors->get('vocabulary-{{$i}}') as $error)
									<p class="text-red">{!! $error !!}</p>
								@endforeach 
							@endif
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Pronunciation</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="" placeholder="Pronunciation" name="pronunciation-{{$i}}">
							@if ($errors->has('pronunciation-{{$i}}')) 
								@foreach($errors->get('pronunciation-{{$i}}') as $error)
									<p class="text-red">{!! $error !!}</p>
								@endforeach 
							@endif
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Image</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="imgLink-{{$i}}" placeholder="Image Link" name="lesson_image_link-{{$i}}">
							@if ($errors->has('lesson_image_link-{{$i}}'))
								@foreach($errors->get('lesson_image_lin-{{$i}}k') as $error)
									 <p class="text-red">{!! $error !!}</p>
								@endforeach
							@endif
							<div id="imgPreview-{{$i}}"></div>
							<button type="button" class="btn btn-primary btn" data-toggle="modal" data-target="#favoritesModal-{{$i}}" style="margin-top: 10px;">
								Select Image
							</button>

							<div class="modal fade" id="favoritesModal-{{$i}}" tabindex="-1" role="dialog" aria-labelledby="favoritesModalLabel-{{$i}}">
							  <div class="modal-dialog" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									  <span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="favoritesModalLabel-{{$i}}">Select Image</h4>
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
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Audio</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="" placeholder="Audio Link" name="audio-{{$i}}">
							@if ($errors->has('audio-{{$i}}')) 
								@foreach($errors->get('audio-{{$i}}') as $error)
									<p class="text-red">{!! $error !!}</p>
								@endforeach 
							@endif
						</div>
					</div>
				</div>
				@endfor
				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-default">Cancel</button>
					<button type="submit" class="btn btn-info pull-right">Add</button>
				</div>
			</form>
		</div>
	</div>
	<!-- /.box -->

	<!-- Excercise 1 -->
	<!-- <div class="col-md-12">
		<div class="box box-info">
			<div class="box-header">
				<h3 class="box-title">
					Add Excercise
					<small>Add single word for seleted lession</small>
				</h3>
				tools box
				<div class="pull-right box-tools">
					<button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
						<i class="fa fa-minus"></i>
					</button>
					<button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
						<i class="fa fa-times"></i>
					</button>
				</div>
				/. tools
			</div>
			/.box-header
			<div class="box-body pad">
				<form>
					<textarea id="editor1" name="editor1" rows="10" cols="80">
	
					</textarea>
					<script type="text/javascript" src="../../vendor/ckeditor/ckeditor.js"></script>
					<script type="text/javascript" src="../../vendor/ckfinder/ckfinder.js"></script>
					<script type="text/javascript">
						var editor = CKEDITOR
								.replace(
										'editor1',
										{
											language : 'en',
											filebrowserBrowseUrl : '../../public/vendor/ckfinder/ckfinder.html',
											filebrowserImageBrowseUrl : '../../public/vendor/ckfinder/ckfinder.html?type=Images',
											filebrowserFlashBrowseUrl : '../../public/vendor/ckfinder/ckfinder.html?type=Flash',
											filebrowserUploadUrl : '../../public/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
											filebrowserImageUploadUrl : '../../public/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
											filebrowserFlashUploadUrl : '../../public/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
										});
						CKFinder.setupCKEditor(editor, '../');
					</script>
					<div class="box-footer">
						<button type="submit" class="btn btn-default">Cancel</button>
						<button type="submit" class="btn btn-info pull-right">Add</button>
					</div>
					/.box-footer
				</form>
			</div>
		</div>
		/.box
	</div> -->
</div>
@stop
@section('js')
<script type="text/javascript" src="{{ asset('public/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/image-picker.js') }}"></script>
<script>
	$(".image-picker").imagepicker();
	function getSrc() {
		var src = $('.selected img').attr('src');

		if($("#imgLink").val().length == 0) {
			$('#imgLink').val($('#imgLink').val() + src);
		} else {
			$('#imgLink').val("");
			$('#imgLink').val($('#imgLink').val() + src);
		}
		$('<img />', {
		src: src,
		width: '150px',
		height: '100px'
		}).appendTo($('#imgPreview').empty())
	}
</script>
@stop



