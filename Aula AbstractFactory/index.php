<?php
abstract class Video{
    abstract public function render();
}

abstract class AbstractFactory{
    abstract public function CreatePlayer($url);
}

class HtmlFactory extends AbstractFactory{
    public function CreatePlayer($url){
        return new HtmlPlayer($url);
    }
}

class HtmlPlayer extends Video{
    private $url;
        public function __construct($url){
            $this->url=$url;
        }
    
    public function render() {
                echo '<video>'.$this->url.'</video>';
    }
}

class FlashFactory extends AbstractFactory{
    public function CreatePlayer($url){
        return new FlashPlayer($url);
    }
}
class FlashPlayer extends Video{
    private $url;
        public function __construct($url){
            $this->url=$url;
        }
    
    public function render() {
                echo '<objet>'.$this->url.'</objet>';
    }
}


#$fac = new HtmlFactory();
$fac = new FlashFactory();
$player=$fac->CreatePlayer('123333');
$player->render();


