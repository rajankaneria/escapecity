var baseURL;
$(function(){
	$('.modal').modal();
	baseURL= $("#base_url").val();

	//add modal open 
	
	$("#addtour").on("click",function(){
		$("#addtourModal").modal("open");
	});



	/*$('#details').val('');
  	$('#details').trigger('autoresize');

  	$('#msg').val('');
  	$('#msg').trigger('autoresize');*/

  	tinymce.init({ selector:'textarea' });


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

		//Blog

		//ADD BLOG 

		$("#addBlogBtn").on("click",function(){
			$("#addBlogModal").modal("open");
		});

		$("#sendBlogData").on("click",function(){
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

		$("#updateBlogdata").on("click",function(){
			var formData=new FormData($("#updateForm")[0]);
			$.ajax({
				url:baseURL+"Blog/updateBlog",
				data:formData,
				type:"POST",
				processData:false,
				contentType:false,
				success:function(result){
					alert("Blog updated successfully....");
					window.location.reload();
				}
			});
		});
		$(".blog-delete-btn").on("click",function(){		
			var dltnblog=$(this).data('blog-id');	
			if(confirm("Do you want  to delete this Record...")){		
				$.post(baseURL+"Blog/deleteBlog/"+dltnblog,function(data){
				$("#blog"+dltnblog).remove();
			});
		 }
		});


		//edit modal open	
		$(".blog-edit-btn").on("click",function(){
		$("#editBlogModal .modal-content").html("");
		$("#editBlogModal").modal("open");			
		var edtblog=$(this).data('blog-id');
		$.post(baseURL+"Blog/editBlog/"+edtblog,function(data){
			$("#editBlogModal .modal-content").html(data);
			 Materialize.updateTextFields();$('select').material_select();					
		});
	});

	//ADD TESTIMONIALS
	
	$("#addTest").on("click",function(){
		$("#addTestModal").modal('open');
	});

	$("#sendTestData").on("click",function(){
		var formData=new FormData($("#addTestForm")[0]);
		$.ajax({
			url:baseURL+"Testimonials/addTest/",
			data:formData,
			type:"POST",
			processData:false,
			contentType:false,
			success:function(result){
				//alert("Added Testimonial successfully.....");
				//window.location.reload();
			}

		});

	});
	$("#updateTest").on("click",function(){
		var formData=new FormData($("#updateTestForm")[0]);
		$.ajax({
			url:baseURL+"Testimonials/updateTest/",
			data:formData,
			type:"POST",
			processData:false,
			contentType:false,
			success:function(result){
				alert("Update Testimonial successfully.....");
				window.location.reload();
			}

		});

	});

	$(".test-edit-btn").on("click",function(){
		$("#editTestModal .modal-content").html("");
		$("#editTestModal").modal('open');
		var editTest=$(this).data('test-id');
		$.post(baseURL+"Testimonials/editTest/"+editTest,function(data){
			$("#editTestModal .modal-content").html(data);
			Materialize.updateTextFields();
		});			
		

	});




	$(".test-delete-btn").on("click",function(){
	var dltTest=$(this).data('test-id');
	if(confirm("Do you want to delete this Record....")){
		$.post(baseURL+"Testimonials/deleteTest/"+dltTest,function(data){
			$("#testid"+dltTest).remove();
		});		
	}

	});

	$("#login").on("click",function(){
		var data={
			"email":$("#email").val(),
			"password":$("#password").val()
		};
		$.post(baseURL+"admin/admin_login/",{data:data},function(data){
			var data=$.parseJSON(data);
			if(data.status=="ok"){
				alert("Login successfully........");
				window.location.href=baseURL+"admin/admin_tour/";
			}
			else if(data.status=="fail"){
				alert("Login Fail........");
				window.location.href=baseURL+"admin/login/";
			}
			else{
				console.log(data);
			}
			$("#form-login input").val(""); $("#login").val("Login");

		});

	});

	/*FOR CONTACT PAGE*/
	$("#send").on("click",function(){
	var data={
		"fullname":$("#fullname").val(),
		"email":$("#email").val(),
		"mobile":$("#mobile").val(),
		"msg":$("#msg").val()
		};
		$.post(baseURL+"contact/insertData/",{data:data},function(data){
			var data=$.parseJSON(data);
			if(data.status=="ok"){
				alert("Your Inquiry has been sent....Thank you");
				window.location.href="#!";
			}else if(data.status=="fail"){
				alert("Your Inquiry has been sent fail...");
				window.location.href="#!";
			}
			else{
				console.log(data);
			}

		});
		$("#contact input").val("");
		$("#contact textarea").val("");
		$("#send").val("Send");

	});

	//ADD Month

	$("#addMonth").on("click",function(){
		$("#addMonthModal").modal('open');

	});

	$("#sendMonthData").on("click",function(){
		var  formData=new FormData($("#addMonthForm")[0]);

		$.ajax({
			url:baseURL+"admin/addMonth/",
			data:formData,
			type:"POST",
			contentType:false,
			processData:false,
			success:function(result){
				//alert("Month added successfully......");
				//window.location.reload();
			}

		});

	});



	$("#updateMonth").on("click",function(){
		var formdata = new FormData($("#updateMonthForm")[0]);
		$.ajax({
			url:baseURL+"admin/updateMonth/",
			data:formdata,
			type:"POST",
			processData:false,
			contentType:false,
			success:function(result){
				//alert("Month Updated successfully....");
				//window.location.reload();
			}

		});

	});

	$(".delete-month-btn").on("click",function(){
		var monthID=$(this).data('month-id');
		if(confirm("Do you want to delete this data.. ?")){
		$.post(baseURL+"admin/deleteMonth/"+monthID,function(data){
			$("#month-id"+monthID).remove();
		});
		}

	});



	$(".edit-month-btn").on("click",function(){		
		$("#editMonthModal").modal('open');
		$("#editMonthModal .modal-content").html("");

		var monthID=$(this).data('month-id');
		$.post(baseURL+"admin/editMonth/"+monthID,function(data){
			$("#editMonthModal .modal-content").html(data);
			Materialize.updateTextFields();
		});

	});



});



