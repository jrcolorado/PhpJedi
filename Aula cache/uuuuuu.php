<?php

class Cache {

    private $cache;

    public function setVar($nome, $valor) {
        $this->readCache();
        $this->cache->$nome = $valor;
        $this->saveCache();
    }

    public function getValor($nome) {
        $this->readCache();
        return $this->cache->$nome;
    }

    private function readCache() {
        $this->cache = new stdClass();
        if (file_exists('cache.cache')) {
            $this->cache = json_decode(file_get_contents('cache.cache'));
        }
    }
    
    private function saveCache(){
        file_put_contents("cache.cache", json_encode($this->cache));
    }
    
   
    
}

 $cache = new Cache();
#$cache->setVar("nome", "Joao Romario");

$cache->setVar("time", "internacional");

#echo "meu é nome: ".$cache->getValor("nome")." e minha idade é: ".$cache->getValor("idade");







    

