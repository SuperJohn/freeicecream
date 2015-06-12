<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Free Ice Cream Foundation</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-55127346-1', 'auto');
	  ga('send', 'pageview');
	</script>
	</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

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
                <a class="navbar-brand page-scroll" href="#page-top">Free Ice Cream Foundation</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Add Donation</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Recent Donations</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
					<img src="img/ice_cream.jpg" alt="Ice Cream image" height="125" width="150" >
                    <div class="jh_center_align"> 
						<p><strong>About Us:</strong> The Free Ice Cream Foundation's mission is to spread joy and happiness through free ice cream. It's also pretty fun passing out free ice cream. You can be a part of the movement by passing out free ice cream yourself! </p>
					</div>
					<div class = "jh_left_align">
					
					<?php
								
					$con = mysqli_connect("localhost","root","","freeicecream");
					
					if ($con->connect_errno) {
					echo "Failed to connect to MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
					}
					
					$sql = "select full_name,location,quantity from freeicecream.donation_log"; 
					$results = mysqli_query($con,$sql);
					$fields_num = mysqli_num_rows($results);	
					ECHO "<h2>There have been a total of $fields_num donations to date!</h2>";
					?>
						 
					
					</div>
                    <a class="btn btn-default page-scroll" href="#about">Click Me to Scroll Down!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Form Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Add donation</h1>
					<form action="php/form_action.php" mthod="get"> 
					<fieldset>
						Your Name:<br>
						<input type="text" name="full_name">
						<br>
						Location:<br>
						<input type="text" name="location_name">
						<br>
						Quantity Donated:<br>
						<input type="text" name="quantity">
						<br><br>
						<input type="submit" value="Submit">
					</fieldset>
					</form>
				</div>          
			</div>
        </div>
    </section>
<!-- adding note to github -->
	
    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Recent Donations</h1>
               	
				 <?php 
					ECHO "<table border='1', width = '50%'><tr>";
					
					FOR($i=0; $i<$fields_num; $i++)
						{
							$field = MYSQLi_FETCH_FIELD($results);
							//ECHO "<td>{$field->name}</td>";
						}
						ECHO "</tr>\n";
						// printing table rows
						WHILE($row = MYSQLi_FETCH_ROW($results))
						{
							ECHO "<tr>";

							// $row is array... foreach( .. ) puts every element
							// of $row to $cell variable
							FOREACH($row AS $cell)
							ECHO "<td>$cell</td>";

							ECHO "</tr>\n";
						}
					
					// close connection
					mysqli_close($con);
					?>	

               	<table style="width:100%">
				  
				</table>




                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact Section</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
