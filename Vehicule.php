<?php

class Vehicule {

    /**
     * @var string
     */
    protected $color; 

    /**
     * @var int
     */
    protected $currentSpeed; 
    
    /**
     * @var int
     */
    protected $nbSeats; 

    /**
     * @var int
     */
    protected $nbWheels; 

    /**
     * @param string $color
     * @param int $nbSeats
     */
    public function __construct(string $color,int $nbSeats){

    $this->color = $color;
    $this->nbSeats = $nbSeats;

    }

    /**
     * @return string
     */
    public function getColor(): string{

        return $this->color;
    
    }

    /**
     * @return void
     */
    public function setColor(): void{

        $this->color = $color;
    
    }

    /**
     * @return int
     */
    public function getCurrentSpeed(): int{

        return $this->currentSpeed;
    
    }

    /**
     * @return void
     */
    public function setCurrentSpeed(): void{

        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    
    }

    /**
     * @return int
     */
    public function getNbSeats(): int{

        return $this->nbSeats;
    
    }

    /**
     * @return void
     */
    public function setNbSeats(): void{

        $this->nbSeats = $nbSeats;
    
    }

    /**
     * @return int
     */
    public function getNbWheels(): int{

        return $this->nbWheels;
    
    }

    /**
     * @return void
     */
    public function setNbWheels(): void{

        $this->nbWheels = $nbWheels;
    
    }


    /**
     * @return string initialise $currentSpeed a 0 et démarre le vélo
     */
    public function forward(){

        $this->currentSpeed = 0;

        return "Go !";

    }

    /**
     * @return string fait augmenter la vitesse 
     */
    public function start(): string{

        $startSentence = "";
            $this->currentSpeed = 0;
            while ($this->currentSpeed < 15) {
                $this->currentSpeed++;
                $startSentence .="Vroum ,";
            }
            $this->currentSpeed = 15;
        return $startSentence;
        }
    

    /**
     * @return string fait s'arreter le vélo
     */
    public function brake(): string{

    $sentence = "";

    while ($this->currentSpeed > 0) {
        $this->currentSpeed--;
        $sentence .= "Brake !!!";
    }

    $sentence .= "I'm stopped !";

    return $sentence;
    }

}