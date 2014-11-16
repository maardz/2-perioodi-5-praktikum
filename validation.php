<?php	
	$isSubmitted = isset($_POST["submit"]);
	if (isset($_POST["submit"])) {
		$username = $_POST["username"];
	}

	if (!isset($username) || $username == "") {
		$usernameMessage= '<div class= "form_message"> Nime väli ei vasta nõuetele</div>';
		
	} else {
		$usernameMessage='<div class= "form_message"> Täname korrektselt sisestatud nime eest! </div>';

	}
?>