<?php

namespace LijoJoses43\PinValidator\Commands;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Console\GeneratorCommand;

class PinValidatorMakeCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'make:pin-validator';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new custom rule for pin validation';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Rule';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return realpath(__DIR__ . '/../stubs/pin-validator.stub');
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Rules';
    }
}