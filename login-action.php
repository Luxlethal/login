<?php
if(!isset($_POST["username"]) || !isset($_POST["password"]) ) {
	die("Errore! Parametri mancanti.");
}
$formato_campi = array("username" => "/^[a-zA-Z_\-{1,20}]$/",
					  "password" => "/^[\W\w\s]{5,20}$/"
				);
$valido = true;
foreach($formato_campi as $campo => $formato){
	if(trim($_POST[$campo]) == "") {
		echo "Compilare il campo $campo";
		$valido = false;
	}
	elseif (!preg_match($formato, $_POST[$campo])){
		echo "Formato non corretto per il campo $campo";
		$valido = false;
	}
}
?>