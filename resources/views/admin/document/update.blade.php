@extends('admin.shared.master') 
@section('title', 'Update Document') 
@section('content_header')
<h1>Document<small>Edit</small>
</h1>
<ol class="breadcrumb">
		<li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i>Home</a></li>
		<li><a href="{{ url('admin/document') }}">Document</a></li>
		<li class="active">Update</li>
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
			</div>
			<form class="form-horizontal" method="put" action="{{ action('Admin\DocumentController@documentUpdate', $document[0]->document_id) }}">
				{{csrf_field()}}
				<div class="box-body">
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Document Title</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="" placeholder="Document Title" name="document_title" value="{{ $document[0]->document_title }}">
							@if ($errors->has('document_title')) 
								@foreach($errors->get('document_title') as $error)
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
										<option value="{{ $category->document_category_id }}" {{ $category->document_category_id == $document[0]->document_category_id ? 'selected="selected"' : '' }}>{{ $category->document_category_title }}</option> 
									@endforeach 
								@endif
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Document Content</label>
						<div class="col-sm-9">
							<textarea class="form-control" id="document_content" name="document_content" rows="4" value="{{ $document[0]->document_content }}" placeholder="Document Content">{{ $document[0]->document_content }}
							</textarea>
							@if ($errors->has('document_content')) 
								@foreach($errors->get('document_content') as $error)
									<p class="text-red">{!! $error !!}</p>
								@endforeach 
							@endif
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Document Description</label>
						<div class="col-sm-9">
							<textarea class="form-control" id="document_content" name="document_description" rows="4" value="{{ $document[0]->document_description }}" placeholder="Document Description">{{ $document[0]->document_description }}
							</textarea>
							@if ($errors->has('document_description')) 
								@foreach($errors->get('document_description') as $error)
									<p class="text-red">{!! $error !!}</p>
								@endforeach 
							@endif
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Download link</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="" placeholder="Download link" name="document_download_link" value="{{ $document[0]->document_download_link }}">
							@if ($errors->has('document_download_link')) 
								@foreach($errors->get('document_download_link') as $error)
									<p class="text-red">{!! $error !!}</p>
								@endforeach 
							@endif
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Image</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="imgLink" placeholder="Image Link" name="lesson_image_link"  value="{{ $document[0]->document_image_link }}">

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
					<!-- test -->
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Description image</label>
						<div class="col-sm-9">
							<input type="text" class="form-control descriptionImgLink" placeholder="Description Image Link" name="image_link">
							<input type="text" class="form-control descriptionImgLink" placeholder="Description Image Link" name="image_link">
							<input type="text" class="form-control descriptionImgLink" placeholder="Description Image Link" name="image_link">
							<input type="text" class="form-control descriptionImgLink" placeholder="Description Image Link" name="image_link">
							@if ($errors->has('image_link'))
								@foreach($errors->get('image_link') as $error)
									 <p class="text-red">{!! $error !!}</p>
								@endforeach
							@endif
							<div id="descriptionImgPreview"></div>
							<button type="button" class="btn btn-primary btn" data-toggle="modal" data-target="#imageModal" style="margin-top: 10px;">
								Select Image
							</button>

							<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel">
							  <div class="modal-dialog" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									  <span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="imageModalLabel">Select Image</h4>
								  </div>
								  <div class="modal-body" id="modalImageBody">
										<p>Please confirm you would like to add <b><span id="fav-title">Lesson image</span></b>to your lesson.</p>
										<br/>
										<select class="description-image-picker" data-limit="4" multiple="multiple">
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
										  <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="getMultipleSrc()">Add image</button>
										</span>
								  </div>
								</div>
							  </div>
							</div>
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-info pull-right">Update</button>
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

	$(".description-image-picker").imagepicker({limit: 4});
	function getMultipleSrc() {
		var imgsrc = $("#imageModal .selected img").map(function() {
		  return $(this).attr("src");
		}).get();
		console.log(imgsrc);
		if($("#descriptionImgLink").val().length == 0) {
			$('#descriptionImgLink').val($('#descriptionImgLink').val() + imgsrc);
		} else {
			$('#descriptionImgLink').val("");
			$('#descriptionImgLink').val($('#descriptionImgLink').val() + imgsrc);
		}
		//image preview
    for (i = 0; i < imgsrc.lenth; i++) {
      $('<img />', {
				src: imgsrc[i],
				width: '150px',
				height: '100px'
			}).appendTo($('#descriptionImgPreview').empty());
    }
	}
</script>
@stop

