<?php

namespace App\Providers;

use App\Util\KurInterface;
use App\Service\ProviderService;

class Provider2 implements KurInterface{

    public function exchangeInitializer()
    {
        $provider = new ProviderService();
        $provider->setProviderURL("http://www.mocky.io/v2/5a74524e2d0000430bfe0fa3");
        $provider->setSymbolName("kod");
        $provider->setAmountName("oran");
        $provider->setDolar("DOLAR");
        $provider->setEuro("AVRO");
        $provider->setSterlin("İNGİLİZ STERLİNİ");
        return $provider;
    }
}
