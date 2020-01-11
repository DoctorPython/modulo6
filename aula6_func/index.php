<?php

$conteudo = 'bruno conti martins gomes tamo ai na atividade assim eu sou,assim eu vou';

//server para recortar uma strint
echo substr($conteudo,0,10);
echo "</br>";


$nome = 'bruno conti martins gomes';
$nomes = explode(' ', $nome);
print_r($nomes);
*/

//serve para retirar todo o codigo html
$conteudo = '<h1>bruno</h1> martins gomes';


echo strip_tags($conteudo);

?>