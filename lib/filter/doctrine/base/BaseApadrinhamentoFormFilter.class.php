<?php

/**
 * Apadrinhamento filter form base class.
 *
 * @package    abrigo
 * @subpackage filter
 * @author     Luiz Oliveira
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseApadrinhamentoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'dataInicio'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'dataFim'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'observacoes' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'dataInicio'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'dataFim'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'observacoes' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('apadrinhamento_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Apadrinhamento';
  }

  public function getFields()
  {
    return array(
      'acolhido_id' => 'Number',
      'padrinho_id' => 'Number',
      'dataInicio'  => 'Date',
      'dataFim'     => 'Date',
      'observacoes' => 'Text',
    );
  }
}
