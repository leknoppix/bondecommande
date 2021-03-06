<?php echo $this->Html->addCrumb(__('Gestion des bons de commande'), array('controller' => 'orderforms', 'action' => 'index')); ?>
<?php echo $this->Html->addCrumb(__('Ajouter un bon de commande'), array('controller' => 'orderforms', 'action' => 'add')); ?>
<div class="title">
	<h2><i class="icon-white icon-barcode"></i>&nbsp;&nbsp;<?php echo __('Ajouter un bon de commande'); ?></h2>
</div>	
<div class="action">
	<table class="w100">
		<tr>
			<td>
				<?php echo $this->Html->link('<i class="icon-home icon-white"></i>&nbsp;&nbsp;' . __('Retour à la page principale'), '/', array('escape' => false, 'class' => "btn btn-info")); ?>
			</td>
			<td>
				<?php echo $this->Html->link('<i class="icon-circle-arrow-left icon-white"></i>&nbsp;&nbsp;' . __('Retour à la page précédente'), array('action' => 'index'), array('escape' => false, 'class' => "btn btn-info")); ?>
			</td>
		</tr>
	</table>
	<div class="cb"></div>
		<?php 
			echo $this->Form->create('Orderform');
		?>
			<div id="tabs" class="orderform w100">
				<ul class="tabs">
					<li><a href="#internal"><?php echo __('Information interne'); ?></a></li>
					<li><a href="#customers"><?php echo __('Information fournisseur'); ?></a></li>
					<li><a href="#products"><?php echo __('Information fournitures'); ?></a></li>
				</ul>
				<div class="cb"></div>
				<div class="tab-pane active w100" id="internal">
						<?php
							//on indique le numéro provisoire du bon de commande
							echo $this->Form->input('numbers.newnum',
								array(
									'label' => __('Numéro du bon de commande provisoire'),
									'readonly' => true,
									'value' => $numbers['Numberorder']['new_num'],
									'class' => 'w30'
								)
							);
						?>
						<?php 
							echo $this->Form->input('name',
								array(
									'label' => __('Nom du bon de commande'),
									'class' => 'w30'
								)
							);
						?>
						<?php
							echo $this->Form->input('invoice',
								array(
									'label' => __('Date de la demande'),
									'type' => 'text',
									'value' => date('d-m-Y'),
									'class' => 'datepicker w30'
								)
							);
						?>
						<?php
							echo $this->Form->input('shipped',
								array(
									'label' => __('Date de livraison souhaitée'),
									'type' => 'text',
									'value' => date('d-m-Y'),
									'class' => 'datepicker w30'
								)
							);
						?>
						<?php 
							echo $this->Form->input('service_id',
								array(
									'label' => __('Nom du service demandant'),
									'class' => 'w30'
								)
							);
						?>
						<?php
							echo $this->Form->input('shipping_address', array('label' => __('Adresse de livraison'), 'class' => 'w30', 'type' => 'textarea'));
						?>
						<div class="cb"></div>
				</div>
				<div class="tab-pane" id="customers">
					<?php
						echo $this->Form->input('customer_id', array(
								'label' => __('Nom du fournisseur'),
								'class' => 'w30'
							)
						);
					?>
					<p><?php echo $this->Html->link('<i class="icon-white icon-plus-sign"></i>&nbsp;&nbsp;' . __('Ajouter un fournisseur'), array('controller' => 'customers', 'action' => 'addiframe'), array('escape' => false, 'class' => 'fancybox fancybox.iframe btn btn_add w30')); ?></p>
				</div>
				<div class="tab-pane w100" id="products">
					<div class="orderforms w100">
						<div class="head w100">
							<div class="w55 inline"><?php echo __('Nom du produit'); ?></div>
							<div class="w10 inline"><?php echo __('Quantité'); ?></div>
							<div class="w10 inline"><?php echo __('Prix en HT'); ?></div>
							<div class="w10 inline"><?php echo __('TVA'); ?></div>
							<div class="w10 inline"><?php echo __('Total TTC'); ?></div>
						</div>
						<div class="cb"><br /><br /></div>
						<div class="body-0 w100 inline">
							<div class="w55 inline"><?php 
										echo $this->Form->input('Product.0.name',
											array(
												'label' => false,
												'div' => false,
												'type' => 'text',
												'class' => 'w99 autocomplete'
											)
										);
									?>
							</div>
							<div class="w10 inline">
									<?php 
										echo $this->Form->input('Product.0.amout',
											array(
												'label' => false,
												'div' => false,
												'type' => 'text',
												'class' => 'w99 right calcul qtt',
												'value' => 0
											)
										);
									?>
							</div>
							<div class="w10 inline">
									<?php 
										echo $this->Form->input('Product.0.price',
											array(
												'label' => false,
												'div' => false,
												'type' => 'text',
												'class' => 'w99 right calcul prixht',
												'value' => 0
											)
										);
									?>
							</div>
							<div class="w10 inline">
									<?php 
										echo $this->Form->input('Product.0.tva',
											array(
												'label' => false,
												'div' => false,
												'type' => 'text',
												'class' => 'w99 right calcul tva',
												'value' => 0
											)
										);
									?>
							</div>
							<div class="w10 inline">
									<?php 
										echo $this->Form->input('Product.0.total',
											array(
												'label' => false,
												'div' => false,
												'type' => 'text',
												'class' => 'w99 right total',
												'readonly' => true,
												'value' => 0
											)
										);
									?>
							</div>
							<div class="cb"><br /><br /></div>
						</div>
						<a href="#" class="addproduct"><?php echo __('Ajouter un produit'); ?></a>
					</div>
				</div>
			</div>
	<div class="cb"></div>
	<?php echo $this->Form->end(array('label' => __('Ajouter ce bon de commande'), 'class' => 'btn btn-primary submit w100')); ?>
</div>
<?php
	$this->Html->script('jquery.cake.clone.js', array('inline' => false));
	$this->Html->css('pickadate/themes/default.css', null, array('inline' => false));
	$this->Html->css('pickadate/themes/default.date.css', null, array('inline' => false));
	$this->Html->css('fancy/jquery.fancybox.css', null, array('inline' => false));
	$this->Html->script('pickadate/picker.js', array('inline' => false));
	$this->Html->script('pickadate/picker.date.js', array('inline' => false));
	$this->Html->script('fancy/jquery.fancybox.js', array('inline' => false));
	$this->Html->script('orderforms.js', array('inline' => false));