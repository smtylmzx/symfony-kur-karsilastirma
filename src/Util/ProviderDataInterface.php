<?php


namespace App\Util;


interface ProviderDataInterface
{
    /**
     * @return string
     */
    public function providerName(): string;

    /**
     * @return string
     */
    public function providerUrl(): string;

    /**
     * @return string|null
     */
    public function symbolName(): ?string;

    /**
     * @return string|null
     */
    public function amountName(): ?string;

    /**
     * @return string|null
     */
    public function dollar(): ?string;

    /**
     * @return string|null
     */
    public function euro(): ?string;

    /**
     * @return string|null
     */
    public function sterling(): ?string;
}
