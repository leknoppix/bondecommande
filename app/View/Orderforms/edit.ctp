<?php echo $this->Html->addCrumb(__('Gestion des bons de commande'), array('controller' => 'orderforms', 'action' => 'index')); ?>
<?php echo $this->Html->addCrumb(__('Modifier un bon de commande'), array('controller' => 'orderforms', 'action' => 'add')); ?>
<div class="title">
	<h2><i class="icon-white icon-barcode"></i>&nbsp;&nbsp;<?php echo __('Modifier un bon de commande'); ?></h2>
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
							echo $this->Form->input('numorder',
								array(
									'label' => __('Numéro du bon de commande provisoire'),
									'readonly' => true,
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
							echo $this->Form->input('id',
								array(
									'type' => 'hidden',
									'class' => 'w30'
								)
							);
						?>
						<?php
							echo $this->Form->input('invoice',
								array(
									'type' => 'text',
									'label' => __('Date de la demande'),
									'class' => 'datepicker w30'
								)
							);
						?>
						<?php
							echo $this->Form->input('shipped',
								array(
									'type' => 'text',
									'label' => __('Date de livraison souhaitée'),
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
							echo $this->Form->input('lieulivraison', array('label' => __('Adresse de livraison'), 'class' => 'w30', 'type' => 'textarea'));
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
				<div class="tab-pane" id="products">
					<div class="orderforms">
						<div class="head w100">
							<div class="w58 inline"><?php echo __('Nom du produit'); ?></div>
							<div class="w10 inline"><?php echo __('Quantité'); ?></div>
							<div class="w10 inline"><?php echo __('Prix en HT'); ?></div>
							<div class="w10 inline"><?php echo __('TVA'); ?></div>
							<div class="w8 inline"><?php echo __('Total TTC'); ?></div>
							<div class="w2 inline"></div>
						</div>
						<div class="cb"></div>
						<?php
							foreach ($products as $k => $v) {
							?>
							<div class="body-<?php echo $k; ?> w100">
								<div class="w58 inline"><?php 
											echo $this->Form->input('Product.' . $k . '.name',
												array(
													'label' => false,
													'div' => false,
													'type' => 'text',
													'class' => 'w99 autocomplete'
												)
											);
											echo $this->Form->input('Product.' . $k . '.id',
												array(
													'label' => false,
													'div' => false,
													'type' => 'hidden',
													'class' => 'w99 autocomplete'
												)
											);
										?>
								</div>
								<div class="w10 inline">
										<?php 
											echo $this->Form->input('Product.' . $k . '.amout',
												array(
													'label' => false,
													'div' => false,
													'type' => 'text',
													'class' => 'w99 right calcul qtt'
												)
											);
										?>
								</div>
								<div class="w10 inline">
										<?php 
											echo $this->Form->input('Product.' . $k . '.price',
												array(
													'label' => false,
													'div' => false,
													'type' => 'text',
													'class' => 'w99 right calcul prixht'
												)
											);
										?>
								</div>
								<div class="w10 inline">
										<?php 
											echo $this->Form->input('Product.' . $k . '.tva',
												array(
													'label' => false,
													'div' => false,
													'type' => 'text',
													'class' => 'w99 right calcul tva'
												)
											);
										?>
								</div>
								<div class="w8 inline">
										<?php 
											echo $this->Form->input('Product.' . $k . '.total',
												array(
													'label' => false,
													'div' => false,
													'type' => 'text',
													'class' => 'w99 right total',
													'readonly' => true
												)
											);
										?>
								</div>
								<div class="w2 inline delproduct"><a href="#">X</a></div>
							</div>
							<?php
							}
						?>
						<a href="#" class="addproduct"><?php echo __('Ajouter un produit'); ?></a>
					</div>
				</div>
			</div>
	<div class="cb"></div>
	<?php echo $this->Form->end(array('label' => __('Modifier ce bon de commande et enregistrer les modifications'), 'class' => 'btn btn-primary submit w100')); ?>
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
	$this->Html->scriptStart(array('inline' => false));
	$url = $this->Html->url(array('controller' => 'products', 'action' => 'delete'));
?>
$(document).ready(function(){
  	$('.delproduct').click(function(e){
      	e.preventDefault();
	    var valeurfind = $(this).parent().find('input[type=hidden]').val();
	    var divdel = $(this).parent().attr('class');
	    //requete ajax pour la suppression
	    $.ajax({
	        type: "POST",
	        url: '<?php echo $url; ?>'+'/'+valeurfind,
	        success: function(msg)
	        {
                if(msg)
                {
                	toto= divdel.split(' ');
					$('.'+toto[0]).remove();
                }
            }
        });
    });
});
<?php
	$this->Html->scriptEnd();