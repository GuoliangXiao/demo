var base64EncodeChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
var base64DecodeChars = new Array(-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, 63, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, -1, -1, -1, -1, -1, -1, -1, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, -1, -1, -1, -1, -1, -1, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, -1, -1, -1, -1, -1);
function encodebase64(s,kind) {
	if (kind == 1) {
		s = utf16to8(s);
	} else {
		s = utf16divide(s);
	}
	return base64encode(s);
}

function decodebase64(s,kind) {
	if(checkbase64(s)){
		var sr = base64decode(s);
		if (kind == 1) {
			return utf8to16(sr);
		} else {
			return utf16join(sr);
		}
	}else{
		return null;
	}	
}

function checkbase64(str) {
	for (var i = 0; i < str.length; i++) {
		var index=str.charCodeAt(i);
		if ((index>=48&&index<=57)||(index>=65&&index<=90)||(index>=97&&index<=122)||index==47||index==43||index==61) {
			
		} else {
			return false;
		}
	}
	return true;
}
function base64encode(str) {
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

function base64decode(str) {
	var c1, c2, c3, c4;
	var i, len, out;
	len = str.length;
	i = 0;
	out = "";
	while (i < len) {
		/* c1 */
		do {
			c1 = base64DecodeChars[str.charCodeAt(i++) & 0xff];
		} while (i < len && c1 == -1);
		if (c1 == -1)
			break;
		/* c2 */
		do {
			c2 = base64DecodeChars[str.charCodeAt(i++) & 0xff];
		} while (i < len && c2 == -1);
		if (c2 == -1)
			break;
		out += String.fromCharCode((c1 << 2) | ((c2 & 0x30) >> 4));
		/* c3 */
		do {
			c3 = str.charCodeAt(i++) & 0xff;
			if (c3 == 61)
				return out;
			c3 = base64DecodeChars[c3];
		} while (i < len && c3 == -1);
		if (c3 == -1)
			break;
		out += String.fromCharCode(((c2 & 0XF) << 4) | ((c3 & 0x3C) >> 2));
		/* c4 */
		do {
			c4 = str.charCodeAt(i++) & 0xff;
			if (c4 == 61)
				return out;
			c4 = base64DecodeChars[c4];
		} while (i < len && c4 == -1);
		if (c4 == -1)
			break;
		out += String.fromCharCode(((c3 & 0x03) << 6) | c4);
	}
	return out;
}

function utf16to8(str) {
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
			if (c >= 0xD800 && c <= 0xDFFF) {
				if (c <= 0xDBFF && i + 1 < len) {
					var c1 = str.charCodeAt(i + 1);
					if (c1 >= 0xDC00 && c1 <= 0xDFFF) {
						//alert("c:"+c.toString(16)+" t:"+(c&0x03FF).toString(16));
						var t1 = (c & 0x03FF) << 10;
						var t2 = (c1 & 0x03FF);
						var t = t1 + t2 + 0x10000;
						out += String.fromCharCode(0xF0 | ((t >> 18) & 0x07));
						out += String.fromCharCode(0x80 | ((t >> 12) & 0x3F));
						out += String.fromCharCode(0x80 | ((t >> 6) & 0x3F));
						out += String.fromCharCode(0x80 | ((t >> 0) & 0x3F));
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

function utf8to16(str) {
	var out, i, len, c;
	var char2, char3, char4;
	out = "";
	len = str.length;
	i = 0;
	while (i < len) {
		c = str.charCodeAt(i++);
		switch (c >> 4) {
		case 0:
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
		case 6:
		case 7:
			// 0xxxxxxx
			out += str.charAt(i - 1);
			break;
		case 12:
		case 13:
			// 110x xxxx 10xx xxxx
			if (i < len) {
				char2 = str.charCodeAt(i++);
				out += String.fromCharCode(((c & 0x1F) << 6) | (char2 & 0x3F));
			}
			break;
		case 14:
			// 1110 xxxx10xx xxxx10xx xxxx
			if (i + 1 < len) {
				char2 = str.charCodeAt(i++);
				char3 = str.charCodeAt(i++);
				out += String.fromCharCode(((c & 0x0F) << 12) | ((char2 & 0x3F) << 6) | ((char3 & 0x3F) << 0));
			}
			break;
		case 15:
			if (i + 2 < len) {
				char2 = str.charCodeAt(i++);
				char3 = str.charCodeAt(i++);
				char4 = str.charCodeAt(i++);
				var t = ((c & 0x07) << 18) + ((char2 & 0x3F) << 12) + ((char3 & 0x3F) << 6) + ((char4 & 0x3F) << 0);
				if (t > 0x10000) {
					t -= 0x10000;
				}
				var r1 = 0xD800 + ((t >> 10) & 0x3FF);
				var r2 = 0xDC00 + (t & 0x3FF);
				out += String.fromCharCode(r1, r2);
			}
		}
	}
	return out;
}

function utf16divide(str) {
	var out = "";
	for (var i = 0; i < str.length; i++) {
		var c = str.charCodeAt(i);
		out += String.fromCharCode(c >> 8);
		out += String.fromCharCode(c & 0xFF);
	}
	return out;
}

function utf16join(str) {
	var out = "";
	for (var i = 0; i < str.length; i++) {
		var c1 = str.charCodeAt(i);
		if (i + 1 < str.length) {
			i++;
			var c2 = str.charCodeAt(i);
			out += String.fromCharCode(((c1 << 8) & 0xFF00) | (c2 & 0xFF));
		} else {
			out += String.fromCharCode(((c1 << 8) & 0xFF00));
		}
	}
	return out;
}