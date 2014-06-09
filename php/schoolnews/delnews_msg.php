<?php
session_start();
	
	$Uname=$_SESSION['session_uname'];
if(trim($Uname)!="")
{
    ob_start();
	require "getlink.inc";
	$del_type=$_GET["del_type"];
	if ($del_type=="2"){	/*2為刪除意見交流，1為刪除最新消息*/
		$msgno=$_GET["del_id"];
		$str1="delete from TBmessage where msgno='$msgno'";
		$result1=mssql_query($str1,$linksb) or die("無法寫入softball tbmessage資料庫<br>");
		$str2="delete from TBremessage where remsgid='$msgno'";
		$result2=mssql_query($str2,$linksb) or die("無法寫入softball tbremessage資料庫<br>");
		mssql_close($linksb);
		echo "<br><br><table width='75%' border='0' align='center'>
 			  <tr><td><div align='center'><p>你所選擇的意見交流資料<b>已完成刪除</b>。</p>
    	   	  <p>系統將於5秒後自動回上一頁，若無法回上一頁請<a href='comment_admin.php' target='_self'>按這裡</a>。</p><p><img src='images/ani-go.gif' width='55' height='43'></p></div></td></tr></table>";
 	   header("refresh:5;url=comment_admin.php");
		ob_end_flush();	
	}elseif ($del_type=="1"){
		$newsno=$_GET["del_id"];
		$str1="delete from TBnews where newsno='$newsno'";
		$result1=mssql_query($str1,$linksb) or die("無法刪除schoolnews tbnews資料表<br>");
		
		mssql_close($linksb);
		echo "<br><br><table width='75%' border='0' align='center'>
 			  <tr><td><div align='center'><p>你所選擇的最新消息資料<b>已完成刪除</b>。</p>
    	   	  <p>系統將於5秒後自動回上一頁，若無法回上一頁請<a href='admin_main.php' target='_self'>按這裡</a>。</p><p><img src='images/ani-go.gif' width='55' height='43'></p></div></td></tr></table>";
 	   header("refresh:5;url=admin_main.php");
		ob_end_flush();	
	}
}else{
		
		echo "<div align='center'><font color='ff0000' size='6' face='標楷體'><b>使用者無法通過認證,<br>請<font color='000077'>回前頁</font>重新登入, 謝謝!</b></font></div>";
				exit();
}	

?>
