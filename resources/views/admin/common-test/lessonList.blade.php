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
            <form class="form-horizontal" action="{{ action('Admin\CommonTestLessonController@searchLesson') }}" method="POST">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group col-md-6">
                        <label for="" class="col-sm-4 control-label">Test ID</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="lesson_id" placeholder="Test ID" name="lesson_id" value="{{ old('lesson_id') }}">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="" class="col-sm-4 control-label">Test title</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="lesson_title" placeholder="Test title" name="lesson_title" value="{{ old('lesson_title') }}">
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="" class="col-sm-4 control-label">Test content</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="lesson_content" placeholder="Test content" name="lesson_content" value="{{ old('lesson_content') }}">
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
                            <th class="col-xs-1">Test ID</th>
                            <th class="col-xs-1">Level</th>
                            <th class="col-xs-1">Image</th>
                            <th class="col-xs-2">Title</th>
                            <th class="col-xs-4">Content</th>
                            <th class="col-xs-1">Status</th>
                            <th class="col-xs-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($common_tests as $common_test)
                        <tr>
                            <td>{!! $common_test->lesson_id !!} </td>
                            <td>{!! $common_test->level_name !!} </td>
                            <td><img src="{!! $common_test->lesson_image_link !!}" height="42" width="42"></td>
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
                <div class="dataTables_info col-sm-5" >Showing {{($common_tests->currentpage()-1)*$common_tests->perpage()+1}} to {{(($common_tests->currentpage()-1)*$common_tests->perpage())+$common_tests->count()}} of {{$common_tests->total()}} entries</div>
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


@section('js')
<script type="text/javascript">
    $(function()
    {
        $( "#id" ).autocomplete({
            source: "admin/common-test/search",
            minLength: 3,
            select: function(event, ui) {
                $('#q').val(ui.item.value);
            }
        });
    });
</script>
@stop
