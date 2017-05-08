<?php
class Database{
    protected $db;
    public function __construct() {
        try {
            $this->db= new PDO("mysql:dbmane=usuario,host=localhost", "root", "475236");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
   }
}

class UsuarioDAO extends Database{
        public function __construct(){
            parent::__construct();
        }
        public function get($fields = array(), $where = array()){
            $usuarios = array();
            $valores = array();
            
            if(count($fields)==0){
                $fields= array('*');
            }
            $sql = "SELECT ".implode(',', $fields)."FROM usuario.usuarios";
            
            if(count($where)>0){
                $tabelas = array_keys($where);
                $valores = array_values($where);
                $comp = array();
                
                foreach ($tabelas as $tabela){
                    $comp[]= $tabela." = ?";
                }
                $sql .= implode(" AND ", $comp);
           }
           $sql = $this->db->prepare($sql);
           $sql->execute($valores);
           
           if($sql->rowCount()> 0){
               foreach ($sql->fetchAll() as $item){
                   $usuarios[] = new Usuario($item);
               }
               
           }
           
            return $usuarios;
        }
}

class usuario{
    private $nome;
    private $email;
    private $senha;
    Private $id;
    
    public function __construct($array) {
        $this->nome = (isset($array['nome']))?$array['nome']:'';
        $this->email = (isset($array['email']))?$array['email']:'';
        $this->senha = (isset($array['senha']))?$array['senha']:'';
        $this->id = (isset($array['id']))?$array['id']:'';
    }
    public function getName(){return $this->nome;}
    public function getEmail(){return $this->email;}
    public function getId(){return $this->id;}
    
    
}