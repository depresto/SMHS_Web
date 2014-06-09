<?php
$linksb=mssql_connect("smhs-web-server", "sa", "SmhsAdmin@8242560");
if (!$linksb){
		echo"<div align='center'><font size=5 color=#ff0000><b>無法與 SQL 資料庫連線,請洽管理員</b></font></div><br>";
		exit();
}else{
		mssql_select_db("schoolnews",$linksb);
}


?>
