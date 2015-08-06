<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Funcionario
 *
 * @ORM\Table(name="funcionario", indexes={@ORM\Index(name="IDX_7510A3CFF5EAECD7", columns={"dnr"}), @ORM\Index(name="IDX_7510A3CF19C1B535", columns={"cpf_supervisor"})})
 * @ORM\Entity
 */
class Funcionario
{
    /**
     * @var string
     *
     * @ORM\Column(name="pnome", type="string", length=15, nullable=false)
     */
    private $pnome;

    /**
     * @var string
     *
     * @ORM\Column(name="mnicial", type="string", length=1, nullable=true)
     */
    private $mnicial;

    /**
     * @var string
     *
     * @ORM\Column(name="unome", type="string", length=15, nullable=false)
     */
    private $unome;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=11, nullable=false)
     */
    private $cpf;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datanasc", type="date", nullable=true)
     */
    private $datanasc;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=30, nullable=true)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=1, nullable=true)
     */
    private $sexo;

    /**
     * @var string
     *
     * @ORM\Column(name="salario", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $salario;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="funcionario_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Funcionario
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Funcionario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cpf_supervisor", referencedColumnName="id")
     * })
     */
    private $cpfSupervisor;

    /**
     * @var \AppBundle\Entity\Departamento
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Departamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dnr", referencedColumnName="id")
     * })
     */
    private $dnr;


}
