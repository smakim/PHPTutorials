<?php
declare(strict_types = 1);

namespace App\PaymentGateway\Paddle;

class Transaction{

    public const STATUS_PAID = 'paid';
    public const STATUS_PENDING = 'pending';
    public const STATUS_DECLINED = 'declined';

    public const ALL_STATUSES = [
        self::STATUS_PAID => 'Paid',
        self::STATUS_PENDING => 'Pending',
        self::STATUS_DECLINED => 'Declined',
    ];

    public function __construct()
    {
        echo 'CONST within class ' . Transaction::STATUS_PAID . '<br>'; 
        echo 'CONST within class ' . self::STATUS_PENDING . '<br>'; 
        echo 'CLASS Name: ' . self::class . '<br>';
        $this->setStatus(self::STATUS_PENDING);
        var_dump($this);
    }

    private string $status;

    public function setStatus(string $status): self {
        if(! isset(self::ALL_STATUSES[$status])) {
            throw new \InvalidArgumentException('Invalid status');
        }
       $this->status = $status;
       return $this;
    }
}