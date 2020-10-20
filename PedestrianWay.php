<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay{
    
    /**
     * @param int $nbLane
     * @param int $maxSpeed
     */
    public function __construct(int $nbLane,int $maxSpeed){

        $this->nbLane = 1;
        $this->maxSpeed = 10;
    
        }

        public function  addVehicule(object $vehicule){
            if(($vehicule instanceof Bicycle) || ($vehicule instanceof Skateboard)){
                array_push($currentVehicles, $vehicule);
            }
        }
    


}