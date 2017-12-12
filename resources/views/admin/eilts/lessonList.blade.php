@extends('admin.shared.master') 
@section('title', 'EILTS Exam List') 
@section('content_header')
<h1>
    EILTS Lesson
    <small>List</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">EILTS Lesson</a></li>
    <li class="active">List</li>
</ol>
@stop 
@section('content')
<div class="row">
    @if ($eilts_lessons->isEmpty())
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <p> There is no EILTS Exam.</p>
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
                        <label for="" class="col-sm-4 control-label">Lesson title</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="Lesson title">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="" class="col-sm-4 control-label">Lesson content</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="Lesson content">
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
                    {!! $eilts_lessons->links() !!}
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                @if ($message = Session::get('status'))
                <div class="alert alert-success" id="alert">
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
                        @foreach($eilts_lessons as $eilts_lesson)
                        <tr>
                            <td>{!! $eilts_lesson->lesson_id !!} </td>
                            <td>{!! $eilts_lesson->level_name !!} </td>
                            <td><img src="{!! $eilts_lesson->lesson_image_link !!}" height="42" width="42"></td>
                            <td>{!! $eilts_lesson->lesson_title !!}</td>
                            <td>{!! $eilts_lesson->lesson_content !!}</td>
                            <td><span class="label label-{{ ($eilts_lesson->lesson_flag) ? 'success' : 'danger' }}"> {{ ($eilts_lesson->lesson_flag) ? ' Active ' : 'Inactive' }}</span></td>
                            <td>
                                <a href="{!! action('Admin\EiltsLessonController@edit', $eilts_lesson->lesson_id) !!}" class="btn btn-success">Edit</a>
                                <a href="{!! action('Admin\EiltsExerciseController@show', $eilts_lesson->lesson_id) !!}" class="btn btn-primary">Detail</a> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <div class="dataTables_info col-sm-5" >Showing {{($eilts_lessons->currentpage()-1)*$eilts_lessons->perpage()+1}} to {{(($eilts_lessons->currentpage()-1)*$eilts_lessons->perpage())+$eilts_lessons->count()}} of {{$eilts_lessons->total()}} entries</div>
                <div class="box-tools col-sm-7">
                    {!! $eilts_lessons->links() !!}
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
