<?php

namespace App\Service;

use App\Util\KurInterface;

class KurFacadeService
{
    public function providerRegister(KurInterface $kur)
    {
        return $kur->exchangeInitializer();
    }
}
