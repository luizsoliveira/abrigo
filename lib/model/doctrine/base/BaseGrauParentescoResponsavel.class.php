<?php

/**
 * BaseGrauParentescoResponsavel
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nome
 * @property integer $ordem
 * @property Doctrine_Collection $AcolhidoResponsavelGrauParentesco
 * 
 * @method string                    getNome()                              Returns the current record's "nome" value
 * @method integer                   getOrdem()                             Returns the current record's "ordem" value
 * @method Doctrine_Collection       getAcolhidoResponsavelGrauParentesco() Returns the current record's "AcolhidoResponsavelGrauParentesco" collection
 * @method GrauParentescoResponsavel setNome()                              Sets the current record's "nome" value
 * @method GrauParentescoResponsavel setOrdem()                             Sets the current record's "ordem" value
 * @method GrauParentescoResponsavel setAcolhidoResponsavelGrauParentesco() Sets the current record's "AcolhidoResponsavelGrauParentesco" collection
 * 
 * @package    abrigo
 * @subpackage model
 * @author     Luiz Oliveira
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGrauParentescoResponsavel extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('grau_parentesco_responsavel');
        $this->hasColumn('nome', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('ordem', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Acolhido as AcolhidoResponsavelGrauParentesco', array(
             'local' => 'id',
             'foreign' => 'responsavelGrauParentesco_id'));
    }
}