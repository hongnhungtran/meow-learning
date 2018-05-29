@extends('admin.shared.master') 
@section('title', 'Writing Management') 
@section('content_header')
<h1>Writing<small>Management</small></h1>
<ol class="breadcrumb">
	<li><a href="{{route('admin.home')}}"><i class="fas fa-home"></i>Home</a></li>
	<li>Course</li>
	<li class="active">Writing</li>
</ol>
@stop 
@section('content')
<div class="row">
	 <div class="col-xs-12">
		<div class="box">
			<div class="box-body">
				<div class="row">
					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-aqua">
							<div class="inner">
								<h3>{{ $topic_count }}</h3>
								<p>Writing Topic</p>
							</div>
							<div class="icon">
								<i class="fa fa-book"></i>
							</div>
							<a href="{!! action('Admin\WritingController@topicList') !!}" class="small-box-footer">
							  More info <i class="fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-green">
							<div class="inner">
								<h3>{{ $lesson_count }}<sup style="font-size: 20px"></h3>
								<p>Writing Lesson</p>
							</div>
							<div class="icon">
								<i class="fa fa-book"></i>
							</div>
							<a href="{!! action('Admin\WritingController@lessonList') !!}" class="small-box-footer">
							  More info <i class="fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<a href="{!! action('Admin\WritingController@createLesson') !!}">
							<div class="info-box">
								<span class="info-box-icon bg-yellow"><i class="fa fa-plus-square"></i></span>

								<div class="info-box-content">
									<span class="info-box-text">Add new</span>
									<span class="info-box-number">Writing Leson</span>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
</div>
@stop