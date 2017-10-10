@extends('user.shared.master') 
@section('content') 
<div class="row">
	<div class="col-md-12">
		<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h3>Vocabulary Level</h3>
		</article>
		@foreach($levels as $level)
			<div class="col-xs-3 col-md-3 text-center">
				<a href="{!! action('User\VocabularyController@get_topic_list', $level->level_id) !!}">
					<img src="{{ $level->level_image_link }}" alt="" class="card-img-top img-fluid" />
					<div class="card card-block">
						<h4 class="card-title">{{ $level->level_name }}</h4>
					</div>
				</a>
			</div>
		@endforeach
	</div>
</div>
@endsection
