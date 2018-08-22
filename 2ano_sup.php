<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		if ($_POST["nome"]!=""){
			echo "Alo ".$_POST["nome"];
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
			echo "Voce vai morre";
	?>
	<?php
		if (isset($_POST["felis"])) {
			echo "Vose e felis com:";
			foreach ($_POST["felis"] as $felis) {
				echo " $felis <br/>";
			}
		}
		else 
			echo "vose e um em felis...";
	?>
	<?php  
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
</body>
</html>
