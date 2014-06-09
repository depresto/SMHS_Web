<?php
	require "getlink.inc";
		$class=$_GET["class"];	//取得使用者選取的分類
		$page_num=$_GET["page_num"]; //取得使用者選取的頁數
		$unit=trim($_GET["unit"]);
		if(empty($class))$class=1;//無選取分類的預設值
		if(empty($unit))$unit=0;//無選取處室的預設值
	
	if($class==7){	//各處室最新消息公告		
		$str1="select count(*) from TBnews where unit='$unit' and class!='6'";
		$str="select newsno,newstitle,newsdate from TBnews where unit like '$unit' and class!='6' order by newsdate desc";	
	}elseif($class==6 and !empty($unit)){	//各室處最新下載公告
		$str1="select count(*) from TBnews where unit='$unit' and class='$class'";
		$str="select newsno,newstitle,newsdate from TBnews where unit like '$unit' and class='$class' order by newsdate desc";	
	}else{
		$str1="select count(*) from TBnews where class='$class'";
		$str="select newsno,newstitle,newsdate from TBnews where class='$class' order by newsdate desc";		
	}
	$result=mssql_query($str,$linksb) or die ("無法<b>查詢</b>舊有的記錄，請洽系統管理者<br>");
	$result1=mssql_query($str1,$linksb);
		
		list($news_count)=mssql_fetch_row($result1); //取得總筆數
		$read_num="14";	//設定每頁要讀的筆數
		$all_page=ceil($news_count/$read_num);//取得可分的頁數
		if(empty($page_num))$page_num=1;//無選取頁數的預設值
		$start_num=$read_num*($page_num-1);//求出每頁讀取筆數的起始指標
	
	/*$countstr="select guestid,guestcount from TBguest";
	$countresult=mssql_query($countstr,$linksb);
	list($guestid,$guestcount)=mssql_fetch_row($countresult);
		$addguestcount=$guestcount+1;
	$recountstr="update TBguest set guestcount='$addguestcount' where guestid='$guestid' ";
	$countresult=mssql_query($recountstr,$linksb);
	*/
	?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>無標題文件</title>
<style type="text/css">
<!--
.style2 {
	font-size: 10pt;
	font-weight: normal;
}
.style4 {font-size: 10pt; font-weight: bold; }
.style7 {font-size: 10pt}
-->
</style>
<link href="TEST.CSS" rel="stylesheet" type="text/css">

</head>

<body OnLoad="Scroll();javascript:pageonload();"  >
<table width="641" border="0" cellpadding="0" cellspacing="0">
  
  <tr bgcolor="#D3E7FA">
    <th width="22" bgcolor="#A8E13A" scope="row">　</th>
    <td width="452" valign="middle" bgcolor="#A8E13A" class="style4"><div align="center" class="style4">主題</div></td>
    <td width="123" valign="middle" bgcolor="#A8E13A" class="style4"><div align="center" class="style2"><strong>日期</strong></div></td>
   
  </tr>
  	<?php
				if ($news_count=="0"){          //無留言數時，即設定0讀取筆取。
					$read_num=0;
				}
				
				for ($i=0;$i<$read_num;$i++){	//讀取筆數
					if($start_num==$news_count){  //判斷指標是否為最後一筆
							break;
						}
					mssql_data_seek($result,$start_num);//設定起始讀取指標
					list($newsno,$newstitle,$newsdate)=mssql_fetch_row($result);
					if (strlen($newstitle)>70){         //設定主題出現40個字完數。
						$newstitle=substr($newstitle,0,70).".....";  //從0開始擷取100個字元
				    }
					$newsdate=substr($newsdate,0,10);					
					$start_num=$start_num+1; //移動指標
			
	?>
  <tr>
    <th scope="row"><img src="images/pointg.gif" width="9" height="9"></th>
    <td valign="middle"><span class="style2"><a href="http://203.71.0.15/schoolsystem/schoolnews/indexcontent.php?newsno=<?php echo $newsno; ?>" target="_blank"><?php echo stripslashes($newstitle); ?></a></span></td>
    <td valign="middle"><div align="center" class="style2"><?php echo $newsdate; ?></div></td>
    
  </tr>
  
  <?php
  }
  ?>
  <tr>
    <th colspan="4" scope="row"><hr></th>
  </tr>
 
  <tr>
    <th colspan="4" scope="row"><div align="left"><span class="style2">頁數|
      <?php for($i=1;$i<=$all_page;$i++){
		echo "<b><a href='http://203.71.0.15/schoolsystem/schoolnews/main.php?page_num=$i&class=$class' target='_self' > $i </a></b> | ";
		}
		?>
    </span></div></th>
  </tr>
  <tr>
    <th colspan="4" scope="row"><hr></th>
  </tr>
 <tr>
    <th colspan="4" scope="row"><font size="2" class="style2">系統目前共有<strong><?php echo $news_count; ?></strong>筆主題，現在是第<strong><?php echo $page_num; ?></strong>頁</font></th>
  </tr>
</table>
<STYLE>
.spanstyle{font-size: 9pt; position: absolute; top: -50px; visibility: visible}
  </STYLE>

  <?php
require "closelink.inc";
?>
</body>
</html>
