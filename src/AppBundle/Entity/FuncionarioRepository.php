<?php
namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

class FuncionarioRepository extends EntityRepository
{
	private $em;
	
	public function __construct($em){
		$this->em = $em;
	}
	
	public function getFuncionarioPorDepartamento($nome)
	{
		$sql="
		SELECT f.pnome, f.unome, f.endereco 
		FROM AppBundle:Funcionario f, AppBundle:Departamento d
		WHERE d.dnome = :pesquisa and d.dnumero = f.dnr";

		return $this->em
		->createQuery($sql)
		->setParameter('pesquisa', $nome)
		->getResult();
	}
	
	/**
	*Para cada projeto localizado em mauá
	*Liste o número do projeto, o número do departamento
	*que o controla e o sobrenome, endereço e data de nascimento
	*do gerente do departamento
	* @method getGerentePorProjetoDeNome , 
	*/
	public function getGerentePorProjetoDeNome($nomeProjeto){
		$sql = "
		SELECT DISTINCT p.id, f.unome, f.endereco, f.datanasc
		FROM AppBundle:Projeto p, AppBundle:Departamento d,
			AppBundle:Funcionario f
		WHERE p.dnum = d.dnumero
		AND d.cpfGerente = f.cpf
		AND p.projlocal = :nomeProjeto
 		";
		
		return $this->em
		->createQuery($sql)
		->setParameter('nomeProjeto', $nomeProjeto)
		->getResult();
	}
}