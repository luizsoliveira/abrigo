<h1>Responsaveiss List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nome</th>
      <th>Sexo</th>
      <th>Data nascimento</th>
      <th>Data obito</th>
      <th>End logradouro</th>
      <th>End numero</th>
      <th>End complemento</th>
      <th>End bairro</th>
      <th>End cidade</th>
      <th>End estado</th>
      <th>End cep</th>
      <th>Contatos</th>
      <th>Autorizacao visita</th>
      <th>Observacao</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($responsaveiss as $responsaveis): ?>
    <tr>
      <td><a href="<?php echo url_for('reponsaveis/edit?id='.$responsaveis->getId()) ?>"><?php echo $responsaveis->getId() ?></a></td>
      <td><?php echo $responsaveis->getNome() ?></td>
      <td><?php echo $responsaveis->getSexo() ?></td>
      <td><?php echo $responsaveis->getDataNascimento() ?></td>
      <td><?php echo $responsaveis->getDataObito() ?></td>
      <td><?php echo $responsaveis->getEndLogradouro() ?></td>
      <td><?php echo $responsaveis->getEndNumero() ?></td>
      <td><?php echo $responsaveis->getEndComplemento() ?></td>
      <td><?php echo $responsaveis->getEndBairro() ?></td>
      <td><?php echo $responsaveis->getEndCidade() ?></td>
      <td><?php echo $responsaveis->getEndEstado() ?></td>
      <td><?php echo $responsaveis->getEndCep() ?></td>
      <td><?php echo $responsaveis->getContatos() ?></td>
      <td><?php echo $responsaveis->getAutorizacaoVisita() ?></td>
      <td><?php echo $responsaveis->getObservacao() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('reponsaveis/new') ?>">New</a>
