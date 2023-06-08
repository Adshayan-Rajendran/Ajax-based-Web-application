<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wild life Travel - Home</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/business-casual.css" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="brand">Wild life Travel</div>
   
	<?php
		
	if (isset($_GET["logout"])) {
		
		if ($_GET["logout"] == "true") { ?>
			
			<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>You have been logged out of the system.</strong>
			</div>   

	<?php
		}
	}
	?>

    <?php require_once 'nav.php'; ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/img1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/img2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/img3.jpg" alt="">
                            </div>
                        </div>

                       
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Wild life Travel</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Adshayan Rajendran</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"> <strong>Wild life Travel - Experience</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/intro.jpeg" alt="">
                    <hr class="visible-xs">
                    <p>Wildlife tourism is described as tourism based on encounters with non-domesticated animals. These encounters can either occur in the animals natural environment or in captivity and includes consumptive and non-consumptive activities. In many other cases, protected areas for wildlife tourism is established fundamental changes to the surrounding lands, increasing the proportion of employment in the service and retail sectors while significantly reducing the exploitation of natural resources for consumptive use.</p>
            </div>
        </div>

    </div>
  

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Wild life Travel- 2022</p>
                </div>
            </div>
        </div>
    </footer>

  
    <script src="js/jquery.js"></script>

  
    <script src="js/bootstrap.min.js"></script>

   
    <script>
    $('.carousel').carousel({
        interval: 5000 
    })
    </script>

</body>

</html>
