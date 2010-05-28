<?php

/**
 * GrauParentescoResponsavel filter form base class.
 *
 * @package    abrigo
 * @subpackage filter
 * @author     Luiz Oliveira
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseGrauParentescoResponsavelFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nome'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ordem' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nome'  => new sfValidatorPass(array('required' => false)),
      'ordem' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('grau_parentesco_responsavel_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'GrauParentescoResponsavel';
  }

  public function getFields()
  {
    return array(
      'id'    => 'Number',
      'nome'  => 'Text',
      'ordem' => 'Number',
    );
  }
}
