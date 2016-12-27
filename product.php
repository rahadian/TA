<html>
<body>
<h2>artist: r4w8173</h2><div class='story'><p><p>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie.
    Sed aliquam sem ut arcu. Phasellus sollicitudin. Vestibulum condimentum facilisis
    nulla. In hac habitasse platea dictumst. Nulla nonummy. Cras quis libero.
    Cras venenatis. Aliquam posuere lobortis pede. Nullam fringilla urna id leo.
    Praesent aliquet pretium erat. Praesent non odio. Pellentesque a magna a
    mauris vulputate lacinia. Aenean viverra. Class aptent taciti sociosqu ad
    litora torquent per conubia nostra, per inceptos hymenaeos. Aliquam lacus.
    Mauris magna eros, semper a, tempor et, rutrum et, tortor.
</p>
<?php
if (!$link = mysql_connect('localhost', 'root', 'root')) {
    echo 'Couldn't connect to mysql';
    exit;
}

if (!mysql_select_db('nurmay', $link)) {
    echo 'Couldn't select database nurmay';
    exit;
}

$id = $_GET["id"];

$sql = "SELECT * FROM prod where id = '$id'";
$result = mysql_query($sql, $link);

if (!$result) {
    echo "DB Error, couldn't query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

while ($row = mysql_fetch_assoc($result)) {
    echo $row['content'];

}
mysql_free_result($result);
?>

</body>
</html>
