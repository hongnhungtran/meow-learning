@extends('admin.shared.master') 

@section('title', 'Vocabulary List') 

@section('content_header')
<h1>
    Vocabulary
    <small>List</small>
</h1>
<ol class="breadcrumb">
    <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Topic</a></li>
    <li><a href="#">Lesson</a></li>
    <li><a href="#">Vocabulary</a></li>
    <li class="active">List</li>
</ol>
@stop 

@section('content')
<div class="row">
    @if ($vocabularies->isEmpty())
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <p> There is no vocabulary.</p>
                <a href="{{route('exercise.create',$vocabulary_lesson->lesson_id) }}" class="btn btn-success margin">Add Vocabulary</a>
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
                        <label for="" class="col-sm-4 control-label">Vocabulary ID</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="" class="col-sm-4 control-label">Vocabulary</label>
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
                            <th>Vocabulary ID</th>
                            <th>Lesson ID</th>
                            <th>Vocabulary</th>
                            <th>Image</th>
                            <th>Audio</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($vocabularies as $vocabulary)
                        <tr>
                            <td>{!! $vocabulary->vocabulary_id !!} </td>
                            <td>{!! $vocabulary->lesson_id !!} </td>
                            <td>{!! $vocabulary->vocabulary !!}</td>
                            <td><img src="{!! $vocabulary->vocabulary_image_link !!}" height="42" width="42"></td>
                            <td>
                                <audio controls>
                                    <source src="{!! $vocabulary->vocabulary_audio_link !!}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </td>
                            <td>{!! $vocabulary->status !!}</td>
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
