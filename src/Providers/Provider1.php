<?php

namespace App\Providers;

use App\Util\KurInterface;
use App\Service\ProviderService;

class Provider1 implements KurInterface{

    public function exchangeInitializer()
    {
        $provider = new ProviderService();
        $provider->setProviderURL("http://www.mocky.io/v2/5a74519d2d0000430bfe0fa0");
        $provider->setSymbolName("symbol");
        $provider->setAmountName("amount");
        $provider->setDolar("USDTRY");
        $provider->setEuro("EURTRY");
        $provider->setSterlin("GBPTRY");
        return $provider;
    }
}
