<?php ?> 
<!--page-wrapper-->
<div class="page-wrapper">
<!--page-content-wrapper-->
<div class="page-content-wrapper">
<div class="page-content">
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
<div class="breadcrumb-title pr-3">Leads</div>
<div class="pl-3">
<nav aria-label="breadcrumb">
<ol class="breadcrumb mb-0 p-0">

<li class="breadcrumb-item active" aria-current="page">Lead Details</li>
</ol>
</nav>
</div>
<div class="ml-auto">
<div class="btn-group">
<?php 
echo $this->Html->link("<i class=\"icon-list\"></i>Manage Leads",
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


<div class="form-body invoice overflow-auto">

<table>



<tr>
<td class="total">Lead Recieved On</td>	 
<td class="text-left unit"><?php echo date('d-m-Y h:i:s a', strtotime($lead['Lead']['created'])); ?></td>
</tr>
<tr>
<td class="total">Name</td>	 
<td class="text-left unit"><?php echo h($lead['Lead']['name']); ?></td>
</tr>
<tr>
<td class="total">Email</td>
<td class="text-left unit"><?php echo h($lead['Lead']['email']); ?></td>
</tr>

<tr>
<td class="total">Phone</td>
<td class="text-left unit"><?php echo h($lead['Lead']['phone']); ?></td>
</tr>

<tr>
<td class="total">Address</td>
<td class="text-left unit"><?php echo h($lead['Lead']['address']); ?></td>
</tr>


<tr>
<td class="total">Page Url</td>
<td class="text-left unit"><?php echo h($lead['Lead']['pageurl']); ?></td>
</tr>


<tr>
<td class="total">IP Address</td>
<td class="text-left unit"><?php echo h($lead['Lead']['ipaddress']); ?></td>
</tr>

<tr>
<td class="total">Message</td>
<td class="text-left unit"><?php echo h($lead['Lead']['message']); ?></td>
</tr>

</tbody>

</table>
</div>
</div>
</div>

</div>
</div>

</div>

<!--end row-->

</div>
</div>
<!--end page-content-wrapper-->
</div>
<!--end page-wrapper-->
