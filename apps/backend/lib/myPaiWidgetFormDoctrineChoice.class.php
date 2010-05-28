<?
class myPaiWidgetFormDoctrineChoice extends sfWidgetFormDoctrineChoice
{

public function __construct($options = array(), $attributes = array())
  {
    $options['choices'] = array();
    $options['model'] = 'Pai';
    $options['query'] = Doctrine::getTable('Pai')->getHomens();
    $options['add_empty'] = true;

    parent::__construct($options, $attributes);
  }

}
?>
