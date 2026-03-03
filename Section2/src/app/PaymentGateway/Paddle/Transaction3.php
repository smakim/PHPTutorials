<?php
declare(strict_types = 1);

namespace App\PaymentGateway\Paddle;
use App\Enums\Status;

class Transaction3{

    private static int $count = 0;
    public static int $count2 = 0;

    public function __construct(
        public float $amount,
        public string $description
)
    {
        self::$count++;
        self::$count2++;
    }

    public static function getCount() {
        return self::$count;
    }

    public function process() {
        echo "process paddle transaction." . '<br>';
    }
}