<?php

namespace App\MagicMethods;

class DeferredClass
{
    public function __construct()
    {
        echo 'DeferredClass constructor called.<br>';
    }


    public function deferredProcess(String $arguments)
    {
        echo 'DeferredClass::deferredProcess() called with arguments: ' . $arguments . '<br>';
    }
}