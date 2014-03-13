<?php
ob_start(); ?>
<style>
	*
	{
		font-family: helvetica;
	}
</style>
<page backtop="20mm" backleft="10mm" backright="10mm" backbottom="20mm">
		<div style="text-align: center;font-weight: bold;color:black;text-transform: uppercase;font-size: 25pt;margin-bottom: 35px;">
			Bon de commande
		</div>
		<br /><br /><br /><br />
		<table>
			<tr>
				<td style="width: 70mm;margin-top:3px;margin-bottom:3px;border:1px solid black;padding:10px;padding-left:25px;">
						<strong><?php
							echo Configure::read('Default.entity');
						?></strong><br />
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
				</td>
				<td style="width: 40mm;"></td>
				<td style="width: 70mm;margin-top:3px;margin-bottom:3px;">
						<p>
							<strong><?php echo $orderform['Customer']['name']; ?></strong><br /><br />
							<?php echo $orderform['Customer']['address']; ?><br /><br />
							<?php echo $orderform['Customer']['zipcode']; ?> <?php echo $orderform['Customer']['city']; ?>
						</p>
				</td>
			</tr>
		</table>
		<hr />
	<p><strong class="bold"><?php echo _('Numéro du bon de commande:'); ?></strong> <?php echo $orderform['Orderform']['numorder']; ?></p>
	<p><strong class="bold"><?php echo _('Service demandeur:'); ?></strong> <?php echo $orderform['Service']['name']; ?></p>
	<?php if($orderform['Orderform']['name']!=''){ ?><p><strong class="bold underligne"><?php echo _('Objet:'); ?></strong> <?php echo $orderform['Orderform']['name']; ?></p><br /><?php } ?>
			<table style="border-collapse:collapse;">
				<thead>
					<tr style="background-color:#f5f9fc;font-weight:bold;font-size:12pt;line-height:30px;">
						<th style="height:6mm;width:55mm;text-align:center;border: 1px solid black;">Désignation</th>
						<th style="height:6mm;width:25mm;text-align:center;border: 1px solid black;">Prix unitaire</th>
						<th style="height:6mm;width:25mm;text-align:center;border: 1px solid black;">Quantités</th>
						<th style="height:6mm;width:25mm;text-align:center;border: 1px solid black;">Montant HT</th>
						<th style="height:6mm;width:25mm;text-align:center;border: 1px solid black;">TVA</th>
						<th style="height:6mm;width:26mm;text-align:center;border: 1px solid black;">Montant TTC</th>
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
								<td style="padding-left:3px;border: 1px solid black;"><?php echo $produits['name']; ?></td>
								<td style="border: 1px solid black;text-align:right;padding-right:10px;height:6mm">
									<?php echo $produits['price']; ?> &euro;
								</td>
								<td style="border: 1px solid black;text-align:right;padding-right:10px;height:6mm">
									<?php echo $produits['amout']; ?>
								</td>
								<td style="border: 1px solid black;text-align:right;padding-right:10px;height:6mm">
									<?php
										$montanthttotal=$montanthttotal+$montantht;
										echo $montantht;
									?> &euro;
								</td>
								<td style="border: 1px solid black;text-align:right;padding-right:10px;height:6mm">
									<?php echo $produits['tva']; ?> %
								</td>
								<td style="border: 1px solid black;text-align:right;padding-right:10px;height:6mm">
									<?php
										$montantttctotal=$montantttctotal+$montantttc;
										echo $montantttc; 
									?> &euro;
								</td>
							</tr>
						<?php endforeach; ?>
				</tbody>
				<tfoot>
					<tr style="background-color:#f5f9fc;font-weight:bold;font-size:13pt;line-height:25px;">
						<td colspan="2" style="border: 1px solid black;text-align:right;padding-right: 10px;height:6mm">TOTAL</td>
						<td style="border: 1px solid black;text-align:right;padding-right:10px;height:6mm">&nbsp;</td>
						<td style="border: 1px solid black;text-align:right;padding-right:10px;height:6mm"><?php echo $montanthttotal; ?> &euro;</td>
						<td style="border: 1px solid black;text-align:right;padding-right:10px;height:6mm"></td>
						<td style="border: 1px solid black;text-align:right;padding-right:10px;height:6mm"><?php echo $montantttctotal; ?> &euro;</td>
					</tr>
				</tfoot>
			</table><br />
		<hr />
		<table>
        	<tr>
        		<td style="text-align:center;width:65mm;"><?php echo __('Directeur du service'); ?></td>
        		<td style="text-align:center;width:65mm;"><?php echo __('Le secrétaire général'); ?></td>
        		<td style="text-align:center;width:65mm"><?php echo __('Service comptabilité'); ?></td>
       		</tr>
        </table>
</page>
<?php 
	$content=ob_get_clean(); 
	App::import('Vendor', 'html2pdf/html2pdf');      
	try{
	    $pdf = new HTML2PDF('P' , 'A4' , 'fr');
	    $pdf->pdf->SetDisplayMode('fullpage');
	    $pdf->writeHTML($content);
	    $pdf->Output('fichier.pdf');
	}
	catch(HTML2PDF_exception $e){
	    die($e);    
	}
?>