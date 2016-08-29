$(document).ready(function(){
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
    $('#change-modal form input').val(domains.substring(0, domains.length-1));
    $('#change-modal form').submit();
  });
});
