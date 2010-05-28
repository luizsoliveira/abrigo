<?php

/**
 * Acolhido form base class.
 *
 * @method Acolhido getObject() Returns the current form's model object
 *
 * @package    abrigo
 * @subpackage form
 * @author     Luiz Oliveira
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseAcolhidoForm extends PessoaForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['dataIngresso'] = new sfWidgetFormDate();
    $this->validatorSchema['dataIngresso'] = new sfValidatorDate(array('required' => false));

    $this->widgetSchema   ['motivoIngresso_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MotivoIngresso'), 'add_empty' => false));
    $this->validatorSchema['motivoIngresso_id'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MotivoIngresso')));

    $this->widgetSchema   ['processosRelacionados'] = new sfWidgetFormTextarea();
    $this->validatorSchema['processosRelacionados'] = new sfValidatorString(array('max_length' => 4000, 'required' => false));

    $this->widgetSchema   ['zona'] = new sfWidgetFormInputText();
    $this->validatorSchema['zona'] = new sfValidatorString(array('max_length' => 100, 'required' => false));

    $this->widgetSchema   ['distrito'] = new sfWidgetFormInputText();
    $this->validatorSchema['distrito'] = new sfValidatorString(array('max_length' => 100, 'required' => false));

    $this->widgetSchema   ['livro'] = new sfWidgetFormInputText();
    $this->validatorSchema['livro'] = new sfValidatorString(array('max_length' => 100, 'required' => false));

    $this->widgetSchema   ['folha'] = new sfWidgetFormInputText();
    $this->validatorSchema['folha'] = new sfValidatorString(array('max_length' => 100, 'required' => false));

    $this->widgetSchema   ['termo'] = new sfWidgetFormInputText();
    $this->validatorSchema['termo'] = new sfValidatorString(array('max_length' => 100, 'required' => false));

    $this->widgetSchema   ['documentoIdentidade'] = new sfWidgetFormInputText();
    $this->validatorSchema['documentoIdentidade'] = new sfValidatorString(array('max_length' => 100, 'required' => false));

    $this->widgetSchema   ['cpf'] = new sfWidgetFormInputText();
    $this->validatorSchema['cpf'] = new sfValidatorString(array('max_length' => 100, 'required' => false));

    $this->widgetSchema   ['titulo'] = new sfWidgetFormInputText();
    $this->validatorSchema['titulo'] = new sfValidatorString(array('max_length' => 100, 'required' => false));

    $this->widgetSchema   ['carteiraTrabalho'] = new sfWidgetFormInputText();
    $this->validatorSchema['carteiraTrabalho'] = new sfValidatorString(array('max_length' => 100, 'required' => false));

    $this->widgetSchema   ['possuiDeficiencia'] = new sfWidgetFormChoice(array('choices' => array('Sim' => 'Sim', 'Não' => 'Não')));
    $this->validatorSchema['possuiDeficiencia'] = new sfValidatorChoice(array('choices' => array(0 => 'Sim', 1 => 'Não'), 'required' => false));

    $this->widgetSchema   ['descricaoDeficiencia'] = new sfWidgetFormTextarea();
    $this->validatorSchema['descricaoDeficiencia'] = new sfValidatorString(array('max_length' => 4000, 'required' => false));

    $this->widgetSchema   ['usoMedicamentoControlado'] = new sfWidgetFormChoice(array('choices' => array('Sim' => 'Sim', 'Não' => 'Não')));
    $this->validatorSchema['usoMedicamentoControlado'] = new sfValidatorChoice(array('choices' => array(0 => 'Sim', 1 => 'Não'), 'required' => false));

    $this->widgetSchema   ['descricaoMedicamentoControlado'] = new sfWidgetFormTextarea();
    $this->validatorSchema['descricaoMedicamentoControlado'] = new sfValidatorString(array('max_length' => 4000, 'required' => false));

    $this->widgetSchema   ['mae_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mae'), 'add_empty' => true));
    $this->validatorSchema['mae_id'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Mae'), 'required' => false));

    $this->widgetSchema   ['pai_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pai'), 'add_empty' => true));
    $this->validatorSchema['pai_id'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Pai'), 'required' => false));

    $this->widgetSchema   ['responsavel_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Responsavel'), 'add_empty' => true));
    $this->validatorSchema['responsavel_id'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Responsavel'), 'required' => false));

    $this->widgetSchema   ['responsavelGrauParentesco_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('GrauParentescoResponsavel'), 'add_empty' => true));
    $this->validatorSchema['responsavelGrauParentesco_id'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('GrauParentescoResponsavel'), 'required' => false));

    $this->widgetSchema   ['sumarioSocial'] = new sfWidgetFormTextarea();
    $this->validatorSchema['sumarioSocial'] = new sfValidatorString(array('max_length' => 4000, 'required' => false));

    $this->widgetSchema   ['sumarioPsicologico'] = new sfWidgetFormTextarea();
    $this->validatorSchema['sumarioPsicologico'] = new sfValidatorString(array('max_length' => 4000, 'required' => false));

    $this->widgetSchema   ['dataDesligamento'] = new sfWidgetFormDate();
    $this->validatorSchema['dataDesligamento'] = new sfValidatorDate(array('required' => false));

    $this->widgetSchema   ['motivoDesligamento_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MotivoDesligamento'), 'add_empty' => true));
    $this->validatorSchema['motivoDesligamento_id'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MotivoDesligamento'), 'required' => false));

    $this->widgetSchema->setNameFormat('acolhido[%s]');
  }

  public function getModelName()
  {
    return 'Acolhido';
  }

}
