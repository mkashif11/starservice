<div class="modal" style="display:block;" id="addservicepopup">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" id="closeservicepopup" onclick="closeservicepopup();"><span class="glyphicon glyphicon-remove" ></span></button>
				<h4 class="modal-title custom_align" id="Heading">Add Your Service</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<input class="form-control" type="text" placeholder="Name" id="name">
					<span id="name_error"></span>
				</div>
				<div class="form-group">
					<input class="form-control" type="text" placeholder="Contact" id="contact">
					<span id="contact_error"></span>
				</div>
				<div class="form-group">
					<input class="form-control" type="text" placeholder="Date" id="sdate">
					<span id="sdate_error"></span>
				</div>
				<div class="form-group">
					<textarea rows="2" class="form-control" placeholder="Address" id="address"></textarea>
					<span id="address_error"></span>
				</div>
			</div>
			<div class="modal-footer ">
				<button type="button" id="saveeservicepopup" onclick="saveeservicepopup();"class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>Save</button>
			</div>
		</div>
	</div>
</div>