<?php 

namespace App\DesignPattern\LSP;

class MarijuanaGarden extends EmptyGarden
{
    public function items(): array
    {
        $numberOfPlots = $this->plot->totalNumberOfPlots();
        return array_fill(0, $numberOfPlots, 'weed');
    }
}

