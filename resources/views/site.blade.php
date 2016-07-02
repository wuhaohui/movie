@extends('app')

@section('main')
<div id="main">
    <div class="box newbox">
        <div class="shot update">
            <div class="title"><h3>最近更新</h3></div>
            <ul>
                @foreach($recentMovie as $key => $item)
                    <li><i @if($key < 3 ) class="n" @endif>{{ $key+1 }}</i><a href="{{ $item['link'] }}" title="{{ $item['name'] }}"
                                                                              target="_blank">{{ $item['name'] }}&nbsp;15</a><span @if($item['is_new']) class="new" @endif>{{ $item['month'] }}-{{ $item['day'] }}</span></li>
                @endforeach
            </ul>
        </div>
        <div class="content">
            <div class="title"><h2>本周热播</h2></div>
            <div class="bd clearfix">
                <ul class="img-list dis clearfix">
                    @foreach($hotMovies as $movie)
                    <li><a class="play-img" href="{{ $movie['link'] }}" title="{{ $movie['name'] }}" target="_blank"><img
                                    src="{{ $movie['image'] }}" alt="{{ $movie['name'] }}"/><i></i><em>{{ $movie['status'] }}</em></a><b><a
                                    href="{{ $movie['link'] }}" title="{{ $movie['name'] }}" target="_blank">{{ $movie['name'] }}</a></b>
                        <p>{{ $movie['country'] }}-{{ $movie['type'] }}</p></li>

                        @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="box newbox">
        <div class="shot update">
            <div class="title"><h3>最新电影</h3></div>
            <ul>
                @foreach($recentFilm as $key => $item)
                    <li><i @if($key < 3 ) class="n" @endif>{{ $key+1 }}</i><a href="{{ $item['link'] }}" title="{{ $item['name'] }}"
                                                                              target="_blank">{{ $item['name'] }}&nbsp;{{ $item['status'] }}</a><span @if($item['is_new']) class="new" @endif>{{ $item['month'] }}-{{ $item['day'] }}</span></li>
                @endforeach
            </ul>
        </div>
        <div class="content">
            <div class="title"><h2><a href="/show/1.html">电影</a></h2></div>
            <div class="bd clearfix">
                <ul class="img-list dis clearfix">
                    @foreach($movies as $item)
                        <li><a class="play-img" href="{{ $item['link'] }}" title="{{ $item['name'] }}" target="_blank"><img
                                        src="{{ $item['image'] }}" alt="{{ $item['name'] }}"/><i></i><em>{{ $item['status'] }}</em></a><b><a
                                        href="{{ $item['link'] }}" title="{{ $item['name'] }}" target="_blank">{{ $item['name'] }}</a></b>
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
                @foreach($recentSeriesMovie as $key => $item)
                    <li><i @if($key < 3 ) class="n" @endif>{{ $key+1 }}</i><a href="{{ $item['link'] }}" title="{{ $item['name'] }}"
                                                                              target="_blank">{{ $item['name'] }}&nbsp;{{ $item['status'] }}</a><span @if($item['is_new']) class="new" @endif>{{ $item['month'] }}-{{ $item['day'] }}</span></li>
                @endforeach
            </ul>
        </div>
        <div class="content">
            <div class="title"><h2><a href="/show/13.html">电视剧</a></h2></div>
            <div class="bd clearfix">
                <ul class="img-list dis clearfix">
                    @foreach($seriesMovie as $item)
                        <li><a class="play-img" href="{{ $item['link'] }}" title="{{ $item['name'] }}" target="_blank"><img
                                        src="{{ $item['image'] }}" alt="{{ $item['name'] }}"/><i></i><em>{{ $item['status'] }}</em></a><b><a
                                        href="{{ $item['link'] }}" title="{{ $item['name'] }}" target="_blank">{{ $item['name'] }}</a></b>
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
                @foreach($recentAnimationMovie as $key => $item)
                    <li><i @if($key < 3 ) class="n" @endif>{{ $key+1 }}</i><a href="{{ $item['link'] }}" title="{{ $item['name'] }}"
                                                                              target="_blank">{{ $item['name'] }}&nbsp;{{ $item['status'] }}</a><span @if($item['is_new']) class="new" @endif>{{ $item['month'] }}-{{ $item['day'] }}</span></li>
                @endforeach
            </ul>
        </div>
        <div class="content">
            <div class="title"><h2><a href="/show/24.html">动漫</a></h2></div>
            <div class="bd clearfix">
                <ul class="img-list dis clearfix">
                    @foreach($animationMovie as $item)
                        <li><a class="play-img" href="{{ $item['link'] }}" title="{{ $item['name'] }}" target="_blank"><img
                                        src="{{ $item['image'] }}" alt="{{ $item['name'] }}"/><i></i><em>{{ $item['status'] }}</em></a><b><a
                                        href="{{ $item['link'] }}" title="{{ $item['name'] }}" target="_blank">{{ $item['name'] }}</a></b>
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
                @foreach($recentVarietyShow as $key => $item)
                    <li><i @if($key < 3 ) class="n" @endif>{{ $key+1 }}</i><a href="{{ $item['link'] }}" title="{{ $item['name'] }}"
                                                                              target="_blank">{{ $item['name'] }}&nbsp;{{ $item['status'] }}</a><span @if($item['is_new']) class="new" @endif>{{ $item['month'] }}-{{ $item['day'] }}</span></li>
                @endforeach
            </ul>
        </div>
        <div class="content">
            <div class="title"><h2><a href="/shwo/25.html">综艺</a></h2></div>
            <div class="bd clearfix">
                <ul class="img-list dis clearfix">
                    @foreach($varietyShow as $item)
                        <li><a class="play-img" href="{{ $item['link'] }}" title="{{ $item['name'] }}" target="_blank"><img
                                        src="{{ $item['image'] }}" alt="{{ $item['name'] }}"/><i></i><em>{{ $item['status'] }}</em></a><b><a
                                        href="{{ $item['link'] }}" title="{{ $item['name'] }}" target="_blank">{{ $item['name'] }}</a></b>
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