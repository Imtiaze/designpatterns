<?php

require_once __DIR__ . '/vendor/autoload.php';

use Pattern\Playground\UserCommands\CommandWithPrompt;
use Pattern\Playground\UserCommands\CommandWithoutPrompt;

echo "Input Command Class Name: (CommandWithoutPrompt / CommandWithPrompt) \n";
$command = trim(fgets(STDIN));

$classes = [
    'CommandWithPrompt' => CommandWithPrompt::class,
    'CommandWithoutPrompt' => CommandWithoutPrompt::class,
];


$class = $classes[$command] ?? null;

if (! $class || ! class_exists($class)) {
    exit("Invalid command.\n");
}

(new $class('Input', 'Description'))->run('');
