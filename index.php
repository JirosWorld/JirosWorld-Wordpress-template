<?php get_header(); ?>

<div>

    <div class="entry">
        
        <a id="home"></a>
        <div class="intro-header">
            <div class="bg-overlay">
                <div class="container">
                    <div class="row mijnrij">
                        <div class="col-lg-12">
                            <div class="intro-message">
                                <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                                <h3>
                                    <div class="description"><?php bloginfo( 'description' ); ?></div>
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
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div id="jolarti">

            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

<div class="meta">
<small><em>Posted on:</em> <?php the_time('F jS, Y') ?> <em>by</em> <?php the_author() ?> in <?php the_category(); ?>
    <?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?></small>
</div>

            <div class="entry">
                <?php the_content(); ?>
            </div>

            <div class="postmetadata">
                <?php the_tags( 'Tags: ', ', ', '<br />' ); ?>
                Posted in <?php the_category( ', ' ) ?> |
                <?php comments_popup_link( 'No Comments &#187;', '1 Comment &#187;', '% Comments &#187;' ); ?>
            </div>

    </div>

    <?php endwhile; ?>


    <?php else : ?>

        <h2>Not Found</h2>

    <?php endif; ?>
        
<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
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
        <div class="meta">
<em>Posted on:</em> <?php the_time('F jS, Y') ?> <em>by</em> <?php the_author() ?> <?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?>
</div>
    <p><?php the_content(); ?></p>
    
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

<?php 
    
    $args_cat = array(
        'include' => '1, 2, 3'
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
                
                    <?php get_template_part('content','portfolio'); ?>
                
                </div>
            
            <?php endwhile;
            
        endif;
        
        wp_reset_postdata();
        
    endforeach;

?>

            </div><!-- End of Portfolio img1 2 3 mijnrij row -->
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