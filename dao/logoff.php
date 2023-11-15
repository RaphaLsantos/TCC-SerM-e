<?php 
session_start();

// Destroi a sessão do usuário
session_destroy();

// Redireciona o usuário para a página de login
header('Location: ../index.php');
exit;
?>