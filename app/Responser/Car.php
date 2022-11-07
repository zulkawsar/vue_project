<?php

namespace App\Responser;

use App\Responser\Interface\VechicleInterface;

class Car implements VechicleInterface
{
    protected $name;

    function __construct()
    {
        $this->name = 'Car';
    }
    /**
     * 
     */
    public function start()
    {
        
    }

    /**
     * 
     */
    public function driverInfo()
    {
        return $this->name;
    }
}