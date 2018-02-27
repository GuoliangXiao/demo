<?php
namespace Apps\Controller;
use Think\Controller;
class BarcodeController extends XController {
	public function index(){
		parent::index();
		/*$url='http://localhost/hbh/barcodegen/type.php';
		$url="http://hbh-hbh.7e14.starter-us-west-2.openshiftapps.com/barcodegen/type.php";
		$types=file_get_contents($url);
		*/
		$types=array("BCGcode39","BCGcodabar","BCGcode11","BCGcode128","BCGcode39extended","BCGcode93","BCGean13","BCGean8","BCGgs1128","BCGi25","BCGisbn","BCGmsi","BCGpostnet","BCGs25","BCGupca","BCGupce","BCGupcext2","BCGupcext5","BCGothercode");
		$this->assign('types',$types);
		$this->display();
	}
	public function getinfo()
	{
		$name=I('post.name');
		$info=array(
		'BCGcode39'=>'Code39是条形码的一种，也被称为3 of 9 code、USD-3或者LOGMARS，由于编制简单、能够对任意长度的数据进行编码、支持设备广泛等特性而被广泛采用。',
		'BCGcode39extended'=>'安装了Barcodesoft Code 39 Extended字型,打印code 39条形码就变得非常简单.只要在数据的前後加上星号(*) ,然後使用其中任何一种字型, 条形码就会出现.',
		'BCGcodabar'=>'库德巴码(codabar)是主要用于医疗卫生、图书情报、物资等领域数字和字母信息的自动识别。库德巴码也可表示数字和字母信息，主要用于医疗卫生、图书情报、物资等领域的自动识别。库德巴码（codabar）出现于1972年，是一种长度可变的连续型自校验数字式码制。其字符集为数字0—9，A,B,C,D 4个大写英文字母以及6个特殊字符（-、：、/、. 、+、$），共20个字符。其中A,B,C,D只用作起始符和终止符。常用于仓库、血库和航空快递包裹中。',
		'BCGcode11'=>'Code11码是在1977年Intermec为了给搞信息密度矩阵的特殊应用需求开发出来的。其结构像2/5的矩阵。允许字符包括数字0到9,以及一个特殊字符“-”,因11个允许字符,故称Code 11。',
		'BCGcode128'=>'CODE128码是广泛应用在企业内部管理、生产流程、物流控制系统方面的条码码制，由于其优良的特性在管理信息系统的设计中被广泛使用，CODE128码是应用最广泛的条码码制之一。CODE128码是1981年引入的一种高密度条码，CODE128 码可表示从 ASCII 0 到ASCII 127 共128个字符，故称128码。其中包含了数字、字母和符号字符。',
		'BCGcode93'=>'Code 93码与Code 39码的字符集相同，但93码的密度要比39码高，因而在面积不足的情况下，可以用93码代替39码。它没有自校验功能,为了确保数据安全性,采用了双校验字符,其可靠性比39条码还要高.一维码Code 39：由于编制简单、能够对任意长度的数据进行编码、支持设备广泛等特性而被广泛采用。',
		'BCGean13'=>'EAN码是国际物品编码协会制定的一种商品用条码，通用于全世界。EAN码(英文全称：European Article Number）由前缀码、厂商识别码、商品项目代码和校验码组成。前缀码是国际EAN组织标识各会员组织的代码，我国为690-695；厂商代码是EAN编码组织在EAN分配的前缀码的基础上分配给厂商的代码；商品项目代码由厂商自行编码；校验码为了校验代码的正确性。EAN-13是EAN码的标准版',
		'BCGean8'=>'EAN码是国际物品编码协会制定的一种商品用条码，通用于全世界。EAN码(英文全称：European Article Number）由前缀码、厂商识别码、商品项目代码和校验码组成。前缀码是国际EAN组织标识各会员组织的代码，我国为690-695；厂商代码是EAN编码组织在EAN分配的前缀码的基础上分配给厂商的代码；商品项目代码由厂商自行编码；校验码为了校验代码的正确性。EAN-8是EAN码缩短码',
		'BCGgs1128'=>'UCC/EAN-128条码已被更名为GS1-128条码。EAN-128，目前我国所推行的128码，根据EAN/UCC-128码定义标准将资料转变成条码符号，并采用128码逻辑，具有完整性、紧密性、连结性及高可靠度的特性。辨识范围涵盖生产过程中一些补充性质且易变动之资讯，如生产日期、批号、计量等。可应用于货运栈版标签、携带式资料库、连续性资料段、流通配送标签等。',
		'BCGi25'=>'CODE 25条码是在1970年，由爱登提肯公司和COMPUTER IDENTIX公司共同开发的二进制级别条码，堪称是开拓了条码全新思维方式的一种条码。二五条码由左侧空白区、起始符、数据符、终止符及右侧空白区构成。空不表示信息，宽单元用二进制的“1”表示，窄单元用二进制的“0”表示，起始符用二进制“110”表示（二个宽单元和一个窄单元），终止符用二进制“101”表示（中间是窄单元，两边是宽单元）。',
		'BCGisbn'=>'国际标准书号（International Standard Book Number），简称ISBN，是专门为识别图书等文献而设计的国际编号。ISO于1972年颁布了ISBN国际标准，并在西柏林普鲁士图书馆设立了实施该标准的管理机构——国际ISBN中心。现在，采用ISBN编码系统的出版物有：图书、小册子、缩微出版物、盲文印刷品等。2007年1月1日前，ISBN由10位数字组成，分四个部分：组号（国家、地区、语言的代号），出版者号，书序号和检验码。',
		'BCGmsi'=>'MSI条码是一种纯数字条码，使用BCD十十进制字表示，它的名字來自于MSI数据公司。',
		'BCGpostnet'=>'POSTNET（邮政数字编码技术）条形码用来对美国邮件的 ZIP 代码进行编码。邮政服务的邮件处理工序设计为完全自动化，而 POSTNET 条形码符合自动化设备的需求。',
		'BCGs25'=>'CODE 25条码是在1970年，由爱登提肯公司和COMPUTER IDENTIX公司共同开发的二进制级别条码，堪称是开拓了条码全新思维方式的一种条码。二五条码由左侧空白区、起始符、数据符、终止符及右侧空白区构成。空不表示信息，宽单元用二进制的“1”表示，窄单元用二进制的“0”表示，起始符用二进制“110”表示（二个宽单元和一个窄单元），终止符用二进制“101”表示（中间是窄单元，两边是宽单元）。',
		'BCGupca'=>'UPC-A的用于通用商品（SXXXXX XXXXXC）。UPC码(Universal Product Code)是最早大规模应用的条码，其特性是一种长度固定、连续性的条码，主要在美国和加拿大使用，由于其应用范围广泛，故又被称万用条码。 UPC码仅可用来表示数字，故其字码集为数字0~9。UPC码共有A、B、C、D、E等五种版本。',
		'BCGupce'=>'UPC-E的用于商品短码（XXXXXX）。UPC码(Universal Product Code)是最早大规模应用的条码，其特性是一种长度固定、连续性的条码，主要在美国和加拿大使用，由于其应用范围广泛，故又被称万用条码。 UPC码仅可用来表示数字，故其字码集为数字0~9。UPC码共有A、B、C、D、E等五种版本。',
		'BCGupcext2'=>'UPC码扩展码2。UPC码(Universal Product Code)是最早大规模应用的条码，其特性是一种长度固定、连续性的条码，主要在美国和加拿大使用，由于其应用范围广泛，故又被称万用条码。 UPC码仅可用来表示数字，故其字码集为数字0~9。UPC码共有A、B、C、D、E等五种版本。',
		'BCGupcext5'=>'UPC码扩展码5。UPC码(Universal Product Code)是最早大规模应用的条码，其特性是一种长度固定、连续性的条码，主要在美国和加拿大使用，由于其应用范围广泛，故又被称万用条码。 UPC码仅可用来表示数字，故其字码集为数字0~9。UPC码共有A、B、C、D、E等五种版本。',
		'BCGothercode'=>'其他',
		);
		$this->ajaxReturn($info[$name]);
	}
}