<?php
/*どこに接続するか*/
$dbName = 'mysql:host=localhost;dbname=imagePosting;charset=utf8';
/*誰が接続するのか*/
$userName = 'root';
/*接続処理 try catch文*/
try {
    $db = new PDO($dbName, $userName);
} catch (\Throwable $th) {
    exit();
}

?>