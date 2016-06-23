@extends("app")

@section('main')
    <div id="main">
        <div class="banner">
            <script type="text/javascript" src="{{ asset('js/conter.js') }}"></script>
        </div>
        <div class="shot pageright">
            <div class="title"><h3>本周热播</h3></div>
            <ul>
                <li><i class="n">1</i><a href="/html/395/" title="纯熟意外粤语" target="_blank">纯熟意外粤语&nbsp;18</a><span
                            class="new">06-22</span></li>
                <li><i class="n">2</i><a href="/html/430/" title="六扇门" target="_blank">六扇门&nbsp;全集</a><span class="new">06-22</span>
                </li>
                <li><i class="n">3</i><a href="/html/400/" title="纯熟意外国语" target="_blank">纯熟意外国语&nbsp;17</a><span
                            class="new">06-22</span></li>
                <li><i>4</i><a href="/html/401/" title="好先生" target="_blank">好先生&nbsp;全集</a><span class="new">06-22</span>
                </li>
                <li><i>5</i><a href="/html/290/" title="爱回家之八时入席" target="_blank">爱回家之八时入席&nbsp;57</a><span class="new">06-22</span>
                </li>
                <li><i>6</i><a href="/html/88/" title="权力的游戏第六季" target="_blank">权力的游戏第六季&nbsp;09</a><span>06-20</span></li>
                <li><i>7</i><a href="/html/381/" title="仙剑五之云之凡" target="_blank">仙剑五之云之凡&nbsp;20</a><span
                            class="new">06-22</span></li>
                <li><i>8</i><a href="/html/384/" title="余罪2" target="_blank">余罪2&nbsp;全集</a><span>06-12</span></li>
                <li><i>9</i><a href="/html/410/" title="性在有情粤语" target="_blank">性在有情粤语&nbsp;15</a><span>06-18</span></li>
                <li><i>10</i><a href="/html/425/" title="怒江之战" target="_blank">怒江之战&nbsp;全集</a><span>06-19</span></li>
                <li><i>11</i><a href="/html/426/" title="大仙衙门" target="_blank">大仙衙门&nbsp;全集</a><span>06-19</span></li>
                <li><i>12</i><a href="/html/429/" title="解密" target="_blank">解密&nbsp;06</a><span class="new">06-22</span>
                </li>
                <li><i>13</i><a href="/html/431/" title="Doctors" target="_blank">Doctors&nbsp;02</a><span
                            class="new">06-22</span></li>
                <li><i>14</i><a href="/html/428/" title="38师机动队" target="_blank">38师机动队&nbsp;02</a><span>06-20</span></li>
                <li><i>15</i><a href="/html/383/" title="亲爱的翻译官" target="_blank">亲爱的翻译官&nbsp;46</a><span>06-19</span></li>
                <li><i>16</i><a href="/html/371/" title="琅琊榜" target="_blank">琅琊榜&nbsp;41</a><span class="new">06-22</span>
                </li>
                <li><i>17</i><a href="/html/305/" title="殭粤语" target="_blank">殭粤语&nbsp;全集</a><span>05-15</span></li>
                <li><i>18</i><a href="/html/301/" title="最好的我们" target="_blank">最好的我们&nbsp;22</a><span>06-18</span></li>
                <li><i>19</i><a href="/html/432/" title="Beautiful Mind" target="_blank">Beautiful Mind&nbsp;02</a><span
                            class="new">06-22</span></li>
                <li><i>20</i><a href="/html/307/" title="玛嘉烈与大卫.绿豆篇" target="_blank">玛嘉烈与大卫.绿&nbsp;21</a><span class="new">06-22</span>
                </li>
                <li><i>21</i><a href="/html/422/" title="末日孤舰第三季" target="_blank">末日孤舰第三季&nbsp;02</a><span>06-21</span></li>
                <li><i>22</i><a href="/html/402/" title="女不强大天不容" target="_blank">女不强大天不容&nbsp;39</a><span
                            class="new">06-22</span></li>
                <li><i>23</i><a href="/html/319/" title="廉政行动2016" target="_blank">廉政行动2016&nbsp;全集</a><span>05-29</span>
                </li>
                <li><i>24</i><a href="/html/308/" title="殭(国语版)" target="_blank">殭(国语版)&nbsp;全集</a><span>05-16</span></li>
                <li><i>25</i><a href="/html/408/" title="人在边缘粤语" target="_blank">人在边缘粤语&nbsp;15</a><span
                            class="new">06-22</span></li>
                <li><i>26</i><a href="/html/279/" title="怪物Monster" target="_blank">怪物Monster&nbsp;26</a><span class="new">06-22</span>
                </li>
                <li><i>27</i><a href="/html/419/" title="吉祥天宝" target="_blank">吉祥天宝&nbsp;全集</a><span>06-11</span></li>
                <li><i>28</i><a href="/html/393/" title="爱情来的时候2粤语" target="_blank">爱情来的时候2粤&nbsp;02</a><span>06-04</span>
                </li>
                <li><i>29</i><a href="/html/173/" title="警犬巴打粤语" target="_blank"><font color="#9932CC">警犬巴打粤语</font>&nbsp;全集</a><span>02-28</span>
                </li>
                <li><i>30</i><a href="/html/330/" title="火线下的江湖大佬粤语" target="_blank">火线下的江湖大佬&nbsp;全集</a><span>05-27</span>
                </li>
                <li><i>31</i><a href="/html/368/" title="美女孔心" target="_blank">美女孔心&nbsp;12</a><span>06-20</span></li>
                <li><i>32</i><a href="/html/264/" title="EU超时任务粤语" target="_blank">EU超时任务粤语&nbsp;全集</a><span>04-10</span>
                </li>
                <li><i>33</i><a href="/html/336/" title="火线下的江湖大佬国语" target="_blank">火线下的江湖大佬&nbsp;全集</a><span>05-29</span>
                </li>
                <li><i>34</i><a href="/html/411/" title="再见，老婆大人" target="_blank">再见，老婆大人&nbsp;36</a><span
                            class="new">06-22</span></li>
                <li><i>35</i><a href="/html/268/" title="EU超时任务(国语版)"
                                target="_blank">EU超时任务(国语&nbsp;全集</a><span>04-11</span></li>
                <li><i>36</i><a href="/html/424/" title="是！尚先生" target="_blank">是！尚先生&nbsp;08</a><span>06-17</span></li>
            </ul>
        </div>
        <div class="pagelist"><!-- 筛选开始 -->
            <div class="filter">
                <div class="title"><b>电视剧</b></div>
            </div>
            <div class="movielist">
                <ul class="mlist">
                    @foreach($movies as $movie)
                    <li><a href="/detail/{{ $movie['movie_id'] }}.html" title="{{ $movie['name'] }}" target="_blank" class="p"><img src="{{ $movie['image'] }}"
                                                                                       onerror="this.src='{{ asset('images/nophoto.jpg') }}'"
                                                                                       alt="{{ $movie['name'] }}"/><em>{{ $movie['status'] }}</em></a>
                        <div class="info"><h2><a href="/detail/{{ $movie['movie_id'] }}.html" title="{{ $movie['name'] }}" target="_blank">{{ $movie['name'] }}</a><em>{{ $movie['show_time'] }}</em></h2>
                            <em
                                    class="star star4"></em>
                            <p>主演：{{ $movie['name'] }} </p>
                            <p><i>语种：{{ $movie['language'] }}</i><i>地区：<a href="/search/country/{{ $movie['country'] }}.html">{{ $movie['country'] }}</a></i></p>
                            <p><i>类型：<a href="/search/type_id/{{ $movie['type_id'] }}.html">{{ $movie['type'] }}</a></i><i>更新：{{ $movie['month'] }}-{{ $movie['day'] }}</i></p><span><a
                                        href="/detail/{{ $movie['movie_id'] }}.html#kan"
                                        target="_blank">观看</a><a
                                        href="/detail/{{ $movie['movie_id'] }}.html#down" target="_blank">下载</a></span></div>
                    </li>
                        @endforeach
                </ul>
                @include('layouts.pager')
            </div>
        </div>
    </div>
@endsection