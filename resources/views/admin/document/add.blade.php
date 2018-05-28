@extends('admin.shared.master') 
@section('title', 'Add Document') 
@section('content_header')
<h1>Document<small>Edit</small>
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
				<h3 class="box-title">Edit Document</h3>
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
			<form class="form-horizontal" method="post" action="{{route('document.store')}}">
				{{csrf_field()}}
				<div class="box-body">
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Document Title</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" id="" placeholder="Document Title" name="document_title" value={{old('document_title') }}>

							@if ($errors->has('topic_title')) 
							@foreach($errors->get('topic_title') as $error)
							<p class="text-red">{!! $error !!}</p>
							@endforeach 
							@endif
						</div>
					</div>

					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Document Content</label>

						<div class="col-sm-9">
							<textarea id="document_content" name="document_content" rows="10" cols="80" value={{old('document_title') }}>

							</textarea>
							<script type="text/javascript" src="/meow-learning/vendor/ckeditor/ckeditor.js"></script>
							<script type="text/javascript" src="/meow-learning/vendor/ckfinder/ckfinder.js"></script>
							<script type="text/javascript">
									 var editor = CKEDITOR.replace('document_content', {
										language:'en',
										filebrowserBrowseUrl : '../../public/vendor/ckfinder/ckfinder.html',
										filebrowserImageBrowseUrl : '../../public/vendor/ckfinder/ckfinder.html?type=Images',
										filebrowserFlashBrowseUrl : '../../public/vendor/ckfinder/ckfinder.html?type=Flash',
										filebrowserUploadUrl : '../../public/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
										filebrowserImageUploadUrl : '../../public/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
										filebrowserFlashUploadUrl : '../../public/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
									});
									 CKFinder.setupCKEditor( editor, '../' );
								 </script>

							@if ($errors->has('topic_content')) 
							@foreach($errors->get('topic_content') as $error)
							<p class="text-red">{!! $error !!}</p>
							@endforeach 
							@endif
						</div>
					</div>

					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Category</label>
						<div class="col-sm-9">
							<select class="form-control" name="level">
								@if ($categories->count()) 
								@foreach($categories as $category)
								<option value="{{ $category->document_category_id }}">{{ $category->document_category_title }}</option>
								@endforeach 
								@endif
							</select>
						</div>
					</div>

					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Image Link</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="" placeholder="Image Link" name="image_link" value={{old('image_link') }}>

							@if ($errors->has('image_link')) 
							@foreach($errors->get('image_link') as $error)
							<p class="text-red">{!! $error !!}</p>
							@endforeach 
							@endif
							<h5>Or select image</h5>
							<input type="file" name="files[]" id="" multiple>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
				<div class="box-footer">
					<button type="submit" class="btn btn-default">Cancel</button>
					<button type="submit" class="btn btn-info pull-right">Add</button>
				</div>
				<!-- /.box-footer -->
			</form>
		</div>
	</div>
	<!-- /.box -->
</div>
<!-- ./row -->
@stop
