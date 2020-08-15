<?php

namespace App\Entity;

use App\Traits\TimestampleTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class ProviderExchange
{
    use TimestampleTrait;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="dollar", type="float", options={"default":0.0, "comment":"Dollar rate"})
     */
    private $dollar;

    /**
     * @ORM\Column(name="euro", type="float", options={"default":0.0, "comment":"Euro rate"})
     */
    private $euro;

    /**
     * @ORM\Column(name="sterling", type="float", options={"default":0.0, "comment":"Sterling rate"})
     */
    private $sterling;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Provider")
     * @ORM\JoinColumn(name="provider_id", referencedColumnName="id")
     */
    private $provider;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDollar()
    {
        return $this->dollar;
    }

    /**
     * @param mixed $dollar
     * @return ProviderExchange
     */
    public function setDollar($dollar): ProviderExchange
    {
        $this->dollar = $dollar;
        return $this;
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
     * @return ProviderExchange
     */
    public function setEuro($euro): ProviderExchange
    {
        $this->euro = $euro;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSterling()
    {
        return $this->sterling;
    }

    /**
     * @param mixed $sterling
     * @return ProviderExchange
     */
    public function setSterling($sterling): ProviderExchange
    {
        $this->sterling = $sterling;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param mixed $provider
     * @return ProviderExchange
     */
    public function setProvider($provider): ProviderExchange
    {
        $this->provider = $provider;
        return $this;
    }

}
