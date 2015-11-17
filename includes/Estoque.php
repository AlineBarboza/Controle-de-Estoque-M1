<?php
if(file_exists("Global.php")) {
include_once './Global.php';
}else if(file_exists("includes/Global.php")) {
    include_once './includes/Global.php';
}

function salvar() {
    if(
            isset($_Post['name']) and 
            isset($_Post['valor']) and 
            isset($_Post['qtd'])
           ) {
    $nome = $_POST['name'];
    $valor = $_POST['valor'];
    $qtd = $_POST['qtd'];
         $SQL
           }
    }