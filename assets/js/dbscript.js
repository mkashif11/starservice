$( document ).ready(function(){
	$("#addNewSer").click(function(){
		$.ajax({
			type: "POST",
			url: base_url+'home/openaddservice',
			data: {},
			success: function(msg){
				$("body").append(msg);
				$("#sdate").datepicker({
					changeMonth: true,
					changeYear: true,
					dateFormat:'dd-mm-yy'
				});
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {
				setUiMessege('err',errorThrown);
			}
		});
	});
	
});


function closeservicepopup(){
	$("body #addservicepopup").remove();
}

function saveeservicepopup(){
	var validateArray = Array();
		validateArray.push("name");
		validateArray.push("contact");
		validateArray.push("sdate");
		validateArray.push("address");

	if(validateinput(validateArray)){
		return false;
	}else{
		$.ajax({
			type: "POST",
			url: base_url+'home/service',
			data: {
				name:$("#name").val(),
				contact:$("#contact").val(),
				sdate:$("#sdate").val(),
				address:$("#address").val()
			},
			success: function(msg){
				var jsonObj = $.parseJSON(msg);
				if(jsonObj.status=="success"){
					closeservicepopup();
					setUiMessege('suc',jsonObj.msg);
					window.location = base_url+"home";
				}else{
					setUiMessege('err',jsonObj.msg);
				}
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {
				setUiMessege('err',errorThrown);
			}
		});
	}
}

function editservic(id){
	$.ajax({
		type: "POST",
		url: base_url+'home/editservice',
		data: {
			id:id
		},
		success: function(msg){
			$("body").append(msg);
			$("#sdate").datepicker({
				changeMonth: true,
				changeYear: true,
				dateFormat:'dd-mm-yy'
			});
		},
		error : function(XMLHttpRequest, textStatus, errorThrown) {
			setUiMessege('err',errorThrown);
		}
	});
}

function updateservicepopup(id){
	var validateArray = Array();
		validateArray.push("name");
		validateArray.push("contact");
		validateArray.push("sdate");
		validateArray.push("address");
	if(validateinput(validateArray)){
		return false;
	}else{
		$.ajax({
			type: "POST",
			url: base_url+'home/updateservice',
			data: {
				id:id,
				name:$("#name").val(),
				contact:$("#contact").val(),
				sdate:$("#sdate").val(),
				address:$("#address").val()
			},
			success: function(msg){
				var jsonObj = $.parseJSON(msg);
				if(jsonObj.status=="success"){
					closeservicepopup();
					setUiMessege('suc',jsonObj.msg);
					window.location = base_url+"home";
				}else{
					setUiMessege('err',jsonObj.msg);
				}
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {
				setUiMessege('err',errorThrown);
			}
		});
	}
}

function deleteservic(id){	
	swal({
	  title: "Are you sure?",
	  text: "Do you want to delete this service!",
	  type: "warning",
	  showCancelButton: true,
	  confirmButtonColor: "#DD6B55",
	  confirmButtonText: "Yes, delete it!",
	  closeOnConfirm: false
	},
	function(){
		$.ajax({
			type: "POST",
			url: base_url+'home/deleteservic',
			data: {
				id:id
			},
			success: function(msg){
				var jsonObj = $.parseJSON(msg);
				if(jsonObj.status=="success"){
					setUiMessege('suc',jsonObj.msg);
					swal("Deleted!", "Service has been deleted.", "success");
					window.location = base_url+"home";
				}else{
					setUiMessege('err',jsonObj.msg);
				}
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {
				setUiMessege('err',errorThrown);
			}
		});
	});
}


