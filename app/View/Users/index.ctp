<?php echo $this->Html->addCrumb('Gestion des membres', array('controller'=>'users','action'=>'index')); ?>
<div class="box-header well" data-original-title>
	<h2><i class="icon-user"></i> <?php echo __('Gestion des utilisateurs'); ?></h2>
</div>	
<div class="box-content">
<div class="span4">
<?php echo $this->Html->link('<i class="icon-home icon-white"></i> Retour à la page principale', '/',array('escape'=>false,'class'=>"btn btn-success")); ?>
</div>
<div class="span4"></div>
<div class="span4">
<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> Ajouter un nouvel utilisateur', array('action' => 'add'),array('escape'=>false,'class'=>"btn btn-success")); ?>
</div>
<hr/>
	<table class="table table-striped table-bordered bootstrap-datatable datatable">
	<thead>
		<tr>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Nom d'utilisateur</th>
				<th>Adresse mail</th>
				<th>Fixe</th>
				<th>Mobile</th>
				<th>Edition</th>
				<th>Suppression</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $user): ?>
		<tr>
			<td><?php echo h($user['User']['nom']); ?>&nbsp;</td>
			<td><?php echo h($user['User']['prenom']); ?>&nbsp;</td>
			<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
			<td><?php echo h($user['User']['mail']); ?>&nbsp;</td>
			<td><?php echo h($user['User']['telephone_fixe']); ?>&nbsp;</td>
			<td><?php echo h($user['User']['telephone_mobile']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link('<i class="icon-edit icon-white"></i>'.__('Edit'), array('action' => 'edit', $user['User']['id']),array('escape'=>false,'class'=>"btn btn-info")); ?>
			</td>
			<td>
				<?php echo $this->Form->postLink('<i class="icon-trash icon-white"></i>'.__('Delete'), array('action' => 'delete', $user['User']['id']), array('escape'=>false,'class'=>"btn btn-danger"), __('Are you sure you want to delete %s?', $user['User']['name'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
	</table>
</div>