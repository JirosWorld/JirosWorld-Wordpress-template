<?php get_header(); ?>

<div <?php post_class() ?> id="post-&lt;?php the_ID(); ?&gt;">
    <h2>
        <a href="%3C?php%20the_permalink()%20?%3E"><?php the_title(); ?></a>
    </h2>
    <div class="meta">
        <em>Posted on:</em> <?php the_time('F jS, Y') ?> <em>by</em> <?php the_author() ?> <?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?>
    </div>
    <div class="entry">
        <?php the_content(); ?><!-- start pagina Header -->
        <a id="home"></a>
        <div class="intro-header">
            <div class="bg-overlay">
                <div class="container">
                    <div class="row mijnrij">
                        <div class="col-lg-12">
                            <div class="intro-message">
                                <h1>
                                    Intro ~ intromessage
                                </h1>
                                <h3>
                                    Neat large tag line.<br>
                                    <span class="tekst-klein">Hire the queerest junior web developer - get a free comic!</span>
                                </h3>
                                <hr class="intro-divider">
                                <ul class="list-inline intro-social-buttons">
                                    <li>
                                        <a href="https://twitter.com/jirosworld" target="_blank" class="btn btn-default btn-lg"><span class="network-name">Twitter</span></a>
                                    </li>
                                    <li>
                                        <a href="https://github.com/jolarti" target="_blank" class="btn btn-default btn-lg"><span class="network-name">Github</span></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/in/jolarti" target="_blank" class="btn btn-default btn-lg"><span class="network-name">Linkedin</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container -->
            </div>
        </div><!-- /.intro-header -->
        <!-- Page Content -->
        <a id="about"></a>
        <div class="content-section-a">
            <div class="bg-overlay2">
                <div class="container">
                    <div class="row mijnrij">
                        <div class="col-lg-5 col-sm-6">
                            <div class="clearfix"></div>
                            <h2 class="section-heading">
                                JirosWorld introduction
                            </h2><br>
                            <p class="lead">
                                Theme by a
                            </p>
                            <mark>
<a class="link" target="_blank" href="http://www.freecodecamp.com/jolarti">continuously learning</a>
</mark>web nerd, experimental artist, cartoonist, homo universalis and genderqueer spokesperson based in Amsterdam (Netherlands).
                            <div class="divider-jiro"></div>
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        Competences
                                    </h3>
                                </div>
                                <div class="panel-body">
        <?php 
        
        if( have_posts() ):
            
            while( have_posts() ): the_post(); ?>
                
                <?php get_template_part('content',get_post_format()); ?>
            
            <?php endwhile;
            
        endif;
                
        ?>
    
    </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-lg-offset-2 col-sm-6 collapse navbar-collapse">
                            <img class="img-jiro img-responsive" src="http://jirosworld.com/gfx/JiroVlakken4kant.jpg" alt="">
                        </div>
                    </div>
                </div><!-- /.container -->
            </div>
        </div>
    </div>
    <div class="divider-jiro"></div><!-- Portfolio Grid Section -->
    <a id="portfolio"></a>
    <section id="portfolio2" class="bg-light-gray bounds">
        <div class="container">
            <div class="row mijnrij">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">
                        Awesomeness Portfolio.
                    </h2>
                    <h3 id="below-section" class="section-subheading text-muted">
                        Below you'll find some of my recent work.
                    </h3>
                </div>
            </div> 
            <div class="row mijnrij">
                 <div class="col-md-4 col-sm-6 portfolio-item">   
<?php 
    
    $args_cat = array(
        'include' => '1, 9, 8'
    );
    
    $categories = get_categories($args_cat);
    foreach($categories as $category):
        
        $args = array( 
            'type' => 'post',
            'posts_per_page' => 1,
            'category__in' => $category->term_id,
            'category__not_in' => array( 10 ),
        );
        
        $lastBlog = new WP_Query( $args );
        
        if( $lastBlog->have_posts() ):
            
            while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                
                <div class="col-xs-12 col-sm-4">
                
                    <?php get_template_part('content','featured'); ?>
                
                </div>
            
            <?php endwhile;
            
        endif;
        
        wp_reset_postdata();
        
    endforeach;

?>

                </div> <!-- einde van een-derde kolom -->
            </div><!-- End of Portfolio img1 2 3 row -->
        </div>
    </section>
</div>
<div class="divider-jiro"></div><a id="contact"></a>
<div class="banner">
    <div class="bg-overlay4">
        <div class="container">
            <div class="row mijnrij">
                <div class="col-lg-6">
                    <h2 class="connect">
                        Connect with me: jiro @ jirosworld.com
                    </h2>
                </div><br>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://twitter.com/jirosworld" target="_blank" class="btn btn-default btn-lg"><span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a href="https://github.com/jolarti" target="_blank" class="btn btn-default btn-lg"><span class="network-name">Github</span></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/jolarti" target="_blank" class="btn btn-default btn-lg"><span class="network-name">Linkedin</span></a>
                        </li>
                        <li>
                            <a href="http://jolarti.exto.nl/" target="_blank" class="btn btn-default btn-lg"><span class="network-name">My art &amp; comics</span></a>
                        </li>
                    </ul>
                </div>
            </div><!-- /.container -->
        </div>
    </div>
</div><!-- /.banner -->
<div class="divider-jiro"></div><!-- einde page entry -->
<div class="postmetadata">
    <?php the_tags('Tags: ', ', ', '<br />'); ?>Posted in <?php the_category(', ') ?> | <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
</div>
<div class="navigation">
    <div class="next-posts">
        <?php next_posts_link('&laquo; Older Entries') ?>
    </div>
    <div class="prev-posts">
        <?php previous_posts_link('Newer Entries &raquo;') ?>
    </div>
</div>

<?php get_footer(); ?>