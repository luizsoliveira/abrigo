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

  }
}
