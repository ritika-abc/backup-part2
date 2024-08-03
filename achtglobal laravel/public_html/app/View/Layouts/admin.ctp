<?php Configure::write('debug', 0); ?>
<?php echo $this->element('admin/head'); ?>
<?php echo $this->element('admin/header'); ?>
<div class="page-wrapper">
<?php echo $this->Session->flash(); ?>
</div>
<?php echo $this->fetch('content'); ?>
<?php echo $this->element('admin/footer'); ?>