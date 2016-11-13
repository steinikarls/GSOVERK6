
<?php
session_start();
if (!isset($_SESSION['valid'])) {
    header("Location: http://tsuts.tskoli.is/2T/1810943469/GSOVERK6/index.php");
    exit();
}
?>
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
			
			<nav id="navigation">
				<?php include ($_SERVER['DOCUMENT_ROOT'] . '/2t/1810943469/GSOVERK6/header.php');?> 	
			</nav>
                <div class="col-md-4">
                    <h3>Secret page</h3>
                
                </div>

            <form method="post" action="logout.php">
                <input name="logout" type="submit" value="Log out">
            </form>
			<footer>
				<?php 
                echo "<br> <br>";
                include ($_SERVER['DOCUMENT_ROOT'] . '/2t/1810943469/GSOVERK6/footer.php');
                ?> 	
			</footer>


		</div>
	</body>
</html>