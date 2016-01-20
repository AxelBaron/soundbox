<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>SoundBox</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/master.css" media="screen" charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap-theme.css" media="screen" charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap-theme.css.map" media="screen" charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" media="screen" charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css.map" media="screen" charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.css" media="screen" charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" charset="utf-8">
  <link rel="stylesheet" href="css/bootstrap.min.css.map" media="screen" charset="utf-8">

  <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">

  <script>
    function playSong(songToPlay){
      document.getElementById(songToPlay);
      if (songToPlay.paused){
        songToPlay.play();
      }
      else{
        songToPlay.pause();
        songToPlay.currentTime = 0;

      }
    }
  </script>
</head>
<body>
 <!-- header -->
  <div class="header">
    <a href='https://github.com/AxelBaron/soundbox'>
      <img src="imgs/forkMeWhite.png" alt="forkMe" id='forkMe'/>
    </a>

    <h1 id="soundbox-title">
      <a href="http://axelbaron.github.io/soundbox/" alt="soundbox">
        <img src="imgs/soundbox-logo.png" alt="logo" id='logo'/>
      </a>
    </h1>
    <img src="imgs/vynil-cut.svg" alt="Le vynil" id='vynil' width="600px" />
  </div>

  <section class="container-fluid">
    <div class="container">
      <div class="row">
        <?php
         // Récupère le json et le transforme en objet php.
          $json = file_get_contents("sounds.json");
          $json = json_decode($json);

          $sounds = $json->sounds;
          foreach ($sounds as $sound) {
            echo '<div class="col-lg-2 col-xs-6 cont-btn">';
            echo '<button  onclick="playSong('.$sound->fichier.')" class="btn btn-default">'.$sound->nom.'</button>';
            echo '<audio id="'.$sound->fichier.'" src="sounds/'.$sound->fichier.'.mp3"></audio>';
            echo '</div>';
          }
        ?>
      </div>
    </div>
  </section>
  <footer>
    <p>SoundBox - Concentré d'débilités en masse</p>
  </footer>
</body>
</html>
