<?php

namespace NetsCore\Dto\Netaxept;

use DateTime;

class PaymentTransaction
{
    public ?int $amount;
    public ?DateTime $dateTime;
    public ?string $description;

    public function map($stdClass): PaymentTransaction
    {
        if(empty($stdClass)) {
            return $this;
        }
        $this->amount = $stdClass->amount;
        $this->dateTime = $stdClass->dateTime ? (new DateTime($stdClass->dateTime)) : null;
        $this->description = $stdClass->description;

        return $this;
    }
}
