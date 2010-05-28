<td>
  <ul class="sf_admin_td_actions">
    <?php echo $helper->linkToEdit($acolhido, array(  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)) ?>
    <?php echo $helper->linkToDelete($acolhido, array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
    <li class="sf_admin_action_viewescolaridade">
      <?php echo link_to(__('Escolaridade', array(), 'messages'), 'acolhido/escolaridades?id='.$acolhido->getId(), array()) ?>
    </li>
  </ul>
</td>
