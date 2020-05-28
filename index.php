<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/all.css">
    <link rel="stylesheet" href="/assets/css/estilo-tema.css">
    <link rel="icon" href="/assets/img/favicon.png" sizes="32x32" type="image/png">
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <title>Grécia Burguer</title>
  </head>
  <body>
    <header id="header" class="">
      <div class="img-topo"></div>

      <nav class="navbar navbar-expand-lg navbar-light bg-light" id="menu-principal">
          <div class="container">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="col-md-3 text-center" id="logo-menu">
                <figure>
                  <img src="/assets/img/logo.png" class="img-fluid" width="213" alt="Logo" title="Logo Grécia Burger">
                  
                </figure>
              </div>
              <div class="collapse navbar-collapse col-md-9 offset-3 menu-principal" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">CARDÁPIO <span class="sr-only">(página atual)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">SOBRE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">ENTREGAS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contato">CONTATO</a>
                  </li>
                  <li class="nav-item menu-login">
                    <a class="nav-link" href="#">LOGIN</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" id="menu-meu-pedido" data-toggle="modal" data-target="#modalFinaliza">MEU PEDIDO</a>
                  </li>
                 <li class="nav-item">
                    <a class="nav-link bag-pedido" href="#" data-toggle="modal" data-target="#modalFinaliza">
                      <i class="fas fa-shopping-bag"></i>
                      <span class="badge badge-pill badge-danger num-pedidos">3</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
    </header><!-- /header -->

    <!-- carrosel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="/assets/img/slide1.png" alt="Primeiro Slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/assets/img/slide2.png" alt="Segundo Slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/assets/img/slide3.png" alt="Terceiro Slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
    <!-- /carrosel -->
    <main class="container">
      <div class="row titulo-cardapio">
        <div class="col-md-4">
          <h1>CARDÁPIO</h1>
        </div>
        <div class="col-md-4">
          <form class="form-inline">
            <select name="categoria" class="form-control w-100" id="inlineFormInputName2" placeholder="Filtrar categoria">
              <option value="">Filtrar categoria</option>
            </select>
          </form>
          </div>
          <div class="col-md-4">
           <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn my-2 my-sm-0" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </form>
        </div>
      </div>
      <div class="row lista-produtos">
        <?php $qtd = 13; ?>
      <?php for ($i = 0; $i < $qtd; $i++) : ?>
        <!-- conteudo do produto -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <article class="produto produto-principal">
            <figure>
              <img src="/assets/img/produtos/produto1.png" alt="">
            </figure>
            <div class="descricao-produto">
              <h3>Duplo Bacon</h3>
              <p>Com salada, queijo chedar, molho especial, cebola</p>
              <span class="preco">
                R$ 19,90
              </span>
              <button type="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalCompra">
                COMPRAR
              </button>
            </div>
          </article>
        </div>
        <!-- /conteudo do produto -->
      <?php endfor; ?>
      
      <?php if($qtd < 1) { ?>
        <span class="alert alert-info col-12 text-center" style="height: 60px;">
          Nenhum produto foi encontrado para exibir.
        </span>
      <?php } ?>

      </div>
      
    </main>
    <footer id="contato">
      <div class="container">
        <form action="" method="post" accept-charset="utf-8">
        <div class="row contato">
              <div class="col-6">
                <div class="form-group">
                  <label for="nome">Nome:</label>
                  <input type="text" name="nome" id="nome" value="" class="form-control" placeholder="Informe seu nome" required>
                </div>
                <div class="form-group">
                  <label for="email">E-mail:</label>
                  <input type="email" name="email" id="email" value="" class="form-control" placeholder="Informe seu e-mail de contato" required>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="mensagem">Mensagem:</label>
                  <textarea name="mensagem" id="mensagem" class="form-control" rows="5" placeholder="Digite sua mensagem ou dúvida" required></textarea>
                </div>
              </div>
              <div class="col-12 text-right">
                <button type="submit" class="btn btn-primary">Enviar mensagem</button>
              </div>                    
        </div>
        </form>
        <div class="row">
          <div class="col text-center direitos">
            <p>&copy;Direitos reservados <?php echo date('Y'); ?> | SENAC DF</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- modal para comprar produto -->
      <div class="modal fade" id="modalCompra" tabindex="-1" role="dialog" aria-labelledby="labelCompra" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="labelCompra">Adicionar o produto a cesta</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <article class="produto">
                <figure>
                 <!-- carrosel -->
                  <div id="indicadoresModal" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#indicadoresModal" data-slide-to="0" class="active"></li>
                      <li data-target="#indicadoresModal" data-slide-to="1"></li>
                      <li data-target="#indicadoresModal" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="/assets/img/produtos/produto1.png" alt="Primeiro Slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/produtos/produto1.png" alt="Segundo Slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="/assets/img/produtos/produto1.png" alt="Terceiro Slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#indicadoresModal" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#indicadoresModal" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Próximo</span>
                    </a>
                  </div>
                  <!-- /carrosel -->


                
                <!--   <img src="/assets/img/produtos/produto1.png" alt=""> -->
                </figure>
                <div class="descricao-produto">
                  <h3>Duplo Bacon</h3>
                  <p>Com salada, queijo chedar, molho especial, cebola</p>
                  <span class="preco" id="preco">
                    R$ 19,90
                  </span>
                    <form class="form-inline my-2 my-lg-0">
                      <input type="hidden" name="val" value="19.9" id="valor_unidade">
                      <input class="form-control-range mr-sm-2" id="range_valor" type="range" placeholder="Quantidade" aria-label="Quantidade" min="1" max="10" value="1" required >
                      <br>
                      <input type="number" id="qtd" name="qtd" value="1" class="form-control mr-sm-0" min="1">
                      <button class="btn btn-primary my-2 my-sm-0" type="submit">
                        Adicionar
                      </button>
                    </form>
                </div>
              </article>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
          </div>
        </div>
      </div>
    <!-- /modal para comprar produto -->

    <!-- modal sacola de produtos -->
      <div class="modal fade" id="modalFinaliza" tabindex="-1" role="dialog" aria-labelledby="labelCompra" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="labelCompra">Finalizar compra</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class="table">
                <tr>
                  <th>#</th>
                  <th>Descrição</th>
                  <th>Valor</th>
                  <th>Qtd</th>
                  <th>Subtotal</th>
                  <th>Ação</th>
                </tr>
                <tr>
                  <td>#1</td>
                  <td>Bacon Duplo</td>
                  <td>R$ 19,90</td>
                  <td>1</td>
                  <td>R$ 19,90</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-danger">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>#1</td>
                  <td>Bacon Duplo</td>
                  <td>R$ 19,90</td>
                  <td>2</td>
                  <td>R$ 38,80</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-danger">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <th colspan="3" class="text-right">Total</th>
                  <th colspan="3" class="text-left">R$ 48,70</th>
                </tr>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary">Finalizar compra</button>
            </div>
          </div>
        </div>
      </div>
    <!-- /modal sacola de produtos -->


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function($) {
        $('#range_valor').on('change', function() {
            let valor_range = $(this).val();
            $('#qtd').val(valor_range);
            calculaCompra(valor_range);
            
        });
        $('#qtd').on('change', function() {
            let valor_range = $(this).val();
            $('#range_valor').val(valor_range);
            calculaCompra(valor_range);
            
        });

        function calculaCompra(valor) {
            let valor_range = valor;
            let valor_unidade = $('#valor_unidade').val();
            let valor_total = valor_range * valor_unidade;
            $('#preco').html(valor_total.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'}));
        }
        //$('#qtd').val($(this).val());$('#valor_total').html($(this).val() * $())
      });
    </script>
  </body>
</html>