<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <titulo> </titulo>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
        </head>
        <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">

    <a class="navbar-brand" href="#">Biblioteca</a>

    <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="Index.php">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="Libros.php">Libros</a></li>
        <li class="nav-item"><a class="nav-link" href="Prestamo.php">Prestamos</a></li>
        <li class="nav-item"><a class="nav-link" href="Socios.php">Socios</a></li>
        <li class="nav-item"><a class="nav-link" href="Login.php">Login</a></li>
      </ul>
    </div>

  </div>
</nav>
<form>

<br>

  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="nombre" class="form-label">Nombre completo</label>
      <input type="text" class="form-control" id="nombre"
             placeholder="Tu nombre">
    </div>
    <div class="col-md-6 mb-3">
      <label for="email" class="form-label">Correo electrónico</label>
      <input type="email" class="form-control" id="email"
             placeholder="tu@email.com">
    </div>
  </div>

  
  <div class="mb-3">
    <label for="asunto" class="form-label">Asunto</label>
    <select class="form-select" id="asunto">
      <option value="">Seleccioná una opción</option>
      <option>Consulta general</option>
      <option>Soporte técnico</option>
      <option>Numero telefonico</option>
      <option>Direccion</option>
    </select>
  </div>

    <div class="mb-3">
    <label for="mensaje" class="form-label">Mensaje</label>
    <textarea class="form-control" id="mensaje" rows="4"
              placeholder="Escribí tu mensaje..."></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Enviar mensaje</button>
  <button type="reset"  class="btn btn-outline-secondary ms-2">Limpiar</button>

</form><br>

            <div class="row row-cols-1 row-cols-md3 g-3">    

            <div class="col">
                <div class="card h-100">
                    <img src="img/libros1.jpg" width="500" height="300"><class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Socios</h5>
                        <p class="card-text text-muted"></p>
                        <a href="Socios.php" class="btn btn-dark btn-sm">Socios </a>                    
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md3 g-3">

            <div class="col">
                <div class="card h-100">
                    <img src="img/libros2.jpg" width="500" height="300"><class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Libros</h5>
                        <p class="card-text text-muted">Los tres puerquitos wiii wiiii <br> La Caperucita burra y el lobo feroz <br> El Sapito Rupert </p>
                     <a href="Libros.php" class="btn btn-dark btn-sm">Mas libros</a>
                    </div>
                </div>
            </div> 

            <div class="row row-cols-1 row-cols-md3 g-3">

             <div class="col">
                <div class="card h-100">
                    <img src="img/libros3.jpg" width="500" height="300"><class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Autores</h5>
                        <p class="card-text text-muted">Horacio Quiroga (1er Libro) <br> Charles Perraut (2do Libro) <br> Roy Berocay (3er Libro) </p>
                        <a href="Prestamos.php" class="btn btn-dark btn-sm">Prestamos</a>
                    </div>
                </div>
            </div> 
            <div id="Header">
        
            </div>
            <div id="Contenido"></div>
            <div id="Footer"></div>1
               </body>
               </html>