<?php

/**
 * EntradasESaidasAcolhido filter form base class.
 *
 * @package    abrigo
 * @subpackage filter
 * @author     Luiz Oliveira
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseEntradasESaidasAcolhidoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'acolhido_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Acolhido'), 'add_empty' => true)),
      'mae_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mae'), 'add_empty' => true)),
      'pai_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pai'), 'add_empty' => true)),
      'responsavel_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Responsavel'), 'add_empty' => true)),
      'voluntario_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Voluntario'), 'add_empty' => true)),
      'padrinho_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Padrinho'), 'add_empty' => true)),
      'dataSaida'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'dataPrevistaRetorno' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'dataRetorno'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'observacoes'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'acolhido_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Acolhido'), 'column' => 'id')),
      'mae_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Mae'), 'column' => 'id')),
      'pai_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Pai'), 'column' => 'id')),
      'responsavel_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Responsavel'), 'column' => 'id')),
      'voluntario_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Voluntario'), 'column' => 'id')),
      'padrinho_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Padrinho'), 'column' => 'id')),
      'dataSaida'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'dataPrevistaRetorno' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'dataRetorno'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'observacoes'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('entradas_e_saidas_acolhido_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EntradasESaidasAcolhido';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'acolhido_id'         => 'ForeignKey',
      'mae_id'              => 'ForeignKey',
      'pai_id'              => 'ForeignKey',
      'responsavel_id'      => 'ForeignKey',
      'voluntario_id'       => 'ForeignKey',
      'padrinho_id'         => 'ForeignKey',
      'dataSaida'           => 'Date',
      'dataPrevistaRetorno' => 'Date',
      'dataRetorno'         => 'Date',
      'observacoes'         => 'Text',
    );
  }
}
