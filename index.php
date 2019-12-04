
<?php

$servicos = [
  ["imagem"=>"images/logoCriarSite.png","titulo"=>"Criar um site","descrição"=>"descrição do Serviço 1"],
  ["imagem"=>"images/logoCriarLojaVirtual.png","titulo"=>"Criar uma loja virtual","descrição"=>"descrição do Serviço 2"],
  ["imagem"=>"images/logoCriarBlog.png","titulo"=>"Criar um blog","descrição"=>"descrição do Serviço 3"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css">
    
    <title>Document</title>
</head>
<body>
    <header>

        <!-- Just an image -->
        <nav class="navbar navbar-light bg-light">
             <a class="navbar-brand" href="#">
            <img src="images/logo.png" width="120" alt="">
             </a>

             <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Serviços</a>

                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contatos</a>
                    </li>
                  </ul>
        </nav>
    </header>
            <section id="banner">
                <h2>Compre nosso produto !</h2>
    
            </section>
            <section id="servico" class="container mt-5">
                <div class="row">
                  <?php foreach($servicos as $servico){?>
                    <div class=" col-4">
                        <div class="card" >
                          <img src="<?php echo $servico ["imagem"]; ?>" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $servico ["titulo"]; ?>
                            </h5>
                            <p class="card-text"> <?php echo $servico ["descrição"]; ?> </p>
                            <a href="#" class="btn btn-primary">Compre Agora</a>
                          </div>
                        </div>
                    </div>
                  <?php } ?>
                </div>
            </section>
              <section id= "Sobre" class="container mt-5">
                <div class="row">
                  <div class="col-6">
                      <img src="images/logoSobreNos.svg" class=" img-fluid"/>
                  </div>
                  <div class="col-6 d-flex justify-content-center flex-column ">
                    <h1>Sobre Nós</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro magnam enim similique distinctio cupiditate, tempore nulla vel ab voluptate assumenda. Minima nisi voluptate impedit eos ipsum eligendi hic quia aliquid.</p>

                  </div>
                </div>
              </section>
</body>
</html> 