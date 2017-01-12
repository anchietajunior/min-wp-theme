<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>
            <?php if (is_home()){
		        bloginfo('name');
		            }elseif (is_category()){
		                single_cat_title(); echo ' -  ' ; bloginfo('name');
		            }elseif (is_single()){
		                single_post_title();
		            }elseif (is_page()){
		                bloginfo('name'); echo ': '; single_post_title();
		            }else {
		        wp_title('',true);
		    } ?>
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/vendor/bootstrap.min.css">
        <style type="text/css" media="screen">
            @import url( <?php bloginfo('stylesheet_url'); ?> );
        </style>
        
    <?php wp_head(); ?>
    </head>
    <body>
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo get_settings('home'); ?>">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo get_page_link(10); ?>">Contato</a>
                    </li>

                    <?php $id_da_categoria = get_cat_id('Notícias'); $link_da_categoria = get_category_link($id_da_categoria); ?>
				    <li><a href="<?php echo $link_da_categoria; ?>">Notícias</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
