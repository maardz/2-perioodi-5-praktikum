
 <?php require("validation.php"); ?>
<!DOCTYPE HTML>
<html>
   <head>
		<title></title>
		<meta charset="utf-8">
   </head>
   <body>
		<pre>
		  <?php print_r($_POST); ?>
	  	</pre>	
	  	<form action="index.php" method="post">
	  		<div>
	  			<div class= "form_message">
	  			<?php
	  			 if ($isSubmitted) {
	  			 	echo $usernameMessage;
	  			}
	  			?>
	  		<span>Kasutajanimi:</span>
	  		<input type="text" name="username">
	  		</div>
	  		<div>
	  		<input type="submit" value="Saada" name="submit">
	  		</div>
	  	</form>	
   </body>
</html>