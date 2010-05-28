<?php

/**
 * EscolaridadeAcolhido filter form base class.
 *
 * @package    abrigo
 * @subpackage filter
 * @author     Luiz Oliveira
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseEscolaridadeAcolhidoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nomeEscola'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dataConclusao'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'nomeEscola'      => new sfValidatorPass(array('required' => false)),
      'dataConclusao'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('escolaridade_acolhido_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EscolaridadeAcolhido';
  }

  public function getFields()
  {
    return array(
      'acolhido_id'     => 'Number',
      'escolaridade_id' => 'Number',
      'nomeEscola'      => 'Text',
      'dataConclusao'   => 'Date',
    );
  }
}
