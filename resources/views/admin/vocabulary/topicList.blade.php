@extends('admin.shared.master') 
@section('title', 'Topic List') 
@section('content_header')
<h1>
	Vocabulary Topic
	<small>List</small>
</h1>
<ol class="breadcrumb">
	<li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
	<li><a href="{{ route('vocabulary.topic.index') }}">Vocabulary Topic</a></li>
	<li class="active">List</li>
</ol>
@stop 
@section('content')
<div class="row">
	@if ($vocabulary_topics->isEmpty())
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Vocabulary Topic Data Table</h3>
			</div>
			<div class="box-body">
				<p> There is no vocabulary topic.</p>
			</div>
		</div>
	</div>  
	@else
	<div class="col-md-12">
		<div class="box box-info">
			<form class="form-horizontal" method="GET" action="{{ route('vocabulary.topic.index') }}">
				<div class="box-body">
					<div class="form-group col-md-6">
						<label for="" class="col-sm-4 control-label">Topic ID</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="" placeholder="Enter Topic ID For Search" name="topic_id" value="{{ old('topic_id') }}">
						</div>
					</div>
					<div class="form-group col-md-6">
						<label for="" class="col-sm-4 control-label">Topic title</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="" placeholder="Enter Topic Title For Search" name="topic_title" value="{{ old('topic_title') }}">
						</div>
					</div>
					<div class="form-group col-md-6">
						<label for="" class="col-sm-4 control-label">Topic content</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="" placeholder="Enter Topic Content For Search" name="topic_content" value="{{ old('topic_content') }}">
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-info pull-right">Search</button>
				</div>
			</form>
		</div>
	</div>
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Data Table</h3>
				<a href="{!! action('Admin\VocabularyTopicController@create') !!}"><button type="button" class="btn bg-orange pull-right">Create Topic</button></a>
			</div>
			<div class="box-body">
				@if (session('status'))
					<div class="alert alert-success" id="alert">
						{{ session('status') }}
					</div>
				@endif

				<table id="example2" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th class="col-xs-1">Topic ID</th>
							<th class="col-xs-1">Level</th>
							<th class="col-xs-1">Image</th>
							<th class="col-xs-2">Title</th>
							<th class="col-xs-4">Content</th>
							<th class="col-xs-1">Status</th>
							<th class="col-xs-2">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($vocabulary_topics as $vocabulary_topic)
						<tr>
							<td>{!! $vocabulary_topic->topic_id !!}</td>
							<td>{!! $vocabulary_topic->level_name !!}</td>
							<td><img src="{!! $vocabulary_topic->topic_image_link !!}" height="42" width="42"></td>
							<td><div>{!! $vocabulary_topic->topic_title !!}</div></td>
							<td>{!! $vocabulary_topic->topic_content !!}</td>
							<td> <span class="label label-{{ ($vocabulary_topic->topic_flag) ? 'success' : 'danger' }}"> {{ ($vocabulary_topic->topic_flag) ? ' Active ' : 'Inactive' }}</span></td>
							<td>
								<a href="{!! action('Admin\VocabularyTopicController@edit', $vocabulary_topic->topic_id) !!}" class="btn btn-success">Edit</a>
								<a href="{!! action('Admin\VocabularyTopicController@show', $vocabulary_topic->topic_id) !!}" class="btn btn-primary">Detail</a>    
							</td>
						</tr>
						@endforeach
					</tbody>

				</table>
			</div>
			<!-- /.box-body -->
			<div class="box-footer clearfix">
				<div class="dataTables_info col-sm-5" >Showing {{($vocabulary_topics->currentpage()-1)*$vocabulary_topics->perpage()+1}} to {{(($vocabulary_topics->currentpage()-1)*$vocabulary_topics->perpage())+$vocabulary_topics->count()}} of {{$vocabulary_topics->total()}} entries</div>
				<div class="box-tools col-sm-7">
					{!! $vocabulary_topics->links() !!}
				</div>
			</div>
			<!-- /.box-footer -->
		  </div>
		  <!-- /.box -->
		</div>
	</div>
	<!-- /.col -->
	@endif
</div>
<!-- /.row -->
@stop


