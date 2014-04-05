<?php
ob_start(); ?>
<style>
	*
	{
		font-family: helvetica;
	}
</style>
<page backtop="20mm" backleft="10mm" backright="10mm" backbottom="20mm">
	<page_header> 
		<p style="text-align:center;">
			<?php
				echo __('Bon de commande n°');
			?>
			<?php
				echo $orderform['Orderform']['numorder'];
			?> - <?php echo Configure::read('Default.entity'); ?><br /><br />
			<?php
				echo __('Date de la commande');
			?> 
			<?php
				echo $this->Time->format('d/m/Y', $orderform['Orderform']['invoice']);
			?>
		</p>
	</page_header>
	<page_footer> 
		<p style="text-align:center;">[[page_cu]]/[[page_nb]]</p>
	</page_footer> 
		<div style="text-align: center;font-weight: bold;color:black;text-transform: uppercase;font-size: 25pt;margin-bottom: 35px;">
			<?php echo __('Bon de commande'); ?>
		</div>
		<br /><br /><br /><br />
		<table>
			<tr>
				<td style="width:70mm;margin-top:3px;margin-bottom:3px;border:1px solid black;padding:10px;padding-left:25px;">
						<strong><?php
							echo Configure::read('Default.entity');
						?></strong><br />
						<?php
							echo Configure::read('Default.address');
						?><br />
						<?php
							echo Configure::read('Default.complementadress');
						?><br />
						<?php
							echo Configure::read('Default.zipcode');
						?> <?php
							echo Configure::read('Default.city');
						?>
				</td>
				<td style="width: 40mm;"></td>
				<td style="width: 70mm;margin-top:3px;margin-bottom:3px;">
						<p>
							<strong><?php echo $orderform['Customer']['name']; ?></strong><br /><br />
							<?php echo $orderform['Customer']['address']; ?><br /><br />
							<?php echo $orderform['Customer']['zipcode']; ?> 
							<?php echo $orderform['Customer']['city']; ?>
						</p>
				</td>
			</tr>
		</table>
		<br />
		<br />
		<hr />
		<table>
			<tr>
				<td style="width: 90mm;">
					<strong class="bold">
						<?php echo __('Service demandeur:'); ?>
					</strong> 
					<?php echo $orderform['Service']['name']; ?>
				</td>
				<td style="width: 90mm;">
					<strong class="bold underligne">
						<?php echo __('Objet:'); ?>
					</strong> 
					<?php echo $orderform['Orderform']['name']; ?>
				</td>
			</tr>
			<tr>
				<td>
					<strong class="bold">
						<?php echo __('Date de livraison souhaité:'); ?>
					</strong> 
					<?php echo $this->Time->format('d/m/Y', $orderform['Orderform']['shipped']); ?>
				</td>
				<td>
					<strong class="bold"><?php echo __('Lieu de livraison:'); ?></strong><br />
					<span style="margin-left:30mm;"><?php echo $orderform['Orderform']['shipping_address']; ?></span>
				</td>
			</tr>
		</table>
		<br /><br /><br />
			<table style="border-collapse:collapse;">
				<thead>
					<tr style="background-color:#f5f9fc;font-weight:bold;font-size:12pt;line-height:30px;">
						<th style="height:6mm;width:55mm;text-align:center;border: 1px solid black;"><?php echo __('Désignation'); ?></th>
						<th style="height:6mm;width:25mm;text-align:center;border: 1px solid black;"><?php echo __('Prix unitaire'); ?></th>
						<th style="height:6mm;width:25mm;text-align:center;border: 1px solid black;"><?php echo __('Quantités'); ?></th>
						<th style="height:6mm;width:25mm;text-align:center;border: 1px solid black;"><?php echo __('Montant HT'); ?></th>
						<th style="height:6mm;width:20mm;text-align:center;border: 1px solid black;"><?php echo __('TVA'); ?></th>
						<th style="height:6mm;width:26mm;text-align:center;border: 1px solid black;"><?php echo __('Montant TTC'); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php
						$montanthttotal = 0;
						$montantttctotal = 0;
					?>
						<?php 
							foreach ($orderform['Product'] as $produits) {
						?>
							<?php
								$montantht = $produits['price'] * $produits['amout'];
								$montantttc = $montantht * (1 + ($produits['tva'] / 100));
							?>
							<tr>
								<td style="padding-left:3px;border: 1px solid black;"><?php echo $produits['name']; ?></td>
								<td style="border: 1px solid black;text-align:right;padding-right:10px;height:6mm">
									<?php echo number_format($produits['price'], 2, ',', ''); ?> &euro;
								</td>
								<td style="border: 1px solid black;text-align:right;padding-right:10px;height:6mm">
									<?php echo number_format($produits['amout'], 2, ',', ''); ?>
								</td>
								<td style="border: 1px solid black;text-align:right;padding-right:10px;height:6mm">
									<?php
										$montanthttotal = $montanthttotal + $montantht;
										echo number_format($montantht, 2, ',', '');
									?> &euro;
								</td>
								<td style="border: 1px solid black;text-align:right;padding-right:10px;height:6mm">
									<?php echo number_format($produits['tva'], 2, ',', ''); ?> %
								</td>
								<td style="border: 1px solid black;text-align:right;padding-right:10px;height:6mm">
									<?php
										$montantttctotal = $montantttctotal + $montantttc;
										echo number_format($montantttc, 2, ',', '');
									?> &euro;
								</td>
							</tr>
						<?php
							}
						?>
					<tr style="background-color:#f5f9fc;font-weight:bold;font-size:13pt;line-height:25px;">
						<td colspan="2" style="border: 1px solid black;text-align:right;padding-right: 10px;height:6mm">TOTAL</td>
						<td style="border: 1px solid black;text-align:right;padding-right:10px;height:6mm">&nbsp;</td>
						<td style="border: 1px solid black;text-align:right;padding-right:10px;height:6mm"><?php echo number_format($montanthttotal, 2, ',', ''); ?> &euro;</td>
						<td style="border: 1px solid black;text-align:right;padding-right:10px;height:6mm"></td>
						<td style="border: 1px solid black;text-align:right;padding-right:10px;height:6mm"><?php echo number_format($montantttctotal, 2, ',', ''); ?> &euro;</td>
					</tr>
				</tbody>
			</table>
			<br /><br /><br />
		<hr />
		<table>
        	<tr>
        		<td style="text-align:center;width:45mm;"><?php echo __('Directeur du service'); ?></td>
        		<td style="text-align:center;width:45mm;"><?php echo __('Adjoint délégué'); ?></td>
        		<td style="text-align:center;width:45mm;"><?php echo __('Le secrétaire général'); ?></td>
        		<td style="text-align:center;width:45mm"><?php echo __('Service comptabilité'); ?></td>
       		</tr>
        </table>
</page>
<?php 
	$content = ob_get_clean();
	App::import('Vendor', 'html2pdf/html2pdf');
	try{
		$pdf = new HTML2PDF('P', 'A4', 'fr');
		$pdf->pdf->SetDisplayMode('fullpage');
		$pdf->writeHTML($content);
		$pdf->Output('files/tmp/' . $orderform['Orderform']['numorder'] . '.pdf','F');
		echo 'true';
	}
	catch(HTML2PDF_exception $e){
		die(e);
	}