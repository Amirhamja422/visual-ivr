<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/418e01176d.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="header_top">
        <img src="img/ihelpbd_logo.png">
      </div>
      <div class="header_menu">
        <p style="color: #fff;">Bill Payment</p>
      </div>

     <br>
     <div class="btn_icon" style="width: 20px;">
      <button id="previous"><i class="fas fa-backward"></i></button>                    
    </div>
    <div class="footermenu">
      <div class="left_icon">
        <img src="img/home.png" style="width:47px;" onclick="playAudio()">
      </div>
      <div class="middle_icon">
        <img src="img/speker.png"style="width:47px;"onclick="playAudio1()">
      </div>
      <div class="right_icon">
        <img src="img/back.png"style="width:47px;"onclick="playAudio2()">
      </div>
    </div>
  </div>
</body>
</html>

<!-- <script src="js/custom.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript">

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


