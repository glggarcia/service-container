<?php

use Glggarcia\Modulo5\Base\Container;
use Glggarcia\Modulo5\Providers\Interfaces\PaymentProviderContract;
use Glggarcia\Modulo5\Providers\PaddlePaymentProvider;
use Glggarcia\Modulo5\Services\Checkout;
use Glggarcia\Modulo5\Utils\Http;

require __DIR__ . "/../vendor/autoload.php";

$container = new Container();
$container->register(PaymentProviderContract::class, PaddlePaymentProvider::class);

try {
    $paymentProvider = $container->get(PaymentProviderContract::class);
} catch (ReflectionException $e) {}

$service = new Checkout('teste@teste.com', 450);
echo $service->handle($paymentProvider);