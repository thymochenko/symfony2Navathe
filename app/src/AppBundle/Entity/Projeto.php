<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projeto
 *
 * @ORM\Table(name="projeto", uniqueConstraints={@ORM\UniqueConstraint(name="projeto_projnome_key", columns={"projnome"})}, indexes={@ORM\Index(name="IDX_A0559D94B602C934", columns={"dnum"})})
 * @ORM\Entity
 */
class Projeto
{
    /**
     * @var string
     *
     * @ORM\Column(name="projnome", type="string", length=15, nullable=false)
     */
    private $projnome;

    /**
     * @var string
     *
     * @ORM\Column(name="projlocal", type="string", length=15, nullable=true)
     */
    private $projlocal;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="projeto_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Departamento
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Departamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dnum", referencedColumnName="id")
     * })
     */
    private $dnum;


}
