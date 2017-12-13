@extends('user.shared.master') 
@section('content') 
	<div class="row">
		<div class="col-md-12">
			<div id="search-box">
				<div class="search-category-box dropdown">
					<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> カテゴリ
						 <span class="caret caret-search"></span>
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						@foreach($categories as $category)
						<li><a href="#" class="navbar-list-item"> {{$category->document_category_title}} </a></li>
						@endforeach
					</ul>
				</div>
				<div class="search-keyword-box">
					<form method="get">
						<input type="text" class="form-control" id="keyword" name="keyword" placeholder="資料検索" value="">
						<div class="search-icon-box">
						<i class="fa fa-search" aria-hidden="true"></i>
					</div>
					</form>
				</div>
			</div>
			<!-- search-box -->
			<div id="main-content-box">
				<div class="main-content-right-box">
					<div class="download-list-box">
						<div class="download-list-block">
							<div class="row">
							@foreach($documents as $document)
							<div class="col-xs-3">
								<div class="download-item-detail-wrapper">
									<a href="{!! action('User\DocumentController@get_document_content', $document->document_id) !!}" class="download-item-detail-box">
										<div class="download-item-detail-img-box">
											<img alt="download item image" class="download-item-detail-img" src="{{$document->document_image_link}}" />
										</div>
										<div class="download-item-detail">
											<div class="download-item-detail-title">{{$document->document_title}}</div>
											<p class="download-item-detail-type">{{$document->document_category_title}}</p>
										</div>
									</a>
								</div>
							</div>
							@endforeach
						</div>
						<div class="clear-both"></div>
					</div>
				</div>
			</div>
			
		</div>
		<div class="clearfix"></div>
			<div id="download-pagination-box">
				<div class="download-pagination"></div>
				<div id="download-pagination">
					{{ $documents->links() }}
				</div>
			</div>
		</div>
	</div>
@endsection
