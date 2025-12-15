<?php 

namespace App\DesignPattern\LSP;

class RectangleArea implements PlotArea
{
    private int $width;
    private int $height;

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function totalNumberOfPlots(): int
    {
        return (int) ceil($this->width * $this->height / 2);
    }
}