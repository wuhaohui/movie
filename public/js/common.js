function $(id) {
	return document.getElementById(id);
}

function addFavorite(file, title) {
    try {
        window.external.addFavorite(file, title);
    } catch(e) {
        try {
            window.sidebar.addPanel(title, file, "");
        } catch(e) {
            alert("加入收藏失败，请使用Ctrl+D进行添加");
        }
    }
}


/**
 * History
 * @author yulipu
 */
function History(key) {
    this.limit = 10;  // 最多10条记录
    this.key = key || 'y_his';  // 键值
    this.jsonData = null;  // 数据缓存
    this.cacheTime = 720;  // 720 小时
    this.path = '/';  // cookie path
}
History.prototype = {
    constructor : History
    ,setCookie: function(name, value, expiresHours, options) {
        options = options || {};
        var cookieString = name + '=' + encodeURIComponent(value);
        //判断是否设置过期时间
        if(undefined != expiresHours){
            var date = new Date();
            date.setTime(date.getTime() + expiresHours * 3600 * 1000);
            cookieString = cookieString + '; expires=' + date.toUTCString();
        }
        
        var other = [
            options.path ? '; path=' + options.path : '',
            options.domain ? '; domain=' + options.domain : '',
            options.secure ? '; secure' : ''
        ].join('');
        
        document.cookie = cookieString + other; 
    }
    ,getCookie: function(name) {
        // cookie 的格式是个个用分号空格分隔
        var arrCookie = document.cookie ? document.cookie.split('; ') : [],
            val = '',
            tmpArr = '';
            
        for(var i=0; i<arrCookie.length; i++) {
            tmpArr = arrCookie[i].split('=');
            tmpArr[0] = tmpArr[0].replace(' ', '');  // 去掉空格
            if(tmpArr[0] == name) {
                val = decodeURIComponent(tmpArr[1]);
                break;
            }
        }
        return val.toString();
    }
    ,deleteCookie: function(name) {
        this.setCookie(name, '', -1, {"path" : this.path});
        //console.log(document.cookie);
    }
    ,initRow : function(title, link, other, deurl) {
        return '{"title":"'+title+'", "link":"'+link+'", "other":"'+other+'", "deurl":"'+deurl+'"}';
    }
    ,parse2Json : function(jsonStr) {
        var json = [];
        try {
            json = JSON.parse(jsonStr);
        } catch(e) {
            //alert('parse error');return;
            json = eval(jsonStr);
        }
        
        return json;
    }
    
    // 添加记录
    ,add : function(title, link, other, deurl) {
        var jsonStr = this.getCookie(this.key);
        //alert(jsonStr); return;
        
        if("" != jsonStr) {
            this.jsonData = this.parse2Json(jsonStr);
            // 重新赋值 组装 json 字符串
            jsonStr = '[' + this.initRow(title, link, other, deurl) + ',';
            for(var i=0; i<this.limit-1; i++) {
				// 排重
                if(undefined != this.jsonData[i]) {
					if(link == this.jsonData[i]['link']) {
					}else{
						jsonStr += this.initRow(this.jsonData[i]['title'], this.jsonData[i]['link'], this.jsonData[i]['other'], this.jsonData[i]['deurl']) + ',';
					}
                } else {
                    break;
                }
            }
            jsonStr = jsonStr.substring(0, jsonStr.lastIndexOf(','));
            jsonStr += ']';
            
        } else {
            jsonStr = '['+ this.initRow(title, link, other, deurl) +']';
        }
        
        //alert(jsonStr);
        this.jsonData = this.parse2Json(jsonStr);
        this.setCookie(this.key, jsonStr, this.cacheTime, {"path" : this.path});
    }
    // 得到记录
    ,getList : function() {
        // 有缓存直接返回
        if(null != this.jsonData) {
            return this.jsonData;  // Array
        } 
        // 没有缓存从 cookie 取
        var jsonStr = this.getCookie(this.key);
        if("" != jsonStr) {
            this.jsonData = this.parse2Json(jsonStr);
        }
        
        return this.jsonData;
    }
    // 清空历史
    ,clearHistory : function() {
        this.deleteCookie(this.key);
        this.jsonData = null;
		document.getElementById('playhistory').innerHTML="<li>浏览记录已清除</li>";
    }
};
var his = new History('History'); 
var data = his.getList();
var innerStr = '';
for(var i = 0; i < data.length; i++){
innerStr += "<li><a href=\"http://www.piaov.com/html/"+data[i]['link']+"/\">"+data[i]['title']+"</a>/<a href=\"http://www.piaov.com"+data[i]['deurl']+"\">"+data[i]['other']+"</a><label><a class=\"color\" href=\"http://www.piaov.com" + data[i]['deurl'] + "\">继续观看</a></label></li>";
}
function PlayHistory(){
	if(innerStr==''){
		document.getElementById('playhistory').innerHTML="<li>暂无浏览记录</li>";
		}else{
		document.getElementById('playhistory').innerHTML=innerStr;
		}
}

