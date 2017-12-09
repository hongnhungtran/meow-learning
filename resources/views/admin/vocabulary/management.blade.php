@extends('admin.shared.master') 

@section('title', 'Vocabulary Management') 

@section('content_header')
<h1>
    Vocabulary
    <small>Management</small>
</h1>
<ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/admin/vocabulary">Vocabulary</a></li>
    <li class="active">Management</li>
</ol>
@stop 

@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{ $topic_count }}</h3>
                <p>Vocabulary Topic</p>
            </div>
            <div class="icon">
                <i class="fa fa-book"></i>
            </div>
            <a href="{!! action('Admin\VocabularyTopicController@index') !!}" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>{{ $lesson_count }}<sup style="font-size: 20px"></h3>
                <p>Vocabulary Lesson</p>
            </div>
            <div class="icon">
                <i class="fa fa-book"></i>
            </div>
            <a href="{!! action('Admin\VocabularyLessonController@index') !!}" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    
</div>
<!-- /.row -->

<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="{!! action('Admin\VocabularyTopicController@create') !!}">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-plus-square"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Add new</span>
                    <span class="info-box-number">Vocabulary </br>Topic</span>
                </div>
                <!-- /.info-box-content -->
            </div>
        </a>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="{!! action('Admin\VocabularyLessonController@create') !!}">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-plus-square"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Add new</span>
                    <span class="info-box-number">Vocabulary Leson</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </a>
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <a href="{!! action('Admin\VocabularyExerciseController@create') !!}">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-plus-square"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Add new</span>
                    <span class="info-box-number">Vocabulary Exercise</span>
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