@extends('admin.shared.master') 
@section('title', 'Lesson List') 
@section('content_header')
<h1>Common Test<small>Management</small></h1>
<ol class="breadcrumb">
    <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i>Home</a></li>
    <li>Exam</li>
    <li>Common Test</li>
    <li class="active">Management</li>
</ol>
@stop 
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Common Test Management Option</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>{{ $count }}<sup style="font-size: 20px"></sup></h3>
                                <p>Common Test</p>
                            </div>
                            <div class="icon"><i class="fa fa-book"></i></div>
                            <a href="{!! action('Admin\CommonTestController@lessonList') !!}" class="small-box-footer">More info<i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <a href="{!! action('Admin\CommonTestController@createLesson') !!}">
                            <div class="info-box">
                                <span class="info-box-icon bg-green"><i class="fa fa-plus-square"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Add new</span>
                                    <span class="info-box-number">Test</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop