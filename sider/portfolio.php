<!doctype html>
<html lang="da">

<head>
	<meta charset="utf-8">
	<title>Alexander - Portfolio</title>
	<link href="../css/style.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body id="sub_page">
	
	<header>
		
		<a href="../index.php"><img src="../images/logo.png" class="logo"/></a>

		<ul class="nav">
			<li><a href="../index.php">Forside</a></li>
			<li><a href="om.php" >Om</a></li>
			<li><a href="portfolio.php" class="active">Portfolio</a></li>
			<li><a href="kontakt.php">Kontakt</a></li>
		</ul>

	</header>

	<?php
		$hostname = "alexanderjs.dk.mysql";
		$username = "alexanderjs_dk";
		$password = "alex1994";
		$dbname = "alexanderjs_dk";
	
		$connect = new mysqli($hostname, $username, $password, $dbname);
		$connect->set_charset("utf8");
		$query = "SELECT * FROM `portfolio_kategori`";
	
		$results1 = mysqli_query($connect, $query);
	?>
	
	<div id="wrapper" class="last-of-type">
		
		<h3 class="extra_padding">Portfolio</h3>
		
		<?php while($row1 = mysqli_fetch_array($results1)):;?>

		<div class="projekt_list list2">
			
			<a href="emne.php?id=<?php echo $row1["id"]; ?>">
				<img src="../images/<?php echo $row1["kategori_img"]; ?>" alt="<?php echo $row1["kategori"]; ?>" class="emne_img" draggable="false"/>
			</a>
			
			<div class="emner add_padding">
			
				<h4><?php echo $row1["kategori"]; ?></h4>
				<br />
				<a href="emne.php?id=<?php echo $row1["id"]; ?>">Se projekter</a>
			
			</div><!-- emner end -->

		</div><!-- projekt_list end -->
		
			<hr />

	<?php endwhile; ?>
		
		<footer></footer>
		</div>
	</div><!-- wrapper end -->
	
</body>
</html>


