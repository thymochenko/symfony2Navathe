<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity(repositoryClass="AppBundle\Entity\FuncionarioRepository")
*/
class Funcionario
{
    /**
     * @var string
     */
    private $pnome;

    /**
     * @var string
     */
    private $mnicial;

    /**
     * @var string
     */
    private $unome;

    /**
     * @var string
     */
    private $cpf;

    /**
     * @var \DateTime
     */
    private $datanasc;

    /**
     * @var string
     */
    private $endereco;

    /**
     * @var string
     */
    private $sexo;

    /**
     * @var string
     */
    private $salario;
	
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
	
	/**
     * @OneToOne(targetEntity="Funcionario")
     * @JoinColumn(name="cpf_supervisor", referencedColumnName="id")
     **/
    private $cpfSupervisor;
	
	/**
     * @OneToOne(targetEntity="Departamento", inversedBy="funcionario")
     * @JoinColumn(name="dnr", referencedColumnName="id")
     **/
    private $dnr;

    /**
     * Set pnome
     *
     * @param string $pnome
     * @return Funcionario
     */
    public function setPnome($pnome)
    {
        $this->pnome = $pnome;

        return $this;
    }

    /**
     * Get pnome
     *
     * @return string 
     */
    public function getPnome()
    {
        return $this->pnome;
    }

    /**
     * Set mnicial
     *
     * @param string $mnicial
     * @return Funcionario
     */
    public function setMnicial($mnicial)
    {
        $this->mnicial = $mnicial;

        return $this;
    }

    /**
     * Get mnicial
     *
     * @return string 
     */
    public function getMnicial()
    {
        return $this->mnicial;
    }

    /**
     * Set unome
     *
     * @param string $unome
     * @return Funcionario
     */
    public function setUnome($unome)
    {
        $this->unome = $unome;

        return $this;
    }

    /**
     * Get unome
     *
     * @return string 
     */
    public function getUnome()
    {
        return $this->unome;
    }

    /**	
     * Set cpf
     *
     * @param string $cpf
     * @return Funcionario
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get cpf
     *
     * @return string 
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set datanasc
     *
     * @param \DateTime $datanasc
     * @return Funcionario
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
     * Set endereco
     *
     * @param string $endereco
     * @return Funcionario
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get endereco
     *
     * @return string 
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     * @return Funcionario
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
     * Set salario
     *
     * @param string $salario
     * @return Funcionario
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * Get salario
     *
     * @return string 
     */
    public function getSalario()
    {
        return $this->salario;
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
     * Set cpfSupervisor
     *
     * @param \AppBundle\Entity\Funcionario $cpfSupervisor
     * @return Funcionario
     */
    public function setCpfSupervisor(\AppBundle\Entity\Funcionario $cpfSupervisor = null)
    {
        $this->cpfSupervisor = $cpfSupervisor;

        return $this;
    }

    /**
     * Get cpfSupervisor
     *
     * @return \AppBundle\Entity\Funcionario 
     */
    public function getCpfSupervisor()
    {
        return $this->cpfSupervisor;
    }

    /**
     * Set dnr
     *
     * @param \AppBundle\Entity\Departamento $dnr
     * @return Funcionario
     */
    public function setDnr(\AppBundle\Entity\Departamento $dnr = null)
    {
        $this->dnr = $dnr;

        return $this;
    }

    /**
     * Get dnr
     *
     * @return \AppBundle\Entity\Departamento 
     */
    public function getDnr()
    {
        return $this->dnr;
    }
}
