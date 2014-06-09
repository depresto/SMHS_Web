<?php
session_start();
	
	$Uname=$_SESSION['session_uname'];
	
if(trim($Uname)!="")
{

	require "getlink.inc";
	 	$class=$_GET["class"];	//取得使用者選取的分類
		$page_num=$_GET["page_num"]; //取得使用者選取的頁數
		if(empty($class))$class=1;//無選取分類的預設值
		$str1="select count(*) from TBnews where class='$class'";
		$result1=mssql_query($str1,$linksb);
		list($news_count)=mssql_fetch_row($result1); //取得總筆數
		$read_num="40";	//設定每頁要讀的筆數
		$all_page=ceil($news_count/$read_num);//取得可分的頁數
		if(empty($page_num))$page_num=1;//無選取頁數的預設值
	
		$start_num=$read_num*($page_num-1);//求出每頁讀取筆數的起始指標
	
	$str="select newsno,newstitle,newsdate,newshot,newscontent,unit from TBnews where class='$class' order by newsdate desc";
	$result=mssql_query($str,$linksb) or die ("無法<b>查詢</b>舊有的記錄，請洽系統管理者<br>");
	
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


	
	
}else{
		
		echo "<div align='center'><font color='ff0000' size='6' face='標楷體'><b>網路連線無法通過認證,<br>請<font color='000077'>回前頁</font>重新登入, 謝謝!</b></font></div>";
		exit();
}	

	?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>無標題文件</title>
<style type="text/css">
<!--
.style2 {	font-size: 10pt;
	font-weight: normal;
}
.style4 {font-size: 10pt; font-weight: bold; }
-->
</style>
<link href="TEST.CSS" rel="stylesheet" type="text/css">
</head>

<body>
<div align="center"><a name="top"></a><br>
  <table width="700" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <th colspan="3" scope="row"><font size="2" class="style2"><b><?php echo $class_msg; ?></b>公告系統目前共有<strong><?php echo $news_count; ?></strong>筆主題，現在是第<strong><?php echo $page_num; ?></strong>頁</font></th>
      <td colspan="2" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <th colspan="5" class="style2" scope="row"><div align="left"><font size="2">請選擇</font>頁數：|
          <?php for($i=1;$i<=$all_page;$i++){
			echo "<b><a href='admin_main.php?page_num=$i&class=$class'> $i </a></b> | ";
		}
		?>
      </div></th>
    </tr>
    <tr>
      <th scope="row"><img src="images/icon_01.gif" width="22" height="19"></th>
      <td valign="middle" class="style4"><div align="left"><a href="form.php">新增公告</a></div></td>
      <td valign="middle" class="style4">&nbsp;</td>
      <td valign="middle">&nbsp;</td>
      <td valign="middle">&nbsp;</td>
    </tr>
    <tr bgcolor="#D3E7FA">
      <th width="26" bgcolor="#A8E13A" scope="row">&nbsp;</th>
      <td width="442" valign="middle" bgcolor="#A8E13A" class="style4"><div align="center" class="style4">主題</div></td>
      <td width="117" valign="middle" bgcolor="#A8E13A" class="style4"><div align="center" class="style2"><strong>日期</strong></div></td>
      <td width="56" valign="middle" bgcolor="#A8E13A"><div align="center"><span class="style4">人氣</span></div></td>
      <td width="59" valign="middle" bgcolor="#A8E13A"><div align="center" class="style4">管理</div></td>
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
					list($newsno,$newstitle,$newsdate,$newshot,$newscontent,$unit)=mssql_fetch_row($result);
					if (strlen($newstitle)>60){         //設定主題出現40個字完數。
						$newstitle=substr($newstitle,0,60).".....";  //從0開始擷取40個字元
				    }
					$newsdate=substr($newsdate,0,10);					
					$start_num=$start_num+1; //移動指標
			
	?>
	
    <tr>
      <th scope="row"><img src="images/pointg.gif" width="9" height="9"></th>
      <td valign="middle"><span class="style2"><a href="content.php?newsno=<?php echo $newsno; ?>"><?php echo stripslashes($newstitle); ?></a></span></td>
      <td valign="middle"><div align="center" class="style2"><?php echo $newsdate; ?></div></td>
      <td valign="middle"><div align="center"><span class="style2"><?php echo $newshot; ?></span></div></td>
      <td valign="middle"><div align="center" class="style2"><?php 
	  if(trim($unit)==trim($Uname)){
	  	echo "<a href='delnews_msg.php?del_id=".$newsno."&del_type=1'>刪除</a>";
	  }else{
		echo "刪除";
		  }
	  ?>
	  </div></td>
    </tr>
	<?php
	}
	?>
    <tr>
      <th colspan="5" scope="row"><hr></th>
    </tr>
    <tr>
      <th colspan="5" class="style2" scope="row"><div align="left">頁數：|
          <?php for($i=1;$i<=$all_page;$i++){
			echo "<b><a href='admin_main.php?page_num=$i&class=$class'> $i </a></b> | ";
		}
	?>
      </div></th>
    </tr>
    <tr>
      <th colspan="5" scope="row"><hr></th>
    </tr>
    <tr>
      <th colspan="5" scope="row"><span class="style2"><a href="#TOP"><img src="images/arrtop.gif" width="15" height="15" border="0"></a><a href="#top">TOP</a></span></th>
    </tr>
  </table>
</div>
<?php
require "closelink.inc";
?>
</body>
</html>
