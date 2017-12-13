@extends('user.shared.master') 
@section('content') 
<div class="row">
	<div class="col-md-12">
		<div id="header-box">
			<img src="../public/img/common/d-thumbnail.png">
			<div class="header-content-wrapper">
				<div class="header-content-box">
					<div class="header-content">
						<div class="header-content-title">
							{{ $document->document_title }}					
						</div>
						<p> {{$document->document_content}} </p>
						<a href="{{$document->document_download_link}}" target="_blank" class="btn btn-success">資料ダウンロードリンク<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="download-description content-box">
			<p style="text-align: center;">&nbsp;</p>
			<p style="text-align: center;"><strong><span style="font-size: 22px;">資料について</span></strong></p>
			<p>{{$document->document_description}}</p>
			<div class="like-share-box">
				<div class="fb-like" data-href="#" data-layout="standard" data-action="like" data-show-faces="true" data-width="350" data-share="true"></div>
				<div class="fb-comments" data-numposts="10" data-width="100%" data-href="#"></div>		
			</div>
		</div>
		<div id="download-screenshots" class="content-box">
			<h2>資料の画像</h2>
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<ul class="pgwSlider">
						@foreach($images as $image)
					    <li><img src="{{$image->image_link}}" alt="{{$image->image_name}}" data-description="{{$image->image_description}}"></li>
					    @endforeach
					</ul>
				</div>
			</div>
		</div>
		<div id="panoram"></div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
    	$('.pgwSlider').pgwSlider();
	});
</script>
@endsection
