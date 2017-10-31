@extends('admin.shared.master') 

@section('title', 'Add Question') 

@section('content_header')
<h1>
    Common Test Question
    <small>Add New</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i>Home</a></li>
    <li><a href="{{ url('/admin/common-test') }}">Common Test</a></li>
    <li><a href="{{ url('admin/common-test/lesson') }}">Lesson</a></li>
    <li class="active">Add</li>
</ol>
@stop 

@section('content')
<div class="row">
    <!-- Lesson detail -->
    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Question</h3>
                <small>1</small>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <!-- form start -->
                <form class="form-horizontal" method="post" action="{{ action('Admin\CommonTestQuestionController@update', $question->common_test_question_id) }}">
                {{csrf_field()}}
                 <div class="box-body">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="" placeholder="Question" name="common_test_question" value={{ $question->common_test_question }}>

                            @if ($errors->has('common_test_question')) 
                            @foreach($errors->get('common_test_question') as $error)
                            <p class="text-red">{!! $error !!}</p>
                            @endforeach 
                            @endif
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="col-sm-1 control-label">A.</label>
                            <div class="col-sm-11">
                                <input type="text" class="form-control" id="" placeholder="Answer A" name="option_1" value={{ $question->option_1 }}>

                                @if ($errors->has('option_1')) 
                                @foreach($errors->get('option_1') as $error)
                                <p class="text-red">{!! $error !!}</p>
                                @endforeach 
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="col-sm-1 control-label">B.</label>
                            <div class="col-sm-11">
                                <input type="text" class="form-control" id="" placeholder="Answer B" name="option_2" value={{ $question->option_2 }}>

                                @if ($errors->has('option_2')) 
                                @foreach($errors->get('option_2') as $error)
                                <p class="text-red">{!! $error !!}</p>
                                @endforeach 
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="col-sm-1 control-label">C.</label>
                            <div class="col-sm-11">
                                <input type="text" class="form-control" id="" placeholder="Answer C" name="option_3" value={{ $question->option_3 }}>

                                @if ($errors->has('option_3')) 
                                @foreach($errors->get('option_3') as $error)
                                <p class="text-red">{!! $error !!}</p>
                                @endforeach 
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="col-sm-1 control-label">D.</label>
                            <div class="col-sm-11">
                                <input type="text" class="form-control" id="" placeholder="Answer D" name="option_4" value={{ $question->option_4 }}>

                                @if ($errors->has('option_4')) 
                                @foreach($errors->get('option_4') as $error)
                                <p class="text-red">{!! $error !!}</p>
                                @endforeach 
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-default">Back to Question List</button>
                    <button type="submit" class="btn btn-info pull-right">Edit</button>
                </div>
                <!-- /.box-footer -->
                </div>
            </form>
        </div>   
    </div>
    <!-- /.box -->
</div>
@stop

