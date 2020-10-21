<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay{


    /**
     * @param int $nbLane
     * @param int $maxSpeed
     */
    public function __construct(){

        $this->nbLane = 4;
        $this->maxSpeed = 130;
    
    }

    /**
     * @param object $vehicule
     * 
     * @return void
     */
    public function  addVehicule(object $vehicule){
        $currentVehicles = [];
        if($vehicule instanceof Car){
            $this->currentVehicules[] = array_push($currentVehicles, $vehicule);
        }
    }
    
}