<?php
/*


$array1 = array("chave1" => "valor1:","chave2"=>"valor2:","chave3"=> "valor3:");
$array2 = array("chave4" => "valor4:","chave5"=>"valor5:","chave6"=> "valor6:");
$array3 = array("chave7" => "valor4:","chave8"=>"valor5:","chave9"=> "valor6:");

$result = array_merge($array1, $array2,$array3); essa função serve para unir um ou mais arrays:
print_r($result) ;*/

/*
$array1 = array("chave1" => "valor1:","chave2"=>"valor2:","chave3"=> "valor3:");

$array2 = array("chave4" => "valor4:","chave5"=>"valor5:","chave6"=> "valor6:","chave3"=>"outro valor","chave1"=>"outro valor");
print_r(array_intersect_key($array1, $array2));*/ //server para retornar valores com a mesma chave em um ou mais arrays:

$arr = ['<h1>bruna</h1>','conti','<a>martins</a>','gomes'];
	print_r(array_map('strip_tags', $arr));
	print_r($arr);
?>