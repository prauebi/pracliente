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
              <li class="active"><a href="./" id="btn-fixed">Fixed top <span class="sr-only">(current)</span></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
      
    </div>


    <div class="container">

  		<div class="row top-buffer">

  			<div class="col-md-4">
          <div class="box">
            <div class="box-content">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>

            </div>  
            <div class="box-footer text-center" id="sou-novo">
            TESTE
            </div>
          </div>
        </div> <!-- BOX 1 -->

        <div class="col-md-4">
          <div class="box">
            <div class="box-content">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>

            </div>  
            <div class="box-footer text-center" id="sou-membro">
            TESTE
            </div>
          </div>
        </div> <!-- BOX 2 -->

        <div class="col-md-4">
          <div class="box">
            <div class="box-content">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>

            </div>  
            <div class="box-footer text-center" id="mensagens">
            TESTE
            </div>
          </div>
        </div> <!-- BOX 3 -->

  		</div> <!-- FIM BOXES -->


    </div> <!-- /container -->
    <div class="navBottom">
      teste
    </div>

    <div class="container">
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

      </div>

      <div class="row">
        <h2 class="tituloMapa">onde estamos</h2>
      </div>

    </div>
<?php get_footer(); ?>   