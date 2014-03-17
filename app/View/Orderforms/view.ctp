<?php echo $this->Html->addCrumb(__('Gestion des bons de commande'), array('controller'=>'orderforms','action'=>'index')); ?>
<?php echo $this->Html->addCrumb(__('Aperçu d\'un bon de commande'), array('controller'=>'orderforms','action'=>'view',$this->request->pass[0])); ?>
<div class="title">
	<h2><i class="icon-white icon-barcode"></i>&nbsp;&nbsp;<?php echo __('Aperçu d\'un bon de commande'); ?></h2>
</div>
<table class="w100">
		<tr>
			<td><?php echo $this->Html->link('<i class="icon-home icon-white"></i>&nbsp;&nbsp;'.__('Retour à la page principale'), '/',array('escape'=>false,'class'=>"btn btn-info")); ?>
			</td>
			<td><?php echo $this->Html->link('<i class="icon-circle-arrow-left icon-white"></i>&nbsp;&nbsp;'.__('Retour à la page précédente'), array('action' => 'index'),array('escape'=>false,'class'=>"btn btn-info")); ?>
			</td>
		</tr>
		<tr>
			<td style="text-align:center;">
				<?php echo $this->Html->link('<i class="icon-book icon-white"></i>&nbsp;&nbsp;'.__('Récupérer le pdf'), array('action' => 'pdf',$orderform['Orderform']['id']),array('escape'=>false,'class'=>"btn btn-info",'target'=>"_blank")); ?>
			</td>
		</tr>
	</table>
<hr />
<div class="action orderforms">
	<div class="head upper big">
		Bon de commande
	</div>
	<br /><br /><br /><br />
	<div class="correspondance">
		<div class="w30 inline adresse">
			<?php
				echo Configure::read('Default.entity');
			?><br />
			<?php
				echo Configure::read('Default.address');
			?><br />
			<?php
				echo Configure::read('Default.complementaddress');
			?><br />
			<?php
				echo Configure::read('Default.zipcode');
			?> <?php
				echo Configure::read('Default.city');
			?>
		</div>
		<div class="w30 inline">
		</div>
		<div class="w39 inline">
			<p>
				<?php echo $orderform['Customer']['name']; ?><br /><br />
				<?php echo $orderform['Customer']['address']; ?><br /><br />
				<?php echo $orderform['Customer']['zipcode']; ?> <?php echo $orderform['Customer']['city']; ?>
		</div>
		<div class="cb"></div>
		<hr />
		<div class="w99">
			<p><strong class="bold"><?php echo _('Numéro du bon de commande:'); ?></strong> <?php echo $orderform['Orderform']['numorder']; ?></p><br />
			<p><strong class="bold"><?php echo _('Service demandeur:'); ?></strong> <?php echo $orderform['Service']['name']; ?></p><br />
			<p><strong class="bold underligne"><?php echo _('Objet:'); ?></strong> <?php echo $orderform['Orderform']['name']; ?></p><br />
			<p><strong class="bold"><?php echo _('Date de livraison souhaité:'); ?></strong> <?php echo $this->Time->format('d/m/Y',$orderform['Orderform']['datelivraison']); ?></p>
			<p><strong class="bold"><?php echo _('Lieu de livraison:'); ?></strong><br />
					<span style="margin-left:30px;"><?php echo $orderform['Orderform']['lieulivraison']; ?></span>
			<p>
		</div>
		<div class="cb"></div>
		<div class="w99 fourniture">
			<table class="w100 orderforms">
				<thead>
					<tr class="trcolor">
						<th>Désignation</th>
						<th class="w15">Prix unitaire</th>
						<th class="w15">Quantités</th>
						<th class="w15">Montant HT</th>
						<th class="w15">TVA</th>
						<th class="w15">Montant TTC</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$montanthttotal=0;
						$montantttctotal=0;
					?>
						<?php foreach($orderform['Product'] as $produits): ?>
							<?php
								$montantht=$produits['price']*$produits['amout'];
								$montantttc=$montantht*(1+($produits['tva']/100));
							?>
							<tr>
								<td><?php echo $produits['name']; ?></td>
								<td class="right">
									<?php echo number_format($produits['price'], 3, ',', ''); ?> &euro;
								</td>
								<td class="right">
									<?php echo $produits['amout']; ?>
								</td>
								<td class="right">
									<?php
										$montanthttotal=$montanthttotal+$montantht;
										echo number_format($montantht, 2, ',', '');
									?> &euro;
								</td>
								<td class="right">
									<?php echo $produits['tva']; ?> %
								</td>
								<td class="right">
									<?php
										$montantttctotal=$montantttctotal+$montantttc;
										echo number_format($montantttc, 2, ',', ''); 
									?> &euro;
								</td>
							</tr>
						<?php endforeach; ?>
				</tbody>
				<tfoot>
					<tr class="trcolor">
						<td colspan="2" class="right">TOTAL</td>
						<td></td>
						<td class="right"><?php echo number_format($montanthttotal, 2, ',', ''); ?> &euro;</td>
						<td></td>
						<td class="right"><?php echo number_format($montantttctotal, 2, ',', ''); ?> &euro;</td>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>