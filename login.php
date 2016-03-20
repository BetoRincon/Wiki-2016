<?php
session_start();//para los inicio de sesión
include("conexion.php");

//-----------capruta de datos--------------
//----------------------------------------
$email=$_POST['email'];
$password=$_POST['password'];
/*echo $email."<br>";
echo $password."<br>";*/
//----------------------------------------
//----------------------------------------

//-----------conexion base de datos-------
//----------------------------------------
if(isset($_POST['email']) && !empty($_POST['email']) &&
	isset($_POST['password']) && !empty($_POST['password']))
{
	$conexion=mysql_connect($host,$userdb,$pw)or 
	die("problemas al conectar".mysql_error());

	//conexion a la bd
	mysql_select_db($db,$conexion)or 
	die("problemas al conectar con la bd".mysql_error());

	//query
	$sel =mysql_query("SELECT ID,EMAIL,PASSWORD,USERNAME,ROLL FROM test 
		WHERE EMAIL LIKE '%$_POST[email]%'", $conexion)
	or die ("problemas en consulta: ".mysql_error());

	//echo "antes de variable sesion<br>";
	$sesion=mysql_fetch_array($sel);
	

	

	if($_POST['password'] == $sesion['PASSWORD'])
	{
		$_SESSION['id'] = $sesion['ID'];
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['username']=$sesion['USERNAME'];
		$_SESSION['roll']=$sesion['ROLL'];
		

		if($sesion['ROLL']=="Teacher")
		{
			header('Location: primeraTeacher.php');
		}		
		else
		{
			header('Location: primeraStudent.php');
		}
	}
	else
	{
		echo "<h1>Error en ingreso de datos</h1><br>";
		echo "<a href='login.html'>Regresar<a>";
		//echo $_POST['password']."<br>";
		//echo $sesion['PASSWORD']."<br>";
	}

}






?>