<?php

/**
 * EntidadesPassadasAcolhido filter form base class.
 *
 * @package    abrigo
 * @subpackage filter
 * @author     Luiz Oliveira
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseEntidadesPassadasAcolhidoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'acolhido_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Acolhido'), 'add_empty' => true)),
      'nomeEntidade' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dataEntrada'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'dataSaida'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'acolhido_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Acolhido'), 'column' => 'id')),
      'nomeEntidade' => new sfValidatorPass(array('required' => false)),
      'dataEntrada'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'dataSaida'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('entidades_passadas_acolhido_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EntidadesPassadasAcolhido';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'acolhido_id'  => 'ForeignKey',
      'nomeEntidade' => 'Text',
      'dataEntrada'  => 'Date',
      'dataSaida'    => 'Date',
    );
  }
}
