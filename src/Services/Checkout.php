<?php

namespace Glggarcia\Modulo5\Services;
use Glggarcia\Modulo5\Providers\CieloPaymentProvider;
use Glggarcia\Modulo5\Providers\Interfaces\PaymentProviderContract;
use Glggarcia\Modulo5\Providers\StripePaymentProvider;
use Glggarcia\Modulo5\Utils\Http;

class Checkout
{
    public function __construct(private string $email, private int $amount)
    {}

    public function handle(PaymentProviderContract $paymentProvider): string
    {
        return $paymentProvider->charge($this->email, $this->amount);
    }
}