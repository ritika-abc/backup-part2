<?php ?> 
<!--page-wrapper-->
<div class="page-wrapper">
<!--page-content-wrapper-->
<div class="page-content-wrapper">
<div class="page-content">
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
<div class="breadcrumb-title pr-3">Home Page Section</div>
<div class="pl-3">
<nav aria-label="breadcrumb">
<ol class="breadcrumb mb-0 p-0">

<li class="breadcrumb-item active" aria-current="page">Home Page Section Details</li>
</ol>
</nav>
</div>
<div class="ml-auto">
<div class="btn-group">
<?php 
echo $this->Html->link("<i class=\"icon-plus\"></i>Manage Home Page Sections",
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
<?php echo $this->Form->create('Homesection',array('enctype'=>'multipart/form-data'));
echo $this->Form->input('id');

?>

<div class="form-body">


<div class="form-group row">
<label class="col-sm-2 col-form-label">Homesection Name</label>
<div class="col-sm-10"> <?php echo $this->Form->input('name', array('class'=>'form-control','label'=>''));?> </div>
</div>
<?php

$thumbImageurl = $this->Html->url('/images/homesections/'.$this->data['Homesection']['image']);
$Imageurl = "/images/noimage.png";

$Imageurl = ($this->data['Homesection']['image'] != '')?$thumbImageurl:$Imageurl;
?>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Homesection Image</label>
<div class="col-sm-6"> 
<input type="file" class="form-control" name="data[Homesection][image]" id="BannerThumb">

</div>
<div class="col-sm-4"> 

<img src="<?php echo $Imageurl;?>" class="img-thumbnail" alt="">
</div>

</div> 
 
<div class="form-group row">
<label class="col-sm-2 col-form-label">Description</label>
<div class="col-sm-10"> <?php echo $this->Form->input('description', array('class'=>'form-control ','label'=>''));?> </div>
</div>



<div class="form-group row">
<label class="col-sm-2 col-form-label">Section 1 Title</label>
<div class="col-sm-10"> <?php echo $this->Form->input('section1_title', array('class'=>'form-control','label'=>''));?> </div>
</div>

<?php

$thumbImageurl = $this->Html->url('/images/homesections/'.$this->data['Homesection']['section1_image']);
$Imageurl = "/images/noimage.png";

$Imageurl = ($this->data['Homesection']['section1_image'] != '')?$thumbImageurl:$Imageurl;
?>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Section 1 Image</label>
<div class="col-sm-6"> 
<input type="file" class="form-control" name="data[Homesection][section1_image]" id="BannerThumb">

</div>

<div class="col-sm-4"> 

<img src="<?php echo $Imageurl;?>" class="img-thumbnail" alt="">
</div>

</div> 
 
<div class="form-group row">
<label class="col-sm-2 col-form-label">Section 1 Description</label>
<div class="col-sm-10"> <?php echo $this->Form->input('section1_description', array('class'=>'form-control ','label'=>''));?> </div>
</div>
 
<div class="form-group row">
<label class="col-sm-2 col-form-label">Section2 Title</label>
<div class="col-sm-10"> <?php echo $this->Form->input('section2_title', array('class'=>'form-control','label'=>''));?> </div>
</div>

<?php

$thumbImageurl = $this->Html->url('/images/homesections/'.$this->data['Homesection']['section2_image']);
$Imageurl = "/images/noimage.png";

$Imageurl = ($this->data['Homesection']['section2_image'] != '')?$thumbImageurl:$Imageurl;
?>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Section 2 Image</label>
<div class="col-sm-6"> 
<input type="file" class="form-control" name="data[Homesection][section2_image]" id="BannerThumb">

</div>

<div class="col-sm-4"> 

<img src="<?php echo $Imageurl;?>" class="img-thumbnail" alt="">
</div>
</div> 
 
<div class="form-group row">
<label class="col-sm-2 col-form-label">Section2 Description</label>
<div class="col-sm-10"> <?php echo $this->Form->input('section2_description', array('class'=>'form-control ','label'=>''));?> </div>
</div>
 

<div class="form-group row">
<label class="col-sm-2 col-form-label">Section3 Title</label>
<div class="col-sm-10"> <?php echo $this->Form->input('section3_title', array('class'=>'form-control','label'=>''));?> </div>
</div>

<?php

$thumbImageurl = $this->Html->url('/images/homesections/'.$this->data['Homesection']['section3_image']);
$Imageurl = "/images/noimage.png";

$Imageurl = ($this->data['Homesection']['section3_image'] != '')?$thumbImageurl:$Imageurl;
?>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Section 3 Image</label>
<div class="col-sm-6"> 
<input type="file" class="form-control" name="data[Homesection][section3_image]" id="BannerThumb">

</div>

<div class="col-sm-4"> 

<img src="<?php echo $Imageurl;?>" class="img-thumbnail" alt="">
</div>
</div> 
 
<div class="form-group row">
<label class="col-sm-2 col-form-label">Section 3 Sescription</label>
<div class="col-sm-10"> <?php echo $this->Form->input('section3_description', array('class'=>'form-control ','label'=>''));?> </div>
</div>
 

<div class="form-group row">
<label class="col-sm-2 col-form-label">Section 4 Title</label>
<div class="col-sm-10"> <?php echo $this->Form->input('section4_title', array('class'=>'form-control','label'=>''));?> </div>
</div>

<?php

$thumbImageurl = $this->Html->url('/images/homesections/'.$this->data['Homesection']['section4_image']);
$Imageurl = "/images/noimage.png";

$Imageurl = ($this->data['Homesection']['section4_image'] != '')?$thumbImageurl:$Imageurl;
?>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Section 4 Image</label>
<div class="col-sm-6"> 
<input type="file" class="form-control" name="data[Homesection][section4_image]" id="BannerThumb">

</div>

<div class="col-sm-4"> 

<img src="<?php echo $Imageurl;?>" class="img-thumbnail" alt="">
</div>
</div> 
 
<div class="form-group row">
<label class="col-sm-2 col-form-label">Section 4 Description</label>
<div class="col-sm-10"> <?php echo $this->Form->input('section4_description', array('class'=>'form-control ','label'=>''));?> </div>
</div>

 
<div class="form-group row">
<label class="col-sm-2 col-form-label"></label>
<div class="col-sm-10">
<button type="submit" class="btn btn-primary px-4">Submit</button> 
<?php 
echo $this->Html->link("Cancel",
array( 'controller' => 'homesections', 'action' => 'index', 'admin' => true),
array('escape' => FALSE,'class' => 'btn btn-danger px-4')); 
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
