<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay{

    /**
     * @param int $nbLane
     * @param int $maxSpeed
     */
    public function __construct(int $nbLane,int $maxSpeed){

        $this->nbLane = 2;
        $this->maxSpeed = 50;
    
        }

        public function  addVehicule(object $vehicule){
            
            array_push($currentVehicles, $vehicule);
            
        }
    
    
}