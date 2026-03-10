<?php

namespace App\Serialization;

class Invoice2
{
    private string $id;


    public function __construct(
        public float $amount,
        public string $description,
        public string $creditCardNumber
    ) {
        $this->id = uniqid('invoice_');
    }

    public function __sleep()
    {
        echo ' __sleep() is called before serializing the object <br />';
        return ['id', 'amount'];
    }

    public function __wakeup()
    {
        echo ' __wakeup() is called after unserializing the object <br />';
    }

    public function __serialize(): array
    {
        echo ' __serialize() is called before serializing the object <br />';
        return ['id' => $this->id,
        'amount' => $this->amount,
        'description' => $this->description,
        'creditCardNumber' => base64_encode($this->creditCardNumber),
        'foo' => 'bar'];
    }

    public function __unserialize(array $data): void
    {
        echo ' __unserialize() is called after unserializing the object <br />';

        $this->id = $data['id'];
        $this->amount = $data['amount'];
        $this->description = $data['description'];
        $this->creditCardNumber = base64_decode($data['creditCardNumber']);

        // var_dump($data); echo '<br />';
    }
}
