@extends('user.shared.master') 

@section('content')
<div class="row">
	<div id="course-info">
		<h3>
			<a id="all-courses" href="/course">コース</a>
			<span class="arrow-gt">›</span>
			{!! $level->level_name !!}
		</h3>
		<a title="このコースについて口コミする" id="write-your-reviews" class="frontend-green-button" href="#">口コミする</a>
	</div>

	<h3 id="all-lectures">コースのトピック</h3>
	<div id="course-lectures">
	@foreach($topics as $topic)
		<div class="lecture" title="クリックして勉強しましょう！！！" data-url="#">
			<div class="lecture-item lecture-order">
				<div class="course-lesson-number-label">トピック</div>
				<div class="course-lesson-number">{!! $num++ !!}</div>
			</div>
			<img src="{{ $topic->topic_image_link }}" alt="lecture image" class="lecture-img lecture-item" />
			<div class="lecture-content lecture-item">
				<h4 class="lecture-title">{!! $topic->topic_title !!}</h4>
				<p>{!! $topic->topic_content !!}</p>
			</div>
			<div class="start-lecture lecture-item">
				<a title="クリックして勉強しましょう！！！" class="frontend-blue-button"　href="{!! action('User\VocabularyController@get_lesson_list', $topic->topic_id) !!}"> 勉強</a>
			</div>
			<div class="go-to-lecture lecture-item">
				<a title="トピックについての情報" class="frontend-green-button" href="＃">詳細</a>
			</div>
		</div>
		@endforeach
	</div>
</div>

@endsection
