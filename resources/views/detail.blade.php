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
                <div class="textdesc"><span>剧情简介：</span>世上每日发生不同的事故，它们的出现，必然有因，才有果。但世事总有始料不及，当人未能看清万物事出何因，便会将其...[<a
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
                <div class="play-list"><a href="/html/395/play395_1_1.html" target="_blank">第1集</a><a
                            href="/html/395/play395_1_2.html" target="_blank">第2集</a><a href="/html/395/play395_1_3.html"
                                                                                        target="_blank">第3集</a><a
                            href="/html/395/play395_1_4.html" target="_blank">第4集</a><a href="/html/395/play395_1_5.html"
                                                                                        target="_blank">第5集</a><a
                            href="/html/395/play395_1_6.html" target="_blank">第6集</a><a href="/html/395/play395_1_7.html"
                                                                                        target="_blank">第7集</a><a
                            href="/html/395/play395_1_8.html" target="_blank">第8集</a><a href="/html/395/play395_1_9.html"
                                                                                        target="_blank">第9集</a><a
                            href="/html/395/play395_1_10.html" target="_blank">第10集</a><a href="/html/395/play395_1_11.html"
                                                                                          target="_blank">第11集</a><a
                            href="/html/395/play395_1_12.html" target="_blank">第12集</a><a href="/html/395/play395_1_13.html"
                                                                                          target="_blank">第13集</a><a
                            href="/html/395/play395_1_14.html" target="_blank">第14集</a><a href="/html/395/play395_1_15.html"
                                                                                          target="_blank">第15集</a><a
                            href="/html/395/play395_1_16.html" target="_blank">第16集</a></div>
            </div>
            <div class="mox">
                <div class="title"><span class="gico-kankan">标清版迅雷播放</span></div>
                <div class="play-list"><a href="/html/395/play395_0_1.html" target="_blank">第1集</a><a
                            href="/html/395/play395_0_2.html" target="_blank">第2集</a><a href="/html/395/play395_0_3.html"
                                                                                        target="_blank">第3集</a><a
                            href="/html/395/play395_0_4.html" target="_blank">第4集</a><a href="/html/395/play395_0_5.html"
                                                                                        target="_blank">第5集</a><a
                            href="/html/395/play395_0_6.html" target="_blank">第6集</a><a href="/html/395/play395_0_7.html"
                                                                                        target="_blank">第7集</a><a
                            href="/html/395/play395_0_8.html" target="_blank">第8集</a><a href="/html/395/play395_0_9.html"
                                                                                        target="_blank">第9集</a><a
                            href="/html/395/play395_0_10.html" target="_blank">第10集</a><a href="/html/395/play395_0_11.html"
                                                                                          target="_blank">第11集</a><a
                            href="/html/395/play395_0_12.html" target="_blank">第12集</a><a href="/html/395/play395_0_13.html"
                                                                                          target="_blank">第13集</a><a
                            href="/html/395/play395_0_14.html" target="_blank">第14集</a><a href="/html/395/play395_0_15.html"
                                                                                          target="_blank">第15集</a><a
                            href="/html/395/play395_0_16.html" target="_blank">第16集</a></div>
            </div>
            <div class="mox"><a id="down"></a>
                <div class="title"><span class="gico-down">标清版下载地址</span></div>
                <div class="ndownlist">
                    <script type="text/javascript" src="js/base64.js"></script>
                    <ul>
                        <script>var GvodUrls = "ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9601.%5B%E9%AB%98%E6%B8%85TV%E7%B2%A4%E8%AF%AD%5D%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mkv|388449256|60B9A254323DB75810FDB33108F76E63|h=7JZ3WVYSAIH77EK37DYH6C34S4ECLJYV|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9602.%5B%E9%AB%98%E6%B8%85TV%E7%B2%A4%E8%AF%AD%5D%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mkv|391722179|F03AAE0E808C55D112330A077859E282|h=DWV2HFSWZNLHQOUTNFP4H2EWRXJVZWPR|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9603.%5B%E9%AB%98%E6%B8%85TV%E7%B2%A4%E8%AF%AD%5D%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mkv|391427309|00CCD7E3B93BE0A907E3FA8D0ECF9EC7|h=PTUR56CEG3OCN7CH3DRSUYPRAP4RUIFS|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9604.%5B%E9%AB%98%E6%B8%85TV%E7%B2%A4%E8%AF%AD%5D%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mkv|389726239|DF394ADFF77197B0B44784182EC12445|h=YGPLUFMLABBAYYFBISI3DR6OIGDTLG5E|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9605.%5B%E9%AB%98%E6%B8%85TV%E7%B2%A4%E8%AF%AD%5D%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mkv|389412212|DA08B45FD0ACA0BFD6DAFE7DF998DCB6|h=QHVB6PICSFXCPHMGBEKR7TXE6HLMXAID|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9606.%5B%E9%AB%98%E6%B8%85TV%E7%B2%A4%E8%AF%AD%5D%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mkv|392013612|E910DADC679E42E083658A10A965D88B|h=FL3SJ5XYOJL3OVQEENPVNQCH3HDJRSDY|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9607.%5B%E9%AB%98%E6%B8%85TV%E7%B2%A4%E8%AF%AD%5D%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mkv|387619370|DC142163A139460B733E87D94E5596BC|h=5NEOCTTGEFD3I4GORTLKL6LPSGHI7CWH|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9608.%5B%E9%AB%98%E6%B8%85TV%E7%B2%A4%E8%AF%AD%5D%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mkv|381176228|F0C939ADE9C1BC78E781F5C658D6AB24|h=XQRZFZWVTJK3W2DAJQ4P56H5H5D7CL2C|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9609.%5B%E9%AB%98%E6%B8%85TV%E7%B2%A4%E8%AF%AD%5D%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mkv|389796396|2603EA0872B4CAD671CD0B7636C90E9A|h=OJHVJ5UZI2RPPZWKFNXQZFYGZH5OGRRQ|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9610.%5B%E9%AB%98%E6%B8%85TV%E7%B2%A4%E8%AF%AD%5D%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mkv|389045702|69801D93055E7598089306BC96E63DB3|h=NMPQFFTJRTTQQJBM476DXQOS623U62MX|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9611.%5B%E9%AB%98%E6%B8%85TV%E7%B2%A4%E8%AF%AD%5D%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mkv|389808027|94B94045220412E8B4EEC048766BB406|h=WQWMDFOAZAZPCOQJXTY7POFBHZW3N6T2|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9612.%5B%E9%AB%98%E6%B8%85TV%E7%B2%A4%E8%AF%AD%5D%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mkv|388645474|FBBA3D2B7E3363B4B31A0E6AC978E3DA|h=CTLIVU5V2K54WIWG3HU33PIYZJYXLR5B|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9613.%5B%E9%AB%98%E6%B8%85TV%E7%B2%A4%E8%AF%AD%5D%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mkv|389735577|DF1BC26556A4563F51515B71F8FC0C2B|h=TXOBUUIDXO3DSAUG3KEV3IVQ2ILRKUNO|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9614.%5B%E9%AB%98%E6%B8%85TV%E7%B2%A4%E8%AF%AD%5D%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mkv|390077588|884378B6353B8788088ABB4B59F296DE|h=SJGO45UAHBPBGDUIOFLJVQBU4XU7OLKK|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9615.%5B%E9%AB%98%E6%B8%85TV%E7%B2%A4%E8%AF%AD%5D%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mkv|389695512|823805DF2ECAF3C80DB8CB31BD5F6124|h=4TMQGRURXWANV6OVIOIXAFRSWMVXWMQC|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9616.%5B%E9%AB%98%E6%B8%85TV%E7%B2%A4%E8%AF%AD%5D%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mkv|420680272|1A236C6E98B280845AADB3A56E8600A2|h=Y26WGOARZN4TV54OEUAEWYX6IXXH3EBC|/###";
                            echoDown(GvodUrls, 1);</script>
                    </ul>
                </div>
            </div>
            <div class="mox">
                <div class="title"><span class="gico-down">720p超清版下载地址</span></div>
                <div class="ndownlist">
                    <ul>
                        <script>var GvodUrls = "ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9601.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1135430276|6B6C99BB43D671F27DAB77FD5CD1DC2E|h=622MDBELYB4AAE3UIA4CULMSYCHBISZU|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9602.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1141107690|2DF0BBD668B1865FC1E46C6F0FD74E08|h=34O2ZIHWKMWUYGVQCQLZ2EHJP725JFCD|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9603.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1141138239|A65CD384E22C89AE495C3FEBEB37D07F|h=GUSQQBEIII3TIY2C2AKSTPAOIKRRUZ6E|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9604.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1134168110|FA7587B9914ABA58FF679E8E5ED37294|h=3HTKC7IIGUK4REPVLC3BQE6SIPLFAN6T|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9605.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1135078114|285DCEAE382F2F0B20BB6ACD5115E15E|h=IAG5RF6XACV27ZZ4AB52VGKIMVT7CY44|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9606.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1140534323|66C8120ADDB3FF26FFAFCEA07AB10C58|h=4ATI6W5D2OKWQ75DAGLR3PGAP7MJFET3|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9607.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1133591922|42562D0324505B1E6E03D6F6B59D3311|h=FVNC2KGG6M3WO6NSTUIM6M3XEYA63HQO|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9608.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1142482202|534501A294B977CB9D0C7228C0B8EC37|h=SCZ3SX2SYNPWDSC3EGXLPXXKUYGP2VFT|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9609.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1133834327|90F8B12DBA515BE6BDA9036B040F42E9|h=YOOPMMEPLIUTOENLGTJS3IUU5RTVJTWD|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9610.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1141504731|268820DF592250441A88B17F048ABE9F|h=7FNEL7TCHJN2OKJEDRQXOX5R3SN7HRTW|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9611.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1137994338|B46AB39BE37E52B01FDCBD5431A56380|h=CSJTWL3KM32N6PHAW5DD7ODXR3TZAAY2|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9612.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1137001530|7CEBFC29D2561473E647B22FFC422D5C|h=L4CSAUHNWECCSQLT2SSF3BL5E5GTZ43S|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9613.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1137562318|A0B84C924C080577E70079B0227102CC|h=4CSPFDTZUYZC7LRPRGHSSWZQALD27HXM|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9614.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1138690609|D04084E14AB98ED5CC7090C33E7CBD57|h=TRDXDF45LUSVFYNRSR5YQZK726LHLPGD|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9615.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1133994011|03CEAC0E02E1A678659CF619738EEA25|h=BSBTC77CS563TUTX2763WQHDHS4TKQ7M|/###ed2k://|file|%E7%BA%AF%E7%86%9F%E6%84%8F%E5%A4%9616.720p%E8%B6%85%E6%B8%85%E7%B2%A4%E8%AF%AD%5B%E9%A3%98V%E7%BD%91piaov.com%5D.mp4|1140384129|91C25F9127BCBC3808DEFAA50E088614|h=CCWTBL6WFLIQH5ZZIOX2H2NT6VERTAMR|/###";
                            echoDown(GvodUrls, 4);</script>
                    </ul>
                </div>
            </div>
            <div class="ulike">
                <div class="title"><span>热门警务剧</span></div>
                <ul class="img-list imglist clearfix">
                    <li><a class="play-img" href="/html/395/" title="纯熟意外粤语" target="_blank"><img
                                    src="images/574c4494cf263.jpg" alt="纯熟意外粤语"/><i></i><em>更新至16集</em></a><h5><a href="/html/395/"
                                                                                                                  title="纯熟意外粤语"
                                                                                                                  target="_blank">纯熟意外粤语</a>
                        </h5></li>
                    <li><a class="play-img" href="/html/400/" title="纯熟意外国语" target="_blank"><img
                                    src="images/574e7f74b1d88.jpg" alt="纯熟意外国语"/><i></i><em>更新至15集</em></a><h5><a href="/html/400/"
                                                                                                                  title="纯熟意外国语"
                                                                                                                  target="_blank">纯熟意外国语</a>
                        </h5></li>
                    <li><a class="play-img" href="/html/429/" title="解密" target="_blank"><img src="images/5767fd511550d.jpg"
                                                                                              alt="解密"/><i></i><em>更新至02集</em></a>
                        <h5><a href="/html/429/" title="解密" target="_blank">解密</a></h5></li>
                    <li><a class="play-img" href="/html/319/" title="廉政行动2016" target="_blank"><img
                                    src="images/5712e49b8bead.jpg" alt="廉政行动2016"/><i></i><em>全集</em></a><h5><a href="/html/319/"
                                                                                                                title="廉政行动2016"
                                                                                                                target="_blank">廉政行动2016</a>
                        </h5></li>
                    <li><a class="play-img" href="/html/173/" title="警犬巴打粤语" target="_blank"><img
                                    src="images/56b9fb7bee836.jpg" alt="警犬巴打粤语"/><i></i><em>全集</em></a><h5><a href="/html/173/"
                                                                                                              title="警犬巴打粤语"
                                                                                                              target="_blank">警犬巴打粤语</a>
                        </h5></li>
                    <li><a class="play-img" href="/html/264/" title="EU超时任务粤语" target="_blank"><img
                                    src="images/56f00a1ddc345.jpg" alt="EU超时任务粤语"/><i></i><em>全集</em></a><h5><a href="/html/264/"
                                                                                                                title="EU超时任务粤语"
                                                                                                                target="_blank">EU超时任务粤语</a>
                        </h5></li>
                    <li><a class="play-img" href="/html/268/" title="EU超时任务(国语版)" target="_blank"><img
                                    src="images/56f2529f43c6b.jpg" alt="EU超时任务(国语版)"/><i></i><em>全集</em></a><h5><a href="/html/268/"
                                                                                                                   title="EU超时任务(国语版)"
                                                                                                                   target="_blank">EU超时任务(国语版)</a>
                        </h5></li>
                    <li><a class="play-img" href="/html/177/" title="警犬巴打国语" target="_blank"><img
                                    src="images/56bbf42909474.jpg" alt="警犬巴打国语"/><i></i><em>全集</em></a><h5><a href="/html/177/"
                                                                                                              title="警犬巴打国语"
                                                                                                              target="_blank">警犬巴打国语</a>
                        </h5></li>
                </ul>
            </div>
            <div class="mox juqing"><a id="desc"></a>
                <div class="title"><span>剧情介绍</span></div>
                <div class="endtext">世上每日发生不同的事故，它们的出现，必然有因，才有果。<br/>
                    但世事总有始料不及，当人未能看清万物事出何因，便会将其统称为“意外”。<br/>
                    意外真的存在吗？<br/>
                    <br/>
                    <br/>
                    <span style="font-weight:bold;">意外的岔路</span><br/>
                    <br/>
                    她叫殷然(蔡思贝饰)，是个聪明的少女，生于平凡的家庭，有一个圆满的童年。<br/>
                    16岁，她顶着拔尖生的光环中学毕业，志愿是做个救急扶危的医生。<br/>
                    26岁，她没有成为医生，却在保险公司委托的调查公司当调查员，追查保险赔偿意外的真相。<br/>
                    原因？就是那宗夺去其父母性命的交通意外，她认为事有蹊跷，却没获受理。<br/>
                    这天，她在医院里偶遇一位气宇轩昂的中年大叔，二人四目交投，由这一分钟开始，两人的生命变得不再平凡。<br/>
                    <br/>
                    <br style="font-weight:bold;"/>
                    <span style="font-weight:bold;">意外的邂逅</span><br/>
                    <br/>
                    中年大叔叫乔文杰(吴启华饰)，拥有四十多岁的外表，学识渊博，气度儒雅温文。令他在不同场合也引人注目。<br/>
                    自从送走亡妻后，从事古董买卖生意的他已甚少交际应酬，与管家张克莱(周骢饰) 过着不问世事的生活。<br/>
                    接过一通来电后，他赶往医院送别唯一至亲的最后一程。惊鸿一瞥，他与一名少女对目而视。<br/>
                    他与她成为了调查保险赔偿意外的拍档，关系愈走愈近，少女觉得自己喜欢了他。<br/>
                    他却偶遇了与亡妻一模一样的人。<br/>
                    <br/>
                    <br/>
                    <span style="font-weight:bold;">意外的重逢</span><br/>
                    <br/>
                    凌若菲(李施嬅饰)背负着一个不幸的童年，父亲酗酒、有暴力倾向，母亲离家出走后，她便成为被虐待的目标。<br/>
                    她住在屋邨，朋友不多，但每次从家中“走难”时，邻家男孩总会为她带来药酒、食物。<br/>
                    那晚，夜阑人静，家里火光熊熊，全家人无一幸免，唯有她被及时救出。自此她恍若人球，辗转住在不同的寄养家庭，也再没有见过邻家男孩。<br/>
                    中学毕业后，她在保险界打滚，略有成绩。有日，一位风度翩翩的中年男士，说她与他亡妻的相貌几乎一样。<br/>
                    中年男士主动追求，她并没有接受爱意。因为她早已重遇了那位邻家男孩。<br/>
                    <br/>
                    <br/>
                    <span style="font-weight:bold;">意外的破坏</span><br/>
                    <br/>
                    高大俊朗、聪明开朗、文武双全，父母、老师总以卓声扬(黎诺懿饰)为豪。<br/>
                    他喜欢喂饲流浪猫，因此认识了经常流连街头的柔弱女孩。他知道女孩生活很苦，予以照顾，可惜没多久，女孩搬走了。<br/>
                    升上大学后，他仍然受人簇拥爱戴，当中包括那位总爱与自己斗咀的学妹。<br/>
                    可是毕业那年，他与父亲出海，遇上突如其来的意外，失去了家人。<br/>
                    他痛不欲生，失踪了几年，再次出现的时候，已是一名律师。而且，他再次遇见那位柔弱女孩。二人互相同情对方的缺陷，成为了情侣。<br/>
                    有天，他碰上那位曾经有过暧昧关系的学妹。<br/>
                    她叫殷然。<br/>
                    <br/>
                    <br/>
                    <span style="font-weight:bold;">意外的真相</span><br/>
                    <br/>
                    文杰、殷然、若菲、声扬的关系千丝万缕。<br/>
                    文杰与殷然调查不同保险赔偿的案件，渐发现那些所谓意外，仿佛有人在背后操纵。<br/>
                    四人相互的偶遇和人生中的不幸，果真纯属意外吗？
                </div>
            </div><!--/mox--><a id="pl"></a>
            <div class="comment">
                <div class="ds-thread" data-thread-key="pv_395" data-title="《纯熟意外粤语》警务剧在线观看,纯熟意外粤语网盘迅雷下载 - 飘V网"
                     data-url="http://www.piaov.com/html/395/"></div>
            </div>
        </div>
    </div>


@endsection