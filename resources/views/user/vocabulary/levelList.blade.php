@extends('user.shared.master') @section('content')
<div class="row">
	<div class="col-md-12">
		<div id="front-content-box">
			<div id="front-content">
				<div id="category-detai-page">
					<div class="category-detail-header">
						<a href="/course" class="course-homepage">コース</a>
						<span class="arrow">></span>
						<span class="category-detail-title">英語の単語</span>
						<p class="category-detail-description">面白い英語の単語のレッスンがたくさんあります。</p>
					</div>

					<div class="course-in-category">
					@if ($levels->isEmpty())
					    <h3 class="box-title">レッスンがありません。</h3>
 
					@else
						@foreach($levels as $level)
						<a href="{!! action('User\VocabularyController@get_topic_list', $lesson->lesson_id) !!}" class="course-item-detail">
							<div class="course-item-detail-img-box">
								<img src="{{ $level->level_image_link }}" class="course-item-detail-img" />
							</div>
							<div class="course-item-detail-title">{{ $level->level_name }}</div>
							<p class="course-item-detail-summary">{{ $level->level_content }}</p>
						</a>
						@endforeach
						<div class="clear-both"></div>
					@endif
					</div>

					<div id="all-categories">
						<div class="all-categories-title">タグ</div>
						@foreach($courses as $course)
							<a href="#" class="category-tag-item">{{ $course->course_name }}</a>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection