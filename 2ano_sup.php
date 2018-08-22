<!DOCTYPE html>
<html>
<head>
	<title></title>
	<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>	
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<style type="text/css">
		body{
			font-size: 20px;
		}
	</style>
</head>
<body>
	<div id="content"></div>
	<?php
		echo "<h1> Aqui estao todas as infos da sua vida</h1>";
		if ($_POST["nome"]!=""){
			echo "<br/>Alo ".$_POST["nome"];
			if ($_POST["sexo"]=='F'){
				echo ", minha garota.";
			}
			elseif ($_POST["sexo"]=='M') echo ", meu garoto.";
			else echo ", ser maravilhoso!";
		}
		else echo "Nome nao informado";
	?>
	<?php

		if (isset($_POST["obrigacoes"])){			
			echo "<br/>Obrigacoes cumpridas: <br/>";
			foreach ($_POST["obrigacoes"] as $obrigacoes) {
				echo "-> $obrigacoes <br/>";				
			}
		}
		else
			echo "Voce vai morre<br/>";
	?>
	<?php
		if (isset($_POST["felis"])) {
			echo "Vose e felis com:";
			foreach ($_POST["felis"] as $felis) {
				echo " $felis <br/>";
			}
		}
		else 
			echo "vose e um em felis...<br>";
	?>
	<?php
	  	echo "<h1> Calcuzator </h1>";
		if (isset($_POST["number1"]) && $_POST["number2"] && $_POST["operation"]) {
			foreach ($_POST["number1"] as $number1) 
			foreach ($_POST["number2"] as $number2)

			echo "$number1";
			if ($_POST["operation"] == "adicao") {
				echo "+";
				$resultson = $number1 + $number2;
			}
			elseif ($_POST["operation"] == "subtracao") {
				echo "-";
				$resultson = $number1 - $number2;
			}
			elseif ($_POST["operation"] == "multiplicacao") {
				echo "x";
				$resultson = $number1 * $number2;
			}
			elseif ($_POST["operation"] == "divisao") {
				echo "÷";
				$resultson = $number1 / $number2;
			}
			else{
				echo "insira um operador";
			}
			echo "$number2";
		}
		else
			echo "error_log(algo de errado nao esta serto)";
		echo "<br> O resultado é: $resultson";
	?>
	<?php
		$abrearq=fopen("lorem.txt", "w+");
		$escreveaqr=fwrite($abrearq, "maluquete");
		fclose($abrearq);
	?>
</body>
</html>
