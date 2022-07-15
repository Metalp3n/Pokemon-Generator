<?php

	//PokeAPI Implementation
	$pokeAPIurl = 'https://pokeapi.co/api/v2/pokemon/?limit=20';
	$pokeAPIjson = file_get_contents($url);
	$pokeAPI = json_decode($json);
	//print_r($pokeAPI);

	foreach ($pokeAPI as $id => $pokemon) {
		// code...
		foreach ($$pokemon as $key => $value) {
			// code...
			echo $key." : ".$value.n";
		}
	}



    $name = Array("Charmander", "Pikachu", "Seal", "Bulbasaur");
    $pName = $name[rand(0, count($name) - 1)];
	global $key;
	$key = array_search($pName, $name); 
	echo $pName;

?>