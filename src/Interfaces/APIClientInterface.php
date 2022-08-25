<?php

namespace NetsCore\Interfaces;

interface APIClientInterface
{
    /**
     * @param  PaymentObjectInterface  $paymentObject
     * @return mixed
     */
    public function createPayment(PaymentObjectInterface $paymentObject);
    public function getPaymentDetails();
    public function cancelPayment(PaymentObjectInterface $paymentObject);
    public function authorizePayment();
    public function capturePayment();
    public function refundPayment(PaymentObjectInterface $paymentObject);
    public function salePayment();
}
