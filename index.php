<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Leer XML</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
<div class="container-fluid">
    <a class="navbar-brand" href="#">Facturacion</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <h1 class="text-center">LEER XML</h1>
    <div class="row justify-content-center">
        <div class="col-5">
            <form enctype="multipart/form-data" action="readxml.php" method="POST">
            <div class="form-group">
                <label for="filexml">Subir XML</label>
                <input type="file" class="form-control-file " id="filexml" name="filexml">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>

</div>
</body>
</html>