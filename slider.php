<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloss.css">
    <title>IMG FORM</title>
</head>
<body style="background-color: greenyellow;">  
    
  <?php
        include("redimensionarImg.php");
        $nombre1=$_FILES['archivo']['name'];
        $guardado1=$_FILES['archivo']['tmp_name'];
        $nombre2=$_FILES['archivo2']['name'];
        $guardado2=$_FILES['archivo2']['tmp_name'];
        $nombre3=$_FILES['archivo3']['name'];
        $guardado3=$_FILES['archivo3']['tmp_name'];

          if(!file_exists('archivo')){           
            mkdir('archivo',0777,true);
          }
          move_uploaded_file($guardado1, $nombre1);
          $imagen1=redimensionarImg($nombre1, 1100,600);
          unlink($nombre1);
          
          move_uploaded_file($guardado2, $nombre2);
          $imagen2=redimensionarImg($nombre2,1100,600);
          unlink($nombre2);
          
          move_uploaded_file($guardado3, $nombre3);
          $imagen3=redimensionarImg($nombre3,1100,600);
          unlink($nombre3);
  ?>
<div class="container-all" align="center">

<input type="radio" id="1" name="image-slide" hidden/>
<input type="radio" id="2" name="image-slide" hidden/>
<input type="radio" id="3" name="image-slide" hidden/>

<div class="slide">

    <div class="item-slide">
    <?php echo '<img src="archivo/'.$imagen1.'" >'; ?>
    </div>

    <div class="item-slide">
    <?php echo '<img src="archivo/'.$imagen2.'" >'; ?>
    </div>

    <div class="item-slide">
    <?php echo '<img src="archivo/'.$imagen3.'" >'; ?>
    </div>

</div>

<div class="pagination">
   
    <label class="pagination-item" for="1">
    <?php echo '<img src="archivo/'.$imagen1.'" >'; ?>
    </label>
    
    <label class="pagination-item" for="2">
    <?php echo '<img src="archivo/'.$imagen2.'" >'; ?>
    </label>
    
    <label class="pagination-item" for="3">
    <?php echo '<img src="archivo/'.$imagen3.'" >'; ?>
    </label>
</div>
</div>
  
<div align="center">
    <footer>
        <br>Nro de grupo: 4<br>
        Integrantes: Noah Gonzalez, Franco Espinosa, Renzo Espinosa
    </footer></div>      
</body>
</html>