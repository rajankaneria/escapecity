var baseURL;
$(function(){
	$(".modal").modal();
	$('select').material_select();
	baseURL=$("#base_url").val();
	$("#addItinrary").on("click",function(){
		$("#itinraryModal").modal('open');
	});

	


		/*========Tour======*/		

	$(".tour-itinrary-edit-btn").on("click",function(){
		$("#itinraryModal").modal('open');			
		var itinraryID=$(this).data('tour-id');
		$.post(baseURL+"tour_details/tourByItinrary/"+itinraryID,function(data){
			$("#itinraryModal .modal-content").html(data);
			$('ul.tabs').tabs();
			$('select').material_select();
			initEditItinrary();
			initUpdateItinrary();
			initDeleteItinrary();
			initAddItinrary();
		});
	});
/*===Main function over==========*/
});
function initEditItinrary(){
	$(".edit-itinrary").on("click",function(){
		$("#itinraryModal").modal('close');
		$("#editItinraryModal").modal('open');		
		$("#editItinraryModal .modal-content").html("");
		var itinraryId=$(this).data('itinrary-id');
		$.post(baseURL+"tour_details/editItinrary/"+itinraryId,function(data){
			$("#editItinraryModal .modal-content").html(data);
			Materialize.updateTextFields();
			$('select').material_select();
		});
	});
}


function initUpdateItinrary(){
	$("#updateItinrary").on("click",function(){
		var formData = new FormData($('#updateItinraryForm')[0]);
		$.ajax({
		    url:baseURL+"tour_details/updateItinrary/",
		    type: 'POST',
		    processData: false,
		    contentType: false,
		    data: formData,
		    success: function (result){
		    	alert("Update Updated Successfully");
		    	window.location.reload();
		    }
		});
	});
}


function initDeleteItinrary(){
	$(".delete-itinrary").on("click",function(){
		var itinraryId=$(this).data('itinrary-id');
		if(confirm("Do You want to delete this record..?")){
		$.post(baseURL+"tour_details/deleteItinrary/"+itinraryId,function(data){
			$("#itinrary-id"+itinraryId).remove();
			});
		}
	});
}


function initAddItinrary(){
	$("#sendItinrary").off("click");
	$("#sendItinrary").on("click",function(){
		var formData = new FormData($('#addItinraryForm')[0]);
		$.ajax({
		    url:baseURL+"tour_details/addItinrary/",
		    type: 'POST',
		    processData: false,
		    contentType: false,
		    data: formData,
		    success: function (result){
		    	alert("Itinrary Inserted Successfully");
		    	//window.location.reload();
		    }
		});
	});
}