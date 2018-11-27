<?php 

$name_user=$_POST['name'];
$email_user=$_POST['email'];
$message_user=$_POST['message'];

$inbox="contact@patagoniaoils.com";

$tittle="Consulta enviada des Patagoniaoils.com";
$message="Name: ".$name_user."\r\n";
$message.="Email: ".$email_user."\r\n";
$message.="Message: ".$message_user."\r\n";
$sender="From: $name_user <$email_user>";

mail($inbox, $tittle, $message, $sender);

include("conexion-mysql.php");

mysql_query("INSERT INTO inbox VALUES (0, '$name_user', '$email_user', '$message_user')", $conect);

header("Location:contacto.php?e=ok");

 ?>