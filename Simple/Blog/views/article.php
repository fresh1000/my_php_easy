<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Blog</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>1 Blog</h1>
		<div>
			<div class="article">
				<h3><?=$article['title']?></h3>
				<em>Date:<?=$article['date']?></em>
				<p><?=$article['content']?></p>
			</div>
		</div>
		<footer>
			<p>Blog <br>Copyright &copy; 2015</p>		
		</footer>
	</div>
</body>
</html>