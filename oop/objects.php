<?php 

class dealercar
{
    public $namecar;
    public $capacity;

    function buycar()
    {
        echo "Mobil tersedia, silahkan beli";
    }

    function typecar()
    {
        echo "Tersedia pilihan tipe mobil";
    }
}
$buy = new dealercar();
$buy->buycar();
echo "<br>";
$buy->namecar = "Honda Civic 2023";
echo "berhasil membeli " . $buy->namecar;
echo "<br>";
$buy->capacity = 2;
echo "berhasil membeli " . $buy->namecar . 'dengan kapasitas' . $buy->capacity;