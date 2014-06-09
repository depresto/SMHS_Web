<?
session_start();
	
	session_register('session_uname');
	$Uname=$_SESSION['session_uname'];
if(trim($Uname)!="")
{
	ob_start();
	require "getlink.inc";
	$del_type=$_GET["del_type"];
	if ($del_type=="1"){
		$teamno=$_GET["del_id"];
		$str="delete from TBteam where teamno='$teamno'";
		$result=mssql_query($str,$linksb) or die("無法寫入softball tbteam資料庫<br>");
		mssql_close($linksb);
		echo "<br><br><table width='75%' border='0' align='center'>
 			  <tr><td><div align='center'><p>您所選擇的隊伍資料<b>已完成刪除</b>。</p>
    	   	  <p>系統將於5秒後自動回上一頁，若無法回上一頁請<a href='ranks_admin.php' target='_self'>按這裡</a>。</p><p><img src='images/ani-go.gif' width='55' height='43'></p></div></td></tr></table>";
 	   header("refresh:5;url=ranks_admin.php");
		ob_end_flush();	
	}elseif ($del_type=="0"){
		$playno=$_GET["del_id"];
		$str="delete from TBplayer where playno='$playno'";
		$result=mssql_query($str,$linksb) or die("無法寫入softball tbplayer資料庫<br>");
		mssql_close($linksb);
		echo "<br><br><table width='75%' border='0' align='center'>
 			  <tr><td><div align='center'><p>您所選擇的球員資料<b>已完成刪除</b>。</p>
    	   	  <p>系統將於5秒後自動回上一頁，若無法回上一頁請<a href='person_admin.php' target='_self'>按這裡</a>。</p><p><img src='images/ani-go.gif' width='55' height='43'></p></div></td></tr></table>";
 	   header("refresh:5;url=person_admin.php");
		ob_end_flush();	
	}elseif ($del_type=="6"){
		$sponsorno=$_GET["del_id"];
		$str="delete from TBsponsor where sponsorno='$sponsorno'";
		$result=mssql_query($str,$linksb) or die("無法寫入softball tbsponsor資料庫<br>");
		mssql_close($linksb);
		echo "<br><br><table width='75%' border='0' align='center'>
 			  <tr><td><div align='center'><p>您所選擇的網站連結資料<b>已完成刪除</b>。</p>
    	   	  <p>系統將於5秒後自動回上一頁，若無法回上一頁請<a href='sponsor_admin.php' target='_self'>按這裡</a>。</p><p><img src='images/ani-go.gif' width='55' height='43'></p></div></td></tr></table>";
 	   header("refresh:5;url=sponsor_admin.php");
	}elseif ($del_type=="7"){
		$o_no=$_GET["del_id"];
		$str="delete from TBorganize where o_no='$o_no'";
		$result=mssql_query($str,$linksb) or die("無法寫入softball tborganize資料庫<br>");
		mssql_close($linksb);
		echo "<br><br><table width='75%' border='0' align='center'>
 			  <tr><td><div align='center'><p>您所選擇的網站連結資料<b>已完成刪除</b>。</p>
    	   	  <p>系統將於5秒後自動回上一頁，若無法回上一頁請<a href='organize_admin.php' target='_self'>按這裡</a>。</p><p><img src='images/ani-go.gif' width='55' height='43'></p></div></td></tr></table>";
 	   header("refresh:5;url=sponsor_admin.php");
	
	}elseif ($del_type=="8"){
		$a_no=$_GET["del_id"];
		$str="delete from TBactphoto where a_no='$a_no'";
		$result=mssql_query($str,$linksb) or die("無法寫入softball tbactphoto資料庫<br>");
		mssql_close($linksb);
		echo "<br><br><table width='75%' border='0' align='center'>
 			  <tr><td><div align='center'><p>您所選擇的網站連結資料<b>已完成刪除</b>。</p>
    	   	  <p>系統將於5秒後自動回上一頁，若無法回上一頁請<a href='photo_admin.php' target='_self'>按這裡</a>。</p><p><img src='images/ani-go.gif' width='55' height='43'></p></div></td></tr></table>";
 	   header("refresh:5;url=sponsor_admin.php");
	}elseif ($del_type=="2"){
		$linkno=$_GET["del_id"];
		$str="delete from TBlink where linkno='$linkno'";
		$result=mssql_query($str,$linksb) or die("無法寫入softball tblink資料庫<br>");
		mssql_close($linksb);
		echo "<br><br><table width='75%' border='0' align='center'>
 			  <tr><td><div align='center'><p>您所選擇的網站連結資料<b>已完成刪除</b>。</p>
    	   	  <p>系統將於5秒後自動回上一頁，若無法回上一頁請<a href='link_admin.php' target='_self'>按這裡</a>。</p><p><img src='images/ani-go.gif' width='55' height='43'></p></div></td></tr></table>";
 	   header("refresh:5;url=link_admin.php");
	}
}else{
		
		echo "<div align='center'><font color='ff0000' size='6' face='?D·￠Ae'><b>oo﹐o3s?uμLak3q1L?{AO,<br>?D<font color='000077'>|^?e-?</font>-?·sμn?J, AAAA!</b></font></div>";
		exit();
}	

?>