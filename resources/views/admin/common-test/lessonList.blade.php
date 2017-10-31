@extends('admin.shared.master') 

@section('title', 'Common Test List') 

@section('content_header')
<h1>
    Common Test
    <small>List</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ url('/admin/common-test') }}">Lesson</a></li>
    <li class="active">List</li>
</ol>
@stop 

@section('content')
<div class="row">
    @if ($common_tests->isEmpty())
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <p> There is no Common Test.</p>
            </div>
        </div>
    </div>  

    @else
    <!-- search form -->
    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <!-- form start -->
            <form class="form-horizontal" action="" method="GET">
                <div class="box-body">
                    <div class="form-group col-md-6">
                        <label for="" class="col-sm-4 control-label">Test ID</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="Test ID" name="test_id">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="" class="col-sm-4 control-label">Test title</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="Test title" name="test_title">
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="" class="col-sm-4 control-label">Test content</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="Test content" name="test_content">
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="" class="col-sm-4 control-label">Category</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="level">
                                @if ($levels->count()) 
                                @foreach($levels as $level)
                                <option value="{{ $level->level_id }}">{{ $level->level_name }}</option>
                                @endforeach 
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="" class="col-sm-4 control-label">Test status</label>
                        <div class="col-sm-4">
                            <input type="checkbox">Enable
                        </div>
                        <div class="col-sm-4">
                            <input type="checkbox">Disable 
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
                <a href="{!! action('Admin\CommonTestLessonController@create') !!}"><button type="button" class="btn bg-orange pull-right">Create Common Test</button></a>
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
                            <th>Test ID</th>
                            <th>Level</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($common_tests as $common_test)
                        <tr>
                            <td>{!! $common_test->lesson_id !!} </td>
                            <td>{!! $common_test->level_name !!} </td>
                            <td>{!! $common_test->lesson_title !!}</td>
                            <td>{!! $common_test->lesson_content !!}</td>
                            <td>{!! $common_test->lesson_flag !!}</td>
                            <td>
                                <a href="{!! action('Admin\CommonTestLessonController@edit', $common_test->lesson_id) !!}" class="btn btn-success">Edit</a>
                                <a href="{!! action('Admin\CommonTestLessonController@show', $common_test->lesson_id) !!}" class="btn btn-primary">Detail</a> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
                
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <div class="dataTables_info col-sm-5" >Showing 1 to 10 of 57 entries</div>
                <div class="box-tools col-sm-7">
                    {!! $common_tests->links() !!}
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
