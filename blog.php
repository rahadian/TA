<?php

if (!$link = mysql_connect('127.0.0.1', 'root', 'root')) {
    echo 'Could not connect to mysql';
    exit;
}

if (!mysql_select_db('nurmay', $link)) {
    echo 'Could not select database';
    exit;
}

$id = $_GET["id"];

$sql    = "SELECT * FROM blog where id = '$id'";
$result = mysql_query($sql, $link);

if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

while ($row = mysql_fetch_assoc($result)) {
    echo $row['content'];
}

mysql_free_result($result);

?>

