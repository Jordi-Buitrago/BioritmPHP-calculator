
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Biorritmes</title>
</head>
<body style="background-color: #000E24">
    <div class="text-center mt-5">
        <h3 class="text-white">Introdueix el teu nom i data de naixement per calcular el teu <h2 class="text-white">Biorritme</h2></h3>
    </div>
    <form name="form" method="POST" action="biorritme.php">
        <div class="form-row text-center center-block">
            <input type="text" name="nom" class="form-control w-50 mt-5 mb-3" placeholder="Nom">
        </div>
        <div class="form-row text-center justify-content-center">
            <input type="date" name="data" class="form-control w-50 mb-3">
        </div>
        <div class="form-group text-center">
            <input type="submit" class="btn btn-primary" value="Enviar" class="form-control">
        </div>    
    </form>    
</body>
</html>
