
	<?php
		session_start();
		include("layout.php");
		Inicio();
		echo"<center>
				<br>
				<h2>Senha Incorreta!</h2> <br>
				<br><br>
				<a href='login.php'>Tentar novamente!</a>
			</center>";
			Fim();
	?>	
