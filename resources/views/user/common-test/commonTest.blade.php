@extends('user.shared.master') 
@section('content')
<div class="row" style="background: #ffffff">
	<div id="front-content-box">
		<div id="course-info">
			<h3>
				<a id="all-courses" href="#">コース</a>
				<span class="arrow-gt">›</span>
				<a id="all-courses" href="#">{!! $course->course_name !!}</a>
			</h3>
			<a title="このコースについて口コミする" id="write-your-reviews" class="frontend-green-button" href="#">口コミする</a>
		</div>
		<div id="course-lectures">
			<div id="timer" class="col-md-4">
				<div id="fixed">
					<div class="clock" style="margin:2em;"></div>
					<div class="message"></div>
				</div>
			</div>
			<div id="test-content" class="col-md-8">
				<form class="form-horizontal" method="post"  action="{{ action('User\CommonTestController@check_result', $lesson->lesson_id) }}" enctype="multipart/form-data">
	                {{csrf_field()}} 
					@foreach($contents as $content)
					<div id="current-question">
						<div id="question-number">{!! $num++ !!}</div>
						<div id="question-content">
							<div class="question-text" id="question-id-{{ $content->common_test_question_id }}">
								{!! $content->common_test_question !!}
							</div>
							<div id="answer-text">
								<input type="hidden" name="{{ $content->common_test_question_id }}" value="0">
								<div><input type="radio" class="target" value="1" name="{{ $content->common_test_question_id }}"><strong>A.</strong>{!! $content->option_1 !!}</div>
								<div><input type="radio" class="target" value="2" name="{{ $content->common_test_question_id }}"><strong>B.</strong>{!! $content->option_2 !!}</div>
								<div><input type="radio" class="target" value="3" name="{{ $content->common_test_question_id }}"><strong>C.</strong>{!! $content->option_3 !!}</div>
								<div><input type="radio" class="target" value="4" name="{{ $content->common_test_question_id }}"><strong>D.</strong>{!! $content->option_4 !!}</div>
							</div>
						</div>
					</div>
					@endforeach
					<div class="part-nav">
						<button class="submit frontend-green-button">完了</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
