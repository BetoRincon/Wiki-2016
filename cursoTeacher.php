<?php
 session_start();			
?>

<html>
<head>
	<!--Para las 'ñ'-->
	<meta charset="UTF-8">
	<!--Para que abra en chrome-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!--Script para Jquer, el orden es importante-->
	<script type="text/javascript" src="jquery.mobile-1.4.5/jquery-2.1.3.min.js"></script>
	<script type="text/javascript" src="jquery.mobile-1.4.5/jquery.mobile-1.4.5.js"></script>		
		
	<link rel="stylesheet" href="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/css-login.css">
		
	<title>Wiki-dictionary</title>
</head>
<body>
	<div data-role="page">

		<div data-role="header" id="header"></div>
		<div data-role="main" id="content" class="ui-content">
			
				<!--php de los títulos-->
				<?php
				$curso=$_POST['curso'];
				echo "<h1>Welcome to ".$curso. "<h1/>";
				 echo "<h4>".$_SESSION['roll']." : ".$_SESSION['username'].
				"</h4>";
				
				
				
				?>
				<!--php de la info-->
				<div class="margin">

				<?php
				include("conexion.php");

				$conexion=mysql_connect($host,$userdb,$pw)or die
 				("problemas al conectar 1".mysql_error());

 				mysql_select_db($db,$conexion)or 
 				die("problemas al seleccionar la bd".mysql_error());

 				$query1=mysql_query("SELECT curso_id FROM curso ");

				
				?>

				</div>
				
				<br><br>
				<div id="margin">
			 	<a href="primeraTeacher.php" data-ajax="false" data-role="button"
			 	data-icon="back" data-inline="true">Your Courses</a>
			 	</div>
					
				
			

		</div>
		<div data-role="footer" id="footer">
			<h1></h1>
		</div>
	</div>

</body>
</html>