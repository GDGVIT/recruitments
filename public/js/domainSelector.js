$(document).ready(function(){

  $.ajax({
      type: 'GET',
      url: '/api/user/domains',
      success: function(response){

        var selected = [];
        if(response.length > 0){
          selected = response;

         for( i = 0 ; i<response.length ; i++){
          if(selected[i] == 1){
            $("#change-technical").prop("checked" , true);
          }
          else if (selected[i] == 2){
            $("#change-management").prop("checked" , true);
          }
          else if (selected[i] == 3){
            $("#change-design").prop("checked" , true);
          }


          }

         }
        }
      });
 

  $('#change-modal .custom-submit').click(function(){
    var domains = "";
    var selected = [];
    if($('#change-modal #change-technical').prop('checked')){
      domains += "1,";
    }
    if($('#change-modal #change-management').prop('checked')){
      domains += '2,';
    }
    if($('#change-modal #change-design').prop('checked')){
      domains += '3,';
    }
    
    selected = domains.substring(0, domains.length-1);
    console.log(domains);
    $('input[name=domains]').attr("value" , selected);
    $('#change-modal form').submit();
  });
});
