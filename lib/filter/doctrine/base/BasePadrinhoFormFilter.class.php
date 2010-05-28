<?php

/**
 * Padrinho filter form base class.
 *
 * @package    abrigo
 * @subpackage filter
 * @author     Luiz Oliveira
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BasePadrinhoFormFilter extends PessoaFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['endLogradouro'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['endLogradouro'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['endNumero'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['endNumero'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['endComplemento'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['endComplemento'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['endBairro'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['endBairro'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['endCidade'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['endCidade'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['endEstado'] = new sfWidgetFormChoice(array('choices' => array('' => '', 'AC' => 'AC', 'AL' => 'AL', 'AP' => 'AP', 'AM' => 'AM', 'BA' => 'BA', 'CE' => 'CE', 'DF' => 'DF', 'GO' => 'GO', 'ES' => 'ES', 'MA' => 'MA', 'MT' => 'MT', 'MS' => 'MS', 'MG' => 'MG', 'PA' => 'PA', 'PB' => 'PB', 'PR' => 'PR', 'PE' => 'PE', 'PI' => 'PI', 'RJ' => 'RJ', 'RN' => 'RN', 'RS' => 'RS', 'RO' => 'RO', 'RR' => 'RR', 'SP' => 'SP', 'SC' => 'SC', 'SE' => 'SE', 'TO' => 'TO')));
    $this->validatorSchema['endEstado'] = new sfValidatorChoice(array('required' => false, 'choices' => array('AC' => 'AC', 'AL' => 'AL', 'AP' => 'AP', 'AM' => 'AM', 'BA' => 'BA', 'CE' => 'CE', 'DF' => 'DF', 'GO' => 'GO', 'ES' => 'ES', 'MA' => 'MA', 'MT' => 'MT', 'MS' => 'MS', 'MG' => 'MG', 'PA' => 'PA', 'PB' => 'PB', 'PR' => 'PR', 'PE' => 'PE', 'PI' => 'PI', 'RJ' => 'RJ', 'RN' => 'RN', 'RS' => 'RS', 'RO' => 'RO', 'RR' => 'RR', 'SP' => 'SP', 'SC' => 'SC', 'SE' => 'SE', 'TO' => 'TO')));

    $this->widgetSchema   ['endCep'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['endCep'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['endProfLogradouro'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['endProfLogradouro'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['endProfNumero'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['endProfNumero'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['endProfComplemento'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['endProfComplemento'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['endProfBairro'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['endProfBairro'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['endProfCidade'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['endProfCidade'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['endProfEstado'] = new sfWidgetFormChoice(array('choices' => array('' => '', 'AC' => 'AC', 'AL' => 'AL', 'AP' => 'AP', 'AM' => 'AM', 'BA' => 'BA', 'CE' => 'CE', 'DF' => 'DF', 'GO' => 'GO', 'ES' => 'ES', 'MA' => 'MA', 'MT' => 'MT', 'MS' => 'MS', 'MG' => 'MG', 'PA' => 'PA', 'PB' => 'PB', 'PR' => 'PR', 'PE' => 'PE', 'PI' => 'PI', 'RJ' => 'RJ', 'RN' => 'RN', 'RS' => 'RS', 'RO' => 'RO', 'RR' => 'RR', 'SP' => 'SP', 'SC' => 'SC', 'SE' => 'SE', 'TO' => 'TO')));
    $this->validatorSchema['endProfEstado'] = new sfValidatorChoice(array('required' => false, 'choices' => array('AC' => 'AC', 'AL' => 'AL', 'AP' => 'AP', 'AM' => 'AM', 'BA' => 'BA', 'CE' => 'CE', 'DF' => 'DF', 'GO' => 'GO', 'ES' => 'ES', 'MA' => 'MA', 'MT' => 'MT', 'MS' => 'MS', 'MG' => 'MG', 'PA' => 'PA', 'PB' => 'PB', 'PR' => 'PR', 'PE' => 'PE', 'PI' => 'PI', 'RJ' => 'RJ', 'RN' => 'RN', 'RS' => 'RS', 'RO' => 'RO', 'RR' => 'RR', 'SP' => 'SP', 'SC' => 'SC', 'SE' => 'SE', 'TO' => 'TO')));

    $this->widgetSchema   ['endProfCep'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['endProfCep'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['contatos'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['contatos'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['escolaridade_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NivelEscolaridade'), 'add_empty' => true));
    $this->validatorSchema['escolaridade_id'] = new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('NivelEscolaridade'), 'column' => 'id'));

    $this->widgetSchema   ['profissao'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['profissao'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['composicaoFamiliar'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['composicaoFamiliar'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['preferenciaReligiosa'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['preferenciaReligiosa'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['conhecimentoPrograma'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['conhecimentoPrograma'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['interessePreliminar'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['interessePreliminar'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['observacao'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['observacao'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['dataInscricao'] = new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate()));
    $this->validatorSchema['dataInscricao'] = new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false))));

    $this->widgetSchema   ['tecnicoResponsavel'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['tecnicoResponsavel'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema->setNameFormat('padrinho_filters[%s]');
  }

  public function getModelName()
  {
    return 'Padrinho';
  }

  public function getFields()
  {
    return array_merge(parent::getFields(), array(
      'endLogradouro' => 'Text',
      'endNumero' => 'Text',
      'endComplemento' => 'Text',
      'endBairro' => 'Text',
      'endCidade' => 'Text',
      'endEstado' => 'Enum',
      'endCep' => 'Text',
      'endProfLogradouro' => 'Text',
      'endProfNumero' => 'Text',
      'endProfComplemento' => 'Text',
      'endProfBairro' => 'Text',
      'endProfCidade' => 'Text',
      'endProfEstado' => 'Enum',
      'endProfCep' => 'Text',
      'contatos' => 'Text',
      'escolaridade_id' => 'ForeignKey',
      'profissao' => 'Text',
      'composicaoFamiliar' => 'Text',
      'preferenciaReligiosa' => 'Text',
      'conhecimentoPrograma' => 'Text',
      'interessePreliminar' => 'Text',
      'observacao' => 'Text',
      'dataInscricao' => 'Date',
      'tecnicoResponsavel' => 'Text',
    ));
  }
}
