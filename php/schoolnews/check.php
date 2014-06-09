<?php
	
	session_start();
	if(empty($_SESSION['session_sb']))
	{
		//session_register('session_sb');
		$_SESSION['session_sb']=0;
	}	
	else
	{
		//session_register('session_sb');
		$_SESSION['session_sb']+=1;
		//session_register('session_userid');
		$_SESSION['session_userid']=$_POST['userid'];
		//session_register('session_pswd');
		$_SESSION['session_pswd']=$_POST['pswd'];
	
	}


if($_SESSION['session_sb']>0)
{
		     
		     $Userid=strtoupper($_POST[userid]);
			 $Pswd=strtoupper($_POST[pswd]);
			
			require "getlink.inc"; 
			$result=mssql_query("select * from TBadmin where (adminid='".$Userid."' and adminpw='".$Pswd."')",$linksb);
			$arr=mssql_fetch_row($result);
			if(!$arr)
			{   
				$_SESSION['session_hba']=-9999999;
				
				echo "<div align='center'><font color='ff0000' size='6' face='標楷體'><b>使用者無法通過認證,<br>請<font color='000077'>回前頁</font>重新登入, 謝謝!</b></font></div>";
				exit();
			}
			else
			{
				require "getlink.inc";
				$Uname=trim($arr[1]);
				$_SESSION['session_uname']=$Uname;
				
			mssql_close($linksb);
				header("Location:admin_index.htm");
			}
		
}else {
	
	
	echo "<div align='center'><font color='ff0000' size='6' face='標楷體'><b>session使用者無法通過認證,<br>請<font color='000077'>回前頁</font>重新登入, 謝謝!</b></font></div>";
				
		}
?>