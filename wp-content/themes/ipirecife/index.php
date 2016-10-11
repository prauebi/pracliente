<?php get_header(); ?>
  <body>
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
            <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
		<div class="row top-buffer">
			<div class="col-md-4">
        <div class="container_box">
          <div class="container_content">
            <div class="row">
              <div class="col-md-12">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>

              </div>
            </div>
            <div class="container_footer text-center">
              TESTE
            </div>
          </div>  
        </div>
      </div>
			<div class="col-md-4"><div class="container_box">
          <div class="container_content">
            <div class="row">
              <div class="col-md-12">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>

              </div>
            </div>
            <div class="container_footer text-center">
              TESTE
            </div>
          </div>  
        </div></div>
			<div class="col-md-4"><div class="container_box">
          <div class="container_content">
            <div class="row">
              <div class="col-md-12">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>

              </div>
            </div>
            <div class="container_footer text-center">
              TESTE
            </div>
          </div>  
        </div></div>
		</div>
    </div> <!-- /container -->
<?php get_footer(); ?>   