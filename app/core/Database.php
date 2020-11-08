<?php

namespace app\core;
use \PDO;
use \PDOException;
/**
 * Classe responsável pela conexao
 * com o banco de dados
 *
 * @author Elton Marques
 */
class Database {
    
    protected $connection;
    
    public function __construct() {
        $this->setConnection();
    }


    public function setConnection(){
        
        try{
            $this->connection = PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
           return $ex->getMessage();
        }        
    }
    
}
