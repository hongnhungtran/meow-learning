@extends('user.shared.master') 

@section('content')
<div class="row">
	<div id="course-info">
		<h3>
			<a id="all-courses" href="/course/index/taken-courses">コース</a>
			<span class="arrow-gt">›</span>
			{!! $level->level_name !!}
		</h3>
		<p>
			Tạo bởi
			<a href="#">Dolphin Inc.</a>
		</p>
		<a title="Gửi cho chúng tôi nhận xét của bạn về khóa học này" id="write-your-reviews" class="frontend-green-button" href="#">Viết đánh giá
			của bạn</a>
	</div>

	<h3 id="all-lectures">Các bài học trong khóa</h3>
	<div id="course-lectures">
	@foreach($topics as $topic)
		<div class="lecture" title="Bấm vào đây để xem cấu trúc khóa học" data-url="#">
			<div class="lecture-item lecture-order">
				<div class="course-lesson-number-label">トピック</div>
				<div class="course-lesson-number">{!! $i++ !!}</div>
			</div>
			<img src="{{ $topic->topic_image_link }}" alt="lecture image" class="lecture-img lecture-item" />
			<div class="lecture-content lecture-item">
				<h4 class="lecture-title">{!! $topic->topic_title !!}</h4>
				<p>{!! $topic->topic_content !!}</p>
			</div>
			<div class="start-lecture lecture-item">
				<a title="Bấm vào đây để bắt đầu học bài" class="frontend-blue-button">勉強</a>
			</div>
			<div class="go-to-lecture lecture-item">
				<a title="Bấm vào đây để xem cấu trúc khóa học" class="frontend-green-button" href="＃">詳細</a>
			</div>
		</div>
		@endforeach
	</div>
</div>

@endsection
