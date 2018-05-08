@extends('user.shared.master') 
@section('content')
<div class="row">
    <div id="front-content-box">
        <div id="front-content">
            <div id="cover-box">
                <img src="public/img/common/learn-english.jpg">
                <div id="cover-content">
                    <ul>
                        <li><i class="fa fa-check" aria-hidden="true"></i>50コースと500レッスン</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>20GB資料</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>400時間で会話</li>
                    </ul>
                </div>
            </div>
            <div id="hot-courses" class="featured-box">
                <div id="featured-box-header">
                    <h3 class="box-title d-block">人気コース</h3>
                    <a href="/khoa-hoc" class="featured-item-list-box-view-all">全て表示
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="featured-item-list-box">
                    @foreach ($popularity_course as $course)
                    <a href="{!! action('User\CourseController@get_level_list', $course->course_id) !!}" class="featured-item">
                        <div class="featured-item-img-box">
                            <img alt="course item image" class="featured-item-img" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/Bai-hoc/cover-3.jpg" />
                        </div>
                        <div class="featured-item-title">{{ $course->course_name }}</div>
                        <div class="ucan-rating rating-35"></div>
                        <p class="featured-item-summary">{{ $course->course_description }}</p>
                    </a>
                    @endforeach
                    <div class="clear-both"></div>
                </div>
            </div>
            <div id="hot-vipcourses" class="featured-box">
                <div id="featured-box-header">
                    <h3 class="box-title">外国人の先生と練習して会話スキルをアップしましょう</h3>
                    <a href="/giao-tiep" class="featured-item-list-box-view-all">全て表示
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="featured-item-list-box">
                        <a href="/giao-tiep/bai-24-giao-tiep-o-san-bay-870.html" class="featured-item">
                            <div class="featured-item-img-box">
                                <img alt="course item image" class="featured-item-img" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/library/hocvoitay/Topic37/37-communication-airport.jpg" />
                            </div>
                            <div class="featured-item-title">title</div>
                            <p class="featured-item-summary">description</p>

                        </a>
                        <a href="/giao-tiep/bai-24-giao-tiep-o-san-bay-870.html" class="featured-item">
                            <div class="featured-item-img-box">
                                <img alt="course item image" class="featured-item-img" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/library/hocvoitay/Topic37/37-communication-airport.jpg" />
                            </div>
                            <div class="featured-item-title">title</div>
                            <p class="featured-item-summary">description</p>

                        </a>
                        <a href="/giao-tiep/bai-24-giao-tiep-o-san-bay-870.html" class="featured-item">
                            <div class="featured-item-img-box">
                                <img alt="course item image" class="featured-item-img" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/library/hocvoitay/Topic37/37-communication-airport.jpg" />
                            </div>
                            <div class="featured-item-title">title</div>
                            <p class="featured-item-summary">description</p>

                        </a>
                        <a href="/giao-tiep/bai-24-giao-tiep-o-san-bay-870.html" class="featured-item">
                            <div class="featured-item-img-box">
                                <img alt="course item image" class="featured-item-img" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/library/hocvoitay/Topic37/37-communication-airport.jpg" />
                            </div>
                            <div class="featured-item-title">title</div>
                            <p class="featured-item-summary">description</p>

                        </a>
                        <a href="/giao-tiep/bai-24-giao-tiep-o-san-bay-870.html" class="featured-item">
                            <div class="featured-item-img-box">
                                <img alt="course item image" class="featured-item-img" src="https://media.ucan.vn/upload/userfiles/organizations/1/1/img/library/hocvoitay/Topic37/37-communication-airport.jpg" />
                            </div>
                            <div class="featured-item-title">title</div>
                            <p class="featured-item-summary">description</p>

                        </a>
                    <div class="clear-both"></div>
                </div>
            </div>
            <div id="hot-playlists" class="featured-box">
                <div id="featured-box-header">
                    <h3 class="box-title">動画で英語を聞きながら勉強する</h3>
                    <a href="/video" class="featured-item-list-box-view-all">全て表示
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                </div>
                
                <div class="featured-item-list-box">
                        <a href="#" class="featured-item">
                            <div class="featured-item-img-box">
                                <img alt="course item image" class="featured-item-img" src="https://media.ucan.vn/upload/userfiles/blog/14122016/LV1-77.jpg" />
                            </div>
                            <div class="featured-item-title">title</div>
                            <p class="featured-item-summary">description</p>
                            <div class="featured-item-statistics">
                                <div class="featured-item-statistics-views">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    1254239回勉強
                                </div>
                                <div class="featured-item-statistics-videos">97 動画</div>
                            </div>
                        </a>
                        <a href="#" class="featured-item">
                            <div class="featured-item-img-box">
                                <img alt="course item image" class="featured-item-img" src="https://media.ucan.vn/upload/userfiles/blog/14122016/LV1-77.jpg" />
                            </div>
                            <div class="featured-item-title">title</div>
                            <p class="featured-item-summary">description</p>
                            <div class="featured-item-statistics">
                                <div class="featured-item-statistics-views">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    1254239回勉強
                                </div>
                                <div class="featured-item-statistics-videos">97 動画</div>
                            </div>
                        </a>
                        <a href="#" class="featured-item">
                            <div class="featured-item-img-box">
                                <img alt="course item image" class="featured-item-img" src="https://media.ucan.vn/upload/userfiles/blog/14122016/LV1-77.jpg" />
                            </div>
                            <div class="featured-item-title">title</div>
                            <p class="featured-item-summary">description</p>
                            <div class="featured-item-statistics">
                                <div class="featured-item-statistics-views">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    1254239回勉強
                                </div>
                                <div class="featured-item-statistics-videos">97 動画</div>
                            </div>
                        </a>
                        <a href="#" class="featured-item">
                            <div class="featured-item-img-box">
                                <img alt="course item image" class="featured-item-img" src="https://media.ucan.vn/upload/userfiles/blog/14122016/LV1-77.jpg" />
                            </div>
                            <div class="featured-item-title">title</div>
                            <p class="featured-item-summary">description</p>
                            <div class="featured-item-statistics">
                                <div class="featured-item-statistics-views">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    1254239回勉強
                                </div>
                                <div class="featured-item-statistics-videos">97 動画</div>
                            </div>
                        </a>
                        <a href="#" class="featured-item">
                            <div class="featured-item-img-box">
                                <img alt="course item image" class="featured-item-img" src="https://media.ucan.vn/upload/userfiles/blog/14122016/LV1-77.jpg" />
                            </div>
                            <div class="featured-item-title">title</div>
                            <p class="featured-item-summary">description</p>
                            <div class="featured-item-statistics">
                                <div class="featured-item-statistics-views">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    1254239回勉強
                                </div>
                                <div class="featured-item-statistics-videos">97 動画</div>
                            </div>
                        </a>
                    <div class="clear-both"></div>
                </div>
            </div>
            <div id="hot-stories" class="featured-box">
                <div id="featured-box-header">
                    <h3 class="box-title">物語で英語を勉強しましょう</h3>
                    <a href="/truyen" class="featured-item-list-box-view-all">全て表示
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="featured-item-list-box">
                    <a href="#" class="featured-item">
                        <div class="featured-item-img-box">
                            <img alt="course item image" class="featured-item-img" src="#" />
                        </div>
                        <div class="featured-item-title">title</div>
                        <p class="featured-item-summary">description</p>
                    </a>
                    <a href="#" class="featured-item">
                        <div class="featured-item-img-box">
                            <img alt="course item image" class="featured-item-img" src="#" />
                        </div>
                        <div class="featured-item-title">title</div>
                        <p class="featured-item-summary">description</p>
                    </a>
                    <a href="#" class="featured-item">
                        <div class="featured-item-img-box">
                            <img alt="course item image" class="featured-item-img" src="#" />
                        </div>
                        <div class="featured-item-title">title</div>
                        <p class="featured-item-summary">description</p>
                    </a>
                    <a href="#" class="featured-item">
                        <div class="featured-item-img-box">
                            <img alt="course item image" class="featured-item-img" src="#" />
                        </div>
                        <div class="featured-item-title">title</div>
                        <p class="featured-item-summary">description</p>
                    </a>
                    <a href="#" class="featured-item">
                        <div class="featured-item-img-box">
                            <img alt="course item image" class="featured-item-img" src="#" />
                        </div>
                        <div class="featured-item-title">title</div>
                        <p class="featured-item-summary">description</p>
                    </a>
                    <div class="clear-both"></div>
                </div>
            </div>
            <div class="call-to-action-box"></div>
        </div>
    </div>
</div>
</div>
<div id="dict-wrapper">
    <div id="dict-navigator">
        <a href="javascript:void(0)" id="dict-button-close">×</a>
    </div>
    <div id="dict-iframe"></div>
</div>
<div id="dark-background"></div>

@endsection
