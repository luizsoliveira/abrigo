<?php

/**
 * EntradasESaidasAcolhido filter form.
 *
 * @package    abrigo
 * @subpackage filter
 * @author     Luiz Oliveira
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EntradasESaidasAcolhidoFormFilter extends BaseEntradasESaidasAcolhidoFormFilter
{
  public function configure()
  {

    $this->widgetSchema['pai_id'] = new myPaiWidgetFormDoctrineChoice();
    $this->widgetSchema['mae_id'] = new myMaeWidgetFormDoctrineChoice();

    $this->widgetSchema['situacao'] = new sfWidgetFormChoice(array('choices' => array('' => '', 'Aberto' => 'Em aberto', 'Fechado' => 'Fechado')));
    $this->validatorSchema['situacao'] =  new sfValidatorPass();

  }

  public function addSituacaoColumnQuery($query,$field,$value)
  {
    if($value == "Aberto"){
        $query->andWhere("dataRetorno is null");
    } else if($value == "Fechado") {
        $query->andWhere("dataRetorno is not null");
    }
    return $query;
  }

}
