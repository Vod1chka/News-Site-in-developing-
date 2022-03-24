<?php
require_once 'form for registration/database/db.php';

$ntitle   = addslashes($_POST['ntitle']);
$ntext    = addslashes($_POST['ntext']);
$newstext = addslashes($_POST['newstext']);
$nuser    = addslashes($_POST['nuser']);


$now   = date(" H : i : s d - m - Y "); // дата будет выводиться в формате "время, дата"
$sql   = 'INSERT INTO mynews (ntitle,ntext,newstext,ndate,nuser) VALUES (:ntitle,:ntext,:newstext,:ndate,:nuser)';
$query = $mysql->prepare($sql);
$query -> execute(['ntitle' => $ntitle,'ntext' => $ntext, 'newstext'=> $newstext, 'ndate' => $now,'nuser' => $nuser]);
$nmsg = "Новость успешно добавлена";
require_once "news.php";
?>
