(function($) {

	$(document).ready(function() {
		  var url = window.location.pathname, 
        urlRegExp = new RegExp(url.replace(/\/$/,'') + '$'); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
        var split = url.split('/');
        // now grab every link from the navigation
        $('#adminmenu').find('a').each(function(){
            // and test its normalized href against the url pathname regexp
            // if(urlRegExp.test(this.href.replace(/\/$/,''))){
            //     $(this).parent().addClass('current-menu').siblings().removeClass('current-menu');
            // }
            var ahref = $(this).attr('href').split('/');
            if($.inArray(ahref[5],split) != -1){
                 $(this).parent().addClass('current-menu').siblings().removeClass('current-menu');
            }
        });

        // if(urlRegExp.test(this.href.replace(/\/$/,''))){
        //         $('#adminmenu a').parent().addClass('current-menu').siblings().removeClass('current-menu');
        //     }

        // Date Picker
       $( ".datepicker" ).datepicker({
          changeMonth: true,
          changeYear: true,
          yearRange: '1800:2020'
        });

       $('.dd-icon').click(function(){
            $(this).prev('input').focus();
            return false;
       });

       $('.search-submit .fa').click(function(){
          $(this).prev('input').trigger('click');
       });

       $('.chosen').each(function(){
          $(this).chosen();
       });


       $("#form-voters").validate({
          rules: {
            name          : "required",
            surname       : "required",
            first_name    : "required",
            last_name     : "required",
            middle_name   : "required",
            in_favor_of   : "required",
            birth_date    : "required",
            gender        : "required",
            age           : "required",
            religion      : "required",
            occupation    : "required",
            educ_att      : "required",
            address       : "required",
            email         : { email: true},
            barangay_id   : "required",
            voters_id     : "required",
          }
        });

      $('[title]').each(function(){
        $(this).tooltipster();
      });

       $('.btn-upload').click(function(){
          $(this).next('input[type="file"]').trigger('click');
          return false;
       });

       $("#upload_photo").on("change", function()
        {
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
     
            if (/^image/.test( files[0].type)){ // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file
     
                reader.onloadend = function(){ // set image data as background of div
                    $("#imagePreview").css("background-image", "url("+this.result+")");
                }
            }
        });

	});



})(jQuery);
