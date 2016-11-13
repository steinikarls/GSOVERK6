<?php require_once "tenging.php" ?>
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
        <div class="row">
            <div class="col-lg-12">            
                <h1 class="page-header">Portfolio Item
                    <small>Item Subheading</small>
                </h1>                                     
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <img class="img-responsive" src="myndir/storimage-<?php echo rand(1,2); ?>.jpg">
            </div>
            <div class="col-md-4">
                <h3>Project Description</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                <h3>Project Details</h3>
                <ul>
                    <li>Lorem Ipsum</li>
                    <li>Dolor Sit Amet</li>
                    <li>Consectetur</li>
                    <li>Adipiscing Elit</li>
                    <li><?php 
                        $countVisit = 0;
                        if(isset($_COOKIE['countVisit']))
                        {
                            $countVisit = $_COOKIE['countVisit'];
                            $countVisit ++;
                        }
                       setcookie('countVisit', $countVisit,  time()+3600);
                        if($countVisit == 0)
                        {
                            echo "<br>";
                            echo "Welcome";
                        } 
                        else 
                        {
                            echo "<br>";
                            echo "Þú aftur... visit number ".$countVisit;
                        }
                    ?></li>
                </ul>
        </div>            
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Related Projects</h3>
            </div>
            <?php
			 require_once "tenging.php" ;
			$sql = $conn ->query("select imageName, imagePath, imageText FROM images");		
			while ( $rows = $sql -> fetch()) {
				echo "<div class=\"col-sm-3 col-xs-6\">";
				echo '<img class="img-responsive portfolio-item" src="'.$rows['imagePath'].'"><figure>'.$rows['imageText'].'</figure>';
				echo "</div>";
			}			
		  ?>	          
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