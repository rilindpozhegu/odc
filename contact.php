<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ODC LIFESAVING</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="img/odc-logo-01.png">
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse ">
                <ul class="nav navbar-nav navbar-right navbar-link">
                    <li class="hidden">
                        <a class="#" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="#" href="index.php">HOME</a>
                    </li>
                    <li>
                        <a class="#" href="about.php">ABOUT</a>
                    </li>
                    <li>
                        <a class="#" href="event.php">EVENTS</a>
                    </li>
                    <li>
                        <a class="#" href="galery.php">GALERY</a>
                    </li>
                    <li>
                        <a class="#" href="training.php">TRAINING</a>
                    </li>
                    <li>
                        <a class="active" href="contact.php">CONTACT US</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Maps Section -->

    <section>
        <div id="map"></div>
    </section>

    <div class="clearfix"></div>
    <!-- last Section -->

    <?php include 'contact_inputs.php';?>
    


     <!-- Footer -->

    <?php include 'footer_all.php';?>

        <!-- jQuery -->
    <script src="js/jquery-1.9.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/scrolling-nav.js"></script>

    <!-- My Js changes -->
    <script type="text/javascript" src="js/odc.js"></script>

    <!-- Maps JS -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5DKRnNBKI1WoId0aNwjeOasNN2WePqmo&callback=initMap">
    </script>


</body>
</html>