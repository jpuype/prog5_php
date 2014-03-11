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
class Rechthoek {
    //put your code here
    private $breedte;
    private $lengte;
    
    function __construct() {
        $this->fullConstructor(12,12);
    }
    
    public function fullConstructor($breedte, $lengte){
        $this->setBreedte($breedte);
        $this->setLengte($lengte);
    }
    
    public function setBreedte($myBreedte){
        if ($myBreedte > 0)
            $this->breedte = $myBreedte;
    }
    
    public function setLengte($myLengte){
        if ($myLengte > 0)
            $this->lengte = $myLengte;        
    }
    
    public function getLengte() {
        return $this->lengte;
    }
    
    public function getBreedte() {
        return $this->breedte;
    }
    
    public function omtrek() {
        return ($this->getLengte() + $this->getBreedte()) * 2;
    }
}
?>
