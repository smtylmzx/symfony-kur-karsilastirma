<?php

namespace App\Service;

class ProviderService{
    private $providerURL;
    private $symbolName;
    private $amountName;
    private $dolar;
    private $euro;
    private $sterlin;

    /**
     * @return mixed
     */
    public function getSymbolName()
    {
        return $this->symbolName;
    }

    /**
     * @param mixed $symbolName
     */
    public function setSymbolName($symbolName): void
    {
        $this->symbolName = $symbolName;
    }

    /**
     * @return mixed
     */
    public function getAmountName()
    {
        return $this->amountName;
    }

    /**
     * @param mixed $amountName
     */
    public function setAmountName($amountName): void
    {
        $this->amountName = $amountName;
    }

    /**
     * @return mixed
     */
    public function getProviderURL()
    {
        return $this->providerURL;
    }

    /**
     * @param mixed $providerURL
     */
    public function setProviderURL($providerURL): void
    {
        $this->providerURL = $providerURL;
    }

    /**
     * @return mixed
     */
    public function getDolar()
    {
        return $this->dolar;
    }

    /**
     * @param mixed $dolar
     */
    public function setDolar($dolar): void
    {
        $this->dolar = $dolar;
    }

    /**
     * @return mixed
     */
    public function getEuro()
    {
        return $this->euro;
    }

    /**
     * @param mixed $euro
     */
    public function setEuro($euro): void
    {
        $this->euro = $euro;
    }

    /**
     * @return mixed
     */
    public function getSterlin()
    {
        return $this->sterlin;
    }

    /**
     * @param mixed $sterlin
     */
    public function setSterlin($sterlin): void
    {
        $this->sterlin = $sterlin;
    }
}
