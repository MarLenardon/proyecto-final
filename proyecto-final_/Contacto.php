<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name= "description" content="Detalles de contacto para trabajos y ofertas laborales">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Contacto - Portfolio | Mar Co</title>
    </head>

    <body>
        
        <header>
            <div class="header">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">Mar Co.</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="Portfolio.php">Portfolio</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="Sobre-mi.php">Sobre mi</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" href="Contacto.php">Contacto</a>
                          </li>
                            </ul>
                         </ul>
                        <form class="d-flex">
                          <input class="form-control me-2" type="search" placeholder="Buscar...">
                          <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>
                      </div>
                    </div>
                  </nav>
    
        </header>

        <main class="container"> 
          <div class="row">
            <section class="col margencol">
              <h2>¿Dónde estamos?</h2> 
              <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.0410145970427!2d-58.37643938420141!3d-34.60312436497495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccacd06ed2cd1%3A0x5641a434573e4b!2sGeminis%20Computer%20S.A.!5e0!3m2!1ses-419!2sar!4v1638155962342!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>              
              </div>
            </section>

            <section class="col margencol2">

                <form>
                  <div class="mb-3">
                    <h4>¡Contactame!</h4> 
                  </div>
                  <div class="mb-3">
                    <label for="firtsName" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="firstname-input">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1">
                    <div id="emailHelp" class="form-text">Nunca compartiremos tus datos con nadie.</div>
                  </div>
                  <div class="mb-3">
                    <label for="Asunto" class="form-label">Asunto</label>
                    <input type="text" class="form-control" id="Asunto">
                  </div>
                  <div class="mb-3">
                    <label for="Mensaje" class="form-label">Mensaje</label>
                    <input type="text" class="form-control formulario" id="Mensaje">
                  </div>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </section>
          </div>
        </main>

          <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
              <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                  <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
                </a>
                <span class="text-muted">&copy; 2021 Mar Co.</span>
              </div>
          
              <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="https://www.twitter.com"><svg class="bi" width="30px" height="30px"><i class="bi bi-twitter"></i></svg></a></li>
                <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/marlenardon/"><svg class="bi" width="30px" height="30px"><i class="bi bi-instagram"></i></svg></a></li>
                <li class="ms-3"><a class="text-muted" href="mailto:marinaslenardon@gmail.com"><svg class="bi" width="30px" height="30px"><i class="bi bi-envelope-fill"></i></svg></a></li>
                <li class="ms-3"><a class="text-muted" href="https://www.linkedin.com/in/marina-sof%C3%ADa-lenardon-26a199167/"><svg class="bi" width="30px" height="30px"><i class="bi bi-linkedin"></i></svg></a></li>
              </ul>
            </footer>
          </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>