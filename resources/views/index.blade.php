<html lang="PT-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Minha git</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <section id ="topo" class = "container">
      <div  class ="row">
        <div class="col-12" style="background-color: rgb(215, 218, 139); height: 100px; padding-top: 25px;">
          <h4> github</h4>
        </div>
      </div>
    </section>





    <section id ="menu" class = "container">
      <div  class ="row" >
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#">Professor</a>
              <a class="nav-link active" aria-current="page" href="#">Aluno</a>
              <a class="nav-link active" aria-current="page" href="#">Coordenador</a>
            </div>
          </div>
        </nav>
    </div>
    </section>


    <section id ="conteudo" class = "container">
        <div  class ="row">

            @yield('content')

        </div>
</section>







   <section id ="rodape" class = "container">
    <div  class ="row"   style="background-color: rgb(243, 213, 124); ">
      <p>  &copy;Yoná Silva </p>
    </div>
</section>
</body>
</html>
