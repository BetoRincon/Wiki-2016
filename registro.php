<?php

 
 //incluyo el conexion q tiene todos mis datos
 //de la base de datos
 include("conexion.php"); 

 //ingreso de datos
 //---------------------------------------
 $user=$_POST['username'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $roll=$_POST["roll"];
 /*
 echo $user."<br>";
 echo $email."<br>";
 echo $password."<br>";
 echo $roll."<br>";*/
 //-----------------------------------------


//establezco mi conexion
 $conexion=mysql_pconnect($host,$userdb,$pw)or die
 ("problemas al conectar 1".mysql_error());
 //conecto a la bd
 mysql_select_db($db,$conexion)or die
 ("problemas al conectar la bd".mysql_error());

 //inserto mis datos
 mysql_query("INSERT INTO test (username,
 	email,password,roll) VALUES ('$user','
 	$email','$password','$roll') ", $conexion)
 or die("problemas al insertar datos 3 ".mysql_error());
 //echo "Datos insertados";
  
 header('Location: login.html');
?>