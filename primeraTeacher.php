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
	<script type="text/javascript" scr="servicio.js"></script>		
		
	<link rel="stylesheet" href="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/css-login.css">
		
	<title>Wiki-dictionary</title>
</head>
<body>
	<div data-role="page">

		<div data-role="header" id="header"></div>
		<div data-role="main" id="content" class="ui-content">
			<h1>Welcome to Wiki-dictionary<h1/>
				<?php
				 echo "<h4>".$_SESSION['roll']." : ".$_SESSION['username'].
				"</h4>";
				?>
				<div class="margin">
					<?php
				include("conexion.php");
				$conexion=mysql_connect($host,
					$userdb,$pw)or die("problemas
					al conectar la bd".mysql_error());

				mysql_select_db($db,$conexion)or die
 				("problemas al conectar la bd".mysql_error());

 				$sel=mysql_query("SELECT curso FROM curso WHERE test_id=$_SESSION[id]",$conexion)
 				or die ("problemas en consulta".mysql_error());
 				//$sesion=mysql_fetch_array($sel);
 				
 				//tabla
 				echo "<table  id='tabla'>";
 				echo "<tr>
 					<th> Your Courses</th>
 				 </tr>";

 				 $contador=0;

 				while($sesion=mysql_fetch_array($sel))
 					//si la condición no se pone así, se 
 					//cicla
 				{
 					//defino contador para ir numerando las 
 					//materias asociadas al profe
 					$contador=$contador+1;

 					//defino una variable curso 
 					$curso="curso ".$contador;

 					//en la super variable $_SESSION almaceno
 					//los cursos 
 					$_SESSION[$curso]=$sesion['curso'];
 					//echo $sesion[curso]."<br>";
 					//echo $_SESSION[$curso];
 					echo "
 					<tr>
 					<td align='center'>
 					<form action='cursoTeacher.php' method='post' data-ajax='false'>
 					<input type='hidden' name='curso' value=$sesion[curso]>
 					<input type='submit' value=$sesion[curso]>
 					</form>
 					</td>
 					</tr>";
 					
 				}
 				echo "</table>";
 				/*echo $_SESSION['curso 1'];
 				echo $_SESSION['curso 2'];
 				echo $_SESSION['curso 3'];
 				echo $_SESSION['curso 4'];*/
 				
				 
				?>
				</div >

				<br><br>
				<div class="ui-grid-a" id="marginButtons">
					<div class="ui-block-a">
						<a href="login.html" data-ajax="false" data-role="button"
			 			data-icon="arrow-l" data-inline="true">Log out</a>
						
					</div>
					<div class="ui-block-b">
						<a href="curso.php" data-ajax="false" data-role="button"
			 			data-icon="check" data-inline="true">Create a new Course</a>
						
					</div>
			 	
			 	
			 	</div>
					
				
			

		</div>
		<div data-role="footer" id="footer">
			<h1></h1>
		</div>
	</div>

</body>
</html>