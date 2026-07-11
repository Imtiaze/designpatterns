<?php 

namespace Pattern\Playground\UserCommands;

use Pattern\Playground\Commands\BaseCommands;

class CommandWithoutPrompt extends BaseCommands
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