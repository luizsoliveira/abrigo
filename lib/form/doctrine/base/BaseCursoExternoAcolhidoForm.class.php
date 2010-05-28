<?php

/**
 * CursoExternoAcolhido form base class.
 *
 * @method CursoExternoAcolhido getObject() Returns the current form's model object
 *
 * @package    abrigo
 * @subpackage form
 * @author     Luiz Oliveira
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseCursoExternoAcolhidoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'acolhido_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Acolhido'), 'add_empty' => true)),
      'nomeCurso'     => new sfWidgetFormInputText(),
      'descricao'     => new sfWidgetFormTextarea(),
      'nomeEscola'    => new sfWidgetFormInputText(),
      'dataConclusao' => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'acolhido_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Acolhido'), 'required' => false)),
      'nomeCurso'     => new sfValidatorString(array('max_length' => 255)),
      'descricao'     => new sfValidatorString(array('max_length' => 4000, 'required' => false)),
      'nomeEscola'    => new sfValidatorString(array('max_length' => 255)),
      'dataConclusao' => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('curso_externo_acolhido[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CursoExternoAcolhido';
  }

}
