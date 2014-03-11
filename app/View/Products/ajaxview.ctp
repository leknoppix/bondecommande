<?php
$tab=array();
foreach($products as $product)
{
	$tab[]=array(
		'id' 	=> 	$product['Product']['id'],
		'label' =>	$product['Product']['name']
	);
}
echo json_encode($tab);
?>