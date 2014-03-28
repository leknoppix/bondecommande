<?php echo $this->Html->addCrumb(__('Gestion des services'), array('controller' => 'services', 'action' => 'index')); ?>
<div class="title">
	<h2><i class="icon-white icon-wrench"></i>&nbsp;&nbsp;<?php echo __('Gestion des services'); ?></h2>
</div>	
<div class="action">
	<table class="w100">
		<tr>
			<td class="w50">
				<?php echo $this->Html->link('<i class="icon-home icon-white"></i>&nbsp;&nbsp;' . __('Retour à la page principale'), '/', array('escape' => false, 'class' => "btn btn-info")); ?>
			</td>
			<td class="w50">
				<?php echo $this->Html->link('<i class="icon-plus icon-white"></i>&nbsp;&nbsp;' . __('Ajouter un nouveau service'), array('action' => 'add'), array('escape' => false, 'class' => "btn btn-info")); ?>
			</td>
		</tr>
	</table>
	<div class="cb"></div>
	<table class="services w100">
		<thead>
			<tr>
					<th><?php echo __('Nom du service'); ?></th>
					<th><?php echo __('Edition'); ?></th>
					<th><?php echo __('Suppression'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($services as $service): ?>
			<tr>
				<td class="texte"><?php echo $service['Service']['name']; ?></td>
				<td>
					<?php echo $this->Html->link('<i class="icon-edit icon-white"></i>&nbsp;&nbsp;' . __('Edition'), array('action' => 'edit', $service['Service']['id']), array('escape' => false, 'class' => "btn btn-info")); ?>
				</td>
				<td>
					<?php echo $this->Form->postLink('<i class="icon-trash icon-white"></i>&nbsp;&nbsp;' . __('Suppression'), array('action' => 'delete', $service['Service']['id']), array('escape' => false, 'class' => "btn btn-danger"), __('Êtes-vous sûr de supprimer l\'entrée %s?', $service['Service']['name'])); ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>