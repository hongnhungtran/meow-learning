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
	#dragImg {
		width: 100%;
		height: 100%;
	}
	#imgContainer {
		width: 200px;
	    height: 144px;
	    margin: 10px;
	}
	#board li {
  		list-style: none;
		 padding: 5px;
		 background: #f5f5f5;
		 border-radius: 5px;
		 margin: 0 0 5px;
	}
	#board ul {
  		border: 1px solid #ccc;
  		border-radius: 5px;
  		padding: 10px;
  		width: 30%;
  		margin: 0 0.5%;
  		display: inline-block;
  		vertical-align: top;
	}
	#board ul.over {
  		padding-bottom: 55px;
  		background: url('http://www.cufonfonts.com/makeImage.php?width=650&id=1026&size=35&d=y&text=Drop%20Here') center bottom no-repeat #ccc;
	}
	#board ul.over li {
	  background: #fff;
	}

	#board div h3 {
		display: inline-block; 
		width: 30%; 
		margin: 1%; 
		text-align: center;
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
								<div class="text">単語にマッチングするグループにドラッグしてください。</div>
							</div>
							<div class="col-md-12" id="tab2">
								<div id="board">
								    <div>
								      <h3>Word List</h3>
								      <h3>School</h3>
								      <h3>Weather</h3>
								    </div>
								    <ul id="todo">
								        <li id="item1" draggable="true">pen</li>
								        <li id="item2" draggable="true">rain</li>
								        <li id="item3" draggable="true">ruler</li>
								        <li id="item4" draggable="true">thunder</li>
								        <li id="item5" draggable="true">tornado</li>
								        <li id="item6" draggable="true">teacher</li>
								        <li id="item7" draggable="true">classroom</li>
								        <li id="item8" draggable="true">blackboard</li>

								    </ul>
								    <ul id="school">
								    </ul>
								    <ul id="weather">
								    </ul>
								</div>
								<button class="btn btn-info pull-right" onclick="doneButton()">Done</button>
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
	//<?php 
	//$data = [];
	//foreach ($vocabulary as $key=>$value) {
	//	$data[$key]['vocabulary_id'] = $value->vocabulary_id;
	//	$data[$key]['lesson_id'] = $value->lesson_id;
	//	$data[$key]['vocabulary'] = $value->vocabulary;
	//	$data[$key]['pronunciation'] = $value->pronunciation;
	//	$data[$key]['vocabulary_image_link'] = $value->vocabulary_image_link;
	//	$data[$key]['vocabulary_audio_link'] = $value->vocabulary_audio_link;
	//}
	//?>;
	//var js_data = '<?php echo json_encode($vocabulary); ?>';
	//var js_obj_data = JSON.parse(js_data );

	//$(function() {
  //$(document).on("click", ".btn", function() {
    //alert($(this).attr("id"))
  //});

//});
$(document).ready(function(){
  $('li').bind('dragstart', function(event) {
    event.originalEvent.dataTransfer.setData("text/plain",  event.target.getAttribute('id'));
  });

  $('ul').bind('dragover', function(event) {
    event.preventDefault();
  });

  $('ul').bind('dragenter', function(event) {
    $(this).addClass("over");
  });

  $('ul').bind('dragleave drop', function(event) {
    $(this).removeClass("over");
  });

  $('li').bind('drop', function(event) {
    return false;
  });

  $('ul').bind('drop', function(event) {
    var listitem = event.originalEvent.dataTransfer.getData("text/plain");
    event.target.appendChild(document.getElementById(listitem));
    event.preventDefault();
  });
});

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