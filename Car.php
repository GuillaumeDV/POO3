<?php

require_once 'Vehicule.php';

class Car extends Vehicule{

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var string soit fuel soit electric
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @param string $color
     * @param int $nbSeats
     * @param string $energy
     */
    public function __construct(string $color, int $nbSeats, string $energy){

        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        

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
     * @return Car
     */
    public function setEnergy(string $energy): Car{

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


}