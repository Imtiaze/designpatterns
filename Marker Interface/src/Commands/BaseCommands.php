<?php 

namespace Pattern\Playground\Commands;

use Pattern\Playground\Interfaces\PromptsForMissingInput;

class BaseCommands
{
    protected string $name;
    protected string $argumentDescription;

    public function __construct(string $name, string $argumentDescription)
    {
        $this->name = $name;
        $this->argumentDescription = $argumentDescription;
    }

    public function run(string $userProviderInput)
    {
        if ($this instanceof PromptsForMissingInput) {
            if (empty($userProviderInput)) {
                echo "\n ⚠️ Missing input for [{$this->argumentDescription}]!\n";
                
                
                echo "Enter {$this->argumentDescription}: ";
                $userProviderInput = trim(fgets(STDIN)); 
            }
        }

        
        $this->handle($userProviderInput);
    }
}