<?php
   $nome = "João";
   $idade = 62;
   $altura = 1.75;
   $status = true;

   //exibir valores na tela 
   echo "O nome é: $nome"; //primeira forma 
   echo "<br>";
   echo "O nome é: " . $idade; 
   echo "<br>";
   echo $nome;

   //VERIFICAR TIPO E VALOR DE UMA VÁRIAVEL
   var_dump($altura);
   echo "<br>";
   print_r($altura);
   echo "<br>";

   //CURIOSIDADE DO PHP A RESPEITO DE VALORES BOOLEANOS
   echo "O status é: $status";

?>