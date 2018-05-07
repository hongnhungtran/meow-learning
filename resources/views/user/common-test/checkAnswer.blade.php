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
				<i class="fa fa-check" id="common-test-result-icon"></i>
			<div id="result-score-content">
				<h3 id="total-score">正解　0/100 質問</h3>
					<div class="cell actions">
					</div>
				<div class="show-explanation">
					<label id="show-explanation"><input type="checkbox">回答説明を表示する(ある場合)</label>
				</div>
			</div>
			</div>
			<div id="test-content" class="col-md-8">
				@foreach($contents as $content)
				<div id="current-question">
					<div id="question-number">{!! $num++ !!}</div>
					<div id="question-content">
						<div class="question-text" id="question-id-{{ $content->common_test_question_id }}">
							{!! $content->common_test_question !!}
						</div>
						<div id="answer-text">
							@if ($content->answer == 1)
							<div><input type="radio" class="target" id="true" value="" name="{{$content->common_test_question_id}}"><strong>A.</strong>{!! $content->option_1 !!}</div>
							@endif

							<div><input type="radio" class="target" value="2" name="{{$content->common_test_question_id}}"><strong>B.</strong>{!! $content->option_2 !!}</div>
							<div><input type="radio" class="target" value="3" name="{{$content->common_test_question_id}}"><strong>C.</strong>{!! $content->option_3 !!}</div>
							<div><input type="radio" class="target" value="4" name="{{$content->common_test_question_id}}"><strong>D.</strong>{!! $content->option_4 !!}</div>
							
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection
