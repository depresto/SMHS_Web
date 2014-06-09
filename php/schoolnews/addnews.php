<?php

session_start();
	
	//session_register('session_uname');
	$Uname=$_SESSION['session_uname'];
if(trim($Uname)!="")
{
	ob_start();
	require "getlink.inc";
	$today=getdate();
		$Y=$today["year"];	
		$M=$today["mon"];
		$D=$today["mday"];
		$H=$today["hours"];
		$MIN=$today["minutes"];
	   // $datetime=$Y."-".$M."-".$D."  ".$H.":".$MIN."";
		$datetime=date ("Y-m-d H:i:s");
		$newstitle=htmlspecialchars($_POST["title"], ENT_QUOTES);
		//$newstitle=$_POST["title"];
		$newscontent=htmlspecialchars($_POST["content"], ENT_QUOTES);
		$newshot=1;
		$newsdate=$datetime;
		$class=$_POST["class"];
		$unit=$_POST["unit"];
		$linkone=$_POST["linkone"];
		$linktwo=$_POST["linktwo"];
		//$newsdate=date("Y-n-j");
		$file[]=trim($_POST["file"]);
		if($file[0]==null){
		$filearray_length=0;
		}else{
		$filearray_length=count($file)-1;
		}
		$str="INSERT INTO TBnews (newstitle,newscontent,newshot,newsdate,class,unit,linkone,linktwo,filesnum) VALUES('$newstitle','$newscontent','$newshot','$newsdate','$class','$unit','$linkone','$linktwo','$filearray_length')";
		$result=mssql_query($str,$linksb) or die("無法寫入schoolnews資料庫<br>". $filearray_length);
		
		$str1="select newsno from TBnews where newstitle like '$newstitle' and newsdate like '$newsdate'";
		$result1=mssql_query($str1,$linksb) or die("無法查詢schoolnews資料庫<br>");
		list($a_no)=mssql_fetch_row($result1);
		
		if($filearray_length!=0){
				require "upload.inc";
		}
		
		mssql_close($linksb);
		echo "<br><br><table width='75%' border='0' align='center'>
 			  <tr><td><div align='center'><p><font size='4' color='#0000CC'>   </font>最新消息資料<b>已完成記錄</b>。<br><font> $msg </font></p>
    	   	  <p>系統將於5秒後自動回上一頁，若無法回上一頁請<a href='admin_main.php' target='_self'>按這裡</a>。</p><p><img src='images/ani-go.gif' width='55' height='43'></p></div></td></tr></table>";
 	   header("refresh:5;url=admin_main.php");
		ob_end_flush();	

}else{
					echo "<div align='center'><font color='ff0000' size='6' face='標楷體'><b>使用者無法通過認證,<br>請<font color='000077'>回前頁</font>重新登入, 謝謝!</b></font></div>";
				exit();
}	

?>