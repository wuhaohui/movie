@extends('app')

@section('main')
<div id="main">
    <div class="box newbox">
        <div class="shot update">
            <div class="title"><h3>最近更新</h3></div>
            <ul>
                @foreach($recent_movie as $key => $item)
                    <li><i @if($key < 3 ) class="n" @endif>{{ $key+1 }}</i><a href="/detail/{{ $item['movie_id'] }}" title="{{ $item['name'] }}"
                                                                              target="_blank">{{ $item['name'] }}&nbsp;15</a><span @if($item['is_new']) class="new" @endif>{{ $item['month'] }}-{{ $item['day'] }}</span></li>
                @endforeach
            </ul>
        </div>
        <div class="content">
            <div class="title"><h2>本周热播</h2></div>
            <div class="bd clearfix">
                <ul class="img-list dis clearfix">
                    <li><a class="play-img" href="/html/410/" title="性在有情粤语" target="_blank"><img
                                    src="images/57529757493b0.jpg" alt="性在有情粤语"/><i></i><em>更新至15集</em></a><b><a
                                    href="/html/410/" title="性在有情粤语" target="_blank">性在有情粤语</a></b>
                        <p>香港-网络剧</p></li>
                    <li><a class="play-img" href="/html/317/" title="奔跑吧兄弟第四季" target="_blank"><img
                                    src="images/5711b7b3312c7.jpg" alt="奔跑吧兄弟第四季"/><i></i><em>更新至10集</em></a><b><a
                                    href="/html/317/" title="奔跑吧兄弟第四季" target="_blank">奔跑吧兄弟第</a></b>
                        <p>大陆-综艺</p></li>
                    <li><a class="play-img" href="/html/402/" title="女不强大天不容" target="_blank"><img
                                    src="images/574edef6a16fb.jpg"
                                    alt="女不强大天不容"/><i></i><em>更新至31集</em></a><b><a href="/html/402/"
                                                                                   title="女不强大天不容"
                                                                                   target="_blank">女不强大天不</a></b>
                        <p>大陆-时装剧</p></li>
                    <li><a class="play-img" href="/html/383/" title="亲爱的翻译官" target="_blank"><img
                                    src="images/57447cd22e3d1.jpg" alt="亲爱的翻译官"/><i></i><em>更新至43集</em></a><b><a
                                    href="/html/383/" title="亲爱的翻译官" target="_blank">亲爱的翻译官</a></b>
                        <p>大陆-时装剧</p></li>
                    <li><a class="play-img" href="/html/401/" title="好先生" target="_blank"><img
                                    src="images/574ed7509f7bd.jpg" alt="好先生"/><i></i><em>更新至35集</em></a><b><a
                                    href="/html/401/" title="好先生" target="_blank">好先生</a></b>
                        <p>大陆-时装剧</p></li>
                    <li><a class="play-img" href="/html/395/" title="纯熟意外粤语" target="_blank"><img
                                    src="images/574c4494cf263.jpg" alt="纯熟意外粤语"/><i></i><em>更新至15集</em></a><b><a
                                    href="/html/395/" title="纯熟意外粤语" target="_blank">纯熟意外粤语</a></b>
                        <p>香港-警务剧</p></li>
                    <li><a class="play-img" href="/html/400/" title="纯熟意外国语" target="_blank"><img
                                    src="images/574e7f74b1d88.jpg" alt="纯熟意外国语"/><i></i><em>更新至14集</em></a><b><a
                                    href="/html/400/" title="纯熟意外国语" target="_blank">纯熟意外国语</a></b>
                        <p>香港-警务剧</p></li>
                    <li><a class="play-img" href="/html/371/" title="琅琊榜" target="_blank"><img
                                    src="images/5739efac1531a.jpg" alt="琅琊榜"/><i></i><em>更新至34集</em></a><b><a
                                    href="/html/371/" title="琅琊榜" target="_blank">琅琊榜</a></b>
                        <p>-古装剧</p></li>
                    <li><a class="play-img" href="/html/290/" title="爱回家之八时入席" target="_blank"><img
                                    src="images/5702892916f50.jpg" alt="爱回家之八时入席"/><i></i><em>更新至54集</em></a><b><a
                                    href="/html/290/" title="爱回家之八时入席" target="_blank">爱回家之八时</a></b>
                        <p>香港-时装剧</p></li>
                    <li><a class="play-img" href="/html/307/" title="玛嘉烈与大卫.绿豆篇" target="_blank"><img
                                    src="images/570c8cb18e470.jpg"
                                    alt="玛嘉烈与大卫.绿豆篇"/><i></i><em>更新至20集</em></a><b><a href="/html/307/"
                                                                                      title="玛嘉烈与大卫.绿豆篇"
                                                                                      target="_blank">玛嘉烈与大卫</a></b>
                        <p>香港-时装剧</p></li>
                    <li><a class="play-img" href="/html/381/" title="仙剑五之云之凡" target="_blank"><img
                                    src="images/574321ed9010b.jpg"
                                    alt="仙剑五之云之凡"/><i></i><em>更新至16集</em></a><b><a href="/html/381/"
                                                                                   title="仙剑五之云之凡"
                                                                                   target="_blank">仙剑五之云之</a></b>
                        <p>大陆-仙侠剧</p></li>
                    <li><a class="play-img" href="/html/301/" title="最好的我们" target="_blank"><img
                                    src="images/570b54c11561f.jpg" alt="最好的我们"/><i></i><em>更新至21集</em></a><b><a
                                    href="/html/301/" title="最好的我们" target="_blank">最好的我们</a></b>
                        <p>大陆-网络剧</p></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="box newbox">
        <div class="shot update">
            <div class="title"><h3>最新电影</h3></div>
            <ul>
                @foreach($hot_film as $key => $item)
                    <li><i @if($key < 3 ) class="n" @endif>{{ $key+1 }}</i><a href="/detail/{{ $item['movie_id'] }}/" title="{{ $item['name'] }}"
                                                                              target="_blank">{{ $item['name'] }}&nbsp;{{ $item['status'] }}</a><span @if($item['is_new']) class="new" @endif>{{ $item['month'] }}-{{ $item['day'] }}</span></li>
                @endforeach
            </ul>
        </div>
        <div class="content">
            <div class="title"><h2><a href="/list/1.html">电影</a></h2></div>
            <div class="bd clearfix">
                <ul class="img-list dis clearfix">
                    @foreach($movies as $item)
                        <li><a class="play-img" href="/detail/{{ $item['movie_id'] }}" title="{{ $item['name'] }}" target="_blank"><img
                                        src="{{ $item['image'] }}" alt="{{ $item['name'] }}"/><i></i><em>{{ $item['status'] }}</em></a><b><a
                                        href="/detail/{{ $item['movie_id'] }}" title="{{ $item['name'] }}" target="_blank">{{ $item['name'] }}</a></b>
                            <p>{{ $item['show_time'] }}-{{ $item['type'] }}</p></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="box newbox">
        <div class="shot update">
            <div class="title"><h3>最新电视剧</h3></div>
            <ul>
                @foreach($series_movie as $key => $item)
                    <li><i @if($key < 3 ) class="n" @endif>{{ $key+1 }}</i><a href="/detail/{{ $item['movie_id'] }}" title="{{ $item['name'] }}"
                                                                              target="_blank">{{ $item['name'] }}&nbsp;{{ $item['status'] }}</a><span @if($item['is_new']) class="new" @endif>{{ $item['month'] }}-{{ $item['day'] }}</span></li>
                @endforeach
            </ul>
        </div>
        <div class="content">
            <div class="title"><h2><a href="/detail/{{ $item['movie_id'] }}">电视剧</a></h2></div>
            <div class="bd clearfix">
                <ul class="img-list dis clearfix">
                    @foreach($series_movie as $item)
                        <li><a class="play-img" href="/detail/{{ $item['movie_id'] }}" title="{{ $item['name'] }}" target="_blank"><img
                                        src="{{ $item['image'] }}" alt="{{ $item['name'] }}"/><i></i><em>{{ $item['status'] }}</em></a><b><a
                                        href="/detail/{{ $item['movie_id'] }}" title="{{ $item['name'] }}" target="_blank">{{ $item['name'] }}</a></b>
                            <p>{{ $item['show_time'] }}-{{ $item['type'] }}</p></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="box newbox">
        <div class="shot update">
            <div class="title"><h3>最新动漫</h3></div>
            <ul>
                @foreach($animation_movie as $key => $item)
                    <li><i @if($key < 3 ) class="n" @endif>{{ $key+1 }}</i><a href="/detail/{{ $item['movie_id'] }}" title="{{ $item['name'] }}"
                                                                              target="_blank">{{ $item['name'] }}&nbsp;{{ $item['status'] }}</a><span @if($item['is_new']) class="new" @endif>{{ $item['month'] }}-{{ $item['day'] }}</span></li>
                @endforeach
            </ul>
        </div>
        <div class="content">
            <div class="title"><h2><a href="/list/24.html">动漫</a></h2></div>
            <div class="bd clearfix">
                <ul class="img-list dis clearfix">
                    @foreach($animation_movie as $item)
                        <li><a class="play-img" href="/detail/{{ $item['movie_id'] }}" title="{{ $item['name'] }}" target="_blank"><img
                                        src="{{ $item['image'] }}" alt="{{ $item['name'] }}"/><i></i><em>{{ $item['status'] }}</em></a><b><a
                                        href="/detail/{{ $item['movie_id'] }}" title="{{ $item['name'] }}" target="_blank">{{ $item['name'] }}</a></b>
                            <p>{{ $item['show_time'] }}-{{ $item['type'] }}</p></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="box newbox">
        <div class="shot update">
            <div class="title"><h3>最新综艺</h3></div>
            <ul>
                @foreach($variety_show as $key => $item)
                    <li><i @if($key < 3 ) class="n" @endif>{{ $key+1 }}</i><a href="/detail/{{ $item['movie_id'] }}" title="{{ $item['name'] }}"
                                                                              target="_blank">{{ $item['name'] }}&nbsp;{{ $item['status'] }}</a><span @if($item['is_new']) class="new" @endif>{{ $item['month'] }}-{{ $item['day'] }}</span></li>
                @endforeach
            </ul>
        </div>
        <div class="content">
            <div class="title"><h2><a href="/list/25.html">综艺</a></h2></div>
            <div class="bd clearfix">
                <ul class="img-list dis clearfix">
                    @foreach($variety_show as $item)
                        <li><a class="play-img" href="/detail/{{ $item['movie_id'] }}" title="{{ $item['name'] }}" target="_blank"><img
                                        src="{{ $item['image'] }}" alt="{{ $item['name'] }}"/><i></i><em>{{ $item['status'] }}</em></a><b><a
                                        href="/detail/{{ $item['movie_id'] }}" title="{{ $item['name'] }}" target="_blank">{{ $item['name'] }}</a></b>
                            <p>{{ $item['show_time'] }}-{{ $item['type'] }}</p></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="link">
        <div class="title"><span>友情链接</span>
            <p>欢迎高质量 链接交换，联系piaov114@gmail.com</p></div>
        <div></div>
    </div>
</div>
@endsection