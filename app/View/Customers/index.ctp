<?php echo $this->Html->addCrumb(__('Gestion des fournisseurs'), array('controller'=>'customers','action'=>'index')); ?>
<div class="title">
	<h2><i class="icon-white icon-camera"></i>&nbsp;&nbsp;<?php echo __('Gestion des fournisseurs'); ?></h2>
</div>
<div class="action">
	<table class="w100">
		<tr>
			<td class="w50">
				<?php echo $this->Html->link('<i class="icon-white icon-home"></i>&nbsp;&nbsp;'.__('Retour à la page principale'), '/',array('escape'=>false,'class'=>"btn btn-info")); ?>
			</td>
			<td class="w50">
				<?php echo $this->Html->link('<i class="icon-white icon-plus"></i>&nbsp;&nbsp;'.__('Ajouter un nouvel fournisseur'), array('action' => 'add'),array('escape'=>false,'class'=>"btn btn-info")); ?>
			</td>
		</tr>
	</table>
	<div class="cb"></div>
	<table class="customers w100">
		<thead>
			<tr>
				<th><?php echo __('Nom du fournisseur'); ?></th>
				<th><?php echo __('Ville'); ?></th>
				<th><?php echo __('Edition'); ?></th>
				<th><?php echo __('Suppression'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($customers as $customer): ?>
			<tr>
				<td class="texte"><?php echo $customer['Customer']['name']; ?></td>
				<td class="texte"><?php echo $customer['Customer']['city']; ?></td>
				<td>
					<?php echo $this->Html->link('<i class="icon-white icon-edit"></i>&nbsp;&nbsp;'.__('Edition'), array('action' => 'edit', $customer['Customer']['id']),array('escape'=>false,'class'=>"btn btn-info")); ?>
				</td>
				<td>
					<?php echo $this->Form->postLink('<i class="icon-white icon-trash"></i>&nbsp;&nbsp;'.__('Suppression'), array('action' => 'delete', $customer['Customer']['id']), array('escape'=>false,'class'=>"btn btn-danger"), __('Êtes-vous sûr de supprimer l\'entrée %s?', $customer['Customer']['name'])); ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>