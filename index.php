<?php 
$title="Startseite";
$bodyClass="home";
$bodyBackgroundImage = "img/banner_index.jpg";
?>
<?php include 'inc/header.php'; ?>

<div class="banner" style="background-image: url('<?php echo 	$bodyBackgroundImage;?>');">
	<div class="wrapper">
	<?php include 'inc/navigation.php'; ?>
	<div class="location">
		<img src="img/luftaufnahme.jpg" alt="Standort Geotechnika"/>
	</div>
	</div>
</div>


<div class="content wrapper">
	<hgroup>
		<h1 class="clearfix">
			<span>Herzlich willkommen bei</span>
			<span><?php include 'inc/logo.php'; ?></span>
		</h1>
		<h2>
			Ihr kompetenter Fachgroßhandel für Geokunststoffe und Gabionen
		</h2>
	</hgroup>
	<?php include 'inc/buttons.php'; ?>
	<p>Die umfangreiche Lagerhaltung der Standardprodukte ermöglicht eine zeitnahe zuverlässige und termingerechte Belieferung unserer Kunden</p>
	 
	 
	<p>Markterfahrung seit 1988, Fachkompetenz und Nachhaltigkeit sprechen für sich.</p>
	 
	 
	<p>Erfolg ist: wenn der Kunde zurück kommt und nicht die Ware.</p>
</div>
<?php include 'inc/footer.php'; ?>

