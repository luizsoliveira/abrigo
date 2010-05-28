<?php

/**
 * Acolhido form.
 *
 * @package    abrigo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AcolhidoForm extends BaseAcolhidoForm
{
  public function configure()
  {

    /*$this->embedRelations(array(
    'Pai' => array(
      'considerNewFormEmptyFields' => array('nome', 'dataNascimento', 'endCidade', 'endEstado')
    ),
    'Mae' => array(
      'considerNewFormEmptyFields' => array('nome', 'dataNascimento', 'endCidade', 'endEstado')
    ),
    'Responsavel' => array(
      'considerNewFormEmptyFields' => array('nome', 'dataNascimento', 'endCidade', 'endEstado')
    )
  ));*/

    $this->widgetSchema['pai_id'] = new myPaiWidgetFormDoctrineChoice();
    $this->widgetSchema['mae_id'] = new myMaeWidgetFormDoctrineChoice();



  }
}
