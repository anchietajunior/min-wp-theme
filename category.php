<?php get_header(); ?>
    <div class="container c2">
        <ul class="list-group">
            <?php if (have_posts()): while (have_posts()) : the_post();?>
                <li class="list-group-item"><?php the_title();?> <a href="<?php the_Permalink()?>">Ver Mais</a></li>
            <?php endwhile; else:?>
		    <?php endif;?>    
        </ul>
    </div>
<?php get_footer(); ?>