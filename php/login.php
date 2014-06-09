<?php
    session_start();
    
    require_once('db_config.php');
    require_once('db_class.php');
    
    date_default_timezone_set('Asia/Taipei');
    $db = new DB();
    $db->connect_db($_DB['host'],$_DB['username'],$_DB['password'],$_DB['dbname']);
    
    sleep(1);
    
    $tablename = 'smhs_user';//表格名稱
    
    $userid = isset($_POST['username']) ? $_POST['username'] : $db->_get('username');
    $password = isset($_POST['password']) ? $_POST['password'] : $db->_get('password');
    $sql = "SELECT * FROM $tablename WHERE username ='".$userid."' and password ='".$password."'";
    $db->query($sql);
    $rows = array();
    $record_count =0;
    while ($result = $db->fetch_array()){
        $record_count++;
        $rows[] = $result;
    }
        
    if ($record_count < 1){
        echo 'error';
    }else{
        $_SESSION['username'] = $userid;
        $_SESSION['password'] = $password;
        
        echo 'success';
    }
?>