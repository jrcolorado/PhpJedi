<?php
class Pessoa{
    
    private $nome;
    private $idade;
       
    public function __construct($n, $i){
        $this->nome=$n;
        $this->idade=$i;
        
    }
       
     function getNome() {
        return $this->nome;
    }

     function getIdade() {
        return $this->idade;
    }

     function setNome($n) {
        $this->nome = $n;
    }

    function setIdade($i) {
        $this->idade = $i;
    }

    
}
class PessoaAdapter {
    private $sexo;
    private $pess;
    
     function __construct(Pessoa $pessoa){
     $this->pess = $pessoa;        
    }
     function setSexo($s){
        $this->sexo = $s;
    }
    
     function getSexo() {
        return $this->sexo;
    }
  
     function getNome() {
        return $this->pess->getNome();    }

     function getIdade() {
        return $this->pess->getIdade();
    }
    
    }
   
 $pessoa = new Pessoa("joao","25");
     
    $pa = new PessoaAdapter($pessoa);
    $pa->setSexo("Masculino");
  
    echo "Nome PESSOA...:".$pessoa->getNome()."<br/>";
    echo "Idade PESSOA..:".$pessoa->getIdade()."<br/>";
     echo "Sexo Adapter :".$pa->getSexo()."<br/>";
    echo "Nome Adapter :".$pa->getNome();
            echo "- Idade do Apadpter: ".$pa->getIdade();
   
   
?>
