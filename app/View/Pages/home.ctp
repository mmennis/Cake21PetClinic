<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
if (Configure::read('debug') == 0):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>
<?php
if (Configure::read('debug') > 0):
	Debugger::checkSecurityKeys();
endif;
?>

<h1>CakePhp 2.1 PetClinic</h1>
<ul>
	<li><?php echo $this->Html->link("All Owners", array('controller' => 'owners', 'action' => 'index')); ?></li>
	<li><?php echo $this->Html->link("All Vets", array('controller' => 'vets', 'action' => 'index')); ?></li>
	<li><?php echo $this->Html->link("Cake Information", array('controller' => 'pages', 'action' => 'cake_info')); ?></li>
</ul>
