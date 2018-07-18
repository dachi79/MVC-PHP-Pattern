<?php
require "config.php";

$model = new Model();
$controler = new Controller($model);
$pogled = new View($controler);
echo $pogled->show();








