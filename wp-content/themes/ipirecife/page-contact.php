<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

	<header>

      <!-- Fixed navbar -->
      <nav class="navbar navbar-default navbar-fixed-top navbar-white">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-menu-colorida.png"alt="Logo Ipi">
            </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="menu-topo"><a href="<?php echo get_home_url(); ?>">INICIAL</a></li>
              <li class="menu-topo"><a href="<?php echo get_home_url(); ?>/conheca-nos/">CONHEÇA-NOS</a></li>
              <li class="menu-topo"><a href="<?php echo get_home_url(); ?>/nossos-encontros/">NOSSOS ENCONTROS</a></li>
              <li class="menu-topo"><a href="<?php echo get_home_url(); ?>/blog/">BLOG</a></li>
              <li class="menu-topo"><a href="<?php echo get_home_url(); ?>/contato/">CONTATO</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./" id="btn-fixed-page" class="btn-fixed">QUERO CONTRIBUIR<span class="sr-only">(current)</span></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>

      <div class="header-page">

        <div class="content-header-page">

          <div class="container">
            <h1><?php the_title(); ?></h1>
          </div>
          
        </div>
        
      </div>

      
  </header>

	<div id="primary" class="content-area">
		<main id="contact" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="container">
				<div class="row">
					<h2>Entre em Contato conosco!</h2>

			        <?php the_content(''); ?>

              <form method="post" id="form">

                <div class="col-md-12">
                  <input type="text" name="name" placeholder="Digite seu nome completo aqui">
                </div>

                <div class="col-md-6">  
                  <input type="text" name="email" placeholder="Digite seu email">
                </div>

                <div class="col-md-6">
                  <input type="text" name="phone" placeholder="Digite seu número">  
                </div>

                <div class="col-md-12">
                  <textarea name="assunto"></textarea>
                </div>

                <div class="col-md-2">
                  <input type="submit" name="submit" value="Enviar">
                </div>
              </form>

      	</div>
			</div>


		<?php endwhile; ?>



		</main><!-- .site-main -->
	</div><!-- .content-area -->

  <?php include "map.php" ?>

	<footer class="container">
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
            <b>Email:</b><br>
            contato@primeiraipirecife.com.br<br><br>
            <b>Telefone:</b><br>
            (81) 3441-1537
            
          </div>
        </section>
      </div>
    </footer>

<?php get_footer(); ?>
