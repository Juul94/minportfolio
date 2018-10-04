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
		$id = $_GET['id'];
	
		$connect = new mysqli($hostname, $username, $password, $dbname);
		$connect->set_charset("utf8");
		$query = "SELECT * FROM `portfolio_projektlist` where kategori_id = $id";
	
		$results1 = mysqli_query($connect, $query);
	?>
	
	<div id="wrapper">
			
		<?php 
			$query2 = "SELECT * FROM `portfolio_kategori` where id = $id";
			$results2 = mysqli_query($connect, $query2);
		?>
		
		<?php while($row2 = mysqli_fetch_array($results2)):;?>
		
			<h3 class="extra_padding"><?php echo $row2["kategori"]; ?></h3>
		
		<?php endwhile; ?>

		<?php while($row1 = mysqli_fetch_array($results1)):;?>
		
		<div class="projekt_list list2">
			
			<a href="projekt.php?id=<?php echo $row1["id"]; ?>">
				<img src="../images/projekter/<?php echo $row1["img_filmappe"]; ?>/<?php echo $row1["projekt_billede"]; ?>" alt="<?php echo $row1["projektlist_navn"]; ?>" class="emne_img thumbnail" draggable="false"/>
			</a>
			
			<div class="emner add_padding set_width">
				
				<h4><?php echo $row1["projektlist_navn"]; ?></h4>
				<p><?php echo $row1["projektlist_beskrivelse"]; ?></p>
				<a href="projekt.php?id=<?php echo $row1["id"]; ?>" alt="Link til <?php echo $row1["projektlist_navn"]; ?>" class="list_a_css">Læs mere...</a>
				
			</div><!-- emner end -->

		</div><!-- projekt_list end -->
		
		<hr />

	<?php endwhile; ?>

	<button onclick="goBack()">← Tilbage</button>

	<script>
		function goBack() {
			window.history.back();
		}
	</script>
		
		<footer></footer>

	</div><!-- wrapper end -->
	
</body>
</html>


