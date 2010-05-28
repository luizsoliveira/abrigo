<td colspan="2">
  <?php echo __('%%nome%% - %%situacao%%', array('%%nome%%' => link_to($acolhido->getNome(), 'acolhido_edit', $acolhido), '%%situacao%%' => $acolhido->getSituacao()), 'messages') ?>
</td>
