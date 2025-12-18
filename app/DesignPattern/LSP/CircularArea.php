<?php 

namespace App\DesignPattern\LSP;

class CircularArea implements PlotArea
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;        
    }

    public function totalNumberOfPlots(): int
    {
        $area = pi() * ($this->radius ** 2);
        return ceil($area / 10);
    }
}