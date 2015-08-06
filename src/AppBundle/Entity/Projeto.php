<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projeto
 */
class Projeto
{
    /**
     * @var string
     */
    private $projnome;

    /**
     * @var string
     */
    private $projlocal;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Departamento
     */
    private $dnum;


    /**
     * Set projnome
     *
     * @param string $projnome
     * @return Projeto
     */
    public function setProjnome($projnome)
    {
        $this->projnome = $projnome;

        return $this;
    }

    /**
     * Get projnome
     *
     * @return string 
     */
    public function getProjnome()
    {
        return $this->projnome;
    }

    /**
     * Set projlocal
     *
     * @param string $projlocal
     * @return Projeto
     */
    public function setProjlocal($projlocal)
    {
        $this->projlocal = $projlocal;

        return $this;
    }

    /**
     * Get projlocal
     *
     * @return string 
     */
    public function getProjlocal()
    {
        return $this->projlocal;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dnum
     *
     * @param \AppBundle\Entity\Departamento $dnum
     * @return Projeto
     */
    public function setDnum(\AppBundle\Entity\Departamento $dnum = null)
    {
        $this->dnum = $dnum;

        return $this;
    }

    /**
     * Get dnum
     *
     * @return \AppBundle\Entity\Departamento 
     */
    public function getDnum()
    {
        return $this->dnum;
    }
}
