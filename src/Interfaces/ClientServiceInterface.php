<?php

namespace NetsCore\Interfaces;

interface ClientServiceInterface
{
    /**
     * @param  PaymentObjectInterface  $paymentObject
     * @return mixed
     */
    public function createPayment(PaymentObjectInterface $paymentObject);
    public function getPaymentDetails(string $paymentId);
    public function cancelPayment(PaymentObjectInterface $paymentObject);
    public function authorizePayment(AuthorizePaymentRequestInterface $authorizationObject);
    public function capturePayment(CapturePaymentInterface $capturePayment);
    public function refundPayment(RefundPaymentRequestInterface $refundObject);
    public function salePayment();
}
