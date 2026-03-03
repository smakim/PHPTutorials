<?php
namespace App\Inheritance;

// Sometimes inheritance does not make sense, like oven is not a toaster
// One can use composition in that case to call methods of other class.
// Use inheritance when "is a" relationship exists, use composition when
// "has a" relationship exists. Below oven uses instance oftoasterpro as 
// a property and calls its toast() and toastBagel() methods.
class FancyOven {

    public function __construct(private ToasterPro2 $toaster) {

    }
    public function bake() {

    }
    
    public function toast() {
        $this->toaster->toast();
    }

    public function toastBagel() {
        $this->toaster->toastBagel();
    }
}