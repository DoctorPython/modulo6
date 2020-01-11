<?php

session_start();
 //$_SESSION['nome'] = 'logado' ;

setcookie('nome','bruno',time()-(60*60*24),'/');
echo $_COOKIE['nome'];
?>