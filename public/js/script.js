$(document).ready(function(){
  $('#modal-trigger').click(function(){
    swal({
      title: '',
      showConfirmButton: false,
      padding: 80,
      background: 'rgb(51,51,51)',
      text: '<a href="login.html" style="color: white;margin-right: 10%;"><button class="custom-button">Login</button></a><a href="register.html"><button class="register-button">Register</button></a>'
    });
  });
  $('.links a').click(function(){
    if(!($(this).hasClass('active-link'))){
      $('#'+$(this).attr('data-to')).css('display','block');
      $.smoothScroll({
        scrollElement: $('.content'),
        scrollTarget: '#'+$(this).attr('data-to')
      });
      //Change Images Of Remaining Buttons
      var number = +$(this).attr('data-number');
      for(var i=0;i<3;i++){
        if(i<number){
          $('.links a:nth-child('+(i+1)+')').find($('img')).attr('src','images/Scroll Up.png');
        } else if(i>number){
          $('.links a:nth-child('+(i+1)+')').find($('img')).attr('src','images/Scroll Down.png');
        }
      }
      $('.links a.active-link').removeClass('active-link');
      //Give the Current Element the Active Class
      $(this).find($('img')).attr('src', 'images/Button Selected.png');
      $(this).addClass('active-link');
    }
  });
});
