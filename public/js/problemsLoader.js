$(document).ready(function(){


  /*Function to Populate the number of submissions of each domain*/
  /*$.ajax({
    type: 'GET',
    url: 'http://localhost:8000/api/user/problems/count',
    success: function(response){
      for(var i in response){
        $('span[data-domain='+(i+1)+']').html(response[i]);
      }
    }
  });*/
  /*Populate Tech Cards*/
 /* cardPopulater(1);*/

  /*Utility Card Populating Function*/
/*  function cardPopulater(id){
    var domainId = id;
    $.ajax({
      type: 'GET',
      url: 'http://localhost:8000/api/problems/'+domainId,
      success: function(response){
        var diffArray = ['Easy', 'Medium', 'Hard'];
        $('div[data-for='+domainId+']').empty();
        for(var i=0;i<response.length;i++){
          var problem = response[i];
          var questionTitle = problem.problem_statement;
          var questionDescription = problem.comments;
          //var difficulty = diffArray[problem.difficulty-1];
          //var answered = problem.answered?'Answered':'Not Answered';
          var answered = 'Answered';
          var difficulty = 'Easy';

          /*Populating a Card*/
        /*  $('<div class="question-card"><p class="question-card-header">'+questionTitle+'</p><p class="question-description">'+questionDescription+'</p><hr><span class="question-difficulty">Difficulty: '+difficulty+'</span><span class="right question-answered">'+answered+'</span></div>').appendTo($('div[data-for='+domainId+']'));
        }
      }
    });
  }*/

  $('.tabs li a').on('click',function(){
    cardPopulater($(this).attr('data-value'));
  });
/*
  $(document).on('click','.question-card',function(){
    window.location.assign('individualproblem.html');
  });*/

});
