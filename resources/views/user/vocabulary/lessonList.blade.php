@extends('user.shared.master') 
@section('content')
<div class="row">
	<div id="course-info">
		<h3>
			<a id="all-courses" href="#">コース</a>
			<span class="arrow-gt">›</span>
			<a id="all-courses" href="#">{!! $course->course_name !!}</a>
			<span class="arrow-gt">›</span>
			<a id="all-courses" href="#">{!! $level->level_name !!}</a>
			<span class="arrow-gt">›</span>
			<a id="all-courses" href="#">{!! $topic->topic_title !!}</a>
			<span class="arrow-gt">›</span>
			<a id="all-courses" href="#"　class="btn-success">レッスン</a>
		</h3>
		<a title="このコースについて口コミする" id="write-your-reviews" class="frontend-green-button" href="#">口コミする</a>
	</div>
	<div id="course-lectures">
		@if ($lessons->isEmpty())
			<div>コースアップデート中です。少々お待ちください。</div>
		@else
			@foreach($lessons as $lesson)
				<div class="lecture" title="クリックして勉強しましょう！！！" data-url="#">
					<div class="lecture-item lecture-order">
						<div class="course-lesson-number-label">レッスン</div>
						<div class="course-lesson-number">{!! $num++ !!}</div>
					</div>
					<img src="{{ $topic->topic_image_link }}" alt="lecture image" class="lecture-img lecture-item" />
					<div class="lecture-content lecture-item">
						<h4 class="lecture-title"><a id="item-link" href="{!! action('User\VocabularyController@get_exercise', $lesson->lesson_id) !!}"> {!! $lesson->lesson_title !!}</h4></a>
						<p>{!! $lesson->lesson_content !!}</p>
					</div>
					<div class="start-lecture lecture-item">
						<a title="クリックして勉強しましょう！！！" class="frontend-blue-button"　href="#"> 勉強</a>
					</div>
					<div class="go-to-lecture lecture-item">
						<a title="レッスンについての情報" class="frontend-green-button" href="＃">詳細</a>
					</div>
				</div>
			@endforeach
		@endif
	</div>
</div>
@endsection
