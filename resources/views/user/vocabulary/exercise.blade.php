@extends('user.shared.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel with-nav-tabs panel-success">
					<div class="panel-heading">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#tab1success" data-toggle="tab">Exercise 1</a>
							</li>
							<li>
								<a href="#tab2success" data-toggle="tab">Exercise 2</a>
							</li>
							<li>
								<a href="#tab3success" data-toggle="tab">Exercise 3</a>
							</li>
							<li>
								<a href="#tab4success" data-toggle="tab">Exercise 4</a>
							</li>
							<li>
								<a href="#tab5success" data-toggle="tab">Exercise 5</a>
							</li>
						</ul>
					</div>
					<div class="panel-body">
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab1success">
								<ul>
									<li>
										<div class="card">
											<div class="front">
												<img class="thumb" title="cucumber" src="image/vocabulary/s11.jpg">
											</div>
											<div class="back">cucumber</div>
										</div>
									</li>
									<li>
										<div class="card">
											<div class="front">
												<img class="thumb" title="mushroom" src="image/vocabulary/s8.jpg">
											</div>
											<div class="back">mushroom</div>
										</div>
									</li>
									<li>
										<div class="card">
											<div class="front">
												<img class="thumb" title="radish" src="image/vocabulary/s10.jpg">
											</div>
											<div class="back">radish</div>
										</div>
									</li>
									<li>
										<div class="card">
											<div class="front">
												<img class="thumb selected-thumb" title="runner bean" src="image/vocabulary/s9.jpg">
											</div>
											<div class="back">runner bean</div>
										</div>
									</li>
									<li>
										<div class="card">
											<div class="front">
												<img class="thumb" title="cauliflower" src="image/vocabulary/s7.jpg">
											</div>
											<div class="back">cauliflower</div>
										</div>
									</li>
									<li>
										<div class="card">
											<div class="front">
												<img class="thumb" title="aubergine" src="image/vocabulary/s4.jpg">
											</div>
											<div class="back">aubergine</div>
										</div>
									</li>
									<li>
										<div class="card">
											<div class="front">
												<img class="thumb" title="receipt " src="image/vocabulary/s6.jpg">
											</div>
											<div class="back">receipt</div>
										</div>
									</li>
									<li>
										<div class="card">
											<div class="front">
												<img class="thumb" title="cabbage" src="image/vocabulary/s3(1).jpg">
											</div>
											<div class="back">cabbage</div>
										</div>
									</li>
									<li>
										<div class="card">
											<div class="front">
												<img class="thumb" title="garlic " src="image/vocabulary/s1(1).jpg">
											</div>
											<div class="back">garlic</div>
										</div>
									</li>
									<li>
										<div class="card">
											<div class="front">
												<img class="thumb" title="celery" src="image/vocabulary/s5.jpg">
											</div>
											<div class="back">celery</div>
										</div>
									</li>
									<li>
										<div class="card">
											<div class="front">
												<img class="thumb" title="onion" src="image/vocabulary/s2(1).jpg">
											</div>
											<div class="back">onion</div>
										</div>
									</li>
									<li>
										<div class="card">
											<div class="front">
												<img class="thumb" title="lettuce" src="image/vocabulary/s12.jpg">
											</div>
											<div class="back">lettuce</div>
										</div>
									</li>
								</ul>
							</div>

							<div class="tab-pane fade" id="tab2success">
								<div class="drag-word col-md-2">
									<div draggable="true">mushroom</div>
									<div draggable="true">celery</div>
									<div draggable="true">runner bean</div>
									<div draggable="true">lettuce</div>
									<div draggable="true">receipt</div>
									<div draggable="true">radish</div>
									<div draggable="true">garlic</div>
									<div draggable="true">cabbage</div>
									<div draggable="true">cauliflower</div>
									<div draggable="true">aubergine</div>
									<div draggable="true">cucumber</div>
									<div draggable="true">onion</div>
								</div>
								<div class="drop-area sortable col-md-10">
									<div class="match-image col-md-3">
										<img class="thumb selected-thumb" title="runner bean" src="image/vocabulary/s9.jpg">
									</div>
									<div class="match-image col-md-3">
										<img class="thumb" title="cauliflower" src="image/vocabulary/s7.jpg">
									</div>
									<div class="match-image col-md-3">
										<img class="thumb" title="aubergine" src="image/vocabulary/s4.jpg">
									</div>
									<div class="match-image col-md-3">
										<img class="thumb" title="cabbage" src="image/vocabulary/s3(1).jpg">
									</div>
									<div class="match-image col-md-3">
										<img class="thumb" title="garlic " src="image/vocabulary/s1(1).jpg">
									</div>
									<div class="match-image col-md-3">
										<img class="thumb" title="celery" src="image/vocabulary/s5.jpg">
									</div>
									<div class="match-image col-md-3">
										<img class="thumb" title="onion" src="image/vocabulary/s2(1).jpg">
									</div>
									<div class="match-image col-md-3">
										<img class="thumb" title="lettuce" src="image/vocabulary/s12.jpg">
									</div>
									<div class="match-image col-md-3">
										<img class="thumb" title="cucumber" src="image/vocabulary/s11.jpg">
									</div>
									<div class="match-image col-md-3">
										<img class="thumb" title="mushroom" src="image/vocabulary/s8.jpg">
									</div>
									<div class="match-image col-md-3">
										<img class="thumb" title="radish" src="image/vocabulary/s10.jpg">
									</div>
									<div class="match-image col-md-3">
										<img class="thumb" title="receipt " src="image/vocabulary/s6.jpg">
									</div>
								</div>
							</div>

							<div class="tab-pane fade" id="tab3success">
								<div class="drop-area sortable col-md-10">
									<div class="listen-image col-md-3">
										<img class="thumb selected-thumb" title="runner bean" src="image/vocabulary/s9.jpg">
										<h4 class="image-label">runner bean</h4>
									</div>
									<div class="listen-image col-md-3">
										<img class="thumb" title="cauliflower" src="image/vocabulary/s7.jpg">
										<h4 class="image-label">cauliflower</h4>
									</div>
									<div class="listen-image col-md-3">
										<img class="thumb" title="aubergine" src="image/vocabulary/s4.jpg">
										<h4 class="image-label">aubergine</h4>
									</div>
									<div class="listen-image col-md-3">
										<img class="thumb" title="cabbage" src="image/vocabulary/s3(1).jpg">
										<h4 class="image-label">cabbage</h4>
									</div>
									<div class="listen-image col-md-3">
										<img class="thumb" title="garlic " src="image/vocabulary/s1(1).jpg">
										<h4 class="image-label">garlic</h4>
									</div>
									<div class="listen-image col-md-3">
										<img class="thumb" title="celery" src="image/vocabulary/s5.jpg">
										<h4 class="image-label">celery</h4>
									</div>
									<div class="listen-image col-md-3">
										<img class="thumb" title="onion" src="image/vocabulary/s2(1).jpg">
										<h4 class="image-label">onion</h4>
									</div>
									<div class="listen-image col-md-3">
										<img class="thumb" title="lettuce" src="image/vocabulary/s12.jpg">
										<h4 class="image-label">lettuce</h4>
									</div>
									<div class="listen-image col-md-3">
										<img class="thumb" title="cucumber" src="image/vocabulary/s11.jpg">
										<h4 class="image-label">cucumber</h4>
									</div>
									<div class="listen-image col-md-3">
										<img class="thumb" title="mushroom" src="image/vocabulary/s8.jpg">
										<h4 class="image-label">mushroom</h4>
									</div>
									<div class="listen-image col-md-3">
										<img class="thumb" title="radish" src="image/vocabulary/s10.jpg">
										<h4 class="image-label">radish</h4>
									</div>
									<div class="listen-image col-md-3">
										<img class="thumb" title="receipt " src="image/vocabulary/s6.jpg">
										<h4 class="image-label">receipt</h4>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="tab4success">
 <div id="tab1-content"> 
                <div class="global-activity-guide">
                    <div class="icon"></div>
                    <div class="text">Bấm chọn hình thu nhỏ để xem cỡ chuẩn. Bấm vào ảnh lớn để lật thẻ xem chi tiết của từ.</div>
                </div>
                <div class="thumb-outer">
                    <div class="navigator">
                        <div class="prev-group global-float-left"><span class="arrow-prev">&lt;</span>Trước</div>
                        <div class="splitNextPrev"></div>
                        <div class="next-group global-float-left">Sau<span class="arrow-next global-float-right">&gt;</span></div>
                    </div>
                </div>

                <div id="flashcard-area">
                    <div class="global-float-left flashcard-outer">
                        <div class="img-caption"></div>
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
                                <span class="subject">Ví dụ</span>: 
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
                            <div class="btn-next" title="Tranh sau"></div>
                            <div class="btn-prev" title="Tranh trước"></div>
                            <div class="global-clear-both"></div>
                        </div>
                    </div>
                    <div class="hotkeys">
                        <span class="subject">alt+i</span>  :  <span class="content">Lật</span>  |   
                        <span class="subject">enter</span>  :  <span class="content">Nghe</span>  |   
                        <span class="subject">alt+r</span>  :  <span class="content">Ghi âm</span>  |   
                        <span class="subject">alt+s</span>  :  <span class="content">Kết thúc</span>  |   
                        <span class="subject">alt+p</span>  :  <span class="content">Bắt đầu</span>
                    </div>
                </div>
                <div class="global-clear-both"></div>
            </div> 
							</div>
							<div class="tab-pane fade" id="tab5success">Success 5</div>
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
