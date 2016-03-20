<?php
session_start();
include("conexion.php");

$nombreCurso=$_POST['nombreCurso'];
$passwordCurso=$_POST['passwordCurso'];


if(isset($_POST['nombreCurso']) && !empty($_POST['nombreCurso']) &&
	isset($_POST['passwordCurso']) && !empty($_POST['passwordCurso']))
{
	
				include("conexion.php");
				//-----------conexion base de datos-------
				//----------------------------------------
				$conexion=mysql_connect($host,$userdb,$pw)or 
					die("problemas al conectar".mysql_error());
					//---------------------------
					//conexion bd
					
					mysql_select_db($db,$conexion)or die("problemas al conectar con la bd".mysql_error());

					//insersion de datos

					$sel1=mysql_query("SELECT ID FROM test".mysql_error());

					$sel2=mysql_query("INSERT INTO curso (curso,clave,test_id) VALUES ('$nombreCurso','$cursoPassword','$_SESSION[id]') ".mysql_error());
					$sesion2=mysql_fetch_array($sel1);
					

					 //echo "ID: ".$_SESSION['id'];
					//para redireccionar sin usar el header porque ya hice echo's
					
					/*
					echo "<script language=\"javascript\">
						window.location.href=\"primeraTeacher.php\";
						</script>";	*/								

				
				
}

?>