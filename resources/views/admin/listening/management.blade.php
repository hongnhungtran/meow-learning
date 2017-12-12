@extends('admin.shared.master') @section('title', 'Lesson List') @section('content_header')
<h1>
    Listening 
    <small>Management</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
    <li><a href="#">Lesson</a></li>
    <li class="active">List</li>
</ol>
@stop @section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>{{ $lesson_count }}<sup style="font-size: 20px"></h3>
                <p>Listening Lesson</p>
            </div>
            <div class="icon">
                <i class="fa fa-book"></i>
            </div>
            <a href="{!! action('Admin\ListeningLessonController@index') !!}" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    
</div>
<!-- /.row -->

<div class="row">
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="{!! action('Admin\ListeningLessonController@create') !!}">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-plus-square"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Add new</span>
                    <span class="info-box-number">Listening Lesson</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </a>
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="{!! action('Admin\ListeningExerciseController@create') !!}">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-plus-square"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Add new</span>
                    <span class="info-box-number">Listening Exercise</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </a>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

</div>
<!-- /.row -->
@stop