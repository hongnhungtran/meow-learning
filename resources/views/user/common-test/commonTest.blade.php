@extends('user.shared.master') 
@section('content')
<div class="row">
	<div id="course-info">
		<h3>
			<a id="all-courses" href="#">コース</a>
			<span class="arrow-gt">›</span>
			<a id="all-courses" href="#">{!! $course->course_name !!}</a>
		</h3>
		<a title="このコースについて口コミする" id="write-your-reviews" class="frontend-green-button" href="#">口コミする</a>
	</div>
	<h3 id="all-lectures">コースのレッスン</h3>
	<div id="course-lectures">
		<div id="test-content">
			<div class="table">
				<li class="question ng-scope">
					<div>
						<div class="content">
							<span class="order ng-binding">13</span>
							<div class="title ng-binding"><div>
							</div>
						</div>
						<ul class="answer-list unstyled-list">
							<li class="inline">
								<label class="answer ng-scope" ng-if="answer" ng-class="getAnswerClasses(question, $index)">
									<input type="radio" class="target" value="0">
									<b>A</b><span class="splitter">.</span> 
									<span highlight="">whose</span>
								</label><!-- end ngIf: answer -->
							</li>
						</ul>
						<div>

						</div>
					</div>
				</li>
			</div>
			<div class="part-nav" ng-show="currentPart.ready && !finishedTest">
				<div ng-if="!finishedTest">
					<a href class="next frontend-blue-button">
						<i class="fa fa-arrow-right"></i></a>
						<button class="submit frontend-green-button">完了</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
