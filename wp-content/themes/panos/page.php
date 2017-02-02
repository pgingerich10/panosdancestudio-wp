<?php get_header(); ?>

    <section>

        <article> 
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <?php if (has_post_thumbnail()): ?>
                    <div class="featured-img" style="background-image:url('<?php the_post_thumbnail_url(); ?>')"></div>
                <?php endif; ?>
            <div class="page-content">
                <h2>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <?php the_content(); ?>
            </div>
            <div class="clear-fix"></div>

        </article>

        <?php endwhile; endif; ?>
        
        <!-- blog sidebar -->
        <?php dynamic_sidebar('blog-sidebar'); ?>
        
    </section>

<?php get_footer(); ?>