<?php ?> 
<!--page-wrapper-->
<div class="page-wrapper">
<!--page-content-wrapper-->
<div class="page-content-wrapper">
<div class="page-content">
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
<div class="breadcrumb-title pr-3">Website Settings</div>
<div class="pl-3">
<nav aria-label="breadcrumb">
<ol class="breadcrumb mb-0 p-0">

<li class="breadcrumb-item active" aria-current="page">Website Details</li>
</ol>
</nav>
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
 

<div class="form-body">
 
<?php echo $this->Form->create('Website',array('enctype'=>'multipart/form-data','class' => 'form-horizontal')); ?>

<div class="form-group row">
<label class="control-label col-sm-2">Website Name</label>
<div class="col-sm-4">
<?php echo $this->Form->input('name', array('class'=>'form-control','label'=>''));?>	
</div>

<label class="control-label col-sm-2">Website Tagline</label>
<div class="col-sm-4">
<?php echo $this->Form->input('tagline', array('class'=>'form-control','label'=>''));?>	
</div>

  
</div>

<div class="form-group row">
 
<label class="control-label col-sm-2"> Email</label>
<div class="col-sm-4">
<?php echo $this->Form->input('email', array('class'=>'form-control','label'=>''));?>	
</div>



<label class="control-label col-sm-2">Contact  Email</label>
<div class="col-sm-4">
<?php echo $this->Form->input('contactemail', array('class'=>'form-control','label'=>''));?>	
</div>
</div> 

<div class="form-group row">
<label class="control-label col-sm-2"> Phone</label>
<div class="col-sm-4">
<?php echo $this->Form->input('phone', array('class'=>'form-control','label'=>''));?>	
</div>
 
<label class="control-label col-sm-2"> Mobile</label>
<div class="col-sm-4">
<?php echo $this->Form->input('mobile', array('class'=>'form-control','label'=>''));?>	
</div>
</div> 

<div class="form-group row">
<label class="control-label col-sm-2">  Head Office Address </label>
<div class="col-sm-10"> 
<?php echo $this->Form->input('address', array('class'=>'form-control','label'=>''));?>	
</div>
  
</div> 
 
<div class="form-group row">
<label class="control-label col-sm-2"> Branch Office Address </label>
<div class="col-sm-10"> 
<?php echo $this->Form->input('branchaddress', array('class'=>'form-control','label'=>''));?>	
</div>
  
</div> 



<div class="form-group row">
<label class="control-label col-sm-2"> Office Address 3</label>
<div class="col-sm-10"> 
<?php echo $this->Form->input('address3', array('class'=>'form-control','label'=>''));?>	
</div>
  
</div> 


<div class="form-group row">
<label class="control-label col-sm-2"> Office Address 4</label>
<div class="col-sm-10"> 
<?php echo $this->Form->input('address4', array('class'=>'form-control','label'=>''));?>	
</div>
  
</div> 



<div class="form-group row">
<label class="control-label col-sm-2"> Office Address 5</label>
<div class="col-sm-10"> 
<?php echo $this->Form->input('address5', array('class'=>'form-control','label'=>''));?>	
</div>
  
</div> 

<?php

$thumbImageurl = $this->Html->url('/images/'.$this->data['Website']['logo']);
$Imageurl = "/images/noimage.png";

$Imageurl = ($this->data['Website']['logo'] != '')?$thumbImageurl:$Imageurl;
?>

 
<div class="form-group row">
<label class="col-sm-2 col-form-label">Website Logo</label>
<div class="col-sm-6"> 
<input type="file" class="form-control" name="data[Website][logo]" id="BannerThumb">

</div>
<div class="col-sm-4"> 

<img src="<?php echo $Imageurl;?>" class="img-thumbnail" alt="">
</div>

</div> 
 
 

<div class="form-group row">
<label class="control-label col-sm-2"> Enquiry Form </label>
<div class="col-sm-10"> 
<?php echo $this->Form->input('enquiryform', array('class'=>'form-control','label'=>''));?>	
</div>
  
</div> 

<div class="form-group row">
<label class="control-label col-sm-2">Facebook</label>
<div class="col-sm-4">
<?php echo $this->Form->input('facebook', array('class'=>'form-control','label'=>''));?>	
</div>
 
<label class="control-label col-sm-2"> Linkedin</label>
<div class="col-sm-4">
<?php echo $this->Form->input('linkedin', array('class'=>'form-control','label'=>''));?>	
</div>
</div> 

<div class="form-group row">

<label class="control-label col-sm-2"> Twitter</label>
<div class="col-sm-4">
<?php echo $this->Form->input('twitter', array('class'=>'form-control','label'=>''));?>	
</div>
 
<label class="control-label col-sm-2"> Instagram</label>
<div class="col-sm-4">
<?php echo $this->Form->input('instagram', array('class'=>'form-control','label'=>''));?>	
</div>
</div> 
 
<div class="form-group row">

<label class="control-label col-sm-2"> Pinterest</label>
<div class="col-sm-4">
<?php echo $this->Form->input('pinterest', array('class'=>'form-control','label'=>''));?>	
</div>
 
<label class="control-label col-sm-2"> Youtube</label>
<div class="col-sm-4">
<?php echo $this->Form->input('youtube', array('class'=>'form-control','label'=>''));?>	
</div>
</div> 


<div class="form-group row">

<label class="control-label col-sm-2">Google Aanalytics Code</label>
<div class="col-sm-10">

<?php echo $this->Form->input('google_analytics', array('class'=>'form-control','label'=>''));?>	
</div>
</div>
 
<div class="form-group row">

<label class="control-label col-sm-2">Header Text</label>
<div class="col-sm-10">

<?php echo $this->Form->input('header_text', array('class'=>'ckeditor form-control','label'=>''));?>	
</div>
</div>
 
<div class="form-group row">
<label class="control-label col-sm-2">Footer Text</label>
<div class="col-sm-10">

<?php echo $this->Form->input('footer_text', array('class'=>'ckeditor form-control','label'=>''));?>	
</div>
</div>
 

<div class="form-group row">
<label class="col-sm-2 col-form-label"></label>
<div class="col-sm-10">
<button type="submit" class="btn btn-primary px-4">Submit</button>  
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