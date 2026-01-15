<?php
$nom=$_POST['A'];
$prenom=$_POST['B'];
$identifient=$_POST['C'];
$date=$_POST['D'];
$nationalité=$_POST['E'];
$sexe=$_POST['F'];
$A=mysqli_connect('localhost','root','','digital');
$B="INSERT INTO ordi(NOM,PRENOM,IDENTIFIENT,DATE,NATIONALITE,SEXE)VALUES('$nom','$prenom','$identifient','$date','$nationalité','$sexe')";
mysqli_query($A,$B);


?>


