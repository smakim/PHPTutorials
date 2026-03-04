<?php

namespace App\StaticBinding;

class ClassA {
    protected string $name = "A";
    protected static string $nameStatic = "A";
    protected static string $nameStatic2 = "A";

    public function getName(): string {
        var_dump(get_class($this));
        return $this->name;
    }

    public static function getNameStatic(): string {
        var_dump(self::class, get_called_class());
        return self::$nameStatic;
    }

    public static function getNameStatic2(): string {
        var_dump(self::class, get_called_class());
        return static::$nameStatic2;
    }

    public static function make() : self {
        return new self();
    }
    public static function make2() : static {
        return new static();
    }
}
