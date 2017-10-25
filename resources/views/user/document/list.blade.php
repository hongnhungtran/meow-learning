@extends('user.shared.master') 
@section('content') 
	<div class="row">
		<div class="col-md-12">
			<div id="search-box">
				<div class="search-category-box dropdown">
					<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Chuyên mục
						<div class="caret-box">
							<span class="caret"></span>
						</div>
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						<li>
							<a href="/tai-lieu/tu-vung-tieng-anh" class="navbar-list-item"> Từ vựng tiếng Anh </a>
						</li>
						<li>
							<a href="/tai-lieu/phan-mem-tieng-anh" class="navbar-list-item"> Phần mềm tiếng Anh </a>
						</li>
						<li>
							<a href="/tai-lieu/luyen-nghe-tieng-anh" class="navbar-list-item"> Luyện nghe tiếng Anh </a>
						</li>
						<li>
							<a href="/tai-lieu/phat-am-tieng-anh" class="navbar-list-item"> Phát âm tiếng Anh </a>
						</li>
						<li>
							<a href="/tai-lieu/ngu-phap-tieng-anh" class="navbar-list-item"> Ngữ pháp tiếng Anh </a>
						</li>
						<li>
							<a href="/tai-lieu/luyen-doc-tieng-anh" class="navbar-list-item"> Luyện đọc tiếng Anh </a>
						</li>
						<li>
							<a href="/tai-lieu/luyen-viet-tieng-anh" class="navbar-list-item"> Luyện viết tiếng Anh </a>
						</li>
						<li>
							<a href="/tai-lieu/luyen-thi-toeic-ielts-toefl" class="navbar-list-item"> Luyện thi TOEIC, IELTS, TOEFL </a>
						</li>
						<li>
							<a href="/tai-lieu/bi-quyet-hoc-tieng-anh" class="navbar-list-item"> Bí quyết học tiếng Anh </a>
						</li>
					</ul>
				</div>
				<div class="search-keyword-box">
					<form method="get">
						<input type="text" class="form-control" id="keyword" name="keyword" placeholder="Tìm kiếm tài liệu..." value="">
						<div class="search-icon-box">
						<i class="fa fa-search" aria-hidden="true"></i>
					</div>
					</form>
				</div>
			</div>
			<!-- search-box -->
			<div id="main-content-box">
				<div class="navbar-left-wrapper">
					<div class="navbar-left-box">
						<div class="navbar-title">Danh mục tài liệu</div>
						<div class="navbar-list">
							<a href="/tai-lieu/tu-vung-tieng-anh" class="navbar-list-item"> Từ vựng tiếng Anh </a>
							<a href="/tai-lieu/phan-mem-tieng-anh" class="navbar-list-item"> Phần mềm tiếng Anh </a>
							<a href="/tai-lieu/luyen-nghe-tieng-anh" class="navbar-list-item"> Luyện nghe tiếng Anh </a>
							<a href="/tai-lieu/phat-am-tieng-anh" class="navbar-list-item"> Phát âm tiếng Anh </a>
							<a href="/tai-lieu/ngu-phap-tieng-anh" class="navbar-list-item"> Ngữ pháp tiếng Anh </a>
							<a href="/tai-lieu/luyen-doc-tieng-anh" class="navbar-list-item"> Luyện đọc tiếng Anh </a>
							<a href="/tai-lieu/luyen-viet-tieng-anh" class="navbar-list-item"> Luyện viết tiếng Anh </a>
							<a href="/tai-lieu/luyen-thi-toeic-ielts-toefl" class="navbar-list-item"> Luyện thi TOEIC, IELTS, TOEFL </a>
							<a href="/tai-lieu/bi-quyet-hoc-tieng-anh" class="navbar-list-item"> Bí quyết học tiếng Anh </a>
						</div>
					</div>
					<div class="navbar-left-box">
						<div class="navbar-title">Loại tài liệu</div>
						<div class="navbar-list">
							<a class="navbar-list-item" href="/loai-tai-lieu/ebook">Ebooks</a>
							<a class="navbar-list-item" href="/loai-tai-lieu/news">Tạp chí</a>
							<a class="navbar-list-item" href="/loai-tai-lieu/collection">CD, DVD, bộ sưu tập…</a>
							<a class="navbar-list-item" href="/loai-tai-lieu/media">MP3, video</a>
							<a class="navbar-list-item" href="/loai-tai-lieu/image">Ảnh, infographics</a>
							<a class="navbar-list-item" href="/loai-tai-lieu/quiz">Quiz/Game</a>
							<a class="navbar-list-item" href="/loai-tai-lieu/toolkit">Toolkit…</a>
						</div>
					</div>
				</div>

				<div class="main-content-right-box">
					<div class="download-list-box">
						<div class="download-list-block">
							<div class="download-item-detail-wrapper">
								<a href="/tai-lieu/childrens-book-goodnight-moon-67.html" class="download-item-detail-box">
									<div class="download-item-detail-img-box">
										<img alt="download item image" class="download-item-detail-img"
										src="https://media.ucan.vn/upload/userfiles/blog/04082017/240x135_CoverMoon.jpg" />
									</div>
									<div class="download-item-detail">
										<div class="download-item-detail-title">Children's Book: Goodnight Moon</div>
										<p class="download-item-detail-type">Ebooks</p>
									</div>
								</a>
							</div>
							<div class="download-item-detail-wrapper">
								<a href="/tai-lieu/childrens-book-ngay-toi-te-cua-alexander-66.html" class="download-item-detail-box">
									<div class="download-item-detail-img-box">
										<img alt="download item image" class="download-item-detail-img"
										src="https://media.ucan.vn/upload/userfiles/blog/04082017/240x135_CoverAlex.jpg" />
									</div>
									<div class="download-item-detail">
										<div class="download-item-detail-title">Children's book: Ngày tồi tệ của Alexander</div>
										<p class="download-item-detail-type">Ebooks</p>
									</div>
								</a>
							</div>
							<div class="download-item-detail-wrapper">
								<a href="/tai-lieu/audiobook-the-martian-nguoi-ve-tu-sao-hoa-65.html" class="download-item-detail-box">
									<div class="download-item-detail-img-box">
										<img alt="download item image" class="download-item-detail-img"
										src="https://media.ucan.vn/upload/userfiles/blog/04082017/240x135_06245804082017_CoverMar.jpg" />
									</div>
									<div class="download-item-detail">
										<div class="download-item-detail-title">Audiobook: The Martian - Người về từ Sao Hỏa</div>
										<p class="download-item-detail-type">MP3, video</p>
									</div>
								</a>
							</div>
						</div>
						<div class="download-list-block">
							<div class="download-item-detail-wrapper">
								<a href="/tai-lieu/ky-nang-nghe-trong-ielts-64.html" class="download-item-detail-box">
									<div class="download-item-detail-img-box">
										<img alt="download item image" class="download-item-detail-img"
										src="https://media.ucan.vn/upload/userfiles/blog/02082017/240x135_CoverCollinListening.jpg" />
									</div>
									<div class="download-item-detail">
										<div class="download-item-detail-title">Kỹ Năng Nghe trong IELTS</div>
										<p class="download-item-detail-type">Ebooks</p>
									</div>
								</a>
							</div>
							<div class="download-item-detail-wrapper">
								<a href="/tai-lieu/ky-nang-viet-trong-ielts-63.html" class="download-item-detail-box">
									<div class="download-item-detail-img-box">
										<img alt="download item image" class="download-item-detail-img"
										src="https://media.ucan.vn/upload/userfiles/blog/02082017/240x135_CoverCollinWriting.jpg" />
									</div>
									<div class="download-item-detail">
										<div class="download-item-detail-title">Kỹ Năng Viết Trong IELTS</div>
										<p class="download-item-detail-type">Ebooks</p>
									</div>
								</a>
							</div>
							<div class="download-item-detail-wrapper">
								<a href="/tai-lieu/ky-nang-doc-trong-ielts-62.html" class="download-item-detail-box">
									<div class="download-item-detail-img-box">
										<img alt="download item image" class="download-item-detail-img"
										src="https://media.ucan.vn/upload/userfiles/blog/02082017/240x135_CoverCollinReading.jpg" />
									</div>
									<div class="download-item-detail">
										<div class="download-item-detail-title">Kỹ năng Đọc Trong IELTS</div>
										<p class="download-item-detail-type">Ebooks</p>
									</div>
								</a>
							</div>
						</div>
						<div class="download-list-block">
							<div class="download-item-detail-wrapper">
								<a href="/tai-lieu/ky-nang-noi-trong-ielts-61.html" class="download-item-detail-box">
									<div class="download-item-detail-img-box">
										<img alt="download item image" class="download-item-detail-img"
										src="https://media.ucan.vn/upload/userfiles/blog/31072017/240x135_COverCollinSpeaking.jpg" />
									</div>
									<div class="download-item-detail">
										<div class="download-item-detail-title">Kỹ Năng Nói Trong IELTS</div>
										<p class="download-item-detail-type">Ebooks</p>
									</div>
								</a>
							</div>
							<div class="download-item-detail-wrapper">
								<a href="/tai-lieu/tu-vung-danh-cho-ielts-60.html" class="download-item-detail-box">
									<div class="download-item-detail-img-box">
										<img alt="download item image" class="download-item-detail-img"
										src="https://media.ucan.vn/upload/userfiles/blog/31072017/240x135_COverCollinVocab.jpg" />
									</div>
									<div class="download-item-detail">
										<div class="download-item-detail-title">Từ Vựng dành cho IELTS</div>
										<p class="download-item-detail-type">Ebooks</p>
									</div>
								</a>
							</div>
							<div class="download-item-detail-wrapper">
								<a href="/tai-lieu/sach-toefl-the-official-guide-to-the-toefl-test-4th-edition-59.html" class="download-item-detail-box">
									<div class="download-item-detail-img-box">
										<img alt="download item image" class="download-item-detail-img"
										src="https://media.ucan.vn/upload/userfiles/blog/31072017/240x135_08534431072017_COVERtoefl.jpg" />
									</div>
									<div class="download-item-detail">
										<div class="download-item-detail-title">Sách TOEFL: The Official Guide to the TOEFL Test ...</div>
										<p class="download-item-detail-type">Ebooks</p>
									</div>
								</a>
							</div>
						</div>
						<div class="download-list-block">
							<div class="download-item-detail-wrapper">
								<a href="/tai-lieu/y-tuong-cho-cac-chu-de-trong-ki-thi-ielts-writing-task-2-58.html" class="download-item-detail-box">
									<div class="download-item-detail-img-box">
										<img alt="download item image" class="download-item-detail-img"
										src="https://media.ucan.vn/upload/userfiles/blog/31072017/240x135_Coversmt.jpg" />
									</div>
									<div class="download-item-detail">
										<div class="download-item-detail-title">Ý tưởng cho các chủ đề trong kì thi ...</div>
										<p class="download-item-detail-type">Ebooks</p>
									</div>
								</a>
							</div>
							<div class="download-item-detail-wrapper">
								<a href="/tai-lieu/sach-luyen-thi-ielts-exam-essentials-practice-tests-ielts-2-57.html" class="download-item-detail-box">
									<div class="download-item-detail-img-box">
										<img alt="download item image" class="download-item-detail-img"
										src="https://media.ucan.vn/upload/userfiles/blog/31072017/240x135_Coverexam2.jpg" />
									</div>
									<div class="download-item-detail">
										<div class="download-item-detail-title">Sách luyện thi IELTS: Exam Essentials Practice ...</div>
										<p class="download-item-detail-type">Ebooks</p>
									</div>
								</a>
							</div>
							<div class="download-item-detail-wrapper">
								<a href="/tai-lieu/sach-luyen-thi-ielts-exam-essentials-practice-tests-ielts-1-56.html" class="download-item-detail-box">
									<div class="download-item-detail-img-box">
										<img alt="download item image" class="download-item-detail-img"
										src="https://media.ucan.vn/upload/userfiles/blog/30072017/240x135_Coverexamtest1.jpg" />
									</div>
									<div class="download-item-detail">
										<div class="download-item-detail-title">Sách luyện thi IELTS: Exam Essentials Practice ...</div>
										<p class="download-item-detail-type">Ebooks</p>
									</div>
								</a>
							</div>
						</div>
						<div class="clear-both"></div>
					</div>
				</div>
			</div>
			<div id="download-pagination-box">
				<div class="download-pagination"></div>
				<div id="download-pagination">
					<span class="pagination-disabled">Đầu | </span>
					<span class="pagination-disabled">&laquo; Trước</span>
					&nbsp;&nbsp;
					<a class="page-link current-link" href="/resource/download/index/page/1">1</a>
					&nbsp;&nbsp;
					<a class="page-link" href="/resource/download/index/page/2">2</a>
					&nbsp;&nbsp;
					<a class="page-link" href="/resource/download/index/page/3">3</a>
					&nbsp;&nbsp;
					<a class="page-link" href="/resource/download/index/page/4">4</a>
					&nbsp;&nbsp;
					<a class="pagination-navigation-link" href="/resource/download/index/page/2">Sau &raquo;</a>
					<a class="pagination-navigation-link" href="/resource/download/index/page/4">Cuối</a>
				</div>
			</div>
		</div>
	</div>
@endsection
