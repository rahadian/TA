<html>
<head>
	<title>SAMPLE PAGE</title>
</head>
<body>

    <h1> PSYCHOTUX </h1>

	<div id="menu">
    	<a href="blog.php?id=1">Article1</a> /
        <a href="blog.php?id=2">Article2</a> /
        <a href="blog.php?id=3">Article3</a>
    </div>

    <div id="konten">
    	<?php
		$pages_dir = 'pages';
		if(!empty($_GET['p'])){
			$pages = scandir($pages_dir, 0);
			unset($pages[0], $pages[1]);

			$p = $_GET['p'];
			if(in_array($p.'.php', $pages)){
				include($pages_dir.'/'.$p.'.php');
			} else {
				echo 'Halaman tidak ditemukan! :(';
			}
		} else {
			include($pages_dir.'/home.php');
		}
		?>
    </div>

</body>
</html>
