@extends("app")

@section('main')
    <div id="main">
        <div class="banner">
            <script type="text/javascript" src="js/conter.js"></script>
        </div>
        <div class="view">
            <div class="wz"> 当前位置:　<a href="/">首页</a>　&raquo;　<a href="/list/16.html">{{ $movie->type }}</a>　&raquo;　{{ $movie->name }}</div>
            <div class="pic"><img src="{{ $movie->image }}" alt="{{ $movie->name }}"/>
                <p><a href="#kan">立即播放</a></p></div>
            <div class="info"><h1>{{ $movie->name }}</h1>
                <ul>
                    <li><span>状态：
                            @if($movie->episodes)
                                 </span><font color="#009999">更新至{{ $movie->now_episodes }}集</font>/共{{ $movie->episodes }}集</li>
                                @else
                                </span><font color="#009999">{{ $movie->status }}</font>/</li>
                            @endif

                    <li><span>主演：</span>
                        @foreach($actors as $actor)
                        <a href="/search-actor-{{ $actor }}.html" target="_blank">{{ $actor }}</a>
                        @endforeach
                    </li>
                    <li><span>类型：</span><a href="/list/16.html">{{ $movie->type }}</a>　　<span>语种：</span>{{ $movie->language }}</li>
                    <li><span>地区：</span><a href="/dq/2.html">{{ $movie->language }}</a>　　<span>上映时间：</span>{{ $movie->show_time }}</li>
                    <li>
                        <div class="fl"><span>更新日期：</span>{{ $movie->updated_at }}</div>
                        <a class="fr" href="#pl" style="text-align:right;"><img src="images/pl.gif" alt="查看评论" width="90"
                                                                                height="22"/></a></li>
                </ul>
                <div class="textdesc"><span>剧情简介：</span>{{ $movie->min }}[<a
                            href="#desc">详细</a>]
                </div>
                <div class="pfen"><p>影片评分：</p>
                    <div class="starscore"><input type="hidden" id="MARK_B1" name="MARK_B1" value="0"/><input type="hidden"
                                                                                                              id="MARK_B2"
                                                                                                              name="MARK_B2"
                                                                                                              value="0"/><input
                                type="hidden" id="MARK_B3" name="MARK_B3" value="0"/>
                        <div class="starA fl" id="filmStar">
                            <div class="starB s0" id="start"></div>
                            <div class="starC" id="starTC"><a href="javascript:;" onclick="OnStar(395,1)"
                                                              onmouseout="kaifach()" onmousemove="startm(1)"></a><a
                                        href="javascript:;" onclick="OnStar(395,2)" onmouseout="kaifach()"
                                        onmousemove="startm(2)"></a><a href="javascript:;" onclick="OnStar(395,3)"
                                                                       onmouseout="kaifach()" onmousemove="startm(3)"></a><a
                                        href="javascript:;" onclick="OnStar(395,4)" onmouseout="kaifach()"
                                        onmousemove="startm(4)"></a><a href="javascript:;" onclick="OnStar(395,5)"
                                                                       onmouseout="kaifach()" onmousemove="startm(5)"></a><a
                                        href="javascript:;" onclick="OnStar(395,6)" onmouseout="kaifach()"
                                        onmousemove="startm(6)"></a><a href="javascript:;" onclick="OnStar(395,7)"
                                                                       onmouseout="kaifach()" onmousemove="startm(7)"></a><a
                                        href="javascript:;" onclick="OnStar(395,8)" onmouseout="kaifach()"
                                        onmousemove="startm(8)"></a><a href="javascript:;" onclick="OnStar(395,9)"
                                                                       onmouseout="kaifach()" onmousemove="startm(9)"></a><a
                                        href="javascript:;" onclick="OnStar(395,10)" onmouseout="kaifach()"
                                        onmousemove="startm(10)"></a></div>
                        </div>
                        <span class="no c1" id="filmStarScore">0<i>.0</i></span></div>
                    <div class="fen" id="filmStarScoreTip"></div>
                </div>
                <script type="text/javascript">markVideo(395, 10256, 0, 10256, 5, 0);</script>
            </div>
            <div class="infoad">
                <script type="text/javascript" src="js/300-250.js"></script>
            </div>
        </div>
        <div class="endpage clearfix"><a id="kan"></a>
            <div class="mox">
                <div class="title"><span class="gico-wangpan">网盘下载</span></div>
                <div class="play-list">
                    @foreach($cloud_disk as $item)
                    <a href="{{ asset('cloudDisk/'.$item->disk_id) }}" target="_blank">{{ $item->title }}</a>
                    @endforeach
                </div>
            </div>
            <div class="mox">
                <div class="title"><span class="gico-kankan">标清版迅雷播放</span></div>
                {{--暂时不开启迅雷播放--}}
                {{--<div class="play-list">--}}
                    {{--<a href="/html/395/play395_0_1.html" target="_blank">第1集</a>--}}
                {{--</div>--}}
            </div>
            <div class="mox"><a id="down"></a>
                <div class="title"><span class="gico-down">标清版下载地址</span></div>
                <div class="ndownlist">
                    <script type="text/javascript" src="{{ asset('js/base64.js') }}"></script>
                    <ul>
                        <script>
                            var GvodUrls = '{{ $GovdUrls }}';
                            echoDown(GvodUrls, 1);</script>
                    </ul>
                </div>
            </div>
            {{--<div class="mox">--}}
                {{--<div class="title"><span class="gico-down">720p超清版下载地址</span></div>--}}
                {{--<div class="ndownlist">--}}
                    {{--<ul>--}}
                        {{--<script>var GvodUrls = "ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9601.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1135430276|6B6C99BB43D671F27DAB77FD5CD1DC2E|h=622MDBELYB4AAE3UIA4CULMSYCHBISZU|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9602.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1141107690|2DF0BBD668B1865FC1E46C6F0FD74E08|h=34O2ZIHWKMWUYGVQCQLZ2EHJP725JFCD|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9603.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1141138239|A65CD384E22C89AE495C3FEBEB37D07F|h=GUSQQBEIII3TIY2C2AKSTPAOIKRRUZ6E|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9604.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1134168110|FA7587B9914ABA58FF679E8E5ED37294|h=3HTKC7IIGUK4REPVLC3BQE6SIPLFAN6T|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9605.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1135078114|285DCEAE382F2F0B20BB6ACD5115E15E|h=IAG5RF6XACV27ZZ4AB52VGKIMVT7CY44|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9606.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1140534323|66C8120ADDB3FF26FFAFCEA07AB10C58|h=4ATI6W5D2OKWQ75DAGLR3PGAP7MJFET3|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9607.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1133591922|42562D0324505B1E6E03D6F6B59D3311|h=FVNC2KGG6M3WO6NSTUIM6M3XEYA63HQO|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9608.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1142482202|534501A294B977CB9D0C7228C0B8EC37|h=SCZ3SX2SYNPWDSC3EGXLPXXKUYGP2VFT|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9609.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1133834327|90F8B12DBA515BE6BDA9036B040F42E9|h=YOOPMMEPLIUTOENLGTJS3IUU5RTVJTWD|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9610.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1141504731|268820DF592250441A88B17F048ABE9F|h=7FNEL7TCHJN2OKJEDRQXOX5R3SN7HRTW|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9611.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1137994338|B46AB39BE37E52B01FDCBD5431A56380|h=CSJTWL3KM32N6PHAW5DD7ODXR3TZAAY2|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9612.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1137001530|7CEBFC29D2561473E647B22FFC422D5C|h=L4CSAUHNWECCSQLT2SSF3BL5E5GTZ43S|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9613.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1137562318|A0B84C924C080577E70079B0227102CC|h=4CSPFDTZUYZC7LRPRGHSSWZQALD27HXM|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9614.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1138690609|D04084E14AB98ED5CC7090C33E7CBD57|h=TRDXDF45LUSVFYNRSR5YQZK726LHLPGD|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9615.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1133994011|03CEAC0E02E1A678659CF619738EEA25|h=BSBTC77CS563TUTX2763WQHDHS4TKQ7M|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9616.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1140384129|91C25F9127BCBC3808DEFAA50E088614|h=CCWTBL6WFLIQH5ZZIOX2H2NT6VERTAMR|/###";--}}
                            {{--echoDown(GvodUrls, 4);</script>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--提供相关电影，暂时不开通--}}
            {{--<div class="ulike">--}}
                {{--<div class="title"><span>热门警务剧</span></div>--}}
                {{--<ul class="img-list imglist clearfix">--}}
                    {{--<li><a class="play-img" href="/html/395/" title="纯熟意外粤语" target="_blank"><img--}}
                                    {{--src="images/574c4494cf263.jpg" alt="纯熟意外粤语"/><i></i><em>更新至16集</em></a><h5><a href="/html/395/"--}}
                        {{--</h5></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            <div class="mox juqing"><a id="desc"></a>
                <div class="title"><span>剧情介绍</span></div>
                {!! $movie->profile !!}
            </div><!--/mox--><a id="pl"></a>
            <div class="comment">
                <div class="ds-thread" data-thread-key="pv_395" data-title="《{{ $movie->name }}》{{ $movie->type }}在线观看,{{ $movie->name }}网盘迅雷下载 - 飘V网"
                     data-url="http://www.piaov.com/html/395/"></div>
            </div>
        </div>
    </div>


@endsection