<?php
////////////////////////
//Júlíus Örn Fjeldsted//
////////////////////////
//
//Þú ert að senda pantanir etc á þetta.
$Email_To = "Breyta í senda á";

//Pantanir koma frá þessu emaili
$Email_From = "breyta í email hjá vefþjón";
//Titill á alla tölvupósta,
$Email_Subject = "Titill á alla tölvupósta";

//Hvert notandin er sendur eftir að hann sendir inn formið
$Redir_To = "Breyta í hvert notandin fer eftir POST, Með HTTP";

//Ekki breyta fyrir neðan hérna

//Logic
if($_SERVER['REQUEST_METHOD'] != "POST"){
	$form = $_GET;
}else{
	$form = $_POST;
}


ob_start();
require_once("template.php");//Template
$message = ob_get_clean();
$headers = "From:" . $Email_From ;
mail($Email_To,$Email_Subject,$message,$headers);
header("location:$Redir_To ");
?>