var isChecked;
var togglecheck;
$(function () {
    $('.input-group-addon.beautiful').each(function () {
        
        var $widget = $(this),
            $input = $widget.find('input'),
            type = $input.attr('type');
            settings = {
                checkbox: {
                    on: { icon: 'fa fa-check-circle-o' },
                    off: { icon: 'fa fa-circle-o' }
                },
                radio: {
                    on: { icon: 'fa fa-dot-circle-o' },
                    off: { icon: 'fa fa-circle-o' }
                }
            };
            
        $widget.prepend('<span class="' + settings[type].off.icon + '"></span>');
            
        $widget.on('click', function () {
            $input.prop('checked', !$input.is(':checked'));
            updateDisplay();
        });
            
        function updateDisplay() {
             isChecked = $input.is(':checked') ? 'on' : 'off';
                
            $widget.find('.fa').attr('class', settings[type][isChecked].icon);
                
            //Just for desplay
            isChecked = $input.is(':checked') ? 'checked' : 'not Checked';
            
             
        }
        
        updateDisplay();
    });

    



    //setting company tab to visible
       
           // $("#public_profile").checked=false;
            
        
     $("#settings").click(function(){
         
         var data={
            company_visible:isChecked,
            company_name:$("#company_name").val(),
            public_profile:$("#public_profile").is(":checked")
            
            
        };
       
        $.post("http://localhost:8080/Alumni-Tracker/index.php/alumni/company",data,function(response){
            
            response=JSON.parse(response);
           
            if(response.status=="success"){
                console.log("success");
                console.log(response.button);
                
                togglecheck=response.button
                location.reload();
                
            }else{
                console.log(response);
            }
        })


         
        
    })
    $("#company_name").val($(".company_name_page").text());
    
    // $("#post_interest").click(function(){
    //      var data={
    //         interest:$("#comment").val()
    //     };
       
    //     $.post("http://localhost:8080/site/post_interest.php",data,function(response){
            
    //         response=JSON.parse(response);
           
    //         if(response.status=="success"){
    //             console.log("success");
               
    //         }else{
    //             console.log(response);
    //         }
    //     })


         
        
    // })
    
     $("#about_me").click(function(){
         var data={
            contact:$("#contact").val(),
            degree:$("#degree").val(),
            birth_country:$("#birth_country").val(),
            graduated:$("#graduated").val(),
            email:$("#email").val(),
            degree_class:$("#degree_class").val(),
            occupation:$("#occupation").val(),
            
            
        };
       
        $.post("http://localhost:8080/Alumni-Tracker/index.php/alumni/aboutus",data,function(response){
            
            response=JSON.parse(response);
           
            if(response.status=="success"){
                console.log("success");
				location.reload();
                console.log(response.button);
            }else{
                console.log(response);
            }
        })


         
        
    })


    $("#button_company").click(function(){
         var data={
            Company_Name:$("#Company_Name").val(),
            About_Company:$("#About_Company").val(),
            Country_Employed:$("#Country_Employed").val(),
            Company_Email:$("#Company_Email").val(),
            
            
            
        };
       
        $.post("http://localhost:8080/Alumni-Tracker/index.php/alumni/company_info_tab",data,function(response){
            
            response=JSON.parse(response);
           
            if(response.status=="success"){
                console.log("success");
                console.log(response.button);
                location.reload();
            }else{
                console.log(response);
            }
        })


         
        

    })
        $("#social").click(function(){
         var data={
            Company_Name:$("#Company_Name").val(),
            About_Company:$("#About_Company").val(),
            Country_Employed:$("#Country_Employed").val(),
            Company_Email:$("#Company_Email").val(),
            
            
            
        };
       
        $.post("http://alumnit.azurewebsites.net/index.php/alumni/company_info_tab",data,function(response){
            
            response=JSON.parse(response);
           
            if(response.status=="success"){
                console.log("success");
                console.log(response.button);
                location.reload();
            }else{
                console.log(response);
            }
        })


         
        

    })
    $("#post_interest").click(function(){
         var data={
            comment:$("#comment").val()
         };
          $.post("http://alumnit.azurewebsites.net/index.php/alumni/interest",data,function(response){
              response=JSON.parse(response);
              if(response.status=="success"){
                console.log("success");
                console.log(response.button);
                location.reload();
            }else{
                console.log(response);
            }

          })


    })
        
        $("#social_submit").click(function(){
         var data={
            fb:$("#fb").val(),
            li:$("#li").val(),
            tr:$("#tr").val()
         };
          $.post("http://alumnit.azurewebsites.net/index.php/alumni/social",data,function(response){
              response=JSON.parse(response);
              if(response.status=="success"){
                console.log("success");
                console.log(response.button);
                location.reload();
            }else{
                console.log(response);
            }

          })


    })
    
});