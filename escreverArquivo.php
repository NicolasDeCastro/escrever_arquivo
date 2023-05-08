<?php
/*$arquivo=fopen('novoTeste.txt','w');

$adicionar="novo teste criando um arquivo e adicionando conteudo ";
fwrite($arquivo,$adicionar);*/


/*$arquivo=fopen('novoTeste.txt','a');

$adicionar="\n olha só, adicionando um conteudo em outra linha";
fwrite($arquivo,$adicionar);*/

// FILE APPEND é para ele entender que não para sobreescrever o conteudo e sim adicionar, isto é uma FLAG
$adicionar="\n usando a função facilitadora";
file_put_contents('novoTeste.txt',$adicionar,FILE_APPEND);
