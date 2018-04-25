<div class="row" id="menu">
	<div class="col-md-12">
		<div class="menu">
			<ul>
				<li><a href="{{route('user-home')}}" class="active"> ホーム </a></li>
				<li>
					<a href="#"> コース </a>
					<ul>
						<li class="submenu"><a href="{{ route('vocabulary-level') }}">単語コース</a></li>
						<li class="submenu"><a href="{{ route('listening-level') }}">リスニングコース</a></li>
						<li class="submenu"><a href="{{ route('speaking-level') }}">スピーキングコース</a></li>
						<li class="submenu"><a href="{{ route('reading-level') }}">レディングコース</a></li>
						<li class="submenu"><a href="{{ route('writing-level') }}">ライティングコース</a></li>
						<li class="submenu"><a href="#">文法コース</a></li>
					</ul>
				</li>
				<li>
					<a href="#">試験学習</a>
					<ul>
						<li class="submenu"><a href="{{ route('toeic-level') }}">TOEICコース</a></li>
						<li class="submenu"><a href="{{ route('toefl-level') }}">TOEFLコース</a></li>
						<li class="submenu"><a href="{{ route('eilts-level') }}">IELTSコース</a></li>
						<li class="submenu"><a href="{{ route('common-test-level') }}">総合テストコース</a></li>
					</ul>
				</li>
				<li>
					<a href="{{ route('document-list') }}"> 資料 </a>
				</li>
				<li>
					<a href="#">その他</a>
					<ul>
						<li class="submenu"><a href="#">物語＆詩</a></li>
						<li class="submenu"><a href="#">ドラマで学習</a></li>
						<li class="submenu"><a href="#">歌で学習</a></li>
						<li class="submenu"><a href="#">ゲーム</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>