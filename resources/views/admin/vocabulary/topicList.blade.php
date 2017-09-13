@extends('admin.shared.master')

@section('title', 'Lesson List')

@section('content_header')
<h1>
  List
  <small>Lesson</small>
</h1>
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li><a href="#">Lesson</a></li>
  <li class="active">List</li>
</ol>
@stop

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Hover Data Table</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
       @if ($vocabulary_topic->isEmpty())
       <p> There is no vocabulary topic.</p>
       @else
       <table id="example2" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>


         @foreach($vocabulary_topic as $vocabulary_topic)
         <tr>
          <td>{!! $vocabulary_topic->vocabulary_topic_id !!} </td>
          <td>{!! $vocabulary_topic->vocabulary_topic_title !!}</td>
          <td>{!! $vocabulary_topic->vocabulary_topic_content !!}</td>
          <td>{!! $vocabulary_topic->vocabulary_topic_status !!}</td>
        </tr>
        @endforeach

      </tbody>

    </table>
    @endif
  </div>
  <!-- /.box-body -->
  
</div>
<!-- /.box -->

</div>
<!-- /.col -->

</div>
<!-- /.row -->
@stop
