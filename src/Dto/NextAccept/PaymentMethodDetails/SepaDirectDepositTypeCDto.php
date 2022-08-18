<?php

namespace NetsCore\Dto\NextAccept\PaymentMethodDetails;

use NetsCore\Interfaces\PaymentMethodDetailsInterface;

class SepaDirectDepositTypeCDto implements PaymentMethodDetailsInterface
{
    public string $iban;
    public string $customerEmail;
    public string $mandateUrl;
    public string $type;
}
