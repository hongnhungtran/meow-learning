@extends('admin.shared.master') 
@section('title', 'Add New Lesson') 
@section('content_header')
<h1>
    Vocabulary Exercise
    <small>Review</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i>Home</a></li>
    <li><a href="{{ url('admin/vocabulary') }}">Topic</a></li>
    <li><a href="{{ url('admin/vocabulary/lesson') }}">Lesson</a></li>
    <li class="active">Exercise</li>
</ol>
@stop 
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Lesson Detail</h3>
        <div class="pull-right box-tools">
          <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <table class="table table-bordered">
          <tr>
            <td class="col-md-2"><strong>Topic</strong></td>
            <td>{{ $lesson[0]->topic_title }}</td>
          </tr>
          <tr>
            <td class="col-md-2"><strong>Level</strong></td>
            <td>{{ $lesson[0]->level_name }}</td>
          </tr>
          <tr>
            <td class="col-md-2"><strong>Lesson Title</strong></td>
            <td>{{ $lesson[0]->lesson_title }}</td>
          </tr>
          <tr>
            <td class="col-md-2"><strong>Lesson Content</strong></td>
            <td>{{ $lesson[0]->lesson_content }}</td>
          </tr>
          <tr>
            <td class="col-md-2"><strong>Status</strong></td>
            @if($lesson[0]->lesson_flag == 1)
            <td>Active</td>
            @elseif($lesson[0]->lesson_flag == 0)
            <td>Inactive</td>
            @endif
          </tr>
          <tr>
            <td class="col-md-2"><strong>Image</strong></td>
            <td><img src="{{ $lesson[0]->lesson_image_link }}" style="width: 150px; height: 100px"></td>
          </tr>
        </table>
      </div>
      <div class="box-footer">
        <a href="{!! action('Admin\VocabularyController@editLesson', $lesson[0]->lesson_id) !!}" class="btn btn-success">Edit</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
          <h3 class="box-title">Exercise</h3>
          <div class="pull-right box-tools">
              <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
          </div>
      </div>
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab_1" data-toggle="tab">Tab 1</a></li>
          <li><a href="#tab_2" data-toggle="tab">Tab 2</a></li>
          <li><a href="#tab_3" data-toggle="tab">Tab 3</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab_1">
            @if($count == 0)
            <a href="{!! action('Admin\VocabularyController@createExercise', $lesson[0]->lesson_id) !!}" class="btn btn-primary">Add exercise</a>
            @else
            <a href="{!! action('Admin\VocabularyController@createExercise', $lesson[0]->lesson_id) !!}" class="btn btn-success" style="margin-bottom: 10px;">Edit</a>
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <th>ID</th>
                  <th>Vocabulary</th>
                  <th>Pronunciation</th>
                  <th>Image</th>
                  <th>Audio</th>
                  <th>Status</th>
                </tr>
                @foreach($vocabulary as $data)
                <tr>
                  <td>{{ $data->vocabulary_id }}</td>
                  <td>{{ $data->vocabulary }}</td>
                  <td>{{ $data->pronunciation }}</td>
                  <td>
                    <img src="{{ $data->vocabulary_image_link }}" style="width: 150px; height: 100px;">
                  </td>
                  <td>
                    <audio id="t-rex-roar" controls
                    src="{{ $data->vocabulary_audio_link }}">
                      Your browser does not support the <code>audio</code> element.
                    </audio>
                  </td>
                  <td><span class="label label-{{ ($data->vocabulary_status) ? 'success' : 'danger' }}"> {{ ($data->vocabulary_status) ? ' Active ' : 'Inactive' }}</span></td>
                </tr>
                @endforeach
              </tbody>
            </table>
            @endif
          </div>
          <div class="tab-pane" id="tab_2">
            The European languages are members of the same family. Their separate existence is a myth.
          </div>
          <div class="tab-pane" id="tab_3">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop

