$(document).ready(function(){
$("#ajax-contact-form").submit(function(){
var str = $(this).serialize();
$.ajax({
  type: "POST",
  url: "/contactform/contact.php",
  data: str,
  success: function(msg){
    $("#note").ajaxComplete(function(event, request, settings){
    if(msg == 'OK') {
      result = '<div class="notification_ok">Ditt meddelande har skickats.<br />You mail was sent. Thank you!</div>';
      $("#fields").hide();
    }
    else {
      result = msg;
    }
    $(this).hide();
    $(this).html(result).slideDown("slow");
    $(this).html(result);
  }); }
});
return false;
});
});