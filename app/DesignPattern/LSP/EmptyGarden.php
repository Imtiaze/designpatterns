<?php 

namespace App\DesignPattern\LSP;

use App\DesignPattern\LSP\PlotArea;

class EmptyGarden
{
    protected PlotArea $plot;

    public function __construct(PlotArea $plot)
    {  
       $this->plot = $plot;
    }

    public function items(): array
    {
        $numberOfPlots = $this->plot->totalNumberOfPlots();
        return array_fill(0, $numberOfPlots, 'handful of dirt');
    }
}

