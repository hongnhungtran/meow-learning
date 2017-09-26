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
                @if ($listening_lessons->isEmpty())
                    <p> There is no Listening lesson.</p>
                @else
                
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($listening_lessons as $listening_lesson)
                        <tr>
                            <td>{!! $listening_lesson->topic_id !!} </td>
                            <td>{!! $listening_lesson->topic_title !!}</td>
                            <td>{!! $listening_lesson->topic_content !!}</td>
                            <td>{!! $listening_lesson->topic_status !!}</td>
                            <td><a href="{!! action('Admin\ListeningController@edit', $listening_lesson->lesson_id) !!}" class="btn btn-success">Edit</a></td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
                @endif
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@stop
