<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="row">
        <div class="col-1 col-sm-1 col-md-4 col-lg-4"></div>
        <div class="col-10 col-10 col-sm-10 col-md-4 col-lg-4">
            <form id="formulario" method="post">

            <h1 class="text-center"><strong>Login</strong></h1>
            <input type="text" name="usuario" id="usuario" class= "form-control" placeholder = "Usuario" maxlength = "10" minlength = "3" require="true" >
            <br>
            <input type = "password" id = "password" name = "password" class = "form-control"  placeholder = "Password" require = "true" maxlength = "10" minlength = "3" >
            <br>
            <button type="submit">Ingresar</button>
            <br><br> 
            <div id="alerta"></div>   
        </form>
        </div>
        <div class="col-1 col-1 col-sm-1 col-md-4 col-lg-4"></div>
    </div>
    

<script src="config/js/app.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>