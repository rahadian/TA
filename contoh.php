<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Membaca Data</title>
</head>
<body>
<?php
//membuat koneksi ke database
$conn=mysql_connect("localhost", "root", "root");
mysql_select_db("nurmay");
//membuat query select
$sql="select * from blog";
//membaca data
$hasil=mysql_query($sql);
//menampilkan data
while($row=mysql_fetch_array($hasil)){
//menampilkan field nama
echo "ID : ".$row['id']; 
//menampilkan field email
echo "<br>Content : ".$row['content'];
?>
</body>
</html>
