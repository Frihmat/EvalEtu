<?php
$jour = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");

$mois = array("","Janvier","F�vrier","Mars","Avril","Mai","Juin","Juillet","Ao�t","Septembre","Octobre","Novembre","D�cembre");

$dateDuJour = $jour[date("w")]." ".date("d")." ".$mois[date("n")]." ".date("Y");


$i=0;
$cours=$_POST["cours"];
$date="16/01/2014";

$nom=$_POST['nom'];
$raison=$_POST['raison'];

		//mysqli_query($link,$req);
	$db=new PDO("mysql:host=localhost;dbname=planning","root","");
	$req="INSERT INTO appel VALUE($i,'Hypermedia','$dateDuJour','$nom','$raison')";
$res=$db->exec($req);
?>