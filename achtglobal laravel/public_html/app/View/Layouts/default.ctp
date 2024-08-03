<?php Configure::write('debug', 0); ?>
<?php echo $this->element('head'); ?>
<?php echo $this->element('header'); ?>
<?php echo $this->fetch('content'); ?>
<?php echo $this->element('footer'); ?>