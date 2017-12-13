@extends('user.shared.master') 
@section('content')
<div class="row">
	<div class="col-md-12">
		<div id="front-content-box">
			<div id="front-content">
				<div id="category-detai-page">
					<div class="category-detail-header">
					<h3>
						<a id="all-courses" href="#">コース</a>
						<span class="arrow-gt">›</span>
						<a id="all-courses" href="#">{{$course['course_name']}}</a>
					</h3>
						<p class="category-detail-description">テストがたくさんあります。</p>
					</div>
					<div class="course-in-category">
					@if ($levels->isEmpty())
					    <h3 class="box-title">テストがありません。</h3>
					@else
						@foreach($levels as $level)
						<a href="{!! action('User\WritingController@get_lesson_list', $level->level_id) !!}" class="course-item-detail">
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