<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of rechthoek
 *
 * @author jurgen
 */

function __autoload($class_name) {
    include $class_name . '.class.php';
}

$test = new Rechthoek();
$test->setBreedte(10);
$test->setLengte(5);
echo $test->omtrek();

$test2 = new Rechthoek();
echo "<br />" . $test2->omtrek() ;
?>
