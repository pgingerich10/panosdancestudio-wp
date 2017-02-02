<?php get_header(); ?>

    <section>
        
        <!-- posts/pages -->
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        
            <article>            
                <h2>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <?php the_content(); ?>
            </article>
        
            <!-- featured image -->
            <?php if (has_post_thumbnail()): ?>
                <div class="parallax" style="background-image:url('<?php the_post_thumbnail_url(); ?>')"></div>
            <?php endif; ?>
        <?php endwhile; endif; ?>
        
        <!-- blog sidebar -->
        <?php dynamic_sidebar('blog-sidebar'); ?>
        
    </section>


<?php get_footer(); ?>