@extends('admin.shared.master') 

@section('title', 'Question List') 

@section('content_header')
<h1>
    Question
    <small>List</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ url('/admin/common-test') }}">Lesson</a></li>
    <li class="active">List</li>
    <li class="active">Question List</li>
</ol>
@stop 

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Common Test {{ $lesson_title }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <h2 class="text-center">{{ $lesson_title }}</h2>
                @if ($questions->isEmpty())
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <p> There is no question.</p>
                            </div>
                        </div>
                    </div>  
                @else
                    @foreach ($questions as $question)
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="col-md-12">
                                    <h5><b>{{ $num++ }}. {{ $question->common_test_question }}</b></h5>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <h5>A. {{ $question->option_1 }}</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>B. {{ $question->option_2 }}</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>C. {{ $question->option_3 }}</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>D. {{ $question->option_4 }}</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="box-footer">
                                <a href="{{ action('Admin\CommonTestQuestionController@edit', $question->common_test_question_id) }}"><button type="submit" class="btn btn-danger pull-right">Delete</button></a>
                                <a href="{{ action('Admin\CommonTestQuestionController@edit', $question->common_test_question_id) }}"><button type="submit" class="btn btn-info pull-right" style="margin-right: 15px;">Edit</button></a>
                                <a href="{{ action('Admin\CommonTestQuestionController@create', $lesson_id) }}"><button type="submit" class="btn btn-success pull-right" style="margin-right: 15px;">Create New Question</button></a>
                            </div>
                        </div>
                    </div>
                     @endforeach
                @endif
            </div>
            <!-- /.box-footer -->
        </div>
        <!-- /.box -->
    </div>
<!-- /.col -->
</div>
<!-- /.row -->
@stop
