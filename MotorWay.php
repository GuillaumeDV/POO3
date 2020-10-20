<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay{


    /**
     * @param int $nbLane
     * @param int $maxSpeed
     */
    public function __construct(int $nbLane,int $maxSpeed){

        $this->nbLane = 4;
        $this->maxSpeed = 130;
    
        }

        public function  addVehicule(object $vehicule){
            if($vehicule instanceof Car){
                array_push($currentVehicles, $vehicule);
            }
        }
    
}