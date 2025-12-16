<?php

namespace App\DesignPattern\OCP\Inheritance;

// Original class (closed for modification)
class EmptyGarden
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

// New class extending functionality (open for extension)
class VegetableGarden extends EmptyGarden
{
    private $vegetable;

    public function __construct($width, $height, $vegetable)
    {
        parent::__construct($width, $height);
        $this->vegetable = $vegetable;
    }

    // Overriding items to plant vegetables instead of dirt
    public function items(): array
    {
        $numberOfPlots = ceil($this->height * $this->width);
        return array_fill(0, $numberOfPlots, $this->vegetable);
    }
}

// New class extending functionality (another example)
class FlowerGarden extends EmptyGarden
{
    private $flower;

    public function __construct($width, $height, $flower)
    {
        parent::__construct($width, $height);
        $this->flower = $flower;
    }

    public function items(): array
    {
        $numberOfPlots = ceil($this->height * $this->width);
        return array_fill(0, $numberOfPlots, $this->flower);
    }
}

// Usage
$vegetableGarden = new VegetableGarden(20, 30, 'carrot');
$flowerGarden = new FlowerGarden(10, 15, 'rose');

var_dump($vegetableGarden->items());
var_dump($flowerGarden->items());
