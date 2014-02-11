<?php echo $this->Html->addCrumb(__('Gestion des fournisseurs'), array('controller'=>'customers','action'=>'index')); ?>
<div class="box-header well" data-original-title>
	<h2><i class="icon-camera"></i> <?php echo __('Gestion des fournisseurs'); ?></h2>
</div>	
<div class="box-content">
<div class="span4">
<?php echo $this->Html->link('<i class="icon-home icon-white"></i> Retour à la page principale', '/',array('escape'=>false,'class'=>"btn btn-success")); ?>
</div>
<div class="span4"></div>
<div class="span4">
<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> Ajouter un nouvel fournisseur', array('action' => 'add'),array('escape'=>false,'class'=>"btn btn-success")); ?>
</div>
<hr/>
	<table class="table table-striped table-bordered bootstrap-datatable datatable">
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
		<td><?php echo $customer['Customer']['name']; ?></td>
		<td><?php echo $customer['Customer']['city']; ?></td>
		<td>
			<?php echo $this->Html->link('<i class="icon-edit icon-white"></i> '.__('Edition'), array('action' => 'edit', $customer['Customer']['id']),array('escape'=>false,'class'=>"btn btn-info")); ?>
		</td>
		<td>
			<?php echo $this->Form->postLink('<i class="icon-trash icon-white"></i> '.__('Suppression'), array('action' => 'delete', $customer['Customer']['id']), array('escape'=>false,'class'=>"btn btn-danger"), __('Êtes-vous sûr de supprimer l\'entrée n° # %s?', $customer['Customer']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>