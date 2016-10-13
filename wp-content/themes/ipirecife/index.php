<?php get_header(); ?>
  <body>

    <div class="header-full">

      <!-- Fixed navbar -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
    		      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo_ipi_recife.png" alt="Logo Ipi">
            </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">INICIAL</a></li>
              <li><a href="#about">CONHEÇA-NOS</a></li>
              <li><a href="#contact">NOSSOS ENCONTROS</a></li>
              <li><a href="#contact">BLOG</a></li>
              <li><a href="#contact">CONTATO</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./" id="btn-fixed">QUERO CONTRIBUIR<span class="sr-only">(current)</span></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
      
    </div>


    <div class="container">

  		<div class="row top-buffer">

  			<div class="col-md-4">
          <div class="box" id="sou-novo">

            <div class="box-content" id="content-novo">  
              <div class="box-icon">
                  <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
              </div>  

              <div class="box-caption" id="caption-novo">
                <ul>
                  <li>Link 01</li>
                  <li>Link 02</li>
                  <li>Link 03</li>
                </ul>
              </div>
            </div>
            <div class="box-footer text-center sou-novo">
            SOU NOVO AQUI
            </div>
          </div>
        </div> <!-- BOX 1 -->

        <div class="col-md-4">
          <div class="box" id="sou-membro">
            <div class="box-content" id="content-membro">  
              <div class="box-icon">
                  <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
              </div>  

              <div class="box-caption" id="caption-membro">
                <ul>
                  <li>Link 01</li>
                  <li>Link 02</li>
                  <li>Link 03</li>
                </ul>
              </div>
            </div> 
            <div class="box-footer text-center sou-membro">
            SOU MEMBRO
            </div>
          </div>
        </div> <!-- BOX 2 -->

        <div class="col-md-4">
          <div class="box" id="mensagens">
            <div class="box-content" id="content-mensagens">  
              <div class="box-icon">
                  <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
              </div>  

              <div class="box-caption" id="caption-mensagens">
                <ul>
                  <li>Link 01</li>
                  <li>Link 02</li>
                  <li>Link 03</li>
                </ul>
              </div>
            </div> 
            <div class="box-footer text-center mensagens">
            MENSAGENS
            </div>
          </div>
        </div> <!-- BOX 3 -->

  		</div> <!-- FIM BOXES -->


    </div> <!-- /container -->
    <div class="navBottom">
    </div>

    <div class="container">

    <section id="eventos">
      <div class="row top-buffer">
        <h2 class="tituloEventos">próximos eventos</h2>

        <div class="gallery-row">

          <div class="evento">
            <div class="evento-content">
                 

            </div>
          </div>

          <div class="evento">
            <div class="evento-content">
                 

            </div>
          </div>

          <div class="evento">
            <div class="evento-content">
                 

            </div>
          </div>

          <div class="evento">
            <div class="evento-content">
                 

            </div>
          </div>

          <div class="evento">
            <div class="evento-content">
                 

            </div>
          </div>

        </div>

      </div>
    </section>

    </div><!--  FIM CONTAINER EVENTOS -->

    <div class="container">
      <section id="blog">
        <div class="row">
        <h2 class="tituloBlog">blog</h2>

          <div class="gallery-row">

            <div class="evento">
              <div class="evento-content">
                   

              </div>
            </div>

            <div class="evento">
              <div class="evento-content">
                   

              </div>
            </div>

            <div class="evento">
              <div class="evento-content">
                   

              </div>
            </div>

            <div class="evento">
              <div class="evento-content">
                   

              </div>
            </div>

            <div class="evento">
              <div class="evento-content">
                   

              </div>
            </div>
          </div>
      </section>
      </div>

    </div> <!-- FIM CONTAINER BLOG -->

    <div class="container">
      
      <div class="row">
        <h2 class="tituloMapa">onde estamos</h2>
      </div>

    </div> <!-- TITULO MAPA -->

    <div class="ondeEstamos"></div>

    <div class="container">
      <div class="row">
        <section id="footer">
          <div class="col-md-4">
            <h2>nossos encontros</h2>
            <b>Domingos:</b><br>
            18:30 - Culto de Louvor e Adoração<br><br>
            
            <b>Quartas-feiras:</b><br>
            20:00 Culto da Esperança<br><br>


            <b>Escola Bíblica:</b><br>
            Domingo às 17h
          </div>

          <div class="col-md-4">

            <h2>localização</h2>
            Estr. do Arraial, 4362<br>
            Casa Amarela,<br>
            Recife - PE,<br>
            52070-230<br>
            
          </div>

          <div class="col-md-4">
            <h2>contato</h2>

            
          </div>
        </section>
      </div>
    </div>
    <div id="footer-bg"></div>
<?php get_footer(); ?>   