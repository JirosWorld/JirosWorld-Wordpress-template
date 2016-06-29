<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

<div class="meta">
	<em>Posted on:</em> <?php the_time('F jS, Y') ?>
	<em>by</em> <?php the_author() ?>
	<?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?>
</div>

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<div class="postmetadata">
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', ') ?> | 
				<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
			</div>

		</div>

	<?php endwhile; ?>

<div class="navigation">
	<div class="next-posts"><?php next_posts_link('&laquo; Older Entries') ?></div>
	<div class="prev-posts"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
</div>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

<?php get_sidebar(); ?>

<!--  -->
<!--  -->
<!--  -->

<!-- start pagina Header -->
  <a id="home"></a>
    <div class="intro-header">
      <div class="bg-overlay">
        <div class="container">
  

            <div class="row mijnrij">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Intro ~ intromessage</h1>
                        <h3>Neat large tag line.<br /><span class="tekst-klein">Hire the queerest junior web developer - get a free comic!</span></h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://twitter.com/jirosworld" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="https://github.com/jolarti" target="_blank" class="btn btn-default btn-lg "><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/jolarti" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->
      </div>
    </div>
    <!-- /.intro-header -->

 <!-- Page Content -->

  <a id="about"></a>
    <div class="content-section-a">
      <div class="bg-overlay2">
        <div class="container">
            <div class="row mijnrij">
                <div class="col-lg-5 col-sm-6">
                    
                    <div class="clearfix"></div>
                  <h2 class="section-heading">JirosWorld introduction</h2>
                  <br />
                    <p class="lead">Theme by a <mark><a class="link" target="_blank" href="http://www.freecodecamp.com/jolarti">continuously learning</a></mark> web nerd, experimental artist, cartoonist, homo universalis and genderqueer spokesperson based in Amsterdam (Netherlands).</p>
      
      
      <div class="divider-jiro"></div>
        
        <div class="panel panel-danger">
            <div class="panel-heading">
              <h3 class="panel-title">Competences</h3>
            </div>
            <div class="panel-body">
              <SPAN class="alert-danger">Languages and Frameworks:</SPAN><br />
Whatever you can do.<br />
<SPAN class="alert-danger">Tools & expertise:</SPAN><br />
Whatever you have done.
            </div>
          </div>
      </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6 collapse navbar-collapse">
                    <img class="img-jiro img-responsive" src="http://jirosworld.com/gfx/JiroVlakken4kant.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->
      </div>
     </div>
    </div>
  
<div class="divider-jiro"></div>

     <!-- Portfolio Grid Section -->
   <a id="portfolio"></a>
    <section id="portfolio" class="bg-light-gray bounds">
        <div class="container">      
            <div class="row mijnrij">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Awesomeness Portfolio.</h2>
                    <h3 id="below-section" class="section-subheading text-muted">Below you'll find some of my recent work.</h3>
                </div>
            </div>
          <!-- Portfolio img1 -->
            <div class="row mijnrij">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://foundationforauditingresearch.org/" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                            </div>
                        </div>
                        <img src="http://jirosworld.com/gfx/portfolio-desktop-mobiel.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><a href="http://foundationforauditingresearch.org/" class="portfolio-link" target="_blank" data-toggle="modal">Found. for Auditing Research</a></h4>
                        <p id="small-text">A large DIVI Wordpress site I developed, has multiple feeds.</p>
                    </div>
                </div>
              <!-- End of Portfolio img1 -->
              
              <!-- Portfolio img2 -->
                <div class="col-md-4 col-sm-6 portfolio-item portfolio2">
                    <a href="#" class="portfolio-link" target="_blank" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                            </div>
                        </div>
                        <img src="http://jirosworld.com/gfx/portfolio-desktop-mobiel.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><a href="#" class="portfolio-link" target="_blank" data-toggle="modal">###</a></h4>
                        <p id="small-text">### website for ###.</p>
                    </div>
                </div>
              <!-- End of Portfolio img2 -->
              
              <!-- Portfolio img3 -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://www.vandezotten.nl" target="_blank" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                            </div>
                        </div>
                        <img src="http://jirosworld.com/gfx/portfolio-desktop-mobiel.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><a href="http://www.vandezotten.nl" target="_blank" class="portfolio-link" data-toggle="modal">Van De Zotten Coaching</a></h4>
                        <p id="small-text">Responsive CMSMS template company site for lifecoach.</p>
                    </div>
                </div>
              <!-- End of Portfolio img3 -->
              
            </div>
        </div>
    </section>
  </div>
  <div class="divider-jiro"></div>
      
  <a id="contact"></a>
    <div class="banner">
      <div class="bg-overlay4">
        <div class="container">         
            <div class="row mijnrij">
                <div class="col-lg-6">
                  <h2 class="connect">Connect with me: jiro @ jirosworld.com</h2>
                </div>
              <br />
      
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                                <a href="https://twitter.com/jirosworld" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="https://github.com/jolarti" target="_blank" class="btn btn-default btn-lg "><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/jolarti" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li>
                            <li>
                                <a href="http://jolarti.exto.nl/" target="_blank" class="btn btn-default btn-lg"><i class="fa  fa-paint-brush fa-fw"></i> <span class="network-name">My art & comics</span></a>
                            </li>
                      
                    </ul>
                </div>
        </div><!-- /.container -->
        
    </div>
</div>
</div>

</div><!-- /.banner -->

<div class="divider-jiro"></div>

<!--  -->
<!--  -->
<!--  -->
<?php get_footer(); ?>