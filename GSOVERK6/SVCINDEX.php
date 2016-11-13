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
                </ul>
                </div>
                </div>
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Related Projects</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a  href="list.php?image=<?php echo $images[0]['file'];?>&myndalysing=<?php echo $images[0]['caption'];?>">
                    <img class="img-responsive portfolio-item" src="<?= $myndir[0]['file'];?>" >
                    <figure><?= $myndir[0]['caption'];?></figure>
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a  href="list.php?image=<?php echo $images[1]['file'];?>&myndalysing=<?php echo $images[1]['caption'];?>">
                    <img class="img-responsive portfolio-item" src="<?= $myndir[1]['file']; ?>" alt="Random image">
                    <figure><?= $myndir[1]['caption'];?></figure>
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a  href="list.php?image=<?php echo $images[2]['file'];?>&myndalysing=<?php echo $images[2]['caption'];?>">
                    <img class="img-responsive portfolio-item" src="<?= $myndir[2]['file']; ?>" alt="Random image">
                    <figure><?= $myndir[2]['caption'];?></figure>
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a  href="list.php?image=<?php echo $images[3]['file'];?>&myndalysing=<?php echo $images[3]['caption'];?>">
                    <img class="img-responsive portfolio-item" src="<?= $myndir[3]['file'];?>" alt="Random image">
                    <figure><?= $myndir[3]['caption'];?></figure>
                </a>
            </div>

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