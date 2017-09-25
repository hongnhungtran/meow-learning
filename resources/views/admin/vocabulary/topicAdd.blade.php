@extends('admin.shared.master') 

@section('title', 'Add New Lesson') 

@section('content_header')
<h1>
    Vocabulary Course
    <small>Add New</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ url('admin/vocabulary') }}">Lesson</a></li>
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
                <h3 class="box-title">Add New Topic</h3>
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
            <form class="form-horizontal" method="post"  action="{{route('vocabulary.topic.store')}}">
                {{csrf_field()}} 
                <div class="box-body">
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Topic Title</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="" placeholder="Topic Title" name="vocabulary_topic_title">

                                @if ($errors->has('topic_title'))
                                    @foreach($errors->get('topic_title') as $error)
                                        <p class="text-red">{!! $error !!}</p>
                                    @endforeach
                                @endif


                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Topic Content</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="" placeholder="Topic Content" name="vocabulary_topic_content">

                                @if ($errors->has('topic_content'))
                                    @foreach($errors->get('topic_content') as $error)
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
