<?php ?>
<!--page-wrapper-->
<div class="page-wrapper">
<!--page-content-wrapper-->
<div class="page-content-wrapper">
<div class="page-content">
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
<div class="breadcrumb-title pr-3">Manage Pages</div>
<div class="pl-3">
<nav aria-label="breadcrumb">
<ol class="breadcrumb mb-0 p-0">
<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
</li>
<li class="breadcrumb-item active" aria-current="page">Pages</li>
</ol>
</nav>
</div>
<div class="ml-auto">
<div class="btn-group">
<?php 
echo $this->Html->link("<i class=\"icon-plus\"></i>New Page",
array( 'action' => 'add', 'admin' => true),
array('escape' => FALSE,'class' => 'btn btn-primary')); 
?>
</div>
</div>
</div>
<!--end breadcrumb-->
<div class="card">
<div class="card-body">
<div class="card-title">
<h4 class="mb-0">Manage Pages</h4>
</div>
<hr/>
<div class="table-responsive">
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
<th width="5%">ID</th>
<th width="35%">Name</th>
<th width="40%">Image</th>
<th class="actions">Actions</th>
</thead>
<tbody>
<?php $i = 0; foreach ($pages as $product): $i++; ?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo h($product['Page']['name']); ?></td>
<td  align="center">
<?php
$thumbImageurl = '/images/pages/'.$product['Page']['image'];
$Imageurl = "/images/noimage.png";

$Imageurl = ($product['Page']['image'] != '')?$thumbImageurl:$Imageurl;
?>
<?php echo $this->Html->image($Imageurl, array('alt' => $product['Page']['name'], 'width' => 100, 'height' => 75));?>
</td>
 


<td class="actions">
<div class="action-buttons"> 
<?php 
echo $this->Html->link("<i class=\"bx bx-pencil\"> </i>",
array( 'action' => 'edit', $product['Page']['id']),
array('escape' => FALSE,'class' => 'table-actions')); 
?> 

</div>
</td>
</tr>
<?php endforeach; ?>
</tbody>

</table>
</div>
</div>
</div>
</div>
</div>
<!--end page-content-wrapper-->
</div>
<!--end page-wrapper-->
