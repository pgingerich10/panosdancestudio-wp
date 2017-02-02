<?php get_header(); ?>
    
    <section>
    
    	<article style="min-height:300px;">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<?php if (has_post_thumbnail()): ?>
				<div style="float:left;margin-right:20px;">
					<?php the_post_thumbnail('thumbnail'); ?>
				</div>
			<?php endif; ?>
			<div>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php the_excerpt(); ?>
			</div>
			<div style="clear:both"></div>
		<?php endwhile; endif; ?>
    	</article>
        
    </section>
        
<?php get_footer(); ?>
