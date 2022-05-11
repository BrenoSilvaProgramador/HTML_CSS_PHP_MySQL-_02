<?php
	$nota_01 = $_POST['nota_01'];
	$nota_02 = $_POST['nota_02'];
	$nota_03 = $_POST['nota_03'];

	echo "As notas digitadas sao $nota_01, $nota_02 e $nota_03! <br>";

	$media_ponderada = (($nota_01 + $nota_02) + ($nota_03 * 2)) / (4);

	if ($media_ponderada >= 6){
	echo "<br>A media ponderada das notas digitadas e: $media_ponderada!<br><br>Você passou! Parabens!<br>";
	} else {
	echo "<br>A media ponderada das notas digitadas e: $media_ponderada!<br><br>Você foi reprovado! Estude mais e tente novamente!<br>";
	}
?>