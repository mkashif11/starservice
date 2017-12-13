$( document ).ready(function(){
	
	$("#login").click(function(){
		if($("#user").val()!="" && $("#passwd").val()!=""){
			$.ajax({
				type: "POST",
				url: base_url+'api/api/signin',
				data: {
					'user':$("#user").val(),
					'passwd':$("#passwd").val()
				},
				success: function(msg){
					if(msg.status=="success"){
						window.location=base_url+"home";
					}
				},
				error : function(XMLHttpRequest, textStatus, errorThrown) {
					setUiMessege('err',errorThrown);
				}
			});
		}else{
			setUiMessege('err',"Please enter user and password");
		}
	});
	
});









