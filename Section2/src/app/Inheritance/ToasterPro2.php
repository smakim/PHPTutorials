<?php
namespace App\Inheritance;

class ToasterPro2 extends Toaster{
    protected int $size;

    public function __construct() {
        parent::__construct(); // Call parent's constuctor to initialize slices array
        $this->size = 4;
    }

    // child/derived class can call parents method
    public function addSlice(string $slice)
    {
        return parent::addSlice($slice);
    }

    public function toastBagel() {
        foreach($this->slices as $i => $slice) {
            echo ($i + 1) . ': Toasting ' . $slice . ' with bagel option'. '</br>';
        }
    }
}