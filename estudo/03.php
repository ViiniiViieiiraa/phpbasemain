<?php

session_start();

//unset($_SESSION['nome']); // deleta somente uma variavel

session_unset();  // deletar todas as variaveis

echo "Session nome delete.";

?>
