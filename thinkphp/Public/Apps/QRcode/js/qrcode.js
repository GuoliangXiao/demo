function initMap(id) {
    //alert("map");
    var map = new BMap.Map(id);
    // 创建Map实例
    map.centerAndZoom(new BMap.Point(116.404, 39.915), 12);
    // 初始化地图,设置中心点坐标和地图级别
    map.addControl(new BMap.MapTypeControl());
    //添加地图类型控件
    map.setCurrentCity("北京");
    // 设置地图显示的城市 此项是必须设置的
    map.enableScrollWheelZoom(true);
    //开启鼠标滚轮缩放
    var geolocation = new BMap.Geolocation();
    geolocation.getCurrentPosition(function(r) {
        if (this.getStatus() == BMAP_STATUS_SUCCESS) {
            var mk = new BMap.Marker(r.point);
            map.addOverlay(mk);
            map.panTo(r.point);
            position=r.point;
            //alert('您的位置：' + r.point.lng + ',' + r.point.lat);
        } else {
            alert('failed' + this.getStatus());
        }
    }, {
        enableHighAccuracy : true
    });
}
function toUtf8(str) {
	var out, i, len, c;
	out = "";
	len = str.length;
	for ( i = 0; i < len; i++) {
		c = str.charCodeAt(i);
		if ((c >= 0x0001) && (c <= 0x007F)) {
			out += str.charAt(i);
		} else if (c > 0x7F && c <= 0x7FF) {
			out += String.fromCharCode(0xC0 | ((c >> 6) & 0x1F));
			out += String.fromCharCode(0x80 | ((c >> 0) & 0x3F));
		} else {
			if (c>=0xD800&&c<=0xDFFF) {
				if(c<=0xDBFF&&i+1<len){
					var c1=str.charCodeAt(i+1);
					if(c1>=0xDC00&&c1<=0xDFFF){
						//alert("c:"+c.toString(16)+" t:"+(c&0x03FF).toString(16));
						var t1=(c&0x03FF)<<10;	
					    var t2=(c1&0x03FF);
					    var t=t1+t2+0x10000;
					    out+=String.fromCharCode(0xF0 | ((t >> 18) & 0x07));
					    out+=String.fromCharCode(0x80 | ((t >> 12) & 0x3F));					  
					    out+=String.fromCharCode(0x80 | ((t >> 6) & 0x3F));					  
					    out+=String.fromCharCode(0x80 | ((t >> 0) & 0x3F));					  
					}
					i++;
				}
			} else {
				out += String.fromCharCode(0xE0 | ((c >> 12) & 0x0F));
				out += String.fromCharCode(0x80 | ((c >> 6) & 0x3F));
				out += String.fromCharCode(0x80 | ((c >> 0) & 0x3F));
			}
		}
	}
	return out;
} 
function cut_blank(s){
    return s.replace(/^\s+|\s+$/g, "");
}
function telCheck(phone) {
    var patten = /^(((\(0\d{2,3}\)){1}|(0\d{2,3}[- ]?){1})?([1-9]{1}[0-9]{2,7}(\-\d{3,4})?))$/;
    var pat = /^(\b13[0-9]{9}\b)|(\b14[7-7]\d{8}\b)|(\b15[0-9]\d{8}\b)|(\b18[0-9]\d{8}\b)|\b1[1-9]{2,4}\b$/;
    var checkphone = phone.toString().split('-');
    if (checkphone.length > 2)
        return false;
    if (phone != "" || phone.length != 0) {
        if (phone.substr(0, 3) == "+86") {
            phone = phone.substr(3, phone.length);
        }
        if (phone.substr(0, 2) == "13" || phone.substr(0, 2) == "14" || phone.substr(0, 2) == "15" || phone.substr(0, 2) == "18") {
            if (pat.test(phone)) {
                return true;
            } else {
                return false;
            }
        } else {
            if (patten.test(phone)) {
                return true;
            } else {
                return false;
            }
        }
    } else {
        return false;
    }
}

function validate(txturl) {

    //判断输入的链接地址长度是否符合要求，一个汉字记两个字符
    var tempURL = document.getElementById(txturl).value;
    var y = 0;
    for (var i = 0; i < tempURL.length; i++) {
        if ((tempURL.charCodeAt(i) < 0) || (tempURL.charCodeAt(i) > 255))
            y += 2;
        else
            y += 1;
    }
    if (y > 100) {
        alert("请注意：链接地址长度不符合要求，最多250个字符");
        return false;
    }
    if (tempURL != "") {
        //判断输入链接地址是否符合地址的格式
        var url = "^[A-Za-z]+://[A-Za-z0-9-_]+\.[A-Za-z0-9-_%&?/.=]+$";

        var matchURL = tempURL.match(url);
        if (matchURL == null) {
            alert("请注意：链接地址不符合要求");
            document.getElementById(txturl).focus();
            return false;
        }
    }
    return true;
}

function mailCheck(mail) {
    var reyx = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/;
    return (reyx.test(mail));
}