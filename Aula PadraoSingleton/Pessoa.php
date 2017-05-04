<?php
class xxxx
{
    
   		private $nome;
		private $idade;
		
		public static function getInstance(){
			static $instance = null;
			if ($instance === null) {
				$instance = new Pessoa();
			}
			return $instance;	
		}
		private function __construct(){
		}
    
    
    
    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

        
}

$cara = Pessoa::getInstance();

$cara->setNome('junior');
$cara2 = Pessoa::getInstance();
$cara2->setIdade('91');

echo "Nome cara : ".$cara->getNome().'<br/>'.'Idade cara2: '.$cara2->getIdade();

?>


