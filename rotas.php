<?php
$roteador->get('PetTop','controllers/index.php');
$roteador->get('PetTop/Produtos','controllers/crudProduto/listProduto.php');
$roteador->get('PetTop/apagarProduto','models/crudProduto/apagarProduto.php');
?>