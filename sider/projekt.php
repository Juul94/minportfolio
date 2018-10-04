<!doctype html>
<html lang="da">

<head>
	<meta charset="utf-8">
	<title>Alexander - Portfolio</title>
	<link href="../css/style.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
</head>

<body id="sub_page" class="projekt_page">
	
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
		$query = "SELECT * FROM `portfolio_projekt` where projektlist_id = $id";
	
		$results1 = mysqli_query($connect, $query);
	?>
	
	<div id="wrapper">

		<?php while($row1 = mysqli_fetch_array($results1)):?>

		<div class="projekt_list">
			
			<h3><?php echo $row1["projekt_navn"]; ?></h3>
			
			<div class="content">
				
				<p class="limit_width"><?php echo $row1["projekt_beskrivelse"]; ?><br /><br /></p>
					
				<div class="krav_boks">
					
					<div class="left">
						<h4 class="krav">Opgavekrav:</h4>
						<li><?php echo $row1["projekt_krav"]; ?></li>
					</div><!-- left end -->

					<div class="right">
						<h4 class="krav">Løsning:</h4>
						<li><?php echo $row1["projekt_losning"]; ?></li>
					</div><!-- right end -->
						
				</div><!-- krav boks -->
				
			</div><!-- content -->
				
			<div class="container">		
				
				<div class="row">
  					<div class="column">
						<img src="../images/projekter/<?php echo $row1["img_filmappe"]; ?>/<?php echo $row1["projekt_billede1"]; ?>" alt="<?php echo $row1["projekt_billede1_alt"]; ?>" class="produkt_img" onerror="this.style.display = 'none'" draggable="false" onclick="openModal();currentSlide(1)"/>

						<img src="../images/projekter/<?php echo $row1["img_filmappe"]; ?>/<?php echo $row1["projekt_billede2"]; ?>" alt="<?php echo $row1["projekt_billede2_alt"]; ?>" class="produkt_img" onerror="this.style.display = 'none'" draggable="false" onclick="openModal();currentSlide(2)"/>

						<img src="../images/projekter/<?php echo $row1["img_filmappe"]; ?>/<?php echo $row1["projekt_billede3"]; ?>" alt="<?php echo $row1["projekt_billede3_alt"]; ?>" class="produkt_img" onerror="this.style.display = 'none'" draggable="false" onclick="openModal();currentSlide(3)"/>

						<img src="../images/projekter/<?php echo $row1["img_filmappe"]; ?>/<?php echo $row1["projekt_billede4"]; ?>" alt="<?php echo $row1["projekt_billede4_alt"]; ?>" class="produkt_img" onerror="this.style.display = 'none'" draggable="false" onclick="openModal();currentSlide(4)"/>
				  	</div>
				</div>
						
						
			</div><!-- container end -->
				
		</div><!-- projekt_list end -->

	<!-- The Modal/Lightbox -->
	<div id="myModal" class="modal">
	  <span class="close cursor" onclick="closeModal()">&times;</span>
		
		  <div class="modal-content">

		   <div class="mySlides">
			  <img src="../images/projekter/<?php echo $row1["img_filmappe"]; ?>/<?php echo $row1["projekt_billede1"]; ?>" width="100%"/>

			   <p class="alt_text"><?php echo $row1["projekt_billede1_alt"]; ?></p>	   
			   
			</div>

			<div class="mySlides">
			  <img src="../images/projekter/<?php echo $row1["img_filmappe"]; ?>/<?php echo $row1["projekt_billede2"]; ?>" width="100%"/>
				
				<p class="alt_text"><?php echo $row1["projekt_billede2_alt"]; ?></p>
			</div>

			<div class="mySlides">
			  <img src="../images/projekter/<?php echo $row1["img_filmappe"]; ?>/<?php echo $row1["projekt_billede3"]; ?>" width="100%"/>
				
				<p class="alt_text"><?php echo $row1["projekt_billede3_alt"]; ?></p>
			</div>

			<div class="mySlides">
			  <img src="../images/projekter/<?php echo $row1["img_filmappe"]; ?>/<?php echo $row1["projekt_billede4"]; ?>" width="100%"/>
				
				<p class="alt_text"><?php echo $row1["projekt_billede2_alt"]; ?></p>
			</div>
			  
			<!-- Caption text -->
			<div class="caption-container">
				<p id="caption"></p>
			</div>
			  
		</div>
	</div>
		
	<?php endwhile; ?>
		
	<br /><br />
		
	<button onclick="goBack()">← Tilbage</button>

	<script>
		
		window.onkeyup = function (event) {
			if (event.keyCode == 27) {
				document.getElementById('myModal').style.display = "none";
			}
		 }
		
		/* Tilbage knap */
		function goBack() {
			window.history.back();
		}
		
		$(function() {
			$(".projekt_billede3").each(function() {
				if ($("label", this).text() == "" ) {
					$(this).hide();
				}
			});
		});
		
		// Viser Modal
		function openModal() {
		  document.getElementById('myModal').style.display = "block";
		}

		// Lukker Modal
		function closeModal() {
		  document.getElementById('myModal').style.display = "none";
		}

		var slideIndex = 1;
		showSlides(slideIndex);

		// Next/previous controls
		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		// Thumbnail billede
		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}
		
		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("demo");
		  var captionText = document.getElementById("caption");
		  if (n > slides.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		  }
		  for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";
		  dots[slideIndex-1].className += " active";
		  captionText.innerHTML = dots[slideIndex-1].alt;
		}
				
	</script>

		<footer></footer>

	</div><!-- wrapper end -->
	
</body>
</html>
