<?php echo $this->Html->addCrumb(__('Gestion des bons de commande'), array('controller'=>'services','action'=>'index')); ?>
<?php echo $this->Html->addCrumb(__('Ajouter un bon de commande'), array('controller'=>'orderforms','action'=>'add')); ?>
<div class="title">
	<h2><i class="icon-white icon-barcode"></i>&nbsp;&nbsp;<?php echo __('Ajouter un bon de commande'); ?></h2>
</div>	
<div class="action">
	<table class="w100">
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
									'value'=>$numbers['Numberorder']['newnum'],
									'class'=>'w30'
								)
							);
						?>
						<?php 
							echo $this->Form->input('name',
								array(
									'label'=>__('Nom du bon de commande'),
									'class'=>'w30'
								)
							);
						?>
						<?php
							echo $this->Form->input('date',
								array(
									'label'=>__('Date de la demande'),
									'value'=>date('d/m/Y'),
									'class'=>'datepicker w30'
								)
							);
						?>
						<?php 
							echo $this->Form->input('service_id',
								array(
									'label'=>__('Nom du service demandant'),
									'class'=>'w30'
								)
							);
						?>
				</div>
				<div class="tab-pane" id="customers">
					<?php
						echo $this->Form->input('customer_id',array(
								'label'=>__('Nom du fournisseur'),
								'class'=>'w30'
							)
						);
					?>
					<p><?php echo $this->Html->link('<i class="icon-white icon-plus-sign"></i>&nbsp;&nbsp;'.__('Ajouter un fournisseur'),array('controller'=>'customers','action'=>'addiframe'),array('escape'=>false,'class'=>'fancybox fancybox.iframe btn btn_add w30')); ?></p>
				</div>
				<div class="tab-pane" id="products">
					<div class="orderforms">
						<div class="head w100">
							<div class="w58 inline">Nom du produit</div>
							<div class="w10 inline">Quantité</div>
							<div class="w10 inline">Prix en HT</div>
							<div class="w10 inline">TVA</div>
							<div class="w10 inline">Total TTC</div>
						</div>
						<div class="cb"></div>
						<div class="body-0 w100">
							<div class="w58 inline"><?php 
										echo $this->Form->input('0.products',
											array(
												'label'=>false,
												'div'=>false,
												'type'=>'text',
												'class'=>'w99 autocomplete'
											)
										);
										echo $this->Form->input('0.products_id',
											array(
												'label'=>false,
												'div'=>false,
												'type'=>'hidden',
												'value'=>'0',
											)
										);
									?>
							</div>
							<div class="w10 inline">
									<?php 
										echo $this->Form->input('0.quantite',
											array(
												'label'=>false,
												'div'=>false,
												'type'=>'text',
												'class'=>'w99 right calcul qtt',
												'value'=>0
											)
										);
									?>
							</div>
							<div class="w10 inline">
									<?php 
										echo $this->Form->input('0.prix',
											array(
												'label'=>false,
												'div'=>false,
												'type'=>'text',
												'class'=>'w99 right calcul prixht',
												'value'=>0
											)
										);
									?>
							</div>
							<div class="w10 inline">
									<?php 
										echo $this->Form->input('0.tva',
											array(
												'label'=>false,
												'div'=>false,
												'type'=>'text',
												'class'=>'w99 right calcul tva',
												'value'=>0
											)
										);
									?>
							</div>
							<div class="w10 inline">
									<?php 
										echo $this->Form->input('0.total',
											array(
												'label'=>false,
												'div'=>false,
												'type'=>'text',
												'class'=>'w99 right total',
												'readonly'=>true,
												'value'=>0
											)
										);
									?>
							</div>
						</div>
						<a href="#" class="addproduct">Ajouter un produit</a>
					</div>
				</div>
			</div>
	<div class="cb"></div>
	<?php echo $this->Form->end(array('label'=>__('Ajouter ce bon de commande'),'class'=>'btn btn-primary submit w100')); ?>
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