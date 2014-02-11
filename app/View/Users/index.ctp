<?php echo $this->Html->addCrumb(__('Gestion des membres'), array('controller'=>'users','action'=>'index')); ?>
<div class="box-header well" data-original-title>
	<h2><i class="icon-user"></i> <?php echo __('Gestion des utilisateurs'); ?></h2>
</div>	
<div class="box-content">
<div class="span4">
<?php echo $this->Html->link('<i class="icon-home icon-white"></i> '.__('Retour à la page principale'), '/',array('escape'=>false,'class'=>"btn btn-success")); ?>
</div>
<div class="span4"></div>
<div class="span4">
<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('Ajouter un nouvel utilisateur'), array('action' => 'add'),array('escape'=>false,'class'=>"btn btn-success")); ?>
</div>
<hr/>
	<table class="table table-striped table-bordered bootstrap-datatable datatable">
	<thead>
		<tr>
				<th><?php echo __('Nom'); ?></th>
				<th><?php echo __('Prénom'); ?></th>
				<th><?php echo __('Nom d\'utilisateur'); ?></th>
				<th><?php echo __('Adresse mail'); ?></th>
				<th><?php echo __('Fixe'); ?></th>
				<th><?php echo __('Mobile'); ?></th>
				<th><?php echo __('Edition'); ?></th>
				<th><?php echo __('Suppression'); ?></th>
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
				<?php echo $this->Html->link('<i class="icon-edit icon-white"></i>'.__('Edition'), array('action' => 'edit', $user['User']['id']),array('escape'=>false,'class'=>"btn btn-info")); ?>
			</td>
			<td>
				<?php echo $this->Form->postLink('<i class="icon-trash icon-white"></i>'.__('Suppression'), array('action' => 'delete', $user['User']['id']), array('escape'=>false,'class'=>"btn btn-danger"), __('Êtes-vous sûr de supprimer l\'entrée n° # %s?', $user['User']['name'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
	</table>
</div>