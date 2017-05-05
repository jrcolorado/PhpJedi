<a href="Home.html">Aqui um link para a pagina Home</a>

<?php

interface VideoServiceInterface{
    public function getEMBED();
}

class Youtube implements VideoServiceInterface{
    private $url;
    public function __construct($url) {
        $this->url=$url;
    }
    public function getEMBED(){
        return '<iframe>'.$this->url.'</iframe>';        
    }
}


class Vimeo implements VideoServiceInterface{
    private $url;
    public function __construct($url) {
        $this->url=$url;
    }
    public function getEMBED(){
        return '<video>'.$this->url.'</video>';        
    }
}


class Wistia implements VideoServiceInterface{
    private $url;
    public function __construct($url) {
        $this->url=$url;
    }
    public function getEMBED(){
        return '<coisa>'.$this->url.'</coisa>';        
    }
}
class Aula{
    
    private $video;
    
    public function __construct(VideoServiceInterface $video) {
        $this->video =$video;
        }
    public function getVideoHtml(){
        return $this->video->getEMBED();
    }
        
    }
   /*
    $video = new Youtube('https://youtu.be/1HaUtdwUprE');
    $aula = new Aula($video);
    
    echo "video : ".$aula->getVideoHtml();
    * */
   
   
