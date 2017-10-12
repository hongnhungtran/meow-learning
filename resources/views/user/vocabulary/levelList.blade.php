@extends('user.shared.master') @section('content')
<div class="row">
	<div class="col-md-12">
		<div id="front-content-box">
			<div id="front-content">
				<div id="category-detai-page">
					<div class="category-detail-header">
						<a href="/khoa-hoc" class="course-homepage">Khóa học</a>
						<span class="arrow">></span>
						<span class="category-detail-title">Từ vựng tiếng Anh</span>
						<p class="category-detail-description">Các khóa học từng vựng tiếng Anh hay nhất Việt Nam, giúp bạn học xong nhớ mãi</p>
					</div>

					<div class="course-in-category">
						@foreach($levels as $level)
						<a href="{!! action('User\VocabularyController@get_topic_list', $level->level_id) !!}" class="course-item-detail">
							<div class="course-item-detail-img-box">
								<img src="{{ $level->level_image_link }}" class="course-item-detail-img" />
							</div>
							<div class="course-item-detail-title">{{ $level->level_name }}</div>
							<p class="course-item-detail-summary">{{ $level->level_content }}</p>
						</a>
						@endforeach
						<div class="clear-both"></div>
					</div>

					<div id="all-categories">
						<div class="all-categories-title">Các chuyên mục khác</div>
						<a href="#" class="category-tag-item"> Tiếng Anh giao tiếp </a>
						<a href="#" class="category-tag-item"> Tiếng Anh phổ thông </a>
						<a href="#" class="category-tag-item"> Từ vựng tiếng Anh </a>
						<a href="#" class="category-tag-item"> Luyện nghe tiếng Anh </a>
						<a href="#" class="category-tag-item"> Ngữ pháp tiếng Anh </a>
						<a href="#" class="category-tag-item"> Luyện đọc tiếng Anh </a>
						<a href="#" class="category-tag-item"> Luyện thi TOEIC </a>
						<a href="#" class="category-tag-item"> Tiếng Anh thương mại </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection