var backtotop = $('#backtotop');

$(window).scroll(function() {
if ($(window).scrollTop() > 300) {
    backtotop.addClass('show');
} else {
    backtotop.removeClass('show');
}
});

backtotop.on('click', function(e) {
e.preventDefault();
$('html, body').animate({scrollTop:0}, '200');
});




function notEmpty(elem, helperMsg){
    if(elem.value.length == 0){
      alert(helperMsg);
      elem.focus(); // set the focus to this input
      return false;
    } else {
      return true;
    }
  }
  
  function somethingChecked(){
    
    for(var i = 0; i < document.form2["info[]"].length; i++){
      if(document.form2["info[]"][i].checked){
        return true;
      }
    }
    alert("Please select something you would like information on");
    return false;
  }
  
  function validate(){
    var name = document.getElementById('name');
    var email = document.getElementById('customer_mail');
    var message = document.getElementById('message');
    var phone = document.getElementById('phone_number');
    
    // Check each input in the order that it appears in the form!
    if(notEmpty(name, "Please enter your name")){
      if(notEmpty(email, "Please enter an email")){
        if(notEmpty(message, "Please enter a message")){
          if(notEmpty(phone, "Please enter a phone number")){
            if(somethingChecked()){
              alert("Your message is being sent");
              return true;
            }
          }
        }
      }
    }
    return false;
  }
  