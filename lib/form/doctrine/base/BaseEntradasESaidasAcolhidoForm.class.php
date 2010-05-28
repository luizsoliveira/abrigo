<?php

/**
 * EntradasESaidasAcolhido form base class.
 *
 * @method EntradasESaidasAcolhido getObject() Returns the current form's model object
 *
 * @package    abrigo
 * @subpackage form
 * @author     Luiz Oliveira
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseEntradasESaidasAcolhidoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'acolhido_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Acolhido'), 'add_empty' => false)),
      'mae_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mae'), 'add_empty' => true)),
      'pai_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pai'), 'add_empty' => true)),
      'responsavel_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Responsavel'), 'add_empty' => true)),
      'voluntario_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Voluntario'), 'add_empty' => true)),
      'padrinho_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Padrinho'), 'add_empty' => true)),
      'dataSaida'           => new sfWidgetFormDateTime(),
      'dataPrevistaRetorno' => new sfWidgetFormDateTime(),
      'dataRetorno'         => new sfWidgetFormDateTime(),
      'observacoes'         => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'acolhido_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Acolhido'))),
      'mae_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Mae'), 'required' => false)),
      'pai_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Pai'), 'required' => false)),
      'responsavel_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Responsavel'), 'required' => false)),
      'voluntario_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Voluntario'), 'required' => false)),
      'padrinho_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Padrinho'), 'required' => false)),
      'dataSaida'           => new sfValidatorDateTime(),
      'dataPrevistaRetorno' => new sfValidatorDateTime(),
      'dataRetorno'         => new sfValidatorDateTime(array('required' => false)),
      'observacoes'         => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('entradas_e_saidas_acolhido[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EntradasESaidasAcolhido';
  }

}
