<?

	$collection	= array();
	if (isset($_GET["set"])) { 
		$selection = $_GET['set'];
	}
	else {
		$selection = array("S1", "S2", "TC", "S3", "AN");
	}
	
	load_collection();
	
	// Discovers tile collection size
	$collection_size = count($collection);
		
	//Delimits board size and total for iterations
	if ((isset($_GET["x"])) and (isset($_GET["y"]))) {
		$x = $_GET["x"];
		$y = $_GET["y"];
		$t = $y * $x;
		if (($t == 0) or ($t > $collection_size/2)) {
			$erro["xy"] = "<p class='error'>* Você não tem tiles suficientes para isso...</p>";
			$y = 3;
			$x = 3;
			$t = $y * $x;
			$selection = array("S1", "S2", "TC", "S3", "AN");
			load_collection();
			// Discovers tile collection size
			$collection_size = count($collection);
		}		
	}
	elseif ((isset($_GET["x"])) xor (isset($_GET["y"]))){
		$erro["xy"] = "<p class='error'>* Preencha ambos os eixos com valores válidos...</p>";
		$y = 3;
		$x = 3;
		$t = $y * $x;
		$selection = array("S1", "S2", "TC", "S3", "AN");
		load_collection();
		// Discovers tile collection size
		$collection_size = count($collection);
	}
	else {
		$y = 3;
		$x = 3;
		$t = $y * $x;
	}
		
	function search_opposite($id, $array) {
		foreach ($array as $key => $val) {
			if ($val['ocode'] === $id) {
			   return $key;
			}
		}
		return null;
	}
	
	$fail = 0;
	do {
		// keeps track of total tiles found
		$found = 1;
			
		// Runs iterations until find all tiles that matches the previous tiles
		for ($i = 0; $i < $y; $i++) {
			for ($j = 0; $j < $x; $j++) {						
				if (($i == 0) and ($j == 0)) {
					// Randomly draws tile 1x1 among the collection
					$id = rand(0,$collection_size - 1);
					$final[$i][$j]["code"] = $collection[$id]["code"];
					$final[$i][$j]["ocode"] = $collection[$id]["ocode"];
					
					// Turns the tile and fit it into its final position
					$turn = rand(0,3);
					switch ($turn) {
						// top remains top	
						case 0:
							$up[$i][$j] = "top";
							//echo "<p> top remains top </p>";
							$final[$i][$j]["top"] = $collection[$id]["top"];
							$final[$i][$j]["right"] = $collection[$id]["right"];
							$final[$i][$j]["bottom"] = $collection[$id]["bottom"];
							$final[$i][$j]["left"] = $collection[$id]["left"];
							break;
						// right became top
						case 1:
							$up[$i][$j] = "right";
							//echo "<p> right became top </p>";
							$final[$i][$j]["top"] = $collection[$id]["right"];
							$final[$i][$j]["right"] = $collection[$id]["bottom"];
							$final[$i][$j]["bottom"] = $collection[$id]["left"];
							$final[$i][$j]["left"] = $collection[$id]["top"];
							break;
						// bottom became top	
						case 2:
							$up[$i][$j] = "bottom";
							//echo "<p> bottom became top </p>";
							$final[$i][$j]["top"] = $collection[$id]["bottom"];
							$final[$i][$j]["right"] = $collection[$id]["left"];
							$final[$i][$j]["bottom"] = $collection[$id]["top"];
							$final[$i][$j]["left"] = $collection[$id]["right"];
							break;
						// left became top
						case 3:
							$up[$i][$j] = "left";
							//echo "<p> left became top </p>";
							$final[$i][$j]["top"] = $collection[$id]["left"];
							$final[$i][$j]["right"] = $collection[$id]["top"];
							$final[$i][$j]["bottom"] = $collection[$id]["right"];
							$final[$i][$j]["left"] = $collection[$id]["bottom"];
							break;
					}
					
					//echo "<p>" . $i . ", " . $j . ": Escolhido " . $final[$i][$j]["code"] . " com o lado " . $up[$i][$j] . " para cima, que é o " . $final[$i][$j]["top"] . ".</p>";
				
					$collection[$id]["chosen"] = "Y";
					$oid = search_opposite($collection[$id]["code"], $collection);
					$collection[$oid]["chosen"] = "Y";
					//echo "encontrado " . $collection[$id]["code"] . " e marcado o verso " . $collection[$oid]["code"];
				}
				// if first line, only search for matches with the right side of the previous tile
				elseif (($i == 0) and ($j <> 0)) {					
					for ($id = 0; $id < $collection_size; $id++){				
						// Compares with all sides of the candidate tile until find one match
						if ((($final[$i][$j - 1]["right"] == strrev($collection[$id]["top"])) or
							($final[$i][$j - 1]["right"] == strrev($collection[$id]["right"])) or
							($final[$i][$j - 1]["right"] == strrev($collection[$id]["bottom"])) or
							($final[$i][$j - 1]["right"] == strrev($collection[$id]["left"]))) and
							($collection[$id]["chosen"] == "N")) {
							
							//echo $collection[$id]["code"] . " " . $m . " "; 
							
							// Stores the index of the matching tile
							$matches[$m] = $id;
							$m++;
						}
					}
					
					// skip iterations if no matches were found
					if (count($matches) == 0) {
						//echo "<p>Nenhuma combinação encontrada para essa posição.</p>";
						$skip = true;
						break 2;						
					}
					else {
						
						// keeps track of total tiles found
						$found++;
						
						// randomly draws one
						$id = $matches[rand(0, count($matches) - 1)];
						$final[$i][$j]["code"] = $collection[$id]["code"];
						$final[$i][$j]["ocode"] = $collection[$id]["ocode"];
												
						// Identify the possible orientations of the tile (top side) and randomly draws one
						$m = 0;
						if ($final[$i][$j - 1]["right"] == strrev($collection[$id]["left"])) { $top[$m] = "top"; $m++; }
						if ($final[$i][$j - 1]["right"] == strrev($collection[$id]["top"])) { $top[$m] = "right"; $m++; }
						if ($final[$i][$j - 1]["right"] == strrev($collection[$id]["right"])) { $top[$m] = "bottom"; $m++; }
						if ($final[$i][$j - 1]["right"] == strrev($collection[$id]["bottom"])) { $top[$m] = "left"; $m++; }
						
						$turn = rand(0, $m - 1);
						//echo "<P>" . $collection[$id]["code"] . ": turn " . $turn . " de " . $m . " chances.</P>";
						switch ($top[$turn]) {
							// top remains top	
							case "top":
								$up[$i][$j] = "top";
								//echo "<p> top remains top </p>";
								$final[$i][$j]["top"] = $collection[$id]["top"];
								$final[$i][$j]["right"] = $collection[$id]["right"];
								$final[$i][$j]["bottom"] = $collection[$id]["bottom"];
								$final[$i][$j]["left"] = $collection[$id]["left"];
								break;
							// right became top
							case "right":
								$up[$i][$j] = "right";
								//echo "<p> right became top </p>";
								$final[$i][$j]["top"] = $collection[$id]["right"];
								$final[$i][$j]["right"] = $collection[$id]["bottom"];
								$final[$i][$j]["bottom"] = $collection[$id]["left"];
								$final[$i][$j]["left"] = $collection[$id]["top"];
								break;
							// bottom became top	
							case "bottom":
								$up[$i][$j] = "bottom";
								//echo "<p> bottom became top </p>";
								$final[$i][$j]["top"] = $collection[$id]["bottom"];
								$final[$i][$j]["right"] = $collection[$id]["left"];
								$final[$i][$j]["bottom"] = $collection[$id]["top"];
								$final[$i][$j]["left"] = $collection[$id]["right"];
								break;
							// left became top
							case "left":
								$up[$i][$j] = "left";
								//echo "<p> left became top </p>";
								$final[$i][$j]["top"] = $collection[$id]["left"];
								$final[$i][$j]["right"] = $collection[$id]["top"];
								$final[$i][$j]["bottom"] = $collection[$id]["right"];
								$final[$i][$j]["left"] = $collection[$id]["bottom"];
								break;
						}
						
						//echo "<p>" . $i . ", " . $j . ": Escolhido " . $final[$i][$j]["code"] . " com o lado " . $up[$i][$j] . " para cima, que é o " . $final[$i][$j]["top"] . ".</p>";
						
						$collection[$id]["chosen"] = "Y";
						$oid = search_opposite($collection[$id]["code"], $collection);
						$collection[$oid]["chosen"] = "Y";
						//echo "encontrado " . $collection[$id]["code"] . " e marcado o verso " . $collection[$oid]["code"];
					}
				}
				// if not first line, but first column, only search for matches with the bottom side of the upper tile 
				elseif ($j == 0) {				
					for ($id = 0; $id < $collection_size; $id++){
						// Compares with all sides of the candidate tile until find one match
						if ((($final[$i - 1][$j]["bottom"] == strrev($collection[$id]["top"])) or
							($final[$i - 1][$j]["bottom"] == strrev($collection[$id]["right"])) or
							($final[$i - 1][$j]["bottom"] == strrev($collection[$id]["bottom"])) or
							($final[$i - 1][$j]["bottom"] == strrev($collection[$id]["left"]))) and
							($collection[$id]["chosen"] == "N")) {
							
							//echo $collection[$id]["code"] . " " . $m . " "; 
							
							// Stores the index of the matching tile
							$matches[$m] = $id;
							$m++;
						}					
					}
					
					// skip iterations if no matches were found
					if (count($matches) == 0) {
						//echo "<p>Nenhuma combinação encontrada para essa posição.</p>"; 
						$skip = true;
						break 2;
					}
					else {
						
						// keeps track of total tiles found
						$found++;

						// randomly draws one
						$id = $matches[rand(0, count($matches) - 1)];
						$final[$i][$j]["code"] = $collection[$id]["code"];
						$final[$i][$j]["ocode"] = $collection[$id]["ocode"];
						
						// Identify the possible orientations of the tile (top side) and randomly draws one
						$m = 0;
						if ($final[$i - 1][$j]["bottom"] == strrev($collection[$id]["top"])) { $top[$m] = "top"; $m++; }
						if ($final[$i - 1][$j]["bottom"] == strrev($collection[$id]["right"])) { $top[$m] = "right"; $m++; }
						if ($final[$i - 1][$j]["bottom"] == strrev($collection[$id]["bottom"])) { $top[$m] = "bottom"; $m++; }
						if ($final[$i - 1][$j]["bottom"] == strrev($collection[$id]["left"])) { $top[$m] = "left"; $m++; }
						
						$turn = rand(0, $m - 1);
						//echo "<P>" . $collection[$id]["code"] . ": turn " . $turn . " de " . $m . " chances.</P>";
						switch ($top[$turn]) {
							// top remains top	
							case "top":
								$up[$i][$j] = "top";
								//echo "<p> top remains top </p>";
								$final[$i][$j]["top"] = $collection[$id]["top"];
								$final[$i][$j]["right"] = $collection[$id]["right"];
								$final[$i][$j]["bottom"] = $collection[$id]["bottom"];
								$final[$i][$j]["left"] = $collection[$id]["left"];
								break;
							// right became top
							case "right":
								$up[$i][$j] = "right";
								//echo "<p> right became top </p>";
								$final[$i][$j]["top"] = $collection[$id]["right"];
								$final[$i][$j]["right"] = $collection[$id]["bottom"];
								$final[$i][$j]["bottom"] = $collection[$id]["left"];
								$final[$i][$j]["left"] = $collection[$id]["top"];
								break;
							// bottom became top	
							case "bottom":
								$up[$i][$j] = "bottom";
								//echo "<p> bottom became top </p>";
								$final[$i][$j]["top"] = $collection[$id]["bottom"];
								$final[$i][$j]["right"] = $collection[$id]["left"];
								$final[$i][$j]["bottom"] = $collection[$id]["top"];
								$final[$i][$j]["left"] = $collection[$id]["right"];
								break;
							// left became top
							case "left":
								$up[$i][$j] = "left";
								//echo "<p> left became top </p>";
								$final[$i][$j]["top"] = $collection[$id]["left"];
								$final[$i][$j]["right"] = $collection[$id]["top"];
								$final[$i][$j]["bottom"] = $collection[$id]["right"];
								$final[$i][$j]["left"] = $collection[$id]["bottom"];
								break;
						}
						
						//echo "<p>" . $i . ", " . $j . ": Escolhido " . $final[$i][$j]["code"] . " com o lado " . $up[$i][$j] . " para cima, que é o " . $final[$i][$j]["top"] . ".</p>";
						
						$collection[$id]["chosen"] = "Y";
						$oid = search_opposite($collection[$id]["code"], $collection);
						$collection[$oid]["chosen"] = "Y";
						//echo "encontrado " . $collection[$id]["code"] . " e marcado o verso " . $collection[$oid]["code"];
					}
				}
				// if not first line, neither first column, search for matches with
				// the bottom side of the upper tile and right side of the previous tile 
				else {
					for ($id = 0; $id < $collection_size; $id++){
						// Compares with all sides of the candidate tile until find one match
						if (((($final[$i][$j - 1]["right"] == strrev($collection[$id]["top"])) and ($final[$i - 1][$j]["bottom"] == strrev($collection[$id]["right"]))) or
							(($final[$i][$j - 1]["right"] == strrev($collection[$id]["right"])) and ($final[$i - 1][$j]["bottom"] == strrev($collection[$id]["bottom"]))) or
							(($final[$i][$j - 1]["right"] == strrev($collection[$id]["bottom"])) and ($final[$i - 1][$j]["bottom"] == strrev($collection[$id]["left"]))) or
							(($final[$i][$j - 1]["right"] == strrev($collection[$id]["left"]))and ($final[$i - 1][$j]["bottom"] == strrev($collection[$id]["top"])))) and
							($collection[$id]["chosen"] == "N")) {
							
							//echo $collection[$id]["code"] . " " . $m . " ";  
							
							// Stores the index of the matching tile
							$matches[$m] = $id;
							$m++;
						}	
					}

					// skip iterations if no matches were found
					if (count($matches) == 0) {
						//echo "<p>Nenhuma combinação encontrada para essa posição.</p>";
						$skip = true;
						break 2;
					}
					else {
						
						// keeps track of total tiles found
						$found++;

						// randomly draws one
						$id = $matches[rand(0, count($matches) - 1)];
						$final[$i][$j]["code"] = $collection[$id]["code"];
						$final[$i][$j]["ocode"] = $collection[$id]["ocode"];
						
						// Identify the possible orientations of the tile (top side) and randomly draws one
						$m = 0;
						if (($final[$i - 1][$j]["bottom"] == strrev($collection[$id]["top"])) and
							($final[$i][$j - 1]["right"] == strrev($collection[$id]["left"]))) { $top[$m] = "top"; $m++; }
							
						if (($final[$i - 1][$j]["bottom"] == strrev($collection[$id]["right"])) and
							($final[$i][$j - 1]["right"] == strrev($collection[$id]["top"]))) { $top[$m] = "right"; $m++; }
						
						if (($final[$i - 1][$j]["bottom"] == strrev($collection[$id]["bottom"])) and 
							($final[$i][$j - 1]["right"] == strrev($collection[$id]["right"]))) { $top[$m] = "bottom"; $m++; }
						
						if (($final[$i - 1][$j]["bottom"] == strrev($collection[$id]["left"])) and
							($final[$i][$j - 1]["right"] == strrev($collection[$id]["bottom"]))) { $top[$m] = "left"; $m++; }
						
						$turn = rand(0, $m - 1);
						//echo "<P>" . $collection[$id]["code"] . ": turn " . $turn . " de " . $m . " chances.</P>";
						switch ($top[$turn]) {
							// top remains top	
							case "top":
								$up[$i][$j] = "top";
								//echo "<p> top remains top </p>";
								$final[$i][$j]["top"] = $collection[$id]["top"];
								$final[$i][$j]["right"] = $collection[$id]["right"];
								$final[$i][$j]["bottom"] = $collection[$id]["bottom"];
								$final[$i][$j]["left"] = $collection[$id]["left"];
								break;
							// right became top
							case "right":
								$up[$i][$j] = "right";
								//echo "<p> right became top </p>";
								$final[$i][$j]["top"] = $collection[$id]["right"];
								$final[$i][$j]["right"] = $collection[$id]["bottom"];
								$final[$i][$j]["bottom"] = $collection[$id]["left"];
								$final[$i][$j]["left"] = $collection[$id]["top"];
								break;
							// bottom became top	
							case "bottom":
								$up[$i][$j] = "bottom";
								//echo "<p> bottom became top </p>";
								$final[$i][$j]["top"] = $collection[$id]["bottom"];
								$final[$i][$j]["right"] = $collection[$id]["left"];
								$final[$i][$j]["bottom"] = $collection[$id]["top"];
								$final[$i][$j]["left"] = $collection[$id]["right"];
								break;
							// left became top
							case "left":
								$up[$i][$j] = "left";
								//echo "<p> left became top </p>";
								$final[$i][$j]["top"] = $collection[$id]["left"];
								$final[$i][$j]["right"] = $collection[$id]["top"];
								$final[$i][$j]["bottom"] = $collection[$id]["right"];
								$final[$i][$j]["left"] = $collection[$id]["bottom"];
								break;
						}

						//echo "<p>" . $i . ", " . $j . ": Escolhido " . $final[$i][$j]["code"] . " com o lado " . $up[$i][$j] . " para cima, que é o " . $final[$i][$j]["top"] . ".</p>";
						
						$collection[$id]["chosen"] = "Y";
						$oid = search_opposite($collection[$id]["code"], $collection);
						$collection[$oid]["chosen"] = "Y";
						//echo "encontrado " . $collection[$id]["code"] . " e marcado o verso " . $collection[$oid]["code"];
					}
				}
				
				// echo $i . ", " . $j . ": " . $up[$i][$j]." ";
							
				// clear control variables and arrays
				$m = 0;
				unset($matches);
				unset($top);			
			}
		}
		
		//echo "<p> Encontrados " . $found . " tiles que se encaixam de " . $t . " que precisamos. </p><hr>";
		
		if ($found == $t) {
			$skip = false;
		}
		else {
			unset($final);
			for($id = 0; $id < $collection_size - 1; $id++){
				$collection[$id]["chosen"] = "N";	
			}
			$fail++;
			// just because i like this number, after 7 attempts, alerts the user about no combinations found
			// and resets the tool to its standard configurations
			//if ($fail == 7) {
			//	// reset fail count
			//	$fail = 0;
			//	// reset map size
			//	$y = 3; $x = 3; $t = $y * $x;
			//	// reset sets chosen
			//	$selection = array("S1", "S2", "TC", "S3", "AN");
			//	load_collection();
			//	// Discovers tile collection size
			//	$collection_size = count($collection);
			//	$erro["sets"] = "<p class='error'>Demoramos demais para encontrar uma combinação válida... escolha seus parâmetros novamente.</p>";
			//	break;
			//}
		}
		
	} while ($skip == true);

?>