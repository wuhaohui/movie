var base64EncodeChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";

/**
 * base64编码
 * @param {Object} str
 */
function base64encode(str){
    var out, i, len;
    var c1, c2, c3;
    len = str.length;
    i = 0;
    out = "";
    while (i < len) {
        c1 = str.charCodeAt(i++) & 0xff;
        if (i == len) {
            out += base64EncodeChars.charAt(c1 >> 2);
            out += base64EncodeChars.charAt((c1 & 0x3) << 4);
            out += "==";
            break;
        }
        c2 = str.charCodeAt(i++);
        if (i == len) {
            out += base64EncodeChars.charAt(c1 >> 2);
            out += base64EncodeChars.charAt(((c1 & 0x3) << 4) | ((c2 & 0xF0) >> 4));
            out += base64EncodeChars.charAt((c2 & 0xF) << 2);
            out += "=";
            break;
        }
        c3 = str.charCodeAt(i++);
        out += base64EncodeChars.charAt(c1 >> 2);
        out += base64EncodeChars.charAt(((c1 & 0x3) << 4) | ((c2 & 0xF0) >> 4));
        out += base64EncodeChars.charAt(((c2 & 0xF) << 2) | ((c3 & 0xC0) >> 6));
        out += base64EncodeChars.charAt(c3 & 0x3F);
    }
    return out;
}
function utf16to8(str){
    var out, i, len, c;
    out = "";
    len = str.length;
    for (i = 0; i < len; i++) {
        c = str.charCodeAt(i);
        if ((c >= 0x0001) && (c <= 0x007F)) {
            out += str.charAt(i);
        }
        else 
            if (c > 0x07FF) {
                out += String.fromCharCode(0xE0 | ((c >> 12) & 0x0F));
                out += String.fromCharCode(0x80 | ((c >> 6) & 0x3F));
                out += String.fromCharCode(0x80 | ((c >> 0) & 0x3F));
            }
            else {
                out += String.fromCharCode(0xC0 | ((c >> 6) & 0x1F));
                out += String.fromCharCode(0x80 | ((c >> 0) & 0x3F));
            }
    }
    return out;
}
var kkDapCtrl = null;
function kkGetDapCtrl()
{
	if(null == kkDapCtrl) {
	  try{
	  	if (window.ActiveXObject) {
				kkDapCtrl = new ActiveXObject("DapCtrl.DapCtrl");  		
	  	}	else {
				var browserPlugins = navigator.plugins;
				for (var bpi=0; bpi<browserPlugins.length; bpi++) {
					try {
						if (browserPlugins[bpi].name.indexOf('Thunder DapCtrl') != -1) {
							var e = document.createElement("object");   
							e.id = "dapctrl_history";   
							e.type = "application/x-thunder-dapctrl"; 
							e.width = 0;   
							e.height = 0;
							document.body.appendChild(e);
							break;
						}
					} catch (e) {}
				}
				kkDapCtrl = document.getElementById('dapctrl_history');
	  	}
	  } catch(e) {}
	}
	return kkDapCtrl;
}

function start(url){
  var dapCtrl=kkGetDapCtrl();  
  try {
		var ver = dapCtrl.GetThunderVer("KANKAN", "INSTALL");
		var type = dapCtrl.Get("IXMPPACKAGETYPE");
		if(ver && type && ver >= 672 && type >= 2401)
		{
			dapCtrl.Put("sXmp4Arg", '"'+url+'"'+' /sstartfrom _web_xunbo /sopenfrom web_xunbo');			
		}	else {
            var r = confirm("请先下载安装迅雷看看，点确定进入迅雷官网下载。安装完成后请重启浏览器。   ");
            if (r == true) {
			window.location.href ="http://www.kankan.com/app/xmp.html";
            }else{
			}
		}
	} catch(e) {
            var r = confirm("请先下载安装迅雷看看，点确定进入迅雷官网下载。安装完成后请重启浏览器。   ");
            if (r == true) {
			window.location.href ="http://www.kankan.com/app/xmp.html";
            }else{
			}
	}
}

