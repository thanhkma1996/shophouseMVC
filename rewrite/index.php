<!DOCTYPE html>
<html>
<head>
	<title>index page</title>
	<base href="http://localhost:8080/Devpro/buoi17_project/rewrite/">
</head>
<body>
<?php 
		/*
				Rewrite url thuwjc chaats laf vieejcc ddijnh dajng casc dudownfg dan ao => load duong dan thuc
				Cau hinh viejc url se duoc thuc hien trong file .htaccess
				Casc thanh phan vaf dinh nghia trong file htaccess
					+ ghi chus trong file htacess : suwr dujng daaus thawng owr dau dong
					+ Neeus bat cu 1 thanh phan nao trong file htacess thi toan bo web se kkhong truy cap duoc,file htacess nam o thu muc root cua web ngang cap file index . Dat file htacess trong thu muc nao thi no se tac doong den thu muc do den cac muc con
					+ De bat che do rewrite  cho web,can thuc hien tag lenh; rewriteEngine On
					+ Cu phap cua viec rewrite : RewriteRule ^ duonng-dan-ao$duong-da-thuc
					+ Ther HTML <base href = "duong dan"> se lay duong dan trong thuoc tinh href lam duong dan goc cho toan trang
					+ Truyeefn bien tren url
						- RewriteRule ^duong-dan)+(.*)-(.*)$ index.php?a=$1&b=$2
						- Giai thich  :
							+ (.*) la dai dien cho tat ca cac ki tu
							+ (.*) dau tien cua duong dan-ao tuong ung voi $1, o phan duong dan thuc,tuong tu (.*) thu 2 tuong ung voi $2 o duong dan thuc
						- (.*) khong duoc chua cac ki tu dac biet : Vd : / & $/....... 
					+Remove-unicode hafm ve kis tu gach ngang 
		*/

?>
<?php

		//load fie remove_unicode
			include "remove_unicode.php";
			echo remove_unicode("hoom nay chawsc chawns laf thuws 2");
		
?>
<img src="1.jpg">
</body>
</html>