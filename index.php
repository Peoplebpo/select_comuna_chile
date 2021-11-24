<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
 <meta charset="utf-8">
<title>Bootstrap Select con buscador en vivo PHP MySQL</title>
<!-- Bootstrap core CSS -->
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>
  </head>

  <body>

  <div class="container">
    <div class="row">
    
    <div class="row-fluid">
      <select class="selectpicker" data-show-subtext="true" data-live-search="true">
        <option value="">Escriba una Comuna</option>

<?php
include "db.php";
$con = connect();
if (!$con->set_charset("utf8")) {//asignamos la codificación comprobando que no falle
       die("Error cargando el conjunto de caracteres utf8");
}
$consulta = "SELECT * FROM lista_comunas";
$resultado = mysqli_query($con , $consulta);
$contador=0;

while($misdatos = mysqli_fetch_assoc($resultado)){ $contador++;?>
<option value="<?php echo $misdatos["nombre_comuna"]; ?>"><?php echo $misdatos["nombre_comuna"]; ?></option>
<?php }?>          
</select>

    </div>
    </div> 
     
  </div>

   <!-- Contenido -->    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>  
  </body>
</html>