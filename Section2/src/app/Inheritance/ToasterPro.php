<?php
namespace App\Inheritance;

class ToasterPro {
    public array $slices = [];
    public int $size = 4;

    public function addSlice(String $slice) {
        if (count($this->slices) < $this->size){
            $this->slices[] = $slice;
        }
    }
    public function toast() {
        foreach($this->slices as $i => $slice) {
            echo ($i + 1) . ': Toasting ' . $slice . PHP_EOL;
        }
    }
        
    public function toastBagel() {
        foreach($this->slices as $i => $slice) {
            echo ($i + 1) . ': Toasting ' . $slice . ' with bagel option'. '<br>';
        }
    }
}