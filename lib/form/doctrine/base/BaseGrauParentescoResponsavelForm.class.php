<?php

/**
 * GrauParentescoResponsavel form base class.
 *
 * @method GrauParentescoResponsavel getObject() Returns the current form's model object
 *
 * @package    abrigo
 * @subpackage form
 * @author     Luiz Oliveira
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseGrauParentescoResponsavelForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'    => new sfWidgetFormInputHidden(),
      'nome'  => new sfWidgetFormInputText(),
      'ordem' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'    => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'nome'  => new sfValidatorString(array('max_length' => 255)),
      'ordem' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('grau_parentesco_responsavel[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'GrauParentescoResponsavel';
  }

}
