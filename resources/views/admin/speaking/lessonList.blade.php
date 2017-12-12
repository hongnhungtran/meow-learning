@extends('admin.shared.master') 
@section('title', 'Speaking List') 
@section('content_header')
<h1>
    Speaking Lesson
    <small>List</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{route('login')}}"><i class="fa fa-dashboard"></i>Home</a></li>
    <li><a href="#">Lesson</a></li>
    <li class="active">List</li>
</ol>
@stop 
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Table</h3>
                <div class="box-tools">
                    {!! $speaking_lessons->links() !!}
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                @if ($speaking_lessons->isEmpty())
                    <p> There is no Speaking lesson.</p>
                @else
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
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
                        @foreach($speaking_lessons as $speaking_lesson)
                        <tr>
                            <td>{!! $speaking_lesson->lesson_id !!} </td>
                            <td>{!! $speaking_lesson->level_name !!} </td>
                            <td><img src="{!! $speaking_lesson->lesson_image_link !!}" height="42" width="42"></td>
                            <td>{!! $speaking_lesson->lesson_title !!}</td>
                            <td>{!! $speaking_lesson->lesson_content !!}</td>
                            <td><span class="label label-{{ ($speaking_lesson->lesson_flag) ? 'success' : 'danger' }}"> {{ ($speaking_lesson->lesson_flag) ? ' Active ' : 'Inactive' }}</span></td>
                            <td>
                                <a href="{!! action('Admin\SpeakingLessonController@edit', $speaking_lesson->lesson_id) !!}" class="btn btn-success">Edit</a>
                                <a href="{!! action('Admin\SpeakingExerciseController@show', $speaking_lesson->lesson_id) !!}" class="btn btn-primary">Detail</a> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
                @endif
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <div class="dataTables_info col-sm-5" >Showing {{($speaking_lesson->currentpage()-1)*$speaking_lesson->perpage()+1}} to {{(($speaking_lesson->currentpage()-1)*$speaking_lesson->perpage())+$speaking_lesson->count()}} of {{$speaking_lesson->total()}} entries</div>
                <div class="box-tools col-sm-7">
                    {!! $readingspeaking_lesson_speaking_lessonlessons->links() !!}
                </div>
            </div>
            <!-- /.box-footer -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@stop
