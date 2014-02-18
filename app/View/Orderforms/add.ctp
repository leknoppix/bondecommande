<?php echo $this->Html->addCrumb(__('Gestion des bons de commande'), array('controller'=>'services','action'=>'index')); ?>
<?php echo $this->Html->addCrumb(__('Ajouter un bon de commande'), array('controller'=>'services','action'=>'add')); ?>
<div class="box-header well" data-original-title>
	<h2><i class="icon-barcode"></i> <?php echo __('Ajouter un bon de commande'); ?></h2>
</div>	
<div class="box-content">
<div class="span4">
<?php echo $this->Html->link('<i class="icon-home icon-white"></i> Retour à la page principale', '/',array('escape'=>false,'class'=>"btn btn-success")); ?>
</div>
<div class="span4"></div>
<div class="span4">
<?php echo $this->Html->link('<i class="icon-circle-arrow-left icon-white"></i> Retour à la page précédente', array('action' => 'index'),array('escape'=>false,'class'=>"btn btn-success")); ?>
</div>
<hr/>
<?php 
				echo $this->Form->create('Openform',
					array(
						'class' => 'form-horizontal',
						'inputDefaults' => 
							array(
						        'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
						        'div' => array('class' => 'control-group'),
						        'label' => array('class' => 'control-label'),
						        'between' => '<div class="controls">',
						        'after' => '</div>',
						        'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline')
						        ),
					    	)
						)
				); 
			?>	<fieldset>
			<ul class="nav nav-tabs" id="myTab">
				<li><a href="#internal"><?php echo __('Information interne'); ?></a></li>
				<li><a href="#customers"><?php echo __('Information fournisseur'); ?></a></li>
				<li><a href="#adressage"><?php echo __('Information fournitures'); ?></a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane active" id="internal">
						<?php
							//on indique le numéro provisoire du bon de commande
							echo $this->Form->input('numbers.newnum',
								array(
									'label'=>__('Numéro du bon de commande provisoire'),
									'class'=>"span8",
									'readonly'=>true,
									'value'=>$numbers['Numberorder']['newnum']
								)
							);
						?>
						<?php 
							echo $this->Form->input('name',
								array(
									'label'=>__('Nom du bon de commande'),
									'class'=>"span8"
								)
							);
						?>
						<?php
							echo $this->Form->input('date',
								array(
									'label'=>__('Date de la demande'),
									'class'=>"span8 datepicker",
									'value'=>date('d-m-Y')
								)
							);
						?>
						<?php 
							echo $this->Form->input('service_id',
								array(
									'label'=>__('Nom du service demandant'),
									'class'=>"span8"
								)
							);
						?>
				</div>
				<div class="tab-pane" id="customers">
					<table border="0" class="span12" cellspaccing="0" cellspadding="0">
						<tr>
							<td class=""><?php
								echo $this->Form->input('customer_id',array(
										'label'=>__('Nom du fournisseur'),
										'class'=>"span8"
									)
								);
							?></td>
							<td>Ajouter fournisseur</td>
						</tr>
					</table>
				</div>
			</div>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>