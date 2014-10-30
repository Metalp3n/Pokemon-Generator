<?php
require 'pokemonClass.php';

if (!empty($_POST))
{
$objPokemon = new pokemon;
$nickName = $_POST['nickname'];
echo "You Pulled A <b>" . $objPokemon->chooseName() . "</b><br/>";
echo "Nickname: <b>" . $objPokemon->displayNickname($nickName) . "</b><br/>";
echo "Type: <b>" . $objPokemon->chooseType(2) . "</b><br/>";
echo "HP: <b>" . $objPokemon->getRandomNumber(80, 180) . "</b><br/>";
echo "Attack: <b>" . $objPokemon->getRandomNumber(40, 95) . "</b><br/>";
} else {
	echo '<center><form method="post">Pokemon Nickname: <input type="text" name="nickname"><br/><input type="submit"></form></center>';
}
	

?>