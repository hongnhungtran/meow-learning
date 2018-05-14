@extends('user.shared.master') 
@section('content')
<div class="row">
	<div id="front-content-box">
		<div id="front-content">
			<div id="category-detai-page">
				<div class="category-detail-header">
				<h3>
					<a id="all-courses" href="{!! action('User\HomeController@home') !!}"> コース</a>
					<span class="arrow-gt">›</span>
					<a id="all-courses" href="#" class="btn-success">{!! $course[0]->course_name !!}</a>
				</h3>
					<p class="category-detail-description">{!! $course[0]->course_description !!}</p>
				</div>

				<div class="course-in-category">
				@if ($levels->isEmpty())
				    <h3 class="box-title">レッスンがありません。</h3>
				@else
					@foreach($levels as $level)
						<a href="{!! action('User\CourseController@get_lesson_list', $level->level_id) !!}" class="course-item-detail">
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
			</div>
		</div>
	</div>
</div>
@endsection