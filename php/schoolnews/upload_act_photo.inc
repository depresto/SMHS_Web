<?
	mkdir("act_photo/".$a_no."/",0777);
	for ($i=0;$i<$filearray_length;$i++){
		if (empty($_FILES["file"]["name"][$i]) ){		//判別有沒有選取檔案
			$p_msg_err="<font color='#ff0000'><b>您沒有選取任何要上傳的附加檔案。</b></font><br>";
		
		}else{
			 $type=strtolower(strrev(substr(strrev($_FILES["file"]["name"][$i]),0,3))); //取上傳檔名的最後三碼
			if ($type=="jpg"){		//判別上傳檔案的類別。
			//$type=$_FILES["plan_p_uploadfile"]["type"][$i];	
			//if ($type=="application/msword" or $type=="application/vnd.ms-excel" or $type=="application/pdf" )		//判別上傳檔案的類別。
					
				switch($type){
					//case "application/msword";
					case "jpg";
					
						$path="act_photo/".$a_no."/";	//上傳路徑。
						$file_sub=".jpg";	//上傳檔案副檔名。
						break;
					//case "application/vnd.ms-excel";
					/*case "xls";
						$path="news_files/xls/";
						$file_sub=".xls";	
						break;
					*/
					}
				
				$name=$path.$i.$file_sub;   //上傳檔案更名成數字的格式。
			    $photo_p_fp=file_exists($name);		//取得檔案路徑的檔案是否存在。
				if ($photo_p_fp==true){		//判別檔案是否存在
					echo "<font color='#ff0000'>此消息檔案已經存在</font><br>";				
					exit;
				}else{
					$tmp=$_FILES["file"]["tmp_name"][$i];		//暫存檔案。
					if (copy($tmp,$name)){

						 $f_msg[]="附加檔案:「". $_FILES["file"]["name"][$i] . "」<font color='#006600'>上傳成功。</font><br>";
						 unlink($tmp);
					}else{
						 $f_msg[]="附加檔案:「". $_FILES["file"]["name"][$i] . "」<font color='#ff0000'>上傳失敗。</font><br>";
					}
				}
				
			}else{
			 	ECHO "您要上傳的計畫檔案不是JPEG(JPG)檔。<BR>";
				 exit;
			}
		}
		$p_msg=$p_msg.$f_msg[$i];						
		
	}
$name1="act_photo/".$a_no."/index.php";
copy("browser_photo.php",$name1);


 
if (!empty($p_msg)){	//P_msg不為空，則有選取檔案，出現上傳成功與否訊息。反之亦然。
			$msg=$p_msg;			
			echo $msg;
		}else{
			$msg=$p_msg_err;
		}

?>
