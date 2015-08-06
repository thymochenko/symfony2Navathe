<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departamento
 */
class Departamento
{
    /**
     * @var string
     */
    private $dnome;

    /**
     * @var integer
     */
    private $dnumero;

    /**
     * @var \DateTime
     */
    private $dataInicioGerente;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Funcionario
     */
    private $cpfGerente;

	/**
     * @OneToOne(targetEntity="Funcionario", mappedBy="departamento")
     **/
    private $funcionario;
	
    /**
     * Set dnome
     *
     * @param string $dnome
     * @return Departamento
     */
    public function setDnome($dnome)
    {
        $this->dnome = $dnome;

        return $this;
    }

    /**
     * Get dnome
     *
     * @return string 
     */
    public function getDnome()
    {
        return $this->dnome;
    }

    /**
     * Set dnumero
     *
     * @param integer $dnumero
     * @return Departamento
     */
    public function setDnumero($dnumero)
    {
        $this->dnumero = $dnumero;

        return $this;
    }

    /**
     * Get dnumero
     *
     * @return integer 
     */
    public function getDnumero()
    {
        return $this->dnumero;
    }

    /**
     * Set dataInicioGerente
     *
     * @param \DateTime $dataInicioGerente
     * @return Departamento
     */
    public function setDataInicioGerente($dataInicioGerente)
    {
        $this->dataInicioGerente = $dataInicioGerente;

        return $this;
    }

    /**
     * Get dataInicioGerente
     *
     * @return \DateTime 
     */
    public function getDataInicioGerente()
    {
        return $this->dataInicioGerente;
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
     * Set cpfGerente
     *
     * @param \AppBundle\Entity\Funcionario $cpfGerente
     * @return Departamento
     */
    public function setCpfGerente(\AppBundle\Entity\Funcionario $cpfGerente = null)
    {
        $this->cpfGerente = $cpfGerente;

        return $this;
    }

    /**
     * Get cpfGerente
     *
     * @return \AppBundle\Entity\Funcionario 
     */
    public function getCpfGerente()
    {
        return $this->cpfGerente;
    }
}
