@extends("app")
@section('title')
    {{ $movie->name }}
@endsection
@section("main")
    <div id="endplay">
        <div class="player">
            <div class="playdz"><a href="/">首页</a> &raquo; <a href="/search/type_id/{{ $movie->type_id }}.html">时装剧</a> &raquo; <a href="/detail/{{ $movie->movie_id }}.html">{{ $movie->name }}</a> &raquo;
                {{ $cloudDisk->title }}
            </div>
            <div id="play">
                <div class="fl"><!--播放开始-->
                    <div class="ptitle"><p class="name">{{ $movie->name }}{{ $cloudDisk->title }}网盘下载<a
                                    href="http://www.bubuqing.com/html/290/play290_1_2.html"
                                    style="float:right;margin-right:10px;">下一集</a></p></div>
                    <div id="player" class="player">
                        <div class="wplz">
                            @foreach($links as $link)
                            <li>{{ $link->type }}：<a target="_blank" rel="nofollow" href="{{ $link->link }}">{{  $link->link }}</a>&nbsp;&nbsp;密码：{{  $link->password }}
                            </li>
                            @endforeach
                            <li></li>
                            <li>【<font color="#ff0000">友情提示</font>】：由于网盘的特殊性，部分资源易被屏蔽，所以请及时保存或下载。</li>
                            <li>【<font color="#ff0000">友情提示</font>】：部分后缀名为.mp41或者.mkv1的资源请将1删除改为.mp4或.mkv。</li>
                        </div>
                    </div><!--左侧结束--></div><!--右侧开始-->
                <div class="fr">
                    <div class="playad">
                        <div class="player-union">
                            <script type="text/javascript" src="{{ asset('js/300-250.js') }}"></script>
                        </div>
                        <div>
                            <script type="text/javascript" src="{{ asset('js/300-250-2.js') }}"></script>
                        </div>
                    </div>
                </div><!--右侧结束--></div>
        </div>
    </div>
    {{--<div id="playmain">--}}
        {{--<div class="mox">--}}
            {{--<div class="title"><span class="gico-wangpan">网盘下载列表</span></div>--}}
            {{--<div class="play-list"><a href="/html/290/play290_1_1.html">粤语版1-59集</a><a--}}
                        {{--href="/html/290/play290_1_2.html">国语版1-50集</a></div>--}}
        {{--</div>--}}
        {{--<div id="footer"><p> 免责声明:如果侵犯了你的权益，请发邮件至：piaov114@gmail.com，我们会及时删除侵权内容，谢谢合作！ </p>--}}
            {{--<p> Copyright &copy; 2016 piaov.com. All Rights Reserved. </p>--}}
            {{--<script language="javascript" src="{{ asset('js/html.js') }}"></script>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection