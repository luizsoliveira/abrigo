<?php
/**
 * Acolhido filter form.
 *
 * @package    abrigo
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AcolhidoFormFilter extends BaseAcolhidoFormFilter
{
  public function configure()
  {


    $this->widgetSchema['pai_id'] = new myPaiWidgetFormDoctrineChoice();
    $this->widgetSchema['mae_id'] = new myMaeWidgetFormDoctrineChoice();


  }
}
?>
