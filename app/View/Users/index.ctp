<?php echo $this->Html->addCrumb(__('Gestion des membres'), array('controller' => 'users', 'action' => 'index')); ?>
<div class="title">
	<h2><i class="icon-white icon-user"></i>&nbsp;&nbsp;<?php echo __('Gestion des utilisateurs'); ?></h2>
</div>	
<div class="action">
	<table class="w100">
		<tr>
			<td class="w50">
				<?php echo $this->Html->link('<i class="icon-home icon-white"></i> ' . __('Retour à la page principale'), '/', array('escape' => false, 'class' => "btn btn-info")); ?>
			</td>
			<td class="w50">
				<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> ' . __('Ajouter un nouvel utilisateur'), array('action' => 'add'), array('escape' => false, 'class' => "btn btn-info")); ?>
			</td>
		</tr>
	</table>
	<div class="cb"></div>
	<table class="users w100">
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
			<td class="texte"><?php echo h($user['User']['lastname']); ?>&nbsp;</td>
			<td class="texte"><?php echo h($user['User']['firstname']); ?>&nbsp;</td>
			<td class="texte"><?php echo h($user['User']['username']); ?>&nbsp;</td>
			<td class="texte"><?php echo h($user['User']['email']); ?>&nbsp;</td>
			<td class="texte"><?php echo h($user['User']['phone_office']); ?>&nbsp;</td>
			<td class="texte"><?php echo h($user['User']['phone_mobile']); ?>&nbsp;</td>
			<td>
				<?php
					echo $this->Html->link('<i class="icon-edit icon-white"></i>&nbsp;&nbsp;' . __('Edition'), array('action' => 'edit', $user['User']['id']), array('escape' => false, 'class' => "btn btn-info"));
				?>
			</td>
			<td>
				<?php
					echo $this->Form->postLink('<i class="icon-trash icon-white"></i>&nbsp;&nbsp;' . __('Suppression'), array('action' => 'delete', $user['User']['id']), array('escape' => false, 'class' => "btn btn-danger"), __('Êtes-vous sûr de supprimer l\'entrée %s?', $user['User']['lastname'] . ' ' . $user['User']['firstname']));
				?>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
	</table>
</div>