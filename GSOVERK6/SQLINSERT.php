<?php include ($_SERVER['DOCUMENT_ROOT'] . '/2t/1810943469/GSOVERK6/title.php');?> 	
	<?php include ($_SERVER['DOCUMENT_ROOT'] . '/2t/1810943469/GSOVERK6/random_image.php');?> 
<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="content-Type" content="text/html" charset="utf-8">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>		
	<title>Forsíða<?php echo "&#8212;{$title}"; ?></title>
	</head>
	<body>
		<div id="wrapper">
			<div id="banner"> 

			</div>
			<nav id="navigation">
				<?php include ($_SERVER['DOCUMENT_ROOT'] . '/2t/1810943469/GSOVERK6/header.php');?> 
			</nav>
			<div class="container">
	<!-- Með formi á notandi að geta sent gildi úr input reitum til insert.php
	     insert.php mun svo sjá um að koma þeim áleiðis í gagnagrunninn Highscore (highscore tafla með player og score dálkum) 
	 -->
	<form action="insert.php" method="post">
		<label>Texti: </label>
		<input type="text" name="texti" required ><br>
		
		<label>Myndaslóð: </label>
		<input type="text" name="mynd" required ><br>

		<label>Lýsing: </label>
		<input type="text" name="lysing" required ><br>
		<input type="submit">
	</form>
        </div>
			<footer>
				<?php 
                echo "<br> <br>";
                include ($_SERVER['DOCUMENT_ROOT'] . '/2t/1810943469/GSOVERK6/footer.php');
                ?> 	
			</footer>
		</div>
	</body>
</html>






