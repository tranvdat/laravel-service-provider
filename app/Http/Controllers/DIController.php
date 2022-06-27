<?php

namespace App\Http\Controllers;

use App\Services\Domain\DI\ClassA;
use App\Services\Domain\DI\ClassB;
use App\Services\Domain\DI\ClassC;
use Illuminate\Support\Facades\App;

class DIController extends Controller
{
    private $classA;
    
    // public function __construct(ClassA $classA)
    // {
    //     $this->classA = $classA;   
    // }

    public function make()
    {
        $app = app();
        $classA = new ClassA(new ClassB(new ClassC));
        dd([
            'classA' =>$classA,
            'app' => $app,
            'show' => $classA->show()
        ]);
    }

    // use Service Container Laravel
    // public function make()
    // {
    //     $app = app();
    //     $classA = App::make(ClassA::class);
        
    //     dd([
    //         'classA' => $classA,
    //         'app' => $app,
    //         'show' => $classA->show()
    //     ]);
    // }
}