<?php 

namespace App\DesignPattern\SRP;

class EmptyGarden
{
    private $width;
    private $height;

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

$plot = new EmptyGarden(20, 30);
var_dump( $plot->items() );