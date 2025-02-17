<?php

session_start();
// check if the user is logged in
if(isset($_SESSION['connection_user_name'])) {
  // the user is logged in, display their user name
  // echo "Welcome, ".$_SESSION['connection_user_name'];
} else {
  // the user is not logged in, redirect to the login page
  echo "va te log";
  header("Location: login.php");
  exit();
}

include('navbar.html');
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spotizer</title>
  <link rel="stylesheet" href="css\custom.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
  <div class="Container">
    <div class="Top">
      <div class="Left">
        <div class="IMG">
          <img src="css/images/carro.jpg" alt="image artiste" class="Img_Artiste">
          <div class="Equiliser">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      <div class="Right">
        <div class="centre-playlist">
          <div class="Parent_list">Playlist</h2>
            <div class="BtnList">
              <i class="fa-solid fa-list"></i>
            </div>
          </div>
        </div>

        <div class="List_Music">
          <div class="List">
            <ul>
            
            </ul>
          </div>
        </div>
      </div>

      <div class="Count">
        <span id="EnCours"></span>
        <span>/</span>
        <span id="Total_Music"></span>
      </div>
    </div>
  </div>
  </div>

  <div class="Bottom">
    <div class="Info_Artist">
      <div class="Info_Img">
        <img src="css/images/carro.jpg" alt="Img Artiste 2" class="Img_Artiste2">
      </div>
      <div class="Info_Details">
        <h4 id="Titre_Music">PlaceHolder</h4>
        <h3 id="Artiste_Music">PlaceHolder</h3>
      </div>
    </div>
    <div class="Control_Bouton">
      <div class="All_Bouton">
        <div class="Btn_Bouton BtnRandom"><i class="fa-solid fa-shuffle"></i></div>
        <div class="Btn_Bouton BtnPrev"><i class="fa-solid fa-backward-step"></i></div>
        <div class="Btn_Bouton BtnPlay"><i class="fa-solid fa-play"></i></div>
        <div class="Btn_Bouton BtnNext"><i class="fa-solid fa-forward-step"></i></div>
        <div class="Btn_Bouton BtnRepeat"><i class="fa-solid fa-repeat"></i></div>
      </div>
      <div class="Timeline">
        <span id="Timeline_Min">00:00</span>
        <input type="range" min="0" max="100" value="0" id="Bar_Music">
        <span id="Timeline_Max">00:00</span>
      </div>
    </div>
    <div class="Bar_Volume">
      <div class="Volume_Control">
        <span id="Volume_Show">25</span>
        <div class="Btn_Volume"><i class="fa-solid fa-volume-low"></i></div>
        <input type="range" name="" id="Volume" min="0" max="100" value="25">
      </div>
      <div class="BtnOff"><i class="fa-solid fa-power-off"></i></div>
    </div>
  </div>
  </div>
</body>

<script src="JS/script.js"></script>
<script src="JS/button_stop.js"></script>
<script src="JS/load_track.js"></script>
<script src="JS/jouer_sons.js"></script>
<script src="JS/next_song.js"></script>
<script src="JS/prev_song.js"></script>
<script src="JS/random.js"></script>
<script src="JS/stop_song.js"></script>
<script src="JS/volume.js"></script>
<script src="JS/repeatmusic.js"></script>

</html>