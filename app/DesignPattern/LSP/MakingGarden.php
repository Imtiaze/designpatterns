<?php

use App\DesignPattern\LSP\EmptyGarden;
use App\DesignPattern\LSP\RectangleArea;

$rectangle = new RectangleArea(10, 20);

$emptyGarden = new EmptyGarden($rectangle);
print_r($emptyGarden->totalNu)