<!DOCTYPE html>
<html>
	<head>
		<title>PHPZÃO</title>
		<meta charset="utf-8">
		<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		
	</head>
	<body>
		<nav id="menu">
			<h1>~ Site Fofo do Brenno ~</h1>
			<ul>
				<li><h2>2º Bimestre</h2></li>
				<li><a href="#array">Array</a></li>
				<li><a href="#form">Formulários</a></li>
				<li><a href="https://www.w3schools.com/tags/tag_input.asp" target="_blank">Personalizar Caixas do Formulário</a></li>	
				<li><h2>3º Bimestre</h2></li>
				<li><a href="#formphp">Formulários com PHP</a></li>

			</ul>
		</nav>
		<div id="content">
			<h1>2º Bimestre</h1>
			<a href="https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/Array" target="_blank"> <h2 id="array">Array</h2> </a>
			<p>Arrays são objetos semelhantes a listas que vêm com uma série de  métodos embutidos para realizar operações de travessia e mutação. Nem o tamanho de um array JavaScript nem os tipos de elementos são fixos. Já que  o tamanho de um array pode ser alterado a qualquer momento e os dados podem ser armazenados em posições não contíguas, arrays JavaScript não tem a garantia de serem densos; isso depende de como o programador escolhe usá-los. De uma maneira geral, essas são características convenientes, mas, se esses recursos não são desejáveis para o seu caso em particular, você pode considerar usar arrays tipados.</p>
			<p>Arrays não podem usar strings como índices (como em um array associativo), devem ser usados números inteiros. Definir ou acessar não-inteiros usando notação de colchetes (ou notação de ponto) não vai definir ou recuperar um elemento do array em si, mas sim definir ou acessar uma variável associada com a coleção de propriedades de objeto daquele array. As propriedades de objeto do array e a lista de elementos do array são separados, e as operações de travessia e mutação não podem ser aplicadas a essas propriedades nomeadas.</p>
			<h3>var_dump</h3>
			<p>Mostra informações sobre a variável.</p>
			<h2>Exemplos</h2>
			<?php
				//vardump~isset
				//exibir estrutura array -> var_dump (mais detalhada) ou print_r (ñ fornece tipos)
				$errey = array('nome' => 'Pedro', 'idade' => 15, 'endereco' => null);
				var_dump(isset($errey['nome']));
				var_dump(isset($errey['endereco']));
				echo '<br>';

				//vardump~unset & print_r
				print_r($errey);
				echo '<br>';
				unset($errey['idade']);
				var_dump($errey);
				echo '<br>';
				unset($errey);
				var_dump(isset($errey));
				echo '<br> <br>';

				//ordenar elementos array
				$frutas = array('laranja', 'banana', 'abacaxi', 'maçã');
				print_r($frutas);
				echo '<br>';
				sort($frutas);
				print_r($frutas);

				//funcoes para contar/fornecer qtd de elementos array -> count sizeof (qts sao os elementos ou tamanho do array)
				echo '<br> <br> Quantidade de frutas:'.count($frutas).'.';
				echo '<br> Quantidade de frutas:'.sizeof($frutas).'.<br>';

				//verificar existencia de elemento
				echo in_array('laranja', $frutas);

				//somar elementos array -> array_sum
				$numeros = array(10,20,30,40,50);
				echo array_sum($numeros).'<br><br>';

				//foreach -> funciona só em arrays em objetos
				$cores = array('azul', 'vermelho', 'verde');
				foreach ($cores as $valor)
					echo "$valor <br>";
				foreach ($cores as $chave => $valor) {
					echo "Índice: $chave";
					echo ", Conteúdo: $valor. <br>";
				}
				$num = array(1,2,3,4,5);
				echo '<br>';
				//modificar elementos do array
				foreach ($num as &$valor)
					$valor*=2;
				unset($valor);
				var_dump($num);
				//STRTOUPPER -> todo o texto maiúsculo

				//funcao com array inicializado com nome de 5 alunos e colocar em ordem crescente dos alunos
				$alunos = array('Jão', 'Pedro', 'Antonio', 'Zé', 'Roger Vrau', 'Roger Vrauzer');
				print_r($alunos);
				echo '<br>';
				sort($alunos);
				echo '<br> Ordem Cresncete: ';
				for ($i=0; $i<5; $i++)
					echo "$alunos[$i], ";
				echo '<br>';
			?>
			<a href="https://www.devmedia.com.br/php-forms-manipulando-dados-de-formularios/29392" target="_blank"> <h2 id="form">Formulários</h2> </a>
			<p>Um formulário HTML é apenas um "rosto bonito" para onde os usuários poderão inserir informações que serão interpretados de alguma maneira por algum script do lado do servidor.</p>
			<form>
				Primeiro nome:
				<input type="text" name="pnome">
				Segundo nome:
				<input type="text" name="snome">
				Idade:
				<input type="number" name="idade">
				<br>
				Cidade:
				<input type="text" name="cidade" value="Nova Friburgo">
				<br>
				Senha:
				<input type="password" name="senha" size="10" maxlength="6">
				<br>
				<h3>Disciplinas:</h3>
				<input type="checkbox" name="disc" value="mat">
				Matemautizer
				<input type="checkbox" name="disc" value="fis">
				Fisiquer
				<input type="checkbox" name="disc" value="lin">
				Linguager
				<br>
				<input type="button" value="CLICA HERE, MULEKE!">
			</form>
			<a href="https://html.com/attributes/form-target/" target="_blank">	<h3>Target</h3>	</a>
			<p>Especifica o contexto do navegador no qual a resposta do formulário deve ser exibida.</p>
			<form target="_blank" action="materia_2bim.php">
				<input type="submit" value="submit">
				<br>
				<h2>Secso</h2>
				<input type="radio" name="sexo" value="P" checked>
				Pizza
				<input type="radio" name="sexo" value="M">
				Masculiner
				<input type="radio" name="sexo" value="F">
				Femininer
				<input type="radio" name="sexo" value="O">
				Outrer
				<br>
				Onde você gostaria de estar agora?
				<select>
				<option value="cama">Cama</option>
				<option value="casa">Casa</option>
				<option value="lugar">Lugar Nenhum</option>
				</select>
				<br>
				<h3>Comenta aí o que você acha desse saiti maravilhouser:</h3>
				<textarea name="texto" rows="3" cols="20"></textarea>
			</form>
			<h2><a href="https://outlook.live.com/mail/AQMkADAwATMwMAItY2EwMy1iZGM3LTAwAi0wMAoALgAAA1mib%2F1KiE5NqT9QJw8%2F3hIBAMr8K2srJAZEufm7C96zztoAAADhfl%2B3AAAA/id/AQQkADAwATMwMAItY2EwMy1iZGM3LTAwAi0wMAoAEADxjuICWYchQZpQDQI9vxQE/sxs/AQMkADAwATMwMAItY2EwMy1iZGM3LTAwAi0wMAoARgAAA1mib%2F1KiE5NqT9QJw8%2F3hIHAMr8K2srJAZEufm7C96zztoAAADhfl%2B3AAAAyvwrayskBkS5%2BbsL3rPO2gABpBzhVgAAAA%3D%3D/AQMkADAwATMwMAItY2EwMy1iZGM3LTAwAi0wMAoARgAAA1mib%2F1KiE5NqT9QJw8%2F3hIHAMr8K2srJAZEufm7C96zztoAAADhfl%2B3AAAAyvwrayskBkS5%2BbsL3rPO2gABpBzhVgAAAAESABAA68nZjB4jXky1ZC48vJveRA%3D%3D">Exercícios da lista 4</a></h2>
			<?php 
				$E=[2,6,8,3,10,9,1,21,33,14];
				echo '<br>Array: <br>';
				print_r($E);
				for ($i=0; $i < count($E); $i++)
					$Evindice[$i] = $E[$i]*$i;
				echo '<br>Array -> posição*indice: <br>';
				print_r($Evindice);
				$inversoE=array_reverse($E);
				echo '<br>Array inverso: <br>';
				print_r($inversoE);
			?>
			<h1>3º Bimestre</h1>
				<h2 id="formphp">Manipulação de formulários com PHP</h2>
				<form action="suporte_PHP_materia_2ano.php" method="post">
					<fieldset>
						Nome: <input type="text" name="nome"/>
						<br/><br/>
						Sexo: 
						<input type="radio" value="M" name="sexo">
						<label for="sexo">Male</label>
						<input type="radio" value="F" name="sexo">
						<label for="sexo">Female</label>
						<input type="radio" value="O" name="sexo">
						<label for="sexo">Other</label>
						</br>

						OBRIGAÇÕES CUMPRIDAS</br>
						<input type="checkbox" name="obrigacoes[]" value="MATAR ALGUÉM"> MATAR ALGUÉM </br>
						<input type="checkbox" name="obrigacoes[]" value=" COMER ALGUÉM VIVO "> COMER ALGUÉM VIVO </br> 
						<input type="checkbox" name="obrigacoes[]" value="ATEAR FOGO NUM ASILO"> ATEAR FOGO NUM ASILO </br>
						<input type="checkbox" name="obrigacoes[]" value="ESTRANGULAR UM PORCO"> ESTRANGULAR UM PORCO </br>
						<input type="checkbox" name="obrigacoes[]" value="TIRAR AS ENTRANHAS DE UMA COBRA PELA BOCA "> TIRAR AS ENTRANHAS DE UMA COBRA PELA BOCA </br>

						O que te fas felis?
						<select name="felis[]" multiple="multiple">
							<option value="">selesiona pora</option>
							<option value="Dinheiro">Dinheiro</option>
							<option value="Drogas">Drogas</option>
							<option value="Sexo">Sexo</option>
							<option value="Rock em Roll">Rock em Roll</option>
						</select>
							<fieldset>			
								<h3>Calculadouser: The besti calc</h3>
								<h4>Insirer touder</h4>
								Primeiro number
								<br>
								<input type="number" name="number1[]" value="n1">
								<br>
								Segundo Number	
								<br>
								<input type="number" name="number2[]" value="n2">
								<h4>Operation</h4>
								<ul style="text-align: left; list-style-type: none;  padding-left: 50%;">
									<li>
										<input type="radio" name="operation" value="adicao">
										<label for="operation">Adição</label>
									</li>
									<li>
										<input type="radio" name="operation" value="subtracao">
										<label for="operation">Subtração</label>
									</li>
									<li>
										<input type="radio" name="operation" value="multiplicacao">	
										<label for="operation">Multiplicação</label>
									</li>
									<li>
										<input type="radio" name="operation" value="divisao">
										<label for="opertion">Divisão</label>
									</li>
								</ul>
								<input type="submit">	
						</fieldset>
					</fieldset>
				</form>
		</div>
	</body>
</html>
