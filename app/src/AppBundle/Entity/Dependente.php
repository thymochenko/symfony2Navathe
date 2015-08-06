<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dependente
 *
 * @ORM\Table(name="dependente", indexes={@ORM\Index(name="IDX_3EDA8DDCFE76BF21", columns={"fcpf"})})
 * @ORM\Entity
 */
class Dependente
{
    /**
     * @var string
     *
     * @ORM\Column(name="nome_dependente", type="string", length=15, nullable=false)
     */
    private $nomeDependente;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=1, nullable=true)
     */
    private $sexo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datanasc", type="date", nullable=true)
     */
    private $datanasc;

    /**
     * @var string
     *
     * @ORM\Column(name="parentesco", type="string", length=8, nullable=true)
     */
    private $parentesco;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="dependente_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Funcionario
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Funcionario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fcpf", referencedColumnName="id")
     * })
     */
    private $fcpf;


}
