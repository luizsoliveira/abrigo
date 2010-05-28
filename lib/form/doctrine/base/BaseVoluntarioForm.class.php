<?php

/**
 * Voluntario form base class.
 *
 * @method Voluntario getObject() Returns the current form's model object
 *
 * @package    abrigo
 * @subpackage form
 * @author     Luiz Oliveira
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseVoluntarioForm extends PessoaForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['endLogradouro'] = new sfWidgetFormInputText();
    $this->validatorSchema['endLogradouro'] = new sfValidatorString(array('max_length' => 255, 'required' => false));

    $this->widgetSchema   ['endNumero'] = new sfWidgetFormInputText();
    $this->validatorSchema['endNumero'] = new sfValidatorString(array('max_length' => 50, 'required' => false));

    $this->widgetSchema   ['endComplemento'] = new sfWidgetFormInputText();
    $this->validatorSchema['endComplemento'] = new sfValidatorString(array('max_length' => 50, 'required' => false));

    $this->widgetSchema   ['endBairro'] = new sfWidgetFormInputText();
    $this->validatorSchema['endBairro'] = new sfValidatorString(array('max_length' => 100, 'required' => false));

    $this->widgetSchema   ['endCidade'] = new sfWidgetFormInputText();
    $this->validatorSchema['endCidade'] = new sfValidatorString(array('max_length' => 255, 'required' => false));

    $this->widgetSchema   ['endEstado'] = new sfWidgetFormChoice(array('choices' => array('AC' => 'AC', 'AL' => 'AL', 'AP' => 'AP', 'AM' => 'AM', 'BA' => 'BA', 'CE' => 'CE', 'DF' => 'DF', 'GO' => 'GO', 'ES' => 'ES', 'MA' => 'MA', 'MT' => 'MT', 'MS' => 'MS', 'MG' => 'MG', 'PA' => 'PA', 'PB' => 'PB', 'PR' => 'PR', 'PE' => 'PE', 'PI' => 'PI', 'RJ' => 'RJ', 'RN' => 'RN', 'RS' => 'RS', 'RO' => 'RO', 'RR' => 'RR', 'SP' => 'SP', 'SC' => 'SC', 'SE' => 'SE', 'TO' => 'TO')));
    $this->validatorSchema['endEstado'] = new sfValidatorChoice(array('choices' => array(0 => 'AC', 1 => 'AL', 2 => 'AP', 3 => 'AM', 4 => 'BA', 5 => 'CE', 6 => 'DF', 7 => 'GO', 8 => 'ES', 9 => 'MA', 10 => 'MT', 11 => 'MS', 12 => 'MG', 13 => 'PA', 14 => 'PB', 15 => 'PR', 16 => 'PE', 17 => 'PI', 18 => 'RJ', 19 => 'RN', 20 => 'RS', 21 => 'RO', 22 => 'RR', 23 => 'SP', 24 => 'SC', 25 => 'SE', 26 => 'TO'), 'required' => false));

    $this->widgetSchema   ['endCep'] = new sfWidgetFormInputText();
    $this->validatorSchema['endCep'] = new sfValidatorString(array('max_length' => 9, 'required' => false));

    $this->widgetSchema   ['endProfLogradouro'] = new sfWidgetFormInputText();
    $this->validatorSchema['endProfLogradouro'] = new sfValidatorString(array('max_length' => 255, 'required' => false));

    $this->widgetSchema   ['endProfNumero'] = new sfWidgetFormInputText();
    $this->validatorSchema['endProfNumero'] = new sfValidatorString(array('max_length' => 50, 'required' => false));

    $this->widgetSchema   ['endProfComplemento'] = new sfWidgetFormInputText();
    $this->validatorSchema['endProfComplemento'] = new sfValidatorString(array('max_length' => 50, 'required' => false));

    $this->widgetSchema   ['endProfBairro'] = new sfWidgetFormInputText();
    $this->validatorSchema['endProfBairro'] = new sfValidatorString(array('max_length' => 100, 'required' => false));

    $this->widgetSchema   ['endProfCidade'] = new sfWidgetFormInputText();
    $this->validatorSchema['endProfCidade'] = new sfValidatorString(array('max_length' => 255, 'required' => false));

    $this->widgetSchema   ['endProfEstado'] = new sfWidgetFormChoice(array('choices' => array('AC' => 'AC', 'AL' => 'AL', 'AP' => 'AP', 'AM' => 'AM', 'BA' => 'BA', 'CE' => 'CE', 'DF' => 'DF', 'GO' => 'GO', 'ES' => 'ES', 'MA' => 'MA', 'MT' => 'MT', 'MS' => 'MS', 'MG' => 'MG', 'PA' => 'PA', 'PB' => 'PB', 'PR' => 'PR', 'PE' => 'PE', 'PI' => 'PI', 'RJ' => 'RJ', 'RN' => 'RN', 'RS' => 'RS', 'RO' => 'RO', 'RR' => 'RR', 'SP' => 'SP', 'SC' => 'SC', 'SE' => 'SE', 'TO' => 'TO')));
    $this->validatorSchema['endProfEstado'] = new sfValidatorChoice(array('choices' => array(0 => 'AC', 1 => 'AL', 2 => 'AP', 3 => 'AM', 4 => 'BA', 5 => 'CE', 6 => 'DF', 7 => 'GO', 8 => 'ES', 9 => 'MA', 10 => 'MT', 11 => 'MS', 12 => 'MG', 13 => 'PA', 14 => 'PB', 15 => 'PR', 16 => 'PE', 17 => 'PI', 18 => 'RJ', 19 => 'RN', 20 => 'RS', 21 => 'RO', 22 => 'RR', 23 => 'SP', 24 => 'SC', 25 => 'SE', 26 => 'TO'), 'required' => false));

    $this->widgetSchema   ['endProfCep'] = new sfWidgetFormInputText();
    $this->validatorSchema['endProfCep'] = new sfValidatorString(array('max_length' => 9, 'required' => false));

    $this->widgetSchema   ['contatos'] = new sfWidgetFormTextarea();
    $this->validatorSchema['contatos'] = new sfValidatorString(array('max_length' => 4000, 'required' => false));

    $this->widgetSchema   ['escolaridade_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NivelEscolaridade'), 'add_empty' => true));
    $this->validatorSchema['escolaridade_id'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('NivelEscolaridade'), 'required' => false));

    $this->widgetSchema   ['profissao'] = new sfWidgetFormInputText();
    $this->validatorSchema['profissao'] = new sfValidatorString(array('max_length' => 255, 'required' => false));

    $this->widgetSchema   ['composicaoFamiliar'] = new sfWidgetFormTextarea();
    $this->validatorSchema['composicaoFamiliar'] = new sfValidatorString(array('max_length' => 4000, 'required' => false));

    $this->widgetSchema   ['preferenciaReligiosa'] = new sfWidgetFormTextarea();
    $this->validatorSchema['preferenciaReligiosa'] = new sfValidatorString(array('max_length' => 4000, 'required' => false));

    $this->widgetSchema   ['conhecimentoPrograma'] = new sfWidgetFormTextarea();
    $this->validatorSchema['conhecimentoPrograma'] = new sfValidatorString(array('max_length' => 4000, 'required' => false));

    $this->widgetSchema   ['disponibilidadeHorario'] = new sfWidgetFormTextarea();
    $this->validatorSchema['disponibilidadeHorario'] = new sfValidatorString(array('max_length' => 4000, 'required' => false));

    $this->widgetSchema   ['atividadeDesenvolvida'] = new sfWidgetFormTextarea();
    $this->validatorSchema['atividadeDesenvolvida'] = new sfValidatorString(array('max_length' => 4000, 'required' => false));

    $this->widgetSchema   ['observacao'] = new sfWidgetFormTextarea();
    $this->validatorSchema['observacao'] = new sfValidatorString(array('max_length' => 4000, 'required' => false));

    $this->widgetSchema   ['dataInscricao'] = new sfWidgetFormDate();
    $this->validatorSchema['dataInscricao'] = new sfValidatorDate(array('required' => false));

    $this->widgetSchema   ['tecnicoResponsavel'] = new sfWidgetFormInputText();
    $this->validatorSchema['tecnicoResponsavel'] = new sfValidatorString(array('max_length' => 255, 'required' => false));

    $this->widgetSchema->setNameFormat('voluntario[%s]');
  }

  public function getModelName()
  {
    return 'Voluntario';
  }

}
