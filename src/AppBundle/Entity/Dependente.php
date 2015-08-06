<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dependente
 */
class Dependente
{
    /**
     * @var string
     */
    private $nomeDependente;

    /**
     * @var string
     */
    private $sexo;

    /**
     * @var \DateTime
     */
    private $datanasc;

    /**
     * @var string
     */
    private $parentesco;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Funcionario
     */
    private $fcpf;


    /**
     * Set nomeDependente
     *
     * @param string $nomeDependente
     * @return Dependente
     */
    public function setNomeDependente($nomeDependente)
    {
        $this->nomeDependente = $nomeDependente;

        return $this;
    }

    /**
     * Get nomeDependente
     *
     * @return string 
     */
    public function getNomeDependente()
    {
        return $this->nomeDependente;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     * @return Dependente
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set datanasc
     *
     * @param \DateTime $datanasc
     * @return Dependente
     */
    public function setDatanasc($datanasc)
    {
        $this->datanasc = $datanasc;

        return $this;
    }

    /**
     * Get datanasc
     *
     * @return \DateTime 
     */
    public function getDatanasc()
    {
        return $this->datanasc;
    }

    /**
     * Set parentesco
     *
     * @param string $parentesco
     * @return Dependente
     */
    public function setParentesco($parentesco)
    {
        $this->parentesco = $parentesco;

        return $this;
    }

    /**
     * Get parentesco
     *
     * @return string 
     */
    public function getParentesco()
    {
        return $this->parentesco;
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
     * Set fcpf
     *
     * @param \AppBundle\Entity\Funcionario $fcpf
     * @return Dependente
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
