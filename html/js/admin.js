var baseURL;
$(function(){
	baseURL= $("#base_url").val();

	//add modal open 
	
	$("#addtour").on("click",function(){
		$("#addtourModal").modal("open");
	});

	//edit modal open
	$(".tour-edit-btn").on("click",function(){
		var tourID = $(this).data("tour-id");
		$.post(baseURL+"admin/tourDetails/"+tourID,function(data){
			$("#updatetourmodel .modal-content").html(data);
			$("#updatetourmodel").modal("open");
			$('select').material_select();
			Materialize.updateTextFields();
		});

	});


	$(".tour-delete-btn").on("click",function(){
		var tourID = $(this).data("tour-id");
		if(confirm("Do you want to delete this tour?")){
			$.post(baseURL+"Tour/deleteTour/"+tourID,function(data){
				$("#tour"+tourID).remove();
			});
		}
	});

	//add tour
	$(function(){
	$("#addTourButton").on("click",function(){
		var formData = new FormData($("#addForm")[0]);
		var baseURL = $("#base_url").val();
		$.ajax({
			url:baseURL+"tour/add",
			type:"POST",
			contentType:false,
			processData:false,
			data:formData,
			success:function(result){
				alert("Added successfully.");
				$("#addtourModal").modal("close");
			    }
		     });
	      });
       });

	//update tour
	$("#updateTourButton").on("click",function(){

		var formData = new FormData($("#updateform")[0]);
		$.ajax({
			url:baseURL+"tour/update",
			type:"POST",
			contentType:false,
			processData:false,
			data:formData,
			success:function(result){
				alert("update successfully.");
				$("#updatetourmodel").modal("close");
			}
	 	  });
        });

		$("#addBlog").on("click",function(){
			$("#addBlogModal").modal("open");
		});

		$("#addBlog").on("click",function(){
			var formData=new FormData($("#addForm")[0]);
			$.ajax({
				url:baseURL+"Blog/addBlog",
				data:formData,
				type:"POST",
				processData:false,
				contentType:false,
				success:function(result){
					alert("Blog Added successfully....");
					window.location.reload();
				}

			});

		});

		$("#updateBlog").on("click",function(){
			var formData=new FormData($("#updateForm")[0]);
			$.ajax({
				url:baseURL+"Blog/updateBlog",
				data:formData,
				type:"POST",
				processData:false
				contentType:false
				success:function(result){
					alert("Blog updated successfully....");
					window.location.reload();
				}

			});

		});

		$(".blog-delete-btn").on("click",function(){
		
			var dltnblog=$(this).data('blog-id');			
			$.post(baseURL+"Blog/deleteBlog"+dltnblog,function(data){
				$("#blog"+dltnblog).remove();
			});
		});

		//edit modal open	

		$(".blog-edit-btn").on("click",function(){
		var edtblog=$(this).data('blog-id');
		$.post(baseURL+"Blog/blogDetails/"+edtblog,function(data){
			$("#updateBlogModal .modal-content").html(data);
			$("#updateBlogModal").modal("open");			
		});

	});

});



