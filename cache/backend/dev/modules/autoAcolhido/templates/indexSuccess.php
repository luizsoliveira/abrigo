<?php use_helper('I18N', 'Date') ?>
<?php include_partial('acolhido/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Acolhidos', array(), 'messages') ?></h1>

  <?php include_partial('acolhido/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('acolhido/list_header', array('pager' => $pager)) ?>
  </div>

  <div id="sf_admin_bar">
    <?php include_partial('acolhido/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <form action="<?php echo url_for('acolhido_collection', array('action' => 'batch')) ?>" method="post">
    <?php include_partial('acolhido/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    <ul class="sf_admin_actions">
      <?php include_partial('acolhido/list_batch_actions', array('helper' => $helper)) ?>
      <?php include_partial('acolhido/list_actions', array('helper' => $helper)) ?>
    </ul>
    </form>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('acolhido/list_footer', array('pager' => $pager)) ?>
  </div>
</div>
