<?php 
    require_once('db_config.php');
    require_once('db_class.php');
    
    $db = new DB();
    $db->connect_db($_DB['host'],$_DB['username'],$_DB['password'],$_DB['dbname']);
    
    $tablename = 'smhs_bulletin';//布告欄資料庫
    if (! $request = $db->_get('request')){
        echo "This page cannot be displayed.";
    }else{
        switch ($request) {
            //取得標題
            case 'title':   $bulletin_type = $db->_get('bulletin_type');
                            if ($bulletin_type == 'latest'){
                                //取得最新公告
                                $db->query("SELECT id,tag,title,DATE_FORMAT(date, '%Y-%m-%d') AS date FROM $tablename ORDER BY date DESC LIMIT 10");
                            }else{
                                //取得公告標題
                                $db->query("SELECT id,tag,title,DATE_FORMAT(date, '%Y-%m-%d') AS date FROM $tablename WHERE bulletin_type LIKE '".$bulletin_type."'");
                            }
                            $rows = array();
                            while ($result = $db->fetch_array()){
                                $rows[] = $result;
                            }
                            echo json_encode($rows);
                            break;
            //取得內文
            case 'content': $bulletin_id = $db->_get('bulletin_id');
                            //------------------------------
                            //Query from database
                            $db->query("SELECT content FROM $tablename WHERE id = ".$bulletin_id);
                            $request = $db->fetch_array();
                            //------------------------------
                            echo json_encode($request);
                            break;
        }
        
    }
?>