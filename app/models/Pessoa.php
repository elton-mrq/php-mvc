<?php
namespace app\models;
use app\core\Database;
use \PDO;
/**
 * Description of Pessoa
 *
 * @author Elton Marques
 */
class Pessoa extends Database{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function listarPessoas(){
        $sql = "SELECT * FROM pessoa";
        $qry = $this->connection->query($sql);
        return $qry->fetchAll(PDO::FETCH_OBJ);
    }
}
