<?php

final class staticfactory{
    public static function make($type){
        if($type == 'number'){
            return new FormatNumber();
        }
        if($type == 'string'){
            return new FormatNumber();
        }
    }
}

interface FormatterInterface{
    public function format($n);
}

class FormatNumber implements FormatterInterface{
    public function format($n) {
        echo 'Formatando numero: '.$n;
    }
}

class FormatString implements FormatterInterface{
    public function format($n) {
        echo 'Formatando String: '.$n;
    }
}

$formatter = staticfactory::make('string');
$formatter->format('testando 1.2.3.......');

