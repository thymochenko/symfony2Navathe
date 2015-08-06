<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrabalhaEm
 */
class TrabalhaEm
{
    /**
     * @var string
     */
    private $horas;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Projeto
     */
    private $pnr;

    /**
     * @var \AppBundle\Entity\Funcionario
     */
    private $fcpf;


    /**
     * Set horas
     *
     * @param string $horas
     * @return TrabalhaEm
     */
    public function setHoras($horas)
    {
        $this->horas = $horas;

        return $this;
    }

    /**
     * Get horas
     *
     * @return string 
     */
    public function getHoras()
    {
        return $this->horas;
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
     * Set pnr
     *
     * @param \AppBundle\Entity\Projeto $pnr
     * @return TrabalhaEm
     */
    public function setPnr(\AppBundle\Entity\Projeto $pnr = null)
    {
        $this->pnr = $pnr;

        return $this;
    }

    /**
     * Get pnr
     *
     * @return \AppBundle\Entity\Projeto 
     */
    public function getPnr()
    {
        return $this->pnr;
    }

    /**
     * Set fcpf
     *
     * @param \AppBundle\Entity\Funcionario $fcpf
     * @return TrabalhaEm
     */
    public function setFcpf(\AppBundle\Entity\Funcionario $fcpf = null)
    {
        $this->fcpf = $fcpf;

        return $this;
    }

    /**
     * Get fcpf
     *
     * @return \AppBundle\Entity\Funcionario 
     */
    public function getFcpf()
    {
        return $this->fcpf;
    }
}
