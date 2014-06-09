<?php
	if(!empty($session_sb))
	{
		
		unset($_SESSION['session_sb']);
		unset($_SESSION['session_userid']);
		unset($_SESSION['session_pswd']);
		
	}	
	session_start();
	$_SESSION['session_sb']=1;
	
?>
<html>
<head>
<title>海星高中最新消息管理者介面</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">



<style type="text/css">
<!--
.style1 {color: #000000}
.style2 {
	font-size: 18pt;
	font-weight: bold;
}
-->
</style>
<link href="TEST.CSS" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<table cellpadding="0" cellspacing="0" border="0" width="100%" height="387">
  <tr> 
    <td height="14" width="100%">&nbsp;</td>
  </tr>
  <tr> 
    <td height="20"> 
      <div align="center" class="style2"> 海星高中最新消息管理者介面 </div>
    </td>
  </tr>
  <tr> 
    <td height="270"> 
      <div align="center"> 
        <form name="form1" method="post" action="check.php">
          <table cellspacing=0 cellpadding=0 width="40%" border=0>
            <tbody> 
            <tr> 
              <td height="157"> <fieldset>
              <legend class=c7 align=center><br>
                </legend> <br>
                <div align=center> 
                  <table cellspacing=0 cellpadding=0 width=280 border=0>
                    <tbody> 
                    <tr> 
                      <td class=c8 valign=top align=middle width=276 colspan=3><span class="style1"><font size="2">請輸入您的帳號</font></span></td>
                    </tr>
                    <tr> 
                      <td width=43 align=right valign=middle class=c9><font size="2" color="#0000FF"><span class="c8"><font color="#009900" size="2"><img src="images/icon_004.gif" width="12" height="14"></font></span></font></td>
                      <td width=44 align=right valign=middle class=c9><font size="2" color="#0000FF">帳號：</font></td>
                      <td width=189> 
                        <input class=c5 
            style="BORDER-RIGHT: #ececff 1px solid; BORDER-TOP: #ececff 1px solid; BORDER-LEFT: #ececff 1px solid; BORDER-BOTTOM: #ececff 1px solid" 
            name=userid type=text>
                      </td>
                    </tr>
                    <tr> 
                      <td class=c9 valign=middle align=right width=43><font size="2" color="#0000FF"><span class="c8"><font color="#009900" size="2"><img src="images/icon_004.gif" width="12" height="14"></font></span></font></td>
                      <td class=c9 valign=middle align=right width=44><font size="2" color="#0000FF">密碼：</font></td>
                      <td width=189> 
                        <input class=c5 
            style="BORDER-RIGHT: #ececff 1px solid; BORDER-TOP: #ececff 1px solid; BORDER-LEFT: #ececff 1px solid; BORDER-BOTTOM: #ececff 1px solid" 
            type=password name=pswd>
                      </td>
                    </tr>
                    <tr> 
                      <td class=c5 valign=center align=middle width=278 colspan=3> 
                        <div align="center"><br>
                          <input class=c5 style="BORDER-RIGHT: #c0c0c0 1px outset; BORDER-TOP: #c0c0c0 1px outset; BORDER-LEFT: #c0c0c0 1px outset; BORDER-BOTTOM: #c0c0c0 1px outset; BACKGROUND-COLOR: #ebebeb"  type=submit value="確定了送出" name=SEND>
                          &nbsp;&nbsp; 
                          <input class=c5 style="BORDER-RIGHT: #c0c0c0 1px outset; BORDER-TOP: #c0c0c0 1px outset; BORDER-LEFT: #c0c0c0 1px outset; BORDER-BOTTOM: #c0c0c0 1px outset; BACKGROUND-COLOR: #ebebeb" type=reset value=" 我要重填 " name=CLEAR>
                        </div>
                      </td>
                    </tr>
                    </tbody> 
                  </table>
                </div>
                </fieldset> 
              <td height="157"> 
            </tr>
            </tbody> 
          </table>
        </form>
        
      </div>
      <div align="center"> <br>
      </div>
      <hr>
      <table width="250" border="0" align="center">
        <tr>
          <td width="134"><font size="2">2014-04-28<b><font color="#0000FF">志明</font></b>製作
          </font></td>
          <td width="106" rowspan="3"><font size="2"><img src="images/b4.gif" width="59" height="69"></font></td>
        </tr>
        <tr>
          <td><font size="2"><a href="mailto:samin@mail.smhs.hlc.edu.tw">samin@smhs.hlc.edu.tw</a></font></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
      <p align="center">&nbsp;</p>
      <p align="center">&nbsp;</p></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
