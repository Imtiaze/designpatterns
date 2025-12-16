<?php 

namespace App\DesignPattern\OCP\Inheritance;

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

class Marijuana extends EmptyGarden
{
    public function items(): array 
    {
        return array_fill(0, ceil($this->width * $this->height), 'weed');
    }
}

$plot = new Marijuana(20, 30);
var_dump( $plot->items() );

// php .\app\DesignPattern\OCP\Inheritance\Simple.php