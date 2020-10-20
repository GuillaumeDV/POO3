<?php

require_once 'Vehicule.php';


class Truck extends Vehicule {


    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var string 
     */
    private $energy;

    /**
     * @var int 
     */
    private $energyLevel;

    /**
     * @var int
     */
    private $stockCapacity;

    /**
     * @var int
     */
    public $loading;
    

    /**
     * @param string $color
     * @param int $nbSeats
     * @param string $energy
     * @param int $stockCapacity
     */
    public function __construct(string $color, int $nbSeats, string $energy, int $stockCapacity){

        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setStockCapacity($stockCapacity);
        

    }

    /**
     * @return string
     */
    public function getEnergy(): string{
        return $this->energy;
    }

    /**
     * @param string $energy
     * 
     * @return Truck
     */
    public function setEnergy(string $energy): Truck{

        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }

        return $this;

    }

    /**
     * @return int
     */
    public function getEnergyLevel(): int{
        return $this->energyLevel;
    }

    /**
     * @param int $energyLevel
     * 
     * @return void
     */
    public function setEnergyLevel(int $energyLevel): void{
        if($energyLevel >= 0){
            $this->energyLevel = $energyLevel;
        }
    }

    /**
     * @return int
     */
    public function getStockCapacity(): int{
        return $this->stockCapacity;
    }

    /**
     * @param int $stockCapacity
     * 
     * @return void
     */
    public function setStockCapacity(int $stockCapacity): void{
        if($stockCapacity >= 0){
            $this->stockCapacity = $stockCapacity;
        }
        
    }

    /**
     * @return int
     */
    public function getLoading(): int{
        return $this->loading;
    }

    /**
     * @param int $loading
     * 
     * @return void
     */
    public function setLoading(int $loading): void{
        if($loading >= 0){
            $this->loading = $loading;
        }
    }

    /**
     * @return string permet de vérifier si le camion est plein ou non
     */
    public function isFull(){
        if($this->loading < $this->stockCapacity){
            return 'in filling';
        }else{
            return 'Truck is full';
        }
    }


}