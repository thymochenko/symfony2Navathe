<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LocalizacaoDep
 *
 * @ORM\Table(name="localizacao_dep")
 * @ORM\Entity
 */
class LocalizacaoDep
{
    /**
     * @var string
     *
     * @ORM\Column(name="dlocal", type="string", length=15, nullable=false)
     */
    private $dlocal;

    /**
     * @var \AppBundle\Entity\Departamento
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Departamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;


}
