@extends('admin.shared.master') 

@section('title', 'Topic List') 

@section('content_header')
<h1>
    Vocabulary Topic
    <small>List</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{route('login')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Topic</a></li>
    <li class="active">List</li>
</ol>
@stop @section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Table</h3>
                <div class="box-tools">
                    {!! $vocabulary_topics->links() !!}
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                @if ($vocabulary_topics->isEmpty())
                    <p> There is no vocabulary topic.</p>
                @else
                
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
               <!--  @if ($message = Session::get('success'))
                   <div class="alert alert-success">
                        <p>{{ $message }}</p>
                   </div>
                @endif -->
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($vocabulary_topics as $vocabulary_topic)
                        <tr>
                            <td>{!! $vocabulary_topic->topic_id !!} </td>
                            <td>{!! $vocabulary_topic->topic_title !!}</td>
                            <td>{!! $vocabulary_topic->topic_content !!}</td>
                            <td>{!! $vocabulary_topic->topic_status !!}</td>
                            <td><a href="{!! action('Admin\VocabularyController@vocabulary_topic_edit', $vocabulary_topic->topic_id) !!}" class="btn btn-success">Edit</a></td>
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
