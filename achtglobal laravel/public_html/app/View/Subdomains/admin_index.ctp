<?php ?>
<!--page-wrapper-->
<div class="page-wrapper">
<!--page-content-wrapper-->
<div class="page-content-wrapper">
<div class="page-content">
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
<div class="breadcrumb-title pr-3">Manage Subdomains</div>
<div class="pl-3">
<nav aria-label="breadcrumb">
<ol class="breadcrumb mb-0 p-0">
<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
</li>
<li class="breadcrumb-item active" aria-current="page">Subdomains</li>
</ol>
</nav>
</div>
<div class="ml-auto">
<div class="btn-group">
<?php 
echo $this->Html->link("<i class=\"icon-plus\"></i>New Subdomain",
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
<h4 class="mb-0">Manage Subdomains</h4>
</div>
<hr/>
<div class="table-responsive">
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
<th width="5%">ID</th>
<th width="35%">Name</th>
 <th>Status</th>		
<th class="actions">Actions</th>
</thead>
<tbody>
<?php $i = 0; foreach ($subdomains as $subdomain): $i++; ?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo h($subdomain['Subdomain']['name']); ?></td>
 

<td>
<?php				

$options = array( '1' => 'Active', '0' => 'Inactive');
echo $this->Form->select('active', $options, array('empty'=>false, 'name'=>'data[Subdomain][active]', 'default'=>$subdomain['Subdomain']['active'], 'class'=>'form-control ddStatus', 'data-subdomain_id'=>$subdomain['Subdomain']['id']));

?>
							
</td>



<td class="actions">
<div class="action-buttons"> 
<?php 
echo $this->Html->link("<i class=\"bx bx-pencil\"> </i>",
array( 'action' => 'edit', $subdomain['Subdomain']['id']),
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


      <script type="text/javascript">     
        $(document).on('change', '.ddStatus', function(e) {
            var element = $(this); 
            currentStatus = $(this).val(); 
            $.ajax({
                type: 'POST',
                url: '<?php echo Router::url(array('controller'=>'subdomains', 'action'=>'change_subdomain_status'))?>',
                data: 'subdomain_id='+element.data('subdomain_id')+'&status='+currentStatus,
                success: function(jsonResponse) {
                    var response = $.parseJSON(jsonResponse);
                    if(response.status != 'success')
                    {
                        element.val(!currentStatus);
                    }
                    
                    alert(response.message);
                    }
                });
            });            
  </script> 
  