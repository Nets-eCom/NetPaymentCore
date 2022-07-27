<?php

namespace NetsCore\Dto\NextAccept\PaymentMethodDetails;

use NetsCore\Interfaces\PaymentMethodDetailsInterface;

class SepaDirectDepositTypeA implements PaymentMethodDetailsInterface
{
    public string $iban;
    public string $customerEmail;
    public string $type;

    public function getDetails()
    {
        // TODO: Implement getDetails() method.
    }
}