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
			<h1>Welcome to Wiki-dictionary<h1/>
				<?php
				 echo "<h4>".$_SESSION['roll']." : ".$_SESSION['username']."</h4>";
				?>
			<div data-role="navbar">
				<ul>
					<li><a href="#" data-ajax="false">Courses</a></li>
				</ul>
			</div>
		</div>
		<div data-role="footer" id="footer">
			<h1></h1>
		</div>
	</div>

</body>
</html>