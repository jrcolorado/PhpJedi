<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


interface APIDesenho{
    public function desenharCirculo($x,$y,$radios);
}


class APIDesenho1 implements APIDesenho{
    public function desenharCirculo($x, $y, $radios) {
        echo "Desenhando Circulo, v1: ".$x." - ".$y." - ".$radios;
    }
}


class APIDesenho2 implements APIDesenho{
    public function desenharCirculo($x, $y, $radios) {
        echo "Desenhando Circulo, v2: ".$x." - ".$y." - ".$radios;
    }
}
abstract class Forma{

    protected $api;
    protected $x;
    protected $y;
    public function __construct(APIDesenho $api) {
        $this->api=$api;
    }
            
}

class circulo extends Forma{
    protected $radio;
    public function __construct($x,$y,$radio, APIDesenho $api) {
        parent::__construct($api);
        $this->x=$x;
        $this->y=$y;
        $this->radio=$radio;
        
    }
    public function desenhar(){
        $this->api->desenharCirculo($this->x, $this->y, $this->radio);
    }
}



$circulo= new circulo(1, 3, 7, new APIDesenho2());
$circulo->desenhar();
