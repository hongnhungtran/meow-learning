@extends('admin.shared.master')

@section('title', 'Add New Lesson')

@section('content_header')
<h1>
	Add New
	<small>Lesson</small>
</h1>
<ol class="breadcrumb">
	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	<li><a href="#">Lesson</a></li>
	<li class="active">Add</li>
</ol>
@stop

@section('content')
<div class="row">
	<!-- left column -->
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Add Vocabulary Topic</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form role="form" method="post">
				@foreach ($errors->all() as $error)
					<p class="alert alert-danger">{{ $error }}</p>
				@endforeach
				@if (session('status'))
				    <div class="alert alert-success">
				        {{ session('status') }}
				    </div>
				@endif
				
				<div class="box-body">
					<div class="form-group">
						<!-- text input -->
						<label>Topic Title</label>
						<input type="text" class="form-control" placeholder="Enter ..." name="vocabulary_topic_title">
					</div>
					<!-- textarea -->
					<div class="form-group">
						<label>Topic Content</label>
						<textarea class="form-control" rows="3" placeholder="Enter ..." name="vocabulary_topic_content"></textarea>
					</div>

					
				</div>

			</form>

			
		</div>
		<!-- /.box -->
	</div>
</div>

@stop
