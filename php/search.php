<?php
    require_once('db_config.php');
    require_once('db_class.php');
    
    $db = new DB();
    $db->connect_db($_DB['host'],$_DB['username'],$_DB['password'],$_DB['dbname']);
    
    if (!$keyword = $db->_get('s')){
        echo 'This page cannot be displayed.';
    }else{
        $tablename = 'smhs_bulletin';//布告欄資料庫
        
    }
?>