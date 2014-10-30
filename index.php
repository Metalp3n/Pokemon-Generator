<?php
class pokemon
{
	var $nickName;
	var $key;

function chooseName() //Randomly chooses the Pokemon
{
    $name = Array("Charmander", "Pikachu", "Seal", "Bulbasaur");
    $pName = $name[rand(0, count($name) - 1)];
	global $key;
	$key = array_search($pName, $name); 
	return $pName;
	
}
	
function displayNickname($customnickName) //Displays the nickname passed to the function
{
	$nickName = $customnickName;
	return $nickName;	
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
	
$objPokemon = new pokemon;
echo "You Pulled A <b>" . $objPokemon->chooseName() . "</b><br/>";
echo "Nickname: <b>" . $objPokemon->displayNickname('Firey') . "</b><br/>";
echo "Type: <b>" . $objPokemon->chooseType(2) . "</b><br/>";
echo "HP: <b>" . $objPokemon->getRandomNumber(80, 180) . "</b><br/>";
echo "Attack: <b>" . $objPokemon->getRandomNumber(40, 95) . "</b><br/>";
?>