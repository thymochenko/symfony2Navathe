<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departamento
 *
 * @ORM\Table(name="departamento", uniqueConstraints={@ORM\UniqueConstraint(name="departamento_dnome_key", columns={"dnome"})}, indexes={@ORM\Index(name="IDX_40E497EB5A874A1A", columns={"cpf_gerente"})})
 * @ORM\Entity
 */
class Departamento
{
    /**
     * @var string
     *
     * @ORM\Column(name="dnome", type="string", length=15, nullable=false)
     */
    private $dnome;

    /**
     * @var integer
     *
     * @ORM\Column(name="dnumero", type="integer", nullable=false)
     */
    private $dnumero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_inicio_gerente", type="date", nullable=true)
     */
    private $dataInicioGerente;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="departamento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Funcionario
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Funcionario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cpf_gerente", referencedColumnName="id")
     * })
     */
    private $cpfGerente;


}
