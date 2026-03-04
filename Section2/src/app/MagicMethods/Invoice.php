<?php

namespace App\MagicMethods;

use function namespace1\explode;

class Invoice
{

    //    public float $amount; // if you declare public property, __get and __set will not be called.

    private float $amount = 10; // For private property, it will call __get and __set
    private int $id = 1234;
    private string $accountNbr = '123123123123';

    protected array $data = [];

    public function __get($name)
    {
        var_dump($name);
        echo 'From __get() <br>';
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
    }

    public function __set($name, $value)
    {
        var_dump($name, $value);
        echo 'From __set() <br>';
        $this->data[$name] = $value;
    }

    public function __isset($name)
    {
        echo '__isset() called.<br>';
        return array_key_exists($name, $this->data);
    }

    public function __unset($name)
    {
        echo '__unset() called.<br>';
        unset($this->data[$name]);
    }


    public function __call(string $name, array $arguments)
    {
        var_dump($name, $arguments);
        echo ' __call() called.<br>';
        if ($arguments[0] === 'deferredClass') {
            call_user_func_array([new DeferredClass(), 'deferredProcess'], $arguments);
        }
    }

    public static function __callStatic(string $name, array $arguments)
    {
        var_dump($name, $arguments);
        echo ' __callStatic() called.<br>';
    }

    public function __toString()
    {
        return ' __toString() called.<br>';
    }

    public function __invoke()
    {
        echo ' __invoke() called.<br>';
    }

    public function __debugInfo()
    {
        return[
            'amount' => $this->amount,
            'id' => $this->id,
            'accountNbr' => '****' . substr($this->accountNbr, -4),
        ];
    }


}
