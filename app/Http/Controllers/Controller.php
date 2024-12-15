<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as RoutingController;

abstract class Controller extends RoutingController
{
    protected $queryMessage;
    
    public function __construct()
    {
        $this->queryMessage = "Something went wrong, Please contact administartion.";
    }
}
