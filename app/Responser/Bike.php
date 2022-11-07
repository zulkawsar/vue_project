<?php

namespace App\Responser;

use App\Responser\Interface\VechicleInterface;

class Bike implements VechicleInterface
{
    protected $name;

    function __construct()
    {
        $this->name = 'Bike';
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