<!DOCTYPE html>
<html>
<head>
<title>CSS Menu Dinamis dengan PHP</title>
<style>
.menubar{
    display:block;
    height:38px;
    background:#000
}
.menubar ul{
    margin:0;
    padding:0;
    list-style:none;
    z-index:99999;
}
.menu a,.menu a:visited{
    display:block;
    text-decoration:none;
    padding:10px 18px;
    position:relative;
    z-index:99999;
}
.menu{
    vertical-align:top;
    display:inline-block;
}
.menu li{
    position:relative;
    z-index:99999;
}
.menu>li{
    float:left;
}
.menu li>a,.menu li>a:visited{
    color:#fff;
    font-weight:bold;
    background: #00009e;
}
.menu>li:hover>a{
    background: #008800;
}
.menu li li>a:hover{
    color:#fff;
    background:#00009e;
}
.menu li li a{
    background: #008800;
    color:#fff;
}
.menu li:hover li a{
    font-weight:normal;
}
.menu ul{
    position:absolute;
    white-space:nowrap;
    z-index:99999;
    left:-99999em;
    margin-top:0px;
}
.menu>li:hover>ul{
    left:auto;
    min-width:100%;
}
 
body{font-family:arial;font-size:13px;color:#444;background:#eee}
.wrapper{width:900px;margin:auto}
 
</style>
</head>
<body>
<div class="wrapper">
<div class="menubar">
<ul class="menu">
<?php
// koneksi
$mysqli = new mysqli('localhost', 'root', 'motherrussia', 'nurmay');
 
// ambil menu utama
$res = $mysqli->query("SELECT idmenu,menu,link from menu where sub='0'");
while($menu = $res->fetch_array(MYSQLI_ASSOC)){
    // tampilkan sub menu kalau ada
    $res2 = $mysqli->query("SELECT idmenu,menu,link from menu where sub='$menu[idmenu]'");
    $num = $res2->num_rows;
    echo "  <li><a href=\"$menu[link]\">$menu[menu]</a>";
    if($num>0){
        echo "\n  <ul>\n";
        while($sub = $res2->fetch_array(MYSQLI_ASSOC)){
            echo "  <li><a href=\"$sub[link]\">$sub[menu]</a></li>\n";
        }
        $res2->free_result();
        echo "  </ul>";
    }
    echo "</li>\n";
}
$res->free_result();
?>
</ul>
</div>
</body>
</body>
</html>
