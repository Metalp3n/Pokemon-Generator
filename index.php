<?php
require pokemonClass.php;
	
$objPokemon = new pokemon;
echo "You Pulled A <b>" . $objPokemon->chooseName() . "</b><br/>";
echo "Nickname: <b>" . $objPokemon->displayNickname('Firey') . "</b><br/>";
echo "Type: <b>" . $objPokemon->chooseType(2) . "</b><br/>";
echo "HP: <b>" . $objPokemon->getRandomNumber(80, 180) . "</b><br/>";
echo "Attack: <b>" . $objPokemon->getRandomNumber(40, 95) . "</b><br/>";
?>