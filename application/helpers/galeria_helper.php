<?php

	class plantilla{

		static $instancia;

		static function inicio(){
			self::$instancia = new plantilla();
		}

		function __construct(){
	?>
		<!DOCTYPE html>
		<html lang="en">

		<head>

		    <meta charset="utf-8">
		    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
		    <meta name="description" content="">
		    <meta name="author" content="">

		    <link rel="icon" type="image/png" href="<?php  echo base_url()?>/favicon-32x32.png" sizes="32x32">
			<link rel="icon" type="image/png" href="<?php  echo base_url()?>/favicon-16x16.png" sizes="16x16">
		    <title>Galería</title>

		    <!-- Bootstrap Core CSS -->
		    <link href="<?php  echo base_url('base')?>/css/bootstrap.min.css" rel="stylesheet">

		    <!-- Custom CSS -->
		    <link href="<?php  echo base_url('base')?>/css/4-col-portfolio.css" rel="stylesheet">
		    <script src="<?php  echo base_url('base') ?>/js/jquery.js"></script>
		    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		    <!--[if lt IE 9]>
		        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		    <![endif]-->



		</head>

		<body>

		    <!-- Navigation -->
		    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		        <div class="container">
		            <!-- Brand and toggle get grouped for better mobile display -->
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		                <a class="navbar-brand" href="<?php echo base_url()?>">Galeria</a>
		            </div>
		            <!-- Collect the nav links, forms, and other content for toggling -->
		            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		                <ul class="nav navbar-nav">
		                    <li>
		                        <a href="<?php echo base_url('admin')?>">Subir foto</a>
		                    </li>
		 
		                    <li>
		                        <a href="#">Contact</a>
		                    </li>
		                </ul>
		            </div>
		            <!-- /.navbar-collapse -->
		        </div>
		        <!-- /.container -->
		    </nav>

		    <div class="container">
	<?php
		}

		function __destruct(){
	?>
		<footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Tareas@ITLA 2017</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

		</div>
		    <!-- /.container -->

		    <!-- jQuery -->
		    <script src="<?php  echo base_url('base') ?>/js/jquery.js"></script>

		    <!-- Bootstrap Core JavaScript -->
		    <script src="<?php  echo base_url('base') ?>/js/bootstrap.min.js"></script>

		</body>

		</html>	
	<?php
		}
	}

	function cargar_imagenes(){
		$CI =& get_instance();

		$sql = "Select * from imagen";
		$rs = $CI->db->query($sql);
		return $rs->result();
	}	 