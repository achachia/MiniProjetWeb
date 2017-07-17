// JavaScript Validation For Registration Page

$('document').ready(function()
{ 		 		
		 // name validation
		 var nameregex = /^[a-zA-Z ]+$/;
		 
		 $.validator.addMethod("validname", function( value, element ) {
		     return this.optional( element ) || nameregex.test( value );
		 }); 
		 
		 // valid email pattern
		 var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		 
		 $.validator.addMethod("validemail", function( value, element ) {
		     return this.optional( element ) || eregex.test( value );
		 });
		 
		 $("#register-form").validate({
					
		  rules:
		  {
				name: {
					required: true,
					validname: true,
					minlength: 4
				},
				email : {
				required : true,
				validemail: true,
				remote: {
					url: "check-email.php",
					type: "post",
					data: {
						email: function() {
							return $( "#email" ).val();
						}
					}
				}
				},
				password: {
					required: true,
					minlength: 8,
					maxlength: 15
				},
				cpassword: {
					required: true,
					equalTo: '#password'
				},
		   },
		   messages:
		   {
				name: {
					required: "Name is required",
					validname: "Name must contain only alphabets and space",
					minlength: "your name is too short"
					  },
				email : {
				required : "Email is required",
				validemail : "Please enter valid email address",
				remote : "Email already exists"
			},
				password:{
					required: "Password is required",
					minlength: "Password at least have 8 characters"
					},
				cpassword:{
					required: "Retype your password",
					equalTo: "Password did not match !"
					}
		   },
		   errorPlacement : function(error, element) {
			  $(element).closest('.form-group').find('.help-block').html(error.html());
		   },
		   highlight : function(element) {
			  $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		   },
		   unhighlight: function(element, errorClass, validClass) {
			  $(element).closest('.form-group').removeClass('has-error');
			  $(element).closest('.form-group').find('.help-block').html('');
		   },
		   	
				submitHandler: submitForm
				
		   }); 
		   
		   
		   function submitForm(){
			   
			   $.ajax({
				
				      type : 'POST',
					  async: false,
					  url  : 'ajax-signup.php',
					  data : $('#register-form').serialize(),
					  dataType : 'json',
					 			  
					  success : function(data){
						  
						  
							  console.log(data);
							  
							  
							  $('button').html('<img src="ajax-loader.gif" /> &nbsp; signing up...').attr('disabled', 'disabled');
							   
							   setTimeout(function(){
								   
								   if ( data.status==='success' ) {
									   
									   $('#errorDiv').slideDown(200, function(){
											$('#errorDiv').html('<div class="alert alert-info">'+data.message+'</div>');
											$('#errorDiv').delay(3000).slideUp(100);
											$("#register-form")[0].reset();
											$('#btn-signup').html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign Me Up');
											$('#btn-signup').removeAttr('disabled');
							   	  	   });
									   
								   } else {
									   
									    $('#errorDiv').slideDown(200, function(){
											 $('#errorDiv').html('<div class="alert alert-danger">'+data.message+'</div>');
											 $('#errorDiv').delay(3000).slideUp(100);
											 $('#btn-signup').html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign Me Up');
											 $('#btn-signup').removeAttr('disabled');
										 });
								   }
								  
							   },3000);
							   
							   
					  },
					  error: function(){alert('Error!')}
				   
			   });
			   
			   return false;
		   }
});