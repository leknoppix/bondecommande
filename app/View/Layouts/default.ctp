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
?>
<!DOCTYPE html>
<html>
<head>
        <?php echo $this->Html->charset(); ?>
        <title>Bon de Commande
        </title>
        <?php
                echo $this->Html->meta('icon');
                echo $this->fetch('meta');
                echo $this->fetch('css');
                echo $this->Html->css(
                        array('style')
                );
        ?>
        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
</head>
<body>
        <div class="box_login">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
        </div>
        <?php echo $this->element('sql_dump'); ?>
        <?php echo $this->fetch('script'); ?>
        <?php echo $this->Html->script(
            array(
                "jquery.min.js",
                "jquery-ui.js",
                "main.js"
            )
        );
        ?>
</body>
</html>