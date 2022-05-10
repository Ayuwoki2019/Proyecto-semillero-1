
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Unitic</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
            
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"> 
            <div class="container d-flex align-items-center justify-content-between">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="#">Unitic</a>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Quienes somos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Proyectos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Galeria</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Integrantes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contactenos</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <button class="btn btn-outline-success" type="submit">Administración</button>
                </form>
              </div>
            </div>
          </nav>
          <header class="container-fluid">
              <div class="row" style="height: 680px; background-color:#ffffff;">
                  <div class="col-12 align-self-center text-center">
                      <h1>Curriculum</h1>
                      <img src="{{asset('imagenes/avatar.png')}}" class="rounded mx-auto d-block" width="200" alt="">
                      <h1>Sebastian Martin</h1>
                      <hr>
                      <p>
                          Estudiante
                      </p>
                  </div>
              </div>
          </header>

          <section class="container-fluid">
              <div class="row">
                  <div class="col-12 text-center mt-5">
                      <h2></h2>
                  </div>
              </div>
          </section>
    </body>
</html>
</html>