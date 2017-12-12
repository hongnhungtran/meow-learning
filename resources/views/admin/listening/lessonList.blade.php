@extends('admin.shared.master') 

@section('title', 'Listening List') 

@section('content_header')
<h1>
    Listening Lesson
    <small>List</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{route('login')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Lesson</a></li>
    <li class="active">List</li>
</ol>
@stop 

@section('content')
<div class="row">
    @if ($listening_lessons->isEmpty())
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <p> There is no listening lesson.</p>
            </div>
        </div>
    </div>  

    @else
    <!-- search form -->
    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <!-- form start -->
            <form class="form-horizontal">
                <div class="box-body">
                    <div class="form-group col-md-6">
                        <label for="" class="col-sm-4 control-label">Listening title</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="Listening title">
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="" class="col-sm-4 control-label">Listening content</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="Listening content">
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Search</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
        <!-- /.box -->
    </div>
    
    <!-- register form -->
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Table</h3>
                <div class="box-tools">
                    {!! $listening_lessons->links() !!}
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                @if (session('status'))
                    <div class="alert alert-success" id="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="col-xs-1">Lesson ID</th>
                            <th class="col-xs-1">Level</th>
                            <th class="col-xs-1">Image</th>
                            <th class="col-xs-2">Title</th>
                            <th class="col-xs-4">Content</th>
                            <th class="col-xs-1">Status</th>
                            <th class="col-xs-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($listening_lessons as $listening_lesson)
                        <tr>
                            <td>{!! $listening_lesson->lesson_id !!} </td>
                            <td>{!! $listening_lesson->level_name !!} </td>
                            <td><img src="{!! $listening_lesson->lesson_image_link !!}" height="42" width="42"></td>
                            <td>{!! $listening_lesson->lesson_title !!}</td>
                            <td>{!! $listening_lesson->lesson_content !!}</td>
                            <td><span class="label label-{{ ($listening_lesson->lesson_flag) ? 'success' : 'danger' }}"> {{ ($listening_lesson->lesson_flag) ? ' Active ' : 'Inactive' }}</span></td>
                            <td>
                                <a href="{!! action('Admin\ListeningLessonController@edit', $listening_lesson->lesson_id) !!}" class="btn btn-success">Edit</a>
                                <a href="{!! action('Admin\ListeningExerciseController@show', $listening_lesson->lesson_id) !!}" class="btn btn-primary">Detail</a> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <!-- footer -->
            </div>
          </div>
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
    @endif
</div>
<!-- /.row -->
@stop


