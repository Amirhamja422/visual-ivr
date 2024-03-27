function creditCardInfo(){
  var card_number =$('#card_number').val();
  var tpin =$('#tpin').val();
  console.log(card_number + tpin);
  $.ajax({
    url:"pages/credit_card_service_post.php",
    type:'POST',
    data:{
      card_number:card_number,
      tpin:tpin
    },
    success:function(data){
      if ($.trim(data) ==='not_match') {
        $('#msg_error').html('Invalid account or TPIN');
        $("#msg_error").show();
      }else{
        loader('OTP_info',card_number);
        $("#msg_error").hide();
      }
    }
  });
}

function credit_otp_submit(){
  var card_no    = $('#card_no').val();
  var credit_otp = $('#credit_otp').val();
  $.ajax({
    url:"pages/credit_card_service_post.php",
    type:'POST',
    data:{
      card_no:card_no,
      credit_otp:credit_otp
    },
    success:function(data){
      console.log(data);
      if ($.trim(data) ==='failed') {
        $('#msg_error').html('Invalid OTP  or Expired OTP');
        $("#msg_error").show();
      }else{
        loader('credit_card_menu',card_no);
        $("#msg_error").hide();
      }      
    }
  });
}