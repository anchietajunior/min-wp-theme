<?php get_header(); ?>

     <!-- Page Content -->
    <div class="container c2">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php echo get_bloginfo('name'); ?>
                </h1>
            </div>
            <?php query_posts('showposts=1&category_name=news');?>
		        <?php if (have_posts()): while (have_posts()) : the_post();?>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4><i class="fa fa-fw fa-check"></i> <?php the_title();?></h4>
                            </div>
                            <div class="panel-body">
                                <p><?php the_content(); ?></p>
                                <a href="<?php the_Permalink()?>" class="btn btn-default">Veja Mais</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; else:?>
	        <?php endif;?>
            <?php query_posts('showposts=1&category_name=news&offset=1');?>
		        <?php if (have_posts()): while (have_posts()) : the_post();?>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4><i class="fa fa-fw fa-gift"></i>  <?php the_title();?></h4>
                            </div>
                            <div class="panel-body">
                                <p><?php the_content( 'Continue reading ' ); ?></p>
                                <a href="<?php the_Permalink()?>" class="btn btn-default">Veja Mais</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; else:?>
	        <?php endif;?>
            <?php query_posts('showposts=1&category_name=news&offset=2');?>
		        <?php if (have_posts()): while (have_posts()) : the_post();?>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4><i class="fa fa-fw fa-gift"></i>  <?php the_title();?></h4>
                            </div>
                            <div class="panel-body">
                                <p><?php the_content( 'Continue reading ' ); ?></p>
                                <a href="<?php the_Permalink()?>" class="btn btn-default">Veja Mais</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; else:?>
	        <?php endif;?>
        </div>
        <!-- /.row -->

<?php get_footer(); ?>