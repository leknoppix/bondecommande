<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $this->fetch('meta');
		echo $this->Html->css(
			array('bootstrap-cerulean.css',
				"bootstrap-responsive.css",
				"charisma-app.css",
				"jquery.cleditor.css")
			);
	?>
	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="container">
		<div id="content">
				<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- theme selector ends -->
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> <?php echo $user['nom'].' '.$user['prenom']; ?></span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<?php echo $this->Html->link(
								'Mon profil',
								array(
										'controller'=>'users',
										'action'=>'profile'
									)
								); 
							?>
						</li>
						<li class="divider"></li>
						<li><?php echo $this->Html->link('Se deconnecter',array('controller'=>'users','action'=>'logout')); ?></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
			</div>
		</div>
	</div>
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
	<?php echo $this->fetch('script'); ?>
	<?php echo $this->Html->script(
		array(
			"jquery-1.7.2.min.js",
			"jquery-ui-1.8.21.custom.min.js",
			"bootstrap-transition.js",
			"bootstrap-alert.js",
			"js/bootstrap-modal.js",
			"bootstrap-dropdown.js",
			"bootstrap-scrollspy.js",
			"bootstrap-tab.js",
			"jquery.cleditor.min.js"
		)
	);
	?>
</body>
</html>
