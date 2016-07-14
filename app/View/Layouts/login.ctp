<!DOCTYPE html>
<html lang="en">
  <head>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<?php
		echo $this->Html->meta('icon');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
     <link href="http://localhost:8080/thembait/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="http://localhost:8080/thembait/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/thembait/assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/thembait/assets/js/bootstrap-daterangepicker/daterangepicker.css" />
    <!--external css-->
    <link href="http://localhost:8080/thembait/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/thembait/assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/thembait/assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/thembait/assets/lineicons/style.css">    
        
    <!-- Custom styles for this template -->
    <link href="http://localhost:8080/thembait/assets/css/style.css" rel="stylesheet">
    <link href="http://localhost:8080/thembait/assets/css/style-responsive.css" rel="stylesheet">
    <link href="http://localhost:8080/thembait/assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="http://localhost:8080/thembait/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="http://localhost:8080/thembait/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  	<!-- Latest compiled and minified CSS -->
  	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

  	<!-- Latest compiled and minified JavaScript -->
  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
    	body{ padding: 70px 0px; }
    </style>

  </head>

  <body>

  

    <div class="container">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

    </div><!-- /.container -->

  </body>
</html>
