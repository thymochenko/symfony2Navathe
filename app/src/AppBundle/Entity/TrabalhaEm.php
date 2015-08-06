<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrabalhaEm
 *
 * @ORM\Table(name="trabalha_em", indexes={@ORM\Index(name="IDX_3A503809FE76BF21", columns={"fcpf"}), @ORM\Index(name="IDX_3A503809EEC5E77B", columns={"pnr"})})
 * @ORM\Entity
 */
class TrabalhaEm
{
    /**
     * @var string
     *
     * @ORM\Column(name="horas", type="decimal", precision=3, scale=1, nullable=false)
     */
    private $horas;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="trabalha_em_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Projeto
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Projeto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pnr", referencedColumnName="id")
     * })
     */
    private $pnr;

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
