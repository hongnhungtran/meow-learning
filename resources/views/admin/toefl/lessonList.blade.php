@extends('admin.shared.master') 
@section('title', 'TOEFL Exam List') 
@section('content_header')
<h1>
    TOEFL Lesson
    <small>List</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">TOEFL Lesson</a></li>
    <li class="active">List</li>
</ol>
@stop 
@section('content')
<div class="row">
    @if ($toefl_lessons->isEmpty())
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <p> There is no TOEFL Exam.</p>
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
                    {!! $toefl_lessons->links() !!}
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
                        @foreach($toefl_lessons as $toefl_lesson)
                        <tr>
                            <td>{!! $toefl_lesson->lesson_id !!} </td>
                            <td>{!! $toefl_lesson->level_name !!} </td>
                            <td><img src="{!! $toefl_lesson->lesson_image_link !!}" height="42" width="42"></td>
                            <td>{!! $toefl_lesson->lesson_title !!}</td>
                            <td>{!! $toefl_lesson->lesson_content !!}</td>
                            <td><span class="label label-{{ ($toefl_lesson->lesson_flag) ? 'success' : 'danger' }}"> {{ ($toefl_lesson->lesson_flag) ? ' Active ' : 'Inactive' }}</span></td>
                            <td>
                                <a href="{!! action('Admin\ToeflLessonController@edit', $toefl_lesson->lesson_id) !!}" class="btn btn-success">Edit</a>
                                <a href="{!! action('Admin\ToeflExerciseController@show', $toefl_lesson->lesson_id) !!}" class="btn btn-primary">Detail</a> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <div class="dataTables_info col-sm-5" >Showing {{($toefl_lessons->currentpage()-1)*$toefl_lessons->perpage()+1}} to {{(($toefl_lessons->currentpage()-1)*$toefl_lessons->perpage())+$toefl_lessons->count()}} of {{$toefl_lessons->total()}} entries</div>
                <div class="box-tools col-sm-7">
                    {!! $toefl_lessons->links() !!}
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
