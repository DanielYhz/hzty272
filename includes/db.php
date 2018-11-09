<?php

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "cms";

foreach ($db as $key => $value) {
    // try to convert it to "DB_HOST" ..
define(strtoupper($key),$value);
}

 // DB_HOST,DB_USER,DB_PASS,DB_NAME
// 'localhost','root','','cms' hardcode.
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//if ($connection) {
//    echo "We are connected";
//}

?>
