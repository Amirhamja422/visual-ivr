function register_new_link(){
	var isValidate = true;
	var cust_name =$('#cust_name').val();
	var contact =$('#contact').val();
	if(cust_name=='' ||contact==''){
	  $('#msg_error').html('All fields are mandatory');
	  $("#msg_error").show();
	  isValidate = false;
	} else {
		$("#msg_error").hide();
		$.ajax({
			url:"pages/account_action.php",
			type:'POST',
			data:{
			  cust_name:cust_name,
			  contact:contact
			},
			dataType: 'json',
			success:function(data){
			  //console.log(data);			  
			  if(data['message']==='success'){
				//alert(data['token']);
				window.location.replace(data['url']);
			  } else if(data['message']==='error'){
				//$('#msg_error').html('Invalid Account Number');
				$('#msg_error').html('Something wents worng!');
				$("#msg_error").show();
			  }
			}
		});
	}
}

function account_submit(){
  var acount_no =$('#acount_no').val();
  var tpin =$('#tpin').val();
  $.ajax({
    url:"pages/account_action.php",
    type:'POST',
    data:{
      acount_no:acount_no,
      tpin:tpin
    },
    success:function(data){
      console.log(data);
      if ($.trim(data) ==='not_match') {
        $('#msg_error').html('Invalid account or TPIN');
        $("#msg_error").show();
      }else{
        //loader('account_OTP',acount_no);
		loader('account_menu',acount_no);
        $("#msg_error").hide();
      } 
    }
  });
}


function account_otp_submit(){
  var account_no =$('#account_no').val();
  var account_otp =$('#account_otp').val();
  $.ajax({
    url:"pages/account_action.php",
    type:'POST',
    data:{
      account_no:account_no,
      account_otp:account_otp
    },
    success:function(data){
      if ($.trim(data) ==='failed') {
        $('#msg_error').html('Invalid OTP  or Expired OTP');
        $("#msg_error").show();
      }else{
        loader('account_menu',account_no);
        $("#msg_error").hide();
      }
    }
  });
}

function statement_request(){
  var account_no =$('#account_no').val();
  var start_date =$('#start_date').val();
  var end_date =$('#end_date').val();
  $.ajax({
    url:"pages/account_action.php",
    type:'POST',
    data:{
      start_date:start_date,
      end_date:end_date,
      account_no:account_no
    },
    success:function(data){
      if ($.trim(data) ==='failed') {
        $('#msg_error').html('Failed try leter');
        $("#msg_error").show();
      }else{
        $("#msg_success").show();     
        $("#msg_error").hide();
        $("#msg_success").html('Requst Submitted successfully');        
        //loader('account_menu',account_no);
      }
    }
  });
}


function tpinchange(){
  var old_tpin =$('#old_tpin').val();
  var new_tpin =$('#new_tpin').val();
  var dob =$('#dob').val();
  var account_no = $('#account_no').val();

  $.ajax({
    url:"pages/account_action.php",
    type:'POST',
    data:{
      old_tpin:old_tpin,
      new_tpin:new_tpin,
      dob:dob,
      account_no:account_no
    },
    success:function(data){
      if ($.trim(data) ==='failed') {
        $('#msg_error').html('Failed To Change TPIN');
        $("#msg_error").show();
      }else{
        $("#msg_success").show();     
        $("#msg_error").hide();
        $("#msg_success").html('Account TPIN Changed');
        //setInterval(function(){ loader('main_menu','')}, 3000);
      }      
    }
  });

}


function register(){
  var formData = new FormData();
  // get all input and select item in a form
  $('#dataupload input[type=text],#dataupload input[type=email],#dataupload input[type=number],#dataupload input[type=file],#dataupload select#account_type').each(function(i,item){
    if(item.type == 'file'){
      formData.append(item.name,item.files[0]);
    }else {
      formData.append(item.name,item.value);
    }
  })
  $.ajax({
    url:"pages/account_action.php",
    type:"POST",
    data:formData,
    contentType:false,
    processData:false,
    success:function(data){
      if ($.trim(data) ==='failed') {
        $('#msg_error').html('Failed to register Account Request');
        $("#msg_error").show();
      }else{
        loader('main_menu','');
        $("#msg_error").hide();
        $("#msg_success").html('Request Submitted successfully');
        $("#msg_success").show();
      }

    }
  });
}

function accountinfo(){
  var account_number =$('#account_number').val();
  var tpin =$('#tpin').val();
  $.ajax({
    url:"pages/credit_card_service_post.php",
    type:'POST',
    data:{
      account_number:account_number,
      tpin:tpin
    },
    success:function(data){
      if (data ==0) {
        alert('Data Not Mach')
      }else{
        loader('otp_info');
      }
    }
  });
}