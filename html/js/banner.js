/*============================banner =================================*/
// banner model open
var baseURL;
$(function(){
	baseURL= $("#base_url").val();
  $("#addbanner").on("click",function(){
	$("#addBannerModel").modal("open");
  });

   $(".banner-edit-btn").on("click",function(){
      var bannerID = $(this).data("banner-id");
      $.post(baseURL+"admin/bannerDetail/"+bannerID,function(data){
        $("#upbannermodal .modal-content").html(data);
        $("#upbannermodal").modal("open");
        $('select').material_select();
      Materialize.updateTextFields();

      });

  });
   $(".banner-delete-btn").on("click",function(){
    var bannerID = $(this).data("banner-id");
    if(confirm("Do you want to delete this tour?")){
      $.post(baseURL+"Tour/deleteBanner/"+bannerID,function(data){
        $("#banner"+bannerID).remove();
      });
    }
  });

  /*$(".banner-edit-btn").on("click",function(){
  	  var bannerID = $(this).data("banner-id");
  	  $.post(baseURL+"admin/banner/"+bannerID,function(data){
  	  	$("#upbannermodal .modal-content").html(data);
  	  	$("#upbannermodal").modal("open");
  	  	$('select').material_select();
			Materialize.updateTextFields();

  	  });

  });*/


      $("#addBannerBtn").on("click",function(){
        var formData = new FormData($("#addBannerModel form")[0]);
        var baseURL = $("#base_url").val(); 
        $.ajax({
          url:baseURL+"tour/addBanner",
          type:"POST",
          contentType:false,
          processData:false,
          data:formData,
          success:function(result){
              alert("Add successfully..");
            $("#addBannerModel").modal("close");
          }

        }); 

      });


  
    $("#updatebannerButton").on("click",function(){
        var formData = new FormData($("#updateForm")[0]);
        var baseURL = $("#base_url").val();
        $.ajax({
          url:baseURL+"tour/updateBanner",
          type:"POST",
          contentType:false,
          processData:false,
          data:formData,
          success:function(result){
             alert("Update successfully..");
            $("#upbannermodal").modal("close");
          }
        });
    });
 
});