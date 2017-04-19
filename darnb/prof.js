var isChecked;
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



     $("#settings").click(function(){
         var data={
            company_visible:isChecked,
            company_name:$("#company_name").val()
            
        };
        $.post("http://localhost:8080/site/company_tab.php",data,function(response){
            
            response=JSON.parse(response);
           
            if(response.status=="success"){
                console.log("success");
                console.log(response.button);
            }
        })


         if(isChecked=="checked"){
             $("#company_tab").removeClass('hide');
             $(".company_name_page").text($("#company_name").val());
         }else if(isChecked=="not Checked"){
             $("#company_tab").addClass('hide');
         }else{
             $("#company_tab").addClass('hide');
         }
        
    })
    $("#company_name").val($(".company_name_page").text());
    
});