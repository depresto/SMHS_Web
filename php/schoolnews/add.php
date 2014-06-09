<?
session_start();
	
	session_register('session_uname');
	$Uname=$_SESSION['session_uname'];
if(trim($Uname)!="")
{
	ob_start();
	require "getlink.inc";
	$add_type=$_POST["add_type"];
	$today=getdate();
		$Y=$today["year"];	
		$M=$today["mon"];
		$D=$today["mday"];
		$H=$today["hours"];
		$MIN=$today["minutes"];
	    $datetime=$Y."-".$M."-".$D."      ".$H.":".$MIN;
	
	if ($add_type=="1"){	/* 增加勁旅 */
		$teamname=$_POST["teamname"];
		$teamlevel=$_POST["teamlevel"];
		$teamfirst=$_POST["teamfirst"];
		$teamsecond=$_POST["teamsecond"];
		$teamonethird=$_POST["teamonethird"];
		$teamtwothird=$_POST["teamtwothird"];
		
		$teamdate=$datetime;
		//$teamdate=date("Y-n-j");
	
		$str="INSERT INTO TBteam (teamname,teamlevel,teamfirst,teamsecond,teamonethird,teamtwothird,teamdate) VALUES('$teamname','$teamlevel','$teamfirst','$teamsecond','$teamonethird','$teamtwothird','$teamdate')";
		$result=mssql_query($str,$linksb) or die("無法寫入softball tbteam資料庫<br>");
		mssql_close($linksb);
		echo "<br><br><table width='75%' border='0' align='center'>
 			  <tr><td><div align='center'><p><font size='4' color='#0000CC'>  $teamname </font>資料<b>已完成紀錄</b>。</p>
    	   	  <p>系統將於5秒後自動回上一頁，若無法回上一頁請<a href='ranks_admin.php' target='_self'>按這裡</a>。</p><p><img src='images/ani-go.gif' width='55' height='43'></p></div></td></tr></table>";
 	   header("refresh:5;url=ranks_admin.php");
		ob_end_flush();	
	}elseif ($add_type=="0"){	/* 增加名人堂*/
		$playername=$_POST["playername"];
		$playerlevel=$_POST["playerlevel"];
		$playerhr=$_POST["playerhr"];
		$playernice=$_POST["playernice"];
		$playermvp=$_POST["playermvp"];
		$playerdate=$datetime;
	
		$str="INSERT INTO TBplayer (playername,playerlevel,playerhr,playernice,playermvp,playerdate) VALUES('$playername','$playerlevel','$playerhr','$playernice','$playermvp','$playerdate')";
		$result=mssql_query($str,$linksb) or die("無法寫入softball tbplayer資料庫<br>");
		mssql_close($linksb);
		echo "<br><br><table width='75%' border='0' align='center'>
 			  <tr><td><div align='center'><p><font size='4' color='#0000CC'>  $playername </font>資料<b>已完成紀錄</b>。</p>
    	   	  <p>系統將於5秒後自動回上一頁，若無法回上一頁請<a href='person_admin.php' target='_self'>按這裡</a>。</p><p><img src='images/ani-go.gif' width='55' height='43'></p></div></td></tr></table>";
 	   header("refresh:5;url=person_admin.php");
		ob_end_flush();	
	}elseif ($add_type=="6"){	/* 增加贊助廠商*/
		$sponsorname=$_POST["sponsorname"];
		$sponsordate=$datetime;
		
		$str="INSERT INTO TBsponsor (sponsorname,sponsordate) VALUES('$sponsorname','$sponsordate')";
		$result=mssql_query($str,$linksb) or die("無法寫入softball tbsponsor資料庫<br>");
		mssql_close($linksb);
		echo "<br><br><table width='75%' border='0' align='center'>
 			  <tr><td><div align='center'><p><font size='4' color='#0000CC'>  $sponsorname </font>資料<b>已完成紀錄</b>。</p>
    	   	  <p>系統將於5秒後自動回上一頁，若無法回上一頁請<a href='sponsor_admin.php' target='_self'>按這裡</a>。</p><p><img src='images/ani-go.gif' width='55' height='43'></p></div></td></tr></table>";
 	   header("refresh:5;url=sponsor_admin.php");
		ob_end_flush();
	}elseif ($add_type=="7"){	/* 增加組織成員*/
		$o_name=$_POST["o_name"];
		$o_title=$_POST["o_title"];
		$o_title_level=$_POST["o_title_level"];
		$o_id=trim($_POST["o_id"]);
		$o_email=$_POST["o_email"];
		$o_tel=$_POST["o_tel"];
		$o_intro=$_POST["o_intro"];
				
   	require "upload_organize_photo.inc";      //上傳成員照片
		$str="INSERT INTO TBorganize (o_name,o_title,o_title_level,o_id,o_email,o_tel,o_intro) VALUES('$o_name','$o_title','$o_title_level','$o_id','$o_email','$o_tel','$o_intro')";
		$result=mssql_query($str,$linksb) or die("無法寫入softball tborganize資料庫<br>");
		mssql_close($linksb);
		echo "<br><br><table width='75%' border='0' align='center'>
 			  <tr><td><div align='center'><p><font size='4' color='#0000CC'>  $o_name </font>資料<b>已完成紀錄</b>。</p>
    	   	  <p>系統將於5秒後自動回上一頁，若無法回上一頁請<a href='organize_admin.php' target='_self'>按這裡</a>。</p><p><img src='images/ani-go.gif' width='55' height='43'></p></div></td></tr></table>";
 	   header("refresh:5;url=sponsor_admin.php");
		ob_end_flush();
	}elseif ($add_type=="8"){	/* 增加活動照片*/
		$a_name=$_POST["a_name"];
		$a_date=$_POST["a_date"];
		$a_place=$_POST["a_place"];
		$a_office=$_POST["a_office"];
		$a_intro=$_POST["a_intro"];
		$file[]=$_POST["file"];
		$filearray_length=count($file);
		
   
		$str="INSERT INTO TBactphoto (a_name,a_date,a_place,a_office,a_intro) VALUES('$a_name','$a_date','$a_place','$a_office','$a_intro')";
		$result=mssql_query($str,$linksb) or die("無法寫入softball tbactphoto資料庫<br>");
		
		$str1="select a_no from TBactphoto where a_name like '$a_name'";
    	$result1=mssql_query($str1,$linksb) or die ("無法<b>查詢</b>舊有的記錄，請洽系統管理者<br>");	
		list($a_no)=mssql_fetch_row($result1);
		
		require "upload_act_photo.inc";      //上傳活動照片
		mssql_close($linksb);
		echo "<br><br><table width='75%' border='0' align='center'>
 			  <tr><td><div align='center'><p><font size='4' color='#0000CC'>  $a_name </font>資料<b>已完成紀錄</b>。</p>
    	   	  <p>系統將於5秒後自動回上一頁，若無法回上一頁請<a href='photo_admin.php' target='_self'>按這裡</a>。</p><p><img src='images/ani-go.gif' width='55' height='43'></p></div></td></tr></table>";
 	   header("refresh:5;url=photo_admin.php");
		ob_end_flush();
	}else{		/* 增加相關網站 */
		$linkname=$_POST["linkname"];
		$linkurl=$_POST["linkurl"];
		$linkdate=$datetime;
		//$linkdate=date("Y-n-j  H:i");
	
		$str="INSERT INTO TBlink (linkname,linkurl,linkdate) VALUES('$linkname','$linkurl','$linkdate')";
		$result=mssql_query($str,$linksb) or die("無法寫入softball tblink資料庫<br>");
		mssql_close($linksb);
		echo "<br><br><table width='75%' border='0' align='center'>
 			  <tr><td><div align='center'><p><font size='4' color='#0000CC'>  $linkname </font>資料<b>已完成紀錄</b>。</p>
    	   	  <p>系統將於5秒後自動回上一頁，若無法回上一頁請<a href='link_admin.php' target='_self'>按這裡</a>。</p><p><img src='images/ani-go.gif' width='55' height='43'></p></div></td></tr></table>";
 	   header("refresh:5;url=link_admin.php");
		ob_end_flush();	
	
	}
}else{
		
				echo "<div align='center'><font color='ff0000' size='6' face='標楷體'><b>使用者無法通過認證,<br>請<font color='000077'>回前頁</font>重新登入, 謝謝!</b></font></div>";
				exit();
}	
?>