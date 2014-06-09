<?
	
	ob_start();
	require "getlink.inc";
	$addmsg_type=$_POST["addmsg_type"];
	$today=getdate();
		$Y=$today["year"];	
		$M=$today["mon"];
		$D=$today["mday"];
		$H=$today["hours"];
		$MIN=$today["minutes"];
	    $datetime=$Y."-".$M."-".$D."      ".$H.":".$MIN;
		
	if ($addmsg_type=="1"){		/*1:新增意見  0:為回覆意見 */
		$msgtitle=$_POST["msgtitle"];
		$msgcontent=$_POST["msgcontent"];
		$msgguest=$_POST["msgguest"];
		$msgmail=$_POST["msgmail"];
		$msghot=1;
		$msgdate=$datetime;
		//$msgdate=date("Y-n-j");
		$msgip=$_ENV["REMOTE_ADDR"];
	
		$str="INSERT INTO TBmessage (msgtitle,msgcontent,msgguest,msgmail,msgdate,msgip,msghot) VALUES('$msgtitle','$msgcontent','$msgguest','$msgmail','$msgdate','$msgip','$msghot')";
		$result=mssql_query($str,$linksb) or die("無法寫入softball tbmessage資料庫<br>");
		mssql_close($linksb);
		echo "<br><br><table width='75%' border='0' align='center'>
 			  <tr><td><div align='center'><p><font size='4' color='#0000CC'>  $msgguest </font>您的意見<b>已完成紀錄</b>。</p>
    	   	  <p>系統將於5秒後自動回上一頁，若無法回上一頁請<a href='comment.php' target='_self'>按這裡</a>。</p><p><img src='images/ani-go.gif' width='55' height='43'></p></div></td></tr></table>";
 	   header("refresh:5;url=comment.php");
		ob_end_flush();	
	}elseif ($addmsg_type=="0"){
		$remsgid=$_POST["remsgid"];
		$remsgcontent=$_POST["remsgcontent"];
		$remsgguest=$_POST["remsgguest"];
		$remsgmail=$_POST["remsgmail"];
		$remsgdate=$datetime;
		//$remsgdate=date("Y-n-j  H:i");
		$remsgip=$_ENV["REMOTE_ADDR"];
	
		$str="INSERT INTO TBremessage (remsgid,remsgcontent,remsgguest,remsgmail,remsgdate,remsgip) VALUES('$remsgid','$remsgcontent','$remsgguest','$remsgmail','$remsgdate','$remsgip')";
		$result=mssql_query($str,$linksb) or die("無法寫入softball tbremessage資料庫<br>");
		mssql_close($linksb);
		echo "<br><br><table width='75%' border='0' align='center'>
 			  <tr><td><div align='center'><p><font size='4' color='#0000CC'>  $remsgguest </font>您的意見<b>已完成紀錄</b>。</p>
    	   	  <p>系統將於5秒後自動回上一頁，若無法回上一頁請<a href='comment.php' target='_self'>按這裡</a>。</p><p><img src='images/ani-go.gif' width='55' height='43'></p></div></td></tr></table>";
 	   header("refresh:5;url=comment.php");
		ob_end_flush();	
	}


?>