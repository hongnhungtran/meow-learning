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
		<!-- Horizontal Form -->
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Horizontal Form</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form class="form-horizontal"  method="post">
			 {{csrf_field()}}
			 @foreach ($errors->all() as $error)
    <p class="alert alert-danger">{{ $error }}</p>
@endforeach

				<div class="box-body">
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Topic Title</label>

						<div class="col-sm-10">
						<input type="text" class="form-control" id="" placeholder="Topic Title" name="vocabulary_topic_title">
						</div>
					</div>

					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Topic Content</label>

						<div class="col-sm-10">
							<input type="text" class="form-control" id="" placeholder="Topic Content" name="vocabulary_topic_content">
						</div>
					</div>

					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<select class="form-control">
								<option>option 1</option>
								<option>option 2</option>
								<option>option 3</option>
								<option>option 4</option>
								<option>option 5</option>
							</select>
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
</div>

@stop
