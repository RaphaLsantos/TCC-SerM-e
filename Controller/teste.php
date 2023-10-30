<?php 

$palavras = array("Amor", "Bênção", "Esperança", "Milagre", "Alegria", "Vida", "Nascimento", "Cuidado", "Laço", "Sorriso");
$apelido = "@".$palavras[array_rand($palavras)] . uniqid();

echo $apelido;
