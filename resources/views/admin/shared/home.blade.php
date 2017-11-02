@extends('admin.shared.master') 

@section('title', 'Home') 

@section('content_header')
<h1>
    Admin
    <small>Panel</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
</ol>
@stop 

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Notification from Meow Learning</h3>
                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tr>
                        <th>Time</th>
                        <th>Content</th>
                    </tr>
                    <tr>
                        <td>2017-03-08</td>
                        <td>Test Test Test Test Test Test Test Test Test</td>
                    </tr>
                    <tr>
                        <td>2017-03-09</td>
                        <td>Test Test Test Test Test Test Test Test Test</td>
                    </tr>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    <!-- /.box -->
    </div>
</div>
<!-- /.row -->
@stop
