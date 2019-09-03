<?php

	// set language
	$lan = isset($_GET["lan"]) ? $_GET["lan"] : "en";
	switch ($lan) {
		case "en":
			$pageheader = "Zombicide Scenario Generator";
			$header = "SCENARIO GENERATOR";
			$intro = "Even years after the Zombie Apocalypse beginning and became hardened survivors,
					we thought that we had seen everything. But we were wrong:
					without anyone to dust the furniture or cut the grass, the world became a great mess of old wrecks and memories.
					I could even say that we are inside a game and some insane player is simply shuffling together all the places we have visited ...";
			$data = "AS HARD AS YOU WANT / HOW MANY SURVIVORS YOU WANT / HOW MANY HOURS YOU CAN HOLD ON";
			$tneeded = "Tiles needed:";
			$button = "LeT's RoCk!";
			$trademark = "<span>\"Zombicide\"</span> is a trademark of <span>Guillotine Games</span>. All rights reserved.";
			$devby = "Tool developed by Bruno Davi Kretzmann, from <a href='http://www.alemdomuro.com.br'>Além do Muro</a>.";
			$suggestions = "Send any suggestion to the mail <a href='mailto:brunodavi@alemdomuro.com.br?Subject=Zombicide Scenario Generator' target='_top'>brunodavi@alemdomuro.com.br</a>.";
			$objectives = "<p>Use an average of one objective token per player, scattered in interleaved tiles around the board. Roll 1d6 per tile to sort in which room each objective token will be positioned.</p>
						<p>Define with your group the terms of victory: find all the objectives (each one worth 5 experience points), escape through the exit point, reach the red level ...</p>";
			$rules = "<p><span>Doors:</span> For each tile with buildings, there must be at least one door connected to the street.
					<p>Roll a dice whenever you need to draw a side or room. Optionally you can leave a building with fewer or more exits to the street. You decide!</p>
					<p>Roll a dice whenever you want to add more randomness in scenario preparation.</p>
					<p>Whenever construction tiles are connected and there is a wall blocking the way, position a door between them.</p>
					<p>Roll a dice to decide whether it is locked (1, 2 or 3) or open (4, 5 or 6), or simply lock them all!</p>
				<p><span>Event Triggers:</span> If there is a building formed by at least three tiles, the group can coose to position event trigger tokens (\"?\") in the middle of them,
				in order to minimize the impact of zombie spawning when opening one of the outer doors and create some suspense.</p>
				<p><span>Zombie Spawn Tokens:</span> The number of Spawning zones will be between 3 and 6. Position the tokens at the borders of the map according to your group preferences or draw them with the aid of a dice.
				Additionally, if you own Zombicide: Rue Morgue, don't forget to distribute the numbered tokens along this spawning zones.</p>
				<p><span>Other components:</span> You can decide which components to use with the aid of a dice and position them as you wish. If you like to play with cars, I have no fault. =P</p>";
			break;
		case "br":
			$pageheader = "Zombicide Gerador de Cenários";
			$header = "GERADOR DE CENÁRIOS";
			$intro = "Após anos de apocalipse zumbi e já termos nos tornado sobreviventes calejados,
					achávamos que já tínhamos visto de tudo. Mas estávamos errados: sem ninguém para tirar pó dos móveis
					ou cortar a grama, o mundo se tornou uma grande bagunça de destroços e lembranças antigas. Eu até poderia dizer que
					estamos dentro de um jogo e algum doido está simplesmente embaralhando todos os lugares que já visitamos...";
			$data = "TÃO DIFÍCIL QUANTO VOCÊ QUISER / QUANTOS SOBREVIVENTES VOCÊ QUISER / QUANTAS HORAS AGUENTAR";
			$tneeded = "Mapas necessários:";
			$button = "MaNdA VeR!";
			$trademark = "<span>\"Zombicide\"</span> é uma marca registrada da <span>Guillotine Games</span>. Todos os direitos reservados.";
			$devby = "Ferramenta desenvolvida por Bruno Davi Kretzmann, do <a href='http://www.alemdomuro.com.br'>Além do Muro</a>.";
			$suggestions = "Qualquer sugestão pode ser enviada para o email <a href='mailto:brunodavi@alemdomuro.com.br?Subject=Zombicide Scenario Generator' target='_top'>brunodavi@alemdomuro.com.br</a>.";
			$objectives = "<p>Utilize uma média de um objetivo por jogador, espalhados em tiles intercalados do tabuleiro. Jogue 1d6 por tile para sortear o local onde cada objetivo será posicionado.</p>
						<p>Defina com seu grupo os termos de vitória: encontrar todos os objetivos (cada um valendo 5 pontos de experiência), fugir pelo ponto de saída, chegar no nível vermelho...</p>";
			$rules = "<p><span>Portas:</span> Para cada tile com construções, deve haver no mínimo uma porta conectada à rua.</p>
						<p>Role um dado sempre que precisar sortear um lado ou cômodo. Opcionalmente você pode deixar uma construção com menos ou mais saídas para a rua. Você decide!</p>
						<p>Role dados sempre que quiser adicionar mais aleatoriedade na preparação do cenário. Sempre que houver tiles de contrução conectados mas com uma parede bloqueando a passagem, posicione uma porta entre eles.</p>
						<p>Role um dado para decidir se estará trancada (1, 2 ou 3) ou aberta (4, 5 ou 6), ou simplesmente coloque todas trancadas!</p>
				<p><span>Ativadores de Eventos:</span> Se houver uma construção formada por um mínimo de três tiles, o grupo pode optar por sortear tokens de Eventos (\"?\") a serem posicionados no meio dela,
				a fim de minimizar o impacto de entrada de zumbis ao abrirem uma das portas externas.</p>
				<p><span>Entrada de Zumbis:</span> O número de zonas de entrada de zumbis estará entre 3 e 6. Posicione-os nas laterais do tabuleiro conforme o grupo preferir ou os sorteie.
				Adicionalmente, se você possui Zombicide: Rue Morgue, não se esqueça de distribuir as fichas numeradas junto dessas zonas.</p>
				<p><span>Outros Componentes:</span> Sorteie o uso e posicionamento deles como quiser. Se você gosta de jogar com os veículos, eu não tenho culpa nenhuma. =P</p>";
			break;
	}
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $pageheader; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" href="http://alemdomuro.com.br/wp-content/uploads/Favicon-Maior.png">
<style type="text/css">
</style>
</head>
<body>
	<img class="footer" src="imgs/zombicide_footer.png" alt="zombicide_footer">
	<img class="logog" src="imgs/logo-guillotine.png" alt="guillotine_logo">
	<img class="logoz" src="imgs/zombicide_logo.png" alt="zombicide_logo">
<?php
	require 'zombicide_tiles.php';
	require 'zombicide_randomizer.php';
?>  

	<form action="index.php?lan=<?php echo $lan; ?>" method="POST">
		<input type="hidden" name="lan" value="<?php echo $lan; ?>">
		<div class='center'>
			<h1><?php echo $header; ?><span class='disabled'> v1.0</span></h1>
				<a href="index.php?lan=br"><img name="lanbr" src="imgs/brflag.png" border="0" /></a>
				<a href="index.php?lan=en"><img name="lanen" src="imgs/enflag.png" border="0" /></a>
		</div>
		<div class='center'>
			<p class='intro'><?php echo $intro; ?></p>
			<p><span class="data"><?php echo $data; ?></span></p>
			<p><span><?php echo $tneeded; ?></span>
			<?php
				$aux = 0;
				for ($i = 0; $i < $y; $i++) {
					for ($j = 0; $j < $x; $j++) {
						$list[$aux] = (3 == strlen($final[$i][$j]["code"])) ? $final[$i][$j]["code"] : "0" . $final[$i][$j]["code"];
						$aux++;
					}
				}
				sort($list);
				for ($i = 0; $i < $t; $i++) {
					if ($i < $t - 2) {
						echo (substr($list[$i], -3, 1) == "0") ? substr_replace($list[$i], '', 0, -2) . ", " : $list[$i] . ", " ;
					}
					elseif ($i < $t - 1) {
						echo (substr($list[$i], -3, 1) == "0") ? substr_replace($list[$i], '', 0, -2) . " & " : $list[$i] . " & ";
					}
					else {			
						echo (substr($list[$i], -3, 1) == "0") ? substr_replace($list[$i], '', 0, -2) . "." : $list[$i] . ".";
					}
				}
			?>
			</p>
			<div class='div_map'>
				<div class='table'>
		<?php
					for ($i = 0; $i < $y; $i++) {
						echo "<div class='row'>";
						for ($j = 0; $j < $x; $j++) {
							echo "<div class='cell'><img class='map' src='imgs/". $final[$i][$j]["code"] . "_" . $up[$i][$j] . ".png' alt='" . $final[$i][$j]["code"] . "_" . $up[$i][$j] . "'></div>";
						}
						echo "</div>";
					}
		?>
				</div>		
			</div>
		</div>
		<div class="center">		
			<p><input type="submit" value="<?php echo $button; ?>"></p>
			<p><img class="titles" src="imgs/<?php echo ($lan == "en") ? "mapsize.png" : "mapa.png"; ?>" alt="mapa"></p><p><?php echo (isset($erro)) ? $erro["xy"] : "" ; ?></p>
			<p>
				<select name="x">
					<option value="1" <?php echo ($x == 1) ? "selected" : ""; ?>>1</option>
					<option value="2" <?php echo ($x == 2) ? "selected" : ""; ?>>2</option>
					<option value="3" <?php echo ($x == 3) ? "selected" : ""; ?>>3</option>
					<option value="4" <?php echo ($x == 4) ? "selected" : ""; ?>>4</option>
					<option value="5" <?php echo ($x == 5) ? "selected" : ""; ?>>5</option>
				</select>
				<span class="x"> &nbsp X &nbsp </span>
				<select name="y">
					<option value="1" <?php echo ($y == 1) ? "selected" : ""; ?>>1</option>
					<option value="2" <?php echo ($y == 2) ? "selected" : ""; ?>>2</option>
					<option value="3" <?php echo ($y == 3) ? "selected" : ""; ?>>3</option>
					<option value="4" <?php echo ($y == 4) ? "selected" : ""; ?>>4</option>
					<option value="5" <?php echo ($y == 5) ? "selected" : ""; ?>>5</option>
				</select>
			</p>
			<p><img class="titles" src="imgs/sets.png" alt="sets"></p>
				<p><?php echo (isset($erro)) ? $erro["sets"] : "" ; ?></p>

				<input type="checkbox" name="set[]" value="S1" <?php echo (in_array("S1", $selection)) ? "checked" : ""; ?>>Base Set<br>
				<input type="checkbox" name="set[]" value="S2" <?php echo (in_array("S2", $selection)) ? "checked" : ""; ?>>Prison Outbreak<br>
				<input type="checkbox" name="set[]" value="TC" <?php echo (in_array("TC", $selection)) ? "checked" : ""; ?>>Toxic City Mall<br>
				<input type="checkbox" name="set[]" value="S3" <?php echo (in_array("S3", $selection)) ? "checked" : ""; ?>>Rue Morgue<br>
				<input type="checkbox" name="set[]" value="AN" <?php echo (in_array("AN", $selection)) ? "checked" : ""; ?>>Angry Neighbors
<!--			<p><img class="titles" src="imgs/excluir.png" alt="excluir"><span class="disabled">(Em Breve)</span></p><?php echo "<p>" . (isset($erro["exclude"])) ? $erro["xy"] : "" . "</p>"; ?>
				<input type="checkbox" name="del[]" value="hole" disabled="true"><span class='disabled'>Buraco</span><br>
				<input type="checkbox" name="del[]" value="wasteland" disabled="true"><span class='disabled'>Campo Aberto</span><br>
				<input type="checkbox" name="del[]" value="helipoint" disabled="true"><span class='disabled'>Heliporto</span><br>
				<input style="color:gray;" type="checkbox" name="set" value="court" disabled="true"><span class='disabled'>Quadra</span>
			<p><img class="titles" src="imgs/corredores.png" alt="corredores"><span class="disabled">(Em Breve)</span></p><?php echo "<p>" . (isset($erro["tiles"])) ? $erro["xy"] : "" . "</p>"; ?>
				<input type="checkbox" name="tile[]" value="hospital" disabled="true"><span class='disabled'>Não utilizar tiles de Hospital</span><br>
				<input type="checkbox" name="tile[]" value="mall" disabled="true"><span class='disabled'>Não utilizar tiles de Shopping</span><br>
				<input type="checkbox" name="tile[]" value="cbuilding" disabled="true"><span class='disabled'>Permitir que seus corredores se conectem com construções</span><br>
				<input type="checkbox" name="tile[]" value="ctype" disabled="true"><span class='disabled'>Permitir que se conectem apenas com tiles de seu próprio tipo</span><br> -->
			<p><img class="titles" src="imgs/<?php echo ($lan == "en") ? "objective.png" : "objetivos.png"; ?>" alt="objetivos"></p>
				<?php echo $objectives; ?>
			<p><img class="titles" src="imgs/<?php echo ($lan == "en") ? "rules.png" : "regras.png"; ?>" alt="regras"></p>
				<?php echo $rules; ?>
		</div>
	</form>	
	<div class="center">
		<form action="pdf.php?lan=<?php echo $lan; ?>" method="POST" name="fpdf">
			<input type="hidden" name="lan" value="<?php echo $lan; ?>">
			<input type="hidden" name="x" value="<?php echo $x; ?>">
			<input type="hidden" name="y" value="<?php echo $y; ?>">
			<input type="hidden" name="up" value='<?php echo json_encode($up); ?>'>
			<input type="hidden" name="json" value='<?php echo json_encode($final) ?>'>
			<p><input type="submit" value="PDF"></p>
		</form>
	</div>
	<div class='clear_footer'>		
		<p class='footer_text'><?php echo $trademark; ?></p>
		<p class='footer_text'><?php echo $devby;?></p>
		<p class='footer_text'><?php echo $suggestions; ?></p>
	</div>
</body>
</html>