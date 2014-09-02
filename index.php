<?php

require 'core/init.php'; //Autoloading

$car = new Car(new Correct, new Fuel);

$car->go();
echo '<br />';
$car->stop();