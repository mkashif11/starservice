$( document ).ready(function(){
	$("#login").click(function(){
		if($("#user").val()!="" && $("#passwd").val()!=""){
			$.ajax({
				type: "POST",
				url: base_url+'index/signin',
				data: {
					'user':$("#user").val(),
					'passwd':$("#passwd").val()
				},
				success: function(msg){
					var jsonObj = $.parseJSON(msg);
					if(jsonObj.status=="success"){
						window.location=base_url+"home";
					}else{
						setUiMessege('err','Login failed');
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









