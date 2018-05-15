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
				<h3 id="total-score">正解　{{ $countTrueAnswer }}/ {{ $totalQuestion }} 質問</h3>
					<div class="cell actions">
					</div>
			</div>
			</div>
			<div id="test-content" class="col-md-8">
				@foreach($result as $key => $value)
				<div id="current-question">
					<div id="question-number">{!! $num++ !!}</div>
					<div id="question-content">
						<div class="question-text" >
							{!! $result[$key]['common_test_question'] !!}
						</div>
						<div id="answer-text">
							@if ($result[$key]['true_answer'] == 1 && $result[$key]['user_answer'] == 1)
							<div class="text-success"><strong>A.</strong>{!! $result[$key]['option_1'] !!}<i class="fas fa-check bg-success"></i></div>
							@elseif ($result[$key]['true_answer'] == 1 && $result[$key]['user_answer'] == 0)
							<div class="text-success"><strong>A.</strong>{!! $result[$key]['option_1'] !!}</div>
							@elseif ($result[$key]['true_answer'] == 1 && $result[$key]['user_answer'] !== 1)
							<div class="text-success"><strong>A.</strong>{!! $result[$key]['option_1'] !!}<i class="fas fa-check bg-success"></i></div>
							@elseif ($result[$key]['true_answer'] !== 1 && $result[$key]['user_answer'] == 1)
							<div class="text-danger"><strong>A.</strong>{!! $result[$key]['option_1'] !!}<i class="fas fa-times bg-danger"></i></div>
							@else
							<div><strong>A.</strong>{!! $result[$key]['option_1'] !!}</div>
							@endif

							@if ($result[$key]['true_answer'] == 2 && $result[$key]['user_answer'] == 2)
							<div class="text-success"><strong>B.</strong>{!! $result[$key]['option_2'] !!}<i class="fas fa-check bg-success"></i></div>
							@elseif ($result[$key]['true_answer'] == 2 && $result[$key]['user_answer'] == 0)
							<div class="text-success"><strong>B.</strong>{!! $result[$key]['option_2'] !!}</div>
							@elseif ($result[$key]['true_answer'] == 2 && $result[$key]['user_answer'] !== 2)
							<div class="text-success"><strong>B.</strong>{!! $result[$key]['option_2'] !!}<i class="fas fa-check bg-success"></i></div>
							@elseif ($result[$key]['true_answer'] !== 2 && $result[$key]['user_answer'] == 2)
							<div class="text-danger"><strong>B.</strong>{!! $result[$key]['option_2'] !!}<i class="fas fa-times bg-danger"></i></div>
							@else
							<div><strong>B.</strong>{!! $result[$key]['option_2'] !!}</div>
							@endif

							@if ($result[$key]['true_answer'] == 3 && $result[$key]['user_answer'] == 3)
							<div class="text-success"><strong>C.</strong>{!! $result[$key]['option_3'] !!}<i class="fas fa-check bg-success"></i></div>
							@elseif ($result[$key]['true_answer'] == 3 && $result[$key]['user_answer'] == 0)
							<div class="text-success"><strong>C.</strong>{!! $result[$key]['option_3'] !!}</div>
							@elseif ($result[$key]['true_answer'] == 3 && $result[$key]['user_answer'] !== 3)
							<div class="text-success"><strong>C.</strong>{!! $result[$key]['option_3'] !!}<i class="fas fa-check bg-success"></i></div>
							@elseif ($result[$key]['true_answer'] !== 3 && $result[$key]['user_answer'] == 3)
							<div class="text-danger"><strong>C.</strong>{!! $result[$key]['option_3'] !!}<i class="fas fa-times bg-danger"></i></div>
							@else
							<div><strong>C.</strong>{!! $result[$key]['option_3'] !!}</div>
							@endif

							@if ($result[$key]['true_answer'] == 4 && $result[$key]['user_answer'] == 4)
							<div class="text-success"><strong>D.</strong>{!! $result[$key]['option_4'] !!}<i class="fas fa-check bg-success"></i></div>
							@elseif ($result[$key]['true_answer'] == 4 && $result[$key]['user_answer'] == 0)
							<div class="text-success"><strong>D.</strong>{!! $result[$key]['option_4'] !!}</div>
							@elseif ($result[$key]['true_answer'] == 4 && $result[$key]['user_answer'] !== 4)
							<div class="text-success"><strong>D.</strong>{!! $result[$key]['option_4'] !!}<i class="fas fa-check bg-success"></i></div>
							@elseif ($result[$key]['true_answer'] !== 4 && $result[$key]['user_answer'] == 4)
							<div class="text-danger"><strong>D.</strong>{!! $result[$key]['option_4'] !!}<i class="fas fa-times bg-danger"></i></div>
							@else
							<div><strong>D.</strong>{!! $result[$key]['option_4'] !!}</div>
							@endif
						</div>
						<div id="explain-box" style="border: 1px solid #e8e8e8;">{!! $result[$key]['explain'] !!}</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
</script>
@stop


