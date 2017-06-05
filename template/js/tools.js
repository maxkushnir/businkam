$(document).ready(function(){

	$(".deleteAjax").click(function(){
		var nameModel = $(this).attr("data-nameModel");
		var id = $(this).attr("data-id");
		var parent = $(this).parent().parent();
		console.log(nameModel+" "+id);
		deleteAjax(nameModel,id,parent);
	});
});

function deleteAjax(nameModel,id,parent){

	var server = "/ajax";
	var oData = {
		"nameModel":nameModel,
		"id":id,
		"action":"delete"
	};

	$.ajax({

		cache: false,
		timeout: 10000,
	  url: server,//SERVER_NAME,
	  type: "POST",
	  data: (oData),

	  beforeSend: function () {
	    parent.hide();

	    },

	  success: function (data, textStatus, jqXHR) {
            	// if(data==1){
            		// console.log(data);
          parent.remove();
            	// }else{
            	// 	parent.show();
            	// 	alert(data);
            	// }

            },

    error: function (jqXHR, textStatus, errorThrown) {
          parent.show();
          },

    complete: function (jqXHR, textStatus) {
          }
        });
}