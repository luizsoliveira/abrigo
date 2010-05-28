<?php

/**
 * EntidadesPassadasAcolhido form base class.
 *
 * @method EntidadesPassadasAcolhido getObject() Returns the current form's model object
 *
 * @package    abrigo
 * @subpackage form
 * @author     Luiz Oliveira
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseEntidadesPassadasAcolhidoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'acolhido_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Acolhido'), 'add_empty' => false)),
      'nomeEntidade' => new sfWidgetFormInputText(),
      'dataEntrada'  => new sfWidgetFormDate(),
      'dataSaida'    => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'acolhido_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Acolhido'))),
      'nomeEntidade' => new sfValidatorString(array('max_length' => 255)),
      'dataEntrada'  => new sfValidatorDate(),
      'dataSaida'    => new sfValidatorDate(),
    ));

    $this->widgetSchema->setNameFormat('entidades_passadas_acolhido[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EntidadesPassadasAcolhido';
  }

}
