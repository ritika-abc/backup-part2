<?php ?>
<!--page-wrapper-->
<div class="page-wrapper">
<!--page-content-wrapper-->
<div class="page-content-wrapper">
<div class="page-content">
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
<div class="breadcrumb-title pr-3">Manage Leads</div>
<div class="pl-3">
<nav aria-label="breadcrumb">
<ol class="breadcrumb mb-0 p-0">
<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
</li>
<li class="breadcrumb-item active" aria-current="page">Leads</li>
</ol>
</nav>
</div> 
</div>
<!--end breadcrumb-->
<div class="card">
<div class="card-body">
<div class="card-title">
<h4 class="mb-0">Manage Leads</h4>
</div>
<hr/>
<div class="table-responsive">
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
<th width="5%">ID</th>
<th>Lead For</th>
<th width="35%">Name</th>
 <th width="35%">Email</th>
<th width="35%">Phone</th>

<th class="actions">Actions</th>
</thead>
<tbody>
<?php $i = 0; foreach ($leads as $lead): $i++; ?>
<tr>
<td><?php echo $i; ?></td>

<td><?php echo h($lead['Lead']['lead_for']); ?></td>
<td><?php echo h($lead['Lead']['name']); ?></td>
<td><?php echo h($lead['Lead']['email']); ?></td>
<td><?php echo h($lead['Lead']['phone']); ?></td>
<td class="actions">
<div class="action-buttons"> 
<?php 
echo $this->Html->link("<i class=\"bx bx-comment-detail vertical-align-middle\"> </i>",
array( 'action' => 'view', $lead['Lead']['id']),
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
