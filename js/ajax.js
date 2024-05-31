/*******************************************************************************
	forms validation */
	$(document).ready(function(){
	 window.verifyRecaptchaCallback = function (response) {
        $('input[data-recaptcha]').val(response).trigger('change');
    }

    window.expiredRecaptchaCallback = function () {
        $('input[data-recaptcha]').val("").trigger('change');
    }

 // $('#contact-form').validator();

    $('#contact-form').on('submit', function(ee) {
        ee.preventDefault();
		 $.ajax({
                type: "POST",
                url: "contact.php",
                data: $(this).serialize(),
				 contentType: 'application/x-www-form-urlencoded',
				 processData: true,
				 cache: false,
				 beforeSend: function(){
					$("#contact-btn").html("Loading");
				 },
                success: function (data) {
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    $('#contact-form').find('#responsetext').html(alertBox).fadeIn();
					
					  $("#contact-btn").html("Submit");
					  var hash = "#response";

  
  $('html, body').animate({scrollTop: $(hash).offset().top }, 900, function(){
    window.location.hash = hash;
						
                    });
					if (data.type == "success") {
						 $('#contact-form')[0].reset();
								grecaptcha.reset();
					}
						
                },
				error: function(e){
					$("#responsetext").html("An error occurred: "+e.status+" "+e.statusText);
				},
				complete: function(){
				    
				    	grecaptcha.reset();
				}
            });
            return false;
    });
		  
		
	
	
	 $('#registrationform').on('submit', function (e) {
        e.preventDefault();
            var url = "";

            $.ajax({
                type: "POST",
                url: "register.php",
                data: $(this).serialize(),
				 contentType: 'application/x-www-form-urlencoded',
				 processData: true,
				 cache: false,
				 beforeSend: function(){
					$("#registerbtn").html("<i class=\"fa fa-spin\"></i> Loading");
				 },
                success: function (data) {
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    $('#registrationform').find('#registrationresponse').html(alertBox).fadeIn();
					
					  $("#registerbtn").val("Register");
					  var hash = "#ajaxresponse";

  
  $('html, body').animate({scrollTop: $(hash).offset().top }, 900, function(){
    window.location.hash = hash;
						
                    });
					if (data.type == "success") {
						 $('#registrationform')[0].reset();
								grecaptcha.reset();
					}
						
                },
				error: function(e){
					$("#registrationresponse").html("An error occurred: "+e.status+" "+e.statusText);
				},
					complete: function(){
				    	$("#registerbtn").html("<i class=\"fa fa-sign-in\"></i> Register");
				    	grecaptcha.reset();
				}
            });
            return false;
    });
	
	 $('#updateform').on('submit', function (ev) {
        ev.preventDefault();
            var url = "";

            $.ajax({
                type: "POST",
                url: "update.php",
                data: $(this).serialize(),
				 contentType: 'application/x-www-form-urlencoded',
				 processData: true,
				 cache: false,
				 beforeSend: function(){
					$("#updatebtn").html("<i class=\"fa fa-spinner fa-spin\"></i> Loading");
				 },
                success: function (data) {
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;
                    var lol = data.hnd;
                    if(lol !== "NIL"){
                        $("#me").html("Phone: "+lol);
                    }
                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    $('#updateform').find('#updateresponse').html(alertBox).fadeIn();
					
					  	$("#updatebtn").html("<i class=\"fa fa-upload\"></i> Update");
					  var hash = "#updater";

  
  $('html, body').animate({scrollTop: $(hash).offset().top }, 900, function(){
    window.location.hash = hash;
						
                    });
                    
						
                },
				error: function(e){
					$("#updateresponse").html("An error occurred: "+e.status+" "+e.statusText);
				},
					complete: function(){
				    	$("#updatebtn").html("<i class=\"fa fa-upload\"></i> Upload");
				}
            });
            return false;
    });
    
    
   
	  $("#changeimgform").submit(function(eve) {
        eve.preventDefault();
		$("#modalbtn").html("<i class='fa fa-spinner fa-spin'></i> uploading");
		//$("button span").addClass("fa-spin");
        $.ajax({
            url: "upload.php",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend : function()
            {
                $("#servertext").empty();
            },
            success: function(data)
            {
                 var servercontent = "";
				var statustype = data.type;
				var messagetype = data.message;
				var imagefile = data.imagedata;
				servercontent = "<div class='alert alert-";
				servercontent+=statustype;
				servercontent+="'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
				servercontent+=data.message;
				servercontent+="</div>";
				if(statustype && messagetype && imagefile){
					if(imagefile !="none"){
						$("#changeimgform").find("#servertext").html(servercontent).fadeIn();
						$("#profileimage").fadeOut();
						$("#profileimage").prop("src",imagefile).fadeIn();
						$("#modalbtn").html("<i class='fa fa-check-circle'></i> success");
					}
					else{
						$("#changeimgform").find("#servertext").html(servercontent).fadeIn();
						$("#modalbtn").html("<i class='fa fa-repeat'></i> try again");
					}
				}
            },
            error: function(xhr) 
            {
                $("#servertext").html("An error occured: "+xhr.status+" "+xhr.statusText);
            },
				
			complete: function(){
				$("#modalbtn").html("<i class='fa fa-upload'></i> upload");
				$("#changeimgform")[0].reset();
			}
       });
    });
    
	});