<?php
session_start();
	
	$Uname=$_SESSION['session_uname'];
	
if(trim($Uname)=="")
{

	
		
		echo "<div align='center'><font color='ff0000' size='6' face='標楷體'><b>網路連線無法通過認證,<br>請<font color='000077'>回前頁</font>重新登入, 謝謝!</b></font></div>";
		exit();
}	

	?>
<html>

<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>海星高中最新消息公告</title>
<script language="javascript" src="chk_data.js"></script>
<style type="text/css">
<!--
.style2 {font-size: 10pt}
-->
</style>
<link href="TEST.CSS" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style4 {
	font-size: xx-large;
	font-weight: bold;
}
.style5 {
	font-size: x-large
}
-->
</style>
</head>

<body>

<form action="addnews.php" method="POST" enctype="multipart/form-data" name="add_form" id="add_form" onSubmit="return chk_data()">
  <p align="center" class="style4 style5"> 新增公告</p>
  
  <div align="center">
    <table width="650" height="13" border="0" cellpadding="0" cellspacing="0" bordercolor="#111111" style="border-collapse: collapse">
      <tr>
        <td width="420"> 
          <p align="right"><font size="2">| 
            <a href="javascript:history.back();">回上一頁</a>｜</font>
        </td>
      </tr>
    </table>
    <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#009900" width="702" height="171">
      <tr>
        <td width="698" bgcolor="#A8E13A" height="150"> <img src="images/index_54.gif" width="11" height="11"> 
          <font size="2" color="#0000FF">以下欄位請您務必填寫，謝謝您。 
          </font><font size="2" color="#FFFFFF"><br>
          </font> 
          <table border="0" cellpadding="1" cellspacing="1" style="border-collapse: collapse" bordercolor="#111111" width="700" bgcolor="#FFFFFF" align="center">
            <tr> 
              <td width="5%" height="16" align="right"><img src="images/icon_04.gif" width="11" height="11"></td>
              <td width="11%" align="right"><span class="style2">主題名稱：</span></td>
              <td width="84%"><font color="#000000" size="2">
                <input name="title" type="text" id="title" size="80">
    </font></td>
	               </tr>
            
            <tr>
              <td height="16" align="right"><img src="images/icon_04.gif" width="11" height="11"></td>
              <td align="right"><span class="style2">公告分類：</span></td>
              <td><select name="class" id="class">
                <option value="1">行政單位最新</option>
                <option value="2">學校榮譽最新</option>
                <option value="3">獎助學金最新</option>
                <option value="4">教師研習最新</option>
                <option value="5">校園活動最新</option>
                <option value="6">下載資料最新</option>
              </select></td>              
            </tr>
            <tr> 
              <td width="5%" height="16" align="right"><img src="images/icon_04.gif" width="11" height="11"></td>
              <td width="11%" align="right"><span class="style2">主辦單位：</span></td>
              <td width="84%" class="style2"><?php echo $Uname; ?></td>
	          <input type="hidden" name="unit" value="<?php echo $Uname; ?>">
            </tr>
                  
            <tr> 
              <td width="5%" height="16" align="right"><img src="images/icon_04.gif" width="11" height="11"></td>
              <td align="right" width="11%"><span class="style2">消息內容：</span></td>
              <td width="84%"><font size="2" color="#FF0000">(請輸入500字內的消息內容)</font> </td>
            </tr>
            <tr> 
              <td width="5%" height="16" align="right">&nbsp;</td>
              <td align="right" width="11%">&nbsp;</td>
              <td width="84%"><textarea name="content" cols="60" rows="5" id="content"></textarea></td>
            </tr>
             <tr> 
              <td width="5%" height="16" align="right"><img src="images/icon_04.gif" width="11" height="11"></td>
              <td align="right" width="11%"><span class="style2">附件檔案：</span></td>
              <td width="84%"><p>
                <input name="file[]" type="file" id="file" multiple>
                <br>
                <span class="style2">(請使用其它瀏覽器(不用IE)，拖曳滑鼠選多個word,pdf,excel檔案) </span></p>               </td>
            </tr>
             <tr>
               <td height="16" align="right"><img src="images/icon_04.gif" width="11" height="11"></td>
               <td align="right"><span class="style2">相關連結1：</span></td>
               <td><font color="#000000" size="2">
                 <input name="linkone" type="text" id="linkone" size="80">
               </font></td>
             </tr>
             <tr>
              <td height="16" align="right"><img src="images/icon_04.gif" width="11" height="11"></td>
              <td align="right"><span class="style2">相關連結2：</span></td>
              <td><font color="#000000" size="2">
                <input name="linktwo" type="text" id="linktwo" size="80">
              </font></td>
            </tr>
             <tr> 
              <td colspan="3"> 
                <hr noshade>              </td>
            </tr>
            <tr> 
              <td height="21" colspan="3"> 
                <p align="center"> 
                  <input type="submit" value="寫好了送出" >
                  <input type="reset" value="我要重寫" >
              </td>
            </tr>
        </table>          </td>
      </tr>
    </table>
  </div>
</form>

</body>

</html>
