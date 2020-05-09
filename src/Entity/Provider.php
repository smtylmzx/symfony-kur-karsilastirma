<?php

namespace App\Entity;


use App\Traits\TimestampleTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Provider
 * @package App\Entity
 *
 * @ORM\Entity()
 */
class Provider
{
    use TimestampleTrait;

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=100, nullable=false, options={"comment":"Provider name"})
     */
    private $name;

    /**
     * @ORM\Column(name="status", type="boolean", options={"default":1, "comment":"Provider status"})
     */
    private $status;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Provider
     */
    public function setName($name): Provider
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return Provider
     */
    public function setStatus($status): Provider
    {
        $this->status = $status;
        return $this;
    }

}
