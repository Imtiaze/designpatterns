<?php  

namespace App\DesignPattern\LSP;

class RoseGarden extends EmptyGarden
{
    public function items(): array 
    {
        $numberOfPlots = $this->plot->totalNumberOfPlots();
        return array_fill(0, $numberOfPlots, 'Rose');
    }
}