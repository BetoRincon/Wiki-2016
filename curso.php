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
			<h1>Create a new Course <h1/>
				<?php

				 echo "<h4>".$_SESSION['roll']." : ".$_SESSION['username']."</h4>";	

				?>
			<form method="post" data-ajax="false" action="cursoRegistro.php">
			<!--dejando el action así puedo
			ejecutar el php dentro de mi html-->
			 <!--<label for ="nombreCurso">Course name</label>
				<input type="text" name="nombreCurso" id="nombreCurso" value="<?php echo $nombreCurso;?>">
				<label for="cursoPassword">Password</label>
				<input type="password" name="cursoPassword" id="cursoPassword"
				value="<?php echo $cursoPassword;?>">
				<para ir guardando variables debo usar el echo y las oho tags-->
				<!--input type="submit" name="submit" value="new course">-->
			<label for="nombreCurso" >Course name: </label>
			<input type="text" name="nombreCurso" id="nombreCurso">

			<label for="passwordCurso" >Password:</label>
			<input type="password" name="passwordCurso" id="passwordCurso">

			<input type="submit" name="submit" id="submit" value="Create Course">
 			
				

			</form>
			<div class="ui-grid-a" id="marginButtons">
					<div class="ui-block-a">
						<a href="login.html" data-ajax="false" data-role="button"
			 			data-icon="arrow-l" data-inline="true">Log out</a>
					
					
						
					</div>
				</div>


			

		</div>
		<div data-role="footer" id="footer">
			<h1></h1>
		</div>
	</div>

</body>
</html>