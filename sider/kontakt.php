<!doctype html>
<html lang="da">

<head>
	<meta charset="utf-8">
	<title>Alexander - Portfolio</title>
	<link href="../css/style.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
	
<body id="sub_page">
	
	<?php
		/* Succes besked */
		if(isset($_POST['submit'])){
			$result='<div class="success"><p>Tak for din besked. Du vil blive kontaktet hurtigst muligt!</p></div>';
		}
	?>
	
	<header>
		
		<a href="../index.php"><img src="../images/logo.png" class="logo"/></a>
		
		<ul class="nav">
			<li><a href="../index.php">Forside</a></li>
			<li><a href="om.php" >Om</a></li>
			<li><a href="portfolio.php">Portfolio</a></li>
			<li><a href="kontakt.php" class="active">Kontakt</a></li>
		</ul>

	</header>

	<div id="wrapper">

		<section>

			<h3>Kontakt</h3>
			
			<div class="contact_container">
			
				
				
				<div id="formwrapper">
					
					<?php echo $result; ?>
					
					<form action="" method="post">
						<fieldset>
							<label for="name">Fornavn</label>
							<input type="text" name="name" required>

							<label for="lastname">Efternavn</label>
							<input type="text" name="lastname" required>

							<label for="email">Email</label>
							<input type="email" name="email" required>

							<label for="subject">Emne</label>
							<input type="text" name="subject" required>

							<label for="message">Besked</label>
							<textarea name="message" required></textarea>

							<input class="btn" type="submit" name="submit" value="Send">
						</fieldset>
					</form>
				</div><!-- formwrapper end -->
				
				<div class="contact_info">
				
					<div class="contact_content">
						<a href="https://dk.linkedin.com/" alt="link til linkedin" class="linkedin" target="_Blank"><img src="../images/linkedin.png" alt="Linkedin ikon" class="contact_icon"/></a>
						<a href="https://dk.linkedin.com/" alt="link til linkedin" class="linkedin" target="_Blank"><p>Alexander Sørensen</p></a>
					</div><!-- contact_icons end -->
						
					<div class="contact_content">
						<img src="../images/phone_icon.png" alt="Adresse ikon" class="contact_icon"/>
						<p>+45 23 66 24 38</p>
					</div><!-- contact_icons end -->
						
					<div class="contact_content">
						<img src="../images/adress_icon.jpg" alt="Telefon ikon" class="contact_icon"/>
						<p>Ålholmparken 23 <br /> 3400 Hillerød </p>
					</div><!-- contact_icons end -->
					
				</div><!-- contact_infoend -->
				
			</div><!-- container end -->

		</section>

		<footer></footer>

	</div><!-- wrapper end -->
	
</body>
</html>


