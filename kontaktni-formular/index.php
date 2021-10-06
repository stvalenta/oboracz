<?php
if(isset($_POST["submit"]) ){
	$jmeno = $_POST["your_name"];
	$email = $_POST["your_email"];
	$predmet = $_POST["your_subject"];
	mail('oborabudyne@seznam.cz' , $jmeno, $email , $predmet , 'From: $your_email');
	mail('stvalenta@seznam.cz' , $jmeno , $email , $predmet , 'From: $your_email');
	echo "ZPRAVA SE ODESLALA";
	header("Location: /kontakt/index.html");
	exit;
}
?>