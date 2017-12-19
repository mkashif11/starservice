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
			type: "PUT",
			url: base_url+'api/api/service',
			data: {
				name:$("#name").val(),
				contact:$("#contact").val(),
				sdate:$("#sdate").val(),
				address:$("#address").val()
			},
			success: function(msg){
				if(msg.status=="success"){
					closeservicepopup();
					setUiMessege('suc',msg.msg);
					window.location = base_url+"home";
				}else{
					setUiMessege('err',msg.msg);
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
			url: base_url+'api/api/updateservice',
			data: {
				id:id,
				name:$("#name").val(),
				contact:$("#contact").val(),
				sdate:$("#sdate").val(),
				address:$("#address").val()
			},
			success: function(msg){
				if(msg.status=="success"){
					closeservicepopup();
					setUiMessege('suc',msg.msg);
					window.location = base_url+"home";
				}else{
					setUiMessege('err',msg.msg);
				}
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {
				setUiMessege('err',errorThrown);
			}
		});
	}
}




