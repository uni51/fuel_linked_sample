<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="/style.css" />
<title>ショップサイト</title>
</head>

<body>
<div id="wrap">
<div id="head">
<h1>ショップサイト</h1>
</div>

<div id="content">
<ul>
<?php foreach($rows as $r): ?>
	<li><?php print($r['item_name']); ?> / <?php print($r['price']); ?></li>
<?php endforeach; ?>
</ul>
</div>

<div id="foot">
<p>&copy; OMOKAJI</p>
</div>

</div>
</body>
</html>
