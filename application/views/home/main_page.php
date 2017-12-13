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
			<div class="table-responsive">   
				<table id="mytable" class="table table-bordred table-striped">
					<thead>
						<th>Name</th>
						<th>Contact</th>
						<th>Address</th>
						<th>Service date</th>
						<th>Edit</th>
						<th>Note</th>
					</thead>
					<tbody>
						<tr>
							<td>Mohsin Irshad</td>
							<td>+913335586757</td>
							<td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
							<td>15-Dec-2017</td>
							<td>
								<p data-placement="top" data-toggle="tooltip" title="Edit">
									<button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span>
									</button>
								</p>
							</td>
							<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
						</tr>
						<tr>
							<td>Mohsin Irshad</td>
							<td>+913335586757</td>
							<td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
							<td>15-Dec-2017</td>
							<td>
								<p data-placement="top" data-toggle="tooltip" title="Edit">
									<button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span>
									</button>
								</p>
							</td>
							<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
						</tr>
						<tr>
							<td>Mohsin Irshad</td>
							<td>+913335586757</td>
							<td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
							<td>15-Dec-2017</td>
							<td>
								<p data-placement="top" data-toggle="tooltip" title="Edit">
									<button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span>
									</button>
								</p>
							</td>
							<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
						</tr>
						<tr>
							<td>Mohsin Irshad</td>
							<td>+913335586757</td>
							<td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
							<td>15-Dec-2017</td>
							<td>
								<p data-placement="top" data-toggle="tooltip" title="Edit">
									<button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span>
									</button>
								</p>
							</td>
							<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
						</tr>
					</tbody>
				</table>
			</div>
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