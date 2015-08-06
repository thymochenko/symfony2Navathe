<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LocalizacaoDep
 */
class LocalizacaoDep
{
    /**
     * @var string
     */
    private $dlocal;

    /**
     * @var \AppBundle\Entity\Departamento
     */
    private $id;


    /**
     * Set dlocal
     *
     * @param string $dlocal
     * @return LocalizacaoDep
     */
    public function setDlocal($dlocal)
    {
        $this->dlocal = $dlocal;

        return $this;
    }

    /**
     * Get dlocal
     *
     * @return string 
     */
    public function getDlocal()
    {
        return $this->dlocal;
    }

    /**
     * Set id
     *
     * @param \AppBundle\Entity\Departamento $id
     * @return LocalizacaoDep
     */
    public function setId(\AppBundle\Entity\Departamento $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return \AppBundle\Entity\Departamento 
     */
    public function getId()
    {
        return $this->id;
    }
}
