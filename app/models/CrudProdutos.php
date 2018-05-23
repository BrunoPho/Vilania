<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 16/11/2017
 * Time: 10:56
 */

require_once "Conexao.php";
require_once "Produto.php";

class CrudProdutos {

    private $conexao;
    private $produto;

    public function __construct() {
        $this->conexao = Conexao::getConexao();
    }

    public function salvar(Produto $produto){
        $sql = "INSERT INTO tb_produtos (nome, preco, categoria) VALUES ('$produto->nome', $produto->preco, '$produto->categoria')";
        $this->conexao->exec($sql);
    }
    public function getProduto(int $codigo){
        $consulta = $this->conexao->query("SELECT * FROM tb_produtos WHERE codigo = $codigo");
        $produto = $consulta->fetch(PDO::FETCH_ASSOC); //SEMELHANTES JSON ENCODE E DECODE
        return new Produto($produto['nome'], $produto['preco'], $produto['categoria'], $produto['codigo']);
    }
    public function getProdutos(){
        $consulta = $this->conexao->query("SELECT * FROM tb_produtos");
        $arrayProdutos = $consulta->fetchAll(PDO::FETCH_ASSOC);
        //Fabrica de Produtos
        $listaProdutos = [];

        foreach ($arrayProdutos as $produto){
            $listaProdutos[] = new Produto($produto['nome'], $produto['preco'], $produto['categoria'],$produto['quantidade_estoque'], $produto['codigo']);
        }
        return $listaProdutos;
    }

    public function excluirProduto(int $x){

        $this->conexao->exec("delete from tb_produtos where codigo = $x");

    }

}

