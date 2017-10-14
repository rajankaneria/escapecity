var baseURL;
$(function(){
	
	$(".modal").modal();
	$('select').material_select();
	baseURL=$("#base_url").val();
/*	$("#addAttractions").on("click",function(){
		$("#attractionsModal").modal('open');
	});*/

	$("#sendAttractions").on("click",function(){
	var formData = new FormData($('#addAttractionsForm')[0]);
		$.ajax({
        url:baseURL+"tour_details/addAttractions/",
        type: 'POST',
        processData: false,
        contentType: false,
        data: formData,
        success: function (result){
        	alert("Attractions Inserted Successfully");
        	window.location.reload();
        	}
   		});
	});


	$(".tour-attraction-edit-btn").on("click",function(){
		$("#attractionsModal").modal('open');
		var attractionId=$(this).data('tour-id');
		$.post(baseURL+"tour_details/tourByAttractions/"+attractionId,function(data){
			$("#attractionsModal .modal-content").html(data);
			$('ul.tabs').tabs();
			initEditAtt();
			initUpdateAtt();
			initDeleteAtt();
		});

	});

/*===Main function over==========*/
});

function initEditAtt(){
		$(".edit-attractions").on("click",function(){
		$("#editAttractionsModal").modal('open');
		$("#editAttractionsModal .modal-content").html("");
		var attractionsId=$(this).data('attractions-id');
		$.post(baseURL+"tour_details/editAttractions/"+attractionsId,function(data){
			$("#editAttractionsModal .modal-content").html(data);
			$(".modal").modal();
			Materialize.updateTextFields();
			  $('select').material_select();
		});
	});
}
function initUpdateAtt(){

	$("#updateAttractions").on("click",function(){
		var formData = new FormData($("#updateAttractionsForm")[0]);
		$.ajax({
        url:baseURL+"tour_details/updateAttractions/",
        type: 'POST',
        processData: false,
        contentType: false,
        data: formData,
        success: function (result){
        	alert("Attractions Update Successfully");
        	window.location.reload();
        	}
   		});
	});
}
function initDeleteAtt(){

	$(".delete-attractions").on("click",function(){
		var attractionsId=$(this).data('attractions-id');
		if(confirm("Do You want to delete this record..?")){
		$.post(baseURL+"tour_details/deleteAttractions/"+attractionsId,function(data){
			$("#attractions-id"+attractionsId).remove();
			});
		}
	});
}