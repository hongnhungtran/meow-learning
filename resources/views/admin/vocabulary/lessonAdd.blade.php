@extends('admin.shared.master') @section('title', 'Add New Lesson') @section('content_header')
<h1>
    Vocabulary Course
    <small>Add New</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ url('admin/vocabulary') }}">Lesson</a></li>
    <li class="active">Add</li>
</ol>
@stop @section('content')
<div class="row">
    <div <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Add New Lesson</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
					<i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
					<i class="fa fa-times"></i></button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post">
                {{csrf_field()}} @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                <div class="box-body">
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Lesson Title</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="" placeholder="Topic Title" name="vocabulary_topic_title">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Lesson Content</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="" placeholder="Topic Content" name="vocabulary_topic_content">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Topic</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="level">
								@if ($topics->count())
									@foreach($topics as $topic)
									<option value="{{ $topic->topic_id }}">{{ $topic->topic_name }}</option> 
									@endforeach   
								@endif
							</select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" id="">
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

@stop
