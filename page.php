<?php get_header(); ?>
    <div class="container c2">
        <?php if (have_posts()): while (have_posts()) : the_post();?>
		 
			<h2><?php the_title();?></h2>
			
			<?php the_content();?>
			
		 <?php endwhile; else:?>
		<?php endif;?>
    </div>
<?php get_footer(); ?>