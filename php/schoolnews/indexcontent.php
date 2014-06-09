<?php

	require "getlink.inc";			
	$newsno=$_GET['newsno'];
	$str="select newsno,newstitle,newscontent,newshot,newsdate,unit,linkone,linktwo,class,filesnum from TBnews where newsno='$newsno'";
	$result=mssql_query($str,$linksb) or die ("無法<b>查詢</b>舊有的記錄，請洽系統管理者<br>");
	list($newsno,$newstitle,$newscontent,$newshot,$newsdate,$unit,$linkone,$linktwo,$class,$filesnum)=mssql_fetch_row($result);
		$newscontent=nl2br($newscontent);
		
	$newshot+=1;
	$str3="update TBnews set newshot=$newshot where newsno='$newsno'";
	$result3=mssql_query($str3,$linksb) or die("無法寫入softball tbnews資料庫<br>");
	
	//$news_file_date=substr($newsdate,0,10); //取日期
	
	/*	$file_doc_path="news_files/doc/".$news_file_date.trim($newstitle).".doc";	//檔案路徑。";
		$file_path="news_files/".$newsno."/".$news_file_date.trim($newstitle).".doc";	//檔案路徑。";
		if (file_exists($file_doc_path)){		//判別doc檔案是否存在
				$news_doc_file="<a href='$file_doc_path' target='_blank'><img src='images/folder.gif' width='22' height='20'></a>";
		}else{
				$news_doc_file="";
		}
		$file_xls_path="news_files/xls/".$news_file_date.trim($newstitle).".xls";	//檔案路徑。";
		if (file_exists($file_xls_path)){		//判別xls檔案是否存在
				$news_xls_file="<a href='$file_xls_path' target='_blank'><img src='images/red_folder.gif' width='22' height='20'></a>";
		}else{
				$news_xls_file="";
		}
		*/
		
		if (trim($linkone)!=""){
			$linkone_msg="<a href='$linkone' target='_blank'>【相關連結1】</a>";		
		}
		if (trim($linktwo)!=""){
			$linktwo_msg="<a href='$linktwo' target='_blank'>【相關連結2】</a>";		
		}
		
		switch ($class){
		case "1":
		 	$class_msg="『行政單位』";
			break;
		case "2":
		 	$class_msg="『學校榮譽』";
			break;
		case "3":
		 	$class_msg="『獎助學金』";
			break;
		case "4":
		 	$class_msg="『教師研習』";
			break;
		case "5":
		 	$class_msg="『學校活動』";
			break;
		case "6":
		 	$class_msg="『下載資料』";
			break;		
		default:
		 $class_msg="『行政單位』";
		 }	

?>
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>詳細消息內容</title>

<style type="text/css">
<!--
.style2 {font-size: 10pt}
.style4 {font-size: 10px}
-->
</style>
<link href="TEST.CSS" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style5 {
	font-size: x-large;
	font-weight: bold;
}
-->
</style>
</head>

<body>

<form method="POST" action="">
    <div align="center"><span class="style5">海星高中<?php echo $class_msg; ?>最新公告</span><br>
      <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="702">
            <div align="right"><font size="2">            | <a href="javascript:window.close();">關閉這個頁面</a> 
            | 
                
          </font></div></td>
        </tr>
      </table>
      <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#D0EF9" width="700" align="center">
        <tr>
          <td width="476" height="0" valign="middle">        <div align="center">
              
              
            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#D0EF9" width="700" align="center">
              <tr bgcolor="#264DFF"> 
                <td height="26" colspan="6" align="right" bgcolor="#A8E13A"> 
                  <div align="left"><font color="#000000"><img src="images/icon_004.gif" width="12" height="14"><strong><?php echo stripslashes($newstitle); ?></strong></font></div>                </td>
              </tr>
              <tr bgcolor="#A4CCF4" class="style2"> 
                <td width="16%" align="right" valign="top" bgcolor="#E0F4BB"> 
                  <div align="center" class="style2">
                【發佈時間】：                  </div>                </td>
			    
              <td width="23%" valign="top" bgcolor="#E0F4BB"> <span class="style2">
                <?php echo $newsdate; ?></span></td>
                <td width="14%" align="right" valign="top" bgcolor="#E0F4BB"> 
                  <div align="center" class="style2">【人氣指數】：</div>                </td>
                <td width="16%" valign="top" bgcolor="#E0F4BB"><?php echo $newshot; ?></td>
                <td width="15%" valign="top" bgcolor="#E0F4BB">【主辦單位】：</td>
                <td width="16%" valign="top" bgcolor="#E0F4BB"><?php echo $unit; ?></td>
              </tr>
              <tr class="style2"> 
                <td width="16%" align="right" height="44" valign="top"><span class="style2"><font color="#FFFFFF"><img src="images/write.gif" width="15" height="15"></font>&nbsp;&nbsp;&nbsp; 
                </span></td>
                <td height="44" colspan="5" valign="top"><span class="style2"><?php echo stripslashes($newscontent); ?></span></td>
              </tr>
              <tr bgcolor="#A4CCF4" class="style2">
                <td valign="top" bgcolor="#E0F4BB"><p align="center" class="style2">【附件檔案】：</td>
                <td colspan="5" bgcolor="#E0F4BB"><div align="center" class="style2">
                    <div align="left"><span class="style4"><span class="style4"><span class="style2">
					<?php //echo $news_doc_file,$news_xls_file; 
					
					/*$Vhost_Dir=opendir("newsfiles/".$newsno."/");  //列出目錄中所有檔案方式一
					while($file=readdir($Vhost_Dir)){
					echo $file."<br>";
					}
					closedir($Vhost_Dir);
					*/
					if($filesnum!=0){
					 $a=scandir("newsfiles/".$newsno."/");	//列出目錄中所有檔案方式二
					for ($i=2;$i<=($filesnum+2);$i++){
					echo "<a href='newsfiles/".$newsno."/".$a[$i]."'>".$a[$i]."</a><br>";
					}
					}
					
					
					?></span></span></span></div>
                </div></td>
              </tr>
              <tr bgcolor="#A4CCF4" class="style2"> 
                <td width="16%" bgcolor="#E0F4BB"> 
                <p align="center" class="style2">【相關連結】：</td>
                <td colspan="5" bgcolor="#E0F4BB"> 
                  <div align="center" class="style2">
                    <div align="left"><?php  echo $linkone_msg . "  " . $linktwo_msg;?></div>
                </div></td>
              </tr>
              <tr class="style2">
                <td colspan="6"><hr></td>
              </tr>
              <tr class="style2">
                <td colspan="6"><div align="center"><font size="2"><font size="2"><a href="javascript:window.close();">關閉這個頁面</a></font> </font></div></td>
              </tr>
            </table>
  </div>      </td>
        </tr>
      </table>
  </div>
  <p align="left">　</p>
  <p align="left">&nbsp;</p>
  <p align="left"><br>
  </p>
  <p align="left">&nbsp;  </p>
</form>
   <?php
require "closelink.inc";
?> 
</body>

</html>
