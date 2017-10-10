@extends('user.shared.master') 
@section('content') 
<div class="row">
    <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h3>Vocabulary Topic</h3>
    </article>
    
    @foreach($topics as $topic)
        <div class="col-md-12">
            <div class="col-xs-12 col-sm-1 col-md-1 text-center">
                <h5>トピック</h5>
                <h1>$i++</h1>
            </div> 
            <div class="col-xs-12 col-sm-2 col-md-2 text-center">
                <a href="#">
                    <img src="{{ $topic->topic_image_link }}" class="img-responsive img-box img-thumbnail" style="width: 140px; height: 100px;"> 
                </a>
            </div> 
            <div class="col-xs-12 col-sm-7 col-md-7">
                <h4><a href="#">{!! $topic->topic_title !!}</a></h4>
                <p>{!! $topic->topic_content !!}</p>
            </div> 
            <div class="col-xs-12 col-sm-1 col-md-1 text-center">
                <a href="#">
                    <h4>勉強</h4>
                </a>
            </div>
            <div class="col-xs-12 col-sm-1 col-md-1 text-center">
                <a href="#">
                    <h4>詳細</h4>
                </a>
            </div> 

        </div>
        <hr />
    @endforeach
</div>
<hr>

@endsection
