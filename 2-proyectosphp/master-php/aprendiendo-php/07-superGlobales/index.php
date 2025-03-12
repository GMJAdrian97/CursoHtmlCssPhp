<?php
// Variables super globales

/////// Variables de servidor
// $_SERVER['SERVER_ADDR'] nos da la direccion del servidor
echo "<h1>".$_SERVER['SERVER_ADDR']."</h1>";

// $_SERVER['SERVER_NAME'] nos da el Dominio del server'
echo "<h1>".$_SERVER['SERVER_NAME']."</h1>";

// $_SERVER['SERVER_SOFTWARE'] nos da el nombre del hostdel softwARE  DEL SERVER 
echo "<h1>".$_SERVER['SERVER_SOFTWARE']."</h1>";

// $_server['HTTP_USER_AGENT'] nos da el bnavegador que que el cliente esta usando 
echo "<h1>".$_SERVER['HTTP_USER_AGENT']."</h1>";

// .$_SERVER['REMOTE_ADDR'] nos da la ip del cliente 
echo "<h1>".$_SERVER['REMOTE_ADDR']."</h1>";







?>