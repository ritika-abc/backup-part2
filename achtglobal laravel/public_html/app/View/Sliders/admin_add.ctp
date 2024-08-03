<?php ?> 
<!--page-wrapper-->
<div class="page-wrapper">
<!--page-content-wrapper-->
<div class="page-content-wrapper">
<div class="page-content">
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
<div class="breadcrumb-title pr-3">Sliders</div>
<div class="pl-3">
<nav aria-label="breadcrumb">
<ol class="breadcrumb mb-0 p-0">

<li class="breadcrumb-item active" aria-current="page">Slider Details</li>
</ol>
</nav>
</div>
<div class="ml-auto">
<div class="btn-group">
<?php 
echo $this->Html->link("<i class=\"icon-plus\"></i>Manage Sliders",
array( 'action' => 'index', 'admin' => true),
array('escape' => FALSE,'class' => 'btn btn-primary')); 
?>
</div>
</div>
</div>
<!--end breadcrumb-->


<div class="row">
<div class="col-12 col-lg-9 mx-auto">
<div class="card radius-15">
<div class="card-body">
<div class="card-title">
<h4 class="mb-0"></h4>
</div>
<hr/>
<?php
echo $this->Form->create('Slider',array('enctype'=>'multipart/form-data','class' => 'form-horizontal'));
?>
<div class="form-body">


<div class="form-group row">
<label class="col-sm-2 col-form-label">Slider Name</label>
<div class="col-sm-10"> <?php echo $this->Form->input('name', array('class'=>'form-control','label'=>''));?> </div>
</div>
<?php
$Imageurl = "http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image";
?>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Slider Image</label>
<div class="col-sm-10"> 
<input type="file" class="form-control" name="data[Slider][image]" id="BannerThumb">

</div>
</div> 
<div class="form-group row">
<label class="col-sm-2 col-form-label">Short Description</label>
<div class="col-sm-10"> <?php echo $this->Form->input('short_description', array('class'=>'form-control','label'=>''));?> </div>
</div> 
<div class="form-group row">
<label class="col-sm-2 col-form-label"></label>
<div class="col-sm-10">
<button type="submit" class="btn btn-primary px-4">Submit</button> 
<?php 
echo $this->Html->link("Cancel",
array( 'controller' => 'sliders', 'action' => 'index', 'admin' => true),
array('escape' => FALSE,'class' => 'pull-right btn btn-danger px-4')); 
?>
</div>
</div>
</div>
</div>
</div>

<?php echo $this->Form->end(); ?>
</div>
</div>

</div>

<!--end row-->

</div>
</div>
<!--end page-content-wrapper-->
</div>
<!--end page-wrapper-->
