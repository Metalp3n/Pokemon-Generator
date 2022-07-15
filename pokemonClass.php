<?php
class pokemon
{
	var $nickName;

function chooseName() //Randomly chooses the Pokemon
{
    //PokeAPI Implementation
	$pokeAPIurl = 'https://pokeapi.co/api/v2/pokemon/?limit=500';
	$pokeAPIjson = file_get_contents($url);
	$pokeAPI = json_decode($json);
	print_r($pokeAPI);

    $name = Array("Charmander", "Pikachu", "Seal", "Bulbasaur");
    $pName = $name[rand(0, count($name) - 1)];
	global $key;
	$key = array_search($pName, $name); 
	return $pName;
	
}
	
function displayNickname() //Displays the nickname passed to the function
{
<<<<<<< HEAD
	return $this->nickName;		
=======
	return $this->nickName;	
>>>>>>> origin/master
}
	
function chooseType() // Selects the Pokemon type based on the key set in the chooseName() function above
{
	global $key;
	$types = Array("Fire", "Electric", "Water", "Leaf");
	$t = $types[$key];
	return $t;
}
	
function getRandomNumber($min, $max) // Selects a random number based on a minimum and maximum range
{
    $values = range($min, $max);
    shuffle($values);
	$k = array_rand($values);
	$a = $values[$k];
	return $a;
}
	
}
?>
