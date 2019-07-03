<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EnuygunKurlarRepository")
 */
class EnuygunKurlar
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $DOLAR;

    /**
     * @ORM\Column(type="float")
     */
    private $EURO;

    /**
     * @ORM\Column(type="float")
     */
    private $STERLIN;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDOLAR(): ?float
    {
        return $this->DOLAR;
    }

    public function setDOLAR(float $DOLAR): self
    {
        $this->DOLAR = $DOLAR;

        return $this;
    }

    public function getEURO(): ?float
    {
        return $this->EURO;
    }

    public function setEURO(float $EURO): self
    {
        $this->EURO = $EURO;

        return $this;
    }

    public function getSTERLIN(): ?float
    {
        return $this->STERLIN;
    }

    public function setSTERLIN(float $STERLIN): self
    {
        $this->STERLIN = $STERLIN;

        return $this;
    }
}
