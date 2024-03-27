
<div class="header_menu">
  <p style="color: #fff;">Bill Payment</p>
</div>
<div class="main_body">
  <div id="message"></div>
  <form method="post">
    <div class="btn">
      <div class="btn_icon">
        <img src="img/bill_payment.png">
      </div>
      <div class="btn-right">
        <!-- <img src="../img/icon_bar.png" onclick="playAudio1()"> -->
        <input type="" name="bill_number" id="bill_number" class="form-control" placeholder="Bill Number" style="height: 22px;">         
      </div>
    </div>
    <div class="btn" style="margin-top: 15px;">
      <div class="btn_icon">
      </div>
      <div class="btn-right">
       <button id="submit" type="submit">Search</button> <br>       
     </div>
   </div>
 </form>
</div>
<!-- script src="js/custom.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript">

  $('#submit').click(function () {
    let bill_number = $('#bill_number').val();
    $.ajax({
      'url': 'bill_payment_action.php',
      'method': 'POST',
      'data': {'bill_number': bill_number},
      'success': function (data) {
     // alert(data);
     $('#message').fadeIn('fast').html(data);
     $('#message').fadeOut(4000).html(data);
     window.location.replace ("bill_payment_details.php");
   },
 });
  });



  var audio = new Audio("audio/Tania_Voice.mp3");
  var audio1 = new Audio("audio/Adri_Voice.mp3");
  var audio2 = new Audio("audio/audio 5.wav");
// var audio3 = new Audio("audio/audio 5.wav");
// var audio4 = new Audio("audio/audio 5.wav");
// var audio5 = new Audio("audio/audio 5.wav");
// var audio6 = new Audio("audio/audio 5.wav");
// var audio7 = new Audio("audio/audio 5.wav");
// var audio8 = new Audio("audio/audio 5.wav");
// var audio9 = new Audio("audio/audio 5.wav");


function playAudio() { 
 audio2.pause();
 audio2.currentTime = 0
 audio1.pause(); 
 audio1.currentTime = 0;
 audio.pause();
 audio.currentTime = 0;
 audio.play();
}


function playAudio1() { 
  audio.pause();
  audio.currentTime = 0;
  audio1.pause(); 
  audio1.currentTime = 0;
  audio2.pause();
  audio2.currentTime = 0
  audio1.play();
}

function playAudio2() { 
  audio.pause();
  audio.currentTime = 0;
  audio1.pause(); 
  audio1.currentTime = 0;
  audio2.pause();
  audio2.currentTime = 0;
  audio2.play();
}

// function playAudio3() { 
//        audio3.pause();
//    audio3.currentTime = 0;
//    audio3.play();
//  }

// function playAudio4() { 
//        audio4.pause();
//    audio4.currentTime = 0;
//    audio4.play();
//  }

// function playAudio5() { 
//        audio5.pause();
//    audio5.currentTime = 0;
//    audio5.play();
//  }

// function playAudio6() { 
//        audio6.pause();
//    audio6.currentTime = 0;
//    audio6.play();
//  }




</script>


