<?php

class Car
{
    public $namaCar; // Civic
    public $typeCar; // sport
    public $colorCar;

    public function __construct($namaCAr, $typeCar, $colorCar)
    {
        $this->namaCar = $namaCAr;
        $this->typeCar = $typeCar;
        $this->colorCar = $colorCar;
    }

    public function detailcar()
    {
        echo "mobil saat ini adalah" . $this->namaCar . 
        "tipe mobilnya" . $this->typeCar . 
        "warna mobilnya adalah" . $this->colorCar;
    }
}

$car = new car("civic turbo", "sports", "greentea");
$car->detailcar();