$(document).ready(function(){



	// Show/Hide nav top button
	$(window).scroll(function (event) {
	    var scroll = $(window).scrollTop();
	    if (scroll > 200) {
	    	$('.nav--top').addClass('active');
	    }
	    else{
	    	$('.nav--top').removeClass('active');
	    }
	});


	// Smooth Scrolling
	// Select all links with hashes
	$('a[href*="#"]')
	  // Remove links that don't actually link to anything
	  .not('[href="#"]')
	  .not('[href="#!"]')
	  .not('[href="#0"]')
	  .not('[href="#gallery__image"]')
	  .click(function(event) {
	    // On-page links
	    if (
	      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
	      && 
	      location.hostname == this.hostname
	    ) {
	      // Figure out element to scroll to
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	      // Does a scroll target exist?
	      if (target.length) {
	        // Only prevent default if animation is actually gonna happen
	        event.preventDefault();
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000, function() {
	          // Callback after animation
	          // Must change focus!
	          var $target = $(target);
	          $target.focus();
	          if ($target.is(":focus")) { // Checking if the target was focused
	            return false;
	          } else {
	            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
	            $target.focus(); // Set focus again
	          };
	        });
	      }
	    }
	});



	// Close navbar collapse when click link on mobile
	$('.navbar-collapse a').on('click', function(){
		$('.navbar-collapse').removeClass('show');
	});


	// Banner Table
	$('#banner_table').DataTable({
    	paging: false,
    	info: false,
    	searching: false
    });

    // Service Table
	$('#service_table').DataTable({
    	paging: false,
    	info: false,
    	searching: false
    });

    // Testimonial Table
	$('#testimonial_table').DataTable({
    	paging: false,
    	info: false,
    	searching: false
    });

    // Blog Table
	$('#blog_table').DataTable({
    	paging: true,
    	info: true,
    	searching: true,
    	lengthMenu: [5,10]
    });





    // Upload button
    var preview = document.querySelector('#about__example');
	var upload = document.querySelector('#about__upload');
	$('#about__upload').on('change', function(){
		FileUpload(preview, upload);
	});


	/*var preview1 = document.querySelector('#banner__example');
	var upload1 = document.querySelector('#banner__upload');
	$('#banner__upload').on('change', function(){
		FileUpload(preview1, upload1);
	});*/

});



// banner uploader
function bannerFile(){
   var preview = document.querySelector('#banner__example'); //selects the query named img
   var file    = document.querySelector('#banner__upload').files[0]; //sames as here
   var reader  = new FileReader();

   reader.onloadend = function (e) {
       $('#banner__example').css('background', 'transparent url('+e.target.result +') bottom center no-repeat');
   }

   if (file) {
       reader.readAsDataURL(file); //reads the data as a URL
   } else {
       $('#banner__example').css('background', 'transparent url("../../img/banner/banner1.jpg") bottom center no-repeat');
   }
}



function FileUpload(preview, upload){
   //var preview = preview('#service__example'); //selects the query named img
   var file    = upload.files[0]; //sames as here
   var reader  = new FileReader();

   reader.onloadend = function (e) {
      preview.src = reader.result;
   }

   if (file) {
       reader.readAsDataURL(file); //reads the data as a URL
   } else {
       preview.src = "";
   }
}




window.onload = function(){   
    //Check File API support
    if(window.File && window.FileList && window.FileReader)
    {
        $('#gallery__upload').on("change", function(event) {
            var files = event.target.files; //FileList object
            var output = document.getElementById("result");
            for(var i = 0; i< files.length; i++)
            {
                var file = files[i];
                //Only pics
                // if(!file.type.match('image'))
                if(file.type.match('image.*')){
                    // if(this.files[0].size < 2097152){    
                    if(this.files[0]){
                  // continue;
                    var picReader = new FileReader();
                    picReader.addEventListener("load",function(event){
                        var picFile = event.target;
                        var div = document.createElement("div");
                        div.setAttribute('class', 'col-md-3 col-lg-3 gallery__image');
                        // div.innerHTML = "<img class='img-fluid thumbnail' src='" + picFile.result + "'" +
                        //         "title='preview image'/>";
                        div.innerHTML = "<img class='img-fluid thumbnail' src='" + picFile.result + "'" +
                                "title='preview image'/>"+
                                "<div class='btn btn--close remove'>X</div>";
                        output.insertBefore(div,null);            
                    });
                    //Read the image
                    $('#clear, #result').show();
                    picReader.readAsDataURL(file);
                    }else{
                        // alert("Image Size is too big. Minimum size is 2MB.");
                        $(this).val("");
                    }
                }else{
                alert("You can only upload image file.");
                $(this).val("");
            }
            }                               
           
        });
    }
    else
    {
        console.log("Your browser does not support File API");
    }
}

   /*$('#album_upload').on("click", function() {
        $('.thumbnail').parent().remove();
        $('#result').hide();
        $(this).val("");
    });*/

    /*$('.btn--close').on("click", function() {
        $('.thumbnail').parent().remove();
        $('#result').hide();
        $('#album_upload').val("");
        $(this).hide();
    });*/

    $(document).on("click", ".remove", function() {
        $(this).parent().remove();
    });