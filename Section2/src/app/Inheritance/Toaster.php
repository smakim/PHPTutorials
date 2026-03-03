<?php
namespace App\Inheritance;

class Toaster {
    public array $slices;
    // public int $size;
    // private int $size; //private prperty can't be overriddend by derived class
    protected int $size; //protected prperty CAN be overriddend by derived class

    public function __construct() {
        $this->slices = [];
        $this->size = 2;
    }
    public function addSlice(String $slice) {
        if (count($this->slices) < $this->size){
            $this->slices[] = $slice;
        }
        // var_dump($this);
    }
    
    public function toast() {
        foreach($this->slices as $i => $slice) {
            echo ($i + 1) . ': Toasting ' . $slice . '</br>';
        }
    }
}