
<?php
//print_r($getServiceData);die;
?>

<div class="container" style="margin-top: 50px;">
	<div class="panel-heading">
		<div class="row">
			<nav class="navbar navbar-default" role="navigation" style="min-height: 0;border-radius: 10px;">
				<a class="btn btn-lg btn-success" href="javascript:void(0);" id="addNewSer">
					<i class="glyphicon glyphicon-plus"></i>&nbsp;Add New Service
				</a>
			</nav>
		</div>
	</div>
	<div class="row">
        <div class="col-md-12">
		<?php
			foreach($getServiceData as $serviceData){
		?>
			<div class="card">
				<h3 class="card-header"><?php echo ucfirst($serviceData['name']);?></h3>
				<div class="card-block">
					<h4 class="card-title"><?php echo "+91 ".$serviceData['contact'];?></h4>
					<p class="card-text"><?php echo date("d-M-Y",strtotime($serviceData['service_date']));?></p>
					<p class="card-text"><?php echo $serviceData['address'];?></p>
				</div>
			</div>
		<?php
			}
		?>
        </div>
	</div>
</div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>