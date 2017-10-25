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
                            <th>Listening ID</th>
                            <th>Level</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($listening_lessons as $listening_lesson)
                        <tr>
                            <td>{!! $listening_lesson->lesson_id !!}</td>
                            <td>{!! $listening_lesson->level_name !!}</td>
                            <th><img src="{!! $listening_lesson->image_link !!}" height="42" width="42"></th>
                            <td><div>{!! $listening_lesson->lesson_title !!}</div></td>
                            <td>{!! $listening_lesson->lesson_content !!}</td>
                            <td>{!! $listening_lesson->lesson_status !!}</td>
                            <td>
                                <a href="{!! action('Admin\ListeningController@edit', $listening_lesson->lesson_id) !!}" class="btn btn-block btn-success">Edit</a>
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


