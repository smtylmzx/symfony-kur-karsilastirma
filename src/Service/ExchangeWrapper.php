<?php

namespace App\Service;

use App\Service\Client\Client;
use App\Util\ProviderDataInterface;

class ExchangeWrapper
{
    /**
     * @var ProviderDataInterface[]
     */
    private $providerResolver;

    /**
     * @var Client $client
     */
    private $client;

    /**
     * @var array $providersData
     */
    private $providersData;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param ProviderDataInterface $providerData
     * @return self
     */
    public function setProvider(ProviderDataInterface $providerData): self
    {
        $this->providerResolver[] = $providerData;
        return $this;
    }

    /**
     * @return ProviderDataInterface[]|array
     */
    public function getProvider(): array
    {
        return $this->providerResolver;
    }

    /**
     * @return array
     */
    public function getProviderData(): array
    {
        foreach ($this->providerResolver as $provider) {
            $this->providersData[] = $this->client->getProviderData($provider->providerUrl());
        }
        return $this->providersData;
    }
}
