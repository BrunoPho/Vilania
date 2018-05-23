<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 09/11/2017
 * Time: 10:40
 */


class Conexao {

    const HOST      = "localhost";
    const NOMEBANCO = "lojao_do_vilao";
    const USUARIO   = "root";
    const SENHA     = "";
    
    //!!!Substitua daqui para baixo
    public static $conexao = null;


    public static function getConexao(){
        
        try{
            if(self::$conexao == null){
                self::$conexao = new PDO("mysql:host=".self::HOST.";dbname=".self::NOMEBANCO, self::USUARIO, self::SENHA);
                self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            
            return self::$conexao;
            
        }catch(PDOException $e){
            die("Falhou a conexao ou ocorreu um erro banco: " . $e->getMessage()); 
        }

        return $conexao;
    }
}

//teste conexao
//$con = new Conexao();
//$con->getConexao();
