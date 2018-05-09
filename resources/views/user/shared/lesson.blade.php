@extends('user.shared.master') 
@section('content') 
<div class="row">
	<div id="front-content-box">
		<div id="search-box">
			<div class="search-category-box dropdown">
				<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> カテゴリ
					 <span class="caret caret-search"></span>
				</button>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					@foreach($levels as $level)
					<li><a href="{!! action('User\CourseController@getByLevel', $courseId, $level->level_id,) !!}" class="navbar-list-item"> {{$level->level_name}} </a></li>
					@endforeach
				</ul>
			</div>
			<div class="search-keyword-box">
				<form method="post" action="{{ action('User\DocumentController@search_document') }}">
				{{csrf_field()}} 
					<input type="search" class="form-control" id="keyword" name="keyword" placeholder="資料検索" value="{{ old('keyword') }}">
					<input class="search-icon-box" type="submit" value="検索">
				</form>
			</div>
		</div>
		<!-- search-box -->
		<div id="main-content-box">
			<div class="main-content-right-box">
				<div class="download-list-box">
					<div class="download-list-block">
						@if ($lessons->isEmpty())
					    <h4> 検索した結果がありません！！</h4>  
					    @else

						<div class="row">
						@foreach($lessons as $lesson)
						<div class="col-xs-2">
							<div class="download-item-detail-wrapper">
								<a href="#" class="download-item-detail-box">
									<div class="download-item-detail-img-box">
										<img alt="download item image" class="download-item-detail-img" src="{{$document->document_image_link}}" />
									</div>
									<div class="download-item-detail">
										<div class="download-item-detail-title">{{$lesson->lesson_title}}</div>
										<p class="download-item-detail-type">{{$lesson->lesson_content}}</p>
									</div>
								</a>
							</div>
						</div>
						@endforeach
					</div>
					<div class="clear-both"></div>
					@endif
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
		<div id="download-pagination-box">
			<div class="download-pagination"></div>
			<div id="download-pagination">
				{{ $lessons->links() }}
			</div>
		</div>
	</div>
</div>
@endsection
