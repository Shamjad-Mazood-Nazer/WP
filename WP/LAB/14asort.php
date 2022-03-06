<html>
	<center>
		<?php
			$a = array("JAD", "JADSPRIT", "ANWAR", "STEBIN");
			echo("Array Contains : ");
			print_r($a);
			echo("<br>Ascending Order Name :  ");
			asort($a);
			print_r($a);
			echo("<br>Descending Order Name :  ");
			arsort($a);
			print_r($a);
		?>
	</center>
</html>