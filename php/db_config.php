<?php
    global $_DB;
    $config = parse_ini_file('config.ini',true);
    $_DB['host'] = $config['host'];
    $_DB['username'] = $config['username'];
    $_DB['password'] = $config['password'];
    $_DB['dbname'] = $config['dbname'];
?>