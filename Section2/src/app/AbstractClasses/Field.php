<?php
namespace App\AbstractClasses;

abstract class Field {
    public function __construct(protected string $name)
    {
    }

    // abstract methods can't be private as it needs to be implemented by the derived classes
    // abstract private function render(): string;
    abstract public function render(): string;
}