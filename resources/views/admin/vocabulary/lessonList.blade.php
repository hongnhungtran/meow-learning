@extends('admin.shared.master') 

@section('title', 'Lesson List') 

@section('content_header')
<h1>
    Vocabulary Lesson
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
    @if ($vocabulary_lessons->isEmpty())
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <p> There is no vocabulary lesson.</p>
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
                            <input type="text" class="form-control" id="" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="" class="col-sm-4 control-label">Lesson content</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="Password">
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
                    {!! $vocabulary_lessons->links() !!}
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
                            <th>Lesson ID</th>
                            <th>Level</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($vocabulary_lessons as $vocabulary_lesson)
                        <tr>
                            <td>{!! $vocabulary_lesson->lesson_id !!} </td>
                            <td>{!! $vocabulary_lesson->level_name !!} </td>
                            <th><img src="{!! $vocabulary_lesson->image_link !!}" height="42" width="42"></th>
                            <td>{!! $vocabulary_lesson->lesson_title !!}</td>
                            <td>{!! $vocabulary_lesson->lesson_content !!}</td>
                            <td>{!! $vocabulary_lesson->level_status !!}</td>
                            <td>
                                <a href="{!! action('Admin\VocabularyController@vocabulary_lesson_edit', $vocabulary_lesson->topic_id) !!}" class="btn btn-success">Edit</a>
                                <a href="" class="btn btn-primary">Detail</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
                
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
<!-- /.col -->
    @endif
</div>
<!-- /.row -->
@stop
