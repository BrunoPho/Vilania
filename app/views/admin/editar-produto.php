<?php
## !!ADICIONE O CABECALHO E O RODAPE PARA A PAGINA
require_once "cabecalho.php";
require_once "../../models/CrudProdutos.php";
  $crud = new CrudProdutos();
  //$produto = $crud->getProduto($_GET['codigo']);
  //$crud->getProdutos(codigo:3);
?>

<h2>Editar Produtos</h2>
<form action="" method="post">
    <div class="form-group">
        <label for="produto">Produto:</label>
        <input name="titulo" type="text" class="form-control" id="produto" aria-describedby="nome produto" placeholder="">
    </div>

    <div class="form-group">
        <label for="preco">Preco</label>
        <input name="preco" type="number" step="0.01" class="form-control" id="preco" placeholder="">
    </div>

    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input name="quantidade" type="number" class="form-control" id="quantidade" placeholder="">
    </div>

    <div class="form-group">
        <label for="Categoria">Categoria</label>
        <select name="categoria" class="form-control" id="Categoria">
            <option>Fruta</option>
            <option>Legume</option>
            <option>Hortaliça</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>

</form>
<?php

    require_once "rodape.php";

?>