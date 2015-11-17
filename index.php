<?php
include './includes/Global.php';
$title ="Controle De Estoque";
include './template/header.php';

?>

<form methord="post">
    <div class="center">
        Nome: <input type="text" nome="nome" />
        Valor: <input type="text" nome="valor" />
        Quantidade: <input type="text" nome="qtd" />
        Data de Validade: <input type="text" nome="dtval" />
        <input type="submit" nome="Cadastrar" />
    </div>
</form>

 <?php 
include './template/footer.php';
?>
