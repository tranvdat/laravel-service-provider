<?php

namespace App\Services\Domain\DI;

use App\Services\Domain\DI\ClassC;

class ClassB
{
    private $classC;
    
    public function __construct(ClassC $classC)
    {
        $this->classC = $classC;
    }
    
    public function show()
    {
        return "showB";
    }
}