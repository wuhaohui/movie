<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>2016最新电影大全，高清电视剧排行榜,飘V影视 - 飘V网</title>
    <meta name="keywords" content="飘V网,最新电影,高清电影,电视剧"/>
    <meta name="description" content="飘V网为您提供2016最新最快电影娱乐资讯，国产剧韩剧欧美剧及TVB电视剧的迅雷影音边下边播和网盘分享，电影点播以及迅雷电影下载！"/>
    <link href="{{ asset('/css/style.css') }}" type="text/css" rel="stylesheet"/>
    <script type="text/javascript" src="{!! asset('js/common.js') !!}"></script>
</head>
<body>
<div id="header">
    <div class="head">
        <div class="top"><span>欢迎来到飘V网，我们为大家免费提供好看的电影</span>
            <p><a href="javascript:void(0)" onClick="addFavorite('http://www.piaov.com','飘V网');">加入收藏</a> - <a
                        href="/piaov_pc.php" target="_blank" class="desk">将飘V网放到桌面</a></p></div>
        <div class="logo"><a href="http://www.piaov.com" title="首页">首页</a></div>
        <p class="plus"><a href="/" class="ph">排行榜</a><a href="/" class="dq">影视大全</a></p>
        <div id="search">
            <div class="ser">
                <form name="formsearch" id="formsearch" action='/search.html' method="post" target="_blank"><input
                            type="text" id="kw" name="wd" class="search-input" value="请在此处输入影片片名或演员名称。"
                            onFocus="if(this.value=='请在此处输入影片片名或演员名称。'){this.value='';}"
                            onBlur="if(this.value==''){this.value='请在此处输入影片片名或演员名称。';};"/><input type="submit"
                                                                                                 name="submit"
                                                                                                 class="sub"
                                                                                                 value="搜 索"/></form>
            </div>
            <p><a href="http://www.piaov.com/html/32/">奶酪陷阱</a><a href="http://www.piaov.com/html/31/">秦时明月</a><a
                        href="http://www.piaov.com/search-wd-%E7%88%B1%E6%83%85%E9%A3%9F%E7%89%A9%E9%93%BE.html">爱情食物链</a><a
                        href="http://www.piaov.com/html/24/">星球大战</a><a href="http://www.piaov.com/html/22/">煮妇神探</a><a
                        href="http://www.piaov.com/html/17/">我的少女时代</a></p></div>
        <div class="history"><a href="#" class="gk" onmouseover="$('drop-box').style.display='block';">播放记录</a>
            <div class="drop-box" id="drop-box" onmouseover="$('drop-box').style.display='block';"
                 onmouseout="$('drop-box').style.display='none';">
                <div class="lookedlist"><p><a class="closehis" href="javascript:;"
                                              onclick="$('drop-box').style.display='none';">关闭</a><a
                                href="javascript:void(0);" onClick="his.clearHistory();">清空历史记录</a></p>
                    <ul class="highlight" id="playhistory">
                        <li>您的观看历史为空</li>
                    </ul>
                </div>
                <script type="text/javascript" language="javascript">PlayHistory();</script>
            </div>
        </div>
        <div id="menu">
            <div class="m">
                <?php $url = \Illuminate\Http\Request::capture()->getUri() ?>
                <p><a href="/" title="飘V网"
                      @if(!preg_match("/show\/\d+.html/",$url))
                      class="curr"
                      @endif
                    >首页</a>
                    @foreach(nav() as  $key => $nav)
                    <a

                            @if(preg_match("/show\/".$key.".html/",$url))
                                    class="curr"
                                    @endif
                            href="/show/{{ $key }}.html">{{ $nav }}</a>
                    @endforeach
                </p>
            </div>
            <p class="s">热门分类：
                @foreach(header_common_data() as $type)
                <a href="#">{{ $type['type_name'] }}</a>
                @endforeach
            </p>
        </div>
        @yield('main')
        <div id="footer"><p>免责声明：本站资源来源于互联网，如果侵犯了你的权益，请 发邮件至：piaov114@gmail.com，我们会及时删除断开链接，谢谢合作！</p>
            <p>Copyright &copy; 2016 piaov.com. All Rights Reserved.</p>
            <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
                document.write(unescape("%3Cspan id='cnzz_stat_icon_1257156843'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/stat.php%3Fid%3D1257156843' type='text/javascript'%3E%3C/script%3E"));</script>
</body>
</html>