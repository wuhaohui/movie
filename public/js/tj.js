url=document.URL;
url=url.split("html/");
url=url[1].split("/");
document.writeln("<script language=\"javascript\" src=\"/hits.aspx?id="+url[0]+"&t=1\" charset=\"utf-8\"><\/script>");

var duoshuoQuery = {short_name:"piv"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();

var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?2759f1032dcbb0ebd1ef1066eb4f112a";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();