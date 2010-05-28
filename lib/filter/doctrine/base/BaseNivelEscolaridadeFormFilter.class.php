<?php

/**
 * NivelEscolaridade filter form base class.
 *
 * @package    abrigo
 * @subpackage filter
 * @author     Luiz Oliveira
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseNivelEscolaridadeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nome'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'grau'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ordem' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nome'  => new sfValidatorPass(array('required' => false)),
      'grau'  => new sfValidatorPass(array('required' => false)),
      'ordem' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('nivel_escolaridade_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'NivelEscolaridade';
  }

  public function getFields()
  {
    return array(
      'id'    => 'Number',
      'nome'  => 'Text',
      'grau'  => 'Text',
      'ordem' => 'Number',
    );
  }
}
