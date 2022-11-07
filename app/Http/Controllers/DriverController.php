<?php

namespace App\Http\Controllers;

use App\Responser\Interface\VechicleInterface;

use Illuminate\Http\Request;

class DriverController extends Controller
{
    
    private $vechicle;

    /**
     * Inject
     */
    public function __construct(VechicleInterface $vechicles)
    {
        $this->vechicle = $vechicles;
    }

    /**
     * 
     * 
     */
    public function index()
    {
        $driver = [
            'name' => 'Kawsar',
            'lincence' => '12444'
        ];
       dd($this->vechicle->driverInfo());
    }

    /**
     * 
     * 
     */
    public function start()
    {
        # code...
    }
}
