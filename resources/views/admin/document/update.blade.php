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
			</div>
			<form class="form-horizontal" method="post" action="{{ action('Admin\DocumentController@update', $document[0]->document_id) }}">
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
							<textarea class="form-control" id="document_content" name="document_title" rows="4" cols="80" value="{{ $document[0]->document_title }}" placeholder="Document Content">
							</textarea>
							@if ($errors->has('document_title')) 
								@foreach($errors->get('document_title') as $error)
									<p class="text-red">{!! $error !!}</p>
								@endforeach 
							@endif
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Document Description</label>
						<div class="col-sm-9">
							<textarea class="form-control" id="document_content" name="document_description" rows="4" cols="80" value="{{ $document[0]->document_description }}" placeholder="Document Description">
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
						<label for="" class="col-sm-3 control-label">Document image</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="" placeholder="Image Link" name="document_image_link" value="{{ $document[0]->document_image_link }}" }}>
							@if ($errors->has('document_image_link')) 
								@foreach($errors->get('document_image_link') as $error)
									<p class="text-red">{!! $error !!}</p>
								@endforeach 
							@endif
							<h5>Or select image</h5>
							<input type="file" accept="image/*" onchange="loadFile(event)">
							<img id="output" width="60" height="60" />
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Description image</label>
						<div class="col-sm-9">
							@foreach ($images as $image)
								<input type="text" class="form-control" id="" placeholder="Image Link" name="image_link" value="{{ $document[0]->document_image_link }}" }}>
	            	<img src="{{ $image->image_link }}" alt="Description image" height="42" width="42">
	            	@if ($errors->has('image_link')) 
									@foreach($errors->get('image_link') as $error)
										<p class="text-red">{!! $error !!}</p>
									@endforeach 
								@endif
            	@endforeach
							<h5>Or select image</h5>
							<input type="file" accept="image/*" onchange="loadFile(event)">
							<img id="output" width="60" height="60" />
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-default">Cancel</button>
					<button type="submit" class="btn btn-info pull-right">Update</button>
				</div>
			</form>
		</div>
	</div>
</div>
@stop

