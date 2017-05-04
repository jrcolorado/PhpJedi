<?php

require 'Classes.php';

$luz = new Luz();
$c = new LuzOnCommand($luz);
callCommand($c);
echo "Luz: ".$luz->getStatus();