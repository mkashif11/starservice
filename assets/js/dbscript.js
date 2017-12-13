$( document ).ready(function(){
	
	$("#addNewSer").click(function(){
		$.ajax({
			type: "POST",
			url: base_url+'home/openaddservice',
			data: {},
			success: function(msg){
				$("html body").append(msg);
			},
			error : function(XMLHttpRequest, textStatus, errorThrown) {
				setUiMessege('err',errorThrown);
			}
		});
	});
	
});









