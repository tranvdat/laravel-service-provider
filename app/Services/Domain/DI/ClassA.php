<?php

namespace App\Services\Domain\DI;

use App\Services\Domain\DI\ClassB;

class ClassA
{
    private $classB;
    
    public function __construct(ClassB $classB)
    {
        $this->classB = $classB;
    }
    
    public function show()
    {
        return $this->classB->show();
    }
}
