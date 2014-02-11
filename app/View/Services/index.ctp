<?php echo $this->Html->addCrumb(__('Gestion des services'), array('controller'=>'services','action'=>'index')); ?>
<div class="box-header well" data-original-title>
	<h2><i class="icon-wrench"></i> <?php echo __('Gestion des services'); ?></h2>
</div>	
<div class="box-content">
<div class="span4">
<?php echo $this->Html->link('<i class="icon-home icon-white"></i> '.__('Retour à la page principale'), '/',array('escape'=>false,'class'=>"btn btn-success")); ?>
</div>
<div class="span4"></div>
<div class="span4">
<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('Ajouter un nouveau service'), array('action' => 'add'),array('escape'=>false,'class'=>"btn btn-success")); ?>
</div>
<hr/>
	<table class="table table-striped table-bordered bootstrap-datatable datatable">
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
			<td><?php echo $service['Service']['name']; ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link('<i class="icon-edit icon-white"></i> '.__('Edition'), array('action' => 'edit', $service['Service']['id']),array('escape'=>false,'class'=>"btn btn-info")); ?>
			</td>
			<td>
				<?php echo $this->Form->postLink('<i class="icon-trash icon-white"></i> '.__('Suppression'), array('action' => 'delete', $service['Service']['id']), array('escape'=>false,'class'=>"btn btn-danger"), __('Êtes-vous sûr de supprimer l\'entrée n° # %s?', $service['Service']['id'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
	</table>
</div>
