<?php


namespace App\Provider\Mocky1;


use App\Util\ProviderDataAbstract;

class ProviderData extends ProviderDataAbstract
{
    /**
     * @return string
     */
    public function providerName(): string
    {
        return 'Mocky1';
    }

    /**
     * @return string
     */
    public function providerUrl(): string
    {
        return 'http://www.mocky.io/v2/5a74519d2d0000430bfe0fa0';
    }

    /**
     * @return string|null
     */
    public function symbolName(): ?string
    {
        return 'symbol';
    }

    /**
     * @return string|null
     */
    public function amountName(): ?string
    {
        return 'amount';
    }

    /**
     * @return string|null
     */
    public function dollar(): ?string
    {
        return 'USDTRY';
    }

    /**
     * @return string|null
     */
    public function euro(): ?string
    {
        return 'EURTRY';
    }

    /**
     * @return string|null
     */
    public function sterling(): ?string
    {
        return 'GBPTRY';
    }
}