function CopyToClip(num) {
    i=num;
    var a = document.getElementsByName('CopyAddr'+i+'');
    var n = a.length;
    var ed2kcopy = "";
    for (var k = 0; k < n; k++) {
        if (a[k].checked) {
            ed2kcopy += a[k].value;
            ed2kcopy += "\r\n";
        }
    }
    copyToClipboard(ed2kcopy);
}
function copyToClipboard(txt) {
    if (window.clipboardData) {
        window.clipboardData.clearData();
        window.clipboardData.setData("Text", txt);
		alert("地址全部复制成功！");
    } else if (navigator.userAgent.indexOf("Opera") != -1) {
		window.location = txt; 
		alert("地址全部复制成功！");
	} else if ( navigator.userAgent.indexOf("Chrome") != -1) {
        alert("\u60a8\u4f7f\u7528\u7684\u6d4f\u89c8\u5668\u4e0d\u652f\u6301\u590d\u5236\u529f\u80fd\uff0c\u8bf7\u4f7f\u7528\u0049\u0045\u6216\u8005\u6d4f\u89c8\u5668\u517c\u5bb9\u6a21\u5f0f\u3002\u4e5f\u53ef\u76f4\u63a5\u4f7f\u7528\u0043\u0074\u0072\u006c\u002b\u0043\u6216\u9f20\u6807\u53f3\u952e\u590d\u5236\u5730\u5740\u680f\u7684\u5730\u5740\u3002\u000d\u000a")
    } else if (window.netscape) {
        try {
            netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect")
        } catch(e) {
            alert("被浏览器拒绝！\n请在浏览器地址栏输入'about:config'并回车\n然后将'signed.applets.codebase_principal_support'设置为'true'")
        }
        var clip = Components.classes['@mozilla.org/widget/clipboard;1'].createInstance(Components.interfaces.nsIClipboard);
        if (!clip) return;
        var trans = Components.classes['@mozilla.org/widget/transferable;1'].createInstance(Components.interfaces.nsITransferable);
        if (!trans) return;
        trans.addDataFlavor('text/unicode');
        var str = new Object();
        var len = new Object();
        var str = Components.classes["@mozilla.org/supports-string;1"].createInstance(Components.interfaces.nsISupportsString);
        var copytext = txt;
        str.data = copytext;
        trans.setTransferData("text/unicode", str, copytext.length * 2);
        var clipid = Components.interfaces.nsIClipboard;
        if (!clip) return false;
        clip.setData(trans, null, clipid.kGlobalClipboard);
		alert("地址全部复制成功！");
    }
}
function CheckAll(num)
{
	var allBox=document.getElementsByName('CopyAddr'+num+'');
	var checked=document.getElementById('allcheck'+num+'').checked;
	for(var k=0;k<allBox.length;k++)
	{
		allBox[k].checked=checked;
	}
}

function bytesToSize(bytes) {
    var k = 1024,
        sizes = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'],
        i = Math.floor(Math.log(bytes) / Math.log(k));
   return Math.round((bytes / Math.pow(k, i))*100)/100 + ' ' + sizes[i];
}

function echoDown(str,num){
	var s=str.split("###");
	for(var i=0;i<s.length-1;i++){
		var durl = s[i];
		var gurl = decodeURIComponent(durl);
		var xl = "thunder://"+base64encode("AA"+durl+"ZZ");
		var xf = "qqdl://"+base64encode(utf16to8(gurl));
		if(durl.indexOf('ed2k')!=-1){
		var sDownUrl=gurl.split("|");
		var fileName=sDownUrl[2];
		document.writeln("<li><i><input type=\"checkbox\" value=\""+gurl+"\" name=\"CopyAddr"+num+"\" /></i><p><a href=\""+xl+"\">"+fileName+"</a>("+bytesToSize(sDownUrl[3])+")</p><span><a class=\"d1\" href=\""+xl+"\">迅雷下载</a><a href=\""+xf+"\" class=\"d2\">旋风下载</a><a class=\"d3\" href=\"javascript:video(0);\" onclick=\"start('"+xl+"')\">迅雷播放</a><a class=\"d4\" href=\""+durl+"\">电驴下载</a></span></li>");
		}else if(durl.indexOf('magnet')!=-1){
		var sDownUrl=gurl.split("&dn=");
		var fileName=sDownUrl[1];
		document.writeln("<li><i><input type=\"checkbox\" value=\""+gurl+"\" name=\"CopyAddr"+num+"\" /></i><p><a href=\""+xl+"\">"+fileName+"</a></p><span><a class=\"d1\" href=\""+xl+"\">迅雷下载</a><a class=\"d3\" href=\"javascript:video(0);\" onclick=\"start('"+sDownUrl[0]+"')\">迅雷播放</a><a class=\"d4\" href=\""+sDownUrl[0]+"\">磁力下载</a></span></li>");
		}else{
		var sDownUrl=gurl.split("/");
		var fileName=sDownUrl[sDownUrl.length-1];
		document.writeln("<li><i><input type=\"checkbox\" value=\""+gurl+"\" name=\"CopyAddr"+num+"\" /></i><p><a href=\""+xl+"\">"+fileName+"</a></p><span><a class=\"d1\" href=\""+xl+"\">迅雷下载</a><a href=\""+xf+"\" class=\"d2\">旋风下载</a><a class=\"d3\" href=\"javascript:video(0);\" onclick=\"start('"+gurl+"')\">迅雷播放</a></span></li>");
  }
}
document.writeln("<li class=\"ckbox\"><i><input id=\"allcheck"+num+"\" onclick=\"CheckAll("+num+")\" name=\"checkall\" type=\"checkbox\"><label for=\"allcheck"+num+"\">全选</label></i><p><a href=\"javascript:void(0);\" onclick=\"CopyToClip("+num+")\">复制链接到剪贴板</a></p></li>");
}