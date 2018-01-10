@extends('admin.shared.master')
@section('title', 'Add New Lesson')
@section('content_header')
     <h1>
        Add New
        <small>Lesson</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Lesson</a></li>
        <li class="active">Add</li>
      </ol>
@stop
@section('content')
     <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">CK Editor
                <small>Advanced and full of features</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                    <textarea id="editor1" name="editor1" rows="10" cols="80">
                    
                    </textarea>
                    <script type="text/javascript" src="../vendor/ckeditor/ckeditor.js"></script>
                    <script type="text/javascript" src="../vendor/ckfinder/ckfinder.js"></script>
    				<script type="text/javascript">
                    	var editor = CKEDITOR.replace('editor1', {
                    		language:'en',
                    		filebrowserBrowseUrl : '../../public/vendor/ckfinder/ckfinder.html',
					        filebrowserImageBrowseUrl : '../../public/vendor/ckfinder/ckfinder.html?type=Images',
					        filebrowserFlashBrowseUrl : '../../public/vendor/ckfinder/ckfinder.html?type=Flash',
					        filebrowserUploadUrl : '../../public/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
					        filebrowserImageUploadUrl : '../../public/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
					        filebrowserFlashUploadUrl : '../../public/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                    	});
                    	CKFinder.setupCKEditor( editor, '../' );
                    </script>
              </form>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
@stop
