

  /*
    Individual Page JS
  */
$(document).ready(function(){
  $('.problems-nav-options').dropdown({
    inDuration: 300,
    outDuration: 225,
    constrain_width: true, // Does not change width of dropdown to that of the activator
    hover: true, // Activate on hover
    gutter: 0, // Spacing from edge
    belowOrigin: true, // Displays dropdown below the button
    alignment: 'left' // Displays dropdown with edge aligned to the left of button
  });
  $('#link').css('visibility','hidden');
  $('.file-upload').css('visibility','hidden');
  $('#submitting-link').click(function(){
    $('#link').css('visibility','visible');
    $('.file-upload').css('visibility','hidden');
    $('input[name=upload-type]').val('link');
  });
  $('#submitting-file').click(function(){
    $('#link').css('visibility','hidden');
    $('.file-upload').css('visibility','visible');
    $('input[name=upload-type]').val('file');
  });
});
function doOpen(event){
  event = event || window.event;
  if(event.target.id != 'upload_file_button'){
      upload_file_button.click();
  }
}
