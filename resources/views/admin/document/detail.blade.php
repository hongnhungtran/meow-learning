@extends('admin.shared.master') 
@section('title', 'Document Detail') 
@section('content_header')
<h1>Document<small>Detail</small>
</h1>
<ol class="breadcrumb">
		<li><a href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
		<li><a href="{{ url('admin/document') }}">Document</a></li>
		<li class="active">Add</li>
</ol>
@stop 
@section('content')
<div class="row">
	<div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Document Detail</h3>
      </div>
      <div class="box-body">
        <table class="table table-bordered">
          <tr>
            <td class="col-md-2"><strong>Title</strong></td>
            <td>{{ $document[0]->document_title }}</td>
          </tr>
          <tr>
            <td class="col-md-2"><strong>Category</strong></td>
            <td>{{ $document[0]->document_category_title }}</td>
          </tr>
          <tr>
            <td class="col-md-2"><strong>Content</strong></td>
            <td>{{ $document[0]->document_content }}</td>
          </tr>
          <tr>
            <td class="col-md-2"><strong>Description</strong></td>
            <td>{{ $document[0]->document_description }}</td>
          </tr>
          <tr>
            <td class="col-md-2"><strong>Download link</strong></td>
            <td>
            	<a href="{{ $document[0]->document_download_link }}">{{ $document[0]->document_download_link }}</a>
            </td>
          </tr>
          <tr>
            <td class="col-md-2"><strong>Document image</strong></td>
            <td><img src="{{ $document[0]->document_image_link }}" alt="Document image" height="100" width="150"></td>
          </tr>
          <tr>
            <td class="col-md-2"><strong>Description image</strong></td>
            <td>
            	@foreach ($images as $image)
            	<img src="{{ $image->image_link }}" alt="Description image" height="100" width="150">
            	@endforeach
            </td>
          </tr>
        </table>
      </div>
      <div class="box-footer">
        <a href="{{ url('admin/document') }}" class="btn btn-info"><i class="fas fa-backward"></i> Back</a>
          <a href="{{ action('Admin\DocumentController@documentUpdate', $document[0]->document_id) }}" class="btn btn-primary pull-right">Edit</a>
        </div>
		</div>
	</div>
</div>
@stop