function markVideo(vd,d,t,s){
	var textStart = Array("很烂","很烂","一般","一般","不妨一看","不妨一看","比较精彩","比较精彩","棒极了","棒极了");
	var id='BT'+(new Date()).getTime();
	ajax.get("/gold.aspx?id="+vd,function (obj){
			var a=obj.responseText
			try{
				a.replace(/\[(\d+),(\d+),(\d+)\]/i,function ($0,d,t,s){
					var x=parseInt(d)+parseInt(t),y=(Math.round(s / x * 10) / 10.0) || 0;
					document.getElementById('MARK_B1').value=x;
					document.getElementById('MARK_B2').value=y;
					document.getElementById('MARK_B3').value=s;
					if(s<=0){
						document.getElementById("filmStarScore").innerHTML = "0<i>.0</i>";
						document.getElementById("start").className = "starB s0";
					}else{
						var ky = y.toString();
						ky = ky.replace(".","<i>.");
						ky = ky + "</i>";
						document.getElementById("filmStarScore").innerHTML = ky;
						document.getElementById("start").className = "starB s" + parseInt(y, 10).toString();
						if(parseInt(y, 10)==0){ var ka = 0; }else{ var ka = parseInt(y, 10)-1; }
						document.getElementById("filmStarScoreTip").innerHTML = textStart[ka]+"("+x+"评)";
						if(document.getElementById("renums")){ document.getElementById("renums").innerHTML = x;	}
					}
				});
			}catch(ig){}
	});
}
function startm(v){
	var textStart = Array("很烂","很烂","一般","一般","不妨一看","不妨一看","比较精彩","比较精彩","棒极了","棒极了");
  document.getElementById("filmStarScoreTip").innerHTML = textStart[v-1];
  document.getElementById("start").className = "starB s" + v.toString();
  document.getElementById("filmStarScore").innerHTML = v + "<i>.0</i>"

}
function OnStar(mid,v){
	var textStart = Array("很烂","很烂","一般","一般","不妨一看","不妨一看","比较精彩","比较精彩","棒极了","棒极了");
	ajax.get("/gold.aspx?id="+mid+"&type="+v,function (obj){
		var x=''+obj.responseText;
		if(x.indexOf("havescore")!=-1){
			alert('你已经评过分啦');
		}else{
			var x = parseFloat(document.getElementById("MARK_B1").value);
			var y = parseFloat(document.getElementById("MARK_B2").value);
			var z = parseFloat(document.getElementById("MARK_B3").value);
			var kx = x + 1;//人数
			var kz = z + v;//总分
			var ky = (Math.round(kz / kx * 10) / 10) || 0;
			document.getElementById("MARK_B1").value = kx;
			document.getElementById("MARK_B2").value = ky;
			document.getElementById("MARK_B3").value = kz;
			var kky = ky.toString();
			if(kky.indexOf(".")<0){
				kky = kky + ".0";
			}
			kky = kky.replace(".","<i>.");
			kky = kky + "</i>";
			document.getElementById("filmStarScore").innerHTML = kky;
			document.getElementById("start").className = "starB s" + (parseInt(ky, 10)-1).toString();
			document.getElementById("filmStarScoreTip").innerHTML = "感谢您的参与！";
			alert("已有"+kx+"人参与评分");
			//document.getElementById("filmStarScoreTip").innerHTML = textStart[ky]+"("+kx+"评)";
			if(document.getElementById("renums")){ document.getElementById("renums").innerHTML = kx;	}
			setTimeout(kaifach,10000);
		}
	});
}
function kaifach(){
	var textStart = Array("很烂","很烂","一般","一般","不妨一看","不妨一看","比较精彩","比较精彩","棒极了","棒极了");
	var x = parseFloat(document.getElementById("MARK_B1").value);
	var y = parseFloat(document.getElementById("MARK_B2").value);
	var z = parseFloat(document.getElementById("MARK_B3").value);

	var ky = y.toString();
	if(ky.indexOf(".")<0){
		ky = ky + ".0";
	}
	ky = ky.replace(".","<i>.");
	ky = ky + "</i>";
	document.getElementById("filmStarScore").innerHTML = ky;
	document.getElementById("start").className = "starB s" + parseInt(y, 10).toString();
	if(parseInt(y, 10)>0){
		document.getElementById("filmStarScoreTip").innerHTML = textStart[parseInt(y, 10)-1]+"("+x+"评)";
	}else{
		if(z>0){
			document.getElementById("filmStarScoreTip").innerHTML = textStart[0]+"("+x+"评)";
		}else{
			document.getElementById("filmStarScoreTip").innerHTML = "";
		}
	}


}