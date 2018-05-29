@extends('user.shared.master')
@section('content')
<style type="text/css">
	audio { 
		width: 200px; 
	}
	#vocab {
		color: red;
		text-align: left;
	}
	#pronunciation {
		position: absolute;
    margin-top: -120px;
    font-size: 16px;
	}
	#tab2 {
		display: flex;
	}
	#dragImg {
		width: 100%;
		height: 100%;
	}
	#imgContainer {
		width: 200px;
    height: 144px;
    margin: 10px;
	}
</style>
<div class="container">
	<div class="row">
		<div id="front-content-box">
			<div class="panel with-nav-tabs panel-success">
				<div class="panel-heading">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab1success" data-toggle="tab">Excercise 1</a></li>
						<li><a href="#tab2success" data-toggle="tab">Excercise 2</a></li>
						<li><a href="#tab3success" data-toggle="tab">Excercise 3</a></li>
						<!-- <li class="dropdown">
							<a href="#" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#tab4success" data-toggle="tab">Success 4</a></li>
								<li><a href="#tab5success" data-toggle="tab">Success 5</a></li>
							</ul>
						</li> -->
					</ul>
				</div>
				<div class="panel-body">
					<div class="tab-content">
						<div class="tab-pane fade in active" id="tab1success">
							<div class="global-activity-guide">
								<div class="icon"></div>
								<div class="text">クリックして画像をフリップしましょう。</div>
							</div>
							<div class="">
								@foreach ($vocabulary as $data)
								<div class="col-xs-3">
									<div class="card "> 
										<div class="front"> 
											<img id="flashcard-img" src="{{ $data->vocabulary_image_link }}">
										</div> 
										<div class="back" id="flashcardBack">
											<p id="vocab">{!! $data->vocabulary !!}</p>
											<p id="pronunciation">{!! $data->pronunciation !!}</p>
										</div> 
									</div>
									<audio id="t-rex-roar" controls
						        src="{{ $data->vocabulary_audio_link }}">
						        Your browser does not support the <code>audio</code> element.
						    	</audio>
								</div>
								@endforeach
							</div>
						</div>
						<div class="tab-pane fade" id="tab2success">
							<div class="global-activity-guide">
								<div class="icon"></div>
								<div class="text">単語にマッチングする画像をドラッグしてください。</div>
							</div>
							<div class="col-md-12" id="tab2">
								<div id="word-container" class="global-float-left ui-droppable col-md-3">
									@foreach ($vocabulary as $data)
									<div class="word ui-draggable">{!! $data->vocabulary !!}</div>
									@endforeach
								</div>
							<div id="picture-container" class=" global-float-left col-md-9">
								<div class="tab2-picture-block">
									@foreach ($vocabulary as $data)
									<div class="picture-outer global-float-left ui-droppable col-xs-4" id="imgContainer">
										<img id="dragImg" src="{{ $data->vocabulary_image_link }}">
										<div class="caption-background">
											<div class="caption-text ui-draggable"></div>
										</div>
									</div>
									@endforeach
								</div>
							</div>
								<div id="tab2-picture-block-1" class="tab2-picture-block" style="display: none;">
									<div class="picture-outer global-float-left ui-droppable">
										<img class="picture" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s3(1).jpg" style="height: 135px;">
										<div class="caption-background">
											<div class="caption-text ui-draggable"></div>
										</div>
									</div>
									<div class="picture-outer global-float-left ui-droppable">
										<img class="picture" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s6.jpg" style="height: 135px;">
										<div class="caption-background">
											<div class="caption-text ui-draggable"></div>
										</div>
									</div>
									<div class="picture-outer global-float-left ui-droppable">
										<img class="picture" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s12.jpg" style="height: 135px;">
										<div class="caption-background">
											<div class="caption-text ui-draggable"></div>
										</div>
									</div>
									<div class="picture-outer global-float-left ui-droppable">
										<img class="picture" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s5.jpg" style="height: 135px;">
										<div class="caption-background">
											<div class="caption-text ui-draggable"></div>
										</div>
									</div>
									<div class="navigator">
										<div class="result global-float-left">
											Chính xác:
											<span class="number-correct"></span>
											/
											<span class="total-items-each-block"></span>
										</div>
										<div class="btn-redo global-float-right"></div>
										<div class="btn-answer global-float-right"></div>
										<div class="btn-check global-float-right"></div>
										<div class="next-group global-float-right">
											Sau
											<span class="arrow-next global-float-right">&gt;</span>
										</div>
										<div class="global-float-right splitNextPrev"></div>
										<div class="prev-group global-float-right">
											<span class="arrow-prev">&lt;</span>
											Trước
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="tab3success">
							<div class="global-activity-guide">
								<div class="icon"></div>
								<div class="text">単語を入力してください。</div>
							</div>
							<div id="tab3-result-container" class="global-float-left">
								<div class="result-title-bar global-orange-bar">Kết quả</div>
								<div class="result-content-outer">
									<div class="remain">
										<div class="text">Còn lại</div>
										<div class="number global-float-right"></div>
									</div>
									<div class="correct">
										<div class="text">Chính xác</div>
										<div class="number global-float-right"></div>
									</div>
									<div class="incorrect">
										<div class="text">Không chính xác</div>
										<div class="number global-float-right"></div>
									</div>
								</div>
							</div>
							<div id="tab3-main-board" class=" global-float-left">
								<div class="img-wrapper"></div>
								<div class="user-input">
									<input class="textbox global-float-left" title="Ấn enter để kiểm tra đáp án" />
									<div class="listen-again global-float-left" title="Nghe lại (Ctrl + Enter)"></div>
									<a class="show-answer" onclick="void(0)" title="Xem đáp án"></a>
								</div>
							</div>
							<div class="global-clear-both"></div>
						</div>
						<!-- <div class="tab-pane fade" id="tab4success">Success 4</div>
						<div class="tab-pane fade" id="tab5success">Success 5</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
	//flashcard flip
	$(".card").flip();

	//play audio
	<?php 
	$data = [];
	foreach ($vocabulary as $key=>$value) {
		$data[$key]['vocabulary_id'] = $value->vocabulary_id;
		$data[$key]['lesson_id'] = $value->lesson_id;
		$data[$key]['vocabulary'] = $value->vocabulary;
		$data[$key]['pronunciation'] = $value->pronunciation;
		$data[$key]['vocabulary_image_link'] = $value->vocabulary_image_link;
		$data[$key]['vocabulary_audio_link'] = $value->vocabulary_audio_link;
	}
	?>;
	var js_data = '<?php echo json_encode($vocabulary); ?>';
	var js_obj_data = JSON.parse(js_data );

	$(function() {
  $(document).on("click", ".btn", function() {
    alert($(this).attr("id"))
  });

});

	/*function play(){
		var i;
		for (i = 0; i < js_obj_data.length - 1; i++) { 
			var str1 = "audio-";
		var str2 = js_obj_data[i].vocabulary;
		var id = str1.concat(str2);
		var playPromise = document.getElementById(id).play();
		if (playPromise !== undefined) {
			  playPromise.then(function() {
			  }).catch(function(error) {
			  });
			}
	}
}*/

</script>
@endsection
@section('styles')
<style type="text/css">
	#flashcard-img {
		width: 100%;
		height: 100%;
	}
</style>
@stop