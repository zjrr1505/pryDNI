<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSULTAR DNI</title>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFLBw8HfCJo=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="dni-container">
            <div class="input">
                <span><i class='bx bxs-id-card'></i></span>
                <input type="text" id="dni" maxlength="8" placeholder="Ingrese su número de DNI" autocomplete="off" name="dni">
            </div>
            <div class="button">
                <a class="btn" id="prueba">Consultar</a>
            </div>
            <div class="card">
                <div class="foto">
                    <p>Carnet<br>Estudiantil</p>
                    <div class="img">
                        <i class='bx bxs-user'></i>
                    </div>
                    <img src="img/EJEMPLO" alt="">
                </div>
                <div class="data">
                    <label id="nombre">Nombre</label>
                    <div class="apellido">
                        <label id="apellidop">ApellidoP</label>
                        <label id="apellidom">ApellidoM</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>

$("#prueba").click(function(){

  var dni=$("#dni").val();


$.ajax({           
    type:"POST",
    url: "consulta-dni-ajax.php",
    data: 'dni='+dni,
    dataType: 'json',
    success: function(data) {
  
  
        if(data==1)
        {
            alert('El DNI tiene que tener 8 digitos');
        }
       
    
        else{
            console.log(data);
            $("#nombre").html(data.nombres);
            $("#apellidop").html(data.apellidoPaterno);
            $("#apellidom").html(data.apellidoMaterno);
          

         
        }
 

    }
});

})

</script>
</body>
</html>
   