@extends('user.shared.master')
@section('content')
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
							<div class="thumb-outer">
								<div class="thumb-block-0">
									<img class="thumb selected-thumb" title="runner bean" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s9.jpg">
									<img class="thumb" title="cauliflower" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s7.jpg">
									<img class="thumb" title="aubergine" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s4.jpg">
									<img class="thumb" title="garlic " src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s1(1).jpg">
									<img class="thumb" title="onion" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s2(1).jpg">
									<img class="thumb" title="radish" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s10.jpg">
									<img class="thumb" title="mushroom" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s8.jpg">
									<img class="thumb" title="cucumber" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s11.jpg">
									<img class="thumb" title="cabbage" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s3(1).jpg">
									<img class="thumb" title="receipt " src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s6.jpg">
									<img class="thumb" title="lettuce" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s12.jpg">
									<img class="thumb" title="celery" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s5.jpg">
								</div>
							</div>
							<div id="flashcard-area">
								<div class="global-float-left flashcard-outer">
									<img class="img-main img-main-active" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s9.jpg"
									title="Bấm để lật thẻ" style="display: inline;">

									<div class="img-caption">runner bean</div>
									<div class="word-meaning" title="Nhấp chuột để lật thẻ">
										<div class="title-flip-outer">
											<span class="title-flip"></span>
										</div>
										<div class="word-phonetic"></div>
										<div class="vietnamese-meaning"></div>
										<div class="english-meaning">
											<div class="subject">Nghĩa Tiếng Anh</div>
											<div class="english-content"></div>
										</div>
										<div class="example">
											<span class="subject">Ví dụ</span>
											:
											<span class="example-content"></span>
										</div>
									</div>
									<div class="button-list global-float-right">
										<div class="record" title="Ghi âm"></div>
										<div class="play" title="Nghe lại thu âm"></div>
										<div class="stop" title="Dừng thu âm"></div>
										<div class="split"></div>
										<div class="speaker" title="Nghe từ"></div>
										<div class="global-float-left flip-card" title="Lật thẻ để xem thêm thông tin"></div>
										<div class="split"></div>
										<div class="btn-next" title="Tranh sau" style="opacity: 1; cursor: pointer;"></div>
										<div class="btn-prev" title="Tranh trước" style="cursor: default; opacity: 0.2;"></div>
										<div class="global-clear-both"></div>
									</div>
								</div>
							</div>

						</div>
						<div class="tab-pane fade" id="tab2success">
							<div class="global-activity-guide">
								<div class="icon"></div>
								<div class="text">単語にマッチングする画像をドラッグしてください。</div>
							</div>
							<div id="word-container" class="global-float-left ui-droppable">
								<div id="tab2-word-block-0">
									<div class="word ui-draggable">onion</div>
									<div class="word ui-draggable">cucumber</div>
									<div class="word ui-draggable">garlic</div>
									<div class="word ui-draggable">radish</div>
									<div class="word ui-draggable">runner bean</div>
									<div class="word ui-draggable">cauliflower</div>
									<div class="word ui-draggable">aubergine</div>
									<div class="word ui-draggable">mushroom</div>
								</div>
								<div id="tab2-word-block-1" style="display: none;">
									<div class="word ui-draggable">lettuce</div>
									<div class="word ui-draggable">celery</div>
									<div class="word ui-draggable">receipt</div>
									<div class="word ui-draggable">cabbage</div>
								</div>
							</div>
							<div id="picture-container" class=" global-float-left">
								<div id="tab2-picture-block-0" class="tab2-picture-block">
									<div class="picture-outer global-float-left ui-droppable">
										<img class="picture" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s9.jpg" style="height: 135px;">
										<div class="caption-background">
											<div class="caption-text ui-draggable"></div>
										</div>
									</div>
									<div class="picture-outer global-float-left ui-droppable">
										<img class="picture" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s1(1).jpg" style="height: 135px;">
										<div class="caption-background">
											<div class="caption-text ui-draggable"></div>
										</div>
									</div>
									<div class="picture-outer global-float-left ui-droppable">
										<img class="picture" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s10.jpg" style="height: 135px;">
										<div class="caption-background">
											<div class="caption-text ui-draggable"></div>
										</div>
									</div>
									<div class="picture-outer global-float-left ui-droppable">
										<img class="picture" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s11.jpg" style="height: 135px;">
										<div class="caption-background">
											<div class="caption-text ui-draggable"></div>
										</div>
									</div>
									<div class="picture-outer global-float-left ui-droppable">
										<img class="picture" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s8.jpg" style="height: 135px;">
										<div class="caption-background">
											<div class="caption-text ui-draggable"></div>
										</div>
									</div>
									<div class="picture-outer global-float-left ui-droppable">
										<img class="picture" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s2(1).jpg" style="height: 135px;">
										<div class="caption-background">
											<div class="caption-text ui-draggable"></div>
										</div>
									</div>
									<div class="picture-outer global-float-left ui-droppable">
										<img class="picture" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s7.jpg" style="height: 135px;">
										<div class="caption-background">
											<div class="caption-text ui-draggable"></div>
										</div>
									</div>
									<div class="picture-outer global-float-left ui-droppable">
										<img class="picture" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/000a/s4.jpg" style="height: 135px;">
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
										<div class="next-group global-float-right" style="cursor: pointer;">
											Sau
											<span class="arrow-next global-float-right">&gt;</span>
										</div>
										<div class="global-float-right splitNextPrev"></div>
										<div class="prev-group global-float-right" style="opacity: 0.2; cursor: default;">
											<span class="arrow-prev">&lt;</span>
											Trước
										</div>
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
<script>
	$(document).ready(
		function() {
			$(".sortable").sortable();
			$(".sortable").disableSelection();

			$(".sortable").sortable(
			{
				update : function(ev, ui) {
					localStorage.updateArray = $(".sortable")
					.sortable("toArray").join(",");
				}
			});

			if (localStorage.updateArray !== undefined) {
				var updateValue = localStorage.updateArray.split(",")
				.reverse();
				$.each(updateValue, function(index, value) {
					$('#' + value).prependTo(".sortable");
				});
			}
		});
	</script>
