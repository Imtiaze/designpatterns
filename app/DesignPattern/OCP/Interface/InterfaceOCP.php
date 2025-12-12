<?php

namespace App\DesignPattern\OCP;

// Step 1: Define a Garden interface
interface GardenInterface
{
    public function items(): array;
}

// Step 2: Base EmptyGarden implementing the interface
class EmptyGarden implements GardenInterface
{
    protected $width;
    protected $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function items(): array
    {
        $numberOfPlots = ceil($this->height * $this->width);
        return array_fill(0, $numberOfPlots, 'handful of dirt');
    }
}

// Step 3: VegetableGarden implementing the interface (open for extension)
class VegetableGarden implements GardenInterface
{
    private $width;
    private $height;
    private $vegetable;

    public function __construct($width, $height, $vegetable)
    {
        $this->width = $width;
        $this->height = $height;
        $this->vegetable = $vegetable;
    }

    public function items(): array
    {
        $numberOfPlots = ceil($this->width * $this->height);
        return array_fill(0, $numberOfPlots, $this->vegetable);
    }
}

// Step 4: FlowerGarden implementing the interface (another extension)
class FlowerGarden implements GardenInterface
{
    private $width;
    private $height;
    private $flower;

    public function __construct($width, $height, $flower)
    {
        $this->width = $width;
        $this->height = $height;
        $this->flower = $flower;
    }

    public function items(): array
    {
        $numberOfPlots = ceil($this->width * $this->height);
        return array_fill(0, $numberOfPlots, $this->flower);
    }
}

// Step 5: Usage
$gardens = [
    new EmptyGarden(5, 5),
    new VegetableGarden(4, 4, 'carrot'),
    new FlowerGarden(3, 3, 'rose')
];

foreach ($gardens as $garden) {
    var_dump($garden->items());
}


// php .\app\DesignPattern\OCP\Interface\InterfaceOCP.php