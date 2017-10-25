@extends('admin.shared.master') 

@section('title', 'Document List') 

@section('content_header')
<h1>
    Document Lesson
    <small>List</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{route('login')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Document</a></li>
    <li class="active">List</li>
</ol>
@stop 

@section('content')
<div class="row">
    @if ($documents->isEmpty())
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <p> There is no Document.</p>
            </div>
        </div>
    </div>  

    @else
    <!-- search form -->
    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <!-- form start -->
            <form class="form-horizontal">
                <div class="box-body">
                    <div class="form-group col-md-6">
                        <label for="" class="col-sm-4 control-label">Document title</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="" class="col-sm-4 control-label">Document content</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="" placeholder="Password">
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
                <div class="box-tools">
                    {!! $documents->links() !!}
                </div>
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
                            <th class="col-xs-1">Document ID</th>
                            <th class="col-xs-2">Category</th>
                            <th class="col-xs-2">Title</th>
                            <th class="col-xs-4">Content</th>
                            <th class="col-xs-1">Status</th>
                            <th class="col-xs-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($documents as $document)
                        <tr>
                            <td>{!! $document->document_id !!} </td>
                            <td>{!! $document->document_category_title !!} </td>
                            <td>{!! $document->document_title !!}</td>
                            <td>{!! $document->document_content !!}</td>
                            <td><span class="label label-{{ ($document->document_flag) ? 'success' : 'danger' }}"> {{ ($document->document_flag) ? ' Active ' : 'Inactive' }}</span></td>
                            <td>
                                <a href="{!! action('Admin\DocumentController@edit', $document->document_id) !!}" class="btn btn-success">Edit</a>
                                <a href="{!! action('Admin\DocumentController@show', $document->document_id) !!}" class="btn btn-primary">Detail</a> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
                
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
<!-- /.col -->
    @endif
</div>  
@stop
