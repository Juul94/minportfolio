<!doctype html>
<html lang="da">

<head>
	<meta charset="utf-8">
	<title>Alexander - Portfolio</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body id="home" class="scroll_hidden">
	
	<header>

		<a href="index.php"><img src="../images/logo.png" class="logo"/></a>
		
		<ul class="nav">
			<li><a href="index.php" class="active">Forside</a></li>
			<li><a href="sider/om.php">Om</a></li>
			<li><a href="sider/portfolio.php">Portfolio</a></li>
			<li><a href="sider/kontakt.php">Kontakt</a></li>
		</ul>

	</header>

	<div id="wrapper">

		<section>

			<img src="images/Self-picture.jpg" class="portrait" draggable="false" />
			
			<h1 class="spacer">Alexander Sørensen<br /><br />WEB<span class="typing"></span></h1>

		</section>

		<footer></footer>

	</div><!-- wrapper end -->
		
	<video autoplay muted loop id="myVideo">
		<source src="video/video1.mp4" type="video/mp4">
	</video>
	
	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/typed.min.js"></script>
	<script type="text/javascript">
		
		var typed = new Typed('.typing', {
		  strings: ["DESIGNER", "PROGRAMMØR"],
			loop: true,
		  typeSpeed: 60,
			backSpeed: 60,
			backDelay: 1000,
		});
		
	</script>
	
</body>
</html>


