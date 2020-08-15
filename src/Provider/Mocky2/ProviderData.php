<?php


namespace App\Provider\Mocky2;


use App\Util\ProviderDataAbstract;

class ProviderData extends ProviderDataAbstract
{
    /**
     * @return string
     */
    public function providerName(): string
    {
        return 'Mocky2';
    }

    /**
     * @return string
     */
    public function providerUrl(): string
    {
        return 'http://www.mocky.io/v2/5a74524e2d0000430bfe0fa3';
    }

    /**
     * @return string|null
     */
    public function symbolName(): ?string
    {
        return 'kod';
    }

    /**
     * @return string|null
     */
    public function amountName(): ?string
    {
        return 'oran';
    }

    /**
     * @return string|null
     */
    public function dollar(): ?string
    {
        return 'DOLAR';
    }

    /**
     * @return string|null
     */
    public function euro(): ?string
    {
        return 'AVRO';
    }

    /**
     * @return string|null
     */
    public function sterling(): ?string
    {
        return 'İNGİLİZ STERLİNİ';
    }
}
