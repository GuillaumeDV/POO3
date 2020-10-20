<?php

/**
 * classe mère non appelable
 */
abstract class HighWay{


    /**
     * @var array
     */
    protected $currentVehicles;


    /**
     * @var int
     */
    protected $nbLane;

    
    /**
     * @var int
     */
    protected $maxSpeed;


    /**
     * @return array
     */
    public function getCurrentVehicules(): array{

        return $this->currentVehicules;
    
    }

    /**
     * @return int
     */
    public function getNbLane(): int{

        return $this->nbLane;
    
    }

    /**
     * @return int
     */
    public function getMaxSpeed(): int{

        return $this->maxSpeed;
    
    }
    

    /**
     * @return void
     */
    public function setCurrentVehicules(): void{

        $this->currentVehicules = $currentVehicules;
    
    }

    /**
     * @return void
     */
    public function setNbLane(): void{

        $this->nbLane = $nbLane;
    
    }

    /**
     * @return void
     */
    public function setMaxSpeed(): void{

        $this->maxSpeed = $maxSpeed;
    
    }


    /**
     * @return void initialise une fonction pour les classes enfants
     */
    abstract public function  addVehicule(object $vehicule);






}