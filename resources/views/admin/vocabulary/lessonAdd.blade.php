@extends('admin.shared.master') @section('title', 'Add New Lesson') @section('content_header')
<h1>
    Vocabulary Lesson
    <small>Add New</small>
</h1>
<ol class="breadcrumb">
    <li>
        <a href="{{ url('/') }}">
            <i class="fa fa-dashboard"></i>
            Home
        </a>
    </li>
    <li>
        <a href="{{ url('admin/vocabulary') }}">Topic</a>
    </li>
    <li>
        <a href="{{ url('admin/vocabulary/lesson') }}">Lesson</a>
    </li>
    <li class="active">Add</li>
</ol>
@stop @section('content')
<div class="row">
    <!-- Lesson detail -->
    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Add New Lesson</h3>
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
            <form class="form-horizontal" method="post" action="{{route('vocabulary-lesson-store')}}">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Topic</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="topic">
                                @if ($topics->count()) @foreach($topics as $topic)
                                <option value="{{ $topic->topic_id }}">{{ $topic->topic_title }}</option>
                                @endforeach @endif
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Lesson Title</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="" placeholder="Lesson Title" name="lesson_title">

                            @if ($errors->has('lesson_title')) @foreach($errors->get('lesson_title') as $error)
                            <p class="text-red">{!! $error !!}</p>
                            @endforeach @endif

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Lesson Content</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="" placeholder="Lesson Content" name="lesson_content">

                            @if ($errors->has('lesson_content')) @foreach($errors->get('lesson_content') as $error)
                            <p class="text-red">{!! $error !!}</p>
                            @endforeach @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Level</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="level">
                                @if ($levels->count()) @foreach($levels as $level)
                                <option value="{{ $level->level_id }}">{{ $level->level_name }}</option>
                                @endforeach @endif
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Image Link</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="" placeholder="Image Link" name="image_link">

                            @if ($errors->has('image_link')) @foreach($errors->get('image_link') as $error)
                            <p class="text-red">{!! $error !!}</p>
                            @endforeach @endif
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right">Add</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
    <!-- /.box -->

    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Exercise 1</h3>
                <small>Flashcard</small>
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
            <form class="form-horizontal" method="post" action="{{route('vocabulary-lesson-store')}}">
                {{csrf_field()}}
                <div class="box-body">
                    <table class="table">
                        <tr>
                            <th>Vocabulary</th>
                            <th>Image</th>
                            <th>Audio</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control" id="" placeholder="Vocabulary" name="lesson_content">
                            </td>
                            <td>
                                <input type="file" name="files[]" id="" multiple>
                            </td>

                            <td>
                                <input type="file" name="files[]" id="" multiple>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right">Add</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
    <!-- /.box -->

    <!-- Excercise 1 -->
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">
                    Add Excercise
                    <small>Add single word for seleted lession</small>
                </h3>
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
            <div class="box-body pad">
                <form>
                    <textarea id="editor1" name="editor1" rows="10" cols="80">

                    </textarea>
                    <script type="text/javascript" src="../../vendor/ckeditor/ckeditor.js"></script>
                    <script type="text/javascript" src="../../vendor/ckfinder/ckfinder.js"></script>
                    <script type="text/javascript">
                        var editor = CKEDITOR
                                .replace(
                                        'editor1',
                                        {
                                            language : 'en',
                                            filebrowserBrowseUrl : '../../public/vendor/ckfinder/ckfinder.html',
                                            filebrowserImageBrowseUrl : '../../public/vendor/ckfinder/ckfinder.html?type=Images',
                                            filebrowserFlashBrowseUrl : '../../public/vendor/ckfinder/ckfinder.html?type=Flash',
                                            filebrowserUploadUrl : '../../public/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                            filebrowserImageUploadUrl : '../../public/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                            filebrowserFlashUploadUrl : '../../public/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                                        });
                        CKFinder.setupCKEditor(editor, '../');
                    </script>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-info pull-right">Add</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
        <!-- /.box -->
    </div>
</div>
@stop

