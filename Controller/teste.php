<?php 

$palavras = array("MomLife", "MommyWarrior", "MommaMagic", "MamaVibe", "MomStrong", "TenderHeart");
$apelido = "@".$palavras[array_rand($palavras)] . rand(10, 100);

echo $apelido;
