

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
  $('.file-upload').click(function(){
    $('input[type=file]').click();
  });
});
