<?php echo $this->Html->addCrumb(__('Gestion des bons de commande'), array('controller'=>'services','action'=>'index')); ?>
<?php echo $this->Html->addCrumb(__('Ajouter un bon de commande'), array('controller'=>'services','action'=>'add')); ?>
<div class="title">
	<h2><i class="icon-white icon-barcode"></i>&nbsp;&nbsp;<?php echo __('Ajouter un bon de commande'); ?></h2>
</div>	
<div class="action">
	<table>
		<tr>
			<td>
				<?php echo $this->Html->link('<i class="icon-home icon-white"></i>&nbsp;&nbsp;'.__('Retour à la page principale'), '/',array('escape'=>false,'class'=>"btn btn-info")); ?>
			</td>
			<td>
				<?php echo $this->Html->link('<i class="icon-circle-arrow-left icon-white"></i>&nbsp;&nbsp;'.__('Retour à la page précédente'), array('action' => 'index'),array('escape'=>false,'class'=>"btn btn-info")); ?>
			</td>
		</tr>
	</table>
	<div class="cb"></div>
	<?php 
				echo $this->Form->create('Openform'); 
			?>
			<div id="tabs" class="orderform">
				<ul class="tabs">
					<li><a href="#internal"><?php echo __('Information interne'); ?></a></li>
					<li><a href="#customers"><?php echo __('Information fournisseur'); ?></a></li>
					<li><a href="#products"><?php echo __('Information fournitures'); ?></a></li>
				</ul>
				<div class="cb"></div>
				<div class="tab-pane active" id="internal">
						<?php
							//on indique le numéro provisoire du bon de commande
							echo $this->Form->input('numbers.newnum',
								array(
									'label'=>__('Numéro du bon de commande provisoire'),
									'readonly'=>true,
									'value'=>$numbers['Numberorder']['newnum']
								)
							);
						?>
						<?php 
							echo $this->Form->input('name',
								array(
									'label'=>__('Nom du bon de commande')
								)
							);
						?>
						<?php
							echo $this->Form->input('date',
								array(
									'label'=>__('Date de la demande'),
									'value'=>date('d/m/Y'),
									'class'=>'datepicker'
								)
							);
						?>
						<?php 
							echo $this->Form->input('service_id',
								array(
									'label'=>__('Nom du service demandant')
								)
							);
						?>
				</div>
				<div class="tab-pane" id="customers">
					<?php
						echo $this->Form->input('customer_id',array(
								'label'=>__('Nom du fournisseur')
							)
						);
					?>
					<p><?php echo $this->Html->link('<i class="icon-white icon-plus-sign"></i>&nbsp;&nbsp;'.__('Ajouter un fournisseur'),array('controller'=>'customers','action'=>'addiframe'),array('escape'=>false,'class'=>'fancybox fancybox.iframe btn btn_add')); ?></p>
				</div>
				<div class="tab-pane" id="products">
					<table class="orderforms">
						<thead>
						<tr>
							<th class="w70">Nom du produit</th>
							<th class="w15">Quantité</th>
							<th class="w15">Prix en HT</th>
						</tr>
						</thead>
						<tbody>
							<tr>
								<td class="w70">
									<?php 
										echo $this->Form->input('0.products',
											array(
												'label'=>false,
												'div'=>false,
												'type'=>'text'
											)
										);
									?>
								</td>
								<td class="w15">
									<?php 
										echo $this->Form->input('0.quantite',
											array(
												'label'=>false,
												'div'=>false,
												'type'=>'text'
											)
										);
									?>
								</td>
								<td class="w15">
									<?php 
										echo $this->Form->input('0.quantite',
											array(
												'label'=>false,
												'div'=>false,
												'type'=>'text'
											)
										);
									?>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
	<div class="cb"></div>
	<?php echo $this->Form->end(array('label'=>__('Ajouter ce bon de commande'),'class'=>'btn btn-primary submit')); ?>
</div>
<?php
	$this->Html->css('pickadate/themes/default.css', null, array('inline' => false));
	$this->Html->css('pickadate/themes/default.date.css', null, array('inline' => false));
	$this->Html->css('fancy/jquery.fancybox.css', null, array('inline' => false));
	$this->Html->script('pickadate/picker.js', array('inline' => false));
	$this->Html->script('pickadate/picker.date.js', array('inline' => false));
	$this->Html->script('fancy/jquery.fancybox.js', array('inline' => false));
	$this->Html->script('orderforms.js', array('inline' => false));
?>