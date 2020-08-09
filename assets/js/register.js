$(document).ready(function(){
  //On clicking signUp, hide login and show registration form
  $("#signUp").click(function(){
      $("#first").slideUp("slow", function(){
          $("#second").slideDown("slow");
      });
  });
 
  //On clicking signIn, hide registration and show login form
  $("#signIn").click(function(){
    $("#second").slideUp("slow", function(){
        $("#first").slideDown("slow");
    });
});
});


//Fading welcome template div


setTimeout(fade_out, 1000);

function fade_out() {
  $(".wrapper").slideDown( "slow" );
}
    