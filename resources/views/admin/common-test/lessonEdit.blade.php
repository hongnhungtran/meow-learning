@extends('admin.shared.master') 

@section('title', 'Lesson Edit') 

@section('content_header')
<h1>
    Common Test
    <small>Edit</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ url('admin/vocabulary') }}">Lesson</a></li>
    <li class="active">Edit</li>
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
                <h3 class="box-title">Edit Lesson</h3>
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
            <form class="form-horizontal" method="post" action="{{action('Admin\CommonTestLessonController@update', $common_test->lesson_id)}}">
                {{csrf_field()}} 
                <div class="box-body">
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Lesson Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="" placeholder="Lesson Title" name="lesson_title"  value="{!! $common_test->lesson_title !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Lesson Content</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="" placeholder="Lesson Content" name="lesson_content" value="{!! $common_test->lesson_content !!}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Level</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="level">
								@if ($levels->count())
    								@foreach($levels as $level)
    								    <option value="{{ $level->level_id }}" {{ $level->level_id == $common_test->level_id ? 'selected="selected"' : '' }} > {{ $level->level_name }} </option> 
    								@endforeach   
								@endif
							</select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Image</label>
                        <div class="col-sm-9">
                             <input type="text" class="form-control" id="" placeholder="Image Link" name="lesson_image_link" value="{!! $common_test->lesson_image_link !!}">

                                @if ($errors->has('lesson_image_link'))
                                    @foreach($errors->get('lesson_image_link') as $error)
                                         <p class="text-red">{!! $error !!}</p>
                                    @endforeach
                                @endif
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
