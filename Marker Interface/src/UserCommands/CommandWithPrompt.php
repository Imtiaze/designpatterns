<?php 

namespace Pattern\Playground\UserCommands;

use Pattern\Playground\Commands\BaseCommands;
use Pattern\Playground\Interfaces\PromptsForMissingInput;

class CommandWithPrompt extends BaseCommands implements PromptsForMissingInput
{
    public function handle(string $input)
    {
         if (empty($input)) {
            echo "❌ Error: Name missing, cannot greet!\n";
            return;
        }
        echo "👋 Hello, {$input}!\n";
    }
}